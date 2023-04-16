<?php

namespace App\Http\Controllers;

use File;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){

        $user = User::find(1);
        dd($user->profile);

        // $profile = Profile::find(1);
        // dd($profile->user);

        // dd($reguest->all(), $id);
        return view('home');
    }

    public function articles(){
        $articles = DB::table('articles')->get();
        $sql = DB::table('articles')->toSql();
        $articles = DB::table('articles')->where("id", '2')->get();
        $articles = DB::table('articles')->where('id', '>', '3')->get();
        $article = DB::table('articles')->find(1);
        $count = DB::table('articles')->count();
        //dd($articles);
        // dd($sql);
        //return view('articles', ['articles'=>$articles]);
        // dd(compact('articles'));
        //return view('articles', compact('articles'));
        return view('articles', ['articles' => $articles, 'article' => $article, 'count' => $count]);
        // dd($articles);
    }

    public function rename_by_youtube_list(){
        $file = fopen(storage_path("youtube_list.txt"), "r");
        $list = [];

        while(!feof($file)) {
            $row['id'] = str_replace("\n","",fgets($file));
            $row['value'] = str_replace("\n","",fgets($file));
            array_push($list, $row);
        }

        fclose($file);
        $path = "E:/Training/آموزش زبان آلمانی/@BambooLanguages/";
        $pathre = "E:/Training/آموزش زبان آلمانی/@BambooLanguages/rename/";

        set_time_limit(0);
        ini_set('max_execution_time', '0');
        foreach ($list as $key => $value) {
            // echo sprintf("%03d", $value['id'])  . ' - ' . $value['value'] . '<br>';
            $find_file = File::glob($path.'/*'.$value['value'].'*');
            if (count($find_file) > 0){
                $pattern= "/(?<=\/\/)(.*)(?=\s\[)/";
                preg_match($pattern, $find_file[0], $matches);
                if (count($matches) > 0 ){
                    $title = preg_replace('/｜ آموزش زبان آلمانی ｜/i', '', $matches[0]);
                    $ext = substr(strrchr($find_file[0], '.'), 1);
                    print_r($pathre . sprintf("%03d", $value['id']) . ' - ' . $title .'.'.$ext );
                    // File::copy($find_file[0], $pathre . sprintf("%03d", $value['id']) . ' - ' . $title .'.'.$ext);
                }

                echo '<br>';
                echo $find_file[0] . '<br>';
                //File::copy($find_file[0], $pathre . sprintf("%03d", $value['id']));
            }
            //File::copy($path . sprintf("%04d", 333));
        }
        // File::copy(storage_path("/for_test/hello.txt"), storage_path("/for_test/sub/youtube_list.txt"));
        //File::copy("E:/Training/آموزش زبان آلمانی/test.txt", "E:/Training/آموزش زبان آلمانی/sub/test.txt");

        // $allFiles = File::files('E:/Training/آموزش زبان آلمانی/@BambooLanguages/');
        // $regex= "/(?<=\｜\s)(.*)(?=\s\[)/";

        // $matchingFiles = preg_grep($regex, $allFiles);
        // foreach ($matchingFiles as $key => $value) {
        //     $value
        // }

        //dd($find_file);
    }

    public function post_comments($id){
        $post = Post::find($id);
        dd($post->comments);

        $post = Post::find($id)->commnets->where('status', 1);
        dd($post->comments);
    }
}
