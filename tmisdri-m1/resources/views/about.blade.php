@extends('layouts.app')

@section('content')

<section class="intro">
    <div class="container">
        <div class="about-items">
            <div class="col-12 col-md-6 about-info-block">
                <h3 class="about-title"><span>TRUE Games</span> - это магазин по продаже товаров для <br><span>TRUE</span> геймеров</h3>
            </div>
            <div class="col-12 col-md-6 about-pic-block">
                <img src="/public/img/xbox.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="catalog about-catalog">
    <div class="container">
        <h2 class="title">Новинки!</h2>
        <div class="catalog-items">
            <div class="catalog-item card">
                <div class="pic-box">
                    <img src="/public/img/xbox.jpg" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title">Xbox series s</p>
                    <p class="price">25000 руб.</p>
                </div>
            </div>
            <div class="catalog-item card">
                <div class="pic-box">
                    <img src="/public/img/ps6.jpg" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title">Xbox series s</p>
                    <p class="price">25000 руб.</p>
                </div>
            </div>
            <div class="catalog-item card">
                <div class="pic-box">
                    <img src="/public/img/battlefield.jpg" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title">Xbox series s</p>
                    <p class="price">25000 руб.</p>
                </div>
            </div>
            <div class="catalog-item card">
                <div class="pic-box">
                    <img src="/public/img/nintendo.jpg" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title">Xbox series s</p>
                    <p class="price">25000 руб.</p>
                </div>
            </div>
            <div class="catalog-item card">
                <div class="pic-box">
                    <img src="/public/img/5hq.png" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title">Xbox series s</p>
                    <p class="price">25000 руб.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
