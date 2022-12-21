@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <section>
        <div class="container">
            <div class="mb-4">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <h4>{{ $comic->title }}</h2>
                <div>
                    <h5>Descrizione:</h5>
                    <p>{{ $comic->description }}</p>
                </div>
        </div>
    </section>
@endsection
