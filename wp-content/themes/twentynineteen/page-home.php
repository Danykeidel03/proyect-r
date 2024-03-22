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

        <?php
        //if (function_exists('do_shortcode')) {
            // Coloca el ID de tu slider en lugar de "10"
            //$slider_shortcode = '[metaslider id="10"]';

            // Imprime el slider usando do_shortcode
            //echo do_shortcode($slider_shortcode);
        //}
        ?>

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