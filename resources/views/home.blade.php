@extends('layouts.app')

@section('content')
<body class="my_body">
    <main>
        <section>
            <div class="my_hero">
                <embed src="/html/Kalimba.mp3" loop="true" autostart="true" width="2" height="0">
                 <div class="text-center mb-5">
                    <h1>Home Page Dc Comics</h1>
                 </div>
                 <div class="container d-flex ">
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