<?php
    // Obtén la URL del directorio de tu tema
    $theme_directory_uri = get_template_directory_uri();

    // Ruta de la imagen dentro de la carpeta de imágenes del tema
    $imgTiktok = $theme_directory_uri . '/images/tiktokLogo.png';
    $imgYt = $theme_directory_uri . '/images/ytLogo.png';
    $imgTwich = $theme_directory_uri . '/images/twichLogo.png';
    $imgInsta = $theme_directory_uri . '/images/instaLogo.png';
    $imgDisc = $theme_directory_uri . '/images/discLogo.png';
    ?>

<head>
<title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
        <!-- Agrega tu enlace a la hoja de estilo personalizada aquí -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
        <script src="https://kit.fontawesome.com/7001c2b5aa.js" crossorigin="anonymous"></script>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<!-- EL FOOTER Poner Aviso legal, Politica de coockies, Politica de privacidad y Condiciones de uso-->
    <footer>
        <div class="container">
            <div class="content">
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 left">
                    <div class="flex1">
                        <p>Contacto</p>
                        <p>
                            Si deseas contactar con nosotros <br> siempre estamos atentos a <br>
                            las redes sociales, esperamos poder ser de ayuda.
                        </p>
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
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 centered">
                    <div class="column">
                        <p>Información</p>
                        <p>Sobre nosotros</p>
                        <p>Politicas de privacidad</p>
                        <p>Contáctanos</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-12 right">
                    <p>Síguenos</p>
                    <div class="social">
                        <a href="https://www.youtube.com/@pr_matsuri" target="_blank"><img class="logo2" src="<?php echo esc_url($imgYt); ?>" alt=""></a>
                        <a href="https://discord.gg/aneaHgvQRp" target="_blank"><img class="logo2" src="<?php echo esc_url($imgDisc); ?>" alt=""></a>
                        <a href="https://www.instagram.com/pr_matsuri/?hl=es" target="_blank"><img class="logo2" src="<?php echo esc_url($imgInsta); ?>" alt=""></a>
                        <a href="https://www.twitch.tv/pr_matsuri" target="_blank"><img class="logo2" src="<?php echo esc_url($imgTwich); ?>" alt=""></a>
                        <a href="https://www.tiktok.com/@pr_matsuri?lang=es" target="_blank"><img class="logo2" src="<?php echo esc_url($imgTiktok); ?>" alt=""></a>
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