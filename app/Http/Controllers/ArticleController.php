<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Manager\ArticleManager;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleManager;
    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create', [
            'categories'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $request->validated();

        $this->articleManager->build(new Article(),$request);

        return redirect()->route('articles.index')->with('success', 'L article a bien été sauvegardé');
    }

    public function delete(Article $article){
        // dd($article);
        $article->delete();
        return redirect()->route('articles.index')->with('success', "L'article a bien été supprimé");
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
            'categories' => Category::all()
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $this->articleManager->build($article, $request);


        return redirect()->route('articles.index')->with('success', 'L article a bien été modifié');
    }

}
