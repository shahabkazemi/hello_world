<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        $article = Article::first();
        $count = Article::count();
        $articles = Article::withoutGlobalScope('status')->where('id', '>', 0)->get();

        //local scope
        // $articles = Article::status()->get(); //dar in ghesmat bayesti global scope ghire faal garddad

        $articles = Article::withoutGlobalScope('status')->status()->get();


        $article = Article::create(['Title'=>'HELLO', 'Description'=>'SALAM']);

        return view('articles', ['articles' => $articles, 'article' => $article, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = $request->all();
        unset($article['_token']);
        $id = DB::table('articles')->insertGetId($article);

        $articles = DB::table('articles')->get();
        $count = DB::table('articles')->count();

        $article = DB::table('articles')->find($id);
        return view('articles', ['articles' => $articles, 'article' => $article, 'count' => $count]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = DB::table('articles')->find($id);
        return view('articles_update', ['article' => $article, 'id'=>$id]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = $request->all();
        DB::table('articles')->where('id', $id)->update(['Title'=>$article['Title'], 'Description' => $article['Description']]);

        $articles = DB::table('articles')->get();
        $count = DB::table('articles')->count();
        $article = DB::table('articles')->find($id);
        return view('articles', ['articles' => $articles, 'article'=>$article, 'count' => $count, 'goto'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('articles')->delete($id);

        $articles = DB::table('articles')->get();
        $count = DB::table('articles')->count();
        $article = DB::table('articles')->find($id - 1 );
        return view('articles', ['articles' => $articles, 'article'=>$article, 'count' => $count, 'goto'=>$id - 1]);
    }
}
