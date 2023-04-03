<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $reguest, $id){
        dd($reguest->all(), $id);
        return view('home');
    }
}
