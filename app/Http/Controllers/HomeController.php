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
        $articles = DB::table('articles')->get();
        $sql = DB::table('articles')->toSql();
        $articles = DB::table('articles')->where("id", '2')->get();
        $articles = DB::table('articles')->where('id', '>', '3')->get();
        $article = DB::table('articles')->find(3);
        $count = DB::table('articles')->count();
        //dd($articles);
        // dd($sql);
        //return view('articles', ['articles'=>$articles]);
        // dd(compact('articles'));
        //return view('articles', compact('articles'));
        return view('articles', ['articles' => $articles, 'article' => $article, 'count' =>     $count]);
        // dd($articles);
    }
}
