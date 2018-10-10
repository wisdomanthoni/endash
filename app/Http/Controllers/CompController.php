<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;

class CompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp = Competition::all();
        return view('matches.competitions.index')->with('competitions', $comp);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matches.competitions.create');
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
            'image' => 'required'
        ]);

        $image = $this->uploadImage($request);

        $comp = new Competition;
        $comp->image = $image;
        $comp->name = $request->input('name');
        $comp->start = $request->input('start');
        $comp->end = $request->input('end');
        $comp->save();

        $notification = array(
            'message' => 'Competition Created',
            'alert-type' => 'success'
        );
           return redirect(route('competitions.index'))->with($notification);
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
        $comp = Competition::findorfail($id);
        return view('matches.competitions.edit')->with('competition', $comp);
   
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

        $comp = Competition::findorfail($id);
        $comp->name = $request->input('name');
        $comp->start = $request->input('start');
        $comp->end = $request->input('end');

        if ($request->image) {
            $pic = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = 'competition' . '-' . time() . '.' . $extension;
            $picUrl = $pic->storeAs('/public/competitions', $filename, 'public');
            $comp->image = '/' . $picUrl;
        }
        $comp->save();

        $notification = array(
            'message' => 'Competition Updated',
            'alert-type' => 'success'
        );
           return redirect(route('competitions.index'))->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comp = Competition::find($id);
        $comp->delete();
        $notification = array(
            'message' => 'Competition Deleted',
            'alert-type' => 'info'
        );        
        return redirect()->route('competitions.index')->with($notification);

    }

    public function uploadImage(Request $request)
    {
        $picUrl = '';

        if ($request->image) {
            $pic = $request->file('image');
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = 'competition' . '-' . time() . '.' . $extension;
            $picUrl = $pic->storeAs('/public/competitions', $filename, 'public');
        }

        return '/' . $picUrl;
    }
}
