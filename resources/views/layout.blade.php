<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="frontend/img/our damn logo.png"
    sizes="32x32" />
    <title>Figurin</title>
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/font/Quicksand/quicksand.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fontawesome-free-6.2.0-web/css/all.css')}}">
    <script src="{{asset('frontend/js/parallax.js')}}" defer></script>
    <script src="{{asset('frontend/js/cursor.js')}}" defer></script>
    <script src="{{asset('frontend/js/responsive.js')}}" defer></script>
    <link rel="stylesheet" href="php/config.php">
</head>
<body>
    <div class="cursor-round"></div>
    <div class="main"></div>
    <div data-speed="-1" class="slider">
        <div class="navbar">
            <div class="navbar__top">
                <img class="li-text" src="//theme.hstatic.net/1000160337/1000885200/14/logo.png?v=288" alt="">
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
                            <li><a class="li-text" href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                            <li><a class="li-text" href="">Thông tin</a></li>
                            <li><a class="li-text" href="">Sản phẩm</a></li>
                            <li><a class="li-text" href="">Kết nối</a></li>
                            <li><a class="li-text" href="">Liên lạc</a></li>
                        </ul>
                    </div>
                    <div class="navbar__top__item__right">
                        <div class="navbar__top__acc li-text">
                            <i class="fa-regular fa-user"></i>
                            <span class="navbar__item-span">Đăng nhập / Đăng ký</span>
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
            {{-- nav-mobile --}}
            <div class="navbar__bot"> 
                <ul>
                    <li><a class="li-text" href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                    <li><a class="li-text" href="">Thông tin</a></li>
                    <li><a class="li-text" href="">Sản phẩm</a></li>
                    <li><a class="li-text" href="">Kết nối</a></li>
                    <li><a class="li-text" href="">Liên lạc</a></li>
                </ul>
            </div>
            {{-- nav-pc --}}
        </div>

        <div class="banner">
            <img src="{{asset('frontend/img/collection_banner.webp')}}" alt="">
        </div>

        <div class="content">
            <div class="collection">
                <span>Tất cả sản phẩm</span>
                <div class="collection__categ collection__categ--mobile li-text">
                    <i class="fa-solid fa-angle-down"></i>
                    Sắp xếp
                    <div class="categ__box">
                        <ul>
                            <li class="categ--check">
                                <i class="fa-solid fa-check"></i>
                                Tất cả sản phẩm</li>
                            <li>
                                    <i class="fa-solid fa-check"></i>
                                    Giá: Tăng dần</li>
                            <li>
                                    <i class="fa-solid fa-check"></i>
                                    Giá: Tăng giảm</li>
                            <li>
                                    <i class="fa-solid fa-check"></i>
                                    Tên: A-Z</li>
                            <li>
                                    <i class="fa-solid fa-check"></i>
                                    Tên: Z-A</li>
                            <li>
                                    <i class="fa-solid fa-check"></i>
                                    Cũ nhất</li>
                            <li>
                                    <i class="fa-solid fa-check"></i>
                                    Mới nhất</li>
                            <li>
                                    <i class="fa-solid fa-check"></i>
                                    Bán chạy nhất</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="filter">
                <i class="fa-solid fa-filter"></i>
                Phân loại

                <div class="filter__seperate"></div>

                <div class="filter__option li-text">
                    Thương hiệu
                    <i class="fa-solid fa-arrow-down"></i>
                    <div class="filler__box">
                        <ul>
                            <li>
                                <label>
                                    <input type="radio" name="brand" checked> Mọi hãng
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="brand"> Good Smile Company
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="brand"> Max Factory
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="brand"> FREEing
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="brand"> The One Piece
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="filter__option li-text">
                    Lọc giá
                    <i class="fa-solid fa-arrow-down"></i>
                    <div class="filler__box">
                        <ul>
                            <li>
                                <label>
                                    <input type="radio" name="price" checked> Mọi giá
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="price"> Dưới 1.000.000₫
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="price"> 1.000.000₫ - 2.000.000₫
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="price"> 2.000.000₫ - 3.000.000₫
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="price"> 3.000.000₫ - 4.000.000₫
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="price"> Trên 4.000.000₫
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="filter__option li-text">
                    Tỉ lệ
                    <i class="fa-solid fa-arrow-down"></i>
                    <div class="filler__box">
                        <ul>
                            <li>
                                <label>
                                    <input type="radio" name="scale" checked> Mọi tỉ lệ
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> 1/12
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> 1/10
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> 1/7
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> 1/6
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> 1/5
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> 1/4
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> 1/3
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="scale"> Non-scale
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="filter__mobile">
                <div class="mobile__op mobile-filter">
                    <i class="fa-solid fa-filter mobile-filter__click"></i>
                    Phân loại
                    <div class="filter__box">
                        <ul>
                            <li>
                                <span class="filter__brand">Thương hiệu</span>
                                <div class="filter__box__detail filter__brand--detail">
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="radio" name="brandm" checked> Mọi hãng
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="brandm"> Good Smile Company
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="brandm"> Max Factory
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="brandm"> FREEing
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="brandm"> The One Piece
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <span class="filter__price">Lọc giá</span>
                                <div class="filter__box__detail filter__price--detail">
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="radio" name="pricem" checked> Mọi giá
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="pricem"> Dưới 1.000.000₫
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="pricem"> 1.000.000₫ - 2.000.000₫
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="pricem"> 2.000.000₫ - 3.000.000₫
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="pricem"> 3.000.000₫ - 4.000.000₫
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="pricem"> Trên 4.000.000₫
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <span class="filter__scale">Tỉ lệ</span>
                                <div class="filter__box__detail filter__slace--detail">
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem" checked> Mọi tỉ lệ
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> 1/12
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> 1/10
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> 1/7
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> 1/6
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> 1/5
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> 1/4
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> 1/3
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="scalem"> Non-scale
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile__op mobile-collect">
                    <i class="fa-solid fa-angle-down mobile-collect__click"></i>
                    Sắp xếp
                    <div class="categ__box">
                        <ul>
                            <li class="categ--check">
                                Tất cả sản phẩm
                                <i class="fa-solid fa-check"></i></li>
                            <li>Hàng có sẵn
                                <i class="fa-solid fa-check"></i>
                            </li>
                            <li>Hàng order
                                <i class="fa-solid fa-check"></i>
                                </li>
                            <li>R18
                                <i class="fa-solid fa-check"></i>
                                </li>
                            <li>Scale Figure
                                <i class="fa-solid fa-check"></i>
                                </li>
                            <li>Art book
                                <i class="fa-solid fa-check"></i>
                                </li>
                        </ul>
                    </div>
                </div>
                
            </div>

            <div class="product">
                @yield('content')
            </div>
        </div>

        <div class="footer">
            <div class="footer__top">
                <span>Follow Figurin on Instagram</span>
                @figurin.vnn
            </div>
            <div class="footer__mid">
                <div class="footer__mid__img hover--style1">
                    <img src="{{asset('frontend/img/footer/gallery_item_1_img.webp')}}">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="{{asset('frontend/img/footer/gallery_item_2_img.webp')}}">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="{{asset('frontend/img/footer/gallery_item_3_img.webp')}}">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="{{asset('frontend/img/footer/gallery_item_4_img.jpg')}}">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="{{asset('frontend/img/footer/gallery_item_5_img.jpg')}}">
                </div>
                <div class="footer__mid__img hover--style1">
                    <img src="{{asset('frontend/img/footer/gallery_item_6_img.jpg')}}">
                </div>
            </div>

            <div class="footer__bot"></div>
        </div>
    </div>
</body>
</html>