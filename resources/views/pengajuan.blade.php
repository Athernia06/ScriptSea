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
            <li class="breadcrumb-item active" aria-current="page">Pengajuan</li>
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
    <div class="col-xl-6 col-sm-6 col-12 mb-4">
      <div class="card">
        <a href="PengajuanProposal">
          <div class="card-body link-primary">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-sticky-note text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>PROPOSAL</h3>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-6 col-sm-6 col-12 mb-4">
      <div class="card">
        <a href="#">
          <div class="card-body link-success">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-book-open text-warning fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>SKRIPSI</h3>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Section: Minimal statistics cards-->

<!--Section: Statistics with subtitles-->
<!--<section>
  <div class="row">
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
              </div>
              <div>
                <h4>Total Posts</h4>
                <p class="mb-0">Monthly blog posts</p>
              </div>
            </div>
            <div class="align-self-center">
              <h2 class="h1 mb-0">18,000</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <i
                class="far fa-comment-alt text-warning fa-3x me-4"
                ></i>
              </div>
              <div>
                <h4>Total Comments</h4>
                <p class="mb-0">Monthly blog posts</p>
              </div>
            </div>
            <div class="align-self-center">
              <h2 class="h1 mb-0">84,695</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <h2 class="h1 mb-0 me-4">$76,456.00</h2>
              </div>
              <div>
                <h4>Total Sales</h4>
                <p class="mb-0">Monthly Sales Amount</p>
              </div>
            </div>
            <div class="align-self-center">
              <i class="far fa-heart text-danger fa-3x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between p-md-1">
            <div class="d-flex flex-row">
              <div class="align-self-center">
                <h2 class="h1 mb-0 me-4">$36,000.00</h2>
              </div>
              <div>
                <h4>Total Cost</h4>
                <p class="mb-0">Monthly Cost</p>
              </div>
            </div>
            <div class="align-self-center">
              <i class="fas fa-wallet text-success fa-3x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!--Section: Statistics with subtitles-->
@endsection