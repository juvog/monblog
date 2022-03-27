<?php

namespace App\Manager;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleManager
{
    public function build(Article $article, ArticleRequest $request)
    {
        // dd($request->all());
        $article->title = $request->input('title');
        $article->category_id =$request->input('category');
        $article->subtitle = $request->input('subtitle');
        $article->content = $request->input('content');
        $article->save();
    }
}
