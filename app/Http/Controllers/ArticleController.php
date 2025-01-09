<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $path_image = '';

        if ($request->hasFile('image')) {
            $name_image = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('/images', $name_image, 'public');
        }

        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' =>  $path_image,
            'user_id' => auth()->user()->id
        ]);

        $article->categories()->attach($request->categories);

        return to_route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories =  Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

        $path_image = $article->image;

        if ($request->hasFile('image')) {
            $name_image = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('/images', $name_image, 'public');
        }

        $article->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' =>  $path_image,
        ]);

        $article->categories()->detach();
        $article->categories()->attach($request->categories);
        return to_route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return to_route('articles.index');
    }
}
