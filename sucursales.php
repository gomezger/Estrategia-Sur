<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Estrategia Sur es una Agencia Comercial con la que nos dedicamos a la representación oficial de marcas líderes en el mercado de la construcción sustentable.">
    <meta name="keywords" content="Acero Latina, Paneles Aislantes, Frio Latina, Bervill, representación comercial, construcción sustentable">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucursales | Estrategia Sur | Paneles Aislantes | Bahía Blanca</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,300i,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/sucursales.css" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147471360-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-147471360-1');
    </script>


    <!-- Icono -->
    <link rel="icon" type="image/png" href="img/logo.png" />

    <!-- Script -->
    <script src="https://kit.fontawesome.com/591d68fa75.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>       
        const sucursales = [
          [
            "Casa Central",
            "Int. Haroldo Casanova 3349 (Oficina 2 - Centro de Desarrollo)",
            "Parque Industrial de Bahía Blanca, Buenos Aires, Argentina",
            "+54 9 291 4360055",
            "Lunes a Viernes de 9hs a 18hs",
            [
              -38.75896,-62.28665
            ]
          ],
          [
            "Neuquen",
            "Av. Siempre Viva",
            "Neuquen, Argentina",
            "+54 9 291 4360055",
            "Lunes a Viernes de 9hs a 18hs",
            [
              -78.75896,-74.28665
            ]

          ]
        ];


        



        function mostrarMapa(i){

          if($(".o-"+i).length != 0){
          	$(".mapa-"+i).fadeIn(250,"swing");
          	$(".mapa-"+i).removeClass("o-"+i);
          	$(".mapa-"+i).removeClass("d-none");
          }else{
          	$(".mapa-"+i).fadeOut(250,"swing");
          	$(".mapa-"+i).addClass("o-"+i);
          	$(".mapa-"+i).addClass("d-none");
          }
        }

            
    </script>
</head>

<body id="inicio">

    <!-- Header Section Begin -->
    <?php include('bloques/header.php'); ?>
    <!-- Header End -->
    
    <!-- TITULO -->
    <section class="titulo">
        <h1>Sucursales</h1>
        <a href="index">
            <img class="marca d-none" alt="Acerolatina" title="Acerolatina" src="img/logos_empresas/acerolatina.jpg"/>
        </a>
    </section>
    <!-- TITULO ENDS-->

    <!-- Sucursales begin -->
    <section class="p-0 sucursales col-12 float-left">
        <div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 pl-3 pr-3 pl-md-0 pr-md-0 container">
          
          <div class="get mt-3">
            <p class="float-left mt-2 mr-4">Buscar ubicación: </p>
            <button class="btn btn-info"onclick="getLocation()">Buscar</button>              
            <p id="demo" class="flaot-left clearfix"></p>              
            <script>
              var x = document.getElementById("demo");
              
              function getLocation() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
                } else { 
                  x.innerHTML = "Geolocation is not supported by this browser.";
                }
              }
              
              function showPosition(position) {
                x.innerHTML = "<br>Latitud: " + position.coords.latitude + 
                "<br>Longitud: " + position.coords.longitude;
              }
            </script> 
          </div>

          <div class="sucursal col-12 float-left ">
            <h3 class="titulo clearfix">Casa Central</h3>
            <div class="col-12 col-md-5 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="fas fa-chevron-right pr-1 mr-1"></i>
                Int. Haroldo Casanova 3349 (Oficina 2 - Centro de Desarrollo)
              </div>
              <div class="fila col-12 p-0">
                  <i class="fas fa-chevron-right pr-1 mr-1"></i>
                  Parque Industrial de Bahía Blanca
              </div>
              <div class="fila col-12 p-0">
                  <i class="fas fa-chevron-right pr-1 mr-1"></i>
                  Buenos Aires, Argentina
              </div>
            </div>
            <div class="col-12 col-md-4 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                  <i class="fas fa-chevron-right pr-1 mr-1"></i>
                  Teléfono: 291 4360055
              </div>
              <div class="fila col-12 p-0">
                  <i class="fas fa-chevron-right pr-1 mr-1"></i>
                  Horario: Lun/Vie:9-20:30|Sab:9-20:30
              </div>
            </div>
            <div class="col-12 col-md-3 m-0 h-100 mt-2 d-inline-block text-center text-md-right float-left ">
              <button onclick="mostrarMapa(0)" type="button" class="btn btn-success mb-4 mb-md-2"><i class="fas fa-map-marked-alt mr-2"></i>Mapa</button>
              <a href="tel:2914360055" class="btn btn-success mb-4 mb-md-2 ml-2 d-md-none"><i class="fas fa-phone mr-2 "></i>Llamar</a>
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35204.56132235907!2d-62.29289103515532!3d-38.7482653334147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95edbd1881506fb3%3A0x8d76d498d6829b0d!2sInt.+Haroldo+Casanova+3349%2C+Bah%C3%ADa+Blanca%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1566576937075!5m2!1ses!2sar"
              style="border:0" allowfullscreen
              class="col-12 p-0 mt-1 mapa-0 o-0 d-none float-left"
            >
            </iframe>
          </div>





         

        </div>
    </section>
    <!-- Sucursales end -->

    
    <!-- CONTACTO Y FOOTER BEGIN -->
    <?php include('bloques/footer.php'); ?>
    <!-- CONTACTO Y FOOTER END -->

    <!-- Js Plugins -->
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/main.js"></script>
</body>

</html>