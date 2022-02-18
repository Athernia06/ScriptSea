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
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </h5>
    </div>
  </div>
</section>
<!--Section: Breadcrumb-->

<!-- Section: Form Profile-->
<section>
  <div class="row">
    <div class="col-xl-8 col-sm-8 col-12 mb-4">
      <div class="card">
        <form class="card-body">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">First name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" />
                <label class="form-label" for="form6Example2">Last name</label>
              </div>
            </div>
          </div>
          
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" />
            <label class="form-label" for="form6Example3">NPM</label>
          </div>
          
          <!-- Radio Button -->
          <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
          </div>
          
          <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div>
          
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" />
            <label class="form-label" for="form6Example4">Fakultas</label>
          </div>
          
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Jurusan</label>
          </div>
          
          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="form6Example7" rows="4"></textarea>
            <label class="form-label" for="form6Example7">Alamat</label>
          </div>
          
          <!-- Password -->
          <div class="form-outline mb-4">
            <input type="password" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Ganti Password</label>
          </div>
          
          <!-- Checkbox 
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
              <label class="form-check-label" for="form6Example8"> Create an account? </label>
            </div>-->
          
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Save Profile</button>
        </form>
      </div>
    </div>
    <div class="col-xl-4 col-sm-4 col-12 mb-4">
      <div class="card">
        <a href="index.html">
          <div class="card-body link-primary">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                
                <!-- Input Media -->
                <div class="mb-4">
                  <label class="form-label" for="customFile">Upload Foto</label>
                  <input type="file" class="form-control" id="customFile" />
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Upload Foto</button>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection