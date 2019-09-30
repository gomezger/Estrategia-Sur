/**
 * Desplaza hasta el div con clase o id "div"
 */ 
function desplazar(div){
    var etop = $(div).offset().top;
    $('html, body').animate({
        scrollTop: etop-150
    }, 0);
}

const param = getURLParameter('t');  
if(param!=null){
    document.getElementById("mensaje-contacto").innerHTML = param;
}

/**
 * Oculta el menu
 */ 
function ocultarMenu(){
    $('.navbar-toggler').addClass('collapsed');
    $('.navbar-toggler').removeClass('active');
    $(".navbar-toggler").attr("aria-expanded","false");


    $('.navbar-collapse').addClass('collapsing');
    $('.navbar-collapse').removeClass('show');
    $('.navbar-collapse').removeClass('collapsing');

    //$('.slicknav_nav').addClass('slicknav_hidden');
}