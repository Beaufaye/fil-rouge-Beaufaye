{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.style')
      </head>
    <body>
        @include('layouts.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                TABLEAU DE BORD
                            </a>
                                 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
  
      
  
        <a class="nav-link collapsed" href="{{route('ajfilm')}}">
          <div class="sb-nav-link-icon"><i class="fas fa-film"></i></div>
          <i class="bi bi-menu-button-wide"></i><span>Ajout d'un film</span></i>
        </a>
    
        <a class="nav-link collapsed" href="{{route('film')}}">
          <div class="sb-nav-link-icon"><i class="fas fa-calendar-day"></i></div>
          <i class="bi bi-menu-button-wide"></i><span>Programme de la semaine</span></i>
        </a>
      
  
    </ul>
  
  </aside><!-- End Sidebar-->
                           
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté en tant que:</div>
                        <p class="text-light">{{ Auth::user()->name }}</p>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="card col-xl-3 col-md-6">
                                <img src="assets\img\aze.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">Sira est un film dramatique, écrit et réalisé par Apolline Traoré avec des acteurs principaux tels que Nafissatou Cissé, Mike Danon, Lazare Minoungou, Nathalie Vairac et Ruth Werner.</p>
                                </div>
                              </div>
                              <div class="card col-xl-3 col-md-6">
                                <img src="assets\img\i.jpg" class="card-img-top" alt="..." style="height: 200px">
                                <div class="card-body">
                                  <p class="card-text">Un film interpellateur qui montre ce que l’ingratitude peut causer dans la vie de tout un chacun selon ses promoteurs.</p>
                                </div>
                              </div>
                              <div class="card col-xl-3 col-md-6">
                                <img src="assets\img\golden.jpg" class="card-img-top" alt="..." style="height: 200px">
                                <div class="card-body">
                                  <p class="card-text">Construite autour du personnage principal Jams, «Golden» met en exergue une
                                    famille qui se bat pour sauver son patrimoine qu’elle a mis 30 ans à construire. 
                                   </p>
                                </div>
                              </div>
                              <div class="card col-xl-3 col-md-6">
                                <img src="assets\img\wonka.jpg" class="card-img-top" alt="..." style="height: 200px">
                                <div class="card-body">
                                  <p class="card-text">Le jeune Willy Wonka, extraordinaire inventeur, magicien et chocolatier, tente de mettre en place une boutique de chocolat en ville.</p>
                                </div>
                              </div>
                        </div>
                        
                        
                @include('layouts.js')
    </body>
</html>
