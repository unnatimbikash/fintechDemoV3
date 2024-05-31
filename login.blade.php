<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }


        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    @include('sweetalert::alert') <!-- Include SweetAlert -->
    <main class="cont">
        <form id="loginForm" class="form sign-in" method="POST" action="{{ url('/loginverify') }}">
            @csrf
            <h2>Sign In</h2>
            <label>
                <span>Email Address</span>
                <input type="email" name="email" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
            </label>
            <label>
                <span>Password</span>
                <input  type="password"  id="floatingPassword" name="password" placeholder="Password"
                autocomplete="current-password">
            </label>
            <button class="submit" type="submit">Sign In</button>
            <div class="social-media">
                <ul>
                    <li><img src="images/facebook.png"></li>
                    <li><img src="images/twitter.png"></li>
                    <li><img src="images/linkedin.png"></li>
                    <li><img src="images/instagram.png"></li>
                </ul>
            </div>
        </form>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h1>New here?</h1>
                    <p>sign up and discover</p>
                </div>
                <div class="img-text m-in">
                    <h1>One of us?</h1>
                    <p>just sign in</p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Sign Up</h2>
                <label>
                    <span>Name</span>
                    <input type="text">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password">
                </label>
                <label>
                    <span>Confirm Password</span>
                    <input type="password">
                </label>
                <button type="button" class="submit">Sign Up Now</button>
            </div>
        </div>
    </main>
    {{-- <main class="form-signin">
        <form id="loginForm" class="m-5" method="POST" action="{{ url('/loginverify') }}">
            @csrf
            <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt=""
                width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email"
                    placeholder="name@example.com" value="{{ old('email') }}" autofocus>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password"
                    autocomplete="current-password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember-me" {{ old('remember') ? 'checked' : '' }}>
                    Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main> --}}
</body>
<!-- jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>

</html>
