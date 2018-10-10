<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            'body' => 'required',
            'image' => 'required'
        ]);

        $articles = new Article;
        $articles->image = $request->image;
        $articles->title = $request->title;
        $articles->body = $request->body;
        $articles->save();
        
        $notification = array(
            'message' => ' Article Created Successfully',
            'alert-type' => 'info'
        );

        return redirect(route('articles.index'))->with($notification);
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
        $articles = Article::find($id);
        return view('articles.edit', compact('articles'));
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
        'title' => 'required',
        'body' => 'required'
    ]);

     $articles = Article::where('id', $id)->first();
     $articles->image = $request->image;
     $articles->title = $request->title;
     $articles->body = $request->body;
     $articles->save();

     $notification = array(
            'message' => ' Article Updated Successfully',
            'alert-type' => 'info'
        );
     return redirect(route('articles.index'))->with($notification);
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::where('id', $id)->delete();
        $notification = array(
            'message' => ' Article Deleted Successfully',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }

    public function uploadImage(Request $request)
    {
        $picUrl = '';

        if ($request->pic) {
            $pic = $request->file('pic');
            $extension = $request->file('pic')->getClientOriginalExtension();
            $filename = 'film-photo-' . time() . '.' . $extension;
            $picUrl = $pic->storeAs('/players', $filename, 'public');
        }

        return '/' . $picUrl;
    }
}
