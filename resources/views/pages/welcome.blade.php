<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figurin</title>
    <link rel="shortcut icon" type="image/x-icon" href="frontend/img/our-damn-logo.ico" sizes="32x32" />
    <link rel="stylesheet" href="frontend/css/navbar.css">
    <link rel="stylesheet" href="frontend/css/home.css">
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
                        <a href="<?php
                            $name = Session::get('user_name');
                                if ($name) {
                                    echo  "/thong-tin";
                                } else {
                                    echo "/admin";
                                }
                                ?>" class="navbar__top__acc li-text">
                            <i class="fa-regular fa-user"></i>
                            <span class="navbar__item-span">
                            <?php
                                if ($name) {
                                    echo  $name;
                                } else {
                                    echo "Đăng nhập / Đăng ký";
                                }
                                ?>
                            </span>
                        </a>
                        <a href="" class="navbar__top__cart li-text">
                            <i class="fa-solid fa-cart-shopping">
                                <div class="count_holder"><f>0</f></div>
                            </i>
                            <span class="navbar__item-span">Giỏ hàng</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar__bot">
                <ul>
                    <li><a class="li-text" href="">Trang chủ</a></li>
                    <li><a class="li-text" href="">Thông tin</a></li>
                    <li><a class="li-text" href="index.html">Sản phẩm</a></li>
                    <li><a class="li-text" href="https://t.me/joinchat/Gn7UwkXl5DwWH4brm8NQTA">Kết nối</a></li>
                    <li><a class="li-text" href="">Liên lạc</a></li>
                </ul>
            </div>
        </div>

        <div class="banner">
            <div class="banner-navigate">
                <div class="banner--button button__left li-text">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="banner--button button__right li-text">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <img class="banner-slide" src="frontend/img/home/slide_1_img.webp" style="display: block;" alt="">
            <img class="banner-slide" src="frontend/img/home/slide_2_img.webp" alt="">
            <img class="banner-slide" src="frontend/img/home/slide_3_img.webp" alt="">
            <img class="banner-slide" src="frontend/img/home/slide_4_img.webp" alt="">
            <img class="banner__img" src="frontend/img/home/slide_1_img.webp" alt="">
        </div>

        <div class="colection">
            <div class="collection__content li-text">
                <div class="collection__content__left">
                    <span>Bộ sưu tập</span>
                    <b>Nedoroid</b>
                    <span>
                        Dòng chibi figure được yêu thích nhất,
                        nhiều gương mặt, thoả sức tạo dáng</span>
                        <button>
                            <span>Xem ngay</span>
                        </button>
                </div>
                <img src="frontend/img/home/categorybanner_1_img.webp" alt="">
            </div>
            <div class="collection__content li-text">
                <div class="collection__content__left">
                    <span>Bộ sưu tập</span>
                    <b>Nedoroid</b>
                    <span>
                        Dòng chibi figure được yêu thích nhất,
                        nhiều gương mặt, thoả sức tạo dáng</span>
                    <button>
                        <span>Xem ngay</span>
                    </button>
                </div>
                <img src="frontend/img/home/categorybanner_2_img.webp" alt="">
            </div>
        </div>

        <div class="content">

            <div class="catalog">
                <b>Sản phẩm order</b>
                <span>Những sản phẩm đã hoặc sắp phát hành & cần đặt trước</span>
                <div class="cata__box order">
                    <img src="frontend/img/home/home_collection_1_banner.webp" alt="">
                    <div class="cata__contain">
                        <div class="cata__navigate">
                            <div class="cata--button cata--left">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="cata--button cata--left">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/28cm-Anime-Genshin-Impact-Figure-Hu-Tao-Figure-Hutao-Action-Figures-Collection-Model-Figurine-Doll-Toys.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Fire Dance Hutao Limited</f>
                                    <span>2.400.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
            
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item"></div>
                            <div class="product__item"></div>
    
                        </div>
                    </div>
                </div>
            </div>

            <!-- Có sẵn -->

            <div class="catalog">
                <b>Sản phẩm order</b>
                <span>Những sản phẩm đã hoặc sắp phát hành & cần đặt trước</span>
                <div class="cata__box">
                    <img src="frontend/img/home/home_collection_1_banner.webp" alt="">
                    <div class="cata__contain">
                        <div class="cata__navigate">
                            <div class="cata--button cata--left">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="cata--button cata--left">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/28cm-Anime-Genshin-Impact-Figure-Hu-Tao-Figure-Hutao-Action-Figures-Collection-Model-Figurine-Doll-Toys.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Fire Dance Hutao Limited</f>
                                    <span>2.400.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
            
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item">
                                <a href="">
                                    <img src="frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg" alt="">
                                </a>
                                <div class="product__item__price">
                                    <f>Genshin Impact : Summer Bombin Klee</f>
                                    <span>3.110.000₫</span>
                                    <div class="price__button">
                                        <button class="price__button__add price__button--hover">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Thêm vào giỏ</span>
                                        </button>
                                        <button class="price__button__buy price__button--hover">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Mua ngay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="product__item"></div>
                            <div class="product__item"></div>
    
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="detail">
            <div class="detail__item">
                <i class="fa-solid fa-box"></i>
                <b>Sản phẩm chính hãng</b>
                <span>Nhập khâu trực tiếp từ Nhật Bản</span>
            </div>

            <div class="detail__item">
                <i class="fa-regular fa-credit-card"></i>
                <b>Thanh toán đơn giản</b>
                <span>Chuyển khoản hoặc COD</span>
            </div>

            <div class="detail__item">
                <i class="fa-solid fa-truck"></i>
                <b>Giao hàng nhanh chóng</b>
                <span>Miễn phí với đơn hàng >1000K</span>
            </div>
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