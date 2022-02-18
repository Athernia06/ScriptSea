@extends('layouts.app')

@section('content')
<!--Section: Breadcrumb-->
<section class="mb-4">
  <div class="card">
    <div class="card-header text-center py-3" style="padding-bottom: 0 !important;">
      <h5 class="mb-0 text-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="Bimbingan">Bimbingan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dosen</li>
          </ol>
        </nav>
      </h5>
    </div>
  </div>
</section>
<!--Section: Breadcrumb-->

<!--Section: Minimal statistics cards-->
<section>
  <div class="table-responsive" style="background: white; border-radius: 0.5rem; padding: 1rem">
    <table class="table table-striped table-hover table-bordered border-dark">
      <thead>
        <tr>
          <th scope="col">Tanggal</th>
          <th scope="col">Judul</th>
          <th scope="col">Nama</th>
          <th scope="col">NPM</th>
          <th scope="col">Detail</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">02/10/2021</th>
          <td>Aplikasi Bimbingan Skripsi</td>
          <td>Muhammad Rafi</td>
          <td>54418811</td>
          <td><button type="button" class="btn btn-secondary btn-rounded"><i class="fas fa-sticky-note fa-fw me-3"></i>Detail</button></td>
        </tr>
        <tr>
          <th scope="row">02/10/2021</th>
          <td>Aplikasi E-Learning Korea</td>
          <td>Dinda Maulana</td>
          <td>54318881</td>
          <td><button type="button" class="btn btn-secondary btn-rounded"><i class="fas fa-sticky-note fa-fw me-3"></i>Detail</button></td>
        </tr>
        <tr>
          <th scope="row">07/10/2021</th>
          <td>Penggunaan Teknologi Blockchain</td>
          <td>Rayhan Anggiat</td>
          <td>52418654</td>
          <td><button type="button" class="btn btn-secondary btn-rounded"><i class="fas fa-sticky-note fa-fw me-3"></i>Detail</button></td>
        </tr>
      </tbody>
      
      <caption>
        Captions of the table
      </caption>
      
    </table>
  </div>
</section>
<!--Section: Minimal statistics cards-->
@endsection