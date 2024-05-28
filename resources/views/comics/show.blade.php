@extends('layouts.app')

@section('content')

    <body class="my-body">
        <section class="pt-5">
            <div class="container">
                <div>
                    @if (session()->has('message'))
                        <div class="my_message_show">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="d-flex gap-3">
                    <div class="my_card">
                        <h1 class="text-center">{{ $comic->title }}</h1>
                        <div class="ms_image">
                            <img src="{{ $comic->image }}">
                        </div>
                        <div class="card_text">
                            <div>
                                <strong> Series:</strong>
                                <span>{{ $comic->series }}</span>
                            </div>
                            <div>
                                <strong>data:</strong>
                                <span class="fs-5">{{ $comic->date }}</span>
                            </div>
                            <div>
                                <strong>price:</strong>
                                <span class="fs-5">{{ $comic->price }} &euro;</span>
                            </div>
                            <div>
                                <strong>type:</strong>
                                <span class="fs-5">{{ $comic->type }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-1 mt-1 flex-column  border border-success border-2 p-1">
                        <div class="h-100 p-2">
                            <div class="text-white bg-success p-1">
                                <strong>Description:</strong>
                                <span class="fs-5">{{ $comic->description }}</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div>
                                <a href="{{ route('comics.create', ['comic' => $comic->id]) }}"
                                    class="btn btn-success text-white fs-5 fw-semibold">Crea Il Tuo Fumetto Personalizzato
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                    class="btn btn-warning text-white fs-5 fw-semibold">Modifica Fumetto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
