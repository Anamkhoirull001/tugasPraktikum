<!DOCTYPE html>
<html>
<head>
    <title>Form Input Books</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
     Blog Post Form Input Books
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="judulBuku">Judul Buku</label>
          <input type="text" id="judulBuku" name="judulBuku" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="penulis">Penulis</label>
          <input type="text" id="penulis" name="penulis" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="halaman">Halaman</label>
          <input type="number" id="halaman" name="halaman" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="tahunTerbit">Tahun Terbit</label>
          <input type="date" id="tahunTerbit" name="tahunTerbit" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="deskripsiBuku">Desktipsi Buku</label>
          <textarea name="deskripsiBuku" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
    </div>
  </div>
</div>  
 
</body>
</html>