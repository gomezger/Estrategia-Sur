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