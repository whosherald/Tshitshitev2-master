<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:14:08 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Layout|Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="assets/css/layout.css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/a34114923c.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="logo-box" style="background: none">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="55"style="margin-top:-3px">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <div class="small-left-side-menu" style="margin-right: 0.2em">
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="background:none; border:none; font-size: 1.5em"><i id="menu-bar" class="fa-sharp fa-solid fa-bars" style="color:black"></i></button>
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header" style="background: rgba(205, 237, 255, 0.596); box-shadow: -4px -2px 10px 1px #696969;">
                            <span class="logo-sm-2">
                                <img src="assets/images/logo-sm.png" alt="" height="20">
                            </span>
                          <h6 class="offcanvas-title" id="offcanvasScrollingLabel">Navigation</h6>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="metismenu" id="side-menu">

                                <li class="nav-item">
                                    <a class="nav-item-top" href="{{ url('/dashboard') }}">
                                        <i id="nav-icon" class="mdi mdi-view-dashboard"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-item-top" href="javascript: void(0);">
                                        <i id="nav-icon" class="mdi mdi-flip-horizontal"></i>
                                        <span> Member</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{('/member-capture')}}">member capture</a></li>
                                        <li><a href="{{('/member-capture')}}">member captures</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-item-top" href="javascript: void(0);">
                                        <i id="nav-icon" class="mdi mdi-google-pages"></i>
                                        <span> Administration</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="pages-starter.html">find member</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-item-top" href="javascript: void(0);">
                                        <i id="nav-icon" class="mdi mdi-content-copy"></i>
                                        <span> Payments </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{('/policy-payments')}}">policy payments</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-top" href="javascript: void(0);">
                                        <i id="nav-icon" class="mdi mdi-format-underline"></i>
                                        <span> Claim </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{('/member-claim')}}">Member Claims</a></li>
                                        <li><a href="ui-cards.html">Claims Logged</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-item-top" href="javascript: void(0);">
                                        <i id="nav-icon" class="mdi mdi-package-variant-closed"></i>
                                        <span> Funeral Service </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="components-grid.html">Burial</a></li>
                                        <li><a href="components-range-sliders.html">Mortuary</a></li>
                                        <li><a href="components-sweet-alert.html">tombstone</a></li>
                                        <li><a href="components-ratings.html">Fleet Management</a></li>
                                        <li><a href="components-treeview.html">Quotation</a></li>

                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="list-unstyled topnav-menu float-right mb-0 topbar-navigation">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 text-white m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-white">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success">
                                        <i class="mdi mdi-settings-outline" style="color:white"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="text-muted">There are new settings available</small>
                                    </p>
                                </a>

                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right" style="color:white"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-email-outline noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 text-white m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-white">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Messages
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <div class="inbox-widget">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Chadengle</p>
                                            <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                                        </div>
                                    </a>
                                </div> <!-- end inbox-widget -->

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right" style="color:white"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium" style="color: black">{{ Auth::user()->name }}</span>

                        </a>

                        {{-- profile icon menu --}}
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow text-white m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <form class="navform" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button style="display: flex; align-items: center; justify-content: center;" type="submit">Log Out</button>
                                </form>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->


            </div>
            <!-- end Topbar -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title" style="margin-bottom:1em">
                                Navigation
                                <span class="logo-lg" style="float: right;">
                                    <img src="assets/images/logo-light.png" alt="" height="22">
                                    <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                                </span>
                            </li>

                            <li>
                                <a href="{{ url('/dashboard') }}">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <hr style="padding: 0em; margin:0em">
                                    <i class="mdi mdi-flip-horizontal"></i>
                                    <span> Member</span>
                                    <hr style="padding: 0em; margin:0em">
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{('/member-capture')}}">member capture</a></li>
                                    <li><a href="{{('/member-capture')}}">member captures</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <hr style="padding: 0em; margin:0em">
                                    <i class="mdi mdi-google-pages"></i>
                                    <span> Administration</span>
                                    <hr style="padding: 0em; margin:0em">
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="pages-starter.html">find member</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <hr style="padding: 0em; margin:0em">
                                    <i class="mdi mdi-content-copy"></i>
                                    <span> Payments </span>
                                    <hr style="padding: 0em; margin:0em">
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{('/policy-payments')}}">policy payments</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <hr style="padding: 0em; margin:0em">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span> Claim </span>
                                    <hr style="padding: 0em; margin:0em">
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{('/member-claim')}}">Member Claims</a></li>
                                    <li><a href="ui-cards.html">Claims Logged</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <hr style="padding: 0em; margin:0em">
                                    <i class="mdi mdi-package-variant-closed"></i>
                                    <span> Funeral Service </span>
                                    <hr style="padding: 0em; margin:0em">
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="components-grid.html">Burial</a></li>
                                    <li><a href="components-range-sliders.html">Mortuary</a></li>
                                    <li><a href="components-sweet-alert.html">tombstone</a></li>
                                    <li><a href="components-ratings.html">Fleet Management</a></li>
                                    <li><a href="components-treeview.html">Quotation</a></li>

                                </ul>
                            </li>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            @yield('admin.content')
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <!-- DataTables Select JS -->
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                $('#member_capture_completeProgressTable').DataTable();
                $('#member_capture_inProgressTable').DataTable();
                $('#claims_completeProgressTable').DataTable();
                $('#claims_inProgressTable').DataTable();
            });
        </script>

    </body>

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:14:46 GMT -->
</html>
