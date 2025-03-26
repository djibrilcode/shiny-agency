<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index() {
      $articles = Article::all();
      return view('article.index', compact('articles'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $article = new Article();
        $article->designation = $request->designation;
        $article->prix_HT = $request->pri_HT;
        $article->tva = $request->tva;
        $article->stock = $request->stock;
        $article->save();
        return redirect()->route('article.index')->with('success','article created successful')
        */
        Article::create($request->all());
        return redirect()->route('article.index')->with('success', 'article created successful.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route('article.index')->with('success', 'article updated successful.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success','article deleted successful');
    }
}
