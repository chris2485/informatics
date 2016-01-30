<?php

namespace App\Http\Controllers;

use App\Article;
use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function compose(){
        return view('blog.compose');
    }

    public function addArticle(Request $request){

        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        $article->save();

        return json_encode(array('message' => 'Article added successfully.'));

    }

    public function test() {
        $article = Article::create([
            'title' => "test",
            'body' => "test",
        ]);
        $article->save();
    }
}
