<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Videos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assests/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assests/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assests/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assests/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><a href="#" class="text-white"></a></small>
                    <small class="me-3"><a href="#" class="text-white"></a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2"></small></a>
                    <a href="#" class="text-white"><small class="text-white mx-2"></small></a>
                    <a href="#" class="text-white"><small class="text-white ms-2"></small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary display-6">QUIZ</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="home.blade.php" class="nav-item nav-link"> Login</a>
                        <a href="shop.htl" class="nav-item nav-link">Quiz Fortnite</a>
                        <a href="shop-detail.html" class="nav-item nav-link active">Otros</a>
                    </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">Videos</h4>
                    <h1 class="mb-5 display-3 text-primary">Consejos y Entretenimiento</h1>
                    <h4 class="mb-3 text-secondary">
                        ¡Bienvenido a nuestro rincón de diversión en línea, donde la emoción de Fortnite cobra vida! Sumérgete en un universo lleno de desafíos, estrategia y pura acción.</h4>
                    <div class="position-relative mx-auto">
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="{{asset('assests/img/l.jpg')}}" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                <a href="index.html" class="btn px-4 py-2 text-white rounded">Home</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="{{asset('assests/img/l3.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="shop.html" class="btn px-4 py-2 text-white rounded">Quiz</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Vesitable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0">Videos</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="{{asset('assests/img/v1.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <h4>FORTNITE 2.5</h4>
                        <p></p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <a href="https://youtu.be/nHeiHRKz5eM?si=9YyyV7P85K_yFu6w" class="btn border border-secondary rounded-pill px-3 text-primary">IR</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="{{asset('assests/img/v2.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>

                    <div class="p-4 rounded-bottom">
                        <h4>Jelty | Highlights #1 | </h4>
                        <p></p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <a href="https://youtu.be/KBMQlrN3Q8Y?si=HNO6NZLYT0G4YVsa" class="btn border border-secondary rounded-pill px-3 text-primary">IR</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="{{asset('assests/img/v3.jpg')}}" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <h4>DED, JUAN Y BARCA REACCIONAN AL EVENTO MAS AMBICIOSO DE FORTNITE</h4>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <a href="https://youtu.be/8FoJsfp-tgE?si=aB-ROBh4yqNl6Bpa" class="btn border border-secondary rounded-pill px-3 text-primary"> IR</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="{{asset('assests/img/v4.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <h4>ASÍ ES MI SKIN DE FORTNITE - TheGrefg</h4>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <a href="https://youtu.be/fgGvw9RdwZQ?si=YrQmcw-hr39geWxn" class="btn border border-secondary rounded-pill px-3 text-primary"> IR</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="{{asset('assests/img/v.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <h4>Estereotipos de Skins en Fortnite 13</h4>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <a href="https://youtu.be/RR9kxOvmy_8?si=_9eAQKU9LRnEk-pn" class="btn border border-secondary rounded-pill px-3 text-primary">IR</a>
                        </div>
                    </div>
                </div>
                <div class="border border-primary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="{{asset('assests/img/v6.jpg')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="p-4 rounded-bottom">
                        <h4>40 CURIOSIDADES DE LA TEMPORADA 4 DE FORTNITE</h4>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <a href="https://youtu.be/b0NLVmYaUtM?si=vm7je-dzNkJOxjF0" class="btn border border-secondary rounded-pill px-3 text-primary">IR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        <div class="container py-50">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(57, 5, 247, 0.5) ;">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <h1 class="text-primary mb-0">QUIZ</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3"></h4>
                        <p class="mb-4"></p>
                        <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">

                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assests/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assests/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assests/lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{asset('assests/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assests/js/main.js')}}"></script>
</body>

</html>