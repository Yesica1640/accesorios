<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accesorios lindos</title>
    <form action="registro.php" method="POST">


    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--Header - Menu-->

    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="" alt="">
                </a>
            </div>

            <div class="menu"> 
                <nav>
                    <ul>
                        
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="#Contactanos">Contactanos</a></li>
                        <li><a href="#mayoristas">Mayoristas</a></li>
                        <li><a href="login.html" class="btn__quote">Acceso</a></li>
                        <li><a href="registro.html" class="btn__quote">Registro</a></li>
                        <li><a href="#" id="cart-icon"><img src="./images/barra/carrito-de-compras (1).png" alt="Carrito de Compras" class="menu-icon"></a></li>
                        
                        
                        
                    </ul>
                </nav>

                

                <div class="socialMedia">
                    <a href="#">
                        <img src="./images/redes/instagram.png" alt="">
                    </a>
                    <a href="#">
                        <img src="./images/redes/facebook.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/youtube.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!--INICIO-->

        <!--Portada de inicio-->
        <div class="container__cover div__offset">
            <div class="cover">
                <section class="text__cover">
                    <h1></h1>
                    <p></p>
                    <a href="#" class=""></a>
                </section>
                <section class="image__cover">
                    <img src="./images/logo/logo1.png" alt=""  class="">
                </section>
            </div>
        </div>

        <!-- Sección de Acceso -->

    <!-- Barra de Productos -->
    <section id="productos"><br><br><br><br>
        <div class="container__products">
            <h2>Nuestros Productos</h2>
            <div class="products__grid">
                <div class="product">
                    <img src="./images/diademas/fiesta sirena con lentejuelas 1.jpeg" alt="Producto 1" class="product-image" data-product="product1">
                    <h3>Diademas</h3>
                    <p>Tiernas Diademas,Cintillo y Turbanes para las princesas de la casa</p>
                    <button class="btn__product" data-product="product1">Ver más</button>
                    
                </div>
                <div class="product">
                    <img src="./images/monos/Cuentas Y Bolas Brillantes3.jpeg" alt="Producto 2" class="product-image" data-product="product2">
                    <h3>Moños</h3>
                    <p>Aqui encontraras los moños más lindos para la princesas</p>
                    <button class="btn__product" data-product="product2">Ver más</button>
                </div>
                <div class="product">
                    <img src="./images/pinzas/flor Accesorios.jpeg" alt="Producto 3" class="product-image" data-product="product3">
                    <h3>Pinzas</h3>
                    <p>Si buscas pinzas o clips aqui encontraras la mejor opcion</p>
                    <button class="btn__product" data-product="product3">Ver más</button>
                </div>
                <!-- Añade más productos según sea necesario -->
            </div>
        </div>
    </section>

<!-- Modal -->
<div id="product-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 id="modal-product-title"></h2>
        <div class="modal-images"></div>
    </div>
</div>

<!-- Modal del Carrito -->
<div id="cart-modal" class="cart-modal">
    <div class="cart-content">
        <span class="close-cart">&times;</span>
        <h2>Mi Carrito</h2>
        <div id="cart-items"></div>
        <div class="cart-total">
            <p>Total: <span id="cart-total">$0.00</span></p>
        </div>
    </div>
</div>



<!-- Sección de Medios de Pago -->
<section id="payment-methods">
    <div class="container">
        <h2>Medios de Pago Aceptados</h2>
        <div class="payment-icons">
            <a href="#" title="Mastercard">
                <img src="./images/pagos/mastercad.png" alt="Visa">
            </a>
            <a href="#" title="Visa">
                <img src="./images/pagos/visa.png" alt="MasterCard">
            </a>
            <a href="#" title="Efecty">
                <img src="./images/pagos/efecty.png" alt="PayPal">
            </a>
            <a href="#" title="Nequi">
                <img src="./images/pagos/nequi .png" alt="American Express">
            </a>

            <a href="#" title="Sistecredito">
                <img src="./images/pagos/sistecredito.png" alt="American Express">
            </a>

            <a href="#" title="Addi">
                <img src="./images/pagos/addi.png" alt="American Express">
            </a>
            <!-- Añadir más íconos si es necesario -->
        </div>
    </div>
</section>



<!-- Sección de Contacto -->
<section id="Contactanos"><br><br><br><br>
    <div class="container">
        <h2>Contáctanos</h2>
        <div class="contact-info">
            <p>Si tienes alguna pregunta, no dudes en contactarnos a través nuestra linea de WhatsApp:</p>
            <a href="https://w.app/wXEW5O" target="_blank" class="whatsapp-link">
                <img src="./images/contacto/social.png" alt="WhatsApp">
                Contactar por WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- Sección de Ubicación -->
<section id="location">
    <div class="container">
        <h2>Ubicación de Nuestra Tienda</h2>
        <p>Nuestra tienda física para ver nuestros productos en persona o contáctanos para más detalles:</p>
        <div class="location-info">
            <address>
                <p>Dirección: Cra 8e # 26-59, Neiva, Colombia</p>
                <p>Teléfono: +57 3160400649</p>
                <p>Email: contacto@Accesoriosjuanita.com</p>
            </address>
        </div>
        
        <div class="map-container">
            <!-- Pega aquí el código del iframe copiado de Google Maps -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.1381930175341!2d-75.28763473511465!3d2.943951454380817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b745b940db3dd%3A0x490c59d75b1f6186!2sCra.%208%20Este%20%2326-59%2C%20Comuna%202%2C%20Neiva%2C%20Huila!5e0!3m2!1ses!2sco!4v1723267966099!5m2!1ses!2sco"  
                width="600" 
                height="450" 
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0"></iframe>
        </div>
    </div>
</section>

    <!-- Sección Exclusiva para Mayoristas -->
    <section id="mayoristas" class="wholesale-section">
    <div class="container">
        <h1>Área Exclusiva para Mayoristas</h1>
        <p>Bienvenido a nuestra área exclusiva para mayoristas. Aquí podrás acceder a información detallada sobre nuestras ofertas, descuentos especiales y servicios personalizados diseñados para ayudarte a maximizar tu negocio.</p>
        <div class="wholesale-content">
            <div class="wholesale-card">
                <img src="./images/mayoristas/etiqueta.png" alt="Descuentos Especiales">
                <h2>Descuentos Exclusivos</h2>
                <p>Accede a descuentos exclusivos en productos seleccionados. Ofrecemos precios competitivos para compras al por mayor.</p>
            </div>
            <div class="wholesale-card">
                <img src="./images/mayoristas/servicio.png" alt="Soporte Prioritario">
                <h2>Soporte Prioritario</h2>
                <p>Disfruta de un soporte al cliente dedicado y prioritario para resolver tus consultas y problemas de manera rápida y eficiente.</p>
            </div>
            <div class="wholesale-card">
                <img src="./images/mayoristas/paquetes.png" alt="Condiciones Flexibles">
                <h2>Condiciones Flexibles</h2>
                <p>Ofrecemos condiciones flexibles para pedidos grandes, incluyendo opciones de pago y envío adaptadas a tus necesidades.</p>
            </div>
        </div>
        <div class="wholesale-contact"><br><br><br><br>
            
            <p>Para obtener más información o discutir detalles específicos, contáctanos directamente a través de WhatsApp.</p>
            <a href="https://w.app/wXEW5O" target="_blank" class="whatsapp-link">
                <img src="./images/contacto/social.png" alt="WhatsApp">
                Contactar por WhatsApp
            </a>
        </div>
    </div>
</section>

<?php
    include("registro.php");
    ?>

</body>
</html>