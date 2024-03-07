<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>projectR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilosR.css">
    <link rel="icon" type="image/png" sizes="16x16" href="imagenes/favicons/favicon-32x32.png">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Bodoni&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        /* font-family: 'Libre Bodoni', serif;
font-family: 'Montserrat', sans-serif; */

        /*********************************************************************BARRA LATERAL************************************************************************/

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            border: 9px solid #212121;
            box-shadow: inset 0 0 2.5px 2px rgba(0, 0, 0, 0.5);
        }

        ::-webkit-scrollbar-thumb {
            background: #cacaca;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Libre Bodoni', serif;
            text-decoration: none;
            list-style: none;
        }

        :root {
            --bg--color: #222327;
            --text-color: #fefefe;
            --main-color: #ff7070;
            --bg-colorv2: #5a5a5a;
        }

        body {
            background-color: #949494;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /*********************************************************************IMAGENES PAGINA PRINCIPAL************************************************************************/

        .PagPrincipal {
            width: 100%;
            height: 800px;
            position: relative;
            background-image: url(imagenes/IntroGIF2.gif);
            background-size: cover;
            background-repeat: no-repeat;
            animation: movimiento 20s infinite linear alternate;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .PagPrincipal img {
            width: auto;
        }

        .logo {
            width: auto;
        }

        /********************************************************************MENU DE NAVEGACION**********************************************************************/

        header {
            position: fixed;
            width: 100%;
            height: 10%;
            top: 0;
            right: 0;
            z-index: 6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            padding: 10px 12%;
            transition: all .50s ease;
            background-color: var(--bg--color);
        }

        .menuTlf {
            display: none;
        }

        .nav-bar ul {
            display: flex;
            align-items: center;
            position: relative;
        }

        .nav-bar ul li a {
            display: block;
            color: var(--text-color);
            font-size: 20px;
            padding: 5px 15px;
            border-radius: 3px;
            transition: 0.2s;
            margin: 0 5px;
        }

        .nav-bar ul li a:hover {
            color: #000;
            background-color: var(--text-color);
        }

        .nav-bar ul li a.activa {
            color: #000;
            background-color: var(--text-color);
        }

        @media only screen and (max-width: 1320px) {
            header {
                padding: 0 50px;
            }
        }

        @media only screen and (max-width: 1100px) {
            header {
                padding: 0 30px;
            }
        }

        @media only screen and (max-width: 980px) {
            .menuTlf {
                display: block;
                cursor: pointer;
            }

            .menuTlf .linea {
                width: 30px;
                height: 3px;
                background: var(--text-color);
                margin: 6px 0;
            }

            .nav-bar {
                height: 0;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                width: 100vw;
                background: var(--bg--color);
                transition: 0.5s;
                overflow: hidden;
                z-index: 6;
            }

            .nav-bar.activa {
                height: 450px;
            }

            .nav-bar ul {
                display: block;
                width: fit-content;
                margin: 50px auto 0 auto;
                text-align: center;
                transition: 0.5s;
                opacity: 0;
            }

            .nav-bar.activa ul {
                opacity: 1;
            }

            .nav-bar ul li a {
                margin-bottom: 12px;
            }
        }


        /*********************************************************************REDES SOCIALES************************************************************************/

        .redes {
            z-index: 10;
            position: fixed;
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transform: translate(-250px, 0);
        }

        .redes a {
            color: var(--text-color);
            background: rgba(211, 211, 211, 0.05);
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
            display: block;
            margin: 1px;
            padding: 15px;
            width: 300px;
            text-align: right;
            border-radius: 5px;
            transition: 0.8s;
            transition-property: transform;
        }

        .redes a:hover {
            transform: translate(140px, 0);
        }

        .redes i {
            margin-left: 10px;
            font-size: 30px;
            width: 30px;
            height: 30px;
        }

        .redes a:nth-child(1) i {
            color: transparent;
            background-image: linear-gradient(45deg, #FFDF9E, #E56969, #8A49A1);
            -webkit-background-clip: text;
            font-weight: 600;
        }

        .redes a:nth-child(2) i {
            color: #B959FF;
        }

        .redes a:nth-child(3) i {
            color: transparent;
            background-image: linear-gradient(130deg, #00FFFF, #00FFFF, #00FFFF, #fff, #FF0000, #FF0000, #FF0000);
            -webkit-background-clip: text;
            font-weight: 600;
        }

        .redes a:nth-child(4) i {
            color: #FF3D3D;
        }

        /********************************************************************TODO EL BODY********************************************************************/


        /********************************************************************PROXIMOS EVENTOS*******************************************************************/
        .eventosTitulo {
            background: linear-gradient(to right,
                    hsl(98 100% 62%),
                    hsl(204 100% 59%));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            font-size: 2em;
            padding: 10px 10px;
        }

        .eventos {
            background-color: var(--bg-colorv2);
            padding: 50px 0 50px 0;
            color: var(--text-color);
        }

        .tabla {
            width: 100%;
            margin: 50px auto;
            border-top: 1px solid #999;
            border-right: 1px solid #999;
            border-collapse: collapse;
        }

        .tabla td,
        .tabla th {
            padding: 20px 20px;
            border-left: 1px solid #999;
            border-bottom: 1px solid #999;
        }

        .tabla td:hover {
            background-color: #FFF;
            color: #000;
            transition: background-color 0.3s ease-in-out;
        }

        .tabla th {
            background: var(--bg--color);
            color: #fff;
            text-align: left;
        }

        @media only screen and (max-width:768px) {
            .tabla {}

            .tabla th,
            .tabla td {
                display: block;
            }
        }

        /********************************************************************QUIENES SOMOS*******************************************************************/

        .quienesSomos {
            text-align: center;
            color: var(--text-color);
            font-size: 2em;
        }

        .primero {
            background-color: var(--bg--color);
            padding: 50px 50px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .primero p {
            text-align: justify;
            margin: 1em 3em 0em 3em;
            color: var(--text-color);
        }

        .carta img {
            width: 200px;
            height: auto;
            margin-right: 20px;
            margin-bottom: 10px;
        }

        /*********************************************************************HISTORIA************************************************************************/

        .historia {
            text-align: center;
            color: var(--text-color);
            font-size: 2em;
            margin-top: 1em;
            padding: 20px 0px 20px 0px;
            margin-top: auto;
            margin-bottom: auto;
        }

        .segundo {
            background-color: var(--bg-colorv2);
            padding: 60px 80px;
            color: var(--text-color);
        }

        @media only screen and (max-width: 600) {
            .segundo {
                padding: 50px 50px;
            }
        }

        .segundo p {
            text-align: justify;
            margin: 1em 3em 0em 3em;
            color: var(--text-color);
        }

        .segundo h2 {
            color: var(--text-color);
        }

        /*********************************************************************BLOG************************************************************************/

        .blog {
            text-align: center;
            color: var(--text-color);
            font-size: 2em;
            margin-top: 1em;
            padding: 20px 0px 20px 0px;
            margin-top: auto;
            margin-bottom: auto;
        }

        .tercero {
            background-color: var(--bg-colorv2);
            padding: 60px 70px;
        }

        @media only screen and (max-width: 600) {
            .tercero {
                padding: 50px 50px;
            }
        }

        .tercero p {
            text-align: justify;
            color: var(--text-color);
        }

        /*********************************************************************TUTORIALES************************************************************************/

        .tutoriales {
            text-align: center;
            color: var(--text-color);
            font-size: 2em;
            margin-top: 1em;
        }

        .cuarto {
            background-color: var(--bg--color);
            padding: 40px 10px;
        }

        .cuarto p {
            text-align: justify;
            color: var(--text-color);
        }


        /*********************************************************************asd************************************************************************/



        /*PONER SUBMENU EN HISTORIA Y QUE TENGA 2 APARTADOS, CIRCUITO Y PILOTOS*/

        .general-container {
            padding-top: 40px;
        }

        .table {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }


        .card {
            position: relative;
            width: 250px;
            height: 300px;
            margin: 20px;
        }

        .card .face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
            overflow: hidden;
            transition: .5s;
        }

        .card .front {
            transform: perspective(600px) rotateY(0deg);
            box-shadow: 0 5px 10px #000;
        }

        .card .front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card .front h3 {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 45px;
            line-height: 45px;
            color: white;
            background: rgba(0, 0, 0, .4);
            text-align: center;
        }

        .card .back {
            transform: perspective(600px) rotateY(180deg);
            background: var(--bg--color);
            padding: 15px;
            color: #f3f3f3;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            box-shadow: 0 5px 10px #000;
        }

        .card .back p {
            letter-spacing: 1px;
        }

        .card:hover .front {
            transform: perspective(600px) rotateY(180deg);
        }

        .card:hover .back {
            transform: perspective(600px) rotateY(360deg);
        }

        .box {
            text-align: center;
        }

        @media(max-width:991px) {
            .general-container {
                margin-top: -50px;
            }
        }

        /*******************************************************SLIDER**************************************************************/

        .slide-container {
            overflow: auto;
            max-width: 1000px;
            margin: auto;
            position: relative;
        }

        .slides {
            display: none;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: #FFF;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .caption {
            color: #FFF;
            font-size: 16px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .dot {
            cursor: pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }


        @keyframes fade {
            0% {
                opacity: 0;

            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes slideInDown {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .fade {
            -webkit-animation-name: fade;
            -moz-animation-name: fade;
            -o-animation-name: fade;
            animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
        }

        @media only screen and (max-width: 1200px) {
            iframe {
                width: 900px;
                height: 650px;
            }
        }

        @media only screen and (max-width: 1000px) {
            iframe {
                width: 700px;
                height: 300px;
            }

            .slide-container {
                align-items: center;
                justify-content: center;
                text-align: center;
            }
        }

        @media only screen and (max-width: 950px) {
            iframe {
                width: 700px;
                height: 300px;
            }

            .slide-container {
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .prev {
                left: 45px;
            }

            .next {
                right: 50px;
            }
        }

        @media only screen and (max-width: 875px) {
            iframe {
                width: 500px;
                height: 300px;
            }

            .slide-container {
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .prev {
                left: 145px;
            }

            .next {
                right: 150px;
            }
        }

        @media only screen and (max-width: 600px) {
            iframe {
                width: 300px;
                height: 150px;
            }

            .slide-container {
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .prev {
                left: 15px;
            }

            .next {
                right: 15px;
            }
        }

        @media only screen and (max-width: 300px) {
            iframe {
                width: 200px;
                height: 100px;
            }
        }

        /***********************************************TEXTO DIVIDIDO*******************************************************/
        /* https://codepen.io/LegendAF/pen/NGaaWY 
https://codepen.io/Calleb/pen/MWXOOeQ
*/
















        /*********************************************************************FOOTER************************************************************************/

        footer {
            background-color: var(--bg--color);
        }

        .container {
            margin-left: 50px;
            margin-right: 50px;
        }

        .content {
            display: flex;
            padding: 50px;
            justify-content: space-between;
        }

        .col {
            display: flex;
            flex-direction: column;
            margin-left: -40px;
        }

        @media (min-width:320px) and (max-width:479px) {
            .content {
                display: block;
                margin-left: auto;
                margin-right: auto;
                max-width: 1230px;
                position: relative;
            }
        }

        @media only screen and (max-width: 300px) {
            .content {
                display: block;
                margin-left: auto;
                margin-right: auto;
                max-width: 1230px;
                position: relative;
            }
        }

        .content p:first-child:not(.flex p:first-child) {
            color: white;
            font-size: 22px;
        }

        .content p:not(.col, .column p:first-child) {
            color: #888888;
            margin-bottom: 10px;
        }

        .col:first-child {
            gap: 25px;
        }

        .col:first-child .flex {
            display: flex;
            gap: 50px;
        }

        .col:first-child .flex .col-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .col:first-child .flex .col-info p {
            font-size: 14px;
        }

        .col:first-child .flex .col-info span {
            color: white;
            font-size: 17px;
        }

        .col .column:first-child {
            margin-right: 70px;
            margin-left: 0px;
        }

        .col .column p:first-child {
            margin-bottom: 25px;
        }

        .col .column p:not(p:first-child) {
            margin-bottom: 12px;
        }

        .col:last-child {
            gap: 15px;
        }

        .col:last-child .email {
            display: flex;
        }

        .col:last-child .email input {
            width: 300px;
            height: 40px;
            font-size: 17px;
            color: white;
            background-color: #4c4c4c;
            padding-left: 10px;
            border: 0;
            outline: 0;
        }

        .col:last-child .email button {
            width: 200px;
            height: 40px;
            color: white;
            background-color: rgb(229, 39, 39);
            padding-left: 10px;
            border: 0;
            outline: 0;
            text-align: center;
            margin-left: -30px;
            font-weight: bold;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 3px;
        }

        .col:last-child .social {
            display: table-column;
            gap: 20px;
        }

        .col:last-child .social img {
            width: 40px;
        }

        .footerUltimo {
            background-color: rgb(43, 43, 43);
        }

        .footerUltimo .textoFooter {
            padding: 25px 80px;
            display: flex;
            justify-content: space-between;
            justify-content: center;
            align-items: center;
            text-align: center;
            text-transform: uppercase;
        }

        .footerUltimo .contenedor p {
            color: #888888;
        }

        .footerUltimo .contenedor p span {
            color: var(--text-color);
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Menu de navegación-->

    <header>
        <div class="logo"><a href="#PagP"><img src="imagenes/logo_nuevo146x75.png" alt=""></a></div>
        <div class="menuTlf">
            <div class="linea"></div>
            <div class="linea"></div>
            <div class="linea"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li class="">
                    <a href="#eventos">Eventos</a>
                </li>
                <li class="">
                    <a href="#primero">Quienes Somos</a>
                </li>
                <li class="">
                    <a href="#segundo">Historia</a>
                </li>
                <li class="">
                    <a href="#cuarto">Tutoriales</a>
                </li>
                <li class="">
                    <a href="#tercero">Blog</a>
                </li>
                <li class="">
                    <a href="tiendaProjectR.html">Tienda</a>
                </li>
                <li class="">
                    <a href="#PagP" class="activa">Inicio</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Fin del Menu de navegación-->

    <!-- Menu para dispositivos moviles-->

    <script>
        menuTlf = document.querySelector(".menuTlf")
        menuTlf.onclick = function() {
            navBar = document.querySelector(".nav-bar")
            navBar.classList.toggle("activa")
        }
    </script>

    <!-- Menu para dispositivos moviles-->

    <div class="redes">
        <a href="https://www.instagram.com/pr_matsuri/?hl=es" target="_blank">Instagram <i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.twitch.tv/pr_matsuri" target="_blank">Twitch <i class="fa-brands fa-twitch"></i></a>
        <a href="https://www.tiktok.com/@pr_matsuri?lang=es" target="_blank">Tiktok <i class="fa-brands fa-tiktok"></i></a>
        <a href="https://www.youtube.com/@pr_matsuri" target="_blank">Youtube <i class="fa-brands fa-youtube"></i></a>
    </div>


    <div class="INICIO">
        <!-- IMAGEN DEL INICIO-->

        <div class="PagPrincipal" id="PagP">
            <img class="logo2" src="imagenes/logo_nuevo_250x150.png" alt="">
        </div>

        <!-- FIN IMAGEN DEL INICIO   3/12/2022-->

        <div id="eventos" class="eventos">
            <h1 class="eventosTitulo"><b>PROXIMOS EVENTOS</b></h1>
            <table class="tabla">
                <tr>
                    <th>Virtual Matsuri V2 (Assetto Corsa)</th>
                    <td>04 / 03 / 2023</td>
                    <td>Lugar: Online</td>
                    <td>Precio Entrada: Gratuito</td>
                </tr>
                <tr>
                    <th>Naparrak All Stars</th>
                    <td>21 / 05 / 2023 - 22 / 05 / 2023 - 23 / 05 / 2023</td>
                    <td>Lugar: Allo - Navarra, España</td>
                    <td>Precio Entrada: 5€</td>
                </tr>
                <tr>
                    <th>Virtual Matsuri V3 (Assetto Corsa)</th>
                    <td>04 / 06 / 2023</td>
                    <td>Lugar: Online</td>
                    <td>Precio Entrada: Gratuito</td>
                </tr>
                <tr>
                    <th>---</th>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>
        </div>

        <div id="primero" class="primero">
            <h1 class="quienesSomos"><b>¿Quienes Somos?</b></h1>
            <p>Somos un grupo de chavales el cual intenta introducir mas a la gente sobre el drift japones.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit corporis ad assumenda, aut quisquam ipsum, asperiores sapiente laboriosam aliquid vitae, soluta qui! Doloremque quod iste suscipit laboriosam delectus possimus ad. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod saepe sint, et doloremque maxime pariatur fugit dolorum repudiandae recusandae. Facilis eligendi optio iure reiciendis magni sequi animi? Tempora, incidunt commodi. <br>
            </p>

            <!-- CONTENEDOR DE IMAGENES QUIENES SOMOS-->

            <div class="general-container">

                <div class="table">
                    <div class="card">
                        <div class="face front">
                            <img src="imagenes/1674398538416.JPG" alt="">
                            <h3>Santiago</h3>
                        </div>
                        <div class="face back">
                            <p>
                            <div class="box">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ullam odio, debitis possimus, minus eos tempore tenetur nihil sed sapiente suscipit quia repellat id commodi quos excepturi natus similique! Perferendis.
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face front">
                            <img src="imagenes/1674398538416.JPG" alt="">
                            <h3>Rubén</h3>
                        </div>
                        <div class="face back">
                            <p>
                            <div class="box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum neque sed quam tempor, in convallis nisi euismod. Aenean dictum, magna et ultricies lacinia, dui lorem scelerisque nisl, ac sagittis leo magna nec nunc.
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face front">
                            <img src="imagenes/1674398538416.JPG" alt="">
                            <h3>Angel</h3>
                        </div>
                        <div class="face back">
                            <p>
                            <div class="box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum neque sed quam tempor, in convallis nisi euismod. Aenean dictum, magna et ultricies lacinia, dui lorem scelerisque nisl, ac sagittis leo magna nec nunc.
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face front">
                            <img src="imagenes/1674398538416.JPG" alt="">
                            <h3>Rodrigo</h3>
                        </div>
                        <div class="face back">
                            <p>
                            <div class="box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum neque sed quam tempor, in convallis nisi euismod. Aenean dictum, magna et ultricies lacinia, dui lorem scelerisque nisl, ac sagittis leo magna nec nunc.
                            </div>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FIN CONTENEDOR DE IMAGENES QUIENES SOMOS-->

        </div>

        <div id="segundo" class="segundo">
            <h1 class="historia"><b>Historia del drift</b></h1> <br>
            <p>
            <h2>Qué es el drift:<br></h2>
            El drifting es un estilo de conducción el cual consiste en derrapar poniendo el coche practicamente de lado y saber controlarlo.
            <br>
            <br>
            </p>
            <p>
            <h2>Historia del drift:<br></h2>
            El drift daria comienzo en las montañas de Japón, en el año 1970 ideado para que las personas que bajaban a grandes velocidades no se salieran de los caminos y se precipitasen por los inmensos acantilados. Las primeras carreras no se hacian en circuitos ni mucho menos, empezaron por las montañas, en carreteras por las que no frecuentaban coches y habia mucha menos vigilancia que en la ciudad. Gracias a estas carreras el drifting se dió a conocer.</p> <br>

        </div>


        <div id="cuarto" class="cuarto">
            <h1 class="tutoriales"><b>Tutoriales</b></h1> <br>
            <p></p>

            <div class="slide-container">
                <div class="slide fade">
                    <iframe width="1000" height="600" src="https://www.youtube.com/embed/cIuVaQQskYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="caption">LOREM IPSUM</div>
                </div>

                <div class="slide fade">
                    <iframe width="1000" height="600" src="https://www.youtube.com/embed/mqZIlnRyZjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="caption">LOREM IPSUM</div>
                </div>

                <div class="slide fade">
                    <iframe width="1000" height="600" src="https://www.youtube.com/embed/ecco-LHL61M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="caption">LOREM IPSUM</div>
                </div>

                <div class="slide fade">
                    <iframe width="1000" height="600" src="https://www.youtube.com/embed/cIuVaQQskYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="caption">LOREM IPSUM</div>
                </div>

                <div class="slide fade">
                    <iframe width="1000" height="600" src="https://www.youtube.com/embed/mqZIlnRyZjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="caption">LOREM IPSUM</div>
                </div>


                <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
            </div>
            <br />
            <div style="text-align:center;" class="dotO">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onClick="currentSlide(3)"></span>
                <span class="dot" onClick="currentSlide(4)"></span>
                <span class="dot" onClick="currentSlide(5)"></span>
            </div>

            <script>
                var currentIndex = 1;

                function displaySlide(n) {
                    currentIndex = n;
                    var slides = document.getElementsByClassName("slide");
                    var dots = document.getElementsByClassName("dot");

                    if (currentIndex > slides.length) {
                        currentIndex = 1;
                    }
                    if (currentIndex < 1) {
                        currentIndex = slides.length;
                    }
                    for (var i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                        dots[i].className = dots[i].className.replace(" active", "");
                    }

                    slides[currentIndex - 1].style.display = "block";
                    dots[currentIndex - 1].className = "dot active";
                    slno.innerHTML = currentIndex + "/" + slides.length;
                }

                displaySlide(currentIndex);

                function changeSlide(n) {
                    currentIndex += n;
                    displaySlide(currentIndex);
                }

                function currentSlide(n) {
                    displaySlide(n);
                }
            </script>

        </div>

        <div id="tercero" class="tercero">
            <h1 class="blog"><b>Nuestro Blog</b></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus maxime eveniet vero illum iste ex officiis perspiciatis, aut adipisci cumque beatae dolor voluptatibus rem provident consequuntur cupiditate assumenda architecto!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sed eius? Accusamus autem ipsum quis explicabo commodi, officiis incidunt alias laudantium, soluta voluptatum provident quibusdam voluptate odit eveniet vero veritatis.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus maxime eveniet vero illum iste ex officiis perspiciatis, aut adipisci cumque beatae dolor voluptatibus rem provident consequuntur cupiditate assumenda architecto!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sed eius? Accusamus autem ipsum quis explicabo commodi, officiis incidunt alias laudantium, soluta voluptatum provident quibusdam voluptate odit eveniet vero veritatis.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit accusamus maxime eveniet vero illum iste ex officiis perspiciatis, aut adipisci cumque beatae dolor voluptatibus rem provident consequuntur cupiditate assumenda architecto!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, sed eius? Accusamus autem ipsum quis explicabo commodi, officiis incidunt alias laudantium, soluta voluptatum provident quibusdam voluptate odit eveniet vero veritatis.
            </p>
        </div>



    </div>

    <hr size="10" noshade color="#222327">

    <!-- EL FOOTER Poner Aviso legal, Politica de coockies, Politica de privacidad y Condiciones de uso-->

    <footer>
        <div class="container">
            <div class="content">
                <div class="col">
                    <p>Contacto</p>
                    <p>
                        Si deseas contactar con nosotros <br> siempre estamos atentos a <br>
                        las redes sociales, esperamos poder ser de ayuda.
                    </p>
                    <div class="flex">
                        <div class="col-info">
                            <p>
                                GMAIL<br />
                                <span>prmatsuri@gmail.com</span>
                            </p>
                            <p>
                                LOCALIZACIÓN <br />
                                <span>León - España</span>
                            </p>
                            <p>
                                Telefono <br />
                                <span>REDES SOCIALES</span>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="column">
                        <p>Información</p>
                        <p>Sobre nosotros</p>
                        <p>Politicas de privacidad</p>
                        <p>Contáctanos</p>
                    </div>
                </div>
                <div class="col">
                    <p>Siguenos en nuestras redes sociales</p>
                    <div class="social">
                        <a href="https://www.instagram.com/pr_matsuri/?hl=es" target="_blank"><img src="imagenes/instagramLogo.png" alt="" /></a>
                        <a href="https://www.tiktok.com/@pr_matsuri?lang=es" target="_blank"><img src="imagenes/tiktokLogo.png" alt="" /></a>
                        <a href="https://www.twitch.tv/pr_matsuri" target="_blank"><img src="imagenes/twitchLogo.png" alt="" /></a>
                        <a href="https://www.youtube.com/@pr_matsuri" target="_blank"><img src="imagenes/youtubeLogo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerUltimo">
            <div class="contenedor">
                <div class="textoFooter">
                    <p><!--&copy;--> 2023<span> Project&nbsp; R &nbsp;</span>| &nbsp;Style was never an <span>option</span></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- QUITAR TIENDA Y NO PONER POLITICAS NI COOKIES-->

    <!-- Pagina que explica sobre el tema de la tienda online https://www.holded.com/es/blog/requisitos-legales-venta-por-internet?utm_adgroupid=61706694846&utm_keyword=&campaignid=1330918973&adgroupid=61706694846&adid=525565262827&hld_device=c&hld_network=g&hld_matchtype=&utm_source=google&utm_medium=cpc&utm_campaign=dsa_1330918973&utm_term=&utm_content=61706694846_525565262827&hsa_src=g&hsa_kw=&hsa_mt=&hsa_acc=7276020979&hsa_grp=61706694846&hsa_ad=525565262827&hsa_cam=1330918973&hsa_tgt=dsa-1655314554395&hsa_net=adwords&hsa_ver=3&gclid=EAIaIQobChMIpcDBtOqI_QIVR-R3Ch1wOAO-EAAYASAAEgKTIvD_BwE -->


    <!-- Politicas de Privacidad, como hacerlas y una Plantilla
          https://protecciondatos-lopd.com/empresas/politica-de-privacidad-web/#:~:text=B%C3%A1sicamente%2C%20cualquier%20p%C3%A1gina%20web%2C%20sea,comentarios%2C%20deber%C3%A1%20contar%20con%20ella.-->


    <!-- Aviso Legal, como hacero y una Plantilla
          https://protecciondatos-lopd.com/empresas/modelo-aviso-legal-web/-->


    <!-- Cookies, como hacerlas y Plantilla
            https://protecciondatos-lopd.com/empresas/guia-uso-cookies/
          -->


    <!-- Sanciones por no incluir el aviso legal o no redactarlo correctamente
          En caso de no publicar el aviso legal LOPD en la web o de que esté incompleto, nos enfrentamos a diversas sanciones.

          La LSSI-CE establece las sanciones en caso de no cumplir con las obligaciones como agentes de la sociedad de la información. Dichas sanciones dependen de la gravedad de la infracción.

          Infracciones leves: hasta 30.000 euros de multa
          Infracciones graves: entre 30.001 y 150.000 euros
          Infracciones muy graves: entre 150.001 y 600.000 euros-->


    <!-- -->

</body>

</html>