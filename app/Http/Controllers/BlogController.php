<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
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

            return json_encode(array('message' => 'Article has been successfully added.'));
    }
}
