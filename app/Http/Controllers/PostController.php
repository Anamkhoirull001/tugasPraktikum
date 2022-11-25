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
        return redirect('/read')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function read()
    {
        $model = new Post;
        $datas = $model->all();
        return view('read', ['datas' => $datas]);
    }

    public function delete($id)
    {
        $model = Post::find($id);
        $model->delete();
        return redirect('/read')->with('status', 'Blog Post Form Data Has Been deleted');
    }

    public function edit($id)
    {
        $model = Post::find($id);
        return view('edit')->with('data', $model);
    }

    public function update(Request $request, $id)
    {
        $model = Post::find($id);
        $model->title = $request->title;
        $model->description = $request->description;
        $model->save();
        return redirect('/read')->with('status', 'Blog Post Form Data Has Been Update');
    }
}
