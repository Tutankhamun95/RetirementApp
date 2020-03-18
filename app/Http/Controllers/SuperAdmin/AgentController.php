<?php

namespace App\Http\Controllers\SuperAdmin;


use App\School;
use App\Notifications\StudentPostApproved;
use App\Notifications\NewPostNotify;
use App\Member;
use App\User;
use App\Project;
use App\Agent;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::latest()->get();
        return view('superadmin.agent.index',compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('superadmin.agent.create');
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
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('agent'))
            {
                Storage::disk('public')->makeDirectory('agent');
            }

            $agentImage = Image::make($image)->stream();
            Storage::disk('public')->put('agent/'.$imageName,$agentImage);
            
            $destinationPath = public_path('/storage/agent/');
            $image->move($destinationPath,$imageName);


        } else {
            $imageName = "default.png";
        }
        
        $agent = new Agent();
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->phone = $request->phone;
        $agent->mobile = $request->mobile;
        $agent->facebook = $request->facebook;
        $agent->twitter = $request->twitter;
        $agent->instagram = $request->instagram;
        $agent->body = $request->body;
        $agent->slug = $slug;
        $agent->image = $imageName;
        
        $agent->save();
        
        Toastr::success('Project Successfully Saved :)','Success');
        return redirect()->route('superadmin.agent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        return view('superadmin.agent.show',compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('superadmin.agent.edit',compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('agent'))
            {
                Storage::disk('public')->makeDirectory('agent');
            }
//            delete old post image
            if(Storage::disk('public')->exists('agent/'.$agent->image))
            {
                Storage::disk('public')->delete('agent/'.$agent->image);
            }
            $agentImage = Image::make($image)->resize(900,650)->stream();
            Storage::disk('public')->put('agent/'.$imageName,$agentImage);
            
            $destinationPath = public_path('/storage/agent/');
            $resize = Image::make($agentImage)->resize(900,650);
            $image->move($destinationPath,$imageName,$resize);


        } else {
            $imageName = $agent->image;
        }
        


        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->phone = $request->phone;
        $agent->mobile = $request->mobile;
        $agent->facebook = $request->facebook;
        $agent->twitter = $request->twitter;
        $agent->instagram = $request->instagram;
        $agent->body = $request->body;
        $agent->slug = $slug;
        $agent->image = $imageName;
        
        $agent->save();
        
        Toastr::success('Agent Successfully Updated :)','Success');
        return redirect()->route('superadmin.agent.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        if (Storage::disk('public')->exists('agent/'.$agent->image))
        {
            Storage::disk('public')->delete('agent/'.$agent->image);
        }
        $agent->delete();
        Toastr::success('Agent Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
