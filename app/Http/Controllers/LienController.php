<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//peut-être inutile -> voir MushroomListController
class LienController extends Controller
{
    public function index(Request $request, $mushroom)
    {
        $fav = DB::table('Lien')->insert(
            ['id_favoris' => $request->favoris, 'id_mushroom' => $mushroom]
        );
        $message = "Ajouté aux favoris";
        return view('mushroomList', compact('message'));
    }
}