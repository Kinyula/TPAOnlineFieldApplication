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
                        <h2 class="fs-2 text-white animated slideInDown">Welcome to the Tanzania Port Authority</h2>
                        <p class="fs-5 fw-medium text-white mb-4 pb-3">
                            Empowering Tanzania’s maritime industry with innovative port services. Our advanced
                            infrastructure and strategic location drive global trade and economic growth, ensuring
                            efficient logistics and sustainability.
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
                        <h2 class="fs-2 text-white animated slideInDown">Tanzania's Maritime Success</h2>
                        <p class="fs-5 fw-medium text-white mb-4 pb-3">
                            Transforming global trade with our state-of-the-art port services. We enhance efficiency and
                            build robust logistics infrastructure, positioning Tanzania as a key player in international
                            commerce.
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
                        <h2 class="fs-2 text-white animated slideInDown">Leading the Way in Maritime Innovation</h2>
                        <p class="fs-5 fw-medium text-white mb-4 pb-3">
                            At the forefront of maritime logistics, we integrate innovative technologies to enhance
                            efficiency and sustainability. Our strategic initiatives support global trade and drive
                            economic development.
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




    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <i class="fas fa-graduation-cap fa-3x"></i>
                        </div>
                        <h3 class="mb-3">Hands-On Practical Training</h3>
                        <p class="mb-0">Our practical training programs are designed to bridge the gap between
                            classroom theory and real-world application. We provide college students with hands-on
                            experiences in their field of study, ensuring they acquire essential skills and knowledge to
                            excel in their careers.</p>
                        <p class="mb-0">From industry workshops to live project work, our training modules are
                            tailored to offer practical insights and problem-solving opportunities. Join us to gain
                            valuable experience and enhance your readiness for the professional world.</p>
                        <a class="btn btn-warning py-3 px-5 mt-2 text-white"
                            href="{{ asset('TPA/Online-application') }}" class="btn btn-warning py-3 px-5"><i
                                class="fa fa-plus text-white me-3"></i>Read
                            More...</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <i class="fas fa-ship fa-3x"></i>
                        </div>
                        <h3 class="mb-3">Marine Transport Services</h3>
                        <p class="mb-0">We offer comprehensive marine transport services to ensure efficient and
                            reliable shipping of goods across the globe. Our fleet of modern cargo ships and experienced
                            crew provide safe and timely transportation for various types of cargo.</p>
                        <p class="mb-0">From container shipping to bulk cargo, our services are designed to meet the
                            diverse needs of our clients. We handle logistics planning, route optimization, and
                            real-time tracking to enhance the shipping experience and ensure smooth operations.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <i class="fas fa-box-open fa-3x"></i>
                        </div>
                        <h3 class="mb-3">Comprehensive Shipping Solutions</h3>
                        <p class="mb-0">We provide a range of shipping solutions tailored to meet the needs of
                            various industries. From small packages to large freight, our shipping services ensure that
                            your goods are delivered safely and efficiently.</p>
                        <p class="mb-0">Our state-of-the-art tracking system allows you to monitor your shipments in
                            real-time, ensuring transparency and timely delivery. With our extensive network and
                            dedicated team, we handle logistics with precision and reliability.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('storage/HomeImages/2.jpg') }}" alt="">
                        <img class="img-fluid" src="{{ asset('storage/HomeImages/1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title" id="about_us">About Us</h4>
                    <h1 class="display-5 mb-4">Driving Growth and Connectivity for Tanzania's Future</h1>
                    <p>At the Tanzania Port Authority, we are dedicated to fostering economic growth and enhancing
                        global connectivity through our strategic port operations. With a rich history and a vision for
                        the future, our authority oversees the management and development of key port facilities that
                        play a crucial role in Tanzania's trade and commerce.</p>
                    <p class="mb-4">Our commitment extends beyond just operational efficiency; we strive to deliver
                        world-class services that support the logistics and maritime industries. By investing in
                        cutting-edge technology and sustainable practices, we aim to elevate Tanzania’s port
                        infrastructure to meet the demands of a dynamic global economy. Our mission is to facilitate
                        seamless trade, promote regional development, and ensure the security and safety of our maritime
                        activities.</p>
                    <p class="mb-4">With a dedicated team and a customer-centric approach, the Tanzania Port
                        Authority remains at the forefront of innovation and excellence, driving progress and
                        contributing to the prosperity of our nation.</p>

                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-warning"
                            style="width: 120px; height: 120px;">
                            <h1 id="yearsCounter" class="display-1 mb-n2">
                                @php
                                    $startYear = 2005; // Replace with your start year
                                    $currentYear = date('Y'); // Get the current year
                                    $yearsPassed = $currentYear - $startYear;
                                @endphp
                                0
                            </h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>


                    <a class="btn btn-warning py-3 px-5 text-white" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title" id="services">Our Services</h4>
                <h1 class="display-5 mb-4">We are Focused On the assurance of connectivity around the world</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('storage/HomeImages/1.png') }}" alt="">
                        <div class="service-text p-5">
                            <i class="fa fa-anchor fa-2x text-warning me-2"></i>
                            <h3 class="mb-3">Port Operations Management</h3>
                            <p class="mb-4">At Tanzania Port Authority, Port Operations Management encompasses the
                                efficient oversight of all port activities to ensure smooth and effective operations.
                                This includes managing vessel schedules, coordinating cargo handling processes,
                                optimizing berth allocation, and maintaining operational standards. Our dedicated team
                                ensures that ships are promptly and safely docked, cargo is handled with precision, and
                                operational disruptions are minimized. By leveraging advanced technology and best
                                practices, we strive to enhance productivity and deliver high-quality services to our
                                stakeholders.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-warning me-3"></i>Read
                                More</a>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('storage/HomeImages/1.png') }}" alt="">
                        <div class="service-text p-5">

                            <i class="fa fa-tools fa-2x text-warning mb-4"></i> <!-- FontAwesome icon for tools -->
                            <h3 class="mb-3">Infrastructure Development and Maintenance</h3>
                            <p class="mb-4">At Tanzania Port Authority, Infrastructure Development and Maintenance
                                are crucial for sustaining and enhancing port operations. This encompasses the
                                construction, upgrading, and repair of port facilities, including docks, storage areas,
                                and transportation networks. Our commitment to robust infrastructure ensures that the
                                port can accommodate increasing cargo volumes, improve operational efficiency, and
                                provide a safe and reliable environment for all maritime activities. Regular maintenance
                                routines and strategic development plans help us adapt to evolving industry demands and
                                maintain high standards of service.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-warning me-3"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('storage/HomeImages/1.png') }}" alt="">

                        <div class="service-text p-5">
                            <i class="fa fa-shield-alt fa-2x text-warning mb-4"></i>
                            <!-- FontAwesome icon for shield -->
                            <h3 class="mb-3">Customs and Security</h3>
                            <p class="mb-4">At Tanzania Port Authority, Customs and Security are paramount for
                                maintaining the integrity and safety of port operations. Our customs procedures ensure
                                the proper inspection and clearance of goods, preventing illegal trade and ensuring
                                compliance with national and international regulations. Our security measures include
                                surveillance, access control, and patrolling to safeguard the port infrastructure,
                                cargo, and personnel. By implementing advanced technologies and rigorous protocols, we
                                aim to provide a secure environment that facilitates smooth and lawful trade activities
                                while protecting against potential threats.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-warning me-3"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('storage/HomeImages/1.png') }}" alt="">
                        <div class="service-text p-5">
                            <i class="fa fa-cogs fa-3x text-warning mb-4"></i>
                            <h3 class="mb-3">Cargo Handling Services</h3>
                            <p class="mb-4">At Tanzania Port Authority, Cargo Handling Services are critical to
                                ensuring the smooth and efficient movement of goods through our ports. This involves
                                managing the loading and unloading of cargo from vessels, coordinating with various
                                stakeholders to ensure timely processing, and utilizing advanced equipment and
                                techniques to handle different types of cargo safely. Our dedicated team is committed to
                                maintaining high standards of efficiency and safety, ensuring that all cargo operations
                                meet regulatory requirements and industry best practices.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-warning me-3"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('storage/HomeImages/1.png') }}" alt="">
                        <div class="service-text p-5">
                            <i class="fa fa-anchor fa-3x text-warning mb-4"></i>
                            <h3 class="mb-3">Harbor Pilotage and Towing Services</h3>
                            <p class="mb-4">The Tanzania Port Authority offers comprehensive Harbor Pilotage and
                                Towing Services to ensure the safe and efficient movement of vessels within port waters.
                                Our skilled harbor pilots guide ships through complex navigation channels, while our
                                powerful tugboats provide essential towing support for docking and undocking maneuvers.
                                These services are crucial for maintaining the safety of maritime operations and
                                minimizing the risk of accidents in the port area. By leveraging expert knowledge and
                                state-of-the-art equipment, we ensure that all vessels are handled with precision and
                                care.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-warning me-3"></i>Read
                                More</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('storage/HomeImages/1.png') }}" alt="">
                        <div class="service-text p-5">
                            <i class="fa fa-truck fa-3x text-warning mb-4"></i>
                            <h3 class="mb-3">Logistics and Transport Coordination</h3>
                            <p class="mb-4">At Tanzania Port Authority, Logistics and Transport Coordination plays a
                                pivotal role in ensuring the seamless movement of goods. Our team is dedicated to
                                managing the logistics of cargo, from arrival at the port to its final destination. This
                                includes coordinating with transport providers, managing schedules, and ensuring
                                compliance with regulations. By utilizing advanced tracking systems and maintaining
                                strong relationships with logistics partners, we strive to optimize efficiency and
                                reliability in all transport operations.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-warning me-3"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Higher Staff Members</h4>
                <h1 class="display-5 mb-4">Experienced leaders guiding our port's success.</h1>
            </div>

            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('storage/HomeImages/AbdallahMwinyi.png') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2"> Name</h3>
                            <span class="text-primary">Abdallah Mwinyi</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('storage/HomeImages/EllinamiMinja.png') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2"> Name</h3>
                            <span class="text-primary">Ellinami Minja</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('storage/HomeImages/ErnestMangu.png') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Name</h3>
                            <span class="text-primary">Ernest Mangu</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('storage/HomeImages/MasanjaKadogosa.png') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2"> Name</h3>
                            <span class="text-primary">Masanja Kadogosa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counter = document.getElementById('yearsCounter');
            const yearsPassed = {{ $yearsPassed }};
            let count = 0;
            const speed = 100; // Adjust speed as needed

            function updateCounter() {
                if (count < yearsPassed) {
                    count++;
                    counter.innerText = count;
                    setTimeout(updateCounter, speed);
                } else {
                    counter.innerText = yearsPassed;
                }
            }

            updateCounter();
        });
    </script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    @include('sweetalert::alert')





</body>
