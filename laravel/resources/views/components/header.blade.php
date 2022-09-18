<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Наша страница</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('staticManager') }}">Статическая информация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">Пользователи</a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Аккаунт
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                            <li><a class="dropdown-item" href="{{route('login')}}">Авторизация</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Регистрация</a></li>
                        @endguest
                        @auth
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Выход</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>
            @auth
            <form class="d-flex" role="search">
                <a class="nav-link" href="{{route('information')}}">Информация о пользователе</a>
            </form>
            @endauth
        </div>
    </div>
</nav>
