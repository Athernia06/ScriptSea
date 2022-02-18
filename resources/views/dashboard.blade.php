@extends('layouts.app')

@section('content')

<!--Section: Breadcrumb-->
<section class="mb-4">
  <div class="card">
    <div class="card-header text-center py-3" style="padding-bottom: 0 !important;">
      <h5 class="mb-0 text-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="index.html">
          <div class="card-body link-primary">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-pencil-alt text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>278</h3>
                <p class="mb-0">FORMULIR</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="">
          <div class="card-body link-success">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="far fa-comment-alt text-warning fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>156</h3>
                <p class="mb-0">DISETUJUI</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="">
          <div class="card-body link-warning">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-chart-line text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>65.7%</h3>
                <p class="mb-0">DITINJAU</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-3 col-12 mb-4">
      <div class="card">
        <a href="">
          <div class="card-body link-danger">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>423</h3>
                <p class="mb-0">DITOLAK</p>
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