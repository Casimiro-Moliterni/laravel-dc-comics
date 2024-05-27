<header class="p5 ">
    <div class="ms_container">
        <nav class="navbar navbar-expand-lg ">
            {{-- <a class="navbar-brand a_my" href="{{ route('home') }}">Comics DC</a> --}}
            <div class="ms_logo ">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/1c/DC_Comics_logo.png" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end w-100">
                    <li class="nav-item">
                        <a class="nav-link active a_my" aria-current="page" href="{{ route('home') }}">
                            Dc Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active a_my" aria-current="page" href="{{ route('comics.index') }}">Lista
                            Fumetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active a_my" aria-current="page" href="{{ route('comics.create') }}">Crea Il
                            tuo Fumetto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
