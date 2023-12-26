{{-- <!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
    
</head>
  
<body class="bg-dark">

  <style>
    .bloc{
    position: relative;  
    height: 86vh;
    width: 980px;
    overflow: hidden;
 
}

  .slider{
    position: relative;
    box-shadow: 0px 0px black;   
    border-radius : 3%; 
  }

  .slider video{
    object-fit: cover;
    pointer-events: none;
    filter: brightness(35%)
  }

  .slider p{
    position: absolute;
    top: 75%;
    left: 10%;
    color: #fff;
  }
  .slider h1{
    position: absolute;
    top: 60%;
    left: 10%;
    color: #D4AF37;
    font-size:4rem;
  }

  .voir{
    position: absolute;
    top: 90%;
    left: 10%;
  }
  </style> 

<div class="row mt-3">
  <div class="row col-lg-8">
<img src="assets\img\logo2.png" alt="eciné" href="#" style="width: 150px">
<input type="text" placeholder="Rechercher des films" style="width: 500px; color:black">
  </div>

  <div class="col-lg-4 ">
<a href="{{route('register')}}"><button class="btn btn-light">S'inscrire</button></a>
<a href="{{route('login')}}"><button class="btn btn-danger">Se connecter</button></a>
  </div>
</div>

<div class="row mt-2 bg-secondary ">
<div class="col-lg-6 bloc m-4 slider">
 <video playsinline autoplay muted loop><source src="golden.mp4"></video>
  <h1>Golden</h1>
  <p>Construite autour du personnage principal Jams, «Golden» met en exergue une
     famille qui se bat pour sauver son patrimoine qu’elle a mis 30 ans à construire. 
     Cela contre une horde d’ennemis qui sont prêts à user de toutes <br> les stratégies 
     pour la détruire...</p>
  <a class="voir" href=""><button class="btn btn-danger">Payer un ticket</button></a>
</div>
<div class="col-lg-3 mt-3">
  <img src="assets\img\mi.jpg"  style="width: 200px; margin-top: 8px; box-shadow: 0px 0px black; border-radius : 3%; ">
  <h5 class="text-light"><a href="{{route('dashboard')}}" class="text-light">Mission: impossible - <br> Dead Reckoning Partie 1</a></h5>
  <img src="assets\img\sp.jpg" alt="" style="width: 200px; margin-top: 10px; box-shadow: 0px 0px black; border-radius : 3%;">
  <h5 class="text-light"><a href="{{route('dashboard')}}" class="text-light">SpiderMan</a></h5>
  <img src="assets\img\m.jpg" alt="" style="width: 200px; margin-top: 10px; box-shadow: 0px 0px black; border-radius : 3%;">
  <h5 class="text-light"><a href="{{route('dashboard')}}" class="text-light">MAMAN, j'ai encore <br>raté l'avion</a></h5>
</div>
</div>
   



  @include('layouts.js')
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.style')
    
</head>


<body>

  
  @include('layout.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <style>
      .contain {
    position: absolute;
    height: 600px;
    width: 1000px;
    top: 60px;
    left: calc(50% - 487px);
    display: flex;
  }
  
  .car{
    display: flex;
    height: 300px;
    width: 400px;
    background-color: #17141d;
    border-radius: 10px;
    box-shadow: -1rem 0 3rem #000;
  /*   margin-left: -50px; */
    transition: 0.4s ease-out;
    position: relative;
    left: 0px;
  }
  
  .car:not(:first-child) {
      margin-left: -50px;
  }
  
  .car:hover {
    transform: translateY(-20px);
    transition: 0.4s ease-out;
  }
  
  .car:hover ~ .card {
    position: relative;
    left: 50px;
    transition: 0.4s ease-out;
  }
  
  .bt {
  position: absolute;
  top: 150px;
  left: calc(50% - 30px);
}
  .title {
    color: white;
    font-weight: 300;
    position: absolute;
    left: 20px;
    top: 15px;
  }
  
  .stroke {
    stroke: white;
    stroke-dasharray: 360;
    stroke-dashoffset: 360;
    transition: 0.6s ease-out;
  }
  
  
  .car:hover .stroke {
    stroke-dashoffset: 100;
    transition: 0.6s ease-out;
  }
    </style>
    
    
  </body>
  </section>

  
  
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

      
       

      </div>
    </section><!-- End Services Section -->

  
   

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  @include('layout.footer')
  @include('layout.js')
</body>

</html>
