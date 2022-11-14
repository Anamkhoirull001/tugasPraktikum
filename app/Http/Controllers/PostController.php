<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        // $model = new Post;
        // $datas = $model->all();
        // , ['datas' => $datas]
        return view('postt');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/')->with('status', 'Blog Post Form Data Has Been inserted');
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
        return redirect('/')->with('status', 'Blog Post Form Data Has Been deleted');
    }

    public function edit($id)
    {
        $model = Post::find($id);
        return view('edit', ['data' => $model]);
    }

    // public function update(Request $request)
    // {
    //     // $this->validate($request, [
    //     //     'title' => 'required',
    //     //     'description' => 'required'
    //     // ]);
    //     $model = new Post;
    //     $model = Post::find($id);
    //     // $model->title = $request->input('title');
    //     // $model->title = $request->title;
    //     // $model->description = $request->description;
    //     // $model->description = $request->input('description');
    //     // $model->save();
    //     $model->update([
    //         'title' => $request->title,
    //         'description' => $request->description
    //     ]);
    //     return redirect('/')->with('status', 'Blog Post Form Data Has Been Update');
    // }
}
