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
        $post->judulBuku = $request->judulBuku;
        $post->penulis = $request->penulis;
        $post->halaman = $request->halaman;
        $post->tahunTerbit = $request->tahunTerbit;
        $post->deskripsiBuku = $request->deskripsiBuku;
        $post->save();
        return redirect('/read')->with('status', 'Review Books Has Been inserted');
    }

    public function show()
    {
        $model = new Post;
        $datas = $model->all();
        return view('read', [
            'datas' => $datas,
            'title' => 'CRUD | Post'
        ]);
    }

    public function read($id){
        $model = Post::find($id);
        return view('detail', [
         'data' => $model,
         'title' => 'Read'
     ]);
    }

    public function delete($id)
    {
        $model = Post::find($id);
        $model->delete();
        return redirect('/read')->with('status', 'Review Books Has Been deleted');
    }

    public function edit($id)
    {
        $model = Post::find($id);
        return view('edit')->with('data', $model);
    }

    public function update(Request $request, $id)
    {
        $model = Post::find($id);
        $model->judulBuku = $request->judulBuku;
        $model->penulis = $request->penulis;
        $model->halaman = $request->halaman;
        $model->tahunTerbit = $request->tahunTerbit;
        $model->deskripsiBuku = $request->deskripsiBuku;
        $model->save();
        return redirect('/read')->with('status', 'Review Books Has Been Update');
    }
}
