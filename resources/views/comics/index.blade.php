@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h2>Lista Fumetti</h2>
            <div class="row row-cols-3 gy-2">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card" >
                            <img src="https://picsum.photos/200/300">
                            <div class="card-body">
                             <h3>{{ $comic->title }}</h3>
                             <div>{{ $comic->series }}</div>
                             <div>{{ $comic->date }}</div>
                             <div>{{ $comic->price }}</div>
                             <div>{{ $comic->type }}</div>
                             <div>{{ $comic->description }}</div>
                            </div>
                          </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection