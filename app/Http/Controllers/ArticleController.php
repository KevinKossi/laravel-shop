<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index()
    {


        return view("article.index", ['articles' => Article::all()]);
    }

    public function show(Article $article)
    {
        return view('article.show',compact('article'));
    }

    public function indexAdmin()
    {

        return view("article.adminindex", ['articles' => Article::all()]);
    }
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $article = new Article();
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];

        $article->img_url = $request->file('img')->store('article_images');
        $article->img_url = asset("storage" . "/" . $article->img_url);
        $article->save();

        return redirect(route('admin.articles.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update(request()->validate([

            'title' => 'required',
            'content' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]));
     
        if ($request->exists('img')){

            $article->img_url = $request->file('img')->store('product_images');
            $article->img_url = asset("storage" . "/" . $article->img_url);
            $article->save();
        }


        return redirect(route('admin.articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('admin.articles.index'));
    }

}
