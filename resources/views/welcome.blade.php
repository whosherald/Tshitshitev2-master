<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:11 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Log In | Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link href="../" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <!-- MDBootstrap Datatables  -->


    </head>

    <body class="authentication-bg"style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;">
    <style>
        .card{
            background-color:#00aced!important;
        }
    </style>

        <div class="account-pages pt-5 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="account-card-box">
                            <div class="card mb-0" >
                                <div class="card-body p-4">

                                    <div class="text-center">
                                        <div class="my-3">
                                            <a href="index.html">
                                                <span><img src="assets/images/logo.png" alt="" height="60"></span>
                                            </a>
                                        </div>
                                        <!-- <h4 class="font-size-18 mt-2 text-center">Welcome Back !</h4>
                                    <p class="text-muted text-center mb-4">Sign in to continue to Tshitshite Dashboard.</p> -->
                                    {{-- @if(Session::has('fail'))
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <i class="mdi mdi-cancel"></i><strong> Oh snap!</strong>{{Session::get('fail')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @elseif(Session::has('success')) --}}
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-18px mdi-account-check"></i><strong> Well done! </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    {{-- @endif --}}
                                        <h5 class="text-muted text-uppercase py-3 font-16">Sign In</h5>
                                    </div>


                                    <form class="mt-2" action="{{ url('/login') }}" method="post">
                                    @csrf
                                        <!-- <div class="form-group mb-3">
                                            <input class="form-control" type="text" required="" placeholder="Enter your username">
                                        </div> -->
                                        <div class="form-group mb-3">
                                            <!-- <label class="form-label" for="username">Email</label> -->
                                            <input type="text" class="form-control"required="" name="email" id="username" placeholder="Enter email">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" type="password" required="" name="password" id="userpassword" placeholder="Enter your password">

                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Log In </button>
                                        </div>

                                        <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>

                                    </form>

                                    <div class="text-center mt-4">
                                        <h5 class="text-muted py-2"><b>Sign in with</b></h5>

                                        <div class="row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-facebook waves-effect font-14 waves-light mt-3">
                                                    <i class="fab fa-facebook-f mr-1"></i> Facebook
                                                </button>

                                                <button type="button" class="btn btn-twitter waves-effect font-14 waves-light mt-3">
                                                    <i class="fab fa-twitter mr-1"></i> Twitter
                                                </button>

                                                <button type="button" class="btn btn-googleplus waves-effect font-14 waves-light mt-3">
                                                    <i class="fab fa-google-plus-g mr-1"></i> Google+
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Don't have an account? <a href="pages-register.html" class="text-white ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 12:15:11 GMT -->
</html>
