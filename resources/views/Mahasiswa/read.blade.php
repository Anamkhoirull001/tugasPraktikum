<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>- Laravel 8 -</title>
    <style>
        body{
            background-color: rgb(212, 214, 219)
        }
        .card-header{
            background-color: rgb(78, 135, 161)
        }
        h4{
            color: white
        }
    </style>
</head>
<body>
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
</body>
</html>