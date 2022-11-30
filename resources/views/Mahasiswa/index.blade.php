@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card ">
            <div class="card-header text-center font-weight-bold bg-info">
                <h4 style="color: white">DATA MAHASISWA</h4>
            </div>
        </div>
        <table style="text-align: center;" class="table table-success table-striped">
            <tr >
                <th>#</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Umur</th>
                <th >Action</th>
            </tr>
            <?php $i = 1; ?>
            @foreach ( $datas as $datas )
            <tr style="text-align: center;" class="table-dark">
                <td class="table-info">{{ $i }}</td>
                <?php $i++; ?>
                <td class="table-info">{{ $datas -> nim }}</td>
                <td class="table-info">{{ $datas -> nama }}</td>
                <td class="table-info">{{ $datas -> umur }}</td>
                <td class="table-info">
                    <a href="read-data/{{ $datas -> nim }}" class="btn btn-info">Read</a>
                    <a href="edit-data/{{$datas -> nim}}" class="btn btn-warning">Edit</a>
                    <a href="delete-data/{{ $datas -> nim }}" class="btn btn-danger" onclick="return confirm('Are You Sure Deleted?')">Delete</a>
                </td>

            </tr>
            @endforeach
        </table>
        <a href="/MahasiswaInput" class="btn btn-success m-2">Create Data</a>
    </div>
@endsection