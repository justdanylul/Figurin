<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figurin</title>
    <link rel="icon" type="image/png" href="frontend/img/our damn logo.png" sizes="32x32" />
    <link rel="stylesheet" href="frontend/css/navbar.css">
    <link rel="stylesheet" href="frontend/css/info.css">
    <link rel="stylesheet" href="frontend/font/Quicksand/quicksand.css">
    <link rel="stylesheet" href="frontend/font/Qicksand-Bold/Quicksand-Bold.css">
    <link rel="stylesheet" href="frontend/fontawesome-free-6.2.0-web/css/all.css">
    <script src="frontend/js/parallax.js" defer></script>
    <script src="frontend/js/cursor.js" defer></script>
    <script src="frontend/js/responsive.js" defer></script>
    <script src="frontend/js/home.js" defer></script>
</head>
<body>
    <div class="cursor-round"></div>
    <div class="main"></div>
    <div data-speed="-1" class="slider">
        <div class="navbar">
            <div class="navbar__top">
                <img class="li-text" src="frontend/img/logo.webp" alt="">
                <div class="navbar__search li-text">
                    <input type="text">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="navbar__top__item">
                    <button class="button is-text" id="menu-button">
                        <div class="button-inner-wrapper">
                            <span class="icon menu-icon"></span>
                        </div>
                    </button>
                    <div class="navbar__mobile">
                        <ul>
                            <li><a class="li-text" href="">Trang chủ</a></li>
                            <li><a class="li-text" href="">Thông tin</a></li>
                            <li><a class="li-text" href="index.html">Sản phẩm</a></li>
                            <li><a class="li-text" href="https://t.me/joinchat/Gn7UwkXl5DwWH4brm8NQTA">Kết nối</a></li>
                            <li><a class="li-text" href="">Liên lạc</a></li>
                        </ul>
                    </div>
                    <div class="navbar__top__item__right">
                        <div class="navbar__top__acc li-text">
                                <a href="" class="navbar__top__acc li-text">
                                    <i class="fa-regular fa-user"></i>
                                    <span class="navbar__item-span">
                                        <?php
                                        $name = Session::get('user_name');
                                        if ($name) {
                                            echo  $name;
                                        }
                                        ?>
                                </span>
                                </a>
                        </div>
                        <div class="navbar__top__cart li-text">
                            <i class="fa-solid fa-cart-shopping">
                                <div class="count_holder"><f>0</f></div>
                            </i>
                            <span class="navbar__item-span">Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar__bot">
                <ul>
                    <li><a class="li-text" href="/trang-chu">Trang chủ</a></li>
                    <li><a class="li-text" href="">Thông tin</a></li>
                    <li><a class="li-text" href="index.html">Sản phẩm</a></li>
                    <li><a class="li-text" href="https://t.me/joinchat/Gn7UwkXl5DwWH4brm8NQTA">Kết nối</a></li>
                    <li><a class="li-text" href="">Liên lạc</a></li>
                </ul>
            </div>
        </div>


        <div class="about">
            <b>Xin chào, 
                <?php if ($name) {
                    echo  $name;
                }?>
            </b>
            <a href="/log_out_user">Đăng xuất</a>  
        </div>

        <div class="info">
            <b>Thông tin tài khoản</b>
            <span><?php if ($name) {
                    echo  $name;
                }?></span>
            <span>
                <?php 
                $gmail = Session::get('user_gmail');
                if ($gmail) {
                        echo  $gmail;
                    }?>
            </span>
            <span>Vietnam</span>
            <span>
            <?php 
                $address = Session::get('user_address');
                if ($address) {
                        echo  $address;
                    }?>
            </span>
        </div>


        <div class="footer">
            <div class="footer__top">
                <span>Follow Figurin on Instagram</span>
                @figurin.vnn
            </div>
            <div class="footer__mid">
                <div class="footer__mid__img hover--style1">
                    <img src="frontend/img/footer/gallery_item_1_img.webp">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="frontend/img/footer/gallery_item_2_img.webp">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="frontend/img/footer/gallery_item_3_img.webp">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="frontend/img/footer/gallery_item_4_img.jpg">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="frontend/img/footer/gallery_item_5_img.jpg">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="frontend/img/footer/gallery_item_6_img.jpg">
                </div>
            </div>

            <div class="footer__bot"></div>
        </div>
    </div>
</body>
</html>