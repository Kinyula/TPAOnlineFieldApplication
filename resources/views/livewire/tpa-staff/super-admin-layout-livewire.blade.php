<div>
    <!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <title>TPA|Online|Application</title>

        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/HomeImages/TPA1.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/HomeImages/TPA1.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/HomeImages/TPA1.png') }}" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('fontAwesome/css/all.css') }}">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}" />
        <link rel="stylesheet" type="text/css"
            href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
        <link rel="stylesheet" type="text/css"
            href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
            crossorigin="anonymous"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-GBZ3SGGX85");
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js"
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
        </script>
        <!-- End Google Tag Manager -->
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased">

        @if (!Auth::check())
            <div class="pre-loader">
                <div class="pre-loader-box">
                    <div class="loader-logo">
                        <img src="{{ asset('vendors/images/udom.png') }}" alt="" />
                    </div>
                    <div class="loader-progress" id="progress_div">
                        <div class="bar" id="bar1"></div>
                    </div>
                    <div class="percent" id="percent1">0%</div>
                    <div class="loading-text">Loading...</div>
                </div>
            </div>
        @else
        @endif

        <div class="header">
            <div class="header-left">
                <div class="menu-icon bi bi-list"></div>
                <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>


            </div>
            <div class="header-right">
                <div class="dashboard-setting user-notification">
                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                            <i class="dw dw-settings2"></i>
                        </a>
                    </div>
                </div>


                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon" style="width: 40px;height:">

                                <img src="{{ asset('storage/profile_images/' . $profileImage->profile_image) }}"
                                    alt="" />
                            </span>
                            <span class="user-name">{{ auth()->user()->first_name }} ( {{ auth()->user()->position }} )</span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                            <hr>
                            <a class="dropdown-item">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out"></i>
                                        Log Out
                                    </x-dropdown-link>
                                </form>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-sidebar">
            <div class="sidebar-title">
                <h3 class="weight-600 font-16 text-blue">
                    Layout Settings
                    <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
                </h3>
                <div class="close-sidebar" data-toggle="right-sidebar-close">
                    <i class="icon-copy ion-close-round"></i>
                </div>
            </div>
            <div class="right-sidebar-body customscroll">
                <div class="right-sidebar-body-content">
                    <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                        <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                    </div>

                    <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                        <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                    </div>

                    <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                    <div class="sidebar-radio-group pb-10 mb-10">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon"
                                class="custom-control-input" value="icon-style-1" checked="" />
                            <label class="custom-control-label" for="sidebaricon-1"><i
                                    class="fa fa-angle-down"></i></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon"
                                class="custom-control-input" value="icon-style-2" />
                            <label class="custom-control-label" for="sidebaricon-2"><i
                                    class="ion-plus-round"></i></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon"
                                class="custom-control-input" value="icon-style-3" />
                            <label class="custom-control-label" for="sidebaricon-3"><i
                                    class="fa fa-angle-double-right"></i></label>
                        </div>
                    </div>

                    <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                    <div class="sidebar-radio-group pb-30 mb-10">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                                class="custom-control-input" value="icon-list-style-1" checked="" />
                            <label class="custom-control-label" for="sidebariconlist-1"><i
                                    class="ion-minus-round"></i></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                                class="custom-control-input" value="icon-list-style-2" />
                            <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                    aria-hidden="true"></i></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                                class="custom-control-input" value="icon-list-style-3" />
                            <label class="custom-control-label" for="sidebariconlist-3"><i
                                    class="dw dw-check"></i></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                                class="custom-control-input" value="icon-list-style-4" checked="" />
                            <label class="custom-control-label" for="sidebariconlist-4"><i
                                    class="icon-copy dw dw-next-2"></i></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                                class="custom-control-input" value="icon-list-style-5" />
                            <label class="custom-control-label" for="sidebariconlist-5"><i
                                    class="dw dw-fast-forward-1"></i></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                                class="custom-control-input" value="icon-list-style-6" />
                            <label class="custom-control-label" for="sidebariconlist-6"><i
                                    class="dw dw-next"></i></label>
                        </div>
                    </div>

                    <div class="reset-options pt-30 text-center">
                        <button class="btn btn-danger" id="reset-settings">
                            Reset Settings
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-side-bar">
            <div class="brand-logo">
                <a href="{{ asset('/dashboard') }}" style="color:black;" href="javascript:;">
                    <img style="width: 55px;" src="{{ asset('storage/HomeImages/real-tpa.png') }}"
                        alt="" srcset="">
                    <p class="text-gray-500" style="position:relative;left:10%">TOAS</p>
                </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">
                        <li class="">
                            <a href="{{ asset('dashboard') }}" class="dropdown-toggle">
                                <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                            </a>

                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon bi bi-person"></span><span class="mtext">View profile</span>
                            </a>
                            <ul class="submenu">
                                <li><a  href="{{ asset('/profile/'.auth()->user()->id)}}">Profile</a></li>

                            </ul>

                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle ">
                                <span class="micon bi bi-pencil-square"></span><span class="mtext">Activities</span>
                            </a>
                            <ul class="submenu">
                                <li><a class="active:bg-red-800"  href="{{ asset('TPA/tpa-management') }}">
                                        TPA management
                                    </a></li>

                            </ul>

                            <ul class="submenu">
                                <li><a class="active:bg-red-800"  href="{{ asset('TPA/staff-management') }}">
                                        Staff management
                                    </a></li>

                            </ul>






                            {{-- <ul class="submenu">
                                <li><a href="{{ asset('UIMS/add-asset-status') }}">
                                        Add an allocation status
                                    </a></li>

                            </ul> --}}


                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            @yield('content')
        </div>


        <footer class="bg-blue-800 text-yellow-500 py-6 mt-8">
            <div class="container mx-auto text-center">
                <p class="text-sm sm:text-base">
                    &copy; {{ date('Y') }} All rights reserved. Developed and maintained by Software Engineer Victor Z.K.
                </p>
                <p class="text-xs sm:text-sm text-gray-400 mt-2">
                    Unauthorized copying, sharing, or redistribution is strictly prohibited.
                </p>
            </div>
        </footer>

        <!-- js -->

        <script src="{{ asset('vendors/scripts/core.js') }}"></script>
        <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
        <script src="{{ asset('vendors/scripts/process.js') }}"></script>
        <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
        <script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendors/scripts/dashboard.js') }}"></script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
                style="display: none; visibility: hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        @include('sweetalert::alert')

        <script>
            function togglePasswordVisibility() {
                const passwordInput = document.getElementById('password');
                const eyeIcon = document.getElementById('password-eye-icon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            }
        </script>
    </body>

    </html>

</div>
