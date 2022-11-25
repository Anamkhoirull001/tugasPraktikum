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


      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('update-data')}}/{{ $data -> nim }}">
        @csrf
            <div class="form-group">
                <label for="nim">Nim :</label>
                <input type="text" id="nim" value="{{ $data -> nim }}" name="nim" class="form-control @error('nim') is-invalid @enderror"  value="{{ old('nim') }}">
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" id="nama" value="{{ $data -> nama }}" name="nama" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur :</label>
                <input type="number" id="umur" value="{{ $data -> umur }}" name="umur" class="form-control @error('umur') is-invalid @enderror"  min="1" max="120" value="{{ old('umur') }}">
                @error('umur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" >{{ $data -> alamat}}  {{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kota">Kota :</label>
                <input type="text" id="kota" value="{{ $data -> kota }}" name="kota" class="form-control @error('kota') is-invalid @enderror"  value="{{ old('kota') }}">
                @error('kota')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kelas">Kelas :</label>
                <input type="text" id="kelas" value="{{ $data -> kelas }}" name="kelas" class="form-control @error('kelas') is-invalid @enderror"  value="{{ old('kelas') }}">
                @error('kelas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan :</label>
                <input type="text" id="jurusan" value="{{ $data -> jurusan }}" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror"  value="{{ old('jurusan') }}">
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