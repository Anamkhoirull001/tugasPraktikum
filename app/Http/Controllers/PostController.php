<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('postt');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        $model = new Post;
        $datas = $model->all();
        // return view('read', );

        return redirect('Postt', ['datas' => $datas])->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function read()
    {
        $model = new Post;
        $datas = $model->all();
        return view('read', ['datas' => $datas]);
    }
}
