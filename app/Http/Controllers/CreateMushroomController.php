<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CreateMushroomController extends Controllers
{
    public function index()
    {
        return view('createMushroom');
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
}