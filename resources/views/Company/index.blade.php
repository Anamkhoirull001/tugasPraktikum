@extends('Layouts.main')
@section('container')

<div class="container mt-2">
  <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-right mb-2">
                  <a class="btn btn-outline-primary" href="{{ route('Company.create') }}"> Create Data Company</a>
              </div>
          </div>
      </div>
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th>Umur</th>
                  <th>Jabatan</th>
                  <th width="280px">Action</th>
              </tr>
          </thead>
          <tbody>
              <?php
              $i = 1;
              ?>
              @foreach ($Companie as $company)
                  <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $company->nama }}</td>
                      <td>{{ $company->email }}</td>
                      <td>{{ $company->alamat }}</td>
                      <td>{{ $company->no_tlp }}</td>
                      <td>{{ $company->umur }}</td>
                      <td>{{ $company->jabatan }}</td>
                      <td>
                          <form action="{{ route('Company.destroy',$company->id) }}" method="Post">
                              <a class="btn btn-outline-success" href="{{ route('Company.edit',$company->id) }}"><i class="bi bi-pencil-square text-outline-success"></i></a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are You Sure Deleted?')"><i class="bi bi-trash3-fill text-outline-danger"></i></button>
                          </form>
                      </td>
                  </tr>
                  <?php
                      $i++;
                  ?>
                  @endforeach
          </tbody>
      </table>
      {!! $Companie->links() !!}
  </div>

@endsection