<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('Mahasiswa.input');
    }
    public function store(Request $request)
    {
        $MahasiswaPost = $request->validate([
            'nim' => ['required', 'min:3', 'unique:mahasiswas'],
            'nama' => 'required',
            'umur' => 'required|min:1|max:3',
            'alamat' => 'required',
            'kota' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create($MahasiswaPost);

        return redirect('Mahasiswa')->with('status', 'Blog Mahasiswa Form Data Has Been inserted');
    }

    public function show()
    {
        $model = new Mahasiswa();
        $datas = $model->all();
        return view('Mahasiswa.index', [
            'datas' => $datas,
            'title' => 'CRUD | Mahasiswa'
        ]);
    }

    public function delete($nim)
    {
        $model = Mahasiswa::find($nim);
        $model->delete();
        return redirect('/Mahasiswa')->with('status', ' Data Has Been deleted');
    }

    public function edit($nim)
    {
        $model = Mahasiswa::find($nim);
        return view('Mahasiswa.edit', ['data' => $model]);
    }

    public function read($nim)
    {
        $model = Mahasiswa::find($nim);
        return view('Mahasiswa.read', [
            'data' => $model,
            'title' => 'Read'
        ]);
    }

    public function update(Request $request, $nim)
    {
        $model = Mahasiswa::find($nim);
        $data = [
            'nama' => 'required',
            'umur' => 'required|min:1|max:3',
            'alamat' => 'required',
            'kota' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ];
        if ($request->nim != $model->nim) {
            $data['nim'] = 'required|unique:mahasiswas';
        }
        $validatedData = $request->validate($data);
        Mahasiswa::where('nim', $model->nim)
            ->update($validatedData);
        $model->save();
        return redirect('/Mahasiswa')->with('status', 'Blog Mahasiswa Form Data Has Been Update');
    }
}
