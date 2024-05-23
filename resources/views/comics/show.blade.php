@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>{{ $comic->title}}</h1>
        <div>
            <img src="https://picsum.photos/200/300">
        </div>
        <div>{{ $comic->series }}</div>
        <div>{{ $comic->date }}</div>
        <div>{{ $comic->price }}</div>
        <div>{{ $comic->type }}</div>
        <div>{{ $comic->description }}</div>
    </div>
</section>
@endsection