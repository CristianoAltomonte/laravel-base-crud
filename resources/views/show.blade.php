@extends('layouts.app')

@section('page-title', 'Comics - singolo prodotto')

@section('main-content')

    <div class="card-container d-flex flex-column">


        <div>
            <img class="image-comic" src="{{ $comics['thumb'] }}" alt="Card image">

        </div>
        <div class="card-body">
            <span class="card-title text-dark fs-6">{{ $comics['series'] }}</span>
            <span class="card-title text-dark fs-6">{{ $comics['price'] }}</span>
            <span class="card-title text-dark fs-6">{{ $comics['type'] }}</span>
            <span class="card-title text-dark fs-6">{{ $comics['description'] }}</span>
        </div>


    </div>
@endsection
