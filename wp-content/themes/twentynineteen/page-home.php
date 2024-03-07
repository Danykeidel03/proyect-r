<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>projectR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- Agrega tu enlace a la hoja de estilo personalizada aquí -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
    <link rel="icon" type="image/png" sizes="16x16" href="imagenes/favicons/favicon-32x32.png">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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