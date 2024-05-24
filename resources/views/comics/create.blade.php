@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Crea il tuo Fumetto</h2>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name='title'>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name='image'>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name='type'>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name='series'>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">data</label>
                <input type="text" class="form-control" id="data" name='date'>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name='price'>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" style="height: 100px" name="description"></textarea>
                <label for="description">Descrizione</label>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
