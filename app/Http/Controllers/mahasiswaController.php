<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index (){
        return view ('views.extend.isi1');
    }
}
