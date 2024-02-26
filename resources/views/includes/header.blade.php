<div class="header_principal d-flex justify-content-between align-items-center px-4 py-2">
    <img src="./assets/images/Indigo.webp">
    <div>
        <a href="#" class="link_rs"><i class="fab fa-instagram mx-1"></i></a>
        <a href="#" class="link_rs"><i class="fab fa-facebook mx-1"></i></a>
        <a href="#" class="link_rs"><i class="fab fa-tiktok mx-1"></i></a>
        <a href="#" class="link_rs"><i class="fab fa-youtube mx-1"></i></a>
        <a href="#" class="link_rs"><i class="fab fa-twitter mx-1"></i></a>
        <a href="#" class="link_rs"><i class="fab fa-linkedin"></i></a>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light nav_bar_estilo">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="#">
            <img src="./assets/images/emma_logo.webp" width="125">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-md-5">
                    <a class="nav-link active nav_item_oscuro" aria-current="page" href="#">Nosotras</a>
                </li>
                <li class="nav-item dropdown mx-md-5">
                    <a class="nav-link dropdown-toggle nav_item_oscuro" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Columnas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Político Social</a></li>
                        <li><a class="dropdown-item" href="#">Experiencias</a></li>
                        <li><a class="dropdown-item" href="#">Autocuidado</a></li>
                        <li><a class="dropdown-item" href="#">Cultura</a></li>
                        <li><a class="dropdown-item" href="#">Invitadas</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mx-md-5">
                    <a class="nav-link dropdown-toggle nav_item_oscuro" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mujeres que inspiran
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Entrevistas</a></li>
                        <li><a class="dropdown-item" href="#">Círculo de escucha</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-md-5">
                    <a class="nav-link nav_item_newsletter" aria-current="page" href="#">Newsletter</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Auth::user())
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                    class="nav-link nav_item_oscuro nav_item_suscribete px-3">
                                    Cerrar sesión
                                </x-dropdown-link>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link nav_item_oscuro nav_item_suscribete px-3" aria-current="page"
                                href="{{ route('login') }}">Inicia sesión</a>
                        </li>
                    @endif
                </ul>
                <form class="d-flex">
                    <button class="btn nav_item_search" type="submit">
                        <i class="fas fa-search nav_item_search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
