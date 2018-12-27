<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home()
    {
        $articles = Article::paginate(10);
        //return response()->json($articles); 
        return view('home', ['articles'=>$articles]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        

        $article = new Article();
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->save();

        return redirect('/')->with('info', 'Article added succussfully');
    }

    public function update($id)
    {
        $article = Article::find($id);
        if(!$article)
        {
            return abort(404);
        }
        return view('update', ['article'=>$article]);
    }

    public function edit(Request $request ,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        );
        
        $article = Article::find($id);
        if(!$article)
        {
            return abort(404);
        }

        Article::where('id', $id)
        ->update($data);
        return redirect('/')->with('info', 'Article Updated succussfully');
    }

    public function delete($id)
    {

        $article = Article::find($id);
        if(!$article)
        {
            return abort(404);
        }

        Article::where('id', $id)
        ->delete();

        return redirect('/')->with('info', 'Article Deleted succussfully');
    }

    public function read($id)
    {
        $article = Article::find($id);
        if(!$article)
        {
            return abort(404);
        }
        return view('read', ['article'=>$article]);
    }
}
