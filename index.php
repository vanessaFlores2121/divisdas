<!--NUESTRO INDEX LA PAGINA PRINCIPAL DONDE SE IRA GENERALNDO EL CARRUZEL Y BOTNES DE ACTIVACION Y MENU PRINCIPAL DE BANCA EN LINEA.-->

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- VANESSA ESMERALDA FLORES CERVANTES Matricula: ES172004305 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <title>Banca_ | Carrousel y Media</title>
   

    <!-- MENU PRINCIPAL-->
    <nav class="navegacion">
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="registro_cripto.php">Registro Cripto Moneda</a>
            <li><a href="eliminar_cripto.php">Eliminar Cripto Moneda</a>
            <li><a href="mostrar_cripto.php">Mostrar Cripto Moneda</a>
            <li><a href="modificar.php">Modificar Cripto Moneda</a>
            <li><a href="alta_divisa.php">Area_divisa_Moneda</a>
        </ul>
    </nav>
            <!-- MENU CENTRADO-->
                <style>
                    ul{
                        float: left;
                        list-style-type: none;
                        padding: 0; 
                        /* AÑADIMOS */
                        position: relative; 
                        left: 50%;
                    }
                    li{
                        float: left;
                        /* AÑADIMOS */
                        position: relative; 
                        right: 50%;
                    }
            </style>
            <!--_________________________-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
    
    

    <!--Materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="css/estilos_principal.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center-align titulo">! MEJORES CRIPTOMONEDAS 2021 !</h1>

                <div class="carousel centrer-align">
                    <!-- bitcoin -->
                    <div class="carousel-item">
                        <h2 class="subtitulo">Critomoneda Bitcoin </h2>
                        <div class="linea-division"></div>
                        <p class="sabor">Bitcoin</p>
                        <img src="img/bitcoin.jpg" alt="">
                    </div>
                        <!-- Ethereum -->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Ethereum </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">Ethereum</p>
                            <img src="img/Ethereum.jpg" alt="">
                        </div>
                        <!-- Ripple XRP -->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Ripple XRP </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">Ripple_XRP</p>
                            <img src="img/Ripple_XRP.jpg" alt="">
                        </div>
                        <!-- Litecoin -->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Litecoin</h2>
                            <div class="linea-division"></div>
                            <p class="sabor">Litecoin</p>
                            <img src="img/Litecoin.jpg" alt="">
                        </div>
                        <!-- NEO -->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda NEO </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">NEO</p>
                            <img src="img/neo.jpg" alt="">
                        </div>
                        <!-- IOTA -->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Iota </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">IOTA</p>
                            <img src="img/iota.jpg" alt="">
                        </div>
                        <!-- Polkadot DOT -->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Polkadot DOT </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">Polkadot DOT</p>
                            <img src="img/Polkadot_DOT.jpg" alt="">
                        </div>
                        <!--Dogecoin DOGE-->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Dogecoin DOGE </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">Dogecoin DOGE</p>
                            <img src="img/Dogecoin.jpg" alt="">
                        </div>
                        <!-- Cardano ADA -->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Cardano ADA </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">Cardano ADA</p>
                            <img src="img/cardano.jpg" alt="">
                        </div>
                        <!-- bINANCE cOIN BNB-->
                        <div class="carousel-item">
                            <h2 class="subtitulo">Critomoneda Binance Coin BNB </h2>
                            <div class="linea-division"></div>
                            <p class="sabor">Binance_BNB</p>
                            <img src="img/binance_Coin_BNB.jpg" alt="">
                        </div>
            

                </div>
            </div>
    </div>


    <!-- MATERIALIZE.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JS Main animaciones y distancia, tiempos etc. -->
    <script src="js/main.js"></script>
</body>
</html>