<?php

namespace App\Http\Controllers\SuperAdmin;


use App\School;
use App\Notifications\StudentPostApproved;
use App\Notifications\NewPostNotify;
// use App\Subscriber;
use App\Member;
use App\User;
use App\Project;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
// use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('superadmin.project.index',compact('projects'));
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
        return view('superadmin.project.create',compact('members', 'schools'));
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

            if(!Storage::disk('public')->exists('projects'))
            {
                Storage::disk('public')->makeDirectory('projects');
            }

            $projectImage = Image::make($image)->resize(900,650)->stream();
            Storage::disk('public')->put('projects/'.$imageName,$projectImage);
            
            $destinationPath = public_path('/storage/project/');
            $resize = Image::make($image)->resize(900,600);
            $image->move($destinationPath,$imageName,$resize);


        } else {
            $imageName = "default.png";
        }
        

        
        
        
    //     if ($request->hasFile('input_img')) {
    //     $image = $request->file('input_img');
    //     $name = time().'.'.$image->getClientOriginalExtension();
    //     $destinationPath = public_path('/images');
    //     $image->move($destinationPath, $name);
    //     $this->save();

    //     return back()->with('success','Image Upload successfully');
    // }
        
        // if (isset($image)) {
        // $image = $request->file('image');
        // $name = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('/storage/project');
        // $image->move($destinationPath, $name);
        // // $this->save();

        // return back()->with('success','Image Upload successfully');
        // }
        
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
        $project->is_approved = true;
        $project->save();
        

        $project->schools()->attach($request->schools);
        $project->members()->attach($request->members);

        // $subscribers = Subscriber::all();
        // foreach ($subscribers as $subscriber)
        // {
        //     Notification::route('mail',$subscriber->email)
        //         ->notify(new NewPostNotify($post));
        // }

        Toastr::success('Project Successfully Saved :)','Success');
        return redirect()->route('superadmin.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('superadmin.project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $schools = School::all();
        $members = Member::all();
        return view('superadmin.project.edit',compact('project','schools','members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

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
//            delete old post image
            if(Storage::disk('public')->exists('project/'.$project->image))
            {
                Storage::disk('public')->delete('project/'.$project->image);
            }
            $projectImage = Image::make($image)->resize(900,650)->stream();
            Storage::disk('public')->put('project/'.$imageName,$projectImage);
            
            $destinationPath = public_path('/storage/project/');
            $resize = Image::make($projectImage)->resize(900,650);
            $image->move($destinationPath,$imageName,$resize);


        } else {
            $imageName = $project->image;
        }
        


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
        $project->is_approved = true;
        $project->save();

        $project->schools()->sync($request->schools);
        $project->members()->sync($request->members);

        Toastr::success('Project Successfully Updated :)','Success');
        return redirect()->route('superadmin.project.index');
    }

    public function pending()
    {
        $projects = Project::where('is_approved',false)->get();
        return view('superadmin.project.pending',compact('projects'));
    }

    public function approval($id)
    {
        $project = Project::find($id);
        if ($project->is_approved == false)
        {
            $project->is_approved = true;
            $project->save();
            $project->user->notify(new AuthorPostApproved($project));

            // $subscribers = Subscriber::all();
            // foreach ($subscribers as $subscriber)
            // {
            //     Notification::route('mail',$subscriber->email)
            //         ->notify(new NewPostNotify($post));
            // }

            Toastr::success('Project Successfully Approved :)','Success');
        } else {
            Toastr::info('This Post is already approved','Info');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if (Storage::disk('public')->exists('project/'.$project->image))
        {
            Storage::disk('public')->delete('project/'.$project->image);
        }
        $project->schools()->detach();
        $project->members()->detach();
        $project->delete();
        Toastr::success('Project Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
