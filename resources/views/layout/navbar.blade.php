<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="/">
        <img
            src="{{ asset('img/gowis.jpg') }}"
            alt="Go-wis Logo"
            class="rounded-circle"
            loading="lazy"
            style="margin-top: -1px;"
            width="50"
            height="50"
        />
        <span class="gowis mx-3">Go-Wis</span>
      </a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/paketWisata">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sewaKendaraan">Sewa Kendaraan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/berita">Berita</a>
          </li>
        </ul>
        <!-- Left links -->
  
        <div class="d-flex align-items-center">
          <button type="button" class="btn btn-link px-3 me-2">
            <a href="/login">Login</a>
          </button>
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->