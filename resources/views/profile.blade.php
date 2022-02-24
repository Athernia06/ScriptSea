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
        <form class="card-body" action="/Profile/update" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" name="name" value="{{ Auth::user()->name ?? '' }}" id="form6Example1" class="form-control" />
                {{-- <label class="form-label" for="form6Example1">Full Name</label> --}}
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="email" name="email" value="{{ Auth::user()->email ?? '' }}" id="form6Example1" class="form-control"  readonly/>
                {{-- <label class="form-label" for="form6Example1">Full Name</label> --}}
              </div>
            </div>
          </div>
          
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example3" value="{{ Auth::user()->npm ?? '' }}" class="form-control" name="npm" placeholder="NPM" />
            {{-- <label class="form-label" for="form6Example3">NPM</label> --}}
          </div>
          @php
          if(isset(Auth::user()->jk)){
            
            if (Auth::user()->jk == "P") {
              $checked = "P";
            } else {
              $checked = "L";
            }
          } else {
            $checked = "";
          }     
          @endphp
          <!-- Radio Button -->
          <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" name="jk" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="L" {{ $checked == "L" ? 'checked' : '' }} />
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
          </div>
          
          <div class="form-check form-check-inline mb-4">
            <input class="form-check-input" name="jk" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="P"  {{ $checked == "P" ? 'checked' : '' }}/>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div>
          
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" name="fakultas" value="{{ Auth::user()->fakultas ?? '' }}" id="form6Example4" class="form-control" placeholder="Fakultas"/>
            {{-- <label class="form-label" for="form6Example4">Fakultas</label> --}}
          </div>
          
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form6Example5" name="jurusan" value="{{ Auth::user()->jurusan ?? '' }}" class="form-control" placeholder="Jurusan"/>
            {{-- <label class="form-label" for="form6Example5">Jurusan</label> --}}
          </div>
          
          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" name="alamat" id="form6Example7" rows="4" placeholder="Alamat">{{ Auth::user()->alamat ?? '' }}</textarea>
            {{-- <label class="form-label" for="form6Example7">Alamat</label> --}}
          </div>
          
          <!-- Password -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form6Example5" class="form-control" placeholder="Ganti Password"/>
            <input type="hidden" name="old_password" value="{{ Auth::user()->password ?? '' }}" id="">
            {{-- <label class="form-label" for="form6Example5">Ganti Password</label> --}}
          </div>
          <small class="alert-danger">* Kosongkan password jika tidak diganti</small>
          
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Save Profile</button>
        </form>
      </div>
    </div>
    <div class="col-xl-4 col-sm-4 col-12 mb-4">
      <form action="/Profile/upload/foto" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
          <div class="card-body link-primary">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <!-- Input Media -->
                <div class="mb-4">
                  <label class="form-label" for="customFile">Upload Foto</label>
                  <input type="file" name="file" class="form-control" id="customFile" accept=".jpg, .png, .jpeg"/>
                  <input type="hidden" value="{{ Auth::user()->file ?? '' }}" name="old_file" id="">
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Upload Foto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection