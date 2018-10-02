<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Profile::all();
        return view('players.profile')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players/create');
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
            'company' => 'required',
            'username' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required'
        ]);

        $players = new Profile;
        $players->company = $request->input('company');
        $players->username = $request->input('username');
        $players->email = $request->input('email');
        $players->first_name = $request->input('first_name');
        $players->last_name = $request->input('last_name');
        $players->address = $request->input('address');
        $players->city = $request->input('city');
        $players->country = $request->input('country');
        $players->postal_code = $request->input('postal_code');
        $players->about_me = $request->input('about_me');
        //return $request->all();
        $players->save();

        return redirect(route('profile.index'))->with('success', 'Profile Created Successfully');

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
        $players = Profile::find($id);
        return view('players.edit')->with('players', $players);
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
            'company' => 'required',
            'username' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required'
        ]);

        $players = Profile::where('id', $id)->first();
        $players->company = $request->input('company');
        $players->username = $request->input('username');
        $players->email = $request->input('email');
        $players->first_name = $request->input('first_name');
        $players->last_name = $request->input('last_name');
        $players->address = $request->input('address');
        $players->city = $request->input('city');
        $players->country = $request->input('country');
        $players->postal_code = $request->input('postal_code');
        $players->about_me = $request->input('about_me');
        //return $players;
        $players->save();

        return redirect(route('profile.index'))->with('success', 'Profile Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $players = Profile::find($id)->delete();
        //dd($players);
        return redirect(route('profile.index'), compact('players'));

    }
}
