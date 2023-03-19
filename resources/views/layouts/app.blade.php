<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('build/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/icofont/icofont.min.css')}}">

    <!-- Scripts -->
    <script src="{{asset('build/assets/js/jquery.min.js')}}" defer></script>
    <script src="{{asset('build/assets/js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('build/assets/js/main.js')}}" defer></script>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('dashboard') }}">Observatoire Mangrove</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Recherche" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap endbar">
        <a class="nav-link px-3" href="{{ route('profile.edit') }}">Profil</a>
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="nav-link px-3" href="{{ route('logout') }}" 
        onclick="event.preventDefault(); 
                        this.closest('form').submit();">Déconnexion</a>
        </form>
      
    </div>
  </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=""{{ route('dashboard') }}">
                <i class="icofont-dashboard-web"></i>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-eco-environmen"></i>
                Écosystèmes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-eco-energy"></i>
                Espèces
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-adjust"></i>
                Sols
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-earth"></i>
                API
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="users" class="align-text-bottom"></span>
                
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-layers"></i>
                Projets
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-calendar"></i>
                Activités
                </a>
            </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Publications</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
            </h6>
            <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-newspaper"></i>
                Actualités
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-paper"></i>
                Articles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-newspaper"></i>
                Alertes
                </a>
            </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Configuration</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
            </h6>
            <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-users-alt-2"></i>
                Gestion des utilisateurs
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-dice"></i>
                Préférences
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="icofont-options"></i>
                Paramètres avancés
                </a>
            </li>
            </ul>
        </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            {{ $slot }}
        </main>
    </div>
</div>


  </body>
</html>
