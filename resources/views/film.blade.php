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
        <i class="bi bi-menu-button-wide"></i><span>PROGRAMME DE LA SEMAINE</span></i>
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
                        
                        
                        <main id="main" class="main">

                          <div class="pagetitle col-lg-8 text-center ">
                            <img src="assets\img\logo2.png"
                            alt="login form" />
                          </div><!-- End Page Title -->
                        
                          <section class="section dashboard mt-5">
                            <div class="row">
                              <table class="table table-striped table-bordered zero-configuration">
                             
                                @if (session('status'))
                                <div class="alert alert-success">
                                  {{session('status')}}
                                </div>
                                @endif
                               
                        
                                
                                  {{-- @foreach($film as $film)
                                  <div class="card col-xl-3 col-md-6" style="width: 300px;">
                                    <img src="{{asset('storage') . '/' . $film->photo}}" class="card-img-top" style="width: 300px; height: 250px">
                                    <div class="card-body">
                                      <h4 class="card-text text-center text-danger">{{ $film->nom}}</h4>
                                      <p class="card-text">{{ $film->description }}</p>
                                    </div>
                                  </div>
                                @endforeach
                              --}}

                              {{-- <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Durée</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Jour</th>
                                    <th>Heure</th>
                                    <th>Version</th>
                                    <th>Actions</th>
                                </tr>
                               </thead>

                               <tbody>
                                @foreach($film as $film)
                              <tr>
                                  <th>{{ $film->id}}</th>
                                  <td>{{ $film->nom}}</td>
                                  <td>{{ $film->duree}}</td>
                                  <th>{{ $film->type}}</th>
                                  <td>{{ $film->description}}</td>
                                  <td>{{ $film->jour}}</td>
                                  <td>{{ $film->heure}}</td>
                                  <td>{{ $film->version}}</td>
                                  
                                  <td>
                                    <a href="{{route('mod_film', $film->id )}}"><i href="" style = "color:blue;" class="bi bi-pen"></i></a>
                                    <a href="{{url('delfilm/' .$film->id)}}"><i href="" style = "color:red;" class="bi bi-trash"></i></a>
                                  </td>
                              </tr>
                              @endforeach
                            </tbody>

                             </table> --}}
                        
                             <div class="container">
                              <div class="container">

                                <div class="section-title">
                                 
                                  <h2 class="text-center">PROCHAINES SEANCES</h2>
                                </div>
                        
                                <div class="col-lg-12">
                                  <div class="row">
                                     @foreach ($film as $film)
                                       <div class="card col-xxl-3 col-md-4" style="">
                                        
                                          <img src="{{asset('Uploads/film/' . $film->image) }}" class="" alt="...">
                                       
                                           
                                           <div class="card-body">
                                             <h4 class="text-center">{{ $film->nom}}</h4>
                                           </div>
                                         </div>
                                     @endforeach
                                   </div>
                                 </div> 
                        
                              </div>
                            </div>
                        
                            </div>
                          </section>
                        
                        </main><!-- End #main -->
                        
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