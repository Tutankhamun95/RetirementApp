<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Reading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class ReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readings = Reading::latest()->get();
        return view('superadmin.reading.index', compact('readings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.reading.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
            $slug = str_slug($request->title);
            $reading = new Reading();
            $reading->user_id = Auth::id();
            $reading->title = $request->title;
            $reading->slug = $slug;
            $reading->DOI = $request->DOI;
            $reading->year = $request->year;
            $reading->type = $request->type;

            $reading->save();
            Toastr::success('Reading Saved Successfully', 'Success');
            return redirect()->route('superadmin.reading.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function show(Reading $reading)
    {
        return view('superadmin.reading.show',compact('reading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function edit(Reading $reading)
    {
        // $reading = Reading::find($id);
        return view('superadmin.reading.edit', compact('reading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reading $reading)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
            $slug = str_slug($request->title);
            $reading->user_id = Auth::id();
            $reading->title = $request->title;
            $reading->slug = $slug;
            $reading->DOI = $request->DOI;
            $reading->year = $request->year;
            $reading->type = $request->type;

            $reading->save();
            Toastr::success('Reading Saved Successfully', 'Success');
            return redirect()->route('superadmin.reading.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reading::find($id)->delete();
        Toastr::success('School Successfully Deleted','Success');
        return redirect()->back(); 
    }
}
