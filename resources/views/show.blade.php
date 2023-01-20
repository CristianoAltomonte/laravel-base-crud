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
    <div class="d-flex m-3">
        <a href="{{ route('comics.edit', $comics->id) }}"><button type="button"
                class="btn btn-outline-warning mt-4 me-2">Modifica Comic</button></a>

        <form action="{{ route('comics.destroy', $comics->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-outline-danger mt-4 me-2">Elimina Comic</button></a>

        </form>
    </div>

    <div>
        @if (session('success'))
            <div class="alert alert-success my-3">
                {{ session('success') }}
            </div>
        @endif
    </div>


@endsection
