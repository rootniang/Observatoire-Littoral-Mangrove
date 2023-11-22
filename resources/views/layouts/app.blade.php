<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{asset('build/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/css/dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/icofont/icofont.min.css')}}">

        <!-- Scripts -->
        <script src="{{asset('build/assets/js/jquery.min.js')}}" defer></script>
        <script src="{{asset('build/assets/js/script.js')}}" defer></script>
        <script src="{{asset('build/assets/bootstrap/js/bootstrap.min.js')}}" defer></script>
        <script src="{{asset('build/assets/js/dashboard.js')}}" defer></script>
        {{-- <script src="{{asset('build/assets/js/main.js')}}" defer></script> --}}
    </head>
    <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('dashboard') }}">Observatoire</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Recherche" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap endbar">
            <a class="nav-link px-3" href="{{ route('profile.edit') }}">Mon Profil</a>
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
                <a class="nav-link" aria-current="page" href="">
                  <i class="icofont-dashboard-web"></i>
                  Tableau de bord
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ecosysteme.index') }}">
                  <i class="icofont-institution"></i>
                  Sites Mangroves
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                  <i class="icofont-leaf"></i>
                  Especes
                </a>
                <div class="collapse" id="home-collapse">
                  <ul class="btn-toggle-nav">
                    <li class="nav-item"><a href="{{ route('faune.index') }}" class="nav-link">Faune</a></li>
                    <li class="nav-item"><a href="{{ route('flore.index') }}" class="nav-link">Flore</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('new.index') }}">
                  <i class="icofont-link"></i>
                  Actualités
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('article.index') }}">
                <i class="icofont-bill"></i>    
                  Articles
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('media.index') }}">
                  <i class="icofont-list"></i>
                  Médias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">
                  <i class="icofont-user-alt-4"></i>
                  Utilisateurs
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
              <span>Saved reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" class="align-text-bottom"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          {{$slot}}
        </main>
      </div>
    </div>
  </body>
</html>
