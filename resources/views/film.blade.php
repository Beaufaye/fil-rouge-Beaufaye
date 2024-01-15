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
          
                
                      
                               
                                
                                <main>
                                  @if (session('status'))
                                  <div class="alert alert-success">
                                    {{session('status')}}
                                  </div>
                                  @endif
                                  <div class="container-fluid px-4">
                                      <h1 class="mt-4">NOS FILMS</h1>
                                     <br>
                                     <br>
                                      <br>
                                      <br>
                                      <div class="row">
                                        @foreach ($film as $film)
                                          <div class="card col-xl-3 col-md-6">
                                              <img src="{{asset('Uploads/photos/' . $film->image) }}" class="card-img-top" alt="...">
                                              <div class="card-body">
                                                <p class="card-text">{{ $film->description}}</p>
                                                <h4 class="card-title">{{ $film->jour}} | {{ $film->heure}}</h4>
                                                <a href="{{route('upfilm', $film->id )}}"><button class="btn btn-primary">Modifier</button></a>
                                              </div>
                                            </div>
                                            @endforeach
                                            </div>
                                          
                                      </div>
                                    
                                </main>

                            
                        
                @include('layouts.js')
    </body>
</html>














































@include('layouts.style')



<br>
<br>
<br>
<br>
<br>
<br>
<br>

@include('layouts.footer')