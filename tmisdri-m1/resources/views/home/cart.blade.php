@extends('layouts.app')

@section('content')

<section class="cart">
    <div class="container">
        @if (Auth::user())
        <h2 class="title">
            Корзина
        </h2>
        <div class="cart-items gap-3">
            @foreach ($products as $prod)
            <div class="cart-item card col-12">
                <div class="cart-pic-box">
                    <img src="/public/img/{{$prod -> photo}}" alt="" class="img-fliud">
                </div>
                <div class="text-box">
                    <p class="card-title">{{$prod -> title}}</p>
                    <div class="count-box">
                        <a href="/public/cartadd/{{$prod -> id}}" class="add-rem">+</a>
                        <p class="text count">{{$prod -> count}} шт</p>
                        <a href="/public/cartrem/{{$prod -> id}}" class="add-rem">-</a>
                    </div>
                    <p class="text price">{{$prod -> price * $prod -> count}} руб.</p>
                </div>
                <a href="/public/cartall/{{$prod -> id}}" class="btn main-btn">Удалить</a>
            </div>
            @endforeach
        </div>
        @else
        <h1>Вы не авторизованны, авторизуйтесь</h1>
        @endif

    </div>
</section>

@endsection
