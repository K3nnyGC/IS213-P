 <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #205448;
  }
  .carousel-indicators li {
      border-color: #205448;
  }
  .carousel-indicators li.active {
      background-color:  #205448;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #205448;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #205448;
      background-color: #fff !important;
      color: #205448;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #205448; !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #205448;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #205448;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #205448; !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #205448;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  
  .panel-default>.panel-heading {
    background-color: #205448 !important;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>

<!-- Container (About Section) -->
<div id="about" class="container-fluid" style="background-color: white;">
  <div class="row">
    <div class="col-sm-8">
      <h2 style="text-align:justify;">Acerca de la empresa</h2><br>
      <h4 style="text-align:justify;">MySchool es un aplicativo basado en una Arquitectura SOA que permitir&aacute; integrar servicios creados en diferentes lenguajes y que se despliegan en diferentes plataformas (SUNAT, RENIEC, Bancos). Los propietarios y directivos de los colegios tendr&aacute;n acceso a informaci&oacute;n actualizada para la toma de decisiones y la aplicaci&oacute;n de las correcciones.</h4><br>
      <p style="text-align:justify;">Con la implementaci&oacute;n del aplicativo My School empleando la metodolog&iacute;a SOA, se lograr&aacute; que los cambios a los componentes individuales sean m&aacute;s f&aacute;ciles de realizar, sin afectar al resto del sistema. La arquitectura del sistema permite la interoperabilidad de los procesos, aunque hayan sido creados en diferentes momentos y as&iacute;, aumentar los niveles de flexibilidad y agilidad para satisfacer de modo eficiente las diferentes necesidades que surjan o que soliciten los colegios.</p>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo" style="color: #205448;"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"  style="color: #205448;"></span>
    </div>
    <div class="col-sm-8">
      <h2>Nuestros valores</h2><br>
      <h4 style="text-align:justify;"><strong>MISION:</strong> Con el uso de esta aplicaci&oacute;n, esperamos los siguientes resultados:
        <ul>
        <li>Padres de familia muy satisfechos.</li>
        <li>Alumnos m&aacute;s comprometidos con sus estudios.</li>
        <li>Personal administrativo del colegio m&aacute;s involucrado con la ense&ntilde;anza.</li>
        </ul>
        </h4><br>
      <p  style="text-align:justify;"><strong>VISION:</strong>Ser una de las aplicaciones m&aacute;s utilizadas en el sector educativo en un corto plazo.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center" style="background-color:white;">
  <h2>SERVICIOS</h2>
  <h4>QUE OFRECEMOS?</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small" style="color: #205448;"></span>
      <h4>CONTROL</h4>
      <p>Manten el C.E. en tus manos</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small" style="color: #205448;"></span>
      <h4>CARI&Ntilde;O</h4>
      <p>Tratamos a tus usuarios como se merecen</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small" style="color: #205448;"></span>
      <h4>SEGURIDAD</h4>
      <p>Tu informacion en el mejor lugar.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small" style="color: #205448;"></span>
      <h4>AMIGABLE</h4>
      <p>Con interfases totalmente intiutivas.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small" style="color: #205448;"></span>
      <h4>LAUREADOS</h4>
      <p>El mejor servicio de intranet que encontrar&aacute;s</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small" style="color: #205448;"></span>
      <h4 style="color:#303030;">A TU MEDIDA</h4>
      <p>Configurado bajo tus necesidades.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">

  
  <h2>Nuestros clientes dicen...</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators"  style="color: #205448;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Contrat&eacute MySchool para administrar mi centro educativo<br> y desde entonces tengo toda la informacion al alcance de mi mano."<br><span>Roberto LLanos, Promotor C.E. Los Angeles</span></h4>
      </div>
      <div class="item">
        <h4>"Pusieron MySchool en mi colegio, ahora lo sabr&eacute; todo!"<br><span>Mar&iacute;a Flores, Abogada</span></h4>
      </div>
      <div class="item">
        <h4>"Usarlo? M&aacute;s facil imposible!"<br><span>Lorenzo Carrillo, Fotografo, 3 hijos</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #205448;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #205448;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid" style="background-color: white;">
  <div class="text-center">
    <h2>Tarifas</h2>
    <h4>Elige un plan de pagos que te funcione!</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>1</strong> Base de Datos</p>
          <p><strong>150</strong> Usuarios</p>
          <p><strong>300</strong> Alumnos</p>
          <p><strong>20</strong> Cursos</p>
          <p><strong>Servicio de pagos</strong> No</p>
        </div>
        <div class="panel-footer">
          <h3>Gratis</h3>
          <h4>*Prueba por un mes</h4>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>10</strong> Base de Datos</p>
          <p><strong>1500</strong> Usuarios</p>
          <p><strong>3000</strong> Alumnos</p>
          <p><strong>200</strong> Cursos</p>
          <p><strong>Servicio de pagos</strong> Limitado</p>
        </div>
        <div class="panel-footer">
          <h3>$150</h3>
          <h4>por mes</h4>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>Ilimitado</strong> Base de Datos</p>
          <p><strong>Ilimitado</strong> Usuarios</p>
          <p><strong>Ilimitado</strong> Alumnos</p>
          <p><strong>Ilimitado</strong> Cursos</p>
          <p><strong>Servicio de pagos</strong> Si</p>
        </div>
        <div class="panel-footer">
          <h3>$1350</h3>
          <h4>por mes</h4>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactenos, contestamos de rayo!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Lima, PER</p>
      <p><span class="glyphicon glyphicon-phone"></span> +51 985474856</p>
      <p><span class="glyphicon glyphicon-envelope"></span> admin@myschool.com</p>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>