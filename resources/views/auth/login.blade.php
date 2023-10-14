<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('otika') }}/assets/css/app.min.css">
    <link rel="stylesheet" href="{{ url('otika') }}/assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('otika') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('otika') }}/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ url('otika') }}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href="{{ url('otika') }}/assets/img/favicon.ico" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary mx-auto">
                            <div class="card-header">
                                <h4>Login Administrator</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Gambar Anda -->
                                        <img src="{{ url('otika') }}/assets/img/diko.png" alt="Your Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                <div class="alert-body">
                                                    <button class="close" data-dismiss="alert">
                                                        <span>&times;</span>
                                                    </button>
                                                    {{ Session::get('error') }}
                                                </div>
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('login') }}" class="needs-validation"
                                            novalidate="">
                                            @csrf

                                            @if (session('warning'))
                                                <div class="alert alert-warning alert-dismissible fade show">
                                                    {{ session('warning') }}
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email"
                                                    tabindex="1" placeholder="Masukkan Email" required autofocus>
                                                <div class="invalid-feedback">
                                                    Please fill in your email
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div> -->
                                                <label for="password" class="control-label">Password</label>
                                                <input id="password" type="password" class="form-control"
                                                    name="password" placeholder="Masukkan Password" tabindex="2"
                                                    required>
                                                <div class="invalid-feedback">
                                                    please fill in your password
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                    tabindex="4">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div> -->
                        </div>
                    </div>
                </div>
                {{-- <div class="mt-5 text-muted text-center">
          Don't have an account? <a href="{{ route('register') }}">Create One</a>
        </div> --}}
            </div>
    </div>
    </div>
    </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ url('otika') }}/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ url('otika') }}/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ url('otika') }}/assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>
