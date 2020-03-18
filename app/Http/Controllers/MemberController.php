<?php

namespace App\Http\Controllers;

use App\School;
use App\Project;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->paginate(6);
        return view('members',compact('members'));
    }


    public function details($id)
    {
        $member = Member::where('id',$id)->first();
        $members = Member::all();
        $schools = School::all();
        $projects = Project::all();
        return view('member', compact('member','schools', 'projects'));

    }
}
