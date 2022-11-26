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
        <title>Fingurin - Đăng nhập</title>
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
                    <b>Chào mừng quay lại!</b>
                    <span>Chúng tôi nhớ bạn lắm rồi đấy!</span>
    
                    <input class="login--user" type="text" placeholder="Tài khoản" value="" id="email" type="email" name="email" required autocomplete="email" autofocus>
                    <input class="login--pass" type="password" placeholder="Mật khẩu" id="password" type="password" name="password" required autocomplete="current-password">
    
                    <a href="">Quên mật khẩu?</a>
    
                    <button class="price__button__add price__button--hover li-text login--btn">
                        <span>Đăng nhập</span>
                    </button>
    
                    <div class="register-btn btn">Không có tài khoản, <span>
                            đăng kí
                        </span> nào!</div>
                </div>
    
                <div class="login__box register__part">
                    <img src="frontend/img/logo.webp" alt="">
                    <b>Bạn là người mới sao?</b>
                    <span>Tạo tài khoản để ngắm figure nào!</span>
    
                    <input class="regis--user" type="text" placeholder="Tài khoản">
                    <input class="regis--pass" type="password" placeholder="Mật khẩu">
                    <input class="regis--pass2" type="password" placeholder="Xác nhận mật khẩu">
                    <input class="regis--gmail" type="text" placeholder="Gmail" value="">
    
                    <button class="price__button__add price__button--hover li-text regis--btn">
                        <span>Đăng kí</span>
                    </button>
    
                    <div class="login-btn btn">Có tài khoản hả, <span>đăng nhập</span> đi!</div>
                </div>
            </div>
        </form>

    </body>
</html>