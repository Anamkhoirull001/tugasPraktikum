@extends('Layouts.main')

@section('container')
<div class="container ">
  <h1 style="margin-top: 180px">Hi! {{ auth()->user()->username }}</h1>
  <h3>selamat datang di web ini</h3>
</div>
@endsection