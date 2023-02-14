@extends('layouts.app')

@section('content')

<section class="contact">
    <div class="container">
        <h2 class="title">
            Контакты
        </h2>
            <div class="contact-block-items">
                <div class="col-12 col-md-6 about-info-block">
                    <ul class="contact-info">
                        <li class="contact-item">
                            <p class="text">Адрес: Проспект Проспекта дом 12</p>
                        </li>
                        <li class="contact-item">
                            <a href="tel:+999999999" class="text">+9 999 999 99</a>
                        </li>
                        <li class="contact-item">
                            <a href="mailto:truegames@info.com" class="text">truegames@info.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 about-pic-block">
                    <img src="/public/img/map.jpg" alt="" class="img-fluid">
                </div>
            </div>
    </div>
</section>

@endsection


