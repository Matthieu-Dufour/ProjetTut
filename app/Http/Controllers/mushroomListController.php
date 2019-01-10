<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MushroomListController extends Controller
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
    public function index()
    {   
        $list = DB::table('Mushroom')->get();
        if(Auth::check()){
            $lien = DB::table('favoris')->where('user_id', Auth::user()->id)->get();
        }
        return view('mushroomList', compact('list'), compact('lien'));
    }

    public function addMushroomFav(){
        DB::table('lien')->insert(
            ['id_favoris' => $request->favoris, 'id_mushroom' => $request->mushroom]
        );
        $message = "Ajouté aux favoris";
        return MushroomListController::index();
    }

}