@extends('layouts.app')

@section('content')
<body class="my_body">
    @include('partials.header')
    <main>
        <section>
            <div class="my_hero">
                 <div class="text-center">
                    <h1>Home Page Dc Comics</h1>
                 </div>
                 <div class="container d-flex align-items-center h-100">
                    <div class="d-flex w-100 gap-4 justify-content-center">
                        <h3><a href="{{ route('comics.index') }}">Acquista i nostri fumetti</a></h3>
                        <h3><a href="{{ route('comics.create') }}">Crea il tuo fumetto Personalizzato</a></h3>
                    </div>
                 </div>
            </div>
        </section>
    </main>
</body>

@endsection