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
              Laravel 8 -  Blog Post Form Example
            </div>
        </div>
            <table class="table table-primary table-striped" >
                <tr class="table-primary">
                    <th>#</th>
                    <th>Title</th>
                    <th>Desripsion</th>
                    <th>creat post</th>
                    <th>update post</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; ?>
                @foreach ( $datas as $data )
                <tr class="table-dark">
                    <td class="table-info">{{ $i }}</td>
                    <td class="table-info">{{ $data -> title }}</td>
                    <td class="table-info">{{ $data -> description }}</td>
                    <td class="table-info">{{ $data -> created_at }}</td>
                    <td class="table-info">{{ $data -> updated_at }}</td>
                    <td class="table-info">
                        <a href="/edit/{{ $data -> id }}" class="btn btn-warning">Edit</a>
                        <a href="/delete/{{ $data -> id }}" class="btn btn-danger" onclick="return confirm('Are You Sure Deleted?')">Delete</a>
                    </td>
                    
                </tr>
                <?php $i++; ?>
                @endforeach
            </table>
             <a href="/input" class="btn btn-success m-2">Create Data</a>

        </div>     
@endsection  