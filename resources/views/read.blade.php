<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>read</title>
</head>
<body>
    <table border: 1px solid >
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Desripsion</th>
            <th>creat post</th>
            <th>update post</th>
        </tr>

        @foreach ($datas as $data )
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
            </tr>
        @endforeach
    </table>


</body>
</html>