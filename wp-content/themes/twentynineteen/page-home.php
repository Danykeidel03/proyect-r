<?php
    // Obtén la URL del directorio de tu tema
    $theme_directory_uri = get_template_directory_uri();

    // Ruta de la imagen dentro de la carpeta de imágenes del tema
    $gif_home = $theme_directory_uri . '/images/introGIF2_1.gif';
    ?>

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

<?php
    // Incluye el archivo headerPr.php desde el directorio del tema
    include(get_template_directory() . '/headerPr.php');
?>
<body>

    <!-- Menu para dispositivos moviles-->

    <script>
        menuTlf = document.querySelector(".menuTlf")
        menuTlf.onclick = function() {
            navBar = document.querySelector(".nav-bar")
            navBar.classList.toggle("activa")
        }
    </script>

    <div class="inicio">
        <!-- IMAGEN DEL INICIO-->

        <div class="PagPrincipal" id="PagP">
            <img class="logo2" src="<?php echo esc_url($gif_home); ?>" alt="">
        </div>




        <div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-53c09c96 elementor-widget elementor-widget-wpr-magazine-grid" data-id="53c09c96" data-element_type="widget" data-widget_type="wpr-magazine-grid.default">
				<div class="elementor-widget-container">
			<div class="wpr-magazine-grid-wrap" data-slide-effect="" style="opacity: 1;"><section class="wpr-magazine-grid wpr-mgzn-grid-3-h wpr-mgzn-grid-rows-1"><article class="wpr-mgzn-grid-item elementor-clearfix post-92 post type-post status-publish format-standard hentry category-sin-categoria entry"><div class="wpr-grid-item-inner"><div class="wpr-grid-media-wrap" data-overlay-link="yes" style="cursor: pointer;"><div class="wpr-grid-media-hover wpr-animation-wrap"><div class="wpr-grid-media-hover-bg  wpr-overlay-fade-out wpr-anim-size-small wpr-anim-timing-linear wpr-anim-transparency" data-url="http://localhost/wordpress/2024/03/22/prueba-2/"></div><div class="wpr-grid-media-hover-bottom elementor-clearfix"><h2 class="wpr-grid-item-title elementor-repeater-item-f0ad6cb wpr-grid-item-display-inline wpr-grid-item-align-center wpr-element-fade-out wpr-anim-size-medium wpr-anim-timing-ease-default wpr-anim-transparency wpr-pointer-none wpr-pointer-line-fx wpr-pointer-fx-fade"><div class="inner-block"><a target="_self" href="http://localhost/wordpress/2024/03/22/prueba-2/">Prueba 2</a></div></h2><div class="wpr-grid-item-excerpt elementor-repeater-item-2dd36b7 wpr-grid-item-display-inline wpr-grid-item-align-center wpr-element-fade-out wpr-anim-size-medium wpr-anim-timing-ease-default wpr-anim-transparency"><div class="inner-block"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.…</p></div></div><div class="wpr-grid-item-date elementor-repeater-item-476e800 wpr-grid-item-display-inline wpr-grid-item-align-left"><div class="inner-block"><span>22 de marzo de 2024</span></div></div><div class="wpr-grid-item-read-more elementor-repeater-item-b746ef6 wpr-grid-item-display-inline wpr-grid-item-align-right"><div class="inner-block"><a target="_self" href="http://localhost/wordpress/2024/03/22/prueba-2/" class="wpr-button-effect wpr-button-none"><span>Leer Más</span><span class="wpr-grid-extra-icon-right"><svg aria-hidden="true" class="e-font-icon-svg e-far-eye" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg></span></a></div></div></div></div></div></div></article><article class="wpr-mgzn-grid-item elementor-clearfix post-87 post type-post status-publish format-standard hentry category-sin-categoria entry"><div class="wpr-grid-item-inner"><div class="wpr-grid-media-wrap" data-overlay-link="yes" style="cursor: pointer;"><div class="wpr-grid-media-hover wpr-animation-wrap"><div class="wpr-grid-media-hover-bg  wpr-overlay-fade-out wpr-anim-size-small wpr-anim-timing-linear wpr-anim-transparency" data-url="http://localhost/wordpress/2024/03/22/prueba-1/"></div><div class="wpr-grid-media-hover-bottom elementor-clearfix"><h2 class="wpr-grid-item-title elementor-repeater-item-f0ad6cb wpr-grid-item-display-inline wpr-grid-item-align-center wpr-element-fade-out wpr-anim-size-medium wpr-anim-timing-ease-default wpr-anim-transparency wpr-pointer-none wpr-pointer-line-fx wpr-pointer-fx-fade"><div class="inner-block"><a target="_self" href="http://localhost/wordpress/2024/03/22/prueba-1/">Prueba 1</a></div></h2><div class="wpr-grid-item-excerpt elementor-repeater-item-2dd36b7 wpr-grid-item-display-inline wpr-grid-item-align-center wpr-element-fade-out wpr-anim-size-medium wpr-anim-timing-ease-default wpr-anim-transparency"><div class="inner-block"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.…</p></div></div><div class="wpr-grid-item-date elementor-repeater-item-476e800 wpr-grid-item-display-inline wpr-grid-item-align-left"><div class="inner-block"><span>22 de marzo de 2024</span></div></div><div class="wpr-grid-item-read-more elementor-repeater-item-b746ef6 wpr-grid-item-display-inline wpr-grid-item-align-right"><div class="inner-block"><a target="_self" href="http://localhost/wordpress/2024/03/22/prueba-1/" class="wpr-button-effect wpr-button-none"><span>Leer Más</span><span class="wpr-grid-extra-icon-right"><svg aria-hidden="true" class="e-font-icon-svg e-far-eye" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg></span></a></div></div></div></div></div></div></article><article class="wpr-mgzn-grid-item elementor-clearfix post-1 post type-post status-publish format-standard hentry category-sin-categoria entry"><div class="wpr-grid-item-inner"><div class="wpr-grid-media-wrap" data-overlay-link="yes" style="cursor: pointer;"><div class="wpr-grid-media-hover wpr-animation-wrap"><div class="wpr-grid-media-hover-bg  wpr-overlay-fade-out wpr-anim-size-small wpr-anim-timing-linear wpr-anim-transparency" data-url="http://localhost/wordpress/2024/02/17/hola-mundo/"></div><div class="wpr-grid-media-hover-bottom elementor-clearfix"><h2 class="wpr-grid-item-title elementor-repeater-item-f0ad6cb wpr-grid-item-display-inline wpr-grid-item-align-center wpr-element-fade-out wpr-anim-size-medium wpr-anim-timing-ease-default wpr-anim-transparency wpr-pointer-none wpr-pointer-line-fx wpr-pointer-fx-fade"><div class="inner-block"><a target="_self" href="http://localhost/wordpress/2024/02/17/hola-mundo/">JAPÓN</a></div></h2><div class="wpr-grid-item-excerpt elementor-repeater-item-2dd36b7 wpr-grid-item-display-inline wpr-grid-item-align-center wpr-element-fade-out wpr-anim-size-medium wpr-anim-timing-ease-default wpr-anim-transparency"><div class="inner-block"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.…</p></div></div><div class="wpr-grid-item-date elementor-repeater-item-476e800 wpr-grid-item-display-inline wpr-grid-item-align-left"><div class="inner-block"><span>22 de marzo de 2024</span></div></div><div class="wpr-grid-item-read-more elementor-repeater-item-b746ef6 wpr-grid-item-display-inline wpr-grid-item-align-right"><div class="inner-block"><a target="_self" href="http://localhost/wordpress/2024/02/17/hola-mundo/" class="wpr-button-effect wpr-button-none"><span>Leer Más</span><span class="wpr-grid-extra-icon-right"><svg aria-hidden="true" class="e-font-icon-svg e-far-eye" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg></span></a></div></div></div></div></div></div></article></section></div>		</div>
				</div>
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

        <?php
        //if (function_exists('do_shortcode')) {
            // Coloca el ID de tu slider en lugar de "10"
            $slider_shortcode = '[metaslider id="10"]';

            // Imprime el slider usando do_shortcode
            echo do_shortcode($slider_shortcode);
        //}
        ?>

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

<?php
    // Incluye el archivo headerPr.php desde el directorio del tema
    include(get_template_directory() . '/footerPr.php');
    ?>

</html>
<script src="<?php echo get_template_directory_uri(); ?>/js/padingHome.js"></script>