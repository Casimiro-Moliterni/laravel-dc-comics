@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifica il tuo fumetto</h2>
    <form action="{{ route('comics.update',['comic'=>$comic->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name='title' value="{{ $comic->title }}" >
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name='image' value="{{ $comic->image }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name='type' value="{{ $comic->type }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name='series'value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">data</label>
            <input type="date" class="form-control" id="data" name='date' value="{{ $comic->date}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name='price' value="{{ $comic->price }}">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="description" style="height: 100px" name="description">{{ $comic->description }}</textarea>
            <label for="description">Descrizione</label>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection