@extends('layouts.app')

@section('content')

    <body class="my_body">
        <main>
            <section>
                <div class="my_hero">
                    <div class="text-center mb-5">
                        <h1>Home Page Dc Comics</h1>
                    </div>
                    <div class="container d-flex ">
                        <div class="d-flex w-100 gap-4 justify-content-center">
                            <h3><a href="{{ route('comics.index') }}">Acquista i nostri fumetti</a></h3>
                            <h3><a href="{{ route('comics.create') }}">Crea il tuo fumetto Personalizzato</a></h3>
                        </div>
                        {{-- row  --}}
                    </div>
                    <div class="container w-50 text-white">
                        <div class="row mt-4 ">
                            <div class="col-12">
                                <div class="ms_iframe w-100">
                                    <iframe width="100%" height="450px" style="z-index:22;position: relative;transition:2s;"
                                        src="https://www.youtube.com/embed/MnN9Q6v4VZM?si=ER9wyGlTheNqWSQB"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <div class="my_overlay_iframe"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
    </body>
@endsection
