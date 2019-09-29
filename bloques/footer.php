
<!-- Contact Section Begin -->
<section class="contact-section contacto-solapa">
    <div class="ancla float-left">
        <div id="contacto" class="punto"></div>
    </div>
    <div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 pl-3 pr-3 pl-md-0 pr-md-0 container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info">
                    <div class="contact-details">
                        <ul class="address">
                            <li>
                                <i class="far fa-building"></i>
                                <span class="pl-2">Int. Haroldo Casanova 3349 (Oficina 2 - Centro de Desarrollo)</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span class="pl-2">Parque Industrial de Bahía Blanca, Buenos Aires, Argentina</span>
                            </li><!-- 
                            <li>
                                <i class="far fa-clock"></i>
                                <span class="pl-2">Lunes a viernes de 9hs a 18hs</span>
                            </li> -->
                            <li>
                                <i class="fas fa-phone"></i>
                                <span class="pl-2">+54 9 291 4360055 (Lunes a Viernes de 9hs a 18hs)</span>
                                
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <span class="pl-2"> info@estrategiasur.com.ar</span>
                                
                            </li>
                        </ul>
                    </div>
                    <div id="mensaje-contacto" class="mensaje-formulario col-12 float-left clearfix m-0 p-0 mb-4 text-center text-sm-left"></div>
                    <div class="contact-form">
                        <form action="actions/contacto.php" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="nombre-es" placeholder="Nombre y Apellido" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="correo-es" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="telefono-es" placeholder="Teléfono">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="empresa-es" placeholder="Empresa">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Mensaje" name="mensaje-es" required></textarea>
                                    <button class="site-btn float-left" type="submit">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35204.56132235907!2d-62.29289103515532!3d-38.7482653334147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95edbd1881506fb3%3A0x8d76d498d6829b0d!2sInt.+Haroldo+Casanova+3349%2C+Bah%C3%ADa+Blanca%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1566576937075!5m2!1ses!2sar"
            style="border:0" allowfullscreen></iframe></div>
</section>
<!-- Contact Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section set-bg"> <!-- data-setbg="img/carousel1.jpg"> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-content">
                    <div class="footer-logo">
                        <a href="#"><img src="img/logo_largo.png" alt=""></a>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a onclick="desplazar('body')" href="#">Inicio</a></li>
                            <li><a onclick="desplazar('#nosotros')" href="#nosotros">Nosotros</a></li>
                            <li><a onclick="desplazar('.features-section')" href="#paneles-aislantes" >Paneles Aislantes</a></li>
                            <li><a onclick="desplazar('.contacto-solapa')" href="#contacto" name="contacto" >Contacto</a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Todos los derechos reservados | Hecho por <a href="https://xeronweb.com" target="_blank">Xeron Web</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->