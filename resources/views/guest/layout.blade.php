<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Data Kependudukan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('assets-guest/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-guest/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('assets-guest/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{ asset('assets-guest/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
  </div>
  <!-- Spinner End -->


  <!-- Brand Start -->
  <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex">
          <i class="bi bi-telephone-inbound fs-2"></i>
          <div class="ms-3">
            <h5 class="text-white mb-0">Call Now</h5>
            <span>+012 345 6789</span>
          </div>
        </div>
        <a href="index.html" class="h1 text-white mb-0">Data<span class="text-dark">Kependudukan</span></a>
        <div class="d-flex">
          <i class="bi bi-envelope fs-2"></i>
          <div class="ms-3">
            <h5 class="text-white mb-0">Mail Now</h5>
            <span>binadesa@gmail.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand End -->


  <!-- Navbar Start -->
  <div class="container-fluid sticky-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
        <a href="{{ route('dashboard') }}" class="navbar-brand d-lg-none">
          <h1 class="text-primary m-0">Data<span class="text-dark">Kependudukan</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <a href="{{ route('dashboard') }}"
              class="nav-item nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              Dashboard
            </a>

            <a href="{{ route('warga.index') }}"
              class="nav-item nav-link {{ request()->is('warga*') ? 'active' : '' }}">
              Data Warga
            </a>

            <a href="{{ route('kependudukan.index') }}"
              class="nav-item nav-link {{ request()->is('kependudukan*') ? 'active' : '' }}">
              Data Keluarga
            </a>

            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle {{ request()->is('pages*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                Pages
              </a>
              <div class="dropdown-menu bg-light m-0">
                <a href="#" class="dropdown-item">Features</a>
                <a href="#" class="dropdown-item">Our Team</a>
                <a href="#" class="dropdown-item">Testimonial</a>
                <a href="#" class="dropdown-item">Appoinment</a>
                <a href="#" class="dropdown-item">404 Page</a>
              </div>
            </div>

            <a href="#" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">
              Contact
            </a>
          </div>
          <div class="ms-auto d-none d-lg-flex">
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Navbar End -->

  <main class="min-vh-100 bg-light">
    @yield('content')
  </main>

  <footer class="bg-primary text-white text-center py-3">
    <p class="mb-0">© 2025 | Bina Desa - Kependudukan</p>
  </footer>

  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets-guest/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('assets-guest/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('assets-guest/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('assets-guest/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('assets-guest/lib/owlcarousel/owl.carousel.min.js')}}"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('assets-guest/js/main.js')}}"></script>
</body>

</html>