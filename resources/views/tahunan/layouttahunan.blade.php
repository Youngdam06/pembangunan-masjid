
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="/assets/img/icon2.png">
<title>
    Tabel Laporan
</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
{{-- sidebar --}}
@include('layouts.sidebar')
{{-- end sidebar --}}

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <h6 class="font-weight-bolder mb-0">Laporan Total <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMasjid</h6>
        
    </nav>
    
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
        </div>
        @auth
        <li class="nav-item d-flex align-items-center" method="POST">
            <span class="d-sm-inline d-none"></span>
            <a href="/logouts" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Sign out</span>
            </a>
        </li>
            @else
        <li class="nav-item d-flex align-items-center" method="POST">
            <span class="d-sm-inline d-none"></span>
            <a href="/login" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign in</span>
            </a>
            </li>
        </li>
        @endauth
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            </div>
        </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
    </div>
    </div>
    
</nav>
<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
<div class="ms-md-auto pe-md-3 d-flex align-items-center">
</div>
<ul class="navbar-nav  justify-content-end">
<li class="nav-item d-flex align-items-center">
    <a href="/pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
    <i class="fa fa-user me-sm-1"></i>
    <span class="d-sm-inline d-none">Sign In</span>
    </a>
</li>
<li class="nav-item d-xl-none ps-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
    <div class="sidenav-toggler-inner">
        <i class="sidenav-toggler-line"></i>
        <i class="sidenav-toggler-line"></i>
        <i class="sidenav-toggler-line"></i>
    </div>
    </a>
</li>
<li class="nav-item px-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0">
    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
    </a>
</li>
<li class="nav-item dropdown pe-2 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-bell cursor-pointer"></i>
    </a>
</li>
</ul>
</div>
</div>
</nav>
    <!-- End Navbar -->
    {{-- konten --}}
    @include('tahunan.tampilTahunan')
    {{-- end konten --}}

    {{-- setting tampilan (opsional) --}}

    {{-- end setting tampilan (opsional) --}}
    

<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>