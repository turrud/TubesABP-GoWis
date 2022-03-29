<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Go Wis | Welcome</title>

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    
</head>
<body>
        <!--Main Navigation-->
    <header>
    @include('layout.navbar')
    <!-- Navbar -->
  <!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
  
    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <img src="{{ asset('img/slide/cikole.jfif') }}" class="d-block w-100" alt="Sunset Over the City"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <img src="{{ asset('img/slide/perahu3.jpg') }}" class="d-block w-100" alt="Canyon at Nigh"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
  
      <!-- Single item -->
      <div class="carousel-item">
        <img src="{{ asset('img/slide/susu.jpg') }}" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <!-- Inner -->
  
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
    <div>
        <!--Section: Content-->
        <section>
          <div class="container">
        <div class="row">
            <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="{{ asset('img/lembang-zoo.jpg') }}" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Lembang PARK & ZOO</strong></h4>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p><strong>...</strong></p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
            </div>
        </div>
      </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <div class="container">
        <h4 class="mb-5"><strong>Destinasi Wisata Lembang</strong></h4>

        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="{{ asset('img/begonia.jpg') }}"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Taman Begonia</h5>
                <p class="card-text">
                    Tak hanya keindahan bunga yang menarik, taman ini juga memiliki daya tarik pada tata letak taman yang sangat menarik.
                </p>
                <a href="#!" class="btn btn-primary">Lihat Wisata</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="{{ asset('img/cikole.jpg') }}"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Grafika Cikole Lembang</h5>
                <p class="card-text">
                    Tempat wisata Lembang ini menjadi salah satu obyek wisata yang baru dan sangat instagramable. Moms bisa melakukan foto bersama dengan rumah hobbit yang hits di sosial media.
                </p>
                <a href="#!" class="btn btn-primary">Lihat Wisata</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="{{ asset('img/kawah-putih.jpg') }}"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Kawah Putih Ciwidey</h5>
                <p class="card-text">
                    Kawah Putih Ciwidey juga jadi salah satu rekomendasi tempat wisata Lembang terfavorit.
                </p>
                <a href="#!" class="btn btn-primary">Lihat Wisata</a>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        
  <!-- Pills navs -->
  

<!-- Copyright -->

@include('layout.footer')
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
</body>
</html>