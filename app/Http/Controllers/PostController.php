<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::where('created_at','>',date('Y-m-d H:i:s'))
            ->whereNotIn('id' , [1 ,2 ])
            ->take(10)
            ->offset(1000);
        dd($posts->toSql(), $posts->getBindings());
        dd($posts->toArray());
    }

    public function create()
    {
        $models = Post::orderBy('id', 'DESC')->get();
        return view('post.create',[
            'models' => $models
        ]);
    }
    public function store()
    {
        $model = new Post();
        $model->title = "my new post";
        $model->description = "...";
        if($model->save())
        {
            return "save ok";
        }
        else
        {
            return "not save";
        }
    }

    public function edit($id)
    {
        $model = Post::findOrFail($id);
        $model->title = "edited";
        $model->description = "...";
        if($model->save())
        {
            return "edit ok";
        }
        else
        {
            return "not edit";
        }
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
        $model = Post::findOrFail($id);
        $model->delete();
    }
}
