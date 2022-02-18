<!DOCTYPE html>
<html lang="en">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ScriptSea - Dashboard</title>
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
                href="Dashboard"
                class="list-group-item list-group-item-action py-2 ripple {{ Request::is('Dashboard') ? 'active' : '' }}"
                aria-current="true"
                >
                <i class="fas fa-tachometer-alt fa-fw me-3"></i
                    ><span>Main dashboard</span>
                </a>
                <a
                href="Profile"
                class="list-group-item list-group-item-action py-2 ripple {{ Request::is('Profile') ? 'active' : '' }}"
                >
                <i class="fas fa-user fa-fw me-3"></i
                    ><span>Profile</span>
                </a>
                <a
                href="Pengajuan"
                class="list-group-item list-group-item-action py-2 ripple {{ Request::is('Pengajuan') ? 'active' : '' }}"
                ><i class="fas fa-sticky-note fa-fw me-3"></i><span>Pengajuan</span></a
                >
                <a
                href="Bimbingan"
                class="list-group-item list-group-item-action py-2 ripple {{ Request::is('Bimbingan') ? 'active' : '' }}"
                ><i class="fas fa-comments fa-fw me-3"></i
                    ><span>Bimbingan</span></a
                    >
                    <a
                    href="Skripsi"
                    class="list-group-item list-group-item-action py-2 ripple {{ Request::is('Skripsi') ? 'active' : '' }}"
                    >
                    <i class="fas fa-book-open fa-fw me-3"></i><span>Skripsi</span>
                </a>
                <!--<a
                    href="#"
                    class="list-group-item list-group-item-action py-2 ripple"
                    ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
                    >
                    <a
                    href="#"
                    class="list-group-item list-group-item-action py-2 ripple"
                    ><i class="fas fa-globe fa-fw me-3"></i
                        ><span>International</span></a
                        >
                        <a
                        href="#"
                        class="list-group-item list-group-item-action py-2 ripple"
                        ><i class="fas fa-building fa-fw me-3"></i
                            ><span>Partners</span></a
                            >
                            <a
                            href="#"
                            class="list-group-item list-group-item-action py-2 ripple"
                            ><i class="fas fa-calendar fa-fw me-3"></i
                                ><span>Calendar</span></a
                                >
                                <a
                                href="#"
                                class="list-group-item list-group-item-action py-2 ripple"
                                ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
                                >
                                <a
                                href="#"
                                class="list-group-item list-group-item-action py-2 ripple"
                                ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
                                >-->
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
                    <a class="navbar-brand" href="Dashboard"><span style="color: #fff;">ScriptSea</span></a>
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
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
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
        <!-- Section: Main chart
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>Sales</strong></h5>
                    </div>
                    <div class="card-body">
                        <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
                    </div>
                </div>
            </section>
            Section: Main chart -->
            
            @yield('content')
            
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
        </div>
    </main>
    <!--Main layout-->
    <!-- End your project here-->
    
    <!-- MDB -->
    <script type="text/javascript" src="/assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>

