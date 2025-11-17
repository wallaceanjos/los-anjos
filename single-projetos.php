<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post();

        // Recupera os valores dos campos (os textos permanecem iguais)
        $project_about = get_post_meta(get_the_ID(), 'project_about', true);
        $project_about_date = get_post_meta(get_the_ID(), 'project_about_date', true);
        $project_about_client = get_post_meta(get_the_ID(), 'project_about_client', true);
        $project_about_industry = get_post_meta(get_the_ID(), 'project_about_industry', true);
        $project_about_website = get_post_meta(get_the_ID(), 'project_about_website', true);
        $project_behance_link = get_post_meta(get_the_ID(), 'project_behance_link', true);
        $project_inpiration = get_post_meta(get_the_ID(), 'project_inpiration', true);
        $project_challenge = get_post_meta(get_the_ID(), 'project_challenge', true);
        $project_approach = get_post_meta(get_the_ID(), 'project_approach', true);
        $project_institutional_video = get_post_meta(get_the_ID(), 'project_institutional_video', true);
        $project_concluding_remarks = get_post_meta(get_the_ID(), 'project_concluding_remarks', true);
        $project_thanks = get_post_meta(get_the_ID(), 'project_thanks', true);



        // Para os campos de imagem, convertendo os IDs para URL:
        $project_bg_header = get_post_meta(get_the_ID(), 'project_bg_header', true);
        $project_bg_header_url = $project_bg_header ? wp_get_attachment_image_url($project_bg_header, 'full') : '';

        $project_logo_icon_svg = get_post_meta(get_the_ID(), 'project_logo_icon_svg', true);
        $project_logo_icon_svg_url = $project_logo_icon_svg ? wp_get_attachment_image_url($project_logo_icon_svg, 'full') : '';

        $project_logo_icon_png = get_post_meta(get_the_ID(), 'project_logo_icon_png', true);
        $project_logo_icon_png_url = $project_logo_icon_png ? wp_get_attachment_image_url($project_logo_icon_png, 'full') : '';

        $project_logo_full = get_post_meta(get_the_ID(), 'project_logo_full', true);
        $project_logo_full_url = $project_logo_full ? wp_get_attachment_image_url($project_logo_full, 'full') : '';

        $project_section_challenge = get_post_meta(get_the_ID(), 'project_section_challenge', true);
        $project_section_challenge_url = $project_section_challenge ? wp_get_attachment_image_url($project_section_challenge, 'full') : '';
        
        $project_section_approach = get_post_meta(get_the_ID(), 'project_section_approach', true);
        $project_section_approach_url = $project_section_approach ? wp_get_attachment_image_url($project_section_approach, 'full') : '';

        $project_section_divider = get_post_meta(get_the_ID(), 'project_section_divider', true);
        $project_section_divider_url = $project_section_divider ? wp_get_attachment_image_url($project_section_divider, 'full') : '';

        $project_section_video_placeholder = get_post_meta(get_the_ID(), 'project_section_video_placeholder', true);
        $project_section_video_placeholder_url = $project_section_video_placeholder ? wp_get_attachment_image_url($project_section_video_placeholder, 'full') : '';

        $project_img_prev_post = get_post_meta(get_the_ID(), 'project_img_prev_post', true);
        $project_img_prev_post_url = $project_img_prev_post ? wp_get_attachment_image_url($project_img_prev_post, 'full') : '';

        $project_img_next_post = get_post_meta(get_the_ID(), 'project_img_next_post', true);
        $project_img_next_post_url = $project_img_next_post ? wp_get_attachment_image_url($project_img_next_post, 'full') : '';
        ?>

        <!-- Static images -->
        <?php
        $page_end_content = get_template_directory_uri() . '/assets/images/single-project-page-end-content.jpg';
        $placeholder_img = get_template_directory_uri() . '/assets/images/placeholder.png';
        // thumbnail
        $project_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
        <!-- Static images -->

            <!-- start banner section -->
            <section class="p-0 sm-h-450px xs-h-350px cover-background d-flex align-items-end"
                style="min-height:100vh; background-image: url('<?php echo esc_url($project_bg_header_url); ?>');">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-6 text-center">
                            <img src="<?php echo esc_url($project_logo_icon_svg_url); ?>" alt="" class="w-25">
                            <h5
                                class="alt-font text-white margin-5-rem-top margin-9-rem-bottom font-weight-600 text-uppercase d-block xs-margin-3-rem-top xs-margin-5-rem-bottom">
                                <?php the_title(); ?></h5>
                            <span
                                class="separator-line-vertical w-100px h-1px d-inline-block align-middle bg-dark-purple xs-w-60px"></span>
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
                                <div
                                    class="col-12 col-lg-5 col-md-4 text-center text-md-start sm-margin-30px-bottom wow animate__fadeIn">
                                    <img src="<?php echo esc_url($project_logo_icon_png_url); ?>" alt="">
                                </div>
                                <div class="col-12 col-lg-6 col-md-8 text-center text-md-start wow animate__fadeIn">
                                    <span
                                        class="text-purple letter-spacing-minus-1-half title-extra-small line-height-40px alt-font margin-40px-bottom font-weight-500 sm-margin-30px-bottom d-inline-block"><?php echo $project_about; ?></span>
                                    <a href="<?php echo $project_behance_link?>"
                                        class="video-icon-box video-icon-small position-relative">
                                        <span>
                                            <span class="video-icon bg-medium-purple margin-15px-right">
                                                <i class="icon-simple-line-link text-yellow"></i>
                                                <span class="video-icon-sonar"></span>
                                            </span>
                                            <span
                                                class="video-icon-text alt-font text-medium text-purple text-uppercase text-decoration-line-bottom d-inline-block font-weight-500 align-middle">Visualizar</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div class="w-100 h-1px bg-medium-gray opacity-7 margin-6-half-rem-tb sm-margin-5-rem-tb">
                                    </div>
                                </div>
                                <div class="col-12 alt-font text-uppercase text-small font-weight-500 line-height-12px">
                                    <div class="row">
                                        <div
                                            class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray sm-margin-30px-bottom xs-border-none wow animate__fadeIn">
                                            <span class="d-block d-lg-inline-block md-margin-10px-bottom">Data:</span>
                                            <span><?php echo esc_html($project_about_date); ?></span>
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray sm-border-none sm-margin-30px-bottom wow animate__fadeIn"
                                            data-wow-delay="0.2s">
                                            <span class="d-block d-lg-inline-block md-margin-10px-bottom">cliente:</span>
                                            <span><?php echo esc_html($project_about_client); ?></span>
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray xs-border-none xs-margin-30px-bottom wow animate__fadeIn"
                                            data-wow-delay="0.4s">
                                            <span class="d-block d-lg-inline-block md-margin-10px-bottom">indústria:</span>
                                            <span><?php echo esc_html($project_about_industry); ?></span>
                                        </div>
                                        <div class="col-12 col-md-3 col-sm-6 text-center wow animate__fadeIn"
                                            data-wow-delay="0.6s">
                                            <span class="d-block d-lg-inline-block md-margin-10px-bottom">site:</span>
                                            <a class="text-purple text-dark-purple-hover"
                                                href="<?php echo esc_url($project_about_website); ?>"
                                                target="_blank"><?php echo esc_html($project_about_client); ?></a>
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
                        <div class="col-12 col-md-6 cover-background one-third-screen sm-margin-15px-bottom"
                            style="background: url('<?php echo esc_url($project_section_challenge_url); ?>');"></div>
                        <div class="col-12 col-md-6 cover-background one-third-screen"
                            style="background: url('<?php
                                    if ($project_section_approach_url) {
                                        echo esc_url($project_section_approach_url);
                                    } else {
                                        echo esc_url($project_thumbnail);
                                    }
                                ?>') no-repeat center center / cover;">
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- start section -->
            <section>
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-4 col-md-7 col-sm-9 md-margin-35px-bottom wow animate__fadeIn"
                            data-wow-delay="0.2s">
                            <h6 class="alt-font text-purple font-weight-500 m-0"><?php echo esc_html($project_inpiration); ?>
                            </h6>
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin sm-margin-30px-bottom wow animate__fadeIn"
                            data-wow-delay="0.4s">
                            <div class="d-flex alt-font text-purple margin-15px-bottom font-weight-500">
                                <span
                                    class="flex-shrink-0 align-self-center h-1px w-40px bg-dark-purple margin-20px-right"></span>
                                <div class="flex-grow-1">O desafio</div>
                            </div>
                            <p class="md-w-80 xs-w-100"><?php echo esc_html($project_challenge); ?></p>
                        </div>
                        <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin wow animate__fadeIn"
                            data-wow-delay="0.6s">
                            <div class="d-flex alt-font text-purple margin-15px-bottom font-weight-500">
                                <span
                                    class="flex-shrink-0 align-self-center h-1px w-40px bg-dark-purple margin-20px-right"></span>
                                <div class="flex-grow-1">A abordagem</div>
                            </div>
                            <p class="md-w-80 xs-w-100"><?php echo esc_html($project_approach); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- start section -->
            <section class="p-0 parallax h-750px md-h-550px sm-h-350px" data-parallax-background-ratio="0.1"
                style="background: url('<?php echo esc_url($project_section_divider_url); ?>');"></section>
            <!-- end section -->

            <!-- start section -->
            <section class="overlap-height">
                <div class="container">
                    <div class="row align-items-lg-center justify-content-center overlap-gap-section">
                        <div class="col-12 col-lg-2 text-center text-lg-start md-margin-35px-bottom wow animate__fadeIn"
                            data-wow-delay="0.2s">
                            <img src="<?php echo esc_url($project_logo_full_url); ?>" alt="">
                        </div>
                        <div class="col-12 col-xl-5 col-lg-4 col-md-6 col-sm-11 text-center text-md-start md-margin-30px-bottom wow animate__fadeIn"
                            data-wow-delay="0.4s">
                            <span
                                class="alt-font title-extra-small text-purple letter-spacing-minus-1-half line-height-40px font-weight-500 d-inline-block xs-w-95">
                                <?php the_title(); ?>, a LosAnjos deseja a você voos altos.</span>
                        </div>
                        <div class="col-12 col-lg-4 offset-xl-1 col-md-6 col-sm-10 text-center text-md-start last-paragraph-no-margin wow animate__fadeIn"
                            data-wow-delay="0.6s">
                            <span class="alt-font text-purple font-weight-500 margin-15px-bottom d-inline-block">Considerações
                                finais sobre o projeto</span>
                            <p><?php echo esc_html($project_concluding_remarks); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- start section -->
            <section class="pt-0 bg-light-gray overflow-visible wow animate__fadeIn">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 overlap-section text-center margin-100px-bottom sm-margin-50px-tb">
                            <img src="<?php echo esc_url($project_section_video_placeholder_url); ?>" alt=""
                                class="border-all border-width-10px border-color-white box-shadow-extra-large" />
                            <a href="<?php echo esc_url($project_institutional_video); ?>"
                                class="popup-youtube video-icon-box video-icon-large absolute-middle-center">
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
                        <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-10 text-center wow animate__fadeIn">
                            <i class="ti-quote-left text-dark-purple icon-large margin-25px-bottom d-block"></i>
                            <span class="text-extra-large text-purple line-height-34px alt-font d-block margin-25px-bottom">
                                <?php echo esc_html($project_thanks); ?>
                            </span>
                            <span class="alt-font text-uppercase text-small font-weight-500 letter-spacing-4px">Equipe Los
                                Anjos</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <?php
            $project_section_mockups = get_post_meta(get_the_ID(), 'project_section_mockups', true);
            if (!empty($project_section_mockups) && is_array($project_section_mockups)):
                foreach ($project_section_mockups as $index => $mockup_id):
                    $mockup_url = wp_get_attachment_image_url($mockup_id, 'full');
                    if ($mockup_url):
                        if ($index % 2 == 0):
                            // Layout para índices pares
                            ?>
                            <!-- start section para layout par -->
                            <section class="p-0 parallax h-750px md-h-550px sm-h-350px wow animate__fadeIn" data-parallax-background-ratio="0.1"
                                style="background: url('<?php echo esc_url($mockup_url); ?>');"></section>
                            <!-- end section para layout par -->
                        <?php else:
                            // Layout para índices ímpares (exemplo com fundo em div)
                            ?>
                            <!-- start section para layout ímpar -->
                            <section class="wow animate__fadeIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="<?php echo esc_url($mockup_url); ?>" alt="Mockup <?php echo esc_attr($index); ?>">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- end section para layout ímpar -->
                        <?php
                        endif;
                    endif;
                endforeach;
            endif;
            ?>

            <!-- start section -->
            <section class="wow animate__fadeIn">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div
                            class="col-12 col-lg-7 col-md-10 d-flex justify-content-end lg-padding-40px-left md-margin-50px-bottom">
                            <figure class="position-relative m-0">
                                <img src="<?php echo esc_url($page_end_content); ?>" alt="">
                                <figcaption class="position-absolute bg-dark-purple bottom-minus-20px left-minus-50px text-white padding-3-half-rem-all w-50 xs-w-100 xs-left-minus-25px">
                                    <span class="text-uppercase text-small letter-spacing-1px text-yellow alt-font font-weight-500 margin-10px-bottom d-inline-block">Cansado de depender somente do programador?</span>
                                    <h6 class="alt-font text-uppercase font-weight-500 margin-10px-bottom">Seu site totalmente gerenciável por você.</h6>
                                    <h6 class="text-uppercase text-small letter-spacing-1px alt-font font-weight-500 d-inline-block mb-0">Confie na Los Anjos!</h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-xl-4 offset-xl-1 col-lg-5 col-md-9">
                            <span
                                class="alt-font title-extra-small text-purple line-height-40px letter-spacing-minus-1-half font-weight-500 d-inline-block margin-25px-bottom">Se sua presença digital ainda não reflete todo o potencial da sua marca.</span>
                                <p>Conte com a Los Anjos para transformar desafios em soluções inovadoras. Unimos criatividade, design ousado e estratégia de branding para criar experiências visuais que realmente fazem a diferença.</p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-link btn-extra-large text-purple">Explore Website</a>

                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

            <!-- start section -->
            <section class="fancy-box-background fancy-box-col bg-light-gray p-0">
                <div class="container-fluid">
                    <div class="row row-cols-1 row-cols-sm-2 justify-content-center">
                        <?php
                        // Recupera o post anterior e o próximo
                        $prev_post = get_previous_post(false); // false = não limitar a mesma categoria (você pode passar true se quiser)
                        $next_post = get_next_post(false);
                        ?>

                        <!-- start prev pagination -->
                        <?php if ($prev_post):
                            $prev_permalink = get_permalink($prev_post->ID);
                            $prev_title = get_the_title($prev_post->ID);
                            // Tenta pegar a imagem destacada; se não tiver, você pode usar um placeholder
                            $prev_img = get_the_post_thumbnail_url($prev_post->ID, 'full');
                            if (!$prev_img) {
                                $prev_img = get_template_directory_uri() . '/assets/images/placeholder.png';
                            }
                            ?>
                            <div class="col fancy-box-item px-0">
                                <a href="<?php echo esc_url($prev_permalink); ?>"
                                    class="d-flex h-100 align-items-center justify-content-center justify-content-lg-between justify-content-sm-start padding-7-rem-lr padding-4-rem-tb xl-padding-3-rem-all xs-padding-2-rem-tb xs-no-padding-lr">
                                    <div class="bg-banner-image cover-background"
                                        style="background-image: url('<?php echo esc_url($prev_img); ?>');"></div>
                                    <div
                                        class="alt-font text-purple font-weight-500 btn-slide-icon-left text-uppercase me-lg-auto">
                                        <i class="line-icon-Arrow-OutLeft icon-medium align-middle margin-20px-right"></i>
                                        <span class="d-none d-lg-inline-block text-small">Prev project</span>
                                    </div>
                                    <span
                                        class="text-extra-large alt-font text-purple d-block font-weight-500"><?php echo esc_html($prev_title); ?></span>
                                </a>
                            </div>
                        <?php endif; ?>
                        <!-- end prev pagination -->

                        <!-- start next pagination -->
                        <?php if ($next_post):
                            $next_permalink = get_permalink($next_post->ID);
                            $next_title = get_the_title($next_post->ID);
                            $next_img = get_the_post_thumbnail_url($next_post->ID, 'full');
                            if (!$next_img) {
                                $next_img = get_template_directory_uri() . '/assets/images/placeholder.png';
                            }
                            ?>
                            <div class="col fancy-box-item px-0">
                                <a href="<?php echo esc_url($next_permalink); ?>"
                                    class="d-flex h-100 align-items-center justify-content-center justify-content-sm-end justify-content-lg-between padding-7-rem-lr padding-4-rem-tb xl-padding-3-rem-all xs-padding-2-rem-tb xs-no-padding-lr">
                                    <div class="bg-banner-image cover-background"
                                        style="background-image: url('<?php echo esc_url($next_img); ?>');"></div>
                                    <span
                                        class="text-extra-large alt-font text-purple d-block font-weight-500 me-lg-auto"><?php echo esc_html($next_title); ?></span>
                                    <div class="alt-font text-purple font-weight-500 btn-slide-icon text-uppercase">
                                        <span class="d-none d-lg-inline-block text-small">Next project</span>
                                        <i class="line-icon-Arrow-OutRight icon-medium align-middle margin-20px-left"></i>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                        <!-- end next pagination -->
                    </div>
                </div>
            </section>
            <!-- end section -->


    <?php endwhile; endif; ?>

<?php get_footer(); ?>