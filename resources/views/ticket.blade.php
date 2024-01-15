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


<body class="bg-dark">

  @include('layout.header')

  <section id="">
   
       <h2 class="text-light text-center">Veuillez remplir le formulaire pour procéder à votre paiement</h2>
      
       <form action="" method="POST" class="container"> 
        @csrf 
         
        <div class=" form-group"> 
          <label class="text-light" for="card_number">Nom et Prénom :</label> 
          <input type="text" name="card_number" id="card_number" class="form-control"> 
        </div> 
        <div class="form-group "> 
          <label class="text-light" for="amount">Film :</label> 
          <select name="etudiant" class="form-select" required>
            <option>Choisissez le film</option>
            @foreach ($film as $film)
            <option value="{{ $film->nom }}">{{ $film->nom }}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group"> 
          <label class="text-light" for="expiry_date">Choisissez le ticket :</label> 
          <select class="form-select" id="selectInput" onchange="updateSecondInput()" required> 
            <option disabled selected hidden class="font-italic">choisissez</option>
            <option value="standard">Standard</option> 
            <option value="vip" >VIP</option> 
          </select> 
        </div> 
        <div class="form-group"> 
          <label class="text-light" for="cvv">Prix :</label> 
          <input class="form-control" type="text" id="secondInput" désactivé /> 
        </div> 
        <div class="form-group">
          
         
          <script> function updateSecondInput() { 
            var selectValue = document.getElementById("selectInput").value; 
            var secondInput = document.getElementById("secondInput"); 
            if (selectValue === "standard") 
            { secondInput.value = "2000f"; } 
            else if (selectValue === "vip") 
            { secondInput.value = "2500f"; } secondInput.disabled = false; 
          } 
            </script>
        </div>
        <div class="form-group">
          <label class="text-light" for="cvv">Choisissez un moyen de paiement :</label><br>
           <input onclick="uncheckOther(this)" type="checkbox" id="cb1" name="payment" value="carte">
           <label class="text-light" for="cb1"><img src="assets/img/a.jpg" style="width: 100px"></label><br> 
           <input onclick="uncheckOther(this)" type="checkbox" id="cb2" name="payment" value="paypal"> 
           <label class="text-light" for="cb2"><img src="assets/img/ligdicash.png" style="width: 100px"></label><br> 
        </div>

        <style> .form-check { display: flex; align-items : center; } </style>
        <script> function uncheckOther(checkbox) 
        { var checkboxes = document.getElementsByName ("payment"); 
        checkboxes.forEach(function(currentCheckbox) 
        { if (currentCheckbox !== checkbox) 
        { currentCheckbox.checked = false; } }); 
        } 
        </script>
        
        <button type="submit" class="btn btn-primary mt-2 text-center">Procéder</button> 
      </form>
  </section>
  </body>
  

  


  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
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
  @include('layout.footer')
  @include('layout.js')
</body>

</html>
