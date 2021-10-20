<!DOCTYPE html>
<html lang="es">
<head>
    <title>Abraham Bouchan</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php require_once "php/extends/head.php";?>
</head>
<body id="index">
    <?php include "php/extends/barContactData.php";?>
    <?php include "php/extends/header.php";?>

    <main>
        <section class="section-header">
            <video loop autoplay muted>
                <source src="src/video/AbrahamInicio.mp4" type="video/mp4">
                <source src="src/video/AbrahamInicio.webm" type="video/webm">
            </video>

            <div class="container">
                <img src="src/images/logo_moen_negativo.png" alt="logo_moen_negativo.png" class="animacionLogo">
                <h2>Abraham Bouchan</h2>
            </div>

            <div class="clippy-left"></div>
            <div class="clippy-right"></div>
        </section>

        <section class="section-services">
            <h3 class="subtitulo-principal">Servicios</h3>
            <h2 class="titulo-principal">SERVICIOS</h2>

            <div class="container">
                <div class="services-item scrollLeft">
                    <i class="fas fa-user-tie"></i>
                    <h3>Emprendimiento</h3>
                    <p>Actualmente dirijo tres empresas.</p>
                    <p>Abarcamos los ámbitos: Software, educativo y textil.</p>
                </div>

                <div class="services-item scrollUp">
                    <i class="fas fa-desktop"></i>
                    <h3>Administración de proyectos</h3>
                    <p>Certificado en Scrum Fundamentals</p>
                    <p>Experiencia en marketing digital</p>
                    
                </div>

                <div class="services-item scrollRight">
                    <i class="far fa-smile-beam"></i>
                    <h3>BAILARÍN</h3>
                    
                    <p>Bailarín activo de la compañía de danza "Monarca de México"</p>
                </div>
            </div>

            <a href="servicios.php" class="button">Leer más</a>
        </section>

        <section class="section-calltoaction">
            <div class="container">
                <h2>¿Tienes algún proyecto en el que te gustaría trabajar con un experto en direccion y planeación?</h2>
                <p>¡Estás en la página de la persona correcta!</p>
                <a href="https://wa.link/o71uug" class="button">¡Contáctame!</a>
            </div>
        </section>

        <section class="section-clients scrollUp">
            
            <h2 class="titulo-principal">Empresas</h2>

            <div class="swiper-container" id="clients-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="http://charrochilango.keypro.com.mx" target="_blank"><img src="src/images/empresas/Charro.png"></a>
                    </div>
                    
                    <div class="swiper-slide">
                        <a href="http://keypro.com.mx" target="_blank"><img src="src/images/empresas/KeyPro.png"></a>
                    </div>

                    <div class="swiper-slide">
                        <a href="http://wetrustyou.com.mx" target="_blank"><img src="src/images/empresas/WeTrustYou.png"></a>
                    </div>

                    <div class="swiper-slide">
                        <a href="http://monarcamx.com" target="_blank"><img src="src/images/empresas/monarca.png"></a>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include "php/extends/footer.php";?>
    <!-- Scripts de librerias -->
    <script src="js/libraries/jquery-3.5.1.min.js"></script>
    <script src="js/libraries/swiper/swiper.min.js"></script>
    <!-- Scripts del sito -->
    <script src="js/main.js"></script>
    <script>
        var swiper = new Swiper('#clients-container.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
</body>
</html>