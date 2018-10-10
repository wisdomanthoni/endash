<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = Season::all();
        return view('matches.seasons.index')->with('seasons', $seasons);
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
        $this->validate($request, [
            'name' => 'required',
            'start' => 'required',
            'end'   => 'required',
        ]);

        $season = new Season;
        $season->name = $request->input('name');
        $season->start = $request->input('start');
        $season->end = $request->input('end');
        $season->save();

        $notification = array(
            'message' => 'New Season Added',
            'alert-type' => 'success'
        );
           return redirect(route('seasons.index'))->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request, [
            'name' => 'required',
            'start' => 'required',
            'end'   => 'required'
        ]);

        $season = Season::findorfail($id);
        $season->name = $request->input('name');
        $season->start = $request->input('start');
        $season->end = $request->input('end');

        $season->save();

        $notification = array(
            'message' => 'Season Updated',
            'alert-type' => 'success'
        );
           return redirect(route('seasons.index'))->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::find($id);
        $season->delete();
        $notification = array(
            'message' => 'Season Deleted',
            'alert-type' => 'info'
        );        
        return redirect()->route('seasons.index')->with($notification);

    }
}
