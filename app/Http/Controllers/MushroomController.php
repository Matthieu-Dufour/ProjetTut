<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MushroomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $liste = DB::table('Mushroom')->where('id', $id)->get();
        $edibility = DB::table('Edibility')->where('id', $liste[0]->edibility)->get();
        
        return view('listeChampi', compact('mushroom'), compact('edibility'));
    }
}