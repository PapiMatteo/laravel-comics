@extends('layouts.app')

@section('content')
    <div class="hero">
            
    </div>
    <div class="content">       
        <div class="container position-relative">
            <h1 class="title">CURRENT SERIES</h1>
            <div class="row row-cols-6  py-5 flex-wrap">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="ms_card">
                            <img class="w-100" src="{{ $comic['thumb'] }}" alt="">
                            <h3 class="text-center">{{ $comic['series'] }}</h3>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div class="button">
                <a href="">LOAD MORE</a>
            </div>
            
        </div>
        <div class="banner">
            <div class="small-container">
                <ul class="banner-nav">
                    <li ><a href=""><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">DIGITAL COMICS</a></li>
                    <li ><a href=""><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">DC MERCHANDISE</a></li>
                    <li ><a href=""><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">COMIC SHOP LOCATOR</a></li>
                    <li ><a href=""><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">SUBSCRIPTION</a></li>
                    <li ><a href=""><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">DC POWER VISA</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection