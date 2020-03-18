<?php

namespace App\Http\Controllers;

use App\School;
use App\Project;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::latest()->approved()->published()->paginate(6);
        return view('projects',compact('projects'));
    }


    public function details($slug)
    {
        $project = Project::where('slug',$slug)->first();
        $projects = Project::all();
        $schools = School::all();
        $members = Member::all();
        return view('project', compact('project','schools','members', 'randomprojects'));

    }

    // public function postBySchool($slug)
    // {
    //     $school = School::where('slug',$slug)->first();
    //     $project = $category->projects()->approved()->published()->get();
    //     return view('school',compact('school','projects'));
    // }

    // public function postByMember($slug)
    // {
    //     $member = Member::where('slug',$slug)->first();
    //     $projects = $member->projects()->approved()->published()->get();
    //     return view('member',compact('member','projects'));
    // }
}
