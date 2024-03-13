    <!-- Menu de navegación-->
    <?php
    // Obtén la URL del directorio de tu tema
    $theme_directory_uri = get_template_directory_uri();

    // Ruta de la imagen dentro de la carpeta de imágenes del tema
    $image_path = $theme_directory_uri . '/images/logo.png';
    ?>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
        <!-- Agrega tu enlace a la hoja de estilo personalizada aquí -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/header.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    </head>
    <header>
        <div class="logoHeader">
            <img src="<?php echo esc_url($image_path); ?>" alt="" class="imgLogoHeader">
        </div>
        <div class="menuTlf">
            <div class="linea"></div>
            <div class="linea"></div>
            <div class="linea"></div>
        </div>
        <nav class="nav-bar">
            <ul class="listaMenu">
                <li>
                    <a href="#eventos">Blog</a>
                </li>
                <li>
                    <a href="#primero">Contacto</a>
                </li>
                <li>
                    <a href="#segundo">Filosofia</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Fin del Menu de navegación-->