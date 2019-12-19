<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items=Item::all();
        return view('admin.admindash',compact('items'));
    }
}
