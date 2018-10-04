<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('players.index')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
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
            'position' => 'required',
            'email' => 'required',
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'squad_number' => 'required',
            'date_of_birth' => 'required',
            'previous_club' => 'required'
        ]);

        $players = new Player;
        $players->position = $request->input('position');
        $players->email = $request->input('email');
        $players->name = $request->input('name');
        $players->city = $request->input('city');
        $players->country = $request->input('country');
        $players->squad_number = $request->input('squad_number');
        $players->date_of_birth = $request->input('date_of_birth');
        $players->previous_club = $request->input('previous_club');
        $players->about = $request->input('about_player');
        $players->facebook = $request->input('facebook');
        $players->twitter = $request->input('twitter');
        $players->instagram = $request->input('instagram');

        //dd($request->all());
        $players->save();
        $notification = array(
            'message' => 'Player Created',
            'alert-type' => 'success'
        );
        return redirect(route('players.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::where('id', $id)->get();
        return view('players.show')->with('player', $player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        return view('players.edit')->with('player', $player);
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
            'position' => 'required',
            'email' => 'required',
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'squad_number' => 'required',
            'date_of_birth' => 'required',
            'previous_club' => 'required'
        ]);

        $players = Player::where('id', $id)->first();
        $players->position = $request->input('position');
        $players->email = $request->input('email');
        $players->name = $request->input('name');
        $players->city = $request->input('city');
        $players->country = $request->input('country');
        $players->squad_number = $request->input('squad_number');
        $players->date_of_birth = $request->input('date_of_birth');
        $players->previous_club = $request->input('previous_club');
        $players->about = $request->input('about_player');
        $players->save();
        
        $notification = array(
            'message' => 'Player Updated',
            'alert-type' => 'info'
        );
        return redirect(route('players.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player->delete();
        $notification = array(
            'message' => 'Player Deleted',
            'alert-type' => 'info'
        );        
        return redirect()->route('players.index', compact('players'))->with($notification);

    }
}
