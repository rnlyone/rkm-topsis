<!DOCTYPE html>
<!--
Template Name: RKM-TOPSIS - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/RKM-TOPSIS_admin
Renew Support: https://1.envato.market/RKM-TOPSIS_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading bordered-layout navbar-sticky" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/demo/RKM-TOPSIS-html-bootstrap-admin-template/html/ltr/vertical-menu-template/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Aug 2021 13:14:15 GMT -->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="RKM-TOPSIS admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, RKM-TOPSIS admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{$title ?? 'Alternat'}} || Learning Test App</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/demo/RKM-TOPSIS-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-user.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/pickers/form-pickadate.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-wizard.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/forms/form-number-input.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Check if dark mode preference exists in cookie
                var darkMode = localStorage.getItem('darkMode');

                // If dark mode preference is not saved, default to light mode
                if (darkMode === null) {
                    darkMode = false;
                } else {
                    darkMode = JSON.parse(darkMode);
                }

                // Set initial dark mode state
                setDarkMode(darkMode);

                // Function to toggle dark mode
                function toggleDarkMode() {
                    darkMode = !darkMode;
                    setDarkMode(darkMode);
                    // Save dark mode preference to cookie
                    localStorage.setItem('darkMode', JSON.stringify(darkMode));
                }

                // Function to set dark mode
                function setDarkMode(enable) {
                    if (enable) {
                        // Enable dark mode
                        // Add classes or apply styles to switch to dark mode
                        $('body').addClass('dark-mode');
                    } else {
                        // Disable dark mode
                        // Remove classes or apply styles to switch to light mode
                        $('body').removeClass('dark-mode');
                    }
                }

                // Event listener for dark mode toggle button or switch
                $('#darkModeToggle').click(function() {
                    toggleDarkMode();
                });
            });
        </script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center navbar-light navbar-shadow p-0 fixed-top">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                </li>
                <li class="nav-item d-none d-lg-block"><a id="darkModeToggle" class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{auth()->user()->name}}</span><span
                                class="user-status">@if (auth()->user()->role == 'admin')
                                    {{auth()->user()->role}}
                                    @elseif (auth()->user()->role == 'perusahaan')
                                    Perusahaan
                                    @else
                                    mahasiswa
                                @endif</span></div><span class="avatar"><img class="round"
                                src="/app-assets/images/profile.png" alt="avatar" height="40"
                                width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="/logout"><i class="me-50"
                                data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="/index-2.html"><span class="brand-logo">
                           </span>
                        <h2 class="brand-text">RKM-TOPSIS</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="{{$dash_active ?? ''}} nav-item"><a class="d-flex align-items-center" href="/dash"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Documentation">Dashboard</span></a>
                </li>
                @if (auth()->user()->role == 'admin')
                    <li class=" navigation-header"><span data-i18n="Master">Pengaturan SPK</span><i
                        data-feather="more-horizontal"></i>
                    </li>
                    <li class="{{$alter_active ?? ''}} nav-item"><a class="d-flex align-items-center" href="/alternatif"><i
                                data-feather="target"></i><span class="menu-title text-truncate"
                                data-i18n="Alternatif">Alternatif</span></a>
                    </li>
                    <li class="{{$kriteria_active ?? ''}} nav-item"><a class="d-flex align-items-center" href="/kriteria"><i
                                data-feather="grid"></i><span class="menu-title text-truncate"
                                data-i18n="Kriteria">Kriteria</span></a>
                    </li>
                    <li class="{{$subkriteria_active ?? ''}} nav-item"><a class="d-flex align-items-center" href="/subkriteria"><i
                                data-feather="archive"></i><span class="menu-title text-truncate"
                                data-i18n="Sub-Kriteria">Sub-Kriteria</span></a>
                    </li>
                @elseif (auth()->user()->role == 'mahasiswa')
                    <li class="{{$penilaian_active ?? ''}} nav-item"><a class="d-flex align-items-center" href="/penilaian"><i
                        data-feather="file-text"></i><span class="menu-title text-truncate"
                        data-i18n="Penilaian">Penilaian</span></a>
                    </li>
                @endif
                <li class="{{$topsis_active ?? ''}} nav-item"><a class="d-flex align-items-center" href="{{route('topsis.index')}}"><i
                    data-feather="edit-2"></i><span class="menu-title text-truncate"
                    data-i18n="Data Hitung topsis">TOPSIS</span></a>
        </li>
                @if (auth()->user()->role == 'admin')
                    <li class=" navigation-header"><span data-i18n="Master">Panel Admin</span><i
                        data-feather="more-horizontal"></i>
                    </li>
                    <li class="{{$user_active ?? ''}} nav-item"><a class="d-flex align-items-center" href="/user"><i
                        data-feather="user"></i><span class="menu-title text-truncate"
                        data-i18n="Data User">Manajemen User</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
