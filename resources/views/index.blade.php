<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>ScriptSea - Login</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
  />
  <!-- MDB -->
  <link href="/assets/css/mdb.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <!-- Start your project here-->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
      <div class="container">
        <a class="navbar-brand" href="#"><span style="color: #fff;">ScriptSea</span></a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <!--<li class="nav-item">
            <a class="nav-link" href="#!">Offer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Reference</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Contact</a>
          </li>-->
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <div class="bg-image shadow-2-strong">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="text-white">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-8">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-4 d-none d-md-block">
                    <img
                    src="assets/img/login/campus.jpg"
                    alt="login form"
                    class="img-fluid" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"
                    />
                  </div>
                  <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body py-5 px-4 p-md-5">
                      <h4 class="fw-bold mb-4" style="color: #9692d0;">Selamat Datang di ScriptSea</h4>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="row mb-3">
                          <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                          
                          <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                          
                          <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                              
                              <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                              </label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row mb-0">
                          <div class="col-md-8 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                            </button>
                            <a class="btn btn-primary" href="{{ route('register') }}">
                              {{ __('Register') }}
                            </a>
                            
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Section: Design Block-->
  <section>
    <!-- Intro -->
    <div id="intro" class="bg-image vh-100" style="background-image: url('assets/img/login/landing.jpg');">
      <div style="background-color: rgba(250, 182, 162, 0.15);"></div>
    </div>
    <!-- Intro -->
  </section>
  <!--Section: Design Block-->
</header>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
