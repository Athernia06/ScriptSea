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
            <li class="breadcrumb-item active" aria-current="page">Bimbingan</li>
          </ol>
        </nav>
      </h5>
    </div>
  </div>
</section>
<!--Section: Breadcrumb-->

<!--Section: Minimal statistics cards-->
<section>
  <div class="row">
    <div class="col-xl-6 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="BimbinganMahasiswa">
          <div class="card-body link-primary">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-solid fa-users fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>Mahasiswa</h3>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-6 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="BimbinganDosen">
          <div class="card-body link-success">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-solid fa-user-graduate text-warning fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>Dosen</h3>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Section: Minimal statistics cards-->
@endsection