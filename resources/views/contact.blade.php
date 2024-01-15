<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.style')
    
</head>


<body class="bg-dark">

  @include('layout.header')

  <section id="">
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact bg-secondary">
        <div class="container">
  
    
          <div class="section-title">
            <span>Contact</span>
            <h2>Contact</h2>
  
          </div>
  
          <div class="row" data-aos="fade-up">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3 class="text-light">Notre Adresse</h3>
                <p class="text-light">9F8H+VP Ouagadougou, Burkina Faso</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3 class="text-light">Envoyez-nous un mail</h3>
                <p class="text-light">cinéburkina@gmail.com</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3 class="text-light">Appellez-nous</h3>
                <p class="text-light">+226 76044342</p>
              </div>
            </div>
  
          </div>
  
          <div class="row" data-aos="fade-up">
  
            <div class="col-lg-6 ">
              <iframe class="mb-4 mb-lg-0 php-email-form" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.235748789308!2d-1.5232136262788842!3d12.367134727845189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe20771543bf%3A0xc177f0385d89d534!2sCin%C3%A9%20Burkina%20Faso!5e0!3m2!1sfr!2sbf!4v1703212454166!5m2!1sfr!2sbf" frameborder="0" style="border:0; width: 100%; height: 367px;" allowfullscreen></iframe>
            </div>
  
            <div class="col-lg-6">
              <form action="" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="sujet" id="subject" placeholder="Sujet" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" style="border-radius: 5px">Envoyer Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
     
  </section>
  </body>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  @include('layout.footer')
  @include('layout.js')
</body>

</html>
