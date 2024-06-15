<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.comdocs/5.0/examples/sign-in/">

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32"
        type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16"
        type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
        color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <meta name="theme-color" content="#7952b3">

</head>

<body>
    @include('sweetalert::alert')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-4 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('images/logo.svg') }}" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" id="loginForm" method="POST" action="{{ url('/loginverify') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="floatingInput"
                                        name="email" value="{{ old('email', Cookie::get('email')) }}"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="floatingPassword"
                                        name="password" value="{{ old('password', Cookie::get('password')) }}"
                                        placeholder="Password">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                            {{ Cookie::get('remember') ? 'checked' : '' }}>
                                        Remember me
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="#" data-toggle="modal" data-target="#registermodal">
                                       Register
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 mix-auto"></div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registermodalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="registerForm" action="https://partner.spayu.co.in/auth/register"
                                method="post" id="formregister" onsubmit="formregister(event)">
                                <input type="hidden" name="_token"
                                    value="fo2aR37ljXQVfokUGNBiZPGHARANSs3LqnHqTrcp">
                                <legend>Member type</legend>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Member Type</label>
                                        <select name="slug" class="form-control select" id="slug" required="">
                                            <option value="">Select Member Type</option>
                                            <option value="md">Master Distributor</option>
                                            <option value="distributor">Distributor</option>
                                            <option value="retailer">Retailer</option>
                                        </select>
                                    </div>
                                </div>

                                <legend>Personal Details</legend>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1" class="text-uppercase">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1" class="text-uppercase">Email</label>
                                        <input type="text" name="email" id="emai"class="form-control"
                                            placeholder="Enter your email id" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1" class="text-uppercase">Mobile</label>
                                        <input type="text" name="mobile" class="form-control"
                                            placeholder="Enter your mobile" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>State</label>
                                        <select name="state" class="form-control state" id="" >
                                            <option value="">Select State</option>
                                            <option value="ASSAM">ASSAM</option>
                                            <option value="BIHAR">BIHAR</option>
                                            <option value="CHENNAI">CHENNAI</option>
                                            <option value="GUJARAT">GUJARAT</option>
                                            <option value="HARYANA">HARYANA</option>
                                            <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                            <option value="JAMMU KASHMIR">JAMMU KASHMIR</option>
                                            <option value="KARNATAKA">KARNATAKA</option>
                                            <option value="KERALA">KERALA</option>
                                            <option value="KOLKATA">KOLKATA</option>
                                            <option value="MAHARASHTRA">MAHARASHTRA</option>
                                            <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                            <option value="CHHATTISGARH">CHHATTISGARH</option>
                                            <option value="MUMBAI">MUMBAI</option>
                                            <option value="NORTH EAST">NORTH EAST</option>
                                            <option value="ORISSA">ORISSA</option>
                                            <option value="PUNJAB">PUNJAB</option>
                                            <option value="RAJASTHAN">RAJASTHAN</option>
                                            <option value="TAMIL NADU">TAMIL NADU</option>
                                            <option value="UP EAST">UP EAST</option>
                                            <option value="UP WEST">UP WEST</option>
                                            <option value="WEST BENGAL">WEST BENGAL</option>
                                            <option value="DELHI NCR">DELHI NCR</option>
                                            <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                            <option value="Delhi/NCR">Delhi/NCR</option>
                                            <option value="UTTARAKHAND">UTTARAKHAND</option>
                                            <option value="JHARKHAND">JHARKHAND</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" value=""
                                            required="" placeholder="Enter Value">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Pincode</label>
                                        <input type="text" name="pincode" class="form-control" value=""
                                            required="" maxlength="6" minlength="6" placeholder="Enter Value"
                                            pattern="[0-9]*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control" rows="3" required="" placeholder="Enter Value"></textarea>
                                    </div>
                                </div>

                                <legend>Kyc Information</legend>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Shop Name</label>
                                        <input type="text" name="shopname" class="form-control" value=""
                                            required="" placeholder="Enter Value">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Pancard</label>
                                        <input type="text" name="pancard" class="form-control" value=""
                                            required="" placeholder="Enter Value">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Aadhar</label>
                                        <input type="text" name="aadharcard" required="" class="form-control"
                                            placeholder="Enter Value" pattern="[0-9]*" maxlength="12"
                                            minlength="12">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

</body>
<!-- jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>

</html>
