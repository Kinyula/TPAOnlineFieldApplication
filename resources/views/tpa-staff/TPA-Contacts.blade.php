<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TPA|Online|Application</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('storage/HomeImages/TPA1.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Map --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

</head>

<body>



    <!-- Topbar Start -->
    <style>
        /* Custom CSS for the background color */
        .bg-dark-blue {
            background-color: #003366;
            /* Dark Blue color */
        }

        .text-body {
            color: #f8f9fa;
            /* Light color for text, contrast with dark background */
        }

        .btn-outline-body {
            border-color: #f8f9fa;
            /* Light border color for social media buttons */
            color: #f8f9fa;
            /* Light color for icons */
        }

        .btn-outline-body:hover {
            background-color: #003366;
            /* Dark Blue background on hover */
            color: #f8f9fa;
            /* Light color for text/icons on hover */
        }

        .btn-sm-square {
            width: 36px;
            height: 36px;
            border-radius: 50%;
        }

        .fa-phone-alt,
        .fa-envelope-open {
            color: #f8f9fa;
            /* Light color for icons */
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            /* Underline links on hover */
        }
    </style>
    <div class="container-fluid bg-dark-blue p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+255222113648"><i
                            class="fa fa-phone-alt text-warning me-2"></i>+255 22 2113648</a>
                    <a class="text-body px-2" href="mailto:info@tanzaniaports.com"><i
                            class="fa fa-envelope-open text-warning me-2"></i>info@tanzaniaports.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="#">Terms</a>
                    <a class="text-body px-2" href="#">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ asset('/') }}" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center no-underline">
            <img src="{{ asset('storage/HomeImages/TPA1.png') }}" alt="Icon" class="me-2" style="width: 50px; height: 50px;">
            <h1 class="text-warning m-0">Tanzania Port Authority</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ asset('/') }}" class="nav-item nav-link text-dark-blue">
                    <i class="fa fa-home me-2"></i> Home
                </a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark-blue" data-bs-toggle="dropdown">
                        <i class="fa fa-bars me-2"></i> Pages
                    </a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="#services" class="dropdown-item text-dark-blue">
                            <i class="fa fa-cogs me-2"></i> Our Services
                        </a>
                        <a href="#leaders" class="dropdown-item text-dark-blue">
                            <i class="fa fa-users me-2"></i> Higher Staff Members
                        </a>
                    </div>
                </div>
                <a href="{{ asset('TPA/contact') }}" class="nav-item nav-link text-dark-blue">
                    <i class="fa fa-envelope me-2"></i> Contact
                </a>
            </div>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-item nav-link text-warning">
                        <i class="fa fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="nav-item nav-link text-warning">
                        <i class="fa fa-sign-in-alt me-2"></i> Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-item nav-link text-warning">
                            <i class="fa fa-user-plus me-2"></i> Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-warning active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contact Us</h4>
                <h1 class="display-5 mb-4">If You Have Any Question, Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-warning"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Address</p>
                                <h3 class="mb-0">Tanzania Port Authority,
                                    P.O. Box 9184, Dar es Salaam, Tanzania</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-warning"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h3 class="mb-0">+255 22 2113648</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-warning"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h3 class="mb-0">info@tanzaniaports.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                    <form action="{{ route('store') }}" method="POST">

                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="subject" placeholder="Phone Number" name="phone_number">
                                    <label for="phone_number">Phone Number</label>
                                </div>

                                @error('phone_number')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="question"></textarea>
                                    <label for="message">Any question ? ask here...</label>
                                </div>
                                @error('question')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning text-white w-100 py-3" type="submit"><i
                                        class="fas fa-paper-plane px-1"></i>Submit your question</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container">
        <h2 class="map-heading">The Map of Tanzania Showing All Port Branches</h2>
        <div id="map" class="container-fluid" style="height: 450px;"></div>
    </div>


    <!-- Google Map End -->


    <!-- Footer Start -->
    <div class="container-fluid text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #003366">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-warning me-3"></i>Tanzania Port Authority,
                        P.O. Box 9184, Dar es Salaam, Tanzania</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-warning me-3"></i>+255 22 2113648</p>
                    <p class="mb-2"><i class="fa fa-envelope text-warning me-3"></i>info@tanzaniaports.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href="https://twitter.com/TanzaniaPorts"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-body me-1"
                            href="https://www.facebook.com/TanzaniaPorts"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1"
                            href="https://www.youtube.com/TanzaniaPorts"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-body me-0"
                            href="https://www.linkedin.com/company/tanzania-port-authority/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Services</h3>
                    <a class="btn btn-link" href="">Port Operations Management</a>
                    <a class="btn btn-link" href="">Infrastructure Development and Maintanance</a>
                    <a class="btn btn-link" href="">Customs and Security</a>
                    <a class="btn btn-link" href="">Cargo Handling Services</a>
                    <a class="btn btn-link" href="">Harbor Pilotage and Towing Services</a>
                    <a class="btn btn-link" href="">Logistics and Transport Coordination</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Quick Links</h3>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Newsletter</h3>
                    <p>Stay updated with the latest news and developments at Tanzania Port Authority.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-warning py-2 position-absolute top-0 end-0 mt-2 me-2">Sign Up</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">
                            @php
                                echo date('Y');
                            @endphp
                            Tanzania
                            Port Authority</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="">Software Engineer Victor Z . K</a>
                        <br> Distributed By: <a class="border-bottom" href="Group 3" target="_blank">Group 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning text-white btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([-6.369028, 34.888822], 6); // Center the map on Tanzania

        // Add a tile layer (map background)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add markers for branches
        var branches = [{
                name: 'Headquarters',
                coords: [-6.8123, 39.2830], // Coordinates of the headquarters
                popup: 'Dar es Salaam port ( HQ )'
            },
            {
                name: 'Tanga port',
                coords: [-5.0694, 39.1048], // Coordinates of another branch
                popup: 'Tanga port'
            },
            // Add more branches here
        ];

        branches.forEach(function(branch) {
            var marker = L.marker(branch.coords).addTo(map)
                .bindPopup(branch.popup);

            // Open the popup for the headquarters marker by default
            if (branch.name === 'Headquarters') {
                marker.openPopup();
            }
        });
    </script>



@include('sweetalert::alert')
</body>

</html>
