<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LaBonnPoir</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="img/pear.ico">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @yield('css')
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="{{ url('/') }}"><img style="width: 30%; height: auto;" src="{{ asset('img/pear.png') }}" alt="pear">LaBonnPoir : Les meilleures annonces !</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="container">
                            <i style="padding: 5px;" class="fas fa-font"></i>
                            <span style="margin: auto; cursor: pointer; color: black; font-size: 1.2rem; border: 1px solid grey; padding: 5px;" align="center">
                                <a class="increase" style="padding: 5px;">+</a> |
                                <a class="decrease" style="padding: 5px;">-</a> |
                                <a class="reset" style="padding: 5px;">Réinitialiser</a>
                            </span>
                        </div>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('annonces') }}">Recherche</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                        </li>
                        @else
                        @admin
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">Administration</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index') }}">Mon compte</a>
                        </li>
                        @endadmin
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Déconnexion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <nav class="navbar navbar-expand fixed-bottom navbar-dark">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link " href="{{ route('legal') }}">Mentions légales</a>
                <a class="nav-item nav-link " href="{{ route('confidentialite') }}">Politique de confidentialité</a>
            </div>
        </nav>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>

</html>