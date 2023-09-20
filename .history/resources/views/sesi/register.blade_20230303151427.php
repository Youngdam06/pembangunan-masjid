<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/icon1.png">
    <title>
    Manajemen Masjid
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    </head>

<body class="bg-gray-200">
    <div class="container position-sticky z-index-sticky ">
        <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            
            <!-- End Navbar -->
        </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                @if (session()->has('gagalreg'))
                    <div class="alert alert-danger alert-dismissable fade show text-light">
                        {{ session()->get('gagalreg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                        </button>
                    </div>
                @endif
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>
                    <div class="row mt-3">
                        <div class="col-2 text-center ms-auto">
                        </div>
                        <div class="col-2 text-center px-1">
                        </div>
                        <div class="col-2 text-center me-auto">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start" action="registers" method="POST">
                    @csrf
                        <label class="form-label" for="name">Nama</label>
                    <div class="input-group input-group-outline my-3">
                        <input type="name" class="form-control is-invalid" name="name" id="name">
                    </div>
                        <label class="form-label" for="email">Email</label>
                    <div class="input-group input-group-outline my-3">
                        <input type="email" class="form-control is-invalid" name="email" id="email">
                    </div>
                        <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="password" class="form-control is-invalid" name="password" id="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Register</button>
                    </div>
                    <small class="d-block mt-3">Sudah punya akun? Silahkan<a class="text-danger" href="/login"> Sign in
                    </a></small>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 col-md-6 my-auto">
                </div>
            </div>
            </div>
        </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
    <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>