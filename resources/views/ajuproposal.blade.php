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
            <li class="breadcrumb-item"><a href="Pengajuan">Pengajuan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Proposal</li>
          </ol>
        </nav>
      </h5>
    </div>
  </div>
</section>
<!--Section: Breadcrumb-->

<!--Section: Pengajuan Proposal-->
<section>
  <div class="card-body col-xl-12 col-sm-12 col-12 mb-4" style="background: white; border-radius: 0.5rem; padding: 1.5rem !important;">
    <form>
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="form6Example3" class="form-control" />
        <label class="form-label" for="form6Example3">Nama Lengkap</label>
      </div>
      
      <!-- Text input -->
      <div class="form-outline mb-4">
        <input type="text" id="form6Example3" class="form-control" />
        <label class="form-label" for="form6Example3">NPM</label>
      </div>
      
      <!-- Text input -->
      <div class="form-outline mb-4">
        <input type="text" id="form6Example4" class="form-control" />
        <label class="form-label" for="form6Example4">Judul</label>
      </div>
      
      <!-- Input Media -->
      <div class="mb-4">
        <label class="form-label" for="customFile">Upload Berkas</label>
        <input type="file" class="form-control" id="customFile" />
        <div class="form-helper">Format yang diperbolehkan : PDF, DOCX, DOC</div>
      </div>
      
      <!-- Checkbox 
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
          <label class="form-check-label" for="form6Example8"> Create an account? </label>
        </div>-->
        
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      </form>
    </div>
  </section>
  <!--Section: Pengajuan Proposal-->
  
  <!--Section: Status Pengajuan Proposal-->
  <section>
    <div class="card-body col-xl-12 col-sm-12 col-12 mb-4" style="background: white; border-radius: 0.5rem; padding: 1.5rem !important;">
      <h5 class="mb-5 text-center">Status Pengajuan Judul</h5>
      <div class="alert alert-success" role="alert"><i class="fa-solid fas fa-check"></i> Proposal anda diterima! Silahkan menghubungi dosen terkait untuk memulai bimbingan</div>
      <form>
        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example3" class="form-control" />
          <label class="form-label" for="form6Example3">Dosen Pembimbing 1</label>
        </div>
        
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example3" class="form-control" />
          <label class="form-label" for="form6Example3">Dosen Pembimbing 2</label>
        </div>
        
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example4" class="form-control" />
          <label class="form-label" for="form6Example4">Judul</label>
        </div>
        
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="date" id="form6Example4" class="form-control" />
          <label class="form-label" for="form6Example4">Tanggal Submit</label>
        </div>
        
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="date" id="form6Example4" class="form-control" />
          <label class="form-label" for="form6Example4">Tanggal Verifikasi</label>
        </div>
        
        <!-- Input Media -->
        <div class="mb-4">
          <label class="form-label" for="customFile">Berkas</label>
          <input type="file" class="form-control" id="customFile" />
        </div>
        
      </form>
    </div>
  </div>
</section>
<!--Section: Status Pengajuan Proposal-->
@endsection