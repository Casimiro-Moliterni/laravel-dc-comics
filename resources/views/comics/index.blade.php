@extends('layouts.app')

@section('content')

    <body>
        <section class="ms_index">
            <div class="ms_overlay"></div>
            <div class="container">
                <h2 class="text-center">Lista Fumetti</h2>
                <div class="row row-cols-3 gy-2">
                    @foreach ($comics as $comic)
                        <div class="col h-100">
                            <div class="card ms_card">
                                <img src="{{ $comic->image }}">
                                <div class="card-body mb-2">
                                    <h3>{{ $comic->title }}</h3>
                                    <div><strong>Series:</strong> <span>{{ $comic->series }}</span></div>
                                    <div><strong>Price:</strong> <span>{{ $comic->price }}&euro;</span></div>
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
                                                <button class="btn btn-danger ms_button_delete" data-comic-title="{{ $comic->title }}" type="submit">Elimina</button>
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
        {{-- modal  --}}
        <div id="modaljs" class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eliminazione Fumetto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="my_p_modal"></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger " id="bs_delete_btn">Elimina</button>
                </div>
              </div>
            </div>
          </div>
    </body>
@endsection
