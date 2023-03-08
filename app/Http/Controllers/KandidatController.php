<?php

namespace App\Http\Controllers;

use App\Models\kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    //
    function index(){
        $data = kandidat::all();
        return view('kandidat/index')->with('data', $data);
    }
}