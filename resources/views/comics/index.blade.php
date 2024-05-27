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
                                    <div class="d-flex flex-column gap-2 mt-1">
                                        <div>
                                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"
                                                class="btn btn-primary fs-5 fw-semibold">Specifiche Prodotto
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                                class="btn btn-warning text-white fs-5 fw-semibold">Modifica
                                            </a>
                                        </div>
                                        <div>
                                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Elimina</button>
                                            </form>
                                        </div>
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
