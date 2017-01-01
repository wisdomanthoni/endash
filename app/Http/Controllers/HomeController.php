<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $set = Setting::all()->groupBy('name');
        // return $set['played'][0]->val;
        return view('paper.home', [
            'set' => $set,
            'goll' => 5,
        ]);
    }

    public function statistics(Request $request){
       
        $key = $request->type;
        $val = $request->value;

        $setting = Setting::add($key,$val);
        
        return back()->with('success', 'Update Successful');
    }
}
