<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="MenuQren Aplikasi bisnis yang keren">
    <meta name="author" content="MenuQren">
    <meta name="keywords" content="MenuQren, menuqr, menu qr, restoran, aplikasi kasir, aplikasi cafe">
    <title>MenuQren</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/frontend/img/favicon.ico" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/frontend/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="/frontend/css/order-sign_up.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/frontend/css/custom.css" rel="stylesheet">

</head>

<body id="register_bg">

    <div id="register">
        <aside>
            <figure>
                <a href="{{ url('/') }}"><img src="/frontend/img/logoqren.png" height="40" alt=""></a>
            </figure>
            <div class="access_social">
                <h4 class="text-center mb-4">
                    {{ __('Reset Password') }}
                </h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="col-form-label ">{{ __('E-Mail Address') }}</label>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <i class="icon_mail_alt"></i>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <a href="#" class="text-danger">{{ $message }}</a>
                            </span>
                        @enderror
                    </div>

                </div>

                <button type="submit" class="btn_1 gradient full-width">
                    {{ __('Kirim Link Reset Password') }}</button>


            

            </form>
            <div class="row">
                
            <div class="col-12 text-center">
                <a class="btn btn-link" href="{{ route('login') }}">
                    {{ __('Kembali Ke halaman login') }}
                </a>
            </div>
            
        </div>
            <div class="copy">© 2021 MenuQren</div>
        </aside>
    </div>

    <!-- COMMON SCRIPTS -->
    <script src="/frontend/js/common_scripts.min.js"></script>
    <script src="/frontend/js/common_func.js"></script>

</body>

</html>
