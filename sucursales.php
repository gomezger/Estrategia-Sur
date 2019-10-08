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

        //Datos de sucursales
        const sucursales = [
          [0, "Bahía Blanca", [-38.75896,-62.28665]],
          [1, "Neuquén", [-38.967685,-68.07071]],
          [2, "Zapala", [-38.894071,-70.08688]],
          [3, "Añelo", [-38.356708, -68.764427]],
          [4, "Trelew", [-43.260738,-65.347481]],
        ];
       
        function sucursalCercana(){
          //si tenemos soporte de geolocalizacion
          if (navigator.geolocation) {
            
            navigator.geolocation.getCurrentPosition(
              function (datos){
                //guardo la ubicacion
                const lat = datos.coords.latitude;
                const lon = datos.coords.longitude;

                let cercana = 0;
                let distancia = -1;

                //recorro las opciones
                sucursales.forEach(function(sucursal) {
                  //obtengo la distnacia mia con la sucursal
                  const dis = distanciaEuclidiana([lat,lon],sucursal[2]);

                  //si es -1 o es mas corta la distancia, cambio
                  if(distancia==-1 || dis<distancia){
                    distancia = dis;
                    cercana = sucursal[0];
                  }

                });

                //alert("La sucursal más cercana es "+sucursales[cercana][1]+".");   
                desplazarSucursal("#sucursal-"+cercana);
                $('.cercana-'+cercana).removeClass("d-none");

              },
              function(){     
                $('#permisos').modal('show'); 
              } 
            );

          //no tenemos soporte de geolocalizacion
          }else{ 
            $('#noTiene').modal('show'); 
          }

        }

        function distanciaEuclidiana(l1,l2){
          const x = Math.pow(l2[0]-l1[0],2);
          const y = Math.pow(l2[1]-l1[1],2);          
          return Math.pow(x+y,0.5);
        }


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
    <section class="pr-0 pl-0 sucursales col-12 float-left">
        <div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 pl-3 pr-3 pl-md-0 pr-md-0 container">
          
          <div class="get mt-3 text-center text-md-right">
            <button class="btn btn-info mt-3" onclick="sucursalCercana()">
              <i class="fas fa-map-marker-alt mr-2"></i>
              Buscar sucursal más cercana
            </button>     
          </div>

          <!-- BAHIA BLANCA CASA CENTRAL -->
          <div id="sucursal-0" class="sucursal col-12 float-left ">
            <h3 class="titulo clearfix">Casa Central<span class="d-none ml-2 text-dark cercana-0">(más cercana)</span></h3>
            <div class="col-12 col-md-5 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="far fa-building mr-2"></i>
                Int. Haroldo Casanova 3349 (Oficina 2 - Centro de Desarrollo)
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-map-marker-alt mr-2"></i>
                  Parque Industrial de Bahía Blanca
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-globe-europe mr-2"></i>
                  Buenos Aires, Argentina
              </div>
            </div>
            <div class="col-12 col-md-4 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="fas fa-phone mr-2"></i>
                  Teléfono: +54 9 291 4360055
              </div>
              <div class="fila col-12 p-0">
                  <i class="far fa-clock mr-2"></i>
                  Horario: Lun a Vie de 9hs a 18hs
              </div>
              <div class="fila col-12 p-0">
                <i class="far fa-envelope mr-2"></i>
                  info@estrategiasur.com.ar
              </div>
            </div>
            <div class="col-12 col-md-3 m-0 h-100 mt-2 d-inline-block text-center text-md-right float-left ">
              <button onclick="mostrarMapa(0)" type="button" class="btn btn-success mb-4 mb-md-2"><i class="fas fa-map-marked-alt mr-2"></i>Mapa</button>
              <a href="tel:2914360055" class="btn btn-success mb-4 mb-md-2 ml-2 d-md-none"><i class="fas fa-phone mr-2 "></i>Llamar</a>
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31055.154297102614!2d-62.287013097863564!3d-38.76677088150657!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41b9a383b5ab43c8!2sEstrategia%20Sur%20-%20Agencia%20Comercial!5e0!3m2!1ses!2sar!4v1570473498814!5m2!1ses!2sar"
              style="border:0" allowfullscreen
              class="col-12 p-0 mt-1 mapa-0 o-0 d-none float-left"
            >
            </iframe>
          </div>
          <!-- FIN BAHIA BLANCA CASA CENTRAL -->
          
          <!-- NEUQuEN CASA CENTRAL -->
          <div id="sucursal-1" class="sucursal col-12 float-left ">
            <h3 class="titulo clearfix">Jorge Fernández & Reynaldo Hermosilla<span class="d-none ml-2 text-dark cercana-1">(más cercana)</span></h3>
            <div class="col-12 col-md-5 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="far fa-building mr-2"></i>
                Int. Chaneton 1195
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-map-marker-alt mr-2"></i>
                Neuquén Capital
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-globe-europe mr-2"></i>
                Neuquén, Argentina
              </div>
            </div>
            <div class="col-12 col-md-4 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="fas fa-phone mr-2"></i>
                  Teléfono: +54 9 299 6356025
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-phone mr-2"></i>
                  Teléfono: +54 9 299 6011310
              </div>
              <div class="fila col-12 p-0">
                <i class="far fa-envelope mr-2"></i>
                  info.neuquen@estrategiasur.com.ar
              </div>
            </div>
            <div class="col-12 col-md-3 m-0 h-100 mt-2 d-inline-block text-center text-md-right float-left ">
              <button onclick="mostrarMapa(1)" type="button" class="btn btn-success mb-4 mb-md-2"><i class="fas fa-map-marked-alt mr-2"></i>Mapa</button>
              <a href="tel:2996356025" class="btn btn-success mb-4 mb-md-2 ml-2 d-md-none"><i class="fas fa-phone mr-2 "></i>Llamar</a>
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12408.347281293818!2d-68.0707097!3d-38.9676855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x263ace44644d88fe!2sHojalateria%20Hermosilla!5e0!3m2!1ses!2sar!4v1570483211463!5m2!1ses!2sar"
              style="border:0" allowfullscreen
              class="col-12 p-0 mt-1 mapa-1 o-1 d-none float-left"
            >
            </iframe>
          </div>
          <!-- FIN NEUQuEN CASA CENTRAL -->

          <!-- zapala CASA CENTRAL -->
          <div id="sucursal-2" class="sucursal col-12 float-left ">
            <h3 class="titulo clearfix">Arquitecta Leda Gropa<span class="d-none ml-2 text-dark cercana-2">(más cercana)</span></h3>
            <div class="col-12 col-md-5 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="far fa-building mr-2"></i>
                Aluminé 1469
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-map-marker-alt mr-2"></i>
                Zapala
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-globe-europe mr-2"></i>
                Neuquén, Argentina
              </div>
            </div>
            <div class="col-12 col-md-4 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="fas fa-phone mr-2"></i>
                  Teléfono: +54 9 2942 356413
              </div>
              <div class="fila col-12 p-0">
                <i class="far fa-envelope mr-2"></i>
                info.zapala@estrategiasur.com.ar
              </div>
            </div>
            <div class="col-12 col-md-3 m-0 h-100 mt-2 d-inline-block text-center text-md-right float-left ">
              <button onclick="mostrarMapa(2)" type="button" class="btn btn-success mb-4 mb-md-2"><i class="fas fa-map-marked-alt mr-2"></i>Mapa</button>
              <a href="tel:2942356413" class="btn btn-success mb-4 mb-md-2 ml-2 d-md-none"><i class="fas fa-phone mr-2 "></i>Llamar</a>
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12421.232067805691!2d-70.0868802!3d-38.8940711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fc74b7757911db3!2sFines%20SRL!5e0!3m2!1ses!2sar!4v1570483228670!5m2!1ses!2sar"
              style="border:0" allowfullscreen
              class="col-12 p-0 mt-1 mapa-2 o-2 d-none float-left"
            >
            </iframe>
          </div>
          <!-- FIN zapala CASA CENTRAL -->    
          
          <!-- añelo CASA CENTRAL -->
          <div id="sucursal-3" class="sucursal col-12 float-left ">
            <h3 class="titulo clearfix">Arquitecto Pedro Montes de Oca<span class="d-none ml-2 text-dark cercana-3">(más cercana)</span></h3>
            <div class="col-12 col-md-5 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="far fa-building mr-2"></i>
                Ruta provincial 7, km 98, Lote 11
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-map-marker-alt mr-2"></i>
                Añelo
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-globe-europe mr-2"></i>
                Neuquén, Argentina
              </div>
            </div>
            <div class="col-12 col-md-4 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="fas fa-phone mr-2"></i>
                  Teléfono: +54 9 221 601-8715
              </div>
              <div class="fila col-12 p-0">
                <i class="far fa-envelope mr-2"></i>
                info.anelo@estrategiasur.com.ar
              </div>
            </div>
            <div class="col-12 col-md-3 m-0 h-100 mt-2 d-inline-block text-center text-md-right float-left ">
              <button onclick="mostrarMapa(3)" type="button" class="btn btn-success mb-4 mb-md-2"><i class="fas fa-map-marked-alt mr-2"></i>Mapa</button>
              <a href="tel:2216018715" class="btn btn-success mb-4 mb-md-2 ml-2 d-md-none"><i class="fas fa-phone mr-2 "></i>Llamar</a>
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11812.686863039247!2d-68.77794427756766!3d-38.3541570157619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDIxJzI0LjIiUyA2OMKwNDUnNTEuOSJX!5e0!3m2!1ses!2sar!4v1570540160965!5m2!1ses!2sar"
              style="border:0" allowfullscreen
              class="col-12 p-0 mt-1 mapa-3 o-3 d-none float-left"
            >
            </iframe>
          </div>
          <!-- Añelo CASA CENTRAL --> 
          
          <!-- Trelew CASA CENTRAL -->
          <div id="sucursal-4" class="sucursal col-12 float-left ">
            <h3 class="titulo clearfix">Mario Chaparro<span class="d-none ml-2 text-dark cercana-4">(más cercana)</span></h3>
            <div class="col-12 col-md-5 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="far fa-building mr-2"></i>
                26 De Noviembre Norte 350
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-map-marker-alt mr-2"></i>
                Trelew
              </div>
              <div class="fila col-12 p-0">
                <i class="fas fa-globe-europe mr-2"></i>
                Chubut, Argentina
              </div>
            </div>
            <div class="col-12 col-md-4 p-0 pl-0 pl-md-2 m-0 d-inline-block float-left ">
              <div class="fila col-12 p-0">
                <i class="fas fa-phone mr-2"></i>
                  Teléfono: +54 9 280 4347205
              </div>
              <div class="fila col-12 p-0">
                <i class="far fa-envelope mr-2"></i>
                info.trelew@estrategiasur.com.ar
              </div>
            </div>
            <div class="col-12 col-md-3 m-0 h-100 mt-2 d-inline-block text-center text-md-right float-left ">
              <button onclick="mostrarMapa(4)" type="button" class="btn btn-success mb-4 mb-md-2"><i class="fas fa-map-marked-alt mr-2"></i>Mapa</button>
              <a href="tel:2804347205" class="btn btn-success mb-4 mb-md-2 ml-2 d-md-none"><i class="fas fa-phone mr-2 "></i>Llamar</a>
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11622.22186043036!2d-65.3474813!3d-43.2607376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x428aead46593a37a!2sMetal%C3%BArgica%20Chaparro%20Alquiler%20de%20Hidrogruas!5e0!3m2!1ses!2sar!4v1570483260744!5m2!1ses!2sar"
              style="border:0" allowfullscreen
              class="col-12 p-0 mt-1 mapa-4 o-4 d-none float-left"
            >
            </iframe>
          </div>
          <!-- Trelew CASA CENTRAL -->   
        </div>
    </section>
    <!-- Sucursales end -->

    
    <!-- CONTACTO Y FOOTER BEGIN -->
    <?php include('bloques/footer.php'); ?>
    <!-- CONTACTO Y FOOTER END -->



    <!-- Modal permisos -->
    <div class="modal fade" id="permisos" tabindex="-1" role="dialog" aria-labelledby="permisosLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="permisosLabel">No podemos buscar la sucursal más cercana</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Para poder buscar la sucursal más cercana, necesitamos que nos des permisos para conocer tu ubicación. 
            Estrategia Sur no guarda ninguna información sobre tu localización.
          </div>
          <div class="modal-footer text-center">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal noTiene -->
    <div class="modal fade" id="noTiene" tabindex="-1" role="dialog" aria-labelledby="noTieneLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="noTieneLabel">No podemos buscar la sucursal más cercana</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Su navegador no tiene soporte de geolocalización. Pruebe utilizando un navegador como Google Chrome.
          </div>
          <div class="modal-footer text-center">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

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