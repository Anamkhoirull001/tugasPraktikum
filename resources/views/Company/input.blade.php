<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>input data company</title>
</head>
<body>
  
  <div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Company.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('Company.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    @error('alamat')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>No Telpon:</strong>
                 <input type="number" name="no_tlp" class="form-control" placeholder="No Telpon">
                 @error('no_tlp')
                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Umur:</strong>
                 <input type="number" name="umur" class="form-control" placeholder="Umur">
                 @error('umur')
                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Jabatan:</strong>
                 <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                 @error('jabatan')
                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                 @enderror
             </div>
         </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>

</body>
</html>