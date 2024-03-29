@extends('layouts.app')

@section('title', 'tutti i comics')
@section('content')
    <div class="container">
        <h2>Tutti i comics</h2>
        <a class="btn btn-success mt-4" href="{{ route('comics.create') }}">Aggiungi un
            nuovo Comic</a>

    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Data di rilascio</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Dettagli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><button class="btn btn-primary "><a class="nav-link text-white"
                                    href="{{ route('comics.show', $comic->id) }}">Scopri di più</a>
                            </button>
                            <a class="btn btn-warning text-white" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger delete-btn" type="submit"
                                    data-comic-title="{{ $comic->title }}">Cancella</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('partials.delete-modal')
@endsection
