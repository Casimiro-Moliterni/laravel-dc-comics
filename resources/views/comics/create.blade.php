@extends('layouts.app')
@section('content')

    <body>
        <div class="ms_create_body h-100 w-100 ">

            <div class="container pt-5 h-100">
             <div class="my_wrapper_form ">
                <h2 class="text-center">Crea il tuo Fumetto</h2>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                value={{ old('title') }}>
                            @error('title')
                            <div class="d-flex  justify-content-center">
                                <div class="my_alert">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="image" class="form-label">Image</label>
                            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                                value={{ old('image') }}>
                            @error('image')
                            <div class="d-flex  justify-content-center">
                                <div class="my_alert">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="type" class="form-label">Tipo</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                                value={{ old('type') }}>
                            @error('type')
                            <div class="d-flex  justify-content-center">
                                <div class="my_alert">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                                value={{ old('series') }}>
                            @error('series')
                            <div class="d-flex  justify-content-center">
                                <div class="my_alert">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="data" class="form-label">data</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="data" name="date"
                                value={{ old('date') }}>
                            @error('date')
                            <div class="d-flex  justify-content-center">
                                <div class="my_alert">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6 my_imput">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="text" class="form-control my_imput @error('price') is-invalid @enderror" id="price" name="price"
                                value={{ old('price') }}>
                            @error('price')
                                <div class="d-flex  justify-content-center">
                                    <div class="my_alert">{{ $message }}</div>
                                </div>
                            @enderror
                        </div>
                        <label for="description" class="form-label">Descrizione</label>
                        <div class=" col-12">
                            <textarea class="form-control @error('description') is-invalid @enderror"   id="description" style="height: 100px"
                                name="description" >{{ old('description') }}</textarea>
                            @error('description')
                            <div class="d-flex  justify-content-center">
                                <div class="my_alert">{{ $message }}</div>
                            </div>
                            @enderror
                        </div>
                    </div>
                  <div class="d-flex justify-content-center"> <button type="submit" class="btn btn-primary mt-3">Crea</button></div>
                </form>
             </div>
            </div>
        </div>
    </body>
@endsection
