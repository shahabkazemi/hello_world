<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(Request $reguest, $id){
        dd($reguest->all(), $id);
        return view('home');
    }

    public function articles(){
        $result = DB::table('articles')->get();
        dd($result);
    }
}
