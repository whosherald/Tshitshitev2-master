<!doctype html>
<html lang="en">

<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:05:26 GMT -->
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

    </head>
    <style>

        #regForm {
          background-color: #ffffff;
          margin: 100px auto;
          font-family: Raleway;
          padding: 40px;
          width: 70%;
          min-width: 300px;
        }

        h1 {
          text-align: center;
        }

        input {
          padding: 10px;
          width: 100%;
          font-size: 17px;
          font-family: Raleway;
          border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
          background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
          display: none;
        }

        button {
          background-color: #04AA6D;
          color: #ffffff;
          border: none;
          padding: 10px 20px;
          font-size: 17px;
          font-family: Raleway;
          cursor: pointer;
        }

        button:hover {
          opacity: 0.8;
        }

        #prevBtn {
          background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbbbbb;
          border: none;
          border-radius: 50%;
          display: inline-block;
          opacity: 0.5;
        }

        .step.active {
          opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
          background-color: #04AA6D;
        }
    </style>

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner">
        </div>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2">

                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany.jpg" alt="lang-image" class="mr-1" height="12"> <span
                                    class="align-middle">German</span>
                            </a>

                        </div>
                    </li>

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
                                        <i class="mdi mdi-settings-outline"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="text-muted">There are new settings available</small>
                                    </p>
                                </a>

                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
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
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Alex M.</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
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
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg" style="background-color:#3d74f1">
                            <img src="assets/images/logo.png" alt="" height="65"style="margin-top:-3px">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
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

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
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

                                    <div class="row mt-4">
                                        <div class="col-12" style="padding: 0 2em">
                                            <h5>Member Capture</h5>

                                            {{-- Progress Blocks --}}
                                            <div class="col-12 d-flex flex-column mb-3" style="gap:0.5em; ">
                                                <div class="row d-flex" style="padding: 1em 0em;">
                                                    <div class="col-3 p-2 process" style="border: 1px solid black; height: 2.5em">
                                                        1. Claims Details
                                                    </div>
                                                    <div class="col-3 p-2 process" style="border: 1px solid black; height: 2.5em">
                                                        2. Cliamant Details
                                                    </div>
                                                    <div class="col-3 p-2 process" style="border: 1px solid black; height: 2.5em">
                                                        3. Deceased Details
                                                    </div>
                                                    <div class="col-3 p-2 process" style="border: 1px solid black; height: 2.5em">
                                                        4. Terms and conditions
                                                    </div>
                                                </div>
                                            </div>



                                            <form id="wizard-validation-form"  >
                                                <div>
                                                    {!! csrf_field() !!}

                                                    <section class="p-2">
                                                        <input type="hidden" name="claim_section" value="section1">
                                                        <div class="title d-flex mb-4" style="background-color:#67a8e4; height:50px; align-items:center !important; border-radius: 10px 10px 10px 10px !important; box-shadow: 2px 5px 10px #888888; border: 1px solid; justify-content:center">
                                                            <h4 style=" "> CLAIMS DETAILS</h4>
                                                        </div>

                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3 d-flex justify-content-center align-items-center" style="">
                                                                    <div class="col-auto">
                                                                      <input type="checkbox" name="claim_claiming" <?php if (isset($claims) && $claims->claim_claiming) echo 'checked'; ?>>
                                                                    </div>
                                                                    <div class="col">
                                                                      <label for="cl_claiming" class="container">Claiming for member</label>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row mb-3 align-items-center">
                                                                    <div class="col-auto">
                                                                      <input type="checkbox" name="claim_apply" <?php if (isset($claims) && $claims->claim_apply) echo 'checked'; ?>>
                                                                    </div>
                                                                    <div class="col">
                                                                      <label class="container" for="claim_apply">Apply waiting period</label>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                        </div>

                                                        <style>
                                                            .element.style {
                                                                background-color: #67a8e4;
                                                                height: 50px;
                                                                align: center !important;
                                                                margin-top: -90px !important;

                                                                border-radius: 10px 10px 10px 10px !important;
                                                                border: 1px solid;
                                                                padding: 10px;
                                                                box-shadow: 2px 5px 10px #888888;

                                                            }
                                                        </style>

                                                        <hr>

                                                        <div>
                                                            <h6>Claim Details</h6>
                                                        </div>
                                                        <hr>

                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">claim date</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="txtCityBilling" name="claim_date" type="date" class="form-control" value="{{ isset($claims) ? $claims->claim_date : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">claim number</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="txtCityBilling" name="claim_number" type="number" class="form-control"  placeholder="{{ isset($claims) ? $claims->claim_number : '' }}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">cause of death</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="txtCityBilling" name="claim_cause_death" type="text" class="form-control"  placeholder="{{ isset($claims) ? $claims->claim_cause_death : '' }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">Claim Notes</label>
                                                                        <div class="col-lg-9">
                                                                            <textarea  name="claim_notes"required class="form-control" rows="5">{{ isset($claims) ? $claims->claim_notes : '' }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mb-3">
                                                                        <label for="txtCityBilling" class="col-lg-3 col-form-label">cover amount</label>
                                                                        <div class="col-lg-9">
                                                                            <input id="txtCityBilling" name="claim_cover_amount" type="number" class="form-control"  placeholder="{{ isset($claims) ? $claims->claim_cover_amount : '' }}">
                                                                        </div>

                                                                        <div class="col-md-6 ml-6" style="margin:2.7em;">
                                                                            <div class="row mb-3">
                                                                                <input type="checkbox" name="claim_apply_period" id="claim_apply_period" style="height:20px;width:20px; margin-right:0.5em" <?php if (isset($claims) && $claims->claim_apply_period) echo 'checked'; ?>>
                                                                                <label for="claim_apply_period">Apply waiting period</label>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <label class="form-label" style="">Select Supported Document File</label>
                                                                                <div>
                                                                                    <input id="claim_documents" name="claim_documents" type="file" class="form-control" placeholder="{{ isset($claims) ? $claims->claim_documents : '' }}" />
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="display: flex; align-items: center;">
                                                                                        <input type="radio" name="claim_choose_file" style="margin-right: 10px;" <?php if (isset($claims) && $claims->claim_choose_file) echo 'checked'; ?>>
                                                                                        <label for="choose_file" class="container">Bl663</label>
                                                                                    </div>

                                                                                    <div class="col-md-6" style="display: flex; align-items: center;">
                                                                                        <input type="radio" id="claim_certificate" name="claim_certificate" style="margin-right: 10px;" <?php if (isset($claims) && $claims->claim_certificate) echo 'checked'; ?>>
                                                                                        <label for="certificate" class="container">Death Certificate</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="button-items">
                                                                <button type="button" class="btn btn-success waves-effect waves-light">print claim</button>
                                                                <button type="button" class="btn btn-success waves-effect waves-light">payment history</button>
                                                                <button type="button" class="btn btn-success waves-effect waves-light">claim payment</button>
                                                                <button type="button" class="btn btn-success waves-effect waves-light">clear</button>
                                                            </div>

                                                            <hr>
                                                        </div>


                                                    </section>

                                                    <section class="p-2">
                                                        <input type="hidden" name="claim_section" value="section2">
                                                        <div class="title d-flex mb-4" style="background-color:#67a8e4; height:50px; align-items:center !important; border-radius: 10px 10px 10px 10px !important; box-shadow: 2px 5px 10px #888888; border: 1px solid; justify-content:center">
                                                            <h4 style=" "> CLAIMANT DETAILS</h4>
                                                        </div>

                                                        <h4>Main Member</h4>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                              <div class="form-group clearfix">
                                                                <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                  <label for="fullname" class=" col-form-label" style="width: 30%;">FullNames</label>
                                                                  <input class="form-control" id="fullname" name="fullname" type="text" style="width: 70%;" placeholder="{{ isset($mainMember) ? $mainMember->fullname : '' }}">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                              <div class="form-group clearfix">
                                                                <div class="col-md-12 d-flex justify-content-center" style="gap:1em">
                                                                  <label for="password2" class="col-form-label" style="width: 30%;">Title:</label>
                                                                  <select name="title" id="title" class="required form-control" style="width: 70%; margin-left: 10px;">
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
                                                        </div>

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
                                                                        <label for="cellphone_number" class="col-form-label" style="width: 30%;">Cellphone Number:</label>
                                                                        <input class="form-control" id="cellphone_number" name="cellphone_number" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->cellphone_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="citizenship" class="col-form-label" style="width: 30%;">Citizenship:</label>
                                                                        <select id="citizenship" name="citizenship" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                            <option value="">{{ isset($mainMember) ? $mainMember->citizenship : '' }}</option>
                                                                            <option value="RSA">South Africa</option>
                                                                            <option value="ZMA">Zambia</option>
                                                                            <option value="MZQ">Mozambique</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

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
                                                                        <label for="email" class="col-form-label" style="width: 30%;">Email:</label>
                                                                        <input id="email" name="email" type="email" class="required form-control" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->email : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="city" class="col-form-label" style="width: 30%;">Town or City:</label>
                                                                        <input class="form-control" id="city" name="city" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->city : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="province" class="col-form-label" style="width: 30%;">Province:</label>
                                                                        <select id="province" name="province" class="required form-control" style="width: 70%; margin-left: 10px;">
                                                                            <option value="">{{ isset($mainMember) ? $mainMember->province : '' }}</option>
                                                                            <option value="gauteng">Gauteng</option>
                                                                            <option value="limpopo">Limpopo</option>
                                                                            <option value="free state">Free State</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <div class="col-md-12 d-flex align-items-center" style="gap:1em">
                                                                        <label for="postal_code" class="col-form-label" style="width: 30%;">Postal Code:</label>
                                                                        <input class="form-control" id="postal_code" name="postal_code" type="text" style="width: 70%; margin-left: 10px;" placeholder="{{ isset($mainMember) ? $mainMember->postal_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div>
                                                            <hr>
                                                        </div>

                                                        <h4>Beneficiary Banking Details</h4>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="claim_b_holder"class="col-md-5 col-form-label">Account Holder</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="claim_b_holder" name="claim_b_holder" type="text"style="margin-left:130px ! important" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_holder : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="claim_b_bank"class="col-md-5 col-form-label">Bank Name</label>
                                                                    <div class="col-md-8">

                                                                        <select  name="claim_b_bank" class="required form-control" id="claim_b_bank" style="margin-left:130px ! important;width:100%;height: calc(1.5em + 0.9rem + 2px);">

                                                                            <option value="">{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_bank : '' }}</option>
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
                                                                    <label for="claim_b_number"class="col-md-5 col-form-label">Account Number</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="claim_b_number" name="claim_b_number" type="text"style="margin-left:130px ! important" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_number : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="claim_b_branch"class="col-md-5 col-form-label">Bank Branch</label>
                                                                    <div class="col-md-8">
                                                                        <input id="claim_b_branch" name="claim_b_branch" type="text" maxlength="13" class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_branch : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="claim_b_type"class="col-md-5 col-form-label">Account Type</label>
                                                                    <div class="col-md-8">
                                                                        <select  name="claim_b_type" class="required form-control" id="claim_b_type" style="margin-left:130px ! important;width:100%;height: calc(1.5em + 0.9rem + 2px);">
                                                                            <option value="">{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_type : '' }}</option>
                                                                            <option value="FNB">FNB</option>
                                                                            <option value="standard_bank">Standard Bank</option>
                                                                            <option value="Capitec">Capitec</option>
                                                                            <option value="Nedbank">Nedbank</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="claim_b_code"class="col-md-5 col-form-label">Branch Code</label>
                                                                    <div class="col-md-8">
                                                                        <input id="claim_b_code" name="claim_b_code" type="text" maxlength="13" class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($cliamant_bank) ? $cliamant_bank->claim_b_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                    </section>

                                                    <section class="p-2">
                                                        <input type="hidden" name="claim_section" value="section3">
                                                        <div class="title d-flex mb-4" style="background-color:#67a8e4; height:50px; align-items:center !important; border-radius: 10px 10px 10px 10px !important; box-shadow: 2px 5px 10px #888888; border: 1px solid; justify-content:center">
                                                            <h4 style=" ">DECEASED DETAILS</h4>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_name"class="col-md-5 col-form-label">FullName</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="deceased_name" name="deceased_name" type="text"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_name : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_gender"class="col-md-5 col-form-label">Gender</label>
                                                                    <div class="col-md-8">
                                                                        <select  name="deceased_gender" class="required form-control" id="deceased_gender" style="margin-left:130px ! important;width:100%;height: calc(1.5em + 0.9rem + 2px);">
                                                                            <option value="">{{ isset($deceased) ? $deceased->deceased_gender : '' }}</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_surname"class="col-md-5 col-form-label">Surname</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="deceased_surname" name="deceased_surname" type="text"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_surname : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_id_number"class="col-md-5 col-form-label"> ID No:</label>
                                                                    <div class="col-md-8">
                                                                        <input id="deceased_id_number" name="deceased_id_number" type="text" maxlength="13" class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_id_number : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_date_of_birth"class="col-md-5 col-form-label">Date of Birth</label>
                                                                    <div class="col-md-8">
                                                                        <input id="deceased_date_of_birth" name="deceased_date_of_birth" type="date" onchange="calAge()"class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_date_of_birth : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_date_of_death"class="col-md-5 col-form-label">Date of Death</label>
                                                                    <div class="col-md-8">
                                                                        <input id="deceased_date_of_death" name="deceased_date_of_death" type="date" onchange="calAge()"class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_date_of_death : '' }}">

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
                                                                    <label for="deceased_cause_of_death"class="col-md-5 col-form-label">Cause of Death</label>
                                                                    <div class="col-md-8">
                                                                        <input class="form-control" id="deceased_cause_of_death" name="deceased_cause_of_death" type="text"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_cause_of_death : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_code"class="col-md-5 col-form-label">Code</label>
                                                                    <div class="col-md-8">
                                                                        <input class="form-control" id="deceased_code" name="deceased_code" type="text"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_code : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->


                                                        <div>
                                                            <hr>
                                                        </div>

                                                        <h3>Funeral Details</h3>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_funeral_date" class="col-md-5 col-form-label">Date of Funeral</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="deceased_funeral_date" name="deceased_funeral_date" type="date" style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_funeral_date : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_funeral_time" class="col-md-5 col-form-label">Time of Funeral</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="deceased_funeral_time" name="deceased_funeral_time" type="time" style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_funeral_time : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_collection"class="col-md-5 col-form-label">collected From</label>
                                                                    <div class="col-md-8">
                                                                        <input class="required form-control" id="deceased_collection" name="deceased_collection" type="text"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_collection : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_transport"class="col-md-5 col-form-label">Driver and car</label>
                                                                    <div class="col-md-8">
                                                                        <input id="deceased_transport" name="deceased_transport" type="text" maxlength="13" class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_transport : '' }}">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="password2"class="col-md-5 col-form-label">Cemetery</label>
                                                                    <div class="col-md-8">
                                                                        <input id="deceased_cemetery" name="deceased_cemetery" type="text" maxlength="13" class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_cemetery : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group clearfix">
                                                                    <label for="deceased_grave_no"class="col-md-5 col-form-label">Grave No</label>
                                                                    <div class="col-md-8">
                                                                        <input id="deceased_grave_no" name="deceased_grave_no" type="number" maxlength="13" class="required form-control"style="margin-left:130px ! important" placeholder="{{ isset($deceased) ? $deceased->deceased_grave_no : '' }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end row -->

                                                    </section>

                                                    <section>
                                                        <input type="hidden" name="claim_section" value="section4">
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
                                                    <div style="width: 100%; margin-top:2em ">
                                                        <div style="width: 100%;">
                                                          <button type="button" id="prevBtn" class="prev blue" onclick="nextPrev(-1)" style="display: inline !important; float: left; border-radius:0.5em; margin-right:0.5em">Previous</button>
                                                          <button type="button" id="nextBtn" class="nxt blue" onclick="nextPrev(1)" style="display: inline !important;border-radius:0.5em">Next</button>

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
                                                    {{-- <span style="margin-top: ">{{ $msg }}</span> --}}
                                                    {{-- <span>{{ isset($saleRep) ? '$policyDetails->policy_type' : 'no saleRep'}}</span>
                                                    <span>{{ isset($mainMember) ? '$policyDetails->policy_type' : 'no mainMember' }}</span> --}}

                                                    <script>

                                                        // var extendedMembers = ''

                                                        const form = document.getElementById('wizard-validation-form');
                                                        const prevBtn = document.getElementById('prevBtn');
                                                        const nextBtn = document.getElementById('nextBtn');
                                                        const submitBtn = document.getElementById('submitBtn');
                                                        let currentTab;
                                                        let mainMemberId = 0;
                                                        let initMainMember;
                                                        let sectionOne=<?php echo json_encode($sectionOne);?>;

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
                                                                //
                                                                //
                                                            }

                                                            if(currentTab < 0){
                                                                currentTab=0;
                                                            }
                                                            //Initialisation ends here

                                                            //
                                                            const sections = form.getElementsByTagName('section');
                                                            for (let i = 0; i < sections.length; i++) {
                                                                sections[i].style.display = 'none';
                                                            }

                                                            sections[currentTab].style.display = 'block';

                                                            const columnElements = document.getElementsByClassName('process');
                                                            for (let i = 0; i < columnElements.length; i++) {
                                                                columnElements[i].style.backgroundColor = '#fff';
                                                                columnElements[i].style.color = '#000';
                                                            }
                                                            // console.log("showtab currentTab", currentTab)
                                                            columnElements[currentTab].style.backgroundColor = '#3d74f1';
                                                            columnElements[currentTab].style.color = '#fff';

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

                                                        async function checkMainMemberId(sectionIndex) {
                                                            try {
                                                                const token = '{{ csrf_token() }}';
                                                                const response1 = await fetch('/check-main-member-id-claim', {
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

                                                            const sections = document.querySelectorAll('#wizard-validation-form section');
                                                            const currentSection = sections[currentTab];
                                                            const currentInputs = currentSection.querySelectorAll('input, textarea');
                                                            const currentSelects = currentSection.querySelectorAll('select');
                                                            let id= <?php echo json_encode($mainMemberId);?>;

                                                            let responseSection;
                                                            if(sectionOne === undefined) {
                                                                sectionOne= true;}

                                                            if(initMainMember === '' || initMainMember === null || initMainMember === undefined){
                                                                initMainMember= <?php echo json_encode($mainMemberId);?>;
                                                                console.log("mainMemberId being checked", <?php echo json_encode($mainMemberId)?>)
                                                            }
                                                            // console.log("mainMemberId initMainMember being checked1", initMainMember)
                                                            //if the current section is not section 3 or section 4

                                                            //Then you can create or update the information to the DB from here
                                                            if (currentInputs.length > 0) {

                                                                const payload = {
                                                                    section: currentSection.querySelector('input[name="claim_section"]').value,
                                                                    _token: $('meta[name="csrf-token"]').attr('content'),
                                                                    nextState: n
                                                                };

                                                                for (let i = 0; i < currentInputs.length; i++) {
                                                                    const input = currentInputs[i];
                                                                    if (input.type === 'checkbox') {
                                                                        payload[input.name] = input.checked ? true : false;
                                                                    } else if (input.type === 'radio') {
                                                                        if (input.checked) {
                                                                            payload[input.name] = input.value;
                                                                        }
                                                                    } else {
                                                                        payload[input.name] = input.value;
                                                                    }

                                                                    if (input.name === 'claim_choose_file') {
                                                                        payload[input.name] = input.checked ? 1 : 0;
                                                                    }
                                                                }

                                                                for (let i = 0; i < currentSelects.length; i++) {
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
                                                                }

                                                                console.log("mainMemberIdExists", mainMemberIdExists)//delete here>>>>>>
                                                                let method;
                                                                let actionURL;

                                                                if (mainMemberIdExists && sectionOne) {
                                                                    method = 'PUT';
                                                                    actionURL=`/member-claim/${id}`;
                                                                } else {
                                                                    method = 'POST';
                                                                    actionURL='/member-claim';
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
                                                                    const formCompleted= (data.section + data.nextState) === 5? true: false;
                                                                    initMainMember= 'true';
                                                                    //*************************************************
                                                                    //delete here>>>>>>
                                                                    console.log(data.message);
                                                                    // console.log("mainid", '11')
                                                                    console.log("main_id", id)
                                                                    console.log("sessionRes", responseSection);
                                                                    console.log("--> input", data);
                                                                    console.log("response nextState", data.nextState)
                                                                    console.log("mainMemberId initMainMember being checked2", initMainMember)

                                                                    if(formCompleted ){
                                                                        window.location.href = '/dashboard';
                                                                    }

                                                                    //*************************************************
                                                                    currentTab += n;
                                                                    if (currentTab < sections.length) {//prevent showing an empty section
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

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © TSHITSHITHE.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendai ICT
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>



        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="Layouts-1">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="Layouts-2">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="Layouts-3">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- form wizard -->
        <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:05:28 GMT -->
</html>
