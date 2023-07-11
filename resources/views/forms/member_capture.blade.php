<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from coderthemes.com/uplon/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:43 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>form member|Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Responsive Table css -->
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link href="assets/css/member-capture.css" rel="stylesheet"/>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="logo-box" style="background: none">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="55"style="margin-top:-3px">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="20">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm-light.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu float-right mb-0 topbar-navigation">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="noti-icon-badge"></span>
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
                            <span class="noti-icon-badge"></span>
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
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium" style="color: black">Alex M.</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"  ></i>
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
                                <span>Profile</span>
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
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
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
                            <li>
                                <a href="#" style="color:#e4e6eb" onclick="inProgress()">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            <script>
                async function inProgress() {
                  try {
                    const token = '{{ csrf_token() }}';
                    const response1 = await fetch('/in-progress', {
                      method: 'POST',
                      headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token
                      }
                    });

                    if (response1.ok) {
                      const data = await response1.json();
                      if (confirm("Are you sure you want to complete the form later?")) {
                        // User confirmed, redirect to the dashboard
                        window.location.href = '/dashboard';
                      }
                    } else {
                      throw new Error('Main Member ID check error: ' + response1.status);
                    }
                  } catch (error) {
                    // Handle mainMemberId check error
                    console.log(error);
                    return false;
                  }
                }
            </script>
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <!-- progress bar multistep form -->
                                    <div class="container">
                                        <header></header>

                                    </div>

                                    <div class="row mt-3" style="">
                                        <div class="col-12" style="padding: 0 1em;">
                                            <h5>Member Capture</h5>

                                            {{-- Progress Blocks --}}
                                            <div class="col-12 d-flex flex-column mb-4 mt-4 progress">
                                                <div class="row progress-row" style="">
                                                    <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">1</div>
                                                        <h6 style="">Capture New Member</h6>
                                                    </div>
                                                    <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">2</div>
                                                        <h6 style="color:black">Policy Details</h6>
                                                    </div>
                                                    <div class="p-2 process d-flex box-top" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-top-no" style=" border-radius: 50%; border: 1.5px solid black;">3</div>
                                                        <h6 style="">Capturing Extended Member</h6>
                                                    </div>
                                                </div>
                                                <div class="row d-flex gap-2 progress-row" style="">
                                                    <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">4</div>
                                                        <h6 style="">Beneficiary Details</h6>
                                                    </div>
                                                    <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">5</div>
                                                        <h6 style="">Payment Methods</h6>
                                                    </div>
                                                    <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">6</div>
                                                        <h6 style="">Verfication</h6>
                                                    </div>
                                                    <div class="p-2 process d-flex box-bottom" style="border-radius: 0.5em; align-items:center; gap:1em; box-shadow: 10px 6px 7px rgba(0, 0, 0, 0.2);" >
                                                        <div class="d-flex justify-content-center align-items-center ml-1 box-bottom-no" style=" border-radius: 50%; border: 1.5px solid black;">7</div>
                                                        <h6 style="">Compliance</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>

                                            </style>
                                            {{-- <hr > --}}
                                            <form id="wizard-validation-form"  >
                                                <div>
                                                    {!! csrf_field() !!}

                                                    <section>
                                                        <input type="hidden" name="section" value="section1">

                                                        <h3 class="text-sm-start">Sales Representative</h3>
                                                        <hr>
                                                        <div class="row d-flex mt-4" style="justify-content: space-between">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Sales Rep Code:</label>
                                                                        <select  name="sales_rep_code" id="sales_rep_code" class="required form-control" style="width: 70%; margin-left: 10px;" >
                                                                            <option value="" selected>{{ isset($saleRep) ? $saleRep->sales_rep_code : '' }}</option>
                                                                            <option value="123" selected>123</option>
                                                                            <option value="456" selected>456</option>
                                                                            <option value="789" selected>789</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Sales Rep Name:</label>
                                                                        <input class="required form-control" id="name" name="name" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->name : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex" style="justify-content: space-between">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Branch Name:</label>
                                                                        <input class="required form-control" id="branch_name" name="branch_name" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->branch_name : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Email Address:</label>
                                                                        <input class="required form-control" id="email" name="email" type="email" style="width: 70%; margin-left: 10px;"
                                                                            onchange="EmailValidation()" placeholder="{{ isset($saleRep) ? $saleRep->email : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex" style="justify-content: space-between">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Number:</label>
                                                                        <input class="required form-control" id="policy_number" name="policy_number" type="number" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->policy_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Agent Name:</label>
                                                                        <input id="agent_number" name="agent_number" type="number" class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($saleRep) ? $saleRep->agent_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr >
                                                        <h3>Main Member</h3>

                                                        <div class="row mt-4">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                        <label for="fullname" class=" col-form-label" style="width: 30%;">Full Names</label>
                                                                        <input class="required form-control" id="fullname" name="fullname" type="text" style="width: 70%;" placeholder="{{ isset($mainMember) ? $mainMember->fullname : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                        <label for="password2"class="col-form-label" style="width: 30%;">Title:</label>
                                                                        <select  name="title" class="required form-control" id="title" style="width: 70%; margin-left: 10px;">

                                                                            <option value="">{{ isset($mainMember) ? $mainMember->title : '' }}</option>
                                                                            <option value="mrs">Mrs</option>
                                                                            <option value="mr">Mr</option>
                                                                            <option value="dr">Dr</option>
                                                                            <option value="miss">Miss</option>
                                                                            <option value="prof">Prof</option>


                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="surname" class="col-form-label" style="width: 30%;">Surname:</label>
                                                                        <input class="required form-control" id="surname" name="surname" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->surname : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="id_number" class="col-form-label" style="width: 30%;">ID No:</label>
                                                                        <input id="id_number" name="id_number" type="text" maxlength="13" class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->id_number : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->


                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Initials:</label>
                                                                        <input class="form-control" id="initials" name="initials" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->initials : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Gender:</label>
                                                                        <select id="gender" name="gender" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                            <option value=""> {{ isset($mainMember) ? $mainMember->gender : '' }}</option>
                                                                            <option value="F">Female</option>
                                                                            <option value="M">Male</option>
                                                                            <option value="">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div><!-- end row -->


                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Birth:</label>
                                                                        <input id="date_of_birth" name="date_of_birth" type="date" onchange="calAge()"class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->date_of_birth : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Age:</label>
                                                                        <input class="form-control" id="age" name="age" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->age : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <script>

                                                                function calAge(){
                                                                    var inputage = document.getElementById("date_of_birth").value;
                                                                    var currentyear = new Date().getFullYear();
                                                                    var year = inputage.substring(0,4);// 2022/07/07
                                                                    console.log(year)

                                                                    age = currentyear-year;
                                                                    console.log(age)

                                                                    document.getElementById("age").value=age;

                                                                }
                                                            </script>

                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Passport Number:</label>
                                                                        <input class="form-control" id="passport_number" name="passport_number" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->passport_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Marital Status:</label>
                                                                        <select id="marital_status" name="marital_status" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                            <option value="">{{ isset($mainMember) ? $mainMember->marital_status : '' }}</option>
                                                                            <option value="S">Single</option>
                                                                            <option value="M">Married</option>
                                                                            <option value="D">Divorced</option>
                                                                            <option value="W">Window</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Cellphone Number:</label>
                                                                        <input class="form-control" id="cellphone_number" name="cellphone_number" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->cellphone_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Citizenship:</label>
                                                                        <select id="citizenship" name="citizenship" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                            <option value=""> {{ isset($mainMember) ? $mainMember->citizenship : '' }}</option>
                                                                            <option value="RSA">South Africa</option>
                                                                            <option value="ZMA">Zambia</option>
                                                                            <option value="MZQ">Mozambique</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Tellphone:</label>
                                                                        <input class="form-control" id="tellphone" name="tellphone" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->tellphone : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Email:</label>
                                                                        <input id="email" name="email" type="email" class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->email : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Street Address:</label>
                                                                        <input class="form-control" id="street_address" name="street_address" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->street_address : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">PO Box:</label>
                                                                        <input id="po_box" name="po_box" type="text" class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->po_box : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Town or City:</label>
                                                                        <input class="form-control" id="city" name="city" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->city : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Province:</label>
                                                                        <select id="province" name="province" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                            <option value=""> {{ isset($mainMember) ? $mainMember->province : '' }}</option>
                                                                            <option value="gauteng">gauteng</option>
                                                                            <option value="limpopo">limpopo</option>
                                                                            <option value="free state">free state</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Postal Code:</label>
                                                                        <input class="form-control" id="postal_code" name="postal_code" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->postal_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div><!-- end row -->


                                                    </section>

                                                    <section>
                                                        <input type="hidden" name="section" value="section2">

                                                        <h3>Policy Details</h3>
                                                        <div class="row d-flex mt-4" style="justify-content: space-between">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Type<span class="text-danger">*</span> </label>

                                                                        <select class="required form-control"onChange="myplan()" id="policy_type" name="policy_type" style="width: 70%; margin-left: 10px;">
                                                                            <option id="producttype"  readonly name="product_type" value="plan_A ">{{ isset($policyDetails) ? $policyDetails->policy_type : '' }}</option>
                                                                            <option id="producttype"  readonly name="product_type" value="plan_A ">plan_A</option>
                                                                            <option id="producttype"  readonly name="product_type" value="plan_B ">plan_B</option>
                                                                            <option id="producttype"  readonly name="product_type" value="plan_C ">plan_C</option>
                                                                            <option id="producttype"  readonly name="product_type" value="plan_D ">plan_D</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Status</label>

                                                                        <select id="policy_status" name="policy_status" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                            <option value="">{{ isset($policyDetails) ? $policyDetails->policy_status : '' }}</option>
                                                                            <option value="Active">Active </option>
                                                                            <option value="Archieve">Archive</option>
                                                                            <option value="Cancelled">Cancelled</option>
                                                                            <option value="Deceased">Deceased</option>
                                                                            <option value="Deleted">Deleted</option>
                                                                            <option value="On Trial">On Trial</option>
                                                                            <option value="Lapsed">Lapsed</option>
                                                                            <option value="In Arrears">In Arrears</option>
                                                                            <option value="Lead">Lead</option>
                                                                            <option value="NTU">NTU</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Start Date</label>
                                                                        <input class="required form-control" id="policy_start_date" name="policy_start_date" type="date"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->policy_start_date : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Inception Date</label>
                                                                        <input id="inception_date" name="inception_date" type="date" class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->inception_date : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Premium</label>
                                                                        <input class="required form-control" id="premium" name="premium" type="text"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->premium : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Cover Amount</label>
                                                                        <input id="cover_amount" name="cover_amount" type="number" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->cover_amount : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <script>

                                                            function prodplan(){
                                                                var inputage = document.getElementById("prodtype").value;

                                                                console.log(year)

                                                                age = currentyear-year;
                                                                console.log(age)

                                                                document.getElementById("prodprem").value=age;

                                                            }

                                                        </script>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Cover Date</label>
                                                                        <input class="required form-control" id="policy_cover_date" name="policy_cover_date" type="date"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->policy_cover_date : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Total Premium</label>
                                                                        <input id="total_premium" name="total_premium" type="number" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->total_premium : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Under written By</label>
                                                                        <input class="required form-control" id="underwritten_by" name="underwritten_by" type="text"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->underwritten_by : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">`
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Number</label>
                                                                        <input id="policy_number" name="policy_number" type="text" class="required form-control"style="width: 70%; margin-left: 10px;" placeholder="{{ isset($policyDetails) ? $policyDetails->policy_number : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                                {{-- <div class="form-group">
                                                                    <input type="text" class="form-control" name="field[]" placeholder="Enter a value">
                                                                    <button type="button" class="btn btn-danger remove-field">Remove</button>
                                                                </div>
                                                                <div id="main-form">
                                                                    <div id="fields-container">
                                                                        <!-- dynamically added fields will go here -->
                                                                    </div>

                                                                    <button type="button" id="add-field" class="btn btn-primary">Add Field</button>
                                                                    <button type="submit" class="btn btn-success">Submit</button>

                                                                </div> --}}
                                                        </div><!-- end row -->


                                                    </section>

                                                    <section>
                                                        <input type="hidden" name="section" value="section3">
                                                        <h3>Extended Member</h3>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Title:</label>
                                                                        <select id="emtitle" name="emtitle" class="required form-control"style="width: 70%; margin-left: 10px;">
                                                                            <option value="">Title</option>
                                                                            <option value="Mr">Mr</option>
                                                                            <option value="Mrs">Mrs</option>
                                                                            <option value="Dr">Dr</option>
                                                                            <option value="Prof">Prof</option>
                                                                            <option value="Adv">Adv</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Relationship:</label>
                                                                        <select id="emrelationship" name="emrelationship" class="required form-control"style="width: 70%; margin-left: 10px;">
                                                                            <option value="">select</option>
                                                                            <option value="Spouse">Spouse</option>
                                                                            <option value="child">child</option>
                                                                            <option value="father or mother">father or mother</option>
                                                                            <option value="sibling">sibling</option>
                                                                            <option value="Free extended">Free extended</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Full names:</label>
                                                                        <input class="required form-control" id="emfullname" name="emfullname" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Surname:</label>
                                                                        <input id="emsurname" name="emsurname" type="text" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">ID No:</label>
                                                                        <input class="required form-control" id="emid_number" name="emid_number" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Birth:</label>
                                                                        <input id="emdate_of_birth" name="emdate_of_birth" type="date" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Cellphone:</label>
                                                                        <input class="required form-control" id="emcellphone" name="emcellphone" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Email Address:</label>
                                                                        <input id="ememail" name="ememail" type="text" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Initials:</label>
                                                                        <input class="required form-control" id="eminitials" name="eminitials" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Gender:</label>
                                                                        <select id="emgender" name="emgender" class="required form-control"style="width: 70%; margin-left: 10px;">
                                                                            <option value=""></option>
                                                                            <option value="F">Female</option>
                                                                            <option value="M">Male</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Cover Amount:</label>
                                                                        <input class="required form-control" id="emcover_amount" name="emcover_amount" type="number"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Policy Type:</label>
                                                                        <select onChange="myplan()" id="empolicy_type" name="empolicy_type" class="required form-control"style="width: 70%; margin-left: 10px;">


                                                                            <option id="producttype"  readonly name="product_type" value="ju"></option>


                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Add Premium:</label>
                                                                        <input class="required form-control" id="emadd_premium" name="emadd_premium" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Total Premium:</label>
                                                                        <input id="emtotal_premium" name="emtotal_premium" type="number" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                        <button id="addExtMember" type="button" class="btn btn-primary waves-effect waves-light mb-2" style="font-family: 'Helvetica Neue', Arial, sans-serif;"> Add Extended Member</button>
                                                        <hr>
                                                        {{-- Table --}}
                                                        <div class="table-responsive" style="width: 100%; border: none; border-radius: 0.3em; overflow-x: auto;">

                                                            <table id="datatable" class="table table-sm table-bordered table-striped align-middle data-table" style="width: 100%; margin-bottom: 0;">
                                                                <thead class="table-dark text-light text-center">
                                                                    <tr>
                                                                        <th>Main Member Full Names</th>
                                                                        <th>Surname</th>
                                                                        <th>ID Number</th>
                                                                        <th>Relationship</th>
                                                                        <th>Extended Name</th>
                                                                        <th>Extended Surname</th>
                                                                        <th>Policy Number</th>
                                                                        <th>Branch Name</th>
                                                                        <th>Start Date</th>
                                                                        <th>Inception Date</th>
                                                                        <th>Cover Date</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="extendedMember_body" class="table-light table-bordered">
                                                                    @forelse ($extendedMembers as $extendedMember)
                                                                    <tr>
                                                                        <td>{{ $extendedMember->emfullname }}</td>
                                                                        <td>{{ $extendedMember->emsurname }}</td>
                                                                        <td>{{ $extendedMember->emid_number }}</td>
                                                                        <td>{{ $extendedMember->emrelationship }}</td>
                                                                        <td>{{ $extendedMember->emfullname }}</td>
                                                                        <td>{{ $extendedMember->emsurname }}</td>
                                                                        <td>01</td>
                                                                        <td>DevOps</td>
                                                                        <td>01/01/2023</td>
                                                                        <td>02/02/2023</td>
                                                                        <td>03/03/2023</td>
                                                                        <td style="width: 110px; display: flex; align-items: center; justify-content: space-around">
                                                                            <a href="/member-capture/{{ $extendedMember->em_id }}/edit" class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                                <i class="fas fa-pencil-alt"></i>
                                                                            </a>
                                                                            <button type="button" class="btn btn-sm btn-danger show-confirm action" onclick="deleteMember({{ $extendedMember->em_id }})">
                                                                                <i class="fa fa-trash fa-lg"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    @empty
                                                                    <tr>
                                                                        <td id="no-extended-members" colspan="12">No extended members found.</td>
                                                                    </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>


                                                        <script>
                                                            function deleteMember(memberId) { //Delete button
                                                                fetch('/member-capture/' + memberId, {
                                                                    method: 'POST',
                                                                    headers: {
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                    'Content-Type': 'application/x-www-form-urlencoded'
                                                                    },
                                                                    body: 'section=3&_method=DELETE'
                                                                })
                                                                .then(function(response) {
                                                                    if (response.ok) {
                                                                    // Success! Refresh the page or update the UI as needed
                                                                    location.reload();
                                                                    } else {
                                                                    // Error handling
                                                                    console.log('Delete request failed with status:', response.status);
                                                                    }
                                                                })
                                                                .catch(function(error) {
                                                                    console.log('Delete request error:', error);
                                                                });
                                                            }

                                                            $(document).ready(function() {

                                                                $("#addExtMember").on("click", async function() {
                                                                    var title = document.getElementById('emtitle').value;
                                                                    var relationship = document.getElementById('emrelationship').value;
                                                                    var fullName = document.getElementById('emfullname').value;
                                                                    var surname = document.getElementById('emsurname').value;
                                                                    var idNumber = document.getElementById('emid_number').value;
                                                                    var dateOfBirth = document.getElementById('emdate_of_birth').value;
                                                                    var cellphone = document.getElementById('emcellphone').value;
                                                                    var email = document.getElementById('ememail').value;
                                                                    var initials = document.getElementById('eminitials').value;
                                                                    var gender = document.getElementById('emgender').value;
                                                                    var coverAmount = document.getElementById('emcover_amount').value;
                                                                    var policyType = document.getElementById('empolicy_type').value;
                                                                    var addPremium = document.getElementById('emadd_premium').value;
                                                                    var totalPremium = document.getElementById('emtotal_premium').value;

                                                                    var extendedMember = {
                                                                        _token: '{{ csrf_token() }}',
                                                                        section: 'section3',
                                                                        emtitle: title,
                                                                        emrelationship: relationship,
                                                                        emfullname: fullName,
                                                                        emsurname: surname,
                                                                        emid_number: idNumber,
                                                                        emdate_of_birth: dateOfBirth,
                                                                        emcellphone: cellphone,
                                                                        ememail: email,
                                                                        eminitials: initials,
                                                                        emgender: gender,
                                                                        emcover_amount: coverAmount,
                                                                        empolicy_type: policyType,
                                                                        emadd_premium: addPremium,
                                                                        emtotal_premium: totalPremium
                                                                    };

                                                                    console.log("first");
                                                                    await fetch('/member-capture', {
                                                                        method: 'POST',
                                                                        headers: {
                                                                            'Content-Type': 'application/json',
                                                                            'X-CSRF-TOKEN': extendedMember._token // Include the CSRF token header
                                                                        },
                                                                        body: JSON.stringify(extendedMember)
                                                                    })
                                                                    .then(response => response.json())
                                                                    .then(response => {
                                                                        // Clear input fields
                                                                        document.getElementById('emtitle').value = '';
                                                                        document.getElementById('emrelationship').value = '';
                                                                        document.getElementById('emfullname').value = '';
                                                                        document.getElementById('emsurname').value = '';
                                                                        document.getElementById('emid_number').value = '';
                                                                        document.getElementById('emdate_of_birth').value = '';
                                                                        document.getElementById('emcellphone').value = '';
                                                                        document.getElementById('ememail').value = '';
                                                                        document.getElementById('eminitials').value = '';
                                                                        document.getElementById('emgender').value = '';
                                                                        document.getElementById('emcover_amount').value = '';
                                                                        document.getElementById('empolicy_type').value = '';
                                                                        document.getElementById('emadd_premium').value = '';
                                                                        document.getElementById('emtotal_premium').value = '';

                                                                        console.log("input", response.input);
                                                                        console.log("Extended member", response);

                                                                        $("#no-extended-members").remove();
                                                                        var newRow = $("<tr>");
                                                                        newRow.addClass("extended_member-row"); // Add a custom class to the row
                                                                        newRow.attr("data-id", response.extendedMember.em_id);

                                                                        newRow.append("<td>" + response.input.emfullname + "</td>");
                                                                        newRow.append("<td>" + response.input.emsurname + "</td>");
                                                                        newRow.append("<td>" + response.input.emid_number + "</td>");
                                                                        newRow.append("<td>" + response.input.emrelationship + "</td>");
                                                                        newRow.append("<td>" + response.input.emfullname + "</td>");
                                                                        newRow.append("<td>" + response.input.emsurname + "</td>");
                                                                        newRow.append("<td>" + "01" + "</td>");
                                                                        newRow.append("<td>" + "DevOps" + "</td>");
                                                                        newRow.append("<td>" + "01/01/2023" + "</td>");
                                                                        newRow.append("<td>" + "02/02/2023" + "</td>");
                                                                        newRow.append("<td>" + "03/03/2023" + "</td>");
                                                                        var buttonColumn = $('<td style="width: 110px; display: flex; align-items: center; justify-content: space-around"></td>');
                                                                        // Edit button with hidden input
                                                                        var editButton = $('<a>', {
                                                                            class: 'btn btn-outline-info btn-sm edit',
                                                                            title: 'Edit',
                                                                            href: '/member-capture/' + response.extendedMember.em_id + '/edit',
                                                                            html: '<i class="fas fa-pencil-alt"></i>'
                                                                        });
                                                                        buttonColumn.append(editButton);

                                                                        var deleteButton = $('<button type="button" class="btn btn-sm btn-danger show-confirm action"><i class="fa fa-trash fa-lg"></i></button>');
                                                                        deleteButton.on('click', function() {
                                                                            deleteMember(response.extendedMember.em_id);
                                                                        });
                                                                        buttonColumn.append(deleteButton);
                                                                        newRow.append(buttonColumn);
                                                                        $("#extendedMember_body tr.no-members").remove();
                                                                        $("#extendedMember_body").append(newRow);
                                                                    })
                                                                    .catch(error => {
                                                                        console.log(error);
                                                                    });
                                                                });
                                                            });
                                                        </script>

                                                    </section>

                                                    <section>
                                                        <input type="hidden" name="section" value="section4">
                                                        <h3>Beneficiary Details</h3>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Title:</label>
                                                                        <select id="bd_title" name="bd_title" class="required form-control"style="width: 70%; margin-left: 10px;">
                                                                            <option value="">Title</option>
                                                                            <option value="Mr">Mr</option>
                                                                            <option value="Mrs">Mrs</option>
                                                                            <option value="Dr">Dr</option>
                                                                            <option value="Prof">Prof</option>
                                                                            <option value="Adv">Adv</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Relationship:</label>
                                                                        <select id="bd_relationship" name="bd_relationship" class="required form-control"style="width: 70%; margin-left: 10px;">
                                                                            <option value="">select</option>
                                                                            <option value="Spouse">Spouse</option>
                                                                            <option value="child">child</option>
                                                                            <option value="father or mother">father or mother</option>
                                                                            <option value="sibling">sibling</option>
                                                                            <option value="Free extended">Free extended</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Full names:</label>
                                                                        <input class="required form-control" id="bd_fullnames" name="bd_fullnames" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Surname:</label>
                                                                        <input id="bd_surname" name="bd_surname" type="text" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">ID No:</label>
                                                                        <input class="required form-control" id="bd_id_number" name="bd_id_number" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Date of Birth:</label>
                                                                        <input id="bd_date_of_birth" name="bd_date_of_birth" type="date" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Cellphone:</label>
                                                                        <input class="required form-control" id="bd_cellphone" name="bd_cellphone" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Email Address:</label>
                                                                        <input id="bd_email" name="bd_email" type="text" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Initials:</label>
                                                                        <input class="required form-control" id="bd_initials" name="bd_initials" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Gender:</label>
                                                                        <select id="bd_gender" name="bd_gender" class="required form-control"style="width: 70%; margin-left: 10px;">
                                                                            <option value=""></option>
                                                                            <option value="F">Female</option>
                                                                            <option value="M">Male</option>
                                                                            <option value="other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Cover Amount:</label>
                                                                        <input class="required form-control" id="bd_work_tell" name="bd_work_tell" type="text"style="width: 70%; margin-left: 10px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="tellphone" class="col-form-label" style="width: 30%;">Percentage:</label>
                                                                        <input id="bd_percentage" name="bd_percentage" type="number" class="required form-control"style="width: 70%; margin-left: 10px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <hr>

                                                        <!-- start add button beneficiary -->
                                                        <div class="col-md-6" id="inputFormRow">
                                                            <div class="col-lg-12">
                                                                <div id="newRow"></div>
                                                                <button id="addRow" type="button" class="btn btn-info" style="font-family: 'Helvetica Neue', Arial, sans-serif;">Add Beneficiary</button>
                                                            </div>
                                                        </div>

                                                        <!-- button beneficiary style -->


                                                        <script>
                                                            function AddBen(){
                                                                ++counterben
                                                                console.log(counterben);

                                                                addBens(); //$('#ben'+counter).show();
                                                                document.getElementById("bencounter").setAttribute("value", counterben);
                                                            }
                                                        </script>

                                                        <div>
                                                        <!-- <button type="button" class="btn btn-blue-grey waves-effect waves-light" style="float: right; margin-top:10px ;width:150px">Add</button> -->
                                                            <hr>
                                                        </div>
                                                        <?php
                                                            //  $membbeneficiary=DB::table('beneficiary_details')
                                                            //  ->get();
                                                        ?>
                                                        <h4 style="padding-top: 0.3em">Benefinciary list</h4>
                                                        <div class="table-responsive" style="width: 100%; border: none; border-radius: 0.5em; overflow-x: auto; padding-bottom: 2em ">
                                                            <table id="datatable" class="table table-sm table-bordered table-striped align-middle data-table" style="width: 100%; margin-bottom: 0;">
                                                                <thead class="table-dark text-light text-center">
                                                                    <tr>
                                                                        <th >FIRST NAME</th>
                                                                        <th >LAST NAME</th>
                                                                        <th >ID NUMBER</th>
                                                                        <th >GENDER</th>
                                                                        <th >CELL</th>
                                                                        <th >EMAIL</th>
                                                                        <th >ACTIONS</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody id="beneficiaryMember_body" class="table-light table-bordered">
                                                                    @forelse ($beneficiaryMembers as $beneficiaryMember)
                                                                    <tr>
                                                                        <td>{{ $beneficiaryMember->bd_fullnames }}</td>
                                                                        <td>{{ $beneficiaryMember->bd_surname }}</td>
                                                                        <td>{{ $beneficiaryMember->bd_id_number }}</td>
                                                                        <td>{{ $beneficiaryMember->bd_gender }}</td>
                                                                        <td>{{ $beneficiaryMember->bd_work_tell }}</td>
                                                                        <td>{{ $beneficiaryMember->bd_percentage }}</td>

                                                                        <td style="width: 100px; display: flex; align-items: center; justify-content: space-around">
                                                                            <a href="/member-capture/{{ $beneficiaryMember->bd_id }}/edit" class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                                <i class="fas fa-pencil-alt"></i>
                                                                            </a>
                                                                            <button type="button" class="btn btn-sm btn-danger show-confirm action" onclick="deleteMember({{ $beneficiaryMember->bd_id }})">
                                                                                <i class="fa fa-trash fa-lg"></i>
                                                                            </button>
                                                                        </td>

                                                                    </tr>
                                                                    @empty
                                                                    <tr>
                                                                        <td id="no-beneficiary-members" colspan="12">No beneficiary members found.</td>
                                                                    </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <script>
                                                            function deleteMember(memberId) { //Delete button
                                                                fetch('/member-capture/' + memberId, {
                                                                    method: 'POST',
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                        'Content-Type': 'application/x-www-form-urlencoded'
                                                                    },
                                                                    body: 'section=3&_method=DELETE'
                                                                })
                                                                .then(function(response) {
                                                                    if (response.ok) {
                                                                    // Success! Refresh the page or update the UI as needed
                                                                    location.reload();
                                                                    } else {
                                                                    // Error handling
                                                                    console.log('Delete request failed with status:', response.status);
                                                                    }
                                                                })
                                                                .catch(function(error) {
                                                                    console.log('Delete request error:', error);
                                                                });
                                                            }

                                                            $(document).ready(function() {
                                                                $("#addRow").on("click", async function() {
                                                                    var title = document.getElementById('bd_title').value;
                                                                    var relationship = document.getElementById('bd_relationship').value;
                                                                    var fullName = document.getElementById('bd_fullnames').value;
                                                                    var surname = document.getElementById('bd_surname').value;
                                                                    var idNumber = document.getElementById('bd_id_number').value;
                                                                    var dateOfBirth = document.getElementById('bd_date_of_birth').value;
                                                                    var cellphone = document.getElementById('bd_cellphone').value;
                                                                    var email = document.getElementById('bd_email').value;
                                                                    var initials = document.getElementById('bd_initials').value;
                                                                    var gender = document.getElementById('bd_gender').value;
                                                                    var workTell = document.getElementById('bd_work_tell').value;
                                                                    var percentage = document.getElementById('bd_percentage').value;

                                                                    var beneficiaryMember = {
                                                                        _token: document.querySelector('input[name="_token"]').value,
                                                                        section: 'section4',
                                                                        bd_title: title,
                                                                        bd_relationship: relationship,
                                                                        bd_fullnames: fullName,
                                                                        bd_surname: surname,
                                                                        bd_id_number: idNumber,
                                                                        bd_date_of_birth: dateOfBirth,
                                                                        bd_cellphone: cellphone,
                                                                        bd_email: email,
                                                                        bd_initials: initials,
                                                                        bd_gender: gender,
                                                                        bd_work_tell: workTell,
                                                                        bd_percentage: percentage
                                                                    };
                                                                    console.log("first")
                                                                    await fetch('/member-capture', {
                                                                        method: 'POST',
                                                                        headers: {
                                                                            'Content-Type': 'application/json',
                                                                            'X-CSRF-TOKEN': beneficiaryMember._token // Include the CSRF token header
                                                                        },
                                                                        body: JSON.stringify(beneficiaryMember)
                                                                    })

                                                                    .then(response => response.json())
                                                                    .then(response => {
                                                                        // Clear input fields
                                                                        document.getElementById('bd_title').value = '';
                                                                        document.getElementById('bd_relationship').value = '';
                                                                        document.getElementById('bd_fullnames').value = '';
                                                                        document.getElementById('bd_surname').value = '';
                                                                        document.getElementById('bd_id_number').value = '';
                                                                        document.getElementById('bd_date_of_birth').value = '';
                                                                        document.getElementById('bd_cellphone').value = '';
                                                                        document.getElementById('bd_email').value = '';
                                                                        document.getElementById('bd_initials').value = '';
                                                                        document.getElementById('bd_gender').value = '';
                                                                        document.getElementById('bd_work_tell').value = '';
                                                                        document.getElementById('bd_percentage').value = '';

                                                                        console.log("input", response.input);
                                                                        console.log("beneficiary member", response);
                                                                        $("#no-beneficiary-members").remove();
                                                                        var newRow = $("<tr>");
                                                                        newRow.addClass("beneficiary_member-row"); // Add a custom class to the row
                                                                        newRow.attr("data-id", response.beneficiaryMember.bd_id);

                                                                        newRow.append("<td>" + response.input.bd_fullnames + "</td>");
                                                                        newRow.append("<td>" + response.input.bd_surname + "</td>");
                                                                        newRow.append("<td>" + response.input.bd_id_number + "</td>");
                                                                        newRow.append("<td>" + response.input.bd_gender + "</td>");
                                                                        newRow.append("<td>" + response.input.bd_work_tell + "</td>");
                                                                        newRow.append("<td>" + response.input.bd_email + "</td>");
                                                                        var buttonColumn = $('<td style="width: 110px; display: flex; align-items: center; justify-content: space-around"></td>');
                                                                        // Edit button with hidden input
                                                                        var editButton = $('<a>', {
                                                                            class: 'btn btn-outline-info btn-sm edit',
                                                                            title: 'Edit',
                                                                            href: '/member-capture/' + beneficiaryMember.bd_id + '/edit',
                                                                            html: '<i class="fas fa-pencil-alt"></i>'
                                                                        });
                                                                        buttonColumn.append(editButton);

                                                                        var deleteButton = $('<button type="button" class="btn btn-sm btn-danger show-confirm action"><i class="fa fa-trash fa-lg"></i></button>');
                                                                        deleteButton.on('click', function() {
                                                                            deleteMember(response.beneficiaryMember.bd_id);
                                                                        });
                                                                        buttonColumn.append(deleteButton);
                                                                        newRow.append(buttonColumn);
                                                                        $("#extendedMember_body tr.no-members").remove();
                                                                        $("#beneficiaryMember_body").append(newRow);
                                                                    })
                                                                    .catch(error => {
                                                                        console.log(error);
                                                                    });
                                                                });
                                                            });
                                                        </script>
                                                    </section>

                                                    <section style= "padding:1em;">
                                                        <input type="hidden" name="section" value="section5">
                                                        <h3>Method of Payment</h3>

                                                        <style>
                                                            .waves-effect {
                                                                position: relative;
                                                                cursor: pointer;
                                                                display: inline-block;
                                                                overflow: hidden;
                                                                -webkit-user-select: none;
                                                                -moz-user-select: none;
                                                                -ms-user-select: none;
                                                                user-select: none;
                                                                -webkit-tap-highlight-color: transparent;
                                                            }
                                                            [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
                                                                cursor: pointer;
                                                            }

                                                            .btn-primary {
                                                                color: #fff;
                                                                background-color: #67a8e4;
                                                                border-color: #67a8e4;
                                                            }


                                                            .wizard>.actions a:active, .wizard>.actions a:hover {
                                                                background-color: #67a8e4;
                                                                border-radius: 4px;
                                                                padding: 8px 15px;
                                                                color: #fff;
                                                            }
                                                        </style>

                                                        <div>
                                                            <input type="checkbox" name="chkDebit" id="chkbox1" <?php if ($currentPaymentMethod === "chkDebit") echo 'checked'; ?> onchange="toggleElement('debithide', this.checked)" style="height:20px;width:20px">
                                                            <label for="chkDebit">Debit Order</label>
                                                            <div id="debithide" style=" display:none">
                                                                <hr>

                                                                <div class="row">
                                                                    <div class="col" id="mainshide">
                                                                        <input type="checkbox" name="chkbox" id="hidemain" onchange="memberHide()" style="height:20px;width:20px">
                                                                        <label for="chk">Main Member</label>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col"id="premiumhides">
                                                                        <input type="checkbox" name="prembox" id="pprem" onchange="showpremium()" style="height:20px;width:20px" >
                                                                        <label for="pprem">Premium payer</label>
                                                                    </div>
                                                                </div>


                                                                <div id="premiumhide" style="display:none ! important">

                                                                    <div class="row"id="to-show">

                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtCompanyShipping" name="dpAcc_holder" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpAcc_holder : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                                <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtEmailAddressShipping" name="dpaccount_number" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpaccount_number : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtEmailAddressShipping"class="col-lg-3 col-form-label">Bank Name:</label>
                                                                                <div class="col-lg-9">
                                                                                    <select id="ddlCreditCardType" name="dpbank_name" class="required form-control" style="margin-left:130px ! important;width:100% ! important">
                                                                                        <option value="">{{ isset($paymentDebit) ? $paymentDebit->dpbank_name : '' }}</option>
                                                                                        <option value="FNB">FNB</option>
                                                                                        <option value="standard_bank">Standard Bank</option>
                                                                                        <option value="Capitec">Capitec</option>
                                                                                        <option value="Nedbank">Nedbank</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                                                <div class="col-lg-9">
                                                                                    <select id="ddlCreditCardType" name="dpaccount_number" class="required form-control" style="margin-left:130px ! important;width:100% ! important">
                                                                                        <option value="">{{ isset($paymentDebit) ? $paymentDebit->dpaccount_number : '' }}</option>
                                                                                        <option value="cheque">cheque</option>
                                                                                        <option value="savings">savings</option>
                                                                                        <option value="transmission">transmission</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-row mb-3">
                                                                                <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Branch Code:</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtEmailAddressShipping" name="dpbranch_code" type="text" class="required form-control"placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpbranch_code : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Frequency:</label>
                                                                                <div class="col-lg-9">
                                                                                    <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                                    <select id="ddlCreditCardType"name="dpfrequency" style="height:36px" class="required form-control" >
                                                                                        <option value=""> {{ isset($paymentDebit) ? $paymentDebit->dpfrequency : '' }} </option>
                                                                                        <option value="December Debit Date">December Debit Date</option>
                                                                                        <option value="Monthly">Monthly</option>
                                                                                        <option value="Half Yearly">Half Yearly</option>
                                                                                        <option value="Yearly">Yearly</option>
                                                                                        <option value="Other">Other</option>


                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Debit Day:</label>
                                                                                <div class="col-lg-9">
                                                                                    <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                                    <select id="ddlCreditCardType"name="dpdebit_day" style="height:36px" class="required form-control" >
                                                                                        <option value=""> {{ isset($paymentDebit) ? $paymentDebit->dpdebit_day : '' }} </option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="15">15</option>
                                                                                        <option value="20">20</option>
                                                                                        <option value="21">21</option>
                                                                                        <option value="">22</option>
                                                                                        <option value="25">25</option>
                                                                                        <option value="28">28</option>
                                                                                        <option value="30">30</option>
                                                                                        <option value="31">31</option>
                                                                                        <option value="other">other</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtNameCard" class="col-lg-3 col-form-label">Cellphone</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtNameCard" name="dpcell_number" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpcell_number : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtNameCard" name="dpstreet_address" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dpstreet_address : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                                                <div class="col-lg-9">
                                                                                <input id="txtNameCard" name="dppo_box" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppo_box : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtCreditCardNumber" name="dptown" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dptown : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                                                <div class="col-lg-9">
                                                                                    <select id="ddlCreditCardType" name="dppronvice" class="required form-control" >
                                                                                        <option value=""> {{ isset($paymentDebit) ? $paymentDebit->dppronvice : '' }} </option>
                                                                                        <option value="gauteng">gauteng</option>
                                                                                        <option value="limpopo">limpopo</option>
                                                                                        <option value="free state">free state</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtExpirationDate" name="mem_residential_code" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppostal_code : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-3">
                                                                                <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                                                <div class="col-lg-9">
                                                                                    <input id="txtExpirationDate" name="dppostal_code" type="text" class="required form-control" placeholder="{{ isset($paymentDebit) ? $paymentDebit->dppostal_code : '' }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <hr>

                                                                    </div>

                                                                </div>

                                                                <script type="text/javascript">
                                                                    function showpremium(){
                                                                        var checkbox = document.getElementById("premiumhides");

                                                                        if(checkbox.checked){
                                                                            document.getElementById("premiumhide").style.display="block";
                                                                        //    document.getElementById("stophide").style.display="none";

                                                                            console.log("i am runining");
                                                                        }
                                                                        else{
                                                                            document.getElementById("premiumhide").style.display="none";
                                                                            // document.getElementById("stophide").style.display="block";


                                                                        }


                                                                    }
                                                                </script>

                                                                <hr>

                                                                <br/>

                                                                <div class="row"id="to-show">

                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtCompanyShipping" name="dpAcc_holder" type="text" class="required form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="dpaccount_number" type="text" class="required form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="ddlCreditCardType" name="dpbank_name" type="text" class="required form-control">

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                                            <div class="col-lg-9">
                                                                            <input id="ddlCreditCardType" name="dpaccount_type" type="text" class="required form-control">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping"class="col-lg-3 col-form-label">Branch Code:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="dpbranch_code" type="text" class="required form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping"class="col-lg-3 col-form-label">Frequency:</label>
                                                                            <div class="col-lg-9">
                                                                                <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                                <select id="ddlCreditCardType"name="dpfrequency"  class="required form-control">
                                                                                    <option value=""></option>
                                                                                    <option value="December Debit Date">December Debit Date</option>
                                                                                    <option value="Monthly">Monthly</option>
                                                                                    <option value="Half Yearly">Half Yearly</option>
                                                                                    <option value="Yearly">Yearly</option>


                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Debit Day:</label>
                                                                            <div class="col-lg-9">
                                                                                <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                                <select id="ddlCreditCardType"name="dpdebit_day"  class="required form-control">
                                                                                    <option value=""></option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="">22</option>
                                                                                    <option value="25">25</option>
                                                                                    <option value="28">28</option>
                                                                                    <option value="30">30</option>
                                                                                    <option value="31">31</option>
                                                                                    <option value="other">other</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Cellphone</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtNameCard" name="dpcell_number" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtNameCard" name="dpstreet_address" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                                            <div class="col-lg-9">
                                                                            <input id="txtNameCard" name="dppo_box" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtCreditCardNumber" name="dptown" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                                            <div class="col-lg-9">
                                                                                <select id="ddlCreditCardType" name="dppronvice" class="required form-control">
                                                                                    <option value=""></option>
                                                                                    <option value="gauteng">gauteng</option>
                                                                                    <option value="limpopo">limpopo</option>
                                                                                    <option value="free state">free state</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtExpirationDate" name="mem_residential_code" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtExpirationDate" name="dppostal_code" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <hr>

                                                                <div class="container inside">
                                                                    <div class="full text flexrow" style="margin-left: -38px ! important">
                                                                        <p><strong>Debit order deduction:(application to debit order payment only)
                                                                                </strong>
                                                                        <ol>
                                                                        <li>Authority</li>
                                                                            <p>
                                                                                I hereby authorise Tshitshithe & Bros Funeral Undertakers to issue and deliver payment instructions to your Banker for collection
                                                                                against my above-mentioned account at my above-mentioned Bank(or any other Bank or branch to which I may transfer my account).
                                                                            </p>
                                                                            <p>
                                                                                In the event that the payment day falls on a sunday, or recognised South African public holiday, the payment day will automatically be
                                                                                the very next ordinary business day.
                                                                            </p>
                                                                            <p>
                                                                                I understand that the withdrawls hereby authorised will be processed through a computerised system provided by the South African
                                                                                Banks.I also understand that details of each withdrawl will be printed on the Bank statement. Such must contain a number, which must
                                                                                be included in the said payment instruction and if provided to me should enable me to identify the Agreement. This number must be added
                                                                                to this form under the Agreement Reference Number section before the issuing of any payment instruction.
                                                                            </p>
                                                                            <li>Mandate</li>
                                                                            <p>
                                                                                I acknowledge that all payment instructions issued by you shall be treated by my above-mentioned Banks as if the instructions have been
                                                                                issued by me/us personally.
                                                                            </p>
                                                                            <li>Cancellation</li>
                                                                            <p>
                                                                                I agree that although this Authority and Mandate may be cancelled by me, such cancellation will not cancel the Agreement. I shall not be
                                                                                entitled to any refund of amounts which you have withdrawn while this Authority was in force, if such amounts were legally owing to you.
                                                                            </p>
                                                                            <li>Assignment</li>
                                                                            <p>
                                                                                I acknowledge that this Authority may be ceded or assigned to a third party if the Agreement is also ceded or assigned to that third party,
                                                                                but in the absence of such assignment of the Agreement, this Authority and mandate cannot be assigned to any third party.
                                                                            </p>
                                                                        </ol>
                                                                        </p>
                                                                    </div>
                                                                    <div class="half text flexrow">
                                                                        <label for="advisor-date">Date</label>
                                                                        <input type="date"value="<?php //echo $today; ?>" name="advisor-date" id="advisor-date">
                                                                    </div>
                                                                    <!-- <div class="full text flexrow">
                                                                        <p>In the case of a dispute, the registered Rules of Bonitas will apply, subject to approval by the
                                                                            Registrar of Medical Schemes.</p>
                                                                    </div>
                                                                    <div class="half text flexrow">
                                                                        <label for="advisor-memfullname">Member full name</label>
                                                                        <input type="text" name="advisor-memfullname" id="advisor-memfullname">
                                                                    </div>
                                                                    <div class="full text flexrow">
                                                                        <label for="memdeclare" style="width: 100%;"><input type="checkbox" name="memdeclare" id="memdeclare"
                                                                                style="width: 2%;vertical-align: middle;margin-bottom: 5px;" onchange="consentcheck()"> I
                                                                            declare that the information provided in this document or voice recording is true and accurate and
                                                                            that I authorise the consultant to sign on my behalf.</label>
                                                                    </div>
                                                                    <div class="full text flexrow">
                                                                        <label for="popi" style="width: 100%;">
                                                                            <p>I agree that Bonitas, Medscheme and its Contracted Third Parties may contact and provide Me and My Dependants with information about insurance, lifestyle rewards and products which have been negotiated on Your behalf by Bonitas.</br></br>
                                                                            Your consent, along with that of Your dependants, to the disclosure of Your Personal information is protected by the Protection of Personal Information Act, 4 of 2013 (which came into effect on 1 July 2020) (“POPIA”) and will principally be governed by the POPIA, as well as any other Applicable Data Protection Legislation of the Republic of South Africa.</br></br>
                                                                            You have the right to inform Us when You do not want to receive any automated direct-marketing information and You may opt out of receiving such information by using the unsubscribe / opt out options on the Platforms.</br></br>
                                                                            I agree
                                                                            <input type="checkbox" name="popi" id="popi" style="width: 2%;vertical-align: middle;margin-bottom: 5px;" onchange="consentcheck()"></p>
                                                                            </label>
                                                                    </div> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="chkStop" id="chkbox2" <?php if ($currentPaymentMethod === "chkStop") echo 'checked'; ?> onchange="toggleElement('stophide', this.checked)" style="height:20px;width:20px">
                                                            <label for="chkStop">Stop Order</label>
                                                            <div id="stophide" style="display:none">
                                                                <br/>
                                                                <div class="row"id="to-show">
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtCompanyShipping" name="spAcc_holder" type="text" class="form-control" placeholder="{{ isset($stopOrderPayment) ? $stopOrderPayment->spAcc_holder : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="spAcc_number" type="text" class="form-control" placeholder="{{ isset($stopOrderPayment) ? $stopOrderPayment->spAcc_number : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                                            <div class="col-lg-9">
                                                                                <select id="ddlCreditCardType" name="spBank_name" class="form-control">
                                                                                    <option value=""> {{ isset($stopOrderPayment) ? $stopOrderPayment->spBank_name : '' }} </option>
                                                                                    <option value="FNB">FNB</option>
                                                                                    <option value="standard_bank">Standard Bank</option>
                                                                                    <option value="Capitec">Capitec</option>
                                                                                    <option value="Nedbank">Nedbank</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                                            <div class="col-lg-9">
                                                                                <select id="ddlCreditCardType" name="spAcc_type" class="form-control">
                                                                                    <option value="">{{ isset($stopOrderPayment) ? $stopOrderPayment->spAcc_type : '' }}</option>
                                                                                    <option value="cheque">cheque</option>
                                                                                    <option value="savings">savings</option>
                                                                                    <option value="transmission">transmission</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label" >Day:</label>
                                                                            <div class=" age col-lg-9">
                                                                                <select id="ddlCreditCardType"name="spDebit_date" style="height:36px" class="form-control">
                                                                                    <option value="">{{ isset($stopOrderPayment) ? $stopOrderPayment->spDebit_date : '' }}</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13">13</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="18">18</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="22">22</option>
                                                                                    <option value="23">23</option>
                                                                                    <option value="24">24</option>
                                                                                    <option value="25">25</option>
                                                                                    <option value="26">26</option>
                                                                                    <option value="27">27</option>
                                                                                    <option value="28">28</option>
                                                                                    <option value="29">29</option>
                                                                                    <option value="30">30</option>
                                                                                    <option value="31">31</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Status</label>
                                                                            <div class="col-lg-9">
                                                                                <select id="ddlCreditCardType" name="sp_status" class="form-control">
                                                                                    <option value="">{{ isset($stopOrderPayment) ? $stopOrderPayment->sp_status : '' }}</option>
                                                                                    <option value="Active">Active</option>
                                                                                    <option value="Not-Active">Not-Active</option>
                                                                                    <option value="Cancel Stop Order">Cancel Stop Order</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div>
                                                            <input type="checkbox" name="chkCash" id="chkbox3" <?php if ($currentPaymentMethod === "chkCash") echo 'checked'; ?> onchange="toggleElement('cashhide', this.checked)" style="height:20px;width:20px">
                                                            <label for="chkCash">Cash</label>
                                                            <div id="cashhide" style="display:none;">
                                                                <br/>
                                                                <div class="row" id="to-show">
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCompanyShipping" class="col-lg-3 col-form-label">Fullname(s)</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtCompanyShipping" name="cp_fullname" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_fullname : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Surname</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="cp_surname" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_surname : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtBranchCode" class="col-lg-3 col-form-label">Branch Code:</label>
                                                                            <div class="col-lg-9">
                                                                                {{-- <input id="txtBranchCode" name="branch_code" type="text" class="form-control"> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtDate" class="col-lg-3 col-form-label">Date:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtDate" name="cp_date" style="height:36px" type="date" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_date : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtStreetAddress" class="col-lg-3 col-form-label">Street Address</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtStreetAddress" name="cp_address" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_address : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtPOBox" class="col-lg-3 col-form-label">PO Box</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtPOBox" name="cp_po_box" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_po_box : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtTownCity" class="col-lg-3 col-form-label">Town or City</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtTownCity" name="cp_town" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_town : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="ddlProvince" class="col-lg-3 col-form-label">Province</label>
                                                                            <div class="col-lg-9">
                                                                                <select id="ddlProvince" name="cp_province" class="form-control">
                                                                                    <option value="">{{ isset($cashPayment) ? $cashPayment->cp_province : '' }}</option>
                                                                                    <option value="gauteng">Gauteng</option>
                                                                                    <option value="limpopo">Limpopo</option>
                                                                                    <option value="free state">Free State</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtStreetCode" class="col-lg-3 col-form-label">Street Code</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtStreetCode" name="cp_address_code" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_address_code : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtPostalCode" class="col-lg-3 col-form-label">Postal Code</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtPostalCode" name="cp_postal_code" type="text" class="form-control" placeholder="{{ isset($cashPayment) ? $cashPayment->cp_postal_code : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <input type="checkbox" name="chkPersal" id="chkbox4" <?php if ($currentPaymentMethod === "chkPersal") echo 'checked'; ?> onchange="toggleElement('persa', this.checked)" style="height:20px;width:20px">
                                                            <label for="chkPersal">Persal</label>
                                                            <div id="persa" style=" display:none">
                                                                <br/>
                                                                <p><strong> PERSAL INFORMATION: Required ID Copy and Payslip for Persal Deduction or Letter from Employment</strong></p>

                                                                <div class="row"id="to-show">
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Employment details/Authorisation employer:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtCompanyShipping" name="persal_emp" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_emp : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Persal no:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="persal_num" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_num : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Cellphone no:</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="persal_cell" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_cell : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Paypoint</label>
                                                                            <div class="col-lg-9">

                                                                                <input id="txtEmailAddressShipping" name="persal_Paypoint" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_Paypoint : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Persal Holder</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="persal_holder" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_holder : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">premium</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtEmailAddressShipping" name="persal_premium" style="height:36px" type="date" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_premium : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtNameCard" name="persal_address" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_address : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                                            <div class="col-lg-9">
                                                                            <input id="txtNameCard" name="persal_po_box" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_po_box : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtCreditCardNumber" name="persal_town" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_town : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                                            <div class="col-lg-9">
                                                                            <select id="ddlCreditCardType" name="persal_province" class="form-control">
                                                                                    <option value="">{{ isset($persalPayment) ? $persalPayment->persal_province : '' }}</option>
                                                                                    <option value="gauteng">gauteng</option>
                                                                                    <option value="limpopo">limpopo</option>
                                                                                    <option value="free state">free state</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtExpirationDate" name="persal_code" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_code : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                                            <div class="col-lg-9">
                                                                                <input id="txtExpirationDate" name="persal_postal_code" type="text" class="form-control" placeholder="{{ isset($persalPayment) ? $persalPayment->persal_postal_code : '' }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <hr>

                                                                <div class="container inside">
                                                                    <div class="full text flexrow" style="margin-left: -38px ! important">
                                                                        <p>
                                                                            I, the undersigned, hereby authorise the Accounting officer of the Depeartment to deduct a premium from salary on amonthly basis remit it to workers</br>
                                                                            Life Assurance Company from which I have obtained an insurance policy,until such time as I cancel this authorisation in writing or until I substitute it with a new</br>
                                                                            authorisation.should the relevant premium be adjusted by workers life A ssurance Company as a result of ageneral contractual increase/decrease in the premium, or should</br>
                                                                            request Workers Life Assurance Company to increase/decrease the premium for certain reasons, I hereby grant permission that the adjusted premium may be deducted from </br>
                                                                            my salary until such time as I cancel this authorisation in writing or substitute it with a new authorisation.
                                                                        </p>
                                                                    </div>
                                                                    <div class="half text flexrow">
                                                                        <label for="advisor-date">Date</label>
                                                                        <input type="date"value="<?php //echo $today; ?>" name="advisor-date" id="advisor-date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{--    script to check and uncheck  --}}
                                                        <script>
                                                            var initialisationIsDone= false;

                                                            function init(){
                                                                if(!initialisationIsDone){
                                                                    let currentPaymentMethod= <?php echo json_encode($currentPaymentMethod); ?>;

                                                                    if(currentPaymentMethod === "chkDebit"){
                                                                        toggleElement('debithide', true);
                                                                    }
                                                                    if(currentPaymentMethod === "chkStop"){
                                                                        toggleElement('stophide', true);
                                                                    }
                                                                    if(currentPaymentMethod === "chkCash"){
                                                                        toggleElement('cashhide', true);
                                                                    }
                                                                    if(currentPaymentMethod === "chkPersal"){
                                                                        toggleElement('persa', true);
                                                                    }
                                                                }
                                                            }
                                                            init();

                                                            function toggleElement(elementId, isChecked) {
                                                                initialisationIsDone= true;
                                                                var checkboxes= document.querySelectorAll('#chkbox1, #chkbox2, #chkbox3, #chkbox4');
                                                                var checkedCount = 0;

                                                                for (var i = 0; i < checkboxes.length; i++) {
                                                                    var checkbox = checkboxes[i];
                                                                    var label = checkbox.nextElementSibling;

                                                                    if (checkbox.checked) {
                                                                        checkedCount++;
                                                                        checkbox.style.display = 'inline-block';
                                                                        label.style.display = 'inline-block';
                                                                    } else {
                                                                        checkbox.style.display = 'none';
                                                                        label.style.display = 'none';
                                                                    }
                                                                }

                                                                var element = document.getElementById(elementId);
                                                                if (element) {
                                                                    element.style.display = isChecked ? 'block' : 'none';
                                                                }

                                                                if (checkedCount === 0) {
                                                                    for (var i = 0; i < checkboxes.length; i++) {
                                                                        var checkbox = checkboxes[i];
                                                                        var label = checkbox.nextElementSibling;
                                                                        checkbox.style.display = 'inline-block';
                                                                        label.style.display = 'inline-block';
                                                                    }
                                                                }
                                                            }

                                                        </script>

                                                    </section>

                                                    <section>
                                                        <input type="hidden" name="section" value="section6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="userName2"class="col-md-5 col-form-label">Full names:</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="password2"class="col-md-5 col-form-label">Surname:</label>
                                                                    <div class="col-md-8">
                                                                        <input id="password2" name="password" type="text" class="required form-control"style="margin-left:130px ! important">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="userName2"class="col-md-5 col-form-label">ID No:</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="password2"class="col-md-5 col-form-label">Date of Birth:</label>
                                                                    <div class="col-md-8">
                                                                        <input id="password2" name="password" type="text" class="required form-control"style="margin-left:130px ! important">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="userName2"class="col-md-5 col-form-label">Cellphone:</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="password2"class="col-md-5 col-form-label">Email Address:</label>
                                                                    <div class="col-md-8">
                                                                        <input id="password2" name="password" type="text" class="required form-control"style="margin-left:130px ! important">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="userName2"class="col-md-5 col-form-label">Initials:</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="password2"class="col-md-5 col-form-label">Gender</label>
                                                                    <div class="col-md-8">
                                                                        <input id="password2" name="password" type="text" class="required form-control"style="margin-left:130px ! important">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="userName2"class="col-md-5 col-form-label">Cover Amount: </label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="password2"class="col-md-5 col-form-label">Policy Type:</label>
                                                                    <div class="col-md-8">
                                                                        <input id="password2" name="password" type="text" class="required form-control"style="margin-left:130px ! important">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="userName2"class="col-md-5 col-form-label">Add Premium:</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="userName2" name="userName" type="text"style="margin-left:130px ! important">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="password2"class="col-md-5 col-form-label"> Total Premium:</label>
                                                                    <div class="col-md-8">
                                                                        <input id="password2" name="password" type="text" class="required form-control"style="margin-left:130px ! important">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                    </section>

                                                    <section>
                                                        <input type="hidden" name="section" value="section7">
                                                        <div class="form-group clearfix">
                                                            <div class="col-lg-12" style="display:flex; flex-direction:row; align-items:center">
                                                                <label for="acceptTerms-2" class="col-4">I agree with the Terms and Conditions.</label>
                                                                <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required col-1">
                                                            </div>
                                                        </div>

                                                    </section>


                                                    <div class="tab" id="finalstepTab">
                                                        <p>If you are sure the information provided is correct and you have supplied all supporting documentation you
                                                            can click submit otherwise close this window and continue when you have this information.</p>
                                                    </div>
                                                    <div style="width: 100%; margin-top:1em">
                                                        <div style="width: 100%;">
                                                          <button type="button" id="prevBtn" class="prev blue" onclick="nextPrev(-1)" style="display: inline !important; float: left; border-radius:0.5em; margin-right:1em; margin-bottom:0.3em;font-family: 'Helvetica Neue', Arial, sans-serif;">Previous</button>
                                                          <button type="button" id="nextBtn" class="nxt blue" onclick="nextPrev(1)" style="display: inline !important; border-radius:0.5em; margin-bottom:0.3em;font-family: 'Helvetica Neue', Arial, sans-serif;">Next</button>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        if($mainMemberId == 'false'){
                                                            $msg= 'New Form';
                                                        }else{
                                                            $msg= $mainMemberId;
                                                        }
                                                    ?>

                                                    <span>{{ $msg }}</span>
                                                    {{-- <span>{{ isset($saleRep) ? '$policyDetails->policy_type' : 'no saleRep'}}</span>
                                                    <span>{{ isset($mainMember) ? '$policyDetails->policy_type' : 'no mainMember' }}</span> --}}

                                                    <script>

                                                        var extendedMembers = <?php echo json_encode($extendedMembers); ?>;
                                                        console.log("Session mainMemberId", <?php echo json_encode($mainMemberId); ?>);
                                                        console.log("Session extended members",extendedMembers);
                                                        console.log("Session beneficiary members",<?php echo json_encode($beneficiaryMembers); ?>);
                                                        console.log("Session section", <?php echo json_encode($section); ?>);
                                                        console.log("Session nextState", <?php echo json_encode($nextState); ?>);
                                                        console.log("Session one", <?php echo json_encode($sectionOne); ?>);

                                                        const form = document.getElementById('wizard-validation-form');
                                                        const prevBtn = document.getElementById('prevBtn');
                                                        const nextBtn = document.getElementById('nextBtn');
                                                        const submitBtn = document.getElementById('submitBtn');
                                                        let currentTab;
                                                        let mainMemberId = 0;
                                                        let sectionOne=<?php echo json_encode($sectionOne);?>;
                                                        let id= <?php echo Session::get('saleRepId')+1;?>;
                                                        let initMainMember;

                                                        function showTab(n) {
                                                            //Initialisation of showTab
                                                            if(n===undefined){
                                                                currentTab = (<?php echo json_encode($section); ?> + <?php echo json_encode($nextState); ?>)-1;
                                                                //*************************
                                                                if(currentTab < 0){
                                                                    currentTab=0;
                                                                }
                                                                //*************************
                                                                console.log("currentTab", currentTab);//delete here>>>>>>
                                                            }
                                                            else{
                                                                // currentTab = <?php echo json_encode($section); ?> +n;
                                                                // console.log("currentTab", <?php echo json_encode($section); ?> +n);
                                                            }

                                                            if(currentTab < 0){
                                                                currentTab=0;
                                                            }
                                                            //Initialisation ends here

                                                            // console.log("currentTab", <?php echo json_encode($section); ?> +n);
                                                            const sections = form.getElementsByTagName('section');
                                                            const progressContainer= document.getElementsByClassName('progress');

                                                            if (currentTab === 5) {//if we are in section 6
                                                                for (let i = 0; i < sections.length; i++) {  //hide all sections
                                                                    sections[i].style.display = 'none';
                                                                }

                                                                const columnElements = document.getElementsByClassName('process');
                                                                for (let i = 0; i < columnElements.length; i++) {
                                                                    columnElements[i].style.backgroundColor = '#f5f5f5ab';
                                                                    columnElements[i].querySelector('h6').style.color = '#000';
                                                                    columnElements[i].style.color = '#000';
                                                                    columnElements[i].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                    columnElements[i].querySelector('.d-flex').style.border= '2px solid black';
                                                                    columnElements[i].querySelector('.d-flex').style.backgroundColor = '#fff';

                                                                }

                                                                columnElements[currentTab].style.backgroundColor = '#0074B7';
                                                                columnElements[currentTab].style.color = '#fff';
                                                                columnElements[currentTab].querySelector('h6').style.color = '#fff';
                                                                columnElements[currentTab].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                columnElements[currentTab].querySelector('.d-flex').style.border= '2px solid white';
                                                                columnElements[currentTab].querySelector('.d-flex').style.backgroundColor = '#8f2901';

                                                                for (let i = 0; i < 5; i++) { //show only section 1 to 5
                                                                    const currentSection= sections[i];
                                                                    const inputs = currentSection.querySelectorAll('input');
                                                                    for (let j = 0; j < inputs.length; j++) {
                                                                        inputs[j].disabled = true;
                                                                    }
                                                                    const buttons = sections[i].querySelectorAll('button');
                                                                    for (let k = 0; k < buttons.length; k++) {
                                                                        buttons[k].disabled = true;
                                                                    }

                                                                    const sectionNumber = i + 1;
                                                                    const button = document.createElement('button');
                                                                    const divider = document.createElement('hr');

                                                                    button.textContent = 'Update Section ' + sectionNumber; //---------->
                                                                    button.style.background= '#0074B7';
                                                                    button.style.borderRadius = '0.3em';
                                                                    button.style.marginTop = '1.5em';
                                                                    button.id = `section-button-${sectionNumber}`;
                                                                    divider.id = `section-divider-${sectionNumber}`;
                                                                    console.log("id name:", `section-button-${sectionNumber}`)
                                                                    // button.style.marginBottom = '1em';

                                                                    divider.style.border = 'none';
                                                                    divider.style.borderTop = '1px solid #ccc';
                                                                    divider.style.marginTop = '1.5em';
                                                                    divider.style.marginBottom = '6em';

                                                                    let existingButton = currentSection.querySelector(`#section-button-${sectionNumber}`);

                                                                    if (!existingButton) {
                                                                        currentSection.appendChild(button);
                                                                        currentSection.appendChild(divider);
                                                                        // console.log("Doesnt exist")
                                                                    }
                                                                    else{
                                                                        // console.log("Exists")
                                                                    }

                                                                    currentSection.style.display = 'block';
                                                                    button.addEventListener('click', async function() { //pressing the section button
                                                                        // currentSection.removeChild(button);
                                                                        // currentSection.removeChild(divider);

                                                                        for (let i = 0; i < sections.length; i++) {
                                                                            const section = sections[i];
                                                                            const buttonToRemove = section.querySelector(`#section-button-${i + 1}`);
                                                                            const divider = section.querySelector(`#section-divider-${i + 1}`);

                                                                            if (buttonToRemove) {
                                                                                section.removeChild(buttonToRemove);
                                                                            }
                                                                            if (divider) {
                                                                                section.removeChild(divider);
                                                                            }
                                                                        }

                                                                        const inputs = currentSection.querySelectorAll('input');
                                                                        for (let j = 0; j < inputs.length; j++) {
                                                                            inputs[j].disabled = false;
                                                                        }
                                                                        const buttons = currentSection.querySelectorAll('button');
                                                                        for (let k = 0; k < buttons.length; k++) {
                                                                            buttons[k].disabled = false;
                                                                        }
                                                                        //********************************************************************** [API]
                                                                        const payload = {
                                                                            section: currentSection.querySelector('input[name="section"]').value,
                                                                            _token: $('meta[name="csrf-token"]').attr('content'),
                                                                            nextState: n
                                                                        };
                                                                        method = 'PUT';
                                                                        actionURL = `/member-capture/${0}`;

                                                                        console.log("url", actionURL);//delete here>>>>>>
                                                                        console.log("method", method);//delete here>>>>>>
                                                                        console.log("data: ", payload);//delete here>>>>>>

                                                                        const response = await fetch(actionURL, {
                                                                            method: method,
                                                                            headers: {
                                                                                'Content-Type': 'application/json',
                                                                                'X-CSRF-TOKEN': payload._token // Include CSRF token in headers
                                                                            },
                                                                            body: JSON.stringify(payload)
                                                                        });

                                                                        // // Check if the response is successful
                                                                        if (response.ok) {
                                                                            // Update currentTab and show the tab
                                                                            console.log("ID", response)//delete here>>>>>>
                                                                            currentTab = i;
                                                                            //*****************************************************************************************************
                                                                            //enable all the inputs & buttons
                                                                            const inputs = sections[currentTab].querySelectorAll('input');
                                                                            for (let j = 0; j < inputs.length; j++) {
                                                                                inputs[j].disabled = false;
                                                                            }
                                                                            const buttons = sections[currentTab].querySelectorAll('button');
                                                                            for (let k = 0; k < buttons.length; k++) {
                                                                                buttons[k].disabled = false;
                                                                            }
                                                                            //remove the buttons with the text called section
                                                                            const buttonToRemove = sections[currentTab].querySelector(`#section-button-${responseSection-1 }`);
                                                                            const dividerToRemove = sections[currentTab].querySelector(`#section-divider-${responseSection-1 }`);

                                                                            if (buttonToRemove) {
                                                                                sections[currentTab].removeChild(buttonToRemove);
                                                                            }
                                                                            if (dividerToRemove) {
                                                                                sections[currentTab].removeChild(dividerToRemove);
                                                                            }
                                                                            //*****************************************************************************************************
                                                                            showTab(currentTab);
                                                                        } else {
                                                                            // Handle error
                                                                            console.error(`An error occurred: ${response.status}`);
                                                                        }
                                                                        //************************************************************************** [API]

                                                                    });
                                                                }
                                                            }
                                                            else{
                                                                // showTab(currentTab);
                                                                for (let i = 0; i < sections.length; i++) {
                                                                    sections[i].style.display = 'none';
                                                                }

                                                                sections[currentTab].style.display = 'block';

                                                                const columnElements = document.getElementsByClassName('process');
                                                                for (let i = 0; i < columnElements.length; i++) {
                                                                    columnElements[i].style.backgroundColor = '#f5f5f5ab';
                                                                    columnElements[i].querySelector('h6').style.color = '#000';
                                                                    columnElements[i].style.color = '#000';
                                                                    columnElements[i].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                    columnElements[i].querySelector('.d-flex').style.border= '2px solid black';
                                                                    columnElements[i].querySelector('.d-flex').style.backgroundColor = '#fff';

                                                                }

                                                                columnElements[currentTab].style.backgroundColor = '#0074B7';
                                                                columnElements[currentTab].style.color = '#fff';
                                                                columnElements[currentTab].querySelector('h6').style.color = '#fff';
                                                                columnElements[currentTab].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                columnElements[currentTab].querySelector('.d-flex').style.border= '2px solid white';
                                                                columnElements[currentTab].querySelector('.d-flex').style.backgroundColor = '#8f2901';

                                                                if (currentTab === 0) {
                                                                    prevBtn.style.display = 'none';
                                                                } else {
                                                                    prevBtn.style.display = 'block';
                                                                }

                                                                if (currentTab === sections.length - 1) {
                                                                    nextBtn.innerText = 'Submit';
                                                                } else {
                                                                    nextBtn.innerText = 'Next';
                                                                }
                                                            }
                                                        }

                                                        async function checkMainMemberId(sectionIndex) {
                                                            try {
                                                                const token = '{{ csrf_token() }}';
                                                                const response1 = await fetch('/check-main-member-id', {
                                                                    method: 'POST',
                                                                    headers: {
                                                                        'Content-Type': 'application/json',
                                                                        'X-CSRF-TOKEN': token
                                                                    },
                                                                    body: JSON.stringify({
                                                                        section: 'section' + sectionIndex
                                                                    })
                                                                });


                                                                if (response1.ok) {
                                                                    console.log("first")//delete here>>>>>>
                                                                    const data = await response1.json();
                                                                    console.log("hello", data)//delete here>>>>>>
                                                                    // return data.exists;
                                                                    return data;
                                                                } else {
                                                                    throw new Error('Main Member ID check error: ' + response1.status);
                                                                }
                                                            } catch (error) {
                                                                // Handle mainMemberId check error
                                                                console.log(error);
                                                                return false;
                                                            }
                                                        }

                                                        async function nextPrev(n) {

                                                            const sections = form.getElementsByTagName('section');
                                                            const currentSection = sections[currentTab];
                                                            const currentInputs = currentSection.querySelectorAll('input');
                                                            const currentSelects = currentSection.querySelectorAll('select');

                                                            let responseSection;
                                                            let newPaymentMethod=null;
                                                            if(sectionOne === undefined) {
                                                                sectionOne= true;}

                                                            if(initMainMember === '' || initMainMember === null || initMainMember === undefined){
                                                                initMainMember= <?php echo json_encode($mainMemberId);?>;
                                                                console.log("mainMemberId being checked", <?php echo json_encode($mainMemberId)?>)
                                                            }
                                                            console.log("mainMemberId initMainMember being checked1", initMainMember)
                                                            //if the current section is not section 3 or section 4
                                                            if(currentTab !== 2 && currentTab !== 3){
                                                                //section 1,2,5,6,7
                                                                //Then you can create or update the information to the DB from here
                                                                if (currentInputs.length > 0) {

                                                                    const payload = {
                                                                        section: currentSection.querySelector('input[name="section"]').value,
                                                                        _token: $('meta[name="csrf-token"]').attr('content'),
                                                                        nextState: n
                                                                    };

                                                                    for (let i = 0; i < currentInputs.length; i++) { //placing all the input values in the payload
                                                                        const input = currentInputs[i];
                                                                        if (input.type === 'checkbox') {
                                                                            payload[input.name] = input.checked;
                                                                            if(input.checked === true){
                                                                                newPaymentMethod=input.name;
                                                                            }
                                                                        } else {
                                                                            payload[input.name] = input.value;
                                                                        }
                                                                    }

                                                                    for (let i = 0; i < currentSelects.length; i++) { // Placing all the select values in the payload
                                                                        const select = currentSelects[i];
                                                                        payload[select.name] = select.value;
                                                                    }

                                                                    if(responseSection === '' || responseSection === null || responseSection === undefined){//if a response section doesn't exist
                                                                        //this is required for the method checkMainMemberId()
                                                                        //this condition is met during the first section going to the second
                                                                        responseSection= currentTab + 1;
                                                                    }
                                                                    //****************************************
                                                                    console.log("above response section",responseSection);//delete here>>>>>>
                                                                    console.log("Section one",sectionOne);//delete here>>>>>>
                                                                    //****************************************

                                                                    let mainMemberIdExists=false;
                                                                    let arrayExists=[];
                                                                    let previousPaymentMethod=null;
                                                                    let isPaymentMethodChange= false;

                                                                    if(initMainMember === 'false'){
                                                                        mainMemberIdExists= false;
                                                                        console.log("initMainaMember 2")//delete here>>>>>>
                                                                    }
                                                                    else{
                                                                        arrayExists = await checkMainMemberId(responseSection);
                                                                        mainMemberIdExists = arrayExists.exists;
                                                                        (arrayExists.currentPayment === undefined)? previousPaymentMethod=null: previousPaymentMethod= arrayExists.currentPayment;
                                                                        (newPaymentMethod === previousPaymentMethod)? (isPaymentMethodChange= false):(isPaymentMethodChange= true);
                                                                        console.log("initMainaMember 1", arrayExists)//delete here>>>>>>
                                                                        console.log("isPaymentMethodChange", isPaymentMethodChange)//delete here>>>>>>
                                                                        console.log("previousPaymentMethod", previousPaymentMethod)//delete here>>>>>>
                                                                    }

                                                                    console.log("mainMemberIdExists", mainMemberIdExists)//delete here>>>>>>
                                                                    let method;
                                                                    let actionURL;

                                                                    if (mainMemberIdExists && sectionOne && !isPaymentMethodChange) {
                                                                        method = 'PUT';
                                                                        actionURL=`/member-capture/${id}`;
                                                                    } else {
                                                                        if(previousPaymentMethod !== null){ //if you want to update payment
                                                                            if (!confirm("Do you want to delete your previous payment method: "+ previousPaymentMethod +" ?")) {
                                                                                // User did not agree
                                                                                location.reload(); // Reload the page
                                                                            }
                                                                        }
                                                                        method = 'POST';
                                                                        actionURL='/member-capture';
                                                                    }
                                                                    //****************************************
                                                                    console.log("url", actionURL);
                                                                    console.log("method", method);
                                                                    console.log("data: ", payload);
                                                                    //***************************************
                                                                    const response = await fetch(actionURL, {
                                                                        method: method,
                                                                        headers: {
                                                                            'Content-Type': 'application/json',
                                                                            'X-CSRF-TOKEN': payload._token // Include CSRF token in headers
                                                                        },
                                                                        body: JSON.stringify(payload)
                                                                    });

                                                                    if (response.ok) {
                                                                        //After the information has been create or updated successfully
                                                                        const data = await response.json();
                                                                        responseSection= data.section;
                                                                        sectionOne=data.sectionOne;
                                                                        const formCompleted= (data.section + data.nextState) === 8? true: false;
                                                                        initMainMember= 'true';
                                                                        //*************************************************
                                                                        //delete here>>>>>>
                                                                        console.log(data.message);
                                                                        console.log("mainid", <?php echo $mainMemberId;?>)
                                                                        console.log("salesid", id)
                                                                        console.log("sessionRes", responseSection);
                                                                        console.log("--> input", data);
                                                                        console.log("response nextState", data.nextState)
                                                                        console.log("mainMemberId initMainMember being checked2", initMainMember)

                                                                        if(formCompleted ){
                                                                            window.location.href = '/dashboard';
                                                                        }

                                                                        //end delete>>>>>>
                                                                        //*************************************************
                                                                        currentTab += n;
                                                                        //****************************************************************************************************
                                                                        //enable all the inputs & buttons
                                                                        const inputs = sections[currentTab].querySelectorAll('input');
                                                                        for (let j = 0; j < inputs.length; j++) {
                                                                            inputs[j].disabled = false;
                                                                        }
                                                                        const buttons = sections[currentTab].querySelectorAll('button');
                                                                        for (let k = 0; k < buttons.length; k++) {
                                                                            buttons[k].disabled = false;
                                                                        }
                                                                        //remove the buttons with the text called section
                                                                        const buttonToRemove = sections[currentTab].querySelector(`#section-button-${responseSection-1 }`);
                                                                        const dividerToRemove = sections[currentTab].querySelector(`#section-divider-${responseSection-1 }`);

                                                                        if (buttonToRemove) {
                                                                            sections[currentTab].removeChild(buttonToRemove);
                                                                        }
                                                                        if (dividerToRemove) {
                                                                            sections[currentTab].removeChild(dividerToRemove);
                                                                        }
                                                                        //*****************************************************************************************************
                                                                        //delete here>>>>>>
                                                                        // console.log("currentTab after response", responseSection -1);
                                                                        console.log("ID after response", `#section-button-${responseSection-1 }`);

                                                                        console.log("buttonToRemove", buttonToRemove);
                                                                        console.log("dividerToRemove", dividerToRemove);
                                                                        console.log("currentTab after", currentTab)
                                                                        //end delete here>>>>>>
                                                                        //******************************************************************************************************
                                                                        if (currentTab < sections.length) {//prevent showing an empty section

                                                                            if (currentTab === 5) {//if we are in section 6
                                                                                for (let i = 0; i < sections.length; i++) {  //hide all sections
                                                                                    sections[i].style.display = 'none';
                                                                                }

                                                                                const columnElements = document.getElementsByClassName('process');
                                                                                for (let i = 0; i < columnElements.length; i++) {
                                                                                    columnElements[i].style.backgroundColor = '#f5f5f5ab';
                                                                                    columnElements[i].querySelector('h6').style.color = '#000';
                                                                                    columnElements[i].style.color = '#000';
                                                                                    columnElements[i].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                                    columnElements[i].querySelector('.d-flex').style.border= '2px solid black';
                                                                                    columnElements[i].querySelector('.d-flex').style.backgroundColor = '#fff';
                                                                                }

                                                                                columnElements[currentTab].style.backgroundColor = '#0074B7';
                                                                                columnElements[currentTab].style.color = '#fff';
                                                                                columnElements[currentTab].querySelector('h6').style.color = '#fff';
                                                                                columnElements[currentTab].querySelector('.d-flex').style.boxShadow = '2px 0px 0px 0px rgba(0,0,0,0.47)';
                                                                                columnElements[currentTab].querySelector('.d-flex').style.border= '2px solid white';
                                                                                columnElements[currentTab].querySelector('.d-flex').style.backgroundColor = '#8f2901';

                                                                                for (let i = 0; i < 5; i++) { //show only section 1 to 5
                                                                                    const currentSection= sections[i];
                                                                                    const inputs = currentSection.querySelectorAll('input');
                                                                                    for (let j = 0; j < inputs.length; j++) {
                                                                                        inputs[j].disabled = true;
                                                                                    }
                                                                                    const buttons = sections[i].querySelectorAll('button');
                                                                                    for (let k = 0; k < buttons.length; k++) {
                                                                                        buttons[k].disabled = true;
                                                                                    }

                                                                                    const sectionNumber = i + 1;
                                                                                    const button = document.createElement('button');
                                                                                    const divider = document.createElement('hr');

                                                                                    button.textContent = 'Update Section ' + sectionNumber; //---------->
                                                                                    button.style.background= '#0074B7';
                                                                                    button.style.borderRadius='0.3em';
                                                                                    button.style.marginTop = '1.5em';
                                                                                    button.id = `section-button-${sectionNumber}`;
                                                                                    divider.id = `section-divider-${sectionNumber}`;
                                                                                    console.log("id name:", `section-button-${sectionNumber}`)
                                                                                    // button.style.marginBottom = '1em';

                                                                                    divider.style.border = 'none';
                                                                                    divider.style.borderTop = '1px solid #ccc';
                                                                                    divider.style.marginTop = '1.5em';
                                                                                    divider.style.marginBottom = '6em';

                                                                                    let existingButton = currentSection.querySelector(`#section-button-${sectionNumber}`);

                                                                                    if (!existingButton) {
                                                                                        currentSection.appendChild(button);
                                                                                        currentSection.appendChild(divider);
                                                                                        // console.log("Doesnt exist")
                                                                                    }
                                                                                    else{
                                                                                        // console.log("Exists")
                                                                                    }

                                                                                    currentSection.style.display = 'block';
                                                                                    button.addEventListener('click', async function() { //pressing the section button
                                                                                        // currentSection.removeChild(button);
                                                                                        // currentSection.removeChild(divider);

                                                                                        //the code below is to remove the effects of section 6
                                                                                        for (let i = 0; i < sections.length; i++) {
                                                                                            const section = sections[i];
                                                                                            const buttonToRemove = section.querySelector(`#section-button-${i + 1}`);
                                                                                            const divider = section.querySelector(`#section-divider-${i + 1}`);

                                                                                            if (buttonToRemove) {
                                                                                                section.removeChild(buttonToRemove);
                                                                                            }
                                                                                            if (divider) {
                                                                                                section.removeChild(divider);
                                                                                            }
                                                                                        }

                                                                                        const inputs = currentSection.querySelectorAll('input');
                                                                                        for (let j = 0; j < inputs.length; j++) {
                                                                                            inputs[j].disabled = false;
                                                                                        }
                                                                                        const buttons = currentSection.querySelectorAll('button');
                                                                                        for (let k = 0; k < buttons.length; k++) {
                                                                                            buttons[k].disabled = false;
                                                                                        }
                                                                                        //section 6 effects end here

                                                                                        //********************************************************************** [API]
                                                                                        const payload = {
                                                                                            section: currentSection.querySelector('input[name="section"]').value,
                                                                                            _token: $('meta[name="csrf-token"]').attr('content'),
                                                                                            nextState: 0
                                                                                        };
                                                                                        method = 'PUT';
                                                                                        actionURL = `/member-capture/${0}`;

                                                                                        console.log("url", actionURL);//delete here>>>>>>
                                                                                        console.log("method", method);//delete here>>>>>>
                                                                                        console.log("data: ", payload);//delete here>>>>>>

                                                                                        const response = await fetch(actionURL, {
                                                                                            method: method,
                                                                                            headers: {
                                                                                                'Content-Type': 'application/json',
                                                                                                'X-CSRF-TOKEN': payload._token // Include CSRF token in headers
                                                                                            },
                                                                                            body: JSON.stringify(payload)
                                                                                        });

                                                                                        // // Check if the response is successful
                                                                                        if (response.ok) {
                                                                                            // Update currentTab and show the tab
                                                                                            const data = await response.json();
                                                                                            console.log("ID", data)//delete here>>>>>>
                                                                                            currentTab = i;
                                                                                            //*****************************************************************************************************
                                                                                            //enable all the inputs & buttons
                                                                                            const inputs = sections[currentTab].querySelectorAll('input');
                                                                                            for (let j = 0; j < inputs.length; j++) {
                                                                                                inputs[j].disabled = false;
                                                                                            }
                                                                                            const buttons = sections[currentTab].querySelectorAll('button');
                                                                                            for (let k = 0; k < buttons.length; k++) {
                                                                                                buttons[k].disabled = false;
                                                                                            }
                                                                                            //remove the buttons with the text called section
                                                                                            const buttonToRemove = sections[currentTab].querySelector(`#section-button-${responseSection-1 }`);
                                                                                            const dividerToRemove = sections[currentTab].querySelector(`#section-divider-${responseSection-1 }`);

                                                                                            if (buttonToRemove) {
                                                                                                sections[currentTab].removeChild(buttonToRemove);
                                                                                            }
                                                                                            if (dividerToRemove) {
                                                                                                sections[currentTab].removeChild(dividerToRemove);
                                                                                            }
                                                                                            //*****************************************************************************************************
                                                                                            showTab(currentTab);
                                                                                        } else {
                                                                                            // Handle error
                                                                                            console.error(`An error occurred: ${response.status}`);
                                                                                        }
                                                                                        //************************************************************************** [API]

                                                                                    });
                                                                                }
                                                                            }
                                                                            else{
                                                                                showTab(currentTab);
                                                                            }

                                                                        }
                                                                    } else {
                                                                        throw new Error('Request error: ' + response.status);
                                                                    }
                                                                }
                                                            }
                                                            else{ //else just show the form without creating or updating the information to the DB from here
                                                                //section 3 & 4
                                                                //Input=[]
                                                                const payload = {
                                                                    section: currentSection.querySelector('input[name="section"]').value,
                                                                    _token: $('meta[name="csrf-token"]').attr('content'),
                                                                    nextState: n
                                                                };

                                                                const response = await fetch('/member-capture', {
                                                                    method: 'POST',
                                                                    headers: {
                                                                        'Content-Type': 'application/json',
                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token in headers
                                                                    },
                                                                    body: JSON.stringify(payload)
                                                                });

                                                                if (response.ok) {
                                                                    //After the information has been create or updated successfully
                                                                    const data = await response.json();
                                                                    responseSection= data.section;
                                                                    sectionOne=data.sectionOne;

                                                                    //************************************************* TO BE DELETED!
                                                                    console.log(data.message);
                                                                    console.log("mainid", <?php echo $mainMemberId;?>)
                                                                    console.log("salesid", id)
                                                                    console.log("sessionRes", responseSection);
                                                                    console.log("--> input", data.input);

                                                                    currentTab += n;
                                                                    //*****************************************************************************************************
                                                                     //enable all the inputs & buttons
                                                                    const inputs = sections[currentTab].querySelectorAll('input');
                                                                    for (let j = 0; j < inputs.length; j++) {
                                                                        inputs[j].disabled = false;
                                                                    }
                                                                    const buttons = sections[currentTab].querySelectorAll('button');
                                                                    for (let k = 0; k < buttons.length; k++) {
                                                                        buttons[k].disabled = false;
                                                                    }

                                                                    const buttonToRemove = sections[currentTab].querySelector(`#section-button-${responseSection-1 }`);
                                                                    const dividerToRemove = sections[currentTab].querySelector(`#section-divider-${responseSection-1 }`);
                                                                    //remove the buttons with the text called section
                                                                    if (buttonToRemove) {
                                                                        sections[currentTab].removeChild(buttonToRemove);
                                                                    }
                                                                    if (dividerToRemove) {
                                                                        sections[currentTab].removeChild(dividerToRemove);
                                                                    }
                                                                    //*****************************************************************************************************
                                                                    console.log("currentTab after 2", currentTab)  //--->*
                                                                    if (currentTab < sections.length) {

                                                                        showTab(currentTab);
                                                                    }

                                                                } else {
                                                                    throw new Error('Request error: ' + response.status);
                                                                }
                                                            }
                                                        }


                                                        showTab(currentTab);
                                                    </script>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->
                    </div> <!-- end container-fluid -->

            </div> <!-- end content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Tshitshithe.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendani ICT
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Form Wizard-->
        <script src="assets/libs/jquery-steps/jquery.steps.min.js"></script>

        <script src="assets/libs/jquery-validation/jquery.validate.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

    <!-- Mirrored from coderthemes.com/uplon/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:44 GMT -->
</html>
