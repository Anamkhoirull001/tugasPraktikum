@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      
        <div class="card ">
            <div class="card-header text-center font-weight-bold">
              <h4>DATA MAHASISWA</h4>
              <table class="table table-primary table-striped" >
                  <tr class="table-primary">
                    <th>Nim</th>
                    <td class="table-info">{{ $data -> nim }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td class="table-info">{{ $data -> nama }}</td>
                    </tr>
                    <tr>
                        
                        <th>Umur</th>
                        <td class="table-info">{{ $data -> umur }}</td>
                    </tr>
                    <tr>
                        
                        <th>Alamat</th>
                        <td class="table-info">{{ $data -> alamat }}</td>
                    </tr>
                    <tr>
                        
                        <th>Kota</th>
                        <td class="table-info">{{ $data -> kota }}</td>
                    </tr>
                    <tr>
                        
                        <th>Kelas</th>
                        <td class="table-info">{{ $data -> kelas }}</td>
                    </tr>
                    <tr>
                        
                        <th>Jurusan</th>
                        <td class="table-info">{{ $data -> jurusan }}</td>
                    </tr>
                    <tr>
                        <th>update post</th>
                        <td class="table-info">{{ $data -> updated_at }}</td>
                    </tr>
                </table>
                            <a href="/edit-data/{{ $data -> nim }}" class="btn btn-warning mx-4">Edit</a>
                            <a href="/delete-data/{{ $data -> nim }}" class="btn btn-danger mx-4" onclick="return confirm('Are You Sure Deleted?')">Delete</a>
            </div>
        </div>
        <a href="/Mahasiswa" class="btn btn-primary mt-3">back</a>
    </div>       
@endsection