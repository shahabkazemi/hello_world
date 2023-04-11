<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleEqController extends Controller
{
    //
    public function show(){
        $articles = Article::all();
        $article = Article::find(1)->get();
        $article = Article::first();
        $articles = Article::where('id', '>', '8')->get();

        dd($articles);
        // dd($articles);
        return view('articles_eq', ['articles' => $articles]);
    }

    public function insert(){
        // $article = new Article();
        // $article->Title = 'salam salam';
        // $article->Description = 'tozihat salam salam';
        // $article->save();

        // $article = new Article(['Title' => 'hello hello', 'Description' => 'hello tozihat']);
        // $article->save();

        // $article = Article::create(['Title' => 'hello hello 2', 'Description' => 'hello tozihat 2']);

        // $article = Article::firstOrCreate(['id' => 50], ['Title' => 'hello hello 3', 'Description' => 'hello tozihat 3']);
        $article = Article::firstOrCreate(['Title' => 'سلام سلام' , 'Description' => 'توضیحات مناسب'], ['Title' => 'سلام سلام' , 'Description' => 'توضیحات مناسب']);

        dd($article);
    }

    public function update(){
        $id = 11;
        // $articles = Article::find($id)->update(['Title' => 'بروزرسانی عنوان شماره 1', 'Description' => 'توضیحات مورد نظر']);
        $articles = Article::updateOrCreate(['id' => $id], ['Title' => 'بروزرسانی عنوان شماره 2', 'Description' => '2توضیحات مورد نظر']);

        dd($articles);
    }

    public function delete(){
        $id = 6;
        // $result = Article::find($id)->delete();

        // $result = Article::where('id', $id)->delete();

        // $result = Article::destroy(14);

        // soft delete add use softDelete to model
        //$result = Article::find(20)->delete();

        // $result = Article::withTrashed()->find(20);

        // $result = Article::onlyTrashed()->get();


        // $result = Article::onlyTrashed()->find(20);
        // $result->restore();

        $result = Article::where('id' , 20)->forceDelete();
        dd($result);

    }
}
