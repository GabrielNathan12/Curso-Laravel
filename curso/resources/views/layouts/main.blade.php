<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>
        <!-- Fonts do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
     
        <!-- CSS do Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- CSS da aplicacao -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"> </script>

    </head>
    <body>
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo2.svg" alt="Curso Laravel">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Eventos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">
                                Criar Eventos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Entrar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Cadastrar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg"> {{session('msg')}} </p>
                    @endif

                    @yield('content')
                </div>
            </div>
        </main>
        <footer> 
            <p> Gabriel N &copy; 2023</p>
        </footer>
    </body>
</html>
