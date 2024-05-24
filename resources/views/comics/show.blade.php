@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>{{ $comic->title}}</h1>
        <div class="ms_image">
            <img src="{{ $comic->image }}">
        </div>
        <div>{{'Series:' . '  ' . $comic->series }}</div>
        <div>{{'data:' . '  ' . $comic->date }}</div>
        <div>{{'price:' . '  ' . $comic->price }}</div>
        <div>{{ 'type:' . '  ' .$comic->type }}</div>
        <div>{{ 'Description:' . '  ' .$comic->description }}</div>
    </div>
</section>
@endsection