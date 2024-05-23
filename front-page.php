<?php
    get_header();
?>
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
?>
    
<!-- Assets -->
<?php
    $home_design_agency_bg_img_01_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-bg-img-01.jpg';
    $home_design_agency_bg_img_01_png = get_template_directory_uri() . '/assets/images/home-design-agency-bg-img-01.png';
    $home_design_agency_img_04_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-04.jpg';
    $home_design_agency_img_05_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-05.jpg';
    $home_design_agency_img_06_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-06.jpg';
    $home_design_agency_img_07_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-07.jpg';
    $home_design_agency_img_08_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-08.jpg';
    $home_design_agency_img_09_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-09.jpg';
    $home_design_agency_img_10_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-10.jpg';
    $home_design_agency_img_01_png = get_template_directory_uri() . '/assets/images/home-design-agency-img-01.png';
    $home_design_agency_img_02_png = get_template_directory_uri() . '/assets/images/home-design-agency-img-02.png';
    $company_logo_24_png = get_template_directory_uri() . '/assets/images/company-logo-24.png';
    $company_logo_25_png = get_template_directory_uri() . '/assets/images/company-logo-25.png';
    $company_logo_26_png = get_template_directory_uri() . '/assets/images/company-logo-26.png';
    $company_logo_27_png = get_template_directory_uri() . '/assets/images/company-logo-27.png';
    $company_logo_28_png = get_template_directory_uri() . '/assets/images/company-logo-28.png';
    $company_logo_29_png = get_template_directory_uri() . '/assets/images/company-logo-29.png';
    $company_logo_30_png = get_template_directory_uri() . '/assets/images/company-logo-30.png';
    $company_logo_31_png = get_template_directory_uri() . '/assets/images/company-logo-31.png';
    $home_design_agency_img_01_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-01.jpg';
    $home_design_agency_img_02_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-02.jpg';
    $home_design_agency_img_03_jpg = get_template_directory_uri() . '/assets/images/home-design-agency-img-03.jpg';
    $home_design_agency_bg_img_02_png = get_template_directory_uri() . '/assets/images/home-design-agency-bg-img-02.png';
    $home_design_agency_animated_gif = get_template_directory_uri() . '/assets/images/bgvideosite.gif';
?>
<!-- Assets -->

<!-- Content -->
<?php
    $section_1_string_1 = get_post_meta(get_the_ID(), 'section_1_string_1', true);
    $section_1_string_2 = get_post_meta(get_the_ID(), 'section_1_string_2', true);
?>
<!-- Content -->



    <div class="main-content">
        <style>
            .mbYTP_wrapper{
                filter: contrast(1.5) sepia(1) hue-rotate(14deg) saturate(11) brightness(2);
                mix-blend-mode: screen;
            }
        </style>
        <!-- start section -->
        <section class="parallax p-0" data-parallax-background-ratio="0.3" style="background-image:url(<?php echo esc_url($home_design_agency_bg_img_01_jpg); ?>);">
            <div id="homepage" data-background="./assets/images/background-video-bg.jpg" style="min-height:100vh;">
                <!-- Video BG Init -->
                <div class="player"
                    data-property="{videoURL:'https://www.youtube.com/watch?v=5_Blq9W9cT8',containment:'#homepage',autoPlay:true, showControls:false, showYTLogo: false, mute:true, startAt:0, opacity:1,addRaster:false, quality:'default'}">
                </div>
                <div class="with-bg-size" style="position:absolute; top:0px; left:0px; z-index:0; width:100%; margin:auto;">
                    <div class="position-absolute cover-background top-0px left-0px w-100 h-100" data-parallax-background-ratio="0.5" style="background: url(<?php echo esc_url($home_design_agency_bg_img_01_png); ?>)no-repeat center-center/cover;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-5 col-md-6 col-sm-7 full-screen md-h-650px sm-h-500px d-flex flex-column justify-content-center padding-8-rem-tb" style="backdrop-filter: blur(10px); min-height: 100vh;">
                                <h1 class="alt-font font-weight-600 title-large text-purple letter-spacing-minus-4px margin-4-half-rem-bottom sm-letter-spacing-minus-1-half xs-w-65">Los Anjos Agency. Design & Web</h1>
                                <a href="contact-us-classic.html" class="btn btn-extra-large btn-expand-ltr text-purple btn-rounded align-self-start font-weight-600">Comece agora.<span class="bg-white"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-down-bottom">
                        <a href="#about" class="section-link d-block w-2px h-35px bg-white mx-auto right-0px left-0px position-absolute">
                            <span class="scroll-down-text alt-font font-weight-600 text-purple letter-spacing-minus-1-half margin-5px-bottom">scroll</span>
                        </a>
                    </div>
                </div>
                <!-- End Video BG Init -->
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section id="about" class="big-section">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 justify-content-center">
                    <!-- start feature box item -->
                    <div class="col text-center md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                        <a href="#" class="text-medium-gray text-sunglow-hover cursor-default">
                            <i class="line-icon-Vector-5 icon-large padding-20px-bottom"></i>
                            <span class="alt-font font-weight-600 text-purple text-uppercase d-block">Bom Design</span>
                        </a>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col text-center md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <a href="#" class="text-medium-gray text-sunglow-hover cursor-default">
                            <i class="line-icon-Police icon-large padding-20px-bottom"></i>
                            <span class="alt-font font-weight-600 text-purple text-uppercase d-block">Ideias Inspiradoras</span>
                        </a>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col text-center md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                        <a href="#" class="text-medium-gray text-sunglow-hover cursor-default">
                            <i class="line-icon-Bee icon-large padding-20px-bottom"></i>
                            <span class="alt-font font-weight-600 text-purple text-uppercase d-block">Inovação</span>
                        </a>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col text-center sm-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                        <a href="#" class="text-medium-gray text-sunglow-hover cursor-default">
                            <i class="line-icon-Medal-2 icon-large padding-20px-bottom"></i>
                            <span class="alt-font font-weight-600 text-purple text-uppercase d-block">Melhor Qualidade</span>
                        </a>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col text-center wow animate__fadeIn" data-wow-delay="0.5s">
                        <a href="#" class="text-medium-gray text-sunglow-hover cursor-default">
                            <i class="line-icon-Idea-5 icon-large padding-20px-bottom"></i>
                            <span class="alt-font font-weight-600 text-purple text-uppercase d-block">Análise de Branding</span>
                        </a>
                    </div>
                    <!-- end feature box item -->
                </div>
                <div class="row align-items-center justify-content-center margin-10-half-rem-top md-margin-7-rem-top">
                    <div class="col-12 col-lg-3 pe-lg-0 md-margin-25px-bottom sm-margin-15px-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.2s">
                        <span class="alt-font font-weight-600 title-large text-sunglow d-block letter-spacing-minus-5px sm-letter-spacing-minus-1-half">Falae<span class="text-purple">.</span></span>
                    </div>
                    <div class="col-12 col-lg-5 col-md-10 text-lg-end md-margin-25px-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.4s">
                        <h4 class="alt-font font-weight-600 text-purple d-block mb-0 padding-2-half-rem-right letter-spacing-minus-1px lg-no-padding-right">Agência especializada em produção de design criativo.</h4>
                    </div>
                    <div class="col-12 col-lg-4 col-md-9 padding-30px-left md-padding-15px-left text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.6s">
                        <p class="w-80 margin-15px-bottom lg-w-100">Somos os mestres do design gráfico! Vamos transformar suas ideias em obras-primas visuais.</p>
                        <a href="about-us.html" class="btn btn-link btn-extra-large text-purple font-weight-600">Agency info</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="big-section border-top border-color-medium-gray pb-0">
            <div class="container">
                <div class="row align-items-center margin-10-rem-bottom md-margin-5-rem-bottom sm-margin-4-rem-bottom">
                    <div class="col-12 col-lg-4 text-center text-lg-start md-margin-30px-bottom wow animate__fadeIn">
                        <h4 class="alt-font font-weight-600 text-purple mb-0 letter-spacing-minus-1px">Amazing work</h4>
                    </div>
                    <div class="col-12 col-lg-8 text-center wow animate__fadeIn">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-center justify-content-lg-end border-0 text-uppercase font-weight-500 alt-font">
                            <li class="nav active"><a data-filter="*" href="#">All</a></li>
                            <li class="nav"><a data-filter=".branding" href="#">Branding</a></li>
                            <li class="nav"><a data-filter=".graphics" href="#">Graphics</a></li>
                            <li class="nav"><a data-filter=".logos" href="#">Logos</a></li>
                            <li class="nav"><a data-filter=".photography" href="#">Photography</a></li>
                        </ul>
                        <!-- end filter navigation -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 filter-content px-md-0 wow animate__fadeIn">
                        <ul class="portfolio-bordered portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item logos branding wow animate__fadeIn">
                                <a href="<?php echo home_url('/regenere/'); ?>">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <img src="<?php echo esc_url($home_design_agency_img_04_jpg); ?>" alt="" />
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">Regenere</div>
                                                    <div class="text-uppercase text-medium-gray text-small alt-font d-block">Design</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos graphics wow animate__fadeIn">
                                <a href="single-project-page-02.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <img src="<?php echo esc_url($home_design_agency_img_05_jpg); ?>" alt="" />
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">Biolator</div>
                                                    <div class="text-uppercase text-medium-gray text-small alt-font d-block">Branding</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item photography branding wow animate__fadeIn">
                                <a href="single-project-page-03.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <img src="<?php echo esc_url($home_design_agency_img_06_jpg); ?>" alt="" />
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">Oslands</div>
                                                    <div class="text-uppercase text-medium-gray text-small alt-font d-block">Branding</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item photography graphics wow animate__fadeIn">
                                <a href="single-project-page-04.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <img src="<?php echo esc_url($home_design_agency_img_07_jpg); ?>" alt="" />
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">Financial</div>
                                                    <div class="text-uppercase text-medium-gray text-small alt-font d-block">Photography</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos graphics branding wow animate__fadeIn">
                                <a href="single-project-page-05.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <img src="<?php echo esc_url($home_design_agency_img_08_jpg); ?>" alt="" />
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">Dupont</div>
                                                    <div class="text-uppercase text-medium-gray text-small alt-font d-block">Branding</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos photography wow animate__fadeIn">
                                <a href="single-project-page-01.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <img src="<?php echo esc_url($home_design_agency_img_09_jpg); ?>" alt="" />
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">Gardner</div>
                                                    <div class="text-uppercase text-medium-gray text-small alt-font d-block">Branding</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item graphics photography branding wow animate__fadeIn">
                                <a href="single-project-page-02.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <img src="<?php echo esc_url($home_design_agency_img_10_jpg); ?>" alt="" />
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">Truenorth</div>
                                                    <div class="text-uppercase text-medium-gray text-small alt-font d-block">Photography</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-gradient-white-light-gray">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-6 position-relative text-center md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <img src="<?php echo esc_url($home_design_agency_img_01_png); ?>" alt="" style="position: relative; z-index: 1;" />
                            
                        <div class="absolute-middle-center">
                            <img src="<?php echo esc_url($home_design_agency_animated_gif); ?>" alt="" style=" aspect-ratio:9/16; width:250px">
                        </div>
                        <div class="absolute-middle-center">
                            <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-large position-relative">
                                <span>
                                    <span class="video-icon bg-white">
                                        <i class="icon-simple-line-control-play text-purple"></i>
                                        <span class="video-icon-sonar">
                                            <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                            <span class="video-icon-sonar-afr bg-white"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-lg-5 offset-lg-1 col-md-7">
                        <h4 class="alt-font font-weight-600 text-purple margin-4-half-rem-bottom letter-spacing-minus-1px text-center text-lg-start wow animate__fadeInRight" data-wow-delay="0.2s">Browse amazing design services!</h4>
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon-middle margin-4-half-rem-bottom wow animate__fadeInRight" data-wow-delay="0.3s">
                            <div class="feature-box-icon feature-box-icon-rounded dark bg-white w-85px h-85px rounded-circle box-shadow-small margin-40px-right">
                                <i class="line-icon-Cursor-Click2 icon-very-medium"></i>
                                <div class="feature-box-icon-hover bg-dark-purple rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-purple">Powerfull options</span>
                                <p>Lorem ipsum dolor consectet eiusmod tempor incididunt</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon-middle margin-4-half-rem-bottom wow animate__fadeInRight" data-wow-delay="0.4s">
                            <div class="feature-box-icon feature-box-icon-rounded dark bg-white w-85px h-85px rounded-circle box-shadow-small margin-40px-right">
                                <i class="line-icon-Sand-watch2 icon-very-medium"></i>
                                <div class="feature-box-icon-hover bg-dark-purple rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-purple">Unlimited variations</span>
                                <p>Lorem ipsum dolor consectet eiusmod tempor incididunt</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon-middle wow animate__fadeInRight" data-wow-delay="0.5s">
                            <div class="feature-box-icon feature-box-icon-rounded dark bg-white w-85px h-85px rounded-circle box-shadow-small margin-40px-right">
                                <i class="line-icon-Idea-5 icon-very-medium"></i>
                                <div class="feature-box-icon-hover bg-dark-purple rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-purple">Effective strategy</span>
                                <p>Lorem ipsum dolor consectet eiusmod tempor incididunt</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center margin-7-rem-top lg-margin-4-half-rem-top wow animate__fadeIn" data-wow-delay="0.6s">
                        <span class="alt-font text-purple text-large">Are you interested in working with us? <a href="#pricing" class="font-weight-600 text-decoration-line-bottom text-purple text-black-hover section-link">Let's started now</a></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section id="pricing" class="big-section pb-0 border-bottom border-width-1px border-color-medium-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-xl-4 col-lg-5 md-margin-5-rem-bottom sm-margin-6-half-rem-bottom text-center text-md-start wow animate__fadeIn" data-wow-delay="0.2s">
                        <h4 class="alt-font font-weight-600 text-purple letter-spacing-minus-1px margin-2-half-rem-bottom">Hire dedicated creative designer?</h4>
                        <p class="w-90 sm-w-100">Lorem ipsum dolor amet consectetur adipiscing do eiusmod tempor incididunt labore dolore magna ut enim ad minim veniam nostrud ullamco laboris nisi commodo.</p>
                        <a href="pricing-packages.html" class="btn btn-fancy btn-medium btn-transparent-light-gray margin-20px-top">Pricing packages</a>
                    </div>
                    <div class="col-12 col-xl-6 offset-xl-2 col-lg-7 md-padding-25px-left md-padding-35px-right sm-padding-15px-lr">
                        <div class="row row-cols-1 row-cols-md-2 align-items-center sm-no-margin-lr">
                            <div class="col pricing-table-style-02 text-center px-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.6s">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white box-shadow-small">
                                    <!-- start pricing header -->
                                    <div class="pricing-header padding-55px-top">
                                        <i class="line-icon-Boy icon-large text-sunglow"></i>
                                        <span class="alt-font font-weight-600 text-extra-medium text-purple text-uppercase d-block margin-5px-top">Standard</span>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <h4 class="alt-font font-weight-600 text-slate-blue mb-0 letter-spacing-minus-2px">$800</h4>
                                        <div class="alt-font font-weight-500 text-small text-uppercase letter-spacing-1px margin-30px-bottom">Per month</div>
                                        <ul class="list-style-03">
                                            <li class="border-0 p-0 margin-10px-bottom">Limited hours</li>
                                            <li class="border-0 p-0">Limited projects</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray" href="pricing-packages.html">Get started</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-0 wow animate__fadeIn" data-wow-delay="0.3s">
                                <!-- start pricing table -->
                                <div class="pricing-table pricing-popular bg-white box-shadow-small">
                                    <div class="popular-label alt-font font-weight-600 text-extra-small text-purple bg-sunglow text-uppercase padding-5px-tb">Popular</div>
                                    <!-- start pricing header -->
                                    <div class="pricing-header padding-65px-top">
                                        <i class="line-icon-Bee icon-large text-sunglow"></i>
                                        <span class="alt-font font-weight-600 text-extra-medium text-purple text-uppercase d-block margin-5px-top">Advanced</span>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <h4 class="alt-font font-weight-600 text-slate-blue mb-0 letter-spacing-minus-2px">$1200</h4>
                                        <div class="alt-font font-weight-500 text-small text-uppercase letter-spacing-1px margin-30px-bottom">Per month</div>
                                        <ul class="list-style-03">
                                            <li class="border-0 p-0 margin-10px-bottom">Unlimited hours</li>
                                            <li class="border-0 p-0 margin-10px-bottom">Unlimited projects</li>
                                            <li class="border-0 p-0">Unlimited variations</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-65px-bottom">
                                        <a class="btn btn-fancy btn-small btn-dark-gray" href="pricing-packages.html">Get started</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center margin-10-rem-top md-margin-7-rem-top">
                    <div class="col-12 col-lg-3 col-md-5 col-sm-6 text-center text-lg-end order-1 md-margin-5-rem-bottom xs-margin-4-rem-bottom wow animate__fadeInRight" data-wow-delay="0.7s">
                        <i class="fas fa-quote-right icon-small d-block opacity-3 margin-25px-bottom"></i>
                        <span class="alt-font font-weight-500 text-large line-height-30px text-purple d-inline-block w-80">Olá, meu nome é Wallace e sou diretor da Los Anjos. Nossa missão é executar a sua missão!</span>
                    </div>
                    <div class="col-12 col-lg-6 col-md-8 p-0 order-3 order-lg-2 wow animate__fadeIn">
                        <img src="<?php echo esc_url($home_design_agency_img_02_png); ?>" alt="" />
                    </div>
                    <div class="col-12 col-lg-3 col-md-5 col-sm-6 text-center text-lg-start order-2 order-lg-3 md-margin-5-rem-bottom xs-margin-7-rem-bottom wow animate__fadeInLeft" data-wow-delay="0.7s">
                        <i class="fas fa-quote-left icon-small d-block opacity-3 margin-25px-bottom"></i>
                        <span class="alt-font font-weight-500 text-large line-height-30px text-purple d-inline-block w-80">A equipe aqui é diferenciada e nós vamos levar a sua comunicação ao topo!</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="big-section">
            <div class="container">
                <div class="row client-logo-style-06 justify-content-center">
                    <!-- start client logo item --> 
                    <div class="col-10 col-md-3 col-sm-2 border-right border-bottom border-color-medium-gray text-center xs-no-border-right wow animate__fadeIn" data-wow-delay="0.1s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_24_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-10 col-md-3 col-sm-2 border-right border-bottom border-color-medium-gray text-center sm-no-border-right wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_25_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-10 col-md-3 col-sm-2 border-right border-bottom border-color-medium-gray text-center xs-no-border-right wow animate__fadeIn" data-wow-delay="0.3s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_26_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-10 col-md-3 col-sm-2 border-bottom border-color-medium-gray text-center wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_27_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-10 col-md-3 col-sm-2 border-right border-color-medium-gray text-center sm-border-bottom xs-no-border-right wow animate__fadeIn" data-wow-delay="0.8s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_28_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-10 col-md-3 col-sm-2 border-right border-color-medium-gray text-center sm-no-border-right sm-border-bottom wow animate__fadeIn" data-wow-delay="0.7s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_29_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-10 col-md-3 col-sm-2 border-right border-color-medium-gray text-center xs-no-border-right xs-border-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_30_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-10 col-md-3 col-sm-2 border-color-medium-gray text-center wow animate__fadeIn" data-wow-delay="0.5s">
                        <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                            <a href="#"><img src="<?php echo esc_url($company_logo_31_png); ?>" alt=""></a>
                        </div>
                    </div>
                    <!-- end client logo item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 text-center text-sm-start wow animate__fadeIn">
                        <h4 class="alt-font font-weight-600 text-purple mb-0 letter-spacing-minus-1px">Interesting articles</h4>
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end wow animate__fadeIn">
                        <a href="blog-masonry.html" class="btn btn-link btn-extra-large text-purple">all articles</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 blog-content px-sm-0 margin-7-rem-top md-margin-4-rem-top">
                        <ul class="blog-masonry blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="blog-masonry.html" class="text-small me-auto text-slate-blue text-purple-hover">24 February 2020</a>
                                        <a href="blog-post-layout-01.html" class="blog-like text-extra-small text-purple-hover"><i class="far fa-heart"></i><span>28</span></a>
                                        <a href="blog-post-layout-01.html" class="blog-comment text-extra-small text-purple-hover"><i class="far fa-comment"></i><span>52</span></a>
                                    </div>
                                    <div class="blog-post-image">
                                        <a href="blog-post-layout-01.html" title=""><img src="<?php echo esc_url($home_design_agency_img_01_jpg); ?>" alt=""></a>
                                        <div class="alt-font blog-category"><a href="blog-masonry.html" class="text-uppercase text-purple-hover">Fashion</a></div>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-purple text-purple-hover d-block margin-15px-bottom">Recognizing the need is the primary condition design</a>
                                        <p>Lorem ipsum is simply dummy text of printing and typesetting industry lorem ipsum been dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="blog-masonry.html" class="text-small me-auto text-slate-blue text-purple-hover">10 February 2020</a>
                                        <a href="blog-post-layout-02.html" class="blog-like text-extra-small text-purple-hover"><i class="far fa-heart"></i><span>28</span></a>
                                        <a href="blog-post-layout-02.html" class="blog-comment text-extra-small text-purple-hover"><i class="far fa-comment"></i><span>40</span></a>
                                    </div>
                                    <div class="blog-post-image">
                                        <a href="blog-post-layout-02.html" title=""><img src="<?php echo esc_url($home_design_agency_img_02_jpg); ?>" alt=""></a>
                                        <div class="alt-font blog-category"><a href="blog-masonry.html" class="text-uppercase text-purple-hover">Lifestyle</a></div>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-purple text-purple-hover d-block margin-20px-bottom">Computers are to design as microwaves are to cooking</a>
                                        <p>Lorem ipsum is simply dummy text of printing and typesetting industry lorem ipsum been dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="blog-masonry.html" class="text-small me-auto text-slate-blue text-purple-hover">18 January 2020</a>
                                        <a href="blog-post-layout-03.html" class="blog-like text-extra-small text-purple-hover"><i class="far fa-heart"></i><span>30</span></a>
                                        <a href="blog-post-layout-03.html" class="blog-comment text-extra-small text-purple-hover"><i class="far fa-comment"></i><span>42</span></a>
                                    </div>
                                    <div class="blog-post-image">
                                        <a href="blog-post-layout-03.html" title=""><img src="<?php echo esc_url($home_design_agency_img_03_jpg); ?>" alt=""></a>
                                        <div class="alt-font blog-category"><a href="blog-masonry.html" class="text-uppercase text-purple-hover">Design</a></div>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-purple text-purple-hover d-block margin-20px-bottom">Fashion and interior design are one and the same</a>
                                        <p>Lorem ipsum is simply dummy text of printing and typesetting industry lorem ipsum been dummy...</p>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="big-section home-design-agency" style="background:url('<?php echo esc_url($home_design_agency_bg_img_02_png); ?>') no-repeat center right;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-3 md-margin-4-rem-bottom xs-margin-3-rem-bottom wow animate__fadeInLeft" data-wow-delay="0.6s">
                        <div class="outside-box-left text-center text-lg-end">
                            <span class="alt-font font-weight-600 text-big text-sunglow letter-spacing-minus-10px d-block padding-3-rem-right md-no-padding-right sm-letter-spacing-minus-1-half">agency</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center text-lg-start md-margin-3-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <h4 class="alt-font font-weight-500 text-purple mb-0 letter-spacing-minus-1px d-inline-block md-w-80 xs-w-100">Express your creativity and start building your design</h4>
                    </div>
                    <div class="col-12 col-lg-3 text-center wow animate__fadeIn" data-wow-delay="0.4s">
                        <a href="contact-us-modern.html" class="btn btn-fancy btn-box-shadow btn-medium btn-dark-gray">Start a project</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col md-margin-30px-bottom">
                        <div class="feature-box padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Gear-2 icon-medium text-gradient-sky-blue-dark-pink margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-purple">Powerfull customize</span>
                                <p>Lorem ipsum is simply dummy text of the printing typesetting</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col md-margin-30px-bottom">
                        <div class="feature-box padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Cursor-Click2 icon-medium text-gradient-sky-blue-dark-pink margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-purple">Custom shortcodes</span>
                                <p>Lorem ipsum is simply dummy text of the printing typesetting</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col xs-margin-30px-bottom">
                        <div class="feature-box padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Like-2 icon-medium text-gradient-sky-blue-dark-pink margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-purple">Theme advantages</span>
                                <p>Lorem ipsum is simply dummy text of the printing typesetting</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col">
                        <div class="feature-box padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Talk-Man icon-medium text-gradient-sky-blue-dark-pink margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-purple">Customer satisfaction</span>
                                <p>Lorem ipsum is simply dummy text of the printing typesetting</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-light-blue">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                        <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-dark-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">What people are saying</span>
                        <h5 class="alt-font text-purple font-weight-600 letter-spacing-minus-1px">What our valuable customer are saying about us?</h5>
                    </div>
                </div>
                <div class="row justify-content-center"> 
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">
                                <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud exercitation ullamco.</p>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="images/avtar28.jpg" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-purple d-block">Herman Miller</span>
                                    <span class="d-block text-small">ThemeZaa Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">
                                <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud exercitation ullamco.</p>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="images/avtar27.jpg" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-purple d-block">Jeremy Girard</span>
                                    <span class="d-block text-small">Microsoft Corporation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">
                                <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud exercitation ullamco.</p>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="images/avtar29.jpg" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-purple d-block">Alexander Harvard</span>
                                    <span class="d-block text-small">ThemeZaa Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                </div>
            </div>
        </section>
        <!-- end section -->
    </div>
                
            
            
<?php
    get_footer();
?>