<?php

namespace App\Http\Controllers;

use App\Article;
use function compact;
use function dd;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use function view;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles=Article::latest()->get();

        //return $articles;
        return view('articles.index',compact('articles'));
    }


    public function show($id)
    {
        $articles=Article::Findorfail($id);
        return view('articles.show',compact('articles'));
    }

    public function create()
    {
        //return 'hi create';
        return view('articles.create');
    }


    public function store(Requests\CreateArticleRequest $request)
    {

        $input=$request->all();
        $input['published_at']=Carbon::now();
        Article::create($input);
        return redirect('/articles');
    }

    public function edit($id)
    {
        $article=Article::findorfail($id);
        return view('articles/edit',compact('article'));
    }

    public function update(Requests\CreateArticleRequest $request,$id)
    {
        $article=Article::findorfail($id);

        $article->update($request->all());
        return redirect('/articles');
    }
}

