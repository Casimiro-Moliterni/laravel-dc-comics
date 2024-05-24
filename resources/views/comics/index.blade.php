@extends('layouts.app')

@section('content')
@include('partials.header')
    <section>
        <div class="container">
            <h2>Lista Fumetti</h2>
            <div class="row row-cols-3 gy-2">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $comic->image }}">
                            <div class="card-body">
                                <h3>{{ $comic->title }}</h3>
                                <div>{{ $comic->series }}</div>
                                <div>{{ $comic->date }}</div>
                                <div>{{ $comic->price }}</div>
                                <div>{{ $comic->type }}</div>
                                <div class="ms_description">
                                    <div class="mb-3 ms_description">{{ $comic->description }}</div>
                                </div>
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Specifiche
                                    Prodotto</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
