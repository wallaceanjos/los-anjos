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
    $placeholder_img = get_template_directory_uri() . '/assets/images/placeholder.png';
    $placeholder_video = get_template_directory_uri() . '/assets/images/placeholder_2.png';

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
    $avatar01 = get_template_directory_uri() . '/assets/images/avatar-01.jpg';
    $avatar02 = get_template_directory_uri() . '/assets/images/avatar-02.jpg';
    $avatar03 = get_template_directory_uri() . '/assets/images/avatar-03.jpg';
    
    $home_design_agency_bg_img_02_png = get_template_directory_uri() . '/assets/images/home-design-agency-bg-img-02.png';
    $home_design_agency_animated_gif = get_template_directory_uri() . '/assets/images/bgvideosite.gif';
?>
<!-- Assets -->

        <section class="parallax p-0" data-parallax-background-ratio="0.3" style="background:url(<?php echo esc_url($placeholder_video); ?>) no-repeat center center / cover #1E1E3F;">
            <div id="homepage" data-background="<?php echo esc_url($placeholder_img); ?>" style="min-height:100vh;">
                
                <div class="with-bg-size" style="position:absolute; top:0px; left:0px; z-index:0; width:100%; height: 100%; margin:auto;">
                    <div class="position-absolute cover-background top-0px left-0px w-100 h-100" data-parallax-background-ratio="0.5" style="background: url(<?php echo esc_url($placeholder_video); ?>)no-repeat center-center/cover;"></div>
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-12 col-lg-5 col-md-6 col-sm-7 full-screen md-h-650px sm-h-500px d-flex flex-column justify-content-center padding-8-rem-tb visibility-hidden wow animate__fadeInLeft" data-wow-delay="0.1s">
                                <h1 class="alt-font font-weight-600 title-large text-purple letter-spacing-minus-4px margin-4-half-rem-bottom sm-letter-spacing-minus-1-half xs-w-65 la-card">Los Anjos Agency. Design & Web</h1>
                                <a href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações." class="btn btn-extra-large btn-expand-ltr text-purple btn-rounded align-self-start font-weight-600">Fale conosco.<span class="bg-white"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-down-bottom visibility-hidden wow animate__fadeInUp" data-wow-delay="0.2s">
                        <a href="#about" class="section-link d-block w-2px h-35px bg-white mx-auto right-0px left-0px position-absolute">
                            <span class="scroll-down-text alt-font font-weight-600 text-purple letter-spacing-minus-1-half margin-5px-bottom">scroll</span>
                        </a>
                    </div>
                </div>
                <!-- End Video BG Init -->
            </div>
        </section>
        
        <!-- start section -->
        <section class="big-section border-top border-color-medium-gray pb-0">
            <div class="container">
                <div class="row align-items-center margin-10-rem-bottom md-margin-5-rem-bottom sm-margin-4-rem-bottom">
                    <div class="col-12 col-lg-4 text-center text-lg-start md-margin-30px-bottom wow animate__fadeIn">
                        <h4 class="alt-font font-weight-600 text-purple mb-0 letter-spacing-minus-1px">Trabalhos Incríveis</h4>
                    </div>
                    <div class="col-12 col-lg-8 text-center wow animate__fadeIn">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-center justify-content-lg-end border-0 text-uppercase font-weight-500 alt-font">
                            <li class="nav active"><a data-filter="*" href="#">Todos</a></li>
                            <?php
                            // Obtém a categoria "Portfólio" (assumindo que o slug seja 'portfolio')
                            $portfolio_category = get_term_by( 'slug', 'portfolio', 'category' );
                            if ( $portfolio_category ) {
                                // Recupera as subcategorias da categoria "Portfólio"
                                $subcategories = get_terms( array(
                                    'taxonomy'   => 'category',
                                    'hide_empty' => true,
                                    'parent'     => $portfolio_category->term_id,
                                ) );
                                if ( ! is_wp_error( $subcategories ) && ! empty( $subcategories ) ) {
                                    foreach ( $subcategories as $term ) {
                                        echo '<li class="nav"><a data-filter=".' . esc_attr( $term->slug ) . '" href="#">' . esc_html( $term->name ) . '</a></li>';
                                    }
                                }
                            }
                            ?>
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
                            <?php
                            // Obtém a categoria "Portfólio" para a query
                            $portfolio_category = get_term_by( 'slug', 'portfolio', 'category' );
                            $subcategory_ids = array(); // Inicializa o array
                            if ( $portfolio_category ) {
                                // Recupera as subcategorias da categoria "Portfólio"
                                $subcategories = get_terms( array(
                                    'taxonomy'   => 'category',
                                    'hide_empty' => true,
                                    'parent'     => $portfolio_category->term_id,
                                ) );
                                if ( ! is_wp_error( $subcategories ) && ! empty( $subcategories ) ) {
                                    // Obtém os IDs das subcategorias
                                    $subcategory_ids = wp_list_pluck( $subcategories, 'term_id' );
                                }
                            }

                            // Query para recuperar os projetos que pertencem às subcategorias de "Portfólio"
                            $args = array(
                                'post_type'      => 'projetos',
                                'posts_per_page' => -1,
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field'    => 'term_id',
                                        'terms'    => $subcategory_ids,
                                    ),
                                ),
                            );
                            $projetos_query = new WP_Query( $args );
                            if ( $projetos_query->have_posts() ) :
                                while ( $projetos_query->have_posts() ) : $projetos_query->the_post();
                                    
                                    // Recupera os termos (categorias) associados ao projeto
                                    $project_terms = get_the_terms( get_the_ID(), 'category' );
                                    $term_classes  = '';
                                    if ( $project_terms && ! is_wp_error( $project_terms ) ) {
                                        foreach ( $project_terms as $term ) {
                                            $term_classes .= ' ' . $term->slug;
                                        }
                                    }
                            ?>
                            <!-- start portfolio item -->
                            <li class="grid-item<?php echo esc_attr( $term_classes ); ?> wow animate__fadeIn">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-white">
                                            <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'full' );
                                            } else {
                                                // Caso não tenha imagem destacada, exiba uma imagem padrão
                                                echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/default.jpg' ) . '" alt="' . get_the_title() . '">';
                                            }
                                            ?>
                                            <div class="portfolio-hover bg-white justify-content-center d-flex flex-column">
                                                <div class="scale">
                                                    <div class="alt-font text-purple font-weight-600 letter-spacing-minus-1px d-block text-extra-large text-uppercase">
                                                        <?php the_title(); ?>
                                                    </div>
                                                    <?php
                                                    // Exibe os nomes das categorias (opcional)
                                                    if ( $project_terms && ! is_wp_error( $project_terms ) ) {
                                                        $cat_names = array();
                                                        foreach ( $project_terms as $term ) {
                                                            $cat_names[] = $term->name;
                                                        }
                                                        echo '<div class="text-uppercase text-medium-gray text-small alt-font d-block">' . implode( ', ', $cat_names ) . '</div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
         
        <!-- start section -->
        <section id="about" class="big-section bg-gradient-white-light-gray">
            <div class="container">
                <div class="d-none d-sm-grid grid-md-5 grid-sm-3 gap-8">
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
                    <div class="col-12 col-lg-5 col-md-10 text-lg-end md-margin-25px-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.3s">
                        <h4 class="alt-font font-weight-600 text-purple d-block mb-0 padding-2-half-rem-right letter-spacing-minus-1px lg-no-padding-right">Vamos elevar sua influência ao topo.</h4>
                    </div>
                    <div class="col-12 col-lg-4 col-md-9 padding-30px-left md-padding-15px-left text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.4s">
                        <p class="w-80-p margin-15px-bottom lg-w-100">Somos os mestres na arte da criação! Vamos transformar suas ideias em obras-primas visuais.</p>
                        <a href="about-us.html" class="btn btn-link btn-extra-large text-purple font-weight-600">Agency info</a>
                    </div>
                </div>
            </div>
        </section>

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
                        <h4 class="alt-font font-weight-600 text-purple margin-4-half-rem-bottom letter-spacing-minus-1px text-center text-lg-start wow animate__fadeInRight" data-wow-delay="0.2s">
                            Descubra serviços incríveis de web e design!
                        </h4>
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon-middle margin-4-half-rem-bottom wow animate__fadeInRight" data-wow-delay="0.3s">
                            <div class="feature-box-icon feature-box-icon-rounded color-primary bg-white w-85px h-85px rounded-circle box-shadow-small margin-40px-right">
                                <i class="line-icon-Cursor-Click2 icon-very-medium"></i>
                                <div class="feature-box-icon-hover bg-dark-purple rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-purple">Opções poderosas</span>
                                <p>Desfrute de inúmeras alternativas para personalizar sua marca com soluções inovadoras e criativas.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon-middle margin-4-half-rem-bottom wow animate__fadeInRight" data-wow-delay="0.4s">
                            <div class="feature-box-icon feature-box-icon-rounded color-primary bg-white w-85px h-85px rounded-circle box-shadow-small margin-40px-right">
                                <i class="line-icon-Sand-watch2 icon-very-medium"></i>
                                <div class="feature-box-icon-hover bg-dark-purple rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-purple">Variações ilimitadas</span>
                                <p>Descubra combinações exclusivas que se adaptam perfeitamente às necessidades do seu negócio.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="feature-box feature-box-left-icon-middle wow animate__fadeInRight" data-wow-delay="0.5s">
                            <div class="feature-box-icon feature-box-icon-rounded color-primary bg-white w-85px h-85px rounded-circle box-shadow-small margin-40px-right">
                                <i class="line-icon-Idea-5 icon-very-medium"></i>
                                <div class="feature-box-icon-hover bg-dark-purple rounded-circle"></div>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-purple">Estratégia eficaz</span>
                                <p>Uma abordagem inteligente que une criatividade e planejamento para resultados impactantes.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center margin-7-rem-top lg-margin-4-half-rem-top wow animate__fadeIn" data-wow-delay="0.6s">
                            <span class="alt-font text-purple text-large">
                                Você está interessado em trabalhar conosco? 
                                <a href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações." class="font-weight-600 text-decoration-line-bottom text-purple text-black-hover section-link">Comece agora</a>
                            </span>
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
                        <h4 class="alt-font font-weight-600 text-purple letter-spacing-minus-1px margin-2-half-rem-bottom">
                            Precisa de um designer criativo dedicado?
                        </h4>
                        <p class="w-90 sm-w-100">
                            Conte com profissionais especializados que transformarão suas ideias em projetos impactantes e modernos, elevando a identidade da sua marca.
                        </p>
                        <a href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações." class="btn btn-fancy btn-medium btn-transparent-light-gray margin-20px-top">
                            Planos e Preços
                        </a>
                    </div>
                    <div class="col-12 col-xl-6 offset-xl-2 col-lg-7 md-padding-25px-left md-padding-35px-right sm-padding-15px-lr">
                        <div class="row row-cols-1 row-cols-md-2 align-items-center sm-no-margin-lr">
                            <!-- Pricing Table: Básico -->
                            <div class="col pricing-table-style-02 text-center px-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.3s">
                                <div class="pricing-table bg-white box-shadow-small">
                                    <!-- Pricing Header -->
                                    <div class="pricing-header padding-55px-top">
                                        <i class="line-icon-Boy icon-large text-sunglow"></i>
                                        <span class="alt-font font-weight-600 text-extra-medium text-purple text-uppercase d-block margin-5px-top">
                                            Landing Page
                                        </span>
                                    </div>
                                    <!-- Pricing Body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <div class="alt-font font-weight-500 text-small text-uppercase letter-spacing-1px margin-30px-bottom">
                                            A partir de
                                        </div>
                                        <div class="margin-30px-bottom">
                                            <h4 class="alt-font font-weight-600 text-slate-blue mb-0 letter-spacing-minus-2px">R$1.500</h4>
                                        </div>
                                        <ul class="list-style-03">
                                            <li class="border-0 p-0 margin-10px-bottom">One Page</li>
                                            <li class="border-0 p-0 margin-10px-bottom">5 sections</li>
                                            <li class="border-0 p-0 margin-10px-bottom">Botão de whatsapp</li>
                                        </ul>
                                    </div>
                                    <!-- Pricing Footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-fancy btn-small btn-transparent-light-gray" href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações.">
                                            Mais informações
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing Table: Avançado -->
                            <div class="col pricing-table-style-02 text-center px-0 wow animate__fadeIn" data-wow-delay="0.1s">
                                <div class="pricing-table pricing-popular bg-white box-shadow-small">
                                    <div class="popular-label alt-font font-weight-600 text-extra-small text-purple bg-sunglow text-uppercase padding-5px-tb">
                                        Popular
                                    </div>
                                    <!-- Pricing Header -->
                                    <div class="pricing-header padding-65px-top">
                                        <i class="line-icon-Bee icon-large text-sunglow"></i>
                                        <span class="alt-font font-weight-600 text-extra-medium text-purple text-uppercase d-block margin-5px-top">
                                            Site Completo
                                        </span>
                                    </div>
                                    <!-- Pricing Body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <div class="alt-font font-weight-500 text-small text-uppercase letter-spacing-1px margin-30px-bottom">
                                                A partir de
                                        </div>
                                        <div class="margin-30px-bottom">
                                            <h4 class="alt-font font-weight-600 text-slate-blue mb-0 letter-spacing-minus-2px">R$2.985</h4>
                                        </div>
                                        <ul class="list-style-03">
                                            <li class="border-0 p-0 margin-10px-bottom">Site responsivo</li>
                                            <li class="border-0 p-0 margin-10px-bottom">Gestão do conteúdo (CMS)</li>
                                            <li class="border-0 p-0 margin-10px-bottom">Notícias</li>
                                            <li class="border-0 p-0 margin-10px-bottom">Botão de whatsapp</li>
                                            <li class="border-0 p-0 margin-10px-bottom">Formulário de contato</li>
                                            
                                        </ul>
                                    </div>
                                    <!-- Pricing Footer -->
                                    <div class="pricing-footer margin-65px-bottom">
                                        <a class="btn btn-fancy btn-small btn-dark-gray" href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações.">
                                            Mais informações
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Depoimentos -->
                <div class="row align-items-center justify-content-center margin-10-rem-top md-margin-7-rem-top">
                    <div class="col-12 col-lg-3 col-md-5 col-sm-6 text-center text-lg-end order-1 md-margin-5-rem-bottom xs-margin-4-rem-bottom wow animate__fadeInRight" data-wow-delay="0.2s">
                        <i class="fas fa-quote-right icon-small d-block opacity-3 margin-25px-bottom"></i>
                        <span class="alt-font font-weight-500 text-large line-height-30px text-purple d-inline-block w-80-p">
                            O objetivo da Los Anjos é transformar suas ideias em projetos incríveis.
                        </span>
                    </div>
                    <div class="col-12 col-lg-6 col-md-8 p-0 order-3 order-lg-2 wow animate__fadeInUp" data-wow-delay="0.1s">
                        <img src="<?php echo esc_url($home_design_agency_img_02_png); ?>" alt="" />
                    </div>
                    <div class="col-12 col-lg-3 col-md-5 col-sm-6 text-center text-lg-start order-2 order-lg-3 md-margin-5-rem-bottom xs-margin-7-rem-bottom wow animate__fadeInLeft" data-wow-delay="0.2s">
                        <i class="fas fa-quote-left icon-small d-block opacity-3 margin-25px-bottom"></i>
                        <span class="alt-font font-weight-500 text-large line-height-30px text-purple d-inline-block w-80-p">
                            Nós estamos sempre em busca de novas ideias e soluções criativas.
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        
        <!-- start section -->
        <section id="blog" class="big-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 text-center text-sm-start wow animate__fadeIn">
                        <h4 class="alt-font font-weight-600 text-purple mb-0 letter-spacing-minus-1px">Artigos interessantes</h4>
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end wow animate__fadeIn">
                        <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="btn btn-link btn-extra-large text-purple">Todos os artigos</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 blog-content px-sm-0 margin-7-rem-top md-margin-4-rem-top">
                        <ul class="blog-masonry blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <?php
                                // Query para recuperar os 3 posts mais recentes
                                $args = array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 3,
                                );
                                $recent_posts = new WP_Query( $args );
                                if ( $recent_posts->have_posts() ) :
                                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                                        $post_date       = get_the_date('j \d\e F \d\e Y');
                                        $post_permalink  = get_permalink();
                                        $post_title      = get_the_title();
                                        $post_excerpt    = get_the_excerpt();
                                        $post_thumbnail  = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : get_template_directory_uri() . '/assets/images/placeholder.png';
                                        // Recupera a primeira categoria do post, se houver
                                        $categories = get_the_category();
                                        $cat_name   = ( ! empty( $categories ) ) ? $categories[0]->name : '';
                            ?>
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white">
                                    <div class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a href="<?php echo esc_url( $post_permalink ); ?>" class="text-small me-auto text-slate-blue text-purple-hover">
                                            <?php echo esc_html( $post_date ); ?>
                                        </a>
                                        <!-- Você pode adicionar aqui ícones de curtidas/comentários, se desejar -->
                                    </div>
                                    <div class="blog-post-image">
                                        <a href="<?php echo esc_url( $post_permalink ); ?>" title="<?php echo esc_attr( $post_title ); ?>">
                                            <img src="<?php echo esc_url( $post_thumbnail ); ?>" alt="<?php echo esc_attr( $post_title ); ?>">
                                        </a>
                                        <div class="alt-font blog-category">
                                            <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="text-uppercase text-purple-hover">
                                                <?php echo esc_html( $cat_name ); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="<?php echo esc_url( $post_permalink ); ?>" class="alt-font font-weight-500 text-extra-medium text-purple text-purple-hover d-block margin-15px-bottom">
                                            <?php echo esc_html( $post_title ); ?>
                                        </a>
                                        <p><?php echo esc_html( $post_excerpt ); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            ?>
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
                            <span class="alt-font font-weight-600 text-big text-sunglow letter-spacing-minus-10px d-block padding-3-rem-right md-no-padding-right sm-letter-spacing-minus-1-half">Boraaa</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center text-lg-start md-margin-3-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <h4 class="alt-font font-weight-500 text-purple mb-0 letter-spacing-minus-1px d-inline-block md-w-80-p xs-w-100">
                            Coloca essa criatividade pra jogo e comece a construir seu projeto!
                        </h4>
                    </div>
                    <div class="col-12 col-lg-3 text-center wow animate__fadeIn" data-wow-delay="0.4s">
                        <a href="contact-us-modern.html" class="btn btn-fancy btn-box-shadow btn-medium btn-dark-gray">Bora começar!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-light-blue">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                        <span class="d-inline-block alt-font text-medium color-accent text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">
                            O que estão dizendo sobre nós?
                        </span>
                        <h5 class="alt-font text-purple font-weight-600 letter-spacing-minus-1px">
                            O que nossos valiosos clientes estão falando sobre a LosAnjos?
                        </h5>
                    </div>
                </div>
                <div class="row justify-content-center"> 
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                            <h6 class="alt-font text-medium font-weight-500 line-height-24px d-block text-center padding-30px-bottom"><a href="https://losanjos.agency/projetos/cartas-vivas/" target="_blank"></a>Identidade visual da Igreja Cartas Vivas.</a></h6>
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr color-accent">
                                <p><span class="color-accent">"Animal hein"</span></p>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="<?php echo esc_url($avatar01)?>" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-purple d-block">Daniel Pillar</span>
                                    <span class="d-block text-small">Igreja Cartas Vivas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                        <h6 class="alt-font text-medium font-weight-500 line-height-24px d-block text-center padding-30px-bottom"><a href="https://losanjos.agency/projetos/instituto-assistencial-atitude/" target="_blank">Site do Instituto Assistencial Atitude.</a></h6>
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr color-accent">
                                <p>"Isso aqui ficou muito bom! Bem intuitivo! Parabéns!"</p>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="<?php echo esc_url($avatar02)?>" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-purple d-block">Anderson Oliveira</span>
                                    <span class="d-block text-small">Instituto Assistencial Atitude</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                        <h6 class="alt-font text-medium font-weight-500 line-height-24px d-block text-center padding-30px-bottom">Camisas para a Igreja de Criança</h6>
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr color-accent">
                                <p>"Fala manoooo gostei demais!!!!"</p>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="<?php echo esc_url($avatar03)?>" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-purple d-block">Hauster Vinicius</span>
                                    <span class="d-block text-small">Igreja Shalom de Curitiba</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial item -->
                </div>
            </div>
        </section>
        <!-- end section -->

<?php
    get_footer();
?>