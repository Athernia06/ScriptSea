<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ScriptSea - Pengajuan Proposal</title>
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
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body style="background: linear-gradient(to right, rgba(102, 126, 234, 1), rgba(118, 75, 162, 1))">
    <!-- Start your project here-->
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse gradient-custom"
       >
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4" style="border-radius: 1rem;">
        <a
           href="dashboard.html"
           class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i
            ><span>Main dashboard</span>
        </a>
        <a
           href="profile.html"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-user fa-fw me-3"></i
            ><span>Profile</span>
        </a>
        <a
           href="pengajuan.html"
           class="list-group-item list-group-item-action py-2 ripple active"
           ><i class="fas fa-sticky-note fa-fw me-3"></i><span>Pengajuan</span></a
          >
        <a
           href="bimbingan.html"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-comments fa-fw me-3"></i
          ><span>Bimbingan</span></a
          >
        <a
           href="skripsi.html"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-book-open fa-fw me-3"></i><span>Skripsi</span>
        </a>
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav
       id="main-navbar"
       class="navbar navbar-expand-lg navbar-light fixed-top"
       style="background: linear-gradient(to right, rgba(102, 126, 234, 1), rgba(118, 75, 162, 1))"
       >
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#sidebarMenu"
              aria-controls="sidebarMenu"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="dashboard.html"><span style="color: #fff;">ScriptSea</span></a>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <input
               autocomplete="off"
               type="search"
               class="form-control rounded"
               placeholder='Search'
               style="min-width: 225px"
               />
        <span class="input-group-text border-0"
              ><i class="fas fa-search"></i
          ></span>
      </form>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Notification dropdown -->
        <li class="nav-item dropdown">
          <a
             class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger"
                  >1</span
              >
          </a>
          <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
              >
            <li><a class="dropdown-item" href="#">Some news</a></li>
            <li><a class="dropdown-item" href="#">Another news</a></li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>

        <!-- Icon -->
        <li class="nav-item">
          <a class="nav-link me-3 me-lg-0" href="#">
            <i class="fas fa-fill-drip"></i>
          </a>
        </li>
        <!-- Icon -->
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fab fa-github"></i>
          </a>
        </li>

        <!-- Icon dropdown -->
        <li class="nav-item dropdown">
          <a
             class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
             href="#"
             id="navbarDropdown"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
            <i class="united kingdom flag m-0"></i>
          </a>
          <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdown"
              >
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="united kingdom flag"></i>English
                <i class="fa fa-check text-success ms-2"></i
                  ></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="poland flag"></i>Polski</a
                >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="china flag"></i>中文</a
                >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="japan flag"></i>日本語</a
                >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="germany flag"></i>Deutsch</a
                >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="france flag"></i>Français</a
                >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="spain flag"></i>Español</a
                >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="russia flag"></i>Русский</a
                >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                 ><i class="portugal flag"></i>Português</a
                >
            </li>
          </ul>
        </li>

        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a
             class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
            <img
                 src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                 class="rounded-circle"
                 height="22"
                 alt=""
                 loading="lazy"
                 />
          </a>
          <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
              >
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="index.html">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px; background: linear-gradient(to right, rgba(102, 126, 234, 1), rgba(118, 75, 162, 1))">
  <div class="container pt-4">
    <!--Section: Breadcrumb-->
    <section class="mb-4">
      <div class="card">
        <div class="card-header text-center py-3" style="padding-bottom: 0 !important;">
          <h5 class="mb-0 text-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="pengajuan.html">Pengajuan</a></li>
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
                    <input value="Muhammad Rafi" type="text" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">Nama Lengkap</label>
                  </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input value="54418811" type="text" id="form6Example3" class="form-control" />
                  <label class="form-label" for="form6Example3">NPM</label>
                </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input value="Sistem Bimbingan Skripsi" type="text" id="form6Example4" class="form-control" />
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
            <div class="alert alert-success" role="alert"><i class="fa-solid fas fa-check"></i> Proposal anda diterima! Silahkan menghubungi dosen terkait utnuk memulai bimbingan</div>
            <form>
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input value="Dosen 1" type="text" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">Dosen Pembimbing 1</label>
                  </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input value="Dosen 2"type="text" id="form6Example3" class="form-control" />
                  <label class="form-label" for="form6Example3">Dosen Pembimbing 2</label>
                </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input value="Sistem Bimbingan Skripsi" type="text" id="form6Example4" class="form-control" />
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
    </section>
    <!--Section: Status Pengajuan Proposal-->
  </div>
</main>
<!--Main layout-->
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
