<?php $ver = rand(0, 99999); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        wp_enqueue_style( 'BootstrapCss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', array(), $ver, 'all');
        wp_enqueue_style( 'BootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), $ver, 'all');
        wp_enqueue_style( 'SweetAlertCss', 'https://cdn.jsdelivr.net/sweetalert2/6.5.6/sweetalert2.min.css', array(), $ver, 'all' );
        wp_enqueue_style( 'SlickCss', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), $ver, 'all' );
        wp_enqueue_style( 'ExoFont', 'https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap', array(), $ver, false );
        //wp_enqueue_style( 'HamburguerCss', get_template_directory_uri() . '/css/hamburger.css', array(), $ver, false );
        wp_enqueue_style( 'MainCss', get_template_directory_uri() . '/style.css', array(), $ver, false );
        wp_enqueue_style( 'ResponsiveCss', get_template_directory_uri() . '/css/responsive.css', array(), $ver, false );
    ?>
    <?php
        wp_enqueue_script( 'BootstrapJs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', array('jquery'), $ver, true);
        wp_enqueue_script( 'SweetAlertJs', 'https://cdn.jsdelivr.net/sweetalert2/6.5.6/sweetalert2.min.js', array('jquery'), $ver, true );
        wp_enqueue_script( 'SlickJs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), $ver, true );
        //wp_enqueue_script( 'MaskJs', get_template_directory_uri() . '/js/jquery.mask.js', array('jquery'), $ver, true );
        wp_enqueue_script( 'MainJs', get_template_directory_uri() . '/js/functions.js', array('jquery'), $ver, true );
    ?>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" />
    <?php $page = get_queried_object(); ?>
    <title><?php if(is_home()){ echo 'Home'; }elseif(is_post_type_archive()){ echo $page->label; }elseif(is_404()){ echo 'A página buscada não existe'; }else{ echo $post->post_title; } ?> | RQL Advogados</title>
</head>
<body>
    <header id="stickyHeader">
        <div class="top-header bg-black">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-auto">
                        <a target="_blank" href="mailto:rql@rqladvogadosassociados.com.br" class="top-link">
                            <i class="bi bi-envelope"></i>
                            <span>rql@rqladvogadosassociados.com.br</span>
                        </a>
                    </div>
                    <div class="col-lg-auto">
                        <a target="_blank" href="tel:+551123919452" class="top-link">
                            <i class="bi bi-telephone"></i>
                            <span>+55 (11) 2391-9452</span>
                        </a>
                    </div>
                    <div class="col-lg-auto">
                        <a target="_blank" href="https://www.instagram.com/rochaequeirozadvogados" class="top-link">
                            <i class="bi bi-instagram"></i>
                            <span>Siga-nos no Instagram</span>
                        </a>
                    </div>
                    <?php /*
                    <div class="col-lg-auto">
                        <button class="lang-btn">
                            <i class="bi bi-translate"></i>
                            <span>SELECIONAR IDIOMA</span>
                            <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>
                    */ ?>
                </div>
            </div>
        </div>
        <div class="main-header bg-light-black">
            <div class="spacer-20"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-4">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo-rql.svg" alt="">
                        </a>
                    </div>
                    <div class="col-8 d-flex justify-content-end">
                        <nav class="main-nav">
                            <a<?php if(is_page('o-escritorio')): ?> class="active"<?php endif; ?> href="<?php bloginfo('url'); ?>/o-escritorio">O Escritório</a>
                            <a<?php if(is_post_type_archive('equipe') || is_singular('equipe')): ?> class="active"<?php endif; ?> href="<?php bloginfo('url'); ?>/equipe">Equipe</a>
                            <a href="#">Áreas de Atuação</a>
                            <?php /*
                            <a href="#">Publicações</a>
                            */ ?>
                            <a href="#">Carreiras</a>
                            <a href="#">Contato</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="spacer-50"></div>
        </div>
    </header>