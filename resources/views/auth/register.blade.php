<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('otika') }}/assets/css/app.min.css">
    <link rel="stylesheet" href="{{ url('otika') }}/assets/bundles/jquery-selectric/selectric.css">
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
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary mx-auto">
                            <div class="card-header bg-primary">
                                <h4 class="text-white">Register</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Gambar Anda -->
                                        <img src="{{ url('otika') }}/assets/img/diko.png" alt="Your Image"
                                            class="img-fluid">
                                    </div>

                                    <div class="col-md-6">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success alert-dismissible show fade">
                                                <div class="alert-body">
                                                    <button class="close" data-dismiss="alert">
                                                        <span>&times;</span>
                                                    </button>
                                                    {{ Session::get('success') }}
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{ route('register') }}" method="POST">
                                            <!-- <div class="row"> -->
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" class="form-control" name="name"
                                                    placeholder="Masukkan Nama" autofocus>
                                            </div>
                                            <!-- <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div> -->
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email"
                                                    placeholder="Masukkan Email">
                                                <div class="invalid-feedback">
                                                </div>
                                            </div>
                                            <!-- <div class="row"> -->
                                            <div class="form-group">
                                                <label for="password" class="d-block">Password</label>
                                                <input id="password" type="password" class="form-control pwstrength"
                                                    data-indicator="pwindicator" name="password"
                                                    placeholder="Masukkan Password">
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div> -->
                                            <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div> -->
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                    Register
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 text-muted text-center">
                                Already Registered? <a href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ url('otika') }}/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="{{ url('otika') }}/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="{{ url('otika') }}/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="{{ url('otika') }}/assets/js/page/auth-register.js"></script>
    <!-- Template JS File -->
    <script src="{{ url('otika') }}/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ url('otika') }}/assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->

</html>
