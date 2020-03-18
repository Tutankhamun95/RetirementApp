<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Project;
use App\Member;
use App\Agent;
use Illuminate\Support\Facades\Session;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::latest()->paginate(6);
        return view('agents',compact('agents'));
    }


    public function details($slug)
    {
        $agent = Agent::where('slug',$slug)->first();
        $agents = Agent::all();
        return view('agent', compact('agent'));

    }
}
