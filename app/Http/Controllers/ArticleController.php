<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticles(Request $request){
        $articles = Article::all();
        foreach ($articles as $article){
            $user = User::where('id', $article->author_id)->first();
            $article->username = $user->name;
        }
        return view('pages.mainPage', ['articles'=>$articles]);
    }
    public function showArticle(Request $request){
        $article_id = $request->id;
        $article = \App\Models\Article::where('id', $article_id)->first();
        return view('pages.article', ['article'=>$article]);
    }
    public function showUpdateArticle(Request $request){
        $article_id = $request->id;
        $article = \App\Models\Article::where('id', $article_id)->first();
        return view('pages.updateArticle', ['article'=>$article]);
    }
    public function updateArticle(Request $request){
        $article_id = $request->id;
        $article = \App\Models\Article::where('id', $article_id)->first();
        $article->title = $request->title;
        $article->content = $request->contentField;
        $article->save();
        return redirect()->intended('/blog/'.$article_id);
    }

    function deleteArticle(Request $request){
        Article::where('id', $request->id)->delete();
        return redirect()->intended('/');
    }
}
