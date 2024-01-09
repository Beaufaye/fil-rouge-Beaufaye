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
                          <img src="ass\img\logo2.png"
                          alt="login form" style="width:150px" />
                        </div><!-- End Page Title -->
                        <section class="section dashboard">
                      
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{session('status')}}
                              </div>
                          @endif
                          
                          <div class="row">
                            <form action="{{route('filmst')}}" method="POST" class="form-group" enctype="multipart/form-data">
                              @csrf
                              
                              <div class="mb-3 row">
                                  <label for="nom" class="col-sm-2 col-form-label">Nom du film</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="nom" class="form-control" required>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="nom" class="col-sm-2 col-form-label">Durée du film</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="duree" class="form-control" required>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="type" class="col-sm-2 col-form-label">Type du film</label>
                                  <div class="col-sm-10">
                                          <select class="form-select"  name="type" aria-label="Default select example" required> 
                                            <option value="Action">Action</option>
                                            <option value="Animation">Animation</option>
                                            <option value="Aventure">Aventure</option>
                                            <option value="Comédie">Comédie</option>
                                            <option value="Comédie dramatique">Comédie dramatique</option>
                                            <option value="Documentaire">Documentaire</option>
                                            <option value="Drame">Drame</option>
                                            <option value="Fantastique">Fantastique</option>
                                            <option value="Guerre">Guerre</option>
                                            <option value="Horreur">Horreur</option>
                                            <option value="Policier">Policier</option>
                                            <option value="Roman">Roman</option>
                                            <option value="Science-fiction">Science-fiction</option>
                                            <option value="Western">Western</option>
                                        </select>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="nom" class="col-sm-2 col-form-label">Description du film</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="description" class="form-control" required>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="photo" class="col-sm-2 col-form-label">Jour</label>
                                  <div class="col-sm-10">
                                      <select class="form-select" name="jour" aria-label="Default select example" required> 
                                        <option value="Lundi">Lundi</option>
                                        <option value="Mardi">Mardi</option>
                                        <option value="Mercredi">Mercredi</option>
                                        <option value="Jeudi">Jeudi</option>
                                        <option value="Vendredi">Vendredi</option>
                                        <option value="Samedi">Samedi</option>
                                        <option value="Dimanche">Dimanche</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="description" class="col-sm-2 col-form-label">Heure</label>
                                  <div class="col-sm-10">
                                    <input type="time" name="heure" class="form-control" required>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="description" class="col-sm-2 col-form-label">Version</label>
                                  <div class="col-sm-10">
                                    <select class="form-select" name="version" aria-label="Default select example" required> 
                                      <option value="VF">VF</option>
                                      <option value="VOSTFR">VOST FR</option>
                                  </select>
                                </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                  <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" required>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="lien" class="col-sm-2 col-form-label">Lien de la Bande annonce</label>
                                  <div class="col-sm-10">
                                    <input type="text" name="lien" class="form-control" required>
                                  </div>
                                </div>
                                
                                <button type="submit" class="btn btn-dark">ENREGISTRER</button>
                                <a href="{{route('film')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES FILMS</button></a>
                            </form>
                      
                      
                      
                          </div>
                        </section>
                      
                      </main><!-- End #main -->  
                       
                </main><!-- End #main -->
                        
                @include('layouts.js')
    </body>
</html>