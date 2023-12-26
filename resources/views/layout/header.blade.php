<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center ">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">cineburkina@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +226 76044342
      </div>
      <div>
        <input class="bg-dark text-light" id="search" type="search" placeholder="Rechercher un film" style="width: 500px; color:black; border-radius: 5px;" onchange="ouvrirPage()">
        <script>
          function ouvrirPage(){
            var a = document.getElementById("search").value;

            if(a === "ticket"){
              window.open("")
            }
          }
        </script>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://www.facebook.com/profile.php?id=100057585123833" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="" class="facebook"><i class="bi bi-instagram"></i></a>
        <a href="" class="facebook"><i class="bi bi-twitter"></i></a>
        </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="{{route('welcome')}}"><span class="text-primary">CINÉ</span> <span class="text-danger">BURKINA</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="{{route('alaf')}}"><span>A L'AFFICHE</span></a>
          </li>
          <li class="dropdown"><a href=""><span>PROCHAINEMENT</span></a>
          </li>
          <li><a class="nav-link scrollto" href="{{route('contact')}}">CONTACT</a></li>
          <a href="{{route('ticket')}}"><button class="btn btn-danger">ACHETER UN TICKET</button></a>
          <a href="{{route('dashboard')}}"><button class="btn btn-primary">ESPACE ADMIN</button></a>
          </li>
        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->