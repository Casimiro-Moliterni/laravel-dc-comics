@extends('layouts.app')

@section('content')

    <body>
        <section class="ms_index">
            <div class="ms_overlay"></div>
            <div class="container">
                <h2 class="text-center">Lista Fumetti</h2>
                <div class="row row-cols-3 gy-2">
                    @foreach ($comics as $comic)
                        <div class="col">
                            <div class="card ms_card">
                                <img src="{{ $comic->image }}">
                                <div class="card-body mb-2">
                                    <h3>{{ $comic->title }}</h3>
                                    <div><strong>Series:</strong> <span>{{ $comic->series }}</span></div>
                                    <div><strong>Date:</strong> <span>{{ $comic->date }}</span></div>
                                    <div><strong>Price:</strong> <span>{{ $comic->price }}&euro;</span></div>
                                    <div><strong>Type: </strong> <span>{{ $comic->type }}</span></div>
                                    <div class="d-flex justify-content-center align-items-center gap-3 mt-1">
                                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"
                                            class="btn btn-primary fs-5 fw-semibold">Specifiche Prodotto
                                        </a>
                                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                            class="btn btn-warning text-white fs-5 fw-semibold">Modifica
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </body>
@endsection
