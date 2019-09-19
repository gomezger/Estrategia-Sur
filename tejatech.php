<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Estrategia Sur es una Agencia Comercial con la que nos dedicamos a la representación oficial de marcas líderes en el mercado de la construcción sustentable.">
    <meta name="keywords" content="Acero Latina, Paneles Aislantes, Frio Latina, Bervill, representación comercial, construcción sustentable">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tejatech | Fachadas y Muros | Estrategia Sur | Paneles Aislantes | Bahía Blanca</title>

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
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/tejatech.css" type="text/css">

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

</head>

<body id="inicio">
    <!-- HEADER Begin -->
    <?php include('bloques/header.php') ?>
    <!-- HEADER End -->

    <!-- TITULO -->
    <section class="titulo bg-dark">
        <h1>Tejatech</h1>
        <a href="index">
            <img class="marca" width="170px" alt="Acerolatina" title="Acerolatina" src="img/logos_empresas/acerolatina.jpg"/>
        </a>
        <h2>Techos y cubiertas</h2>
    </section>
    <!-- TITULO ENDS-->

    <!-- PORTADA Begin -->
    <section class="pl-0 pr-0 portada col-12 float-left">
		<div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">
            <div class="imagen">
                <img src="img/techos-cubiertas/tejatech/tejatech-1.png"/>
            </div>
            <div class="imagen d-none">
                <img src="img/techos-cubiertas/tejatech/tejatech-2.png"/>
            </div>
            <div class="texto">
                Es un nuevo concepto para la arquitectura moderna y sustentable. En su diseño innovador, Tejatech combina el
                estilo de la teja tradicional con la alta resistencia del acero y las propiedades térmicas del poliuretano o 
                poliisocianurato, ofreciendo una gran capacidad de aislación térmica y acústica, alta versatilidad, facilidad 
                de instalación, capacidad autoportante y múltiples posibilidades de terminaciones.
            </div>
        </div>
    </section>
    <!-- PORTADA End -->



    <div class="clearfix"></div>

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
    <script>
        const param = getURLParameter('t');  
        if(param!=null){
            document.getElementById("mensaje-contacto").innerHTML = param;
        }
    </script>
</body>

</html>