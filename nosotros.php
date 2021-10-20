<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sobre mi</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php require_once "php/extends/head.php";?>
</head>
<body id="aboutus">
    <?php include "php/extends/barContactData.php";?>
    <?php include "php/extends/header.php";?>

    <main>
        <video loop autoplay muted>
            <source src="src/video/banderas.mp4" type="video/mp4">
            <source src="src/video/banderas.webm" type="video/webm">
        </video>
        
        <section class="section-principal">
            <div class="section-principal-item">
                <h2 class="titulo-principal">¿QUIEN SOY?</h2>

                <article class="container">
                    <div class="item-data">
                        <p>Mi nombre es Abraham Bouchan, soy un apasionado de la dirección de proyectos, el emprendimiento y la danza.</p>
                        <p>Gracias a estas pasiones he tenido la oportunidad de viajar a 3 de los cinco continentes a representar a nustro país durante 2018 y 2019</p>
                        
                    </div>

                    <div class="item-image">
                        <img src="src/images/circles/praga.png" alt="praga.png">
                    </div>
                </article>
            </div>

            <div class="section-principal-item scrollUp">
                <h2 class="titulo-principal">VISIÓN</h2>

                <article class="container">
                    <div class="item-image">
                        <img src="src/images/circles/charros.JPG" alt="charros.JPG">
                    </div>

                    <div class="item-data scrollRight">
                        <p>Creo firmemente que el potencial que tienen los jóvenes, así como sus ganas de aprender puede impulsarlos para llegar hasta donde la mayoría no se atreve.</p>
                    </div>
                </article>
            </div>

            <div class="section-principal-item scrollLeft">
                <h2 class="titulo-principal">MISIÓN</h2>

                <article class="container">
                    <div class="item-data">
                        <p>Estoy enfocado en crear una red de jóvenes latinoamericanos para salir juntos adelante por un mejor futuro.</p>
                    </div>

                    <div class="item-image">
                        <img src="src/images/circles/serbia.JPG" alt="serbia.JPG">
                    </div>
                </article>
            </div>
        </section>
    </main>

    <?php include "php/extends/footer.php";?>
    <!-- Scripts de librerias -->
    <script src="js/libraries/jquery-3.5.1.min.js"></script>
    <script src="js/libraries/swiper/swiper.min.js"></script>
    <!-- Scripts del sito -->
    <script src="js/main.js"></script>
</body>
</html>