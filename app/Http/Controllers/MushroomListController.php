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

    public function addMushroom(Request $request)
    {
        DB::table('mushroom')->insert([
            ['nameLat' => $request->input('nameLat'), 
            'nameFr' => $request->input('nameFr'), 
            'surname' => $request->input('surname'),
            'edibility' => $request->input('edibility'),
            'biotope' => $request->input('biotope'),
            'stipe' => $request->input('stipe'),
            'cap' => $request->input('cap'),
            'trophic_status' => $request->input('trophic_status'),
            'smell' => $request->input('smell'),
            'groupe' => $request->input('groupe'),
            'lames' => $request->input('lames'),
            'confusion' => $request->input('confusion'),
            'flesh' => $request->input('flesh')]
        ]);

        return redirect(url('/mushroomList'));
    }

    public function deleteMushroom($id_mush){
        $mushroom = DB::table('Mushroom')->where('id', $id_mush)->delete();
        return redirect(url('/mushroomList'));
    }

}