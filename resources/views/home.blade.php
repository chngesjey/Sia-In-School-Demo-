@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row g-2 text-center">

    <!-- Kotak an Siswa -->
      <div class="col-3 text-light">
        <div class="p-3 bg-primary rounded mt-3">Siswa<i class="fa fa-boxes"></i>  </div>
      </div>

      <!-- Kotak an Guru -->
      <div class="col-3 text-light">
        <div class="p-3 bg-success rounded mt-3">Guru<i class="fa fa-tag"></i></div>
      </div>

      <!-- Kotak an Kelas -->
      <div class="col-3">
        <div class="p-3 rounded bg-light mt-3">Kelas<i class="fa fa-truck"></i></div>
      </div>

      <!-- Kotak an Mapel -->
      <div class="col-3">
        <div class="p-3 rounded bg-info mt-3">Pembeli<i class="fa fa-users"></i></div>
      </div>
    </div>
@endsection