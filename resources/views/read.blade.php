<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>- Laravel 8 -</title>
</head>
<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      <a href="/input" class="btn btn-success m-2">Create Data</a>
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
                        <a href="/edit/{{ $data -> id }}" class="btn btn-warning">update</a>
                        <a href="/delete/{{ $data -> id }}" class="btn btn-danger" onclick="return confirm('Are You Sure Deleted?')">Delete</a>
                    </td>
                    
                </tr>
                <?php $i++; ?>
                @endforeach
            </table>
        </div>
        
        
</body>
</html>