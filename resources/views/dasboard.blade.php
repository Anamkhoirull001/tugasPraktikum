@extends('Layouts.main')

@section('container')
<div class="container ">
  <h3 style="margin-top: 10%; margin-bottom: 60px" >Hi! {{ auth()->user()->username }}</h3>
  <h6>selamat datang di web CRUD sederhana karya G.231.21.0144</h6>
  <p>Web ini adalah web CRUD yang berisi 3 table</p>
  <div>
  <ol>
    <li>Tabel Review Buku</li>
    <li>Tabel Input Mahsiswa</li>
    <li>Tabel Input Informasi Karyawan</li>
  </ol>
</div>
</div>
@endsection