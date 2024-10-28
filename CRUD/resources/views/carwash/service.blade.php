<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AutoWash</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{ asset('car-wash-website-template/img/favicon.ico') }}" rel="icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('car-wash-website-template/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('car-wash-website-template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('car-wash-website-template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('car-wash-website-template/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="\home">
                            <h1>Auto<span>Wash</span></h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Horario de abertura</h3>
                                    <p>Seg - Sex, 8:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Ligue</h3>
                                    <p>(14) 99114-4433</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email para Contato</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
                <div class="container">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="\home" class="nav-item nav-link active">Home</a>
                                <a href="\about" class="nav-item nav-link">Sobre</a>
                                <a href="\service" class="nav-item nav-link">Serviços</a>
                                <a href="\contact" class="nav-item nav-link">Contato</a>
                            </div>
                                <div class="ml-auto">
                                    <div class="container mt-5">
                                        <div class="d-flex justify-content-end mb-3">
                                            <?php if(Auth::check()): ?>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-custom dropdown-toggle"
                                                        type="button"
                                                        id="userDropdown"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        {{ Auth::user()->name }}
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Admin Area</a></li>
                                                        <li>
                                                            <form action="{{ route('logout') }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="dropdown-item">Logout</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php else: ?>
                                                <a class="btn btn-custom" href="{{ route('login') }}">Login</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
    <!-- Nav Bar End -->

    <!-- Service Start -->
    <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Oque Vendemos ?</p>
                    <h2>Produtos para Lavagem Premium</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Brake Reparing</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                        class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                        style="width: 35px; height: 35px;">
                        <p class="text-white mb-0 small">x4</p>
                        </div>
                    </div>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                        class="card-img-top" alt="Laptop" />
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                        <p class="small text-danger"><s>$1099</s></p>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">HP Notebook</h5>
                        <h5 class="text-dark mb-0">$999</h5>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                        <div class="ms-auto text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                        class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                        style="width: 35px; height: 35px;">
                        <p class="text-white mb-0 small">x2</p>
                        </div>
                    </div>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/7.webp"
                        class="card-img-top" alt="Laptop" />
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                        <p class="small text-danger"><s>$1199</s></p>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">HP Envy</h5>
                        <h5 class="text-dark mb-0">$1099</h5>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
                        <div class="ms-auto text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <p class="lead mb-0">Today's Combo Offer</p>
                        <div
                        class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                        style="width: 35px; height: 35px;">
                        <p class="text-white mb-0 small">x3</p>
                        </div>
                    </div>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/5.webp"
                        class="card-img-top" alt="Gaming Laptop" />
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                        <p class="small text-danger"><s>$1399</s></p>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">Toshiba B77</h5>
                        <h5 class="text-dark mb-0">$1299</h5>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
                        <div class="ms-auto text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Onde residimos</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Getulio Vargas, Bauru, SP</p>
                            <p><i class="fa fa-phone-alt"></i>(14) 99114-4433</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Novidades</h2>
                            <form>
                                <input class="form-control" placeholder="Nome Completo">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">AutoWash</a>, All Right Reserved. Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
        <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('car-wash-website-template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('car-wash-website-template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('car-wash-website-template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('car-wash-website-template/lib/counterup/counterup.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('car-wash-website-template/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('car-wash-website-template/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('car-wash-website-template/js/main.js') }}"></script>
</body>
</html>
