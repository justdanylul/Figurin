@extends('layout')
@section('content')
<div class="product__item">
    <a href="">
        <img src="{{asset('frontend/img/product/28cm-Anime-Genshin-Impact-Figure-Hu-Tao-Figure-Hutao-Action-Figures-Collection-Model-Figurine-Doll-Toys.jpg_Q90.jpg_.jpg')}}" alt="">
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
        <img src="{{asset('frontend/img/product/17Cm-Genshin-T-c-ng-Klee-Hibana-Hi-p-S-Anime-H-nh-1-7-Quy.jpg_Q90.jpg_.jpg')}}" alt="">
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
@endsection