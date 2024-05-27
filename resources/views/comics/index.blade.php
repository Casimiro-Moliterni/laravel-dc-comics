@extends('layouts.app')

@section('content')
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
                                <div class="my_accordion d-flex align-items-center">
                                    descrizione
                                    <div class="d-flex w-100 justify-content-end">      
                                        <div class="my_icon">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            <div class="ms_description">
                                                <div class="mb-3 ms_description">{{ $comic->description }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms_description">
                                        <div class="mb-3 ms_description">{{ $comic->description }}</div>
                                    </div>
                                </div>
                               <div class="d-flex justify-content-center align-items-center gap-3">
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
@endsection
