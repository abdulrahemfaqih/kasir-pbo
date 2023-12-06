<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png"> --}}
    <!-- Pignose Calender -->
    <link href="{{ asset('template_admin/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('template_admin/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template_admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    {{-- date table --}}
    <link href="{{ asset('template_admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('template_admin/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{ asset('template_admin/images/logo.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('template_admin/images/logo-compact.png') }}"
                            alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('template_admin/images/logo-text.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                                    class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard"
                            aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span>Admin</span>
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span>
                                                <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock
                                                    Screen</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="/">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-label">Menu</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/menu">Daftar Menu</a></li>
                            <li><a href="/kategori_menu">Kategori Menu</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Transaksi</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Transaksi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/transaksi">Tambah Transaksi</a></li>
                            <li><a href="/transaksi_detail">Data Transaksi</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Laporan</li>
                    <li>
                        <a href="#">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Laporan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            @yield('content')

            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a>
                    2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('template_admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('template_admin/js/settings.js') }}"></script>
    <script src="{{ asset('template_admin/js/gleek.js') }}"></script>
    <script src="{{ asset('template_admin/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('template_admin./plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('template_admin./plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('template_admin./plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('template_admin./plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('template_admin./plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('template_admin./plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('template_admin./plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('template_admin./plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('template_admin./plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('template_admin./plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('template_admin./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}">
    </script>
    <script src="{{ asset('template_admin/js/dashboard/dashboard-1.js') }}"></script>
     <script src="{{ asset('template_admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('template_admin/custom.min.js') }}"></script>
    <script src="{{ asset('template_admin/settings.js') }}"></script>
    <script src="{{ asset('template_admin/gleek.js') }}"></script>
    <script src="{{ asset('template_admin/styleSwitcher.js') }}"></script>


    <script src="{{ asset('template_admin/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template_admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template_admin/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

</body>

</html>
