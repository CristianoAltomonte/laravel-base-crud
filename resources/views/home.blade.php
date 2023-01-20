{{-- Con questa direttiva blade estendiamo il layout della pagina --}}
@extends('layouts.app')

@section('page-title', 'Dc Comics-Home')

@section('main-content')

    <div class="comics-section">
        <div class="w-75 m-auto">
            <a href="{{ route('comics.create') }}"><button class="bg-primary">ADD COMIC</button></a>
            <div class="container py-5">
                <div class="d-flex flex-wrap">

                    @foreach ($comics as $id => $element)
                        <div class="card-container d-flex flex-column">
                            <a href="{{ route('comics.show', $element->id) }}">
                                <div class="card-image mb-3"> <img class="image-comic" src="{{ $element['thumb'] }}"
                                        alt=""></div>
                                <div class="card-text text-white mb-4">{{ $element['title'] }}</div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>
    <div class="container-main">
        <div class="nav-main py-3">
            <ul class="d-flex justify-content-around align-items-center">
                <li><img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt=""><span
                        class="text-white mx-2">DIGITAL COMICS</span></li>
                <li><img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" /><span
                        class="text-white mx-2">DC MERCHANDASIN</span></li>
                <li><img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" /><span
                        class="text-white mx-2">SUBSCRIPTION</span></li>
                <li><img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" /><span
                        class="text-white mx-2">COMIC SHOP LOCATION</span></li>
                <li><img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" /><span class="text-white mx-2">DC
                        POWER VISA</span></li>
            </ul>
        </div>

    </div>
@endsection
