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
        <a href="/" class="btn btn-primary m-2">Home</a>
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <a href="/MahasiswaInput" class="btn btn-success m-2">Create Data</a>
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

    </div>


</body>

</html>