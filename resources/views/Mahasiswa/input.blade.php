<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      CREATE DATA MAHASISWA
    </div>
    <div class="card-body">


      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-mahasiswa')}}">
        @csrf
            <div class="form-group">
                <input type="text" id="nim" name="nim" class="form-control mb-3 @error('nim') is-invalid @enderror"  value="{{ old('nim') }}" placeholder="Nim : ">
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="nama" name="nama" class="form-control mb-3 @error('nama') is-invalid @enderror"  value="{{ old('nama') }}" placeholder="Nama : ">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" id="umur" name="umur" class="form-control mb-3 @error('umur') is-invalid @enderror"  min="1" max="120" value="{{ old('umur') }}" placeholder="Umur : ">
                @error('umur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="alamat" class="form-control mb-3 @error('alamat') is-invalid @enderror" placeholder="Alamat : ">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="kota" name="kota" class="form-control mb-3 @error('kota') is-invalid @enderror"  value="{{ old('kota') }}" placeholder="Kota : ">
                @error('kota')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="kelas" name="kelas" class="form-control mb-3 @error('kelas') is-invalid @enderror"  value="{{ old('kelas') }}" placeholder="Kelas : ">
                @error('kelas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" id="jurusan" name="jurusan" class="form-control mb-3 @error('jurusan') is-invalid @enderror"  value="{{ old('jurusan') }}" placeholder="Jurusan : ">
                @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>     
    </div>
  </div>
</div>  
 
</body>
</html>