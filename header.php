<!doctype html>
<html class="no-js" lang="pt-br">
<head>
        <title><?php echo get_bloginfo('name') ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Wallace dos Anjos">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Los Anjos é uma agência de marketing digital que oferece serviços de design, desenvolvimento de sites, marketing de conteúdo, otimização de sites para mecanismos de busca (SEO), e muito mais.">
        <meta name="keywords" content="Los Anjos, agência de marketing digital, design, desenvolvimento de sites, marketing de conteúdo, otimização de sites para mecanismos de busca (SEO)">
        <meta name="robots" content="index, follow">
        <!-- og -->
        <meta property="og:title" content="Los Anjos">
        <meta property="og:description" content="Los Anjos é uma agência de marketing digital que oferece serviços de design, desenvolvimento de sites, marketing de conteúdo, otimização de sites para mecanismos de busca (SEO), e muito mais.">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/images/og_los_anjos.jpg">
        <meta property="og:url" content="<?php echo home_url() ?>">
        <meta property="og:site_name" content="Los Anjos">
        <meta property="og:type" content="website">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- style sheets and font icons  -->
        <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json">
        <?php
            wp_head();
        ?>
    </head>
    <body data-mobile-nav-style="classic" class="light-theme">
    <?php
    $menu_banner_01_jpg = get_template_directory_uri() . '/assets/images/menu-banner-01.jpg';
    $menu_banner_02_jpg = get_template_directory_uri() . '/assets/images/menu-banner-02.jpg';
    $logo_black_png = get_template_directory_uri() . '/assets/images/logo-black.png';
?>
        <!-- start header -->
        <header>
            <nav class="navbar no-sticky navbar-expand-lg navbar-light bg-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
                <div class="container-fluid nav-header-container">
                    <div class="col-5 col-lg-2 ps-lg-0 me-auto me-lg-0 flex-center">
                        <a class="navbar-brand" href="<?php echo home_url()?>">
                            <div class="w-120 h-48" style="background: url(<?php echo esc_url($logo_black_png); ?>) no-repeat center center / contain">
                            </div>    
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 md-position-initial md-no-padding">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item">
                                    <a href="<?php echo home_url()?>/servicos/" class="nav-link">Agência</a>
                                </li>
                                <li class="nav-item">
                                    <!-- arquivo do blog -->
                                    <a href="<?php echo home_url()?>/blog/" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <!-- <a href="<?php echo home_url()?>/servicos/#projetos" class="nav-link">Projetos</a> -->
                                    <a href="<?php echo get_post_type_archive_link('projetos'); ?>" class="nav-link">Projetos</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="#" class="nav-link">Home</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                        <div class="d-lg-flex justify-content-center">
                                            <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Corporate</li>
                                                <li><a href="home-startup.html">Startup</a></li>
                                                <li><a href="home-business.html">Business</a></li>
                                                <li><a href="home-corporate.html">Corporate</a></li>
                                                <li><a href="home-finance.html">Finance</a></li>
                                                <li><a href="home-application.html">Application</a></li>
                                                <li><a href="home-consulting.html">Consulting</a></li>
                                                <li><a href="home-digital-agency.html">Digital agency</a></li>
                                                <li><a href="home-seo-agency.html">SEO agency</a></li>
                                                <li><a href="home-events-conference.html">Events & conference</a></li>
                                                <li><a href="home-marketing-agency.html">Marketing agency</a></li>
                                            </ul>
                                            <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Specialized</li>
                                                <li><a href="home-restaurant.html">Restaurant</a></li>
                                                <li><a href="home-architecture.html">Architecture</a></li>
                                                <li><a href="home-hotel-resort.html">Hotel & resort</a></li>
                                                <li><a href="home-travel-agency.html">Travel agency</a></li>
                                                <li><a href="home-yoga-meditation.html">Yoga & meditation</a></li>
                                                <li><a href="home-gym-fitness.html">Gym & fitness</a></li>
                                                <li><a href="home-spa-salon.html">Spa salon</a></li>
                                                <li><a href="home-cafe.html">Cafe</a></li>
                                                <li><a href="home-decor.html">Home decor</a></li>
                                                <li><a href="home-dentist.html">Dentist</a></li>
                                                <li><a href="home-interior-design.html">Interior design</a></li>
                                            </ul>
                                            <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Portfolio</li>
                                                <li><a href="home-design-agency.html">Design agency</a></li>
                                                <li><a href="home-web-agency.html">Web agency</a></li>
                                                <li><a href="home-creative-agency.html">Creative agency</a></li>
                                                <li><a href="home-freelancer.html">Freelancer</a></li>
                                                <li><a href="home-branding-agency.html">Branding agency</a></li>
                                                <li><a href="home-photography.html">Photography</a></li>
                                                <li><a href="home-personal-portfolio.html">Personal portfolio</a></li>
                                                <li><a href="home-vertical-portfolio.html">Vertical portfolio</a></li>
                                                <li><a href="home-interactive-portfolio.html">Interactive portfolio</a></li>
                                                <li><a href="home-split-portfolio.html">Split portfolio</a></li>
                                                <li><a href="home-creative-portfolio.html">Creative portfolio</a></li>
                                            </ul>
                                            <ul class="d-lg-inline-block">
                                                <li class="dropdown-header">Other</li>
                                                <li><a href="home-furniture-shop.html">Furniture shop</a></li>
                                                <li><a href="home-fashion-shop.html">Fashion shop</a></li>
                                                <li><a href="home-magazine.html">Magazine</a></li>
                                                <li><a href="home-lifestyle-blog.html">Lifestyle blog</a></li>
                                                <li><a href="home-classic-blog.html">Classic blog</a></li>
                                                <li><a href="home-blog-metro.html">Blog metro</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">Pages</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">About<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-me.html">About me</a></li>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="our-story.html">Our story</a></li>
                                                <li><a href="who-we-are.html">Who we are</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Services<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="our-services.html">Our services</a></li>
                                                <li><a href="what-we-offers.html">What we offer</a></li>
                                                <li><a href="our-process.html">Our process</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Contact<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="contact-us-simple.html">Contact simple</a></li>
                                                <li><a href="contact-us-classic.html">Contact classic</a></li>
                                                <li><a href="contact-us-modern.html">Contact modern</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Additional pages<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="our-team.html">Our team</a></li>
                                                <li><a href="latest-news.html">Latest news</a></li>
                                                <li><a href="pricing-packages.html">Pricing packages</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="coming-soon-v2.html">Coming soon - V2</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="search-result.html">Search result</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">Portfolio</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio classic<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-classic-two-column.html">Classic 2 column</a></li>
                                                <li><a href="portfolio-classic-three-column.html">Classic 3 column</a></li>
                                                <li><a href="portfolio-classic-four-column.html">Classic 4 column</a></li>
                                                <li><a href="portfolio-classic-masonry.html">Classic masonry</a></li>
                                                <li><a href="portfolio-classic-metro.html">Classic metro</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio boxed<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-boxed-two-column.html">Boxed 2 column</a></li>
                                                <li><a href="portfolio-boxed-three-column.html">Boxed 3 column</a></li>
                                                <li><a href="portfolio-boxed-four-column.html">Boxed 4 column</a></li>
                                                <li><a href="portfolio-boxed-masonry.html">Boxed masonry</a></li>
                                                <li><a href="portfolio-boxed-metro.html">Boxed metro</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio colorful<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-colorful-two-column.html">Colorful 2 column</a></li>
                                                <li><a href="portfolio-colorful-three-column.html">Colorful 3 column</a></li>
                                                <li><a href="portfolio-colorful-four-column.html">Colorful 4 column</a></li>
                                                <li><a href="portfolio-colorful-masonry.html">Colorful masonry</a></li>
                                                <li><a href="portfolio-colorful-metro.html">Colorful metro</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio bordered<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-bordered-two-column.html">Bordered 2 column</a></li>
                                                <li><a href="portfolio-bordered-three-column.html">Bordered 3 column</a></li>
                                                <li><a href="portfolio-bordered-four-column.html">Bordered 4 column</a></li>
                                                <li><a href="portfolio-bordered-masonry.html">Bordered masonry</a></li>
                                                <li><a href="portfolio-bordered-metro.html">Bordered metro</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio overlay<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-overlay-two-column.html">Overlay 2 column</a></li>
                                                <li><a href="portfolio-overlay-three-column.html">Overlay 3 column</a></li>
                                                <li><a href="portfolio-overlay-four-column.html">Overlay 4 column</a></li>
                                                <li><a href="portfolio-overlay-masonry.html">Overlay masonry</a></li>
                                                <li><a href="portfolio-overlay-metro.html">Overlay metro</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio switch image<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-switch-image-two-column.html">Switch image 2 column</a></li>
                                                <li><a href="portfolio-switch-image-three-column.html">Switch image 3 column</a></li>
                                                <li><a href="portfolio-switch-image-four-column.html">Switch image 4 column</a></li>
                                                <li><a href="portfolio-switch-image-masonry.html">Switch image masonry</a></li>
                                                <li><a href="portfolio-switch-image-metro.html">Switch image metro</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Portfolio other<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio-scattered.html">Portfolio scattered</a></li>
                                                <li><a href="portfolio-justified-gallery.html">Justified gallery</a></li>
                                                <li><a href="portfolio-slider.html">Portfolio slider</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Single project page<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="single-project-page-01.html">Single project page 01</a></li>
                                                <li><a href="single-project-page-02.html">Single project page 02</a></li>
                                                <li><a href="single-project-page-03.html">Single project page 03</a></li>
                                                <li><a href="single-project-page-04.html">Single project page 04</a></li>
                                                <li><a href="single-project-page-05.html">Single project page 05</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">Blog</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a href="blog-grid.html">Blog grid</a></li>
                                        <li class="dropdown"><a href="blog-masonry.html">Blog masonry</a></li>
                                        <li class="dropdown"><a href="blog-classic.html">Blog classic</a></li>
                                        <li class="dropdown"><a href="blog-simple.html">Blog simple</a></li>
                                        <li class="dropdown"><a href="blog-side-image.html">Blog side image</a></li>
                                        <li class="dropdown"><a href="blog-metro.html">Blog metro</a></li>
                                        <li class="dropdown"><a href="blog-overlay-image.html">Blog overlay image</a></li>
                                        <li class="dropdown"><a href="blog-modern.html">Blog modern</a></li>
                                        <li class="dropdown"><a href="blog-clean.html">Blog clean</a></li>
                                        <li class="dropdown"><a href="blog-widget.html">Blog widget</a></li>
                                        <li class="dropdown"><a href="blog-standard.html">Blog standard</a></li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Post layout<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-post-layout-01.html">Blog post layout 01</a></li>
                                                <li><a href="blog-post-layout-02.html">Blog post layout 02</a></li>
                                                <li><a href="blog-post-layout-03.html">Blog post layout 03</a></li>
                                                <li><a href="blog-post-layout-04.html">Blog post layout 04</a></li>
                                                <li><a href="blog-post-layout-05.html">Blog post layout 05</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Post types<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-standard-post.html">Standard post</a></li>
                                                <li><a href="blog-gallery-post.html">Gallery post</a></li>
                                                <li><a href="blog-slider-post.html">Slider post</a></li>
                                                <li><a href="blog-html5-video-post.html">HTML5 video post</a></li>
                                                <li><a href="blog-youtube-video-post.html">Youtube video post</a></li>
                                                <li><a href="blog-vimeo-video-post.html">Vimeo video post</a></li>
                                                <li><a href="blog-audio-post.html">Audio post</a></li>
                                                <li><a href="blog-blockquote-post.html">Blockquote post</a></li>
                                                <li><a href="blog-full-width-post.html">Full width post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="javascript:void(0);" class="nav-link">Shop</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                        <div class="d-lg-flex justify-content-center">
                                            <ul class="d-lg-inline-block md-margin-15px-bottom">
                                                <li class="dropdown-header">Shop layout</li>
                                                <li><a href="shop-wide.html">Shop wide</a></li>
                                                <li><a href="shop-left-sidebar.html">Left sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Right sidebar</a></li>
                                                <li><a href="shop-only-categories.html">Only categories</a></li>
                                                <li><a href="single-product.html">Single product</a></li>
                                                <li class="dropdown-header">Utility pages</li>
                                                <li><a href="shopping-cart.html">Shopping cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login-register.html">Login / Register</a></li>
                                            </ul>
                                            <ul class="d-lg-inline-block d-none small-gap">
                                                <li>
                                                    <a href="index.html" class="menu-banner-image"><img src="<?php echo esc_url($menu_banner_01_jpg); ?>" alt=""/></a>
                                                </li>
                                            </ul>
                                            <ul class="d-lg-inline-block d-none no-padding-right">
                                                <li>
                                                    <a href="index.html" class="menu-banner-image"><img src="<?php echo esc_url($menu_banner_02_jpg); ?>" alt=""/></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-auto col-lg-2 text-end hidden-xs px-lg-0">
                        <div class="header-social-icon d-inline-block">
                            <!-- <a href="http://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a> -->
                            <a href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações." target="_blank"><i class="fab fa-whatsapp" style="font-size:24px"></i></a>
                            <!-- <a href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header -->
        <div class="main-content">