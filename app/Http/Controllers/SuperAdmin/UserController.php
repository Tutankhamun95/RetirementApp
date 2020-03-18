<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;
use Brian2694\Toastr\Facades\Toastr;

use App\School;
use App\Notifications\StudentPostApproved;
use App\Notifications\NewPostNotify;
// use App\Subscriber;
use App\Member;
use App\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        
        return view('superadmin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('superadmin.user.create' ,compact('roles'));
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
            
            
            'role_id' => 'required',
            'name' => 'required',
            'image' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        $user = User::findOrFail(Auth::id());
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('profile'))
            {
             Storage::disk('public')->makeDirectory('profile');
            }
//            Delete old image form profile folder
            if (Storage::disk('public')->exists('profile/'.$user->image))
            {
                Storage::disk('public')->delete('profile/'.$user->image);
            }
            $profile = Image::make($image)->resize(500,500)->stream();
            Storage::disk('public')->put('profile/'.$imageName,$profile);
        } else {
            $imageName = $user->image;
        }

        $user = new User();
        $user->id = $request->id;
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->username = $request->username;
        
        $user->approval = 0;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);

        $user->image = $imageName;
        $user->phone = $request->phone;
        $user->mobile = $request->mobile;
        $user->description = $request->description;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;



        $user->save();
        if($request->role_id == '3' && $request->approval =='1'){
            DB::insert('insert into members (name) values(?)',[$user->name],[$user->approval]);
        }
        Toastr::success('User Successfully Saved', 'Success');
        return redirect()->route('superadmin.user.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('superadmin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
        return view('superadmin.user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug = str_slug($request->name);
        $user = User::findOrFail(Auth::id());
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('profile'))
            {
             Storage::disk('public')->makeDirectory('profile');
            }
//            Delete old image form profile folder
            if (Storage::disk('public')->exists('profile/'.$user->image))
            {
                Storage::disk('public')->delete('profile/'.$user->image);
            }
            $profile = Image::make($image)->resize(500,500)->stream();
            Storage::disk('public')->put('profile/'.$imageName,$profile);
        } else {
            $imageName = $user->image;
        }


        $user = User::find($id);
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->approval = $request->approval;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->image = $imageName;
        $user->phone = $request->phone;
        $user->mobile = $request->mobile;
        $user->description = $request->description;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;



        $user->save();
        if($request->approval =='1'){
            DB::insert('insert into members (name) values(?)',[$user->name],[$user->approval]);
        }
        Toastr::success('User Successfully Saved', 'Success');
        return redirect()->route('superadmin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        Toastr::success('User Successfully Deleted','Success');
        return redirect()->back();
    }
}
