@extends('Layouts.main')
@section('container')

  @if(session('status'))
    <div aria-live="polite" aria-atomic="true" class="position-relative">
      <div class="toast-container mt-2 end-0 px-5 mx-5">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
      </div>
    </div>
  @endif

  <div class="container " style="width: 18rem;">
    <img src="/img/no photo.png" alt="no photo" height="250px" width="250px" >
    <div class="card-body">
    @php $a=3; 
    @endphp
      <p class="card-text" style="position:relative;top:-50px;"><a href="">{{ auth()->user()->username }}</a></p>
      <p class="card-text" style="margin-top:-25px">name : <a href="">{{ auth()->user()->name }}</a></p>
      <p class="card-text" style="margin-top:-10px">Email : <a href="" >{{ auth()->user()->email }}</a></p>
      <form action="{{url('password')}}/{{ auth()->user()->id }}" method="POST">
        @csrf
        <input type="text"  name="password" class="form-control form-control-sm mt-5 mb-3 text-center" required placeholder="New Password">
        <button type="submit" name="gantiPassword" class="btn btn-outline-success btn-sm">Ganti Password</button>
      </form>
    </div>
  </div>
  
@endsection