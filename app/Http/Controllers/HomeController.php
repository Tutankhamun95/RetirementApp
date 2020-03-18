<?php

namespace App\Http\Controllers;
use App\Project;
use App\School;
use App\Member;
use App\User;
use App\Agent;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $schools = School::all();
        $members = Member::all();
        $agents = Agent::all();
        return view('welcome', compact('schools','projects','members','agents'));
    }

    // public function show(Project $project)
    // {
    //     $projects = Project::all();
    //     $schools = School::all();
    //     $participants = Participant::all();
    //     return view('welcome',compact('projects'));
    // }
}
