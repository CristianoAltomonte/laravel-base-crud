@extends('layouts.app')
@section('page-title', 'Edit DC-Comics')

@section('main-content')


    <div class="container p-5">

        <h1 class="text-center p-4">Edit per la modifica</h1>

        <form method="POST" action="{{ route('comics.update', $comics->id) }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input value="{{$comics->title}}" name="title" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control">{{$comics->description}}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input value="{{$comics->thumb}}" name="thumb" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input value="{{$comics->price}}" name="price" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input value="{{$comics->series}}" name="series" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Data di uscita</label>
                <input value="{{$comics->sale_date}}" name="sale_date" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input value="{{$comics->type}}" name="type" type="text" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Edit Comic</button>

        </form>

    </div>

@endsection
