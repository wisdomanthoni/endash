<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::paginate();
        return view('matches.clubs.index')->with('clubs', $clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matches.clubs.create');

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
            'image' => 'required'
        ]);

        $image = $this->uploadImage($request);

        $club = new Club;
        $club->image = $image;
        $club->name = $request->input('name');
        $club->save();

        $notification = array(
            'message' => 'Club Created',
            'alert-type' => 'success'
        );
           return redirect(route('clubs.index'))->with($notification);
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
        $club = Club::findorfail($id);
        return view('matches.clubs.edit')->with('club', $club);
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
        ]);

        $club = Club::findorfail($id);
        $club->name = $request->input('name');
        
        
        if ($request->image) {
            $pic = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = 'club' . '-' . time() . '.' . $extension;
            $picUrl = $pic->storeAs('/public/clubs', $filename, 'public');
            $club->image = '/' . $picUrl;
        }

        $club->save();

        $notification = array(
            'message' => 'Club Updated',
            'alert-type' => 'success'
        );
           return redirect(route('clubs.index'))->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);
        $club->delete();
        $notification = array(
            'message' => 'Club Deleted',
            'alert-type' => 'info'
        );        
        return redirect()->route('clubs.index')->with($notification);

    }

     public function uploadImage(Request $request)
    {
        $picUrl = '';

        if ($request->image) {
            $pic = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = 'club' . '-' . time() . '.' . $extension;
            $picUrl = $pic->storeAs('clubs', $filename, 's3');
            \Storage::disk('s3')->setVisibility($picUrl, 'public');

        }

        return 'https://s3.amazonaws.com/enyimbafc/' . $picUrl;
    }
}
