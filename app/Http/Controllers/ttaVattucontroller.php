<?php

namespace App\Http\Controllers;
use App\Models\ttaVattu; 
use Illuminate\Http\Request;

class ttaVattucontroller extends Controller
{
    //
    public function list()
    {
        $ttavattu = ttaVattu::paginate(10);
        return view('ttaVattu.ttalist',['ttavattu'=>$ttavattu]);

    }
}
