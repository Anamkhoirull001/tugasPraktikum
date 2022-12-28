@extends('Layouts.main')

@section('container')
<a href="/input" class="btn btn-outline-success mt-0 mb-2">Review books</a>

    <div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif

      @foreach ( $datas as $data )
      <div class="d-inline-block mx-2 mb-3 card shadow bg-body-tertiary rounded" style="width: 300px; height:200px">
        <div class="card-body ">
          <h5 class="card-title">{{ $data -> judulBuku }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $data -> penulis }}</h6>
          <p class="card-text">{{ $data -> deskripsiBuku }}</p>
          <small style="margin-right: 40px">{{ $data -> halaman }}</small>
          <a href="/delete/{{ $data -> id }}"  onclick="return confirm('Are You Sure Deleted?')"><i class="bi bi-trash3-fill text-danger px-3"></i></a>
          <a href="detail/{{ $data -> id }}" class="card-link mx-1"><small>read more...</small></a>
        </div>
      </div>
      @endforeach

        {{-- <div class="card ">
            <div class="card-header text-center font-weight-bold bg-info">
                Blog Review  Books
            </div>
        </div>
            <table class="table table-primary table-striped" >
                <tr class="table-primary">
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Halaman</th>
                    <th>Tahun Terbit</th>
                    <th>Deskripsi Buku</th>
                    <th>Update_at</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; ?>
                @foreach ( $datas as $data )
                <tr class="table-dark">
                    <td class="table-info">{{ $i }}</td>
                    <td class="table-info">{{ $data -> judulBuku }}</td>
                    <td class="table-info">{{ $data -> penulis }}</td>
                    <td class="table-info">{{ $data -> halaman }}</td>
                    <td class="table-info">{{ $data -> tahunTerbit }}</td>
                    <td class="table-info">{{ $data -> deskripsiBuku }}</td>
                    <td class="table-info">{{ $data -> updated_at }}</td>
                    <td class="table-info">
                        <a href="detail/{{ $data -> id }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                        <a href="/edit/{{ $data -> id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="/delete/{{ $data -> id }}" class="btn btn-danger" onclick="return confirm('Are You Sure Deleted?')"><i class="bi bi-trash3-fill text-black px-3"></i></a>
                    </td>
                    
                </tr>
                <?php $i++; ?>
                @endforeach
            </table>--}}
        </div>      
@endsection  