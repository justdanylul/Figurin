@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="frontend/img/our-damn-logo.ico" sizes="32x32" />
        <link rel="stylesheet" href="frontend/css/navbar.css">
        <link rel="stylesheet" href="frontend/css/login.css">
        <link rel="stylesheet" href="frontend/font/Quicksand/quicksand.css">
        <link rel="stylesheet"
            href="frontend/fontawesome-free-6.2.0-web/css/all.css">
        <title>Fingurin - ????ng nh???p</title>
        <script src="frontend/js/login.js" defer></script>
    </head>
    <body>
        <form class="login" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="transit">
            </div>
            <div class="transit trans2">
            </div>
            <div class="box">
                <div class="login__box login__part">
                    <img src="frontend/img/logo.webp" alt="">
                    <b>Ch??o m???ng quay l???i!</b>
                    <span>Ch??ng t??i nh??? b???n l???m r???i ?????y!</span>
    
                    <input class="login--user" type="text" placeholder="T??i kho???n" value="" id="email" type="email" name="email" required autocomplete="email" autofocus>
                    <input class="login--pass" type="password" placeholder="M???t kh???u" id="password" type="password" name="password" required autocomplete="current-password">
    
                    <a href="">Qu??n m???t kh???u?</a>
    
                    <button class="price__button__add price__button--hover li-text login--btn">
                        <span>????ng nh???p</span>
                    </button>
    
                    <div class="register-btn btn">Kh??ng c?? t??i kho???n, <span>
                            ????ng k??
                        </span> n??o!</div>
                </div>
    
                <div class="login__box register__part">
                    <img src="frontend/img/logo.webp" alt="">
                    <b>B???n l?? ng?????i m???i sao?</b>
                    <span>T???o t??i kho???n ????? ng???m figure n??o!</span>
    
                    <input class="regis--user" type="text" placeholder="T??i kho???n">
                    <input class="regis--pass" type="password" placeholder="M???t kh???u">
                    <input class="regis--pass2" type="password" placeholder="X??c nh???n m???t kh???u">
                    <input class="regis--gmail" type="text" placeholder="Gmail" value="">
    
                    <button class="price__button__add price__button--hover li-text regis--btn">
                        <span>????ng k??</span>
                    </button>
    
                    <div class="login-btn btn">C?? t??i kho???n h???, <span>????ng nh???p</span> ??i!</div>
                </div>
            </div>
        </form>

    </body>
</html>
@endsection
