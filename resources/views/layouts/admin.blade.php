<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>el9offa</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-rtl.min.css')}}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{asset('dist/css/custom-style.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.css')}}">
    <!-- Theme style -->
    {{--    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">--}}




    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>--}}
    {{--    <link rel="stylesheet" href="{{asset('css/docs.css')}}"/>--}}
    {{--    <link rel="stylesheet" href="{{asset('css/pygments-manni.css')}}"/>--}}
    {{--    <link rel="stylesheet" href="{{asset('icon-fonts/elusive-icons-2.0.0/css/elusive-icons.min.css')}}"/>--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="{{asset('icon-fonts/map-icons-2.1.0/css/map-icons.min.css')}}"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-iconpicker.css')}}"/>


{{--    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>--}}
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <style> .stretch-card > .card {
            width: 100%;
            min-width: 100%
        }

        body {
            background-color: #f9f9fa
        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        @media (max-width: 991.98px) {
            .padding {
                padding: 1.5rem
            }
        }

        @media (max-width: 767.98px) {
            .padding {
                padding: 1rem
            }
        }

        .padding {
            padding: 3rem
        }

        .card {
            box-shadow: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            /*border: 1px solid #3da5f;*/
            border-radius: 0
        }

        .card .card-body {
            padding: 1.25rem 1.75rem
        }

        .card .card-title {
            color: #000000;
            margin-bottom: 0.625rem;
            text-transform: capitalize;
            font-size: 0.875rem;
            font-weight: 500
        }

        .card .card-description {
            margin-bottom: .875rem;
            font-weight: 400;
            color: #76838f
        }

        .btn.btn-social-icon {
            width: 50px;
            height: 50px;
            padding: 0
        }

        .template-demo > .btn {
            margin-right: 0.5rem !important
        }

        .template-demo {
            margin-top: 0.5rem !important
        }

        .btn.btn-rounded {
            border-radius: 50px
        }

        .btn-outline-facebook {
            border: 1px solid #3b579d;
            color: #3b579d
        }

        .btn-outline-facebook:hover {
            background: #3b579d;
            color: #ffffff
        }

        .btn-outline-youtube {
            border: 1px solid #e52d27;
            color: #e52d27
        }

        .btn-outline-twitter {
            border: 1px solid #2caae1;
            color: #2caae1
        }

        .btn-outline-dribbble {
            border: 1px solid #1b1b1b;
            color: #1b1b1b
        }

        .btn-outline-linkedin {
            border: 1px solid #0177b5;
            color: #0177b5
        }

        .btn-outline-instagram {
            border: 1px solid #dc4a38;
            color: #dc4a38
        }

        .btn-outline-twitter:hover {
            background: #2caae1;
            color: #ffffff
        }

        .btn-outline-linkedin:hover {
            background: #0177b5;
            color: #ffffff
        }

        .btn-outline-youtube:hover {
            background: #e52d27;
            color: #ffffff
        }

        .btn-outline-instagram:hover {
            background: #e52d27;
            color: #ffffff
        }

        .btn-facebook {
            background: #3b579d;
            color: #ffffff
        }

        .btn-youtube {
            background: #e52d27;
            color: #ffffff
        }

        .btn-twitter {
            background: #2caae1;
            color: #ffffff
        }

        .btn-dribbble {
            background: #1b1b1b;
            color: #ffffff
        }

        .btn-linkedin {
            background: #0177b5;
            color: #ffffff
        }

        .btn-instagram {
            background: #dc4a38;
            color: #ffffff
        }

        .btn-facebook:hover,
        .btn-facebook:focus {
            background: #2d4278;
            color: #ffffff
        }

        .btn-youtube:hover,
        .btn-youtube:focus {
            background: #c21d17;
            color: #ffffff
        }

        .btn-twitter:hover,
        .btn-twitter:focus {
            background: #1b8dbf;
            color: #ffffff
        }

        .btn-dribbble:hover,
        .btn-dribbble:focus {
            background: #1b1b1b;
            color: #ffffff
        }

        .btn-linkedin:hover,
        .btn-linkedin:focus {
            background: #015682;
            color: #ffffff
        }

        .btn-instagram:hover,
        .btn-instagram:focus {
            background: #bf3322;
            color: #ffffff
        }</style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script type='text/javascript'></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>

        </ul>

        <!-- SEARCH FORM -->


        <!-- Right navbar links -->
        <div style="position: absolute;left: 81px;">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('الخروج') }} <i class="fas fa-sign-out-alt"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
{{--            <img src="#" alt="el9offa Logo"--}}
{{--                 class="brand-image img-circle elevation-3"--}}
{{--                 style="opacity: .8">--}}
            <span class="brand-text font-weight-light">القفة</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <!-- Sidebar user panel (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        @if(auth()->user()->is_admin == 1)
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="fas fa-users-cog"></i>
                                    <p>
                                        مستخدمين المنصة
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('users.index')}}" class="nav-link ">
                                            <i class="fas fa-users-cog"></i>
                                            <p> قائمة الممستخدمين </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">
                                            <i class="fas fa-user-cog"></i>
                                            <p>اظافة مستخدم </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-users"></i>
                                <p>
                                    المعوزين
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if(auth()->user()->is_admin == 1)
                                    <li class="nav-item">
                                        <a href="{{route('importView')}}" class="nav-link ">
                                            <i class="fas fa-file-upload"></i>
                                            <p>تحميل قائمة المعوزين </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('persons.create')}}" class="nav-link ">
                                            <i class="fas fa-user-plus"></i>
                                            <p>اضافة معوز </p>
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a href="{{route('persons.index')}}" class="nav-link">
                                        <i class="fas fa-user-friends"></i>
                                        <p>قاىمة المعوزين</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
    @yield('content')

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <div class="template-demo">
                <a href="https://www.facebook.com/mohamed.bouagga.1">
                    <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i
                            class="fa fa-facebook"></i></button>
                </a>
                <a href="https://twitter.com/islamslam1">
                    <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i
                            class="fa fa-twitter"></i></button>
                </a>
                <a href="github.com/islambouagga/">
                    <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i
                            class="fa fa-github"></i></button>
                </a>
                <a href="https://www.linkedin.com/in/mohammed-bachir-bouagga-13328714b/">
                    <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i
                            class="fa fa-linkedin"></i></button>
                </a>
                <a href="https://www.instagram.com/islambouagga">
                    <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i
                            class="fa fa-instagram"></i></button>
                </a>
            </div>
        </div>

        <!-- Default to the left -->
        <strong style="float: left"> CopyRight &copy; 2020 Mohamed Bachir BOUAGGA   </strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>


<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "language": {
                "paginate": {
                    "next": "بعدی",
                    "previous": "قبلی"
                }
            },
            "info": false,
        });
        $('#example2').DataTable({
            "language": {
                "paginate": {
                    "next": "بعدی",
                    "previous": "قبلی"
                }
            },
            "info": false,
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
