<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- fontes de extensões de terceiros para trazer para o projeto--}}
        <title>@yield('title')</title>
        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="js/scripts.js"></script>

    </head>
    <body>
        <header>
            {{-- aqui onde é formado o cabeçalho do site incluindo uma img--}}
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/icone.png" alt="SAN_dev">
                    </a>
                    {{-- Criação da lista--}}
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/mostraproduto" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/produtos/create" class="nav-link">Criar Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Evento</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Sair</a></a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container fluid">
                <div class="row">
                    {{-- Aqui onde vai mostrar uma mensagem de criação de usuário com sucesso usando uma condição if--}}
                    @if (session('msg'))
                            <p class="msg">{{ session('msg') }}</p>
                    @endif
                </div>
            </div>
        </main>
        {{--Aqui o rodapé do site--}}
        @yield('content')
        <footer>
            <p>SAN_dev &copy; 2023</p>
        </footer>
        <!-- Ícones da aplicação -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
