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
            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
          </ol>
        </nav>
      </h5>
    </div>
  </div>
</section>
<!--Section: Breadcrumb-->

<!--Section: Chat, Vcon, Upload File-->
<section>
  <div class="row">
    <div class="card-body  col-xl-8 col-sm-12 col-12 mb-4" style="background: white; border-radius: 0.5rem; padding: 1.5rem !important;">
      <iframe width="100%" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
      </iframe>
    </div>
    <div class="col-xl-4 col-sm-12 col-12 mb-4">
      <div class="card">
        <a href="index.html">
          <div class="card-body link-primary">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                
                <!-- Input Media -->
                <div class="mb-4">
                  <label class="form-label" for="customFile">Upload File</label>
                  <input type="file" class="form-control" id="customFile" />
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Upload File</button>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Section: Chat, Vcon, Upload File-->
@endsection