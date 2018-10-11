<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Club;
use App\Competition;
use App\Season;
use Carbon\Carbon;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('matches.index',[
            'seasons' => Season::all(),
            'competitions' => Competition::all(),
            'matches' => Match::paginate(),
            'clubs' =>  Club::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matches.create',[
            'seasons' => \App\Season::all(),
            'competitions' => \App\Competition::all(),
            'clubs' => \App\Club::all(),
        ]);
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
            'home' => 'required',
            'away' => 'required',
            'season' => 'required',
            'date' => 'required',
            'time' => 'required',
            'competition' => 'required'
        ]);
        $datetime = Carbon::parse($request->date . $request->time);
        //dd($date);
        $matches = new Match;
        $matches->home = $request->home;
        $matches->away = $request->away;
        $matches->datetime = $datetime;
        $matches->season_id = $request->season;
        $matches->competition_id = $request->competition;
        $matches->save();

        return back()->with('success','Match Fixed Successful');

    }
     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match = Match::findorfail($id);
        return view('matches.edit',
            [
                'seasons' => \App\Season::all(),
                'competitions' => \App\Competition::all(),
                'clubs' => \App\Club::all(),
            ])
            ->with('match', $match);
    
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
            'home' => 'required',
            'away' => 'required',
            'season' => 'required',
            'date' => 'required',
            'time' => 'required',
            'competition' => 'required'
        ]);
        $datetime = Carbon::parse($request->date . $request->time);
        //dd($date);
        $matches = Match::findorfail($id);
        $matches->home = $request->home;
        $matches->away = $request->away;
        $matches->datetime = $datetime;
        $matches->season_id = $request->season;
        $matches->competition_id = $request->competition;
        $matches->home_score = $request->home_score;
        $matches->away_score = $request->away_score;
        $matches->save();

        return back()->with('success', 'Match Fixed Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
