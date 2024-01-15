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
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté en tant que:</div>
                        <p class="text-light">{{ Auth::user()->name }}</p>
                    </div>
                </nav>
            </div>
            
            <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
              <div class="col-sm-6 col-xl-4">
                <div class="bg-primary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-people fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">FILMS</p>
                        <h3 class="mb-0">6</h3>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="bg-danger rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-film"></i>
                  <div class="ms-3">
                      <p class="mb-2">TICKETS PAYES</p>
                      <h3 class="mb-0">82</h3>
                  </div>
              </div>
              
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="bg-warning rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-people fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">TICKETS DISPONIBLES</p>
                    <h3 class="mb-0">68</h3>
                </div>
            </div>
            
        </div>
            </div>
            <div class="col-sm-6 col-xl-12 mt-3">
              <img src="assets/img/mc.jpg" alt="" style="width: 1089px" class="text-center">
              
          </div>
            </div>
                        
                        
                @include('layouts.js')
    </body>
</html>
