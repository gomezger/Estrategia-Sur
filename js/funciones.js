/**
 * Desplaza hasta el div con clase o id "div"
 */ 
function desplazar(div){
    var etop = $(div).offset().top;
    $('html, body').animate({
        scrollTop: etop-150
    }, 0);
}