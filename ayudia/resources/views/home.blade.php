@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>santri</h4>
@endsection
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Master
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Pelajaran</a></li>
          <li><a href="#">Siswa</a></li>
          <li><a href="#">Guru</a></li>
        </ul>
      </li>
    </ul>
    <button class="btn btn-danger navbar-btn">Laporan</button>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  </div>
</nav>


