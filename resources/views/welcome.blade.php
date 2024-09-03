</html>
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

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fontAwesome/css/all.css') }}">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-warning" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div> -->
    <!-- Spinner End -->


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
            v width: 36px;
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
        <div class="row gx-0">
            <!-- Large Screen Content -->
            <div class="col-lg-7 px-5 text-start d-none d-lg-flex">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+255222113648">
                        <i class="fa fa-phone-alt text-warning me-2"></i>+255 22 2113648
                    </a>
                    <a class="text-body px-2" href="mailto:info@tanzaniaports.com">
                        <i class="fa fa-envelope-open text-warning me-2"></i>info@tanzaniaports.com
                    </a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end d-none d-lg-flex">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <span class="text-warning d-flex align-items-center animate__animated animate__bounce">
                        <i class="fa fa-calendar-alt text-warning me-2"></i>
                        @if ($deadline)
                            <span class="font-weight-bold">Deadline:
                                {{ \Carbon\Carbon::parse($deadline)->format('d M Y') }}</span>
                        @else
                            <span class="font-weight-bold">No deadline set</span>
                        @endif
                    </span>

                    <a class="text-body px-2" href="#">Terms</a>
                    <a class="text-body px-2" href="#">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Small Screen Content -->
            <div class="col-12 px-5 text-center d-lg-none">
                <span class="text-warning d-flex align-items-center animate__animated animate__bounce">
                    <i class="fa fa-calendar-alt text-warning me-2"></i>
                    @if ($deadline)
                        <span class="font-weight-bold">Deadline:
                            {{ \Carbon\Carbon::parse($deadline)->format('d M Y') }}</span>
                    @else
                        <span class="font-weight-bold">No deadline set</span>
                    @endif
                </span>

            </div>
        </div>
    </div>


    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="{{ asset('/') }}" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center no-underline">
            <img src="{{ asset('storage/HomeImages/real-tpa.png') }}" alt="Icon" class="me-2"
                style="width: 50px; height: 50px;">
            <!-- Text that disappears on small screens -->
            <h1 class="text-warning m-0 d-none d-lg-block">Tanzania Port Authority</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ asset('/') }}" class="nav-item nav-link text-dark-blue">
                    <i class="fa fa-home me-2"></i> Home
                </a>

            </div>

            @php
                $deadlinePassed = $deadline && \Carbon\Carbon::parse($deadline)->isPast();
            @endphp

            <span class="text-warning d-flex align-items-center animate__animated animate__bounce">
                <i class="fa fa-calendar-alt text-warning me-2"></i>
                @if ($deadline)
                    @if ($deadlinePassed)
                        <span class="font-weight-bold">Deadline passed:
                            {{ \Carbon\Carbon::parse($deadline)->format('d M Y') }}</span>
                    @else
                        <span class="font-weight-bold">Deadline:
                            {{ \Carbon\Carbon::parse($deadline)->format('d M Y') }}</span>
                    @endif
                @else
                    <span class="font-weight-bold">No deadline set</span>
                @endif
            </span>

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
                        @if (!$deadlinePassed)
                            <a href="{{ route('register') }}" class="nav-item nav-link text-warning">
                                <i class="fa fa-user-plus me-2"></i> Register
                            </a>
                        @else
                            <span class="text-danger d-block mt-2"> Application closed.</span>
                        @endif
                    @endif
                @endauth
            @endif


        </div>
    </nav>


    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">

            <!-- Carousel Item 1 -->
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('storage/HomeImages/hamburg-elbe-ship-water.jpg') }}'>">
                <div class="position-relative w-100" style="height: 80vh;">
                    <img class="img-fluid w-100 h-100"
                        src="{{ asset('storage/HomeImages/hamburg-elbe-ship-water.jpg') }}"
                        alt="Hamburg Elbe Ship Water" style="object-fit: cover;">
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <h2 class="fs-2 text-white animated slideInDown">Unlock Your Potential in ICT</h2>
                        <p class="fs-5 fw-medium text-white mb-4 pb-3">
                            Dive into the dynamic world of ICT with our comprehensive applications. From networking and
                            software development to digital marketing, our programs are designed to equip you with the
                            skills needed to thrive in the tech industry.
                        </p>
                        <a href="#about_us"
                            class="btn btn-warning py-3 px-5 animated slideInLeft text-white mb-5">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 2 -->
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('storage/HomeImages/container-port-loading-stacked.jpg') }}'>">
                <div class="position-relative w-100" style="height: 80vh;">
                    <img class="img-fluid w-100 h-100"
                        src="{{ asset('storage/HomeImages/container-port-loading-stacked.jpg') }}"
                        alt="Container Port Loading" style="object-fit: cover;">
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <h2 class="fs-2 text-white animated slideInDown">Innovate with Software Development</h2>
                        <p class="fs-5 fw-medium text-white mb-4 pb-3">
                            Join our software development programs to gain hands-on experience in creating cutting-edge
                            applications. Learn to build, test, and deploy software solutions that meet global standards
                            and drive technological progress.
                        </p>
                        <a href="#"
                            class="btn btn-warning py-3 px-5 rounded animated slideInLeft text-white mb-5">Explore
                            Now</a>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 3 -->
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('storage/HomeImages/birds-eye-view-photo-of-freight-containers.jpg') }}'>">
                <div class="position-relative w-100" style="height: 80vh;">
                    <img class="img-fluid w-100 h-100"
                        src="{{ asset('storage/HomeImages/birds-eye-view-photo-of-freight-containers.jpg') }}"
                        alt="Freight Containers" style="object-fit: cover;">
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <h2 class="fs-2 text-white animated slideInDown">Empower Your Career in Digital Marketing</h2>
                        <p class="fs-5 fw-medium text-white mb-4 pb-3">
                            Step into the world of digital marketing with our targeted programs. Learn how to create
                            impactful campaigns, analyze data, and drive business success through innovative marketing
                            strategies.
                        </p>
                        <a href="#"
                            class="btn btn-warning py-3 px-5 rounded animated slideInLeft text-white mb-5">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Carousel End -->

    <br>
    <div class="container">
        <h2 class="map-heading text-warning">The Map of Tanzania Showing All Port Branches</h2>
        <div id="map" class="container-fluid" style="height: 450px;"></div>
    </div>

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <i class="fas fa-network-wired fa-3x"></i>
                        </div>
                        <h3 class="mb-3">Networking & Cybersecurity</h3>
                        <p class="mb-0">Our networking programs offer in-depth knowledge and hands-on experience in
                            designing, managing, and securing network infrastructures. Learn to configure routers,
                            switches, firewalls, and more, to ensure robust and secure communications.</p>
                        <p class="mb-0">With a focus on both wired and wireless networking, our courses prepare you
                            to tackle real-world challenges in network administration and cybersecurity, ensuring that
                            you are ready to excel in a fast-paced industry.</p>
                        <button class="btn btn-warning py-3 px-5 mt-2 text-white"
                            onclick="alert('Please register first and then log in to your account to see more descriptions about Field, Internship, Research & Innovation, and Mentorship applications.')">
                            <i class="fa fa-plus text-white me-3"></i>Read More...
                        </button>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <i class="fas fa-code fa-3x"></i>
                        </div>
                        <h3 class="mb-3">Software Development</h3>
                        <p class="mb-0">Our software development track provides comprehensive training in coding,
                            system design, and application development. Whether you're interested in web, mobile, or
                            desktop applications, we cover a wide range of programming languages and frameworks.</p>
                        <p class="mb-0">Through hands-on projects and real-world scenarios, you'll gain the skills
                            needed to develop, test, and deploy software solutions that meet industry standards and user
                            needs.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <i class="fas fa-chart-line fa-3x"></i>
                        </div>
                        <h3 class="mb-3">Digital Marketing & Analytics</h3>
                        <p class="mb-0">Our digital marketing program equips you with the knowledge and tools to
                            succeed in the dynamic world of online marketing. Learn how to create effective campaigns,
                            optimize for search engines, and leverage social media platforms to engage with your
                            audience.</p>
                        <p class="mb-0">We also cover data analytics, providing you with the skills to measure
                            campaign performance, analyze user behavior, and make data-driven decisions that drive
                            business growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Facts End -->






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
    <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top text-white"><i
            class="fas fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
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



    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    @include('sweetalert::alert')

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
</body>

</html>
