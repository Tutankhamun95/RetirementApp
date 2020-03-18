<?php

namespace App\Http\Controllers\Student;

use App\Project;
use App\School;
use App\Member;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Auth::User()->projects()->latest()->get();
        return view('student.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();
        $members = Member::all();
        return view('student.project.create', compact('schools', 'members' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'schools' => 'required',
            'members' => 'required',
            'body' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('project'))
            {
                Storage::disk('public')->makeDirectory('project');
            }

            $postImage = Image::make($image)->resize(900,650)->stream();
            Storage::disk('public')->put('post/'.$imageName,$postImage);

        } else {
            $imageName = "default.png";
        }
        $project = new Project();
        $project->user_id = Auth::id();
        $project->title = $request->title;
        $project->slug = $slug;
        $project->image = $imageName;
        $project->body = $request->body;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        if(isset($request->status))
        {
            $project->status = true;
        }else {
            $project->status = false;
        }
        $project->is_approved = false;
        $project->save();

        $project->schools()->attach($request->schools);
        $project->members()->attach($request->members);

        // $subscribers = Subscriber::all();
        // foreach ($subscribers as $subscriber)
        // {
        //     Notification::route('mail',$subscriber->email)
        //         ->notify(new NewPostNotify($post));
        // }

        Toastr::success('Post Successfully Saved :)','Success');
        return redirect()->route('student.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        if ($project->user_id != Auth::id())
        {
            Toastr::error('You are not authorized to access this post','Error');
            return redirect()->back();
        }
        return view('student.project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        if ($project->user_id != Auth::id())
        {
            Toastr::error('You are not authorized to access this post','Error');
            return redirect()->back();
        }
        $schools = School::all();
        $members = Member::all();
        return view('author.project.edit',compact('project','schools','members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        if ($project->user_id != Auth::id())
        {
            Toastr::error('You are not authorized to access this post','Error');
            return redirect()->back();
        }

        $this->validate($request, [
            'title' => 'required',
        ]);
            $slug = str_slug($request->title);
            $project->user_id = Auth::id();
            $project->title = $request->title;
            $project->slug = $slug;
            $project->start_date = $request->start_date;
            $project->end_date = $request->end_date;
            if(isset($request->status))
            {
                $project->status = true;
            }else{
                $project->status = false;
            }

            $project->is_approved = false;

            $project->save();

            $project->schools()->sync($request->schools);
            $project->members()->sync($request->members);  

            Toastr::success('Project Updated Successfully', 'Success');
            return redirect()->route('student.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

        if ($project->user_id != Auth::id())
        {
            Toastr::error('You are not authorized to access this post','Error');
            return redirect()->back();
        }
        if (Storage::disk('public')->exists('project/'.$project->image))
        {
            Storage::disk('public')->delete('project/'.$project->image);
        }


        $project->schools()->detach();
        $project->members()->detach();
        $project->delete();
        Toastr::success('Project Successfully Deleted', 'Success');
        return redirect()->back();
    }
}
