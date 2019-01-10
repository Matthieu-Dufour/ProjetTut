<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
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
    public function index(Request $request, $fav_id)
    {
        $fav = DB::table('Favoris')->where('user_id', "=", $request->user()->id)->where('id', "=", $fav_id)->get();
        return view('favoris', compact('favoris'));
    }

    public function afficher($id_favoris)
    {
        $fav = DB::table('favoris')->where('id', '=', $id_favoris)->get();
        $lien = DB::table('Lien')->where('id_favoris', $id_favoris)->get();
        for($i = 0; $i < count($lien); $i++){
            $mushrooms[] = DB::table('Mushroom')->where('id', $lien[$i]->id_mushroom)->get();
        }
        return view('favoris', compact('fav'), compact('mushrooms'));
    }

}