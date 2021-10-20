<!DOCTYPE html>
<html lang="es">
<head>
    <title>Servicios</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php require_once "php/extends/head.php";?>
</head>
<body id="services">
    <?php include "php/extends/barContactData.php";?>
    <?php include "php/extends/header.php";?>

    <main>
        <video loop autoplay muted>
            <source src="src/video/moen_edificacion.mp4" type="video/mp4">
            <source src="src/video/moen_edificacion.webm" type="video/webm">
        </video>

        <section class="section-principal">
            <div class="container">
                <h2 class="titulo-principal">SERVICIOS</h2>

                <div class="swiper-container" id="services-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="services-image">
                                <img src="src/images/circles/proy.JPG" alt="proy.JPG">
                            </div>

                            <div class="services-data">
                                <h3 class="services-subtitle">ADMINISTRACIÓN DE PROYECTOS</h3>

                                <ul>
                                    <li>Valuación y seguimiento de proyectos bajo la metología SCRUM</li>
                                    <li>Estimación de presupuestos</li>
                                    <li>Manejo de equipos multidisciplinarios</li>
                                    <li>Control de riesgos</li>
                                    <li>Optimización de procesos</li>
                                </ul>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="services-data">
                                <h3 class="services-subtitle">CURSOS</h3>

                                <ul>
                                   <li>Comunicación efectiva</li>
                                   <li>Herramientas de marketing digital</li>
                                   <li>Dirección efectiva de equipos.</li>
                                   <li>Disrrupción.</li>
                                </ul>
                            </div>

                            <div class="services-image">
                                <img src="src/images/circles/diploma.png" alt="circulo_mapa.png">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="services-image">
                                <img src="src/images/backgrounds/vera.JPG" alt="ver.JPG">
                            </div>

                            <div class="services-data">
                                <h3 class="services-subtitle">PROGRAMACIÓN FRONTEND</h3>

                                <ul>
                                    <li>Creación de páginas web dinámicas</li>
                                    <li>Tiendas en línea</li>
                                    <li>Blogs personales</li>
                                    <li>Software bajo pedido</li>
                                </ul>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="services-image">
                                <img src="src/images/circles/jarritos.JPG" alt="jarritos.JPG">
                            </div>

                            <div class="services-data">
                                <h3 class="services-subtitle">MARKETING DIGITAL</h3>

                                <ul>
                                    <li>Elaboración de campañas publicitarias en redes sociales y Google</li>
                                    <li>Estudio de mercado relacionado con tu prodcto o servicio</li>
                                    <li>Seguimiento de resultados de campañas</li>
                                </ul>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="services-data">
                                <h3 class="services-subtitle">ESPECTÁCULOS</h3>

                                <ul>
                                    <li>Show folclórico con acompañamiento de mariachi</li>
                                    <li>Show de danza contemporanea</li>
                                    <li>Espectáculo de danza bajo pedido</li>
                                </ul>
                            </div>

                            <div class="services-image">
                                <img src="src/images/circles/charros.JPG" alt="charros.JPG">
                            </div>
                        </div>


                        <div class="swiper-slide solo-imagen animacionLogo">
                            <img src="src/images/logo_moen_negativo.png" alt="logo_moen_negativo.png">
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
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
        var swiper = new Swiper('#services-container.swiper-container', {
            direction: 'vertical',
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</body>
</html>