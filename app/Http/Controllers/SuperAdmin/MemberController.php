<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $members = Member::latest()->get();
        return view('superadmin.member.index', compact('members'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('superadmin.member.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view('superadmin.member.edit', compact('member'));
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


        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',

        ]);

        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('user'))
            {
                Storage::disk('public')->makeDirectory('user');
            }
//            delete old post image
            if(Storage::disk('public')->exists('user/'.$member->image))
            {
                Storage::disk('public')->delete('user/'.$member->image);
            }
            $memberImage = Image::make($image)->resize(900,650)->stream();
            Storage::disk('public')->put('user/'.$imageName,$memberImage);
            
            $destinationPath = public_path('/storage/user/');
            $resize = Image::make($userImage)->resize(900,650);
            $image->move($destinationPath,$imageName,$resize);


        } else {
            $imageName = "default.png";
        }
        


        $member = Member::find($id);
        $member->name = $request->name;
        $member->image = $imageName;
        $member->phone = $request->phone;
        $member->description = $request->description;
        $member->mobile = $request->mobile;
        $member->facebook = $request->facebook;
        $member->twitter = $request->twitter;
        $member->instagram = $request->instagram;
        $member->username = $request->username;
       
        $member->email = $request->email;
        $member->save();
        
        Toastr::success('User Successfully Saved', 'Success');
        return redirect()->route('superadmin.member.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::find($id)->delete();
        Toastr::success('User Successfully Deleted','Success');
        return redirect()->back();
    }
}
