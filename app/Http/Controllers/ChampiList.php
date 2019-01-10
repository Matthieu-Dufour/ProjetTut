<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampiList extends Controller
{
    public function ChampiList(){
        $mushroom = DB::table('mushroom')->get();

        return view('champignon.liste', ['champiList' => $mushroom ]);
    }
}
