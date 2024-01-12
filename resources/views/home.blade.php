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
    </div>
@endsection