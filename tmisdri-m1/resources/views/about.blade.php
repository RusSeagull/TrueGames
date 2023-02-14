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
        <div class="catalog-items ">
            @foreach ($product as $prod)
            <div class="catalog-item card">
                <div class="pic-box">
                    <img src="/public/img/{{$prod -> photo}}" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title mb-3">{{$prod -> title}}</p>
                    <p class="price">{{$prod -> price}} руб.</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
