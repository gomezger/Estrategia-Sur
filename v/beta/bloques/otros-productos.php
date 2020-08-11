<?php 
    if(isset($_GET['ocultar'])){
        $ocultar = $_GET['ocultar'];
    }
    if(isset($_GET['ocultar_acero'])){
        $ocultar_acero = $_GET['ocultar_acero'];
    }
?>

<!--
    0: acero latina
    1: frioaltina
    2: bervill
 -->

<div class="clearfix"></div>    

<!-- Features Section Begin -->
<section class="features-section col-12 p-0 pt-5 pb-3 fondo-oscuro-cat">
    <div class="ancla float-left">
        <div id="paneles-aislantes" class="punto"></div>
    </div>
    <div class="container">

        <!-- PRIMER FILA: GRUPO LTN PANELES TERMICOS -->
        <div class="row">                
            <h2 class="text-center col-12 pt-0 pb-0 mb-5 features-paneles clearfix text-light">Otros productos</h2>

            <?php if((isset($ocultar) && $ocultar!=0)){ ?>

            <div class="col-md-4 <?php if(isset($ocultar) && $ocultar!=-1) echo'dos-features'; ?>" onclick="abrirDesplazarDos('acero')">
                <div class="single-features features-paneles border-0">
                    <div class="features-img">
                        <img src="img/features/acero-latina.jpg" alt="Acero Latina">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon feature-icon-mas">
                            <i class="fas fa-angle-double-down pt-2"></i>
                        </div>
                        <h5 class="text-light">Paneles térmicos</h5>
                        <p class="text-center text-light">Acerolatina se dedica a la fabricación y comercialización de paneles y soluciones arquitectónicas con aislamiento térmico y acústico.</p>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if((isset($ocultar) && $ocultar!=1)){ ?>

            <a class="col-md-4 <?php if(isset($ocultar) && $ocultar!=-1) echo'dos-features'; ?>" href="refrigeracion-modular">
                <div class="single-features features-paneles border-0">
                    <div class="features-img">
                        <img src="img/features/frio-latina.jpg" alt="Frio Latina">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon feature-icon-mas">
                            <i class="fas fa-plus pt-2"></i>
                        </div>
                        <h5 class="text-light">Refrigeración modular</h5>
                        <p class="text-center text-light">Friolatina es proveedora de soluciones integrales en cámaras frigoríficas modulares, cerramientos y proyectos llave en mano.</p>
                    </div>
                </div>
            </a>
            <?php } ?>

            <?php if((isset($ocultar) && $ocultar!=2)){ ?>

            <a class="col-md-4 <?php if(isset($ocultar) && $ocultar!=-1) echo'dos-features'; ?>" href="sistemas-refrigeracion">
                <div class="single-features features-paneles border-0">
                    <div class="features-img">
                        <img src="img/features/bervill.jpg" alt="Bervill">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon feature-icon-mas">
                            <i class="fas fa-plus pt-2"></i>
                        </div>
                        <h5 class="text-light">sistemas de refrigeración</h5>
                        <p class="text-center text-light">Bervill se dedica a la fabricación de Equipamientos frigoríficos y unidades condensadoras.</p>
                    </div>
                </div>
            </a>
            <?php } ?>
        </div>
        <!-- SEGUNDA FILA: ACERO LATINA -->
        <div class="row">
            <h2 class="text-center col-12 pt-0 pb-4 mb-4 second-features features-acero clearfix text-light">Paneles térmicos</h2>
            
            <?php if(((isset($ocultar_acero) && $ocultar_acero!=0)) || !isset($ocultar_acero)){ ?>
            <a href="techos-cubiertas" class="col-md-4 <?php if(isset($ocultar) && $ocultar==-1 && isset($ocultar_acero)) echo'dos-features'; ?>">
                <div class="single-features second-features features-acero border-0">
                    <div class="features-img" >
                        <img class="rounded-circle" src="img/features/techos.png" alt="Nova Fusión">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon feature-icon-mas">
                            <i class="fas fa-plus pt-2"></i>
                        </div>
                        <h5 class="text-light">Techos y <strong>cubiertas</strong></h5>
                        <p></p>
                    </div>
                </div>
            </a>
            <?php } ?>

            
            <?php if(((isset($ocultar_acero) && $ocultar_acero!=1)) || !isset($ocultar_acero)){ ?>
            <a href="fachadas-muros" class="col-md-4 <?php if(isset($ocultar) && $ocultar==-1 && isset($ocultar_acero)) echo'dos-features'; ?>">
                <div class="single-features second-features features-acero border-0">
                    <div class="features-img">
                        <img class="rounded-circle" src="img/features/muros.png" alt="Casa Latina">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon feature-icon-mas">
                            <i class="fas fa-plus pt-2"></i>
                        </div>
                        <h5 class="text-light">Fachadas y <strong>muros</strong></h5>
                        <p></p>
                    </div>
                </div>
            </a>
            <?php } ?>

            
            <?php if(((isset($ocultar_acero) && $ocultar_acero!=2)) || !isset($ocultar_acero)){ ?>
            <a href="pisos-entrepisos" class="col-md-4 <?php if(isset($ocultar) && $ocultar==-1 && isset($ocultar_acero)) echo'dos-features'; ?>">
                <div class="single-features second-features features-acero border-0">
                    <div class="features-img">
                        <img class="rounded-circle" src="img/features/pisos.png" alt="Casa Latina">
                    </div>
                    <div class="feature-text">
                        <div class="feature-icon feature-icon-mas">
                            <i class="fas fa-plus pt-2"></i>
                        </div>
                        <h5 class="text-light">Pisos y <strong>entrepisos</strong></h5>
                        <p></p>
                    </div>
                </div>
            </a>
            <?php } ?>
        </div>
        <div class="row">
            <h2 class="text-center col-12 pt-3 pb-4 mb-4 second-features features-prox clearfix">PRÓXIMAMENTE</h2>
            <p class="text-center col-12 second-features features-prox">
                Sección en construcción. Para más información envianos un mensaje haciendo clic <a href="#contacto">acá</a>
            </p>
        </div>
    </div>
</section>
<!-- Features Section End -->