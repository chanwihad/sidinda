<!doctype html>
<html lang="en">

<head>
    <title>Indikator : Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logosn.png">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="log/css/style.css">
    <link rel="stylesheet" href="log/css/login.css">

</head>

<body>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex" style="background-color: #BEF8BB;">
                        <div class="img img-fluid" style="background-image: url(assets/img/login.png);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100"> <br>
                                    <h3 style="font-weight: 600;">Selamat Datang</h3>
                                    <h6 style="font-weight: 100;">Silahkan masuk kedalam akun anda</h6> <br>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('login') }}" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">NIP</label>
                                    <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" placeholder="NIP" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>
                                    @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <a class="forget-pass" href="{{ route('userForgetPassword') }}">Forget Password</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">LOG IN</button>
                                </div>
                            </form>
                            <div class="form-group">
                                <a class="form-control btn btn-secondary rounded submit px-3" href="{{ route('register') }}" role="button">REGISTER</a>
                            </div> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="log/js/jquery.min.js"></script>
    <script src="log/js/popper.js"></script>
    <script src="log/js/bootstrap.min.js"></script>
    <script src="log/js/main.js"></script>

</body>

</html>