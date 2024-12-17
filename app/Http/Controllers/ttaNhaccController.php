<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ttaNhaccmodel; 
class ttaNhaccController extends Controller
{
    //
    public function list()
    {
        $ttanhacc = ttaNhaccmodel::paginate(10);
        return view('ttaNhacc.ttalist',['ttanhacc'=>$ttanhacc]);

    }
}
