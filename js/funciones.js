/**
 * Oculta todas las clases second-features y 
 * muestra con efecto de deslizar para abajo features+$tipo
 * y luego llama a desplazar
 * @param {*} tipo String que tiene el tipo de features
 */ 
function abrirDesplazar(tipo){
    $(".second-features").hide();
    $(".features-"+tipo).slideDown("slow");
    desplazar(".features-"+tipo);
}
/**
 * Oculta todas las clases second-features y 
 * muestra con efecto de deslizar para abajo features+$tipo
 * y luego llama a desplazar
 * @param {*} tipo String que tiene el tipo de features
 */ 
function abrirDesplazarDos(tipo){
    $(".second-features").hide();
    $(".features-"+tipo).slideDown("slow");
    desplazar(".features-"+tipo);
}

/**
 * Obtengo los parametros
 * @param {*} sParam parametros
 */
function getURLParameter(sParam){
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(sParam);
}

/**
 * Desplaza hasta el div con clase o id "div"
 * @param {string} div nombre del div a desplazar 
 */ 
function desplazar(div){
    var etop = $(div).offset().top;
    $('html, body').animate({
        scrollTop: etop-150
    }, 0);
}

/**
 * Desplaza hasta el div con clase o id "div"
 * @param {string} div nombre del div a desplazar 
 */ 
function desplazarSucursal(div){
    var etop = $(div).offset().top;
    $('html, body').animate({
        scrollTop: etop-20
    }, 0);
}


const param = getURLParameter('t');  
if(param!=null){
    document.getElementById("mensaje-contacto").innerHTML = param;
}

/**
 * Oculta el menu cuando se lo utiliza sin recargar pantalla
 */ 
function ocultarMenu(){
    $('.navbar-toggler').addClass('collapsed');
    $('.navbar-toggler').removeClass('active');
    $(".navbar-toggler").attr("aria-expanded","false");

    $('.navbar-collapse').addClass('collapsing');
    $('.navbar-collapse').removeClass('show');
    $('.navbar-collapse').removeClass('collapsing');
}