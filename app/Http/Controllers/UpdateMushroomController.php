<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UpdateMushroomController extends Controllers
{
    public function index($id)
    {
        $mushroom = DB::table('Mushroom')->where('id',$id)->get();
        return view('updateMushroom', compact('mushroom'));
    }

    public function updateMushroom(Request $request)
    {
        DB::table('mushroom')->where('id',$request->id)->update([
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