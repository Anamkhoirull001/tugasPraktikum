<style>
  .username{
    position: relative;
    top:-50px;
  }
  .mystyle{
    margin-top: -10px;
  }
</style>
@extends('Layouts.main')
@section('container')
<div class="container " style="width: 18rem;">
  <img src="/img/no photo.png" alt="no photo" height="250px" width="250px" >
  <div class="card-body">
   
    <p class="card-text username">{{ auth()->user()->username }}</p>
    <p class="card-text mystyle">name : {{ auth()->user()->name }}</p>
    <p class="card-text mystyle">Email : {{ auth()->user()->email }}</p>

    <a href="#" class="btn btn-primary">Manage Account</a>
  </div>
</div>


@endsection