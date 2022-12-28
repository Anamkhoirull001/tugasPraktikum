@extends('Layouts.main')

@section('container')
    <div class="container mt-4">
        @if(session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif

      <div class="d-inline-block mx-2 mb-3 mt-5 card shadow bg-body-tertiary rounded" >
        <div class="card-body ">
              <small >judul buku</small>
            <h5 class="card-title">{{ $data -> judulBuku }}</h5>
            <small >penulis buku</small>
            <h6 class="card-subtitle mb-2 text-muted">{{ $data -> penulis }}</h6>
            <small >Review Anda</small>
            <p class="card-text">{{ $data -> deskripsiBuku }}</p>
          <div>
            <small class="m-4">Hal : {{ $data -> halaman }}</small>
            <small class="m-4">Update : {{ $data -> updated_at }}</small>
            <small class="m-4">Terbit : {{ $data -> tahunTerbit }}</small>
          </div>
          <div class="mt-5">
            <a href="/edit/{{ $data -> id }}" class="btn btn-outline-success mx-4"><i class="bi bi-pencil-square px-2"></i></a>
            <a href="/read" class="btn btn-outline-primary mx-4">back</a>
            <a href="/delete/{{ $data -> id }}" class="btn btn-outline-danger mx-4" onclick="return confirm('Are You Sure Deleted?')"><i class="bi bi-trash3-fill text-outline-danger px-2"></i></a>
          </div>
        </div>
      </div>
    </div>       
@endsection