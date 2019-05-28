<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-32">
    {!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
    {!! Html::style('css/formaweb.css')!!}
    <title> @yield('titre_page')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar navbar-brand " href="{{url('/listeMangas')}}">Mangas</a>
        <button class="navbar-toggler" type="button" data-toggle="Collapse" data-target="navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link"href="#">Home
                        <span class="ar-ooly"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Les mangas
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/listeConferences')}}"> Liste des Mangas</a>

                    </div>
                </li>
                <li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <h1> @yield('titre')</h1>
</header>
@yield('contenu')
<footer class="footer">
   Tp colle
</footer>
{!! Html::script('lib/jquery/jquery-3.4.1.slim.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
</body>
</html>
