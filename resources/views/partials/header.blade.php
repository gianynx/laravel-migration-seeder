<header>
    <div class="container d-flex justify-content-between">
        <div id="img_container">
            <a href="{{ route('pages.home') }}"><img src="{{ asset('img/trenitalia_logo.png') }}"
                    alt="trenitalia_logo"></a>
        </div>
        <div id="navbar_container" class="pt-5">
            <nav class="navbar-nav">
                <ul class="d-flex list-unstyled pt-5 fs-5">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.frecce' ? 'active' : '' }}"
                            href="{{ route('pages.frecce') }}">
                            frecce
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.intercity' ? 'active' : '' }}"
                            href="{{ route('pages.intercity') }}">
                            Intercity e Internazionali
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.regionale' ? 'active' : '' }}"
                            href="{{ route('pages.regionale') }}">
                            regionale
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.info' ? 'active' : '' }}"
                            href="{{ route('pages.info') }}">
                            info
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
