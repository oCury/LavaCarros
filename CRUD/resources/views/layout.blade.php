<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pagina_titulo', 'Carrinho de Compras')</title>

    <!-- Importação de Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Importação do Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- CSS Customizado -->
    <link href="{{ url('/css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="nav-wrapper light-blue row">
            <a href="{{ route('index') }}" class="brand-logo col offset-l1">Carrinho de Compras</a>
            <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('home.pesquisa') }}">Buscar</a></li>
                <li><a href="{{ route('carrinho.compras') }}">Minhas Compras</a></li>
                <li>
                    <a href="{{ route('carrinho.index') }}" class="btn btn-custom d-flex align-items-center">
                        <i class="material-icons">shopping_cart</i>
                        <span class="badge bg-secondary">{{ session('carrinho_count', 0) }}</span>
                    </a>
                </li>

                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="dropdown-trigger" href="#" data-target="dropdown-user">
                            Olá, {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <ul id="dropdown-user" class="dropdown-content">
                            <li><a href="{{ route('dashboard') }}">Admin Area</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="btn btn-custom">Login</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('pagina_conteudo')
        </div>
    </main>

    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Carrinho de Compras</h5>
                    <p class="grey-text text-lighten-4">Seu marketplace simples e funcional.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © {{ date('Y') }} - Laravel {{ App::VERSION() }}
            </div>
        </div>
    </footer>

    <!-- Importação do jQuery e Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sidenav = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sidenav);

            var dropdowns = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdowns, { coverTrigger: false });

            var modals = document.querySelectorAll('.modal');
            M.Modal.init(modals);
        });
    </script>

    @stack('scripts')
</body>
</html>
