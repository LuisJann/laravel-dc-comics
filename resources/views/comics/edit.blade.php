@extends('layouts.app')

<div class="container">
    <div class="row">
        @section('content')
            <div class="col-7 mb-4">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="type">Tipologia</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Seleziona una tipologia</option>
                            <option value="comic book" @selected($comic->type === 'comic book')>Comic Book</option>
                            <option value="graphic novel" @selected($comic->type === 'graphic novel')>Graphic Novel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sale_date">Data d'uscitia</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $comic->description }}">
                    </div>

                    <button class="btn btn-warning" type="submit">Salva</button>
                </form>
            </div>
        </div>
    @endsection
