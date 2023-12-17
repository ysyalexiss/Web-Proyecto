<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”keywords” content=”HTML5, CSS3, Javascript”>    
    <link rel="stylesheet" type="text/css" href="css/barraNav.css">
    <link rel="stylesheet" type="text/css" href="css/acerca.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="AltaPersona.php">        
        <span class="text-white fs-3 fw-bold" ><img src="img/mercado.jpg" alt="" width="100" height="100">Mercado</span>
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.blade.php">
              <span class="fs-5">Inicio</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">
              <span class="fs-5">Productos</span>
            </a>
        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contactanos.blade.php">
                <span class="fs-5">Contactanos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Acercade.blade.php">
                <span class="fs-5">Acerca de</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="loginC.php">
                <span class="fs-5">Inicia Sesión</span>
            </a>
          </li>
      </ul>
    </div>
  </div>
   <a class="navbar-brand" href="#">
    <span class="text-white fs-3 fw-bold text-right" id="catalogo">Bienvenido!</span>
   </a>
</nav>

 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="img/carrusel/carrusel1.jpg" class="d-block w-100" alt="Imagen 1" width="640" height="450">
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/carrusel/carrusel2.png" class="d-block w-100" alt="imagen 2" width="640" height="450">
      </div>


    </div>

 </div>

  <!-- Intro -->
   <section class="w-50 mx-auto text-center pt-5"id="intro">
      <h1 class="text-dark p-3 fs-2 border-top border-4">Extenso, Innovador y Exclusivo surtido de los mejores productos para tu hogar<span></span></h1>
      <p><span></span></p>
   </section>

  <!-- Categorias -->
   <section class="container-fluid ">
      <div class="row w-75 mx-auto border-bottom border-4 servicio-fila">

          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
              <img src="img/categorias/lacteos.jpg" alt="Escolares" width="180" height="160">
              <div>
                  <a href="vistaLacteos.php" style="text-decoration: none;"><h3 class="text-success fs-2 mt-4 px-4 pb-1">Lacteos</h3></a>
                  <p class="px-4 fs-5">Los lácteos comprenden productos obtenidos a partir de la leche, tales como leche, queso, yogur y mantequilla. Constituyen una fuente fundamental de nutrientes esenciales como calcio, proteínas y vitaminas. Disponemos de una amplia gama de productos lácteos frescos y de calidad.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/aseo.png" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaCuidado.php" style="text-decoration: none;"><h3 class="text-info fs-2 mt-4 px-4 pb-1">Cuidado y aseo personal</h3></a>
                <p class="px-4 fs-5">En la sección destinada al cuidado y aseo personal, descubrirás una diversidad de productos diseñados para apoyarte en el mantenimiento de una higiene apropiada y lograr una apariencia fresca y saludable.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/abarrotes.jpg" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaAbarrotes.php" style="text-decoration: none;"><h3 class="text-danger fs-2 mt-4 px-4 pb-1">Abarrotes</h3></a>
                <p class="px-4 fs-5">Dentro de nuestra sección de comestibles, podrás explorar una extensa variedad de productos fundamentales para tu hogar y cocina.</p>
          </div>
        </div>
      </div>
      <div class="row w-75 mx-auto border-bottom border-4 servicio-fila">
        
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
              <img src="img/categorias/bebidas.png" alt="Escolares" width="180" height="160">
              <div>
                  <a href="vistaBebidas.php" style="text-decoration: none;"><h3 class="text-success fs-2 mt-4 px-4 pb-1">Bebidas y licores</h3></a>
                  <p class="px-4 fs-5">En nuestra sección de bebidas y licores, encontrarás una amplia variedad de bebidas refrescantes, jugos naturales, cervezas, vinos y licores para todas las ocasiones. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/limpieza.jpg" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaLimpieza.php" style="text-decoration: none;"><h3 class="text-info fs-2 mt-4 px-4 pb-1">Limpieza para el hogar </h3></a>
                <p class="px-4 fs-5">En nuestra sección de limpieza del hogar, encontrarás una amplia variedad de productos para mantener tu hogar limpio y ordenado.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/farmacia.png" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaFarmacia.php" style="text-decoration: none;"><h3 class="text-danger fs-2 mt-4 px-4 pb-1">Farmacia</h3></a>
                <p class="px-4 fs-5">En nuestra sección de farmacia, encontrarás una amplia variedad de productos para el cuidado de la salud y el bienestar. Ofrecemos una selección de medicamentos de venta libre.</p>
          </div>
        </div>
      </div>
      
   </section>



   

  <!-- Pie de pagina -->
   <footer class="w-100  justify-content-center ">
      <p class="fs-5 px-3 pt-3">IngenierITOs &copy; Todos los derechos reservados 2023</p>
      <div id="iconos">
          <a href="https://www.facebook.com"><i class="bi bi-facebook"></i></i></i></a>
          <a href="#"><i class="bi bi-twitter"></i></i></i></a>
          <a href="#"><i class="bi bi-instagram"></i></i></i></a>
      </div>
   </footer>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

