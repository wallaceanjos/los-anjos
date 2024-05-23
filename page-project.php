<?php
/*
Template Name: Projeto
*/
?>

<?php
    get_header();
?>

<?php
// O início do loop do WordPress
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // O código para exibir cada projeto
        the_content(); // Exibir o conteúdo do projeto
    endwhile;
endif;
?>

<?php
    $page_02_img1 = get_template_directory_uri() . '/assets/images/single-project-page-02-img1.jpg';
    $page_02_img2 = get_template_directory_uri() . '/assets/images/single-project-page-02-img2.png';
    $page_02_img3 = get_template_directory_uri() . '/assets/images/single-project-page-02-img3.jpg';
    $page_02_img4 = get_template_directory_uri() . '/assets/images/single-project-page-02-img4.jpg';
    $page_02_img5 = get_template_directory_uri() . '/assets/images/single-project-page-02-img5.jpg';
    $page_02_img6 = get_template_directory_uri() . '/assets/images/single-project-page-02-img6.jpg';
    $page_02_img7 = get_template_directory_uri() . '/assets/images/single-project-page-02-img7.jpg';
    $page_02_img8 = get_template_directory_uri() . '/assets/images/single-project-page-02-img8.jpg';
    $page_02_img13 =get_template_directory_uri() . ' /assets/images/single-project-page-02-img13.jpg';
    $page_02_img15 =get_template_directory_uri() . ' /assets/images/single-project-page-02-img15.jpg';
    $page_02_img16 =get_template_directory_uri() . ' /assets/images/single-project-page-02-img16.jpg';
    $page_01_img23 =get_template_directory_uri() . ' /assets/images/single-project-page-01-img23.jpg';
    $page_01_img24 =get_template_directory_uri() . ' /assets/images/single-project-page-01-img24.jpg';
?>

<div class="main-content">
    <!-- start banner section -->
    <section class="p-0 one-fifth-screen sm-h-450px xs-h-350px cover-background d-flex align-items-end" style="background-image: url('<?php echo esc_url($page_02_img1); ?>');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-6 text-center">
                    <img src="<?php echo esc_url($page_02_img2); ?>" alt="" class="w-25">
                    <h5 class="alt-font text-white margin-5-rem-top margin-9-rem-bottom font-weight-600 text-uppercase d-block xs-margin-3-rem-top xs-margin-5-rem-bottom"><?php echo the_title();?></h5>
                    <span class="separator-line-vertical w-100px h-1px d-inline-block align-middle bg-dark-purple xs-w-60px"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-5 col-md-4 text-center text-md-start sm-margin-30px-bottom wow animate__fadeIn">
                            <img src="<?php echo esc_url($page_02_img5); ?>" alt="">
                        </div>
                        <div class="col-12 col-lg-6 col-md-8 text-center text-md-start wow animate__fadeIn">
                            <span class="text-purple letter-spacing-minus-1-half title-extra-small line-height-40px alt-font margin-40px-bottom font-weight-500 sm-margin-30px-bottom d-inline-block">Gents club is a eCommerce brand based on London. One of our latest projects.</span>
                            <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-small position-relative">
                                <span>
                                    <span class="video-icon bg-extra-dark-gray margin-15px-right">
                                        <i class="icon-simple-line-control-play text-orange"></i>
                                        <span class="video-icon-sonar"></span>
                                    </span>
                                    <span class="video-icon-text alt-font text-medium text-purple text-uppercase text-decoration-line-bottom d-inline-block font-weight-500 align-middle">Watch a projects</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12"><div class="w-100 h-1px bg-medium-gray opacity-7 margin-6-half-rem-tb sm-margin-5-rem-tb"></div></div>
                        <div class="col-12 alt-font text-uppercase text-small font-weight-500 line-height-12px">
                            <div class="row">
                                <div class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray sm-margin-30px-bottom xs-border-none wow animate__fadeIn">
                                    <span class="d-block d-lg-inline-block md-margin-10px-bottom">Date:</span>
                                    <span class="text-purple">08 January 2020</span>
                                </div>
                                <div class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray sm-border-none sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                    <span class="d-block d-lg-inline-block md-margin-10px-bottom">client:</span>
                                    <span class="text-purple">syrona jarabe de</span>
                                </div>
                                <div class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray xs-border-none xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                                    <span class="d-block d-lg-inline-block md-margin-10px-bottom">industry:</span>
                                    <span class="text-purple">fashion shoes</span>
                                </div>
                                <div class="col-12 col-md-3 col-sm-6 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                                    <span class="d-block d-lg-inline-block md-margin-10px-bottom">website:</span>
                                    <a class="text-purple text-dark-purple-hover" href="https://www.themezaa.com/" target="_blank">www.themezaa.com</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 cover-background one-third-screen sm-margin-15px-bottom" style="background: url('<?php echo esc_url($page_02_img3); ?>');"></div>
                <div class="col-12 col-md-6 cover-background one-third-screen" style="background: url('<?php echo esc_url($page_02_img4); ?>');"></div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-4 col-md-7 col-sm-9 md-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <h6 class="alt-font text-purple font-weight-500 m-0">Running allows me to set my mind free. Nothing seems impossible.</h6>
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="d-flex alt-font text-purple margin-15px-bottom font-weight-500"><span class="flex-shrink-0 align-self-center h-1px w-40px bg-dark-purple margin-20px-right"></span><div class="flex-grow-1">The Challenge</div></div>
                    <p class="md-w-80 xs-w-100">
                        <?php echo $this_content; ?>
                    </p>
                </div>
                <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="d-flex alt-font text-purple margin-15px-bottom font-weight-500"><span class="flex-shrink-0 align-self-center h-1px w-40px bg-dark-purple margin-20px-right"></span><div class="flex-grow-1">The Approach</div></div>
                    <p class="md-w-80 xs-w-100">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 parallax h-750px md-h-550px sm-h-350px" data-parallax-background-ratio="0.1" style="background: url('<?php echo esc_url($page_02_img6); ?>');"></section>
    <!-- end section -->
    <!-- start section -->
    <section class="overlap-height">
        <div class="container">
            <div class="row align-items-lg-center justify-content-center overlap-gap-section">
                <div class="col-12 col-lg-2 text-center text-lg-start md-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <img src="<?php echo esc_url($page_02_img7); ?>" alt="">
                </div>
                <div class="col-12 col-xl-5 col-md-6 col-sm-11 text-center text-md-start md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <span class="alt-font title-extra-small text-purple letter-spacing-minus-1-half line-height-40px font-weight-500 d-inline-block xs-w-95">For men shoes are the most important. Good shoes take you good places</span>
                </div>
                <div class="col-12 col-lg-4 offset-xl-1 col-md-6 col-sm-10 text-center text-md-start last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.6s">
                    <span class="alt-font text-purple font-weight-500 margin-15px-bottom d-inline-block">Design and style above average</span>
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0 bg-light-gray overflow-visible">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 overlap-section text-center margin-100px-bottom sm-margin-50px-tb">
                    <img src="<?php echo esc_url($page_02_img8); ?>" alt="" class="border-all border-width-10px border-color-white box-shadow-extra-large" />
                    <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-large absolute-middle-center">
                        <span>
                            <span class="video-icon bg-white">
                                <i class="icon-simple-line-control-play text-dark-purple"></i>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-bfr bg-dark-purple opacity-8"></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <!-- start blockquote item -->
                <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-10 text-center wow animate__fadeIn">
                    <i class="ti-quote-left text-dark-purple icon-large margin-25px-bottom d-block"></i>
                    <span class="text-extra-large text-purple line-height-34px alt-font d-block margin-25px-bottom">A shoe that is too large is apt to trip one and when too small to pinch the feet so it is with those whose fortune does not suit them.</span>
                    <span class="alt-font text-uppercase text-small font-weight-500 letter-spacing-4px">James nichols</span>
                </div>
                <!-- end blockquote item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12"><img src="<?php echo esc_url($page_02_img15); ?>" alt=""></div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 cover-background one-fifth-screen lg-h-700px md-h-550px xs-h-300px wow animate__fadeIn" style="background: url('<?php echo esc_url($logo_sponsor); ?>page-02-img13.jpg');"></section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-7 col-md-10 d-flex justify-content-end lg-padding-40px-left md-margin-50px-bottom">
                    <figure class="position-relative m-0">
                        <img src="<?php echo esc_url($page_02_img16); ?>">
                        <figcaption class="position-absolute bg-dark-purple bottom-minus-20px left-minus-50px text-white padding-3-half-rem-all w-50 xs-w-100 xs-left-minus-25px">
                            <span class="text-uppercase text-small letter-spacing-1px text-purple alt-font font-weight-500 margin-10px-bottom d-inline-block">Different design</span>
                            <h6 class="alt-font text-uppercase font-weight-500 mb-0">Apenas estratégia de Branding e Inovação</h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-xl-4 offset-xl-1 col-lg-5 col-md-9">
                    <span class="alt-font title-extra-small text-purple line-height-40px letter-spacing-minus-1-half font-weight-500 d-inline-block margin-25px-bottom">Designio é ter um propósito específico.</span>
                    <p>When an unknown printer took a galley of scrambled only five centuries, but also electronic typesetting. Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="btn btn-link btn-extra-large text-purple">Explore Website</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="fancy-box-background fancy-box-col bg-light-gray p-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-sm-2 justify-content-center">
                <!-- start prev pagination -->
                <div class="col fancy-box-item px-0">
                    <a href="single-project-page-02.html" class="d-flex h-100 align-items-center justify-content-center justify-content-lg-between justify-content-sm-start padding-7-rem-lr padding-4-rem-tb xl-padding-3-rem-all xs-padding-2-rem-tb xs-no-padding-lr">
                        <div class="bg-banner-image cover-background" style="background-image: url(<?php echo esc_url($page_01_img24); ?>)"></div>
                        <div class="light alt-font text-purple font-weight-500 btn-slide-icon-left text-uppercase me-lg-auto"><i class="line-icon-Arrow-OutLeft icon-medium align-middle margin-20px-right"></i><span class="d-none d-lg-inline-block text-small">Prev project</span></div>
                        <span class="light text-extra-large alt-font text-purple d-block font-weight-500">Model photography</span>
                    </a>
                </div>
                <!-- end prev pagination -->
                <!-- start next pagination -->
                <div class="col fancy-box-item px-0">
                    <a href="single-project-page-04.html" class="d-flex h-100 align-items-center justify-content-center justify-content-sm-end justify-content-lg-between padding-7-rem-lr padding-4-rem-tb xl-padding-3-rem-all xs-padding-2-rem-tb xs-no-padding-lr">
                        <div class="bg-banner-image cover-background" style="background-image: url(<?php echo esc_url($page_01_img23); ?>)"></div>
                        <span class="light text-extra-large alt-font text-purple d-block font-weight-500 me-lg-auto">Daimler financial</span>
                        <div class="light alt-font text-purple font-weight-500 btn-slide-icon text-uppercase"><span class="d-none d-lg-inline-block text-small">Next project </span><i class="line-icon-Arrow-OutRight icon-medium align-middle margin-20px-left"></i></div>
                    </a>
                </div>
                <!-- end next pagination -->
            </div>
        </div>
    </section>
    <!-- end section -->
</div>
<?php
    get_footer();
?>