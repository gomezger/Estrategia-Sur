<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Estrategia Sur es una Agencia Comercial con la que nos dedicamos a la representación oficial de marcas líderes en el mercado de la construcción sustentable.">
    <meta name="keywords" content="Acero Latina, Paneles Aislantes, Frio Latina, Bervill, representación comercial, construcción sustentable">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refrigeración Modular | Estrategia Sur | Paneles Aislantes | Bahía Blanca</title>

    <!-- Icono -->
    <link rel="icon" type="image/png" href="img/logo.png" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,300i,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="lib/fontawesome/css/all.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/acero-latina.css" type="text/css">
    <link rel="stylesheet" href="css/frio-latina.css" type="text/css">

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="lib/fontawesome/js/all.js"></script>
    <script src="js/funciones.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147471360-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-147471360-1');
    </script>

</head>

<body id="inicio">

    
    <!-- botones Begin -->
    <?php 
        $lugar_volver_url = 'index#paneles-aislantes';
        $lugar_volver = 'Paneles Aislantes';
        include('bloques/botones.php');         
    ?>
    <!-- botones End -->


    <!-- HEADER Begin -->
    <?php include('bloques/header.php'); ?>
    <!-- HEADER End -->

    <!-- TITULO -->
    <section class="titulo bg-dark fondo-frio">
        <h1>Refrigeración Modular</h1>
        <a href="index#paneles-aislantes">
            <img class="marca" width="170px"  alt="Acerolatina" title="Acerolatina" src="img/logos_empresas/friolatina.jpg"/>
        </a>
    </section>
    <!-- TITULO ENDS-->

    <div class="clearfix"></div>

    <!-- CONTACTO Y FOOTER BEGIN -->
    <?php include('bloques/footer.php'); ?>
    <!-- CONTACTO Y FOOTER END -->



    <!-- Js Plugins -->
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