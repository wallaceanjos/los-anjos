<?php
    get_header();
    
    $placeholder_img = get_template_directory_uri() . '/assets/images/bg_la_1.jpg';
    $idade = date('Y') - 1989; 
?>


    <!-- Início do título da página -->
    <section class="no-padding cover-background position-relative" style="background-image: url(<?php echo esc_url($placeholder_img) ?>);">
            <div class="container position-relative h-800px md-h-600px sm-h-500px">
                <div class="row align-items-center h-100 md-padding-10-rem-bottom sm-no-padding-bottom">
                    <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5 text-center text-sm-start">
                        <div class="d-flex flex-center flex-md-end">
                            <div class="flex-column la-card max-w-md-500 p-32">
                                    <h2 class="alt-font color-white letter-spacing-minus-1px margin-40px-bottom font-weight-500">Sou <span class="text-decoration-line-bottom-thick">Wallace</span></h2>
                                    <span class="alt-font color-white line-height-30px opacity-7 font-weight-300 text-extra-medium margin-40px-bottom d-block w-75 md-w-100 xs-w-80 mx-auto mx-sm-0 w-200">
                                    <p>Cristão, casado, pai, trabalho como desenvolvedor e designer, tenho <?php echo date('Y') - 1989; ?> anos e, nas horas vagas, escrevo alguns artigos para meu blog.</p></span>
                                    <div class="social-icon-style-12">
                                        <ul class="small-icon color-white text-center flex-center-center">
                                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="i-matcha-facebook color-white"></i></a></li>
                                            <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="i-matcha-x color-white"></i></a></li>
                                            <li><a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i class="i-matcha-instagram color-white"></i></a></li>
                                            <li><a class="pinterest" href="https://www.pinterest.com/" target="_blank"><i class="fab fa-linkedin-in color-white"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    <!-- Fim do título da página -->

    <!-- Início da seção de posts -->
    <section class="bg-light-gray pt-0 padding-five-lr lg-no-padding-lr mt--64">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 blog-content lg-no-padding-lr">
                    <ul class="blog-simple blog-wrapper grid grid-loading grid-2col xl-grid-2col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                        <li class="grid-sizer"></li>
                        <?php
                        // Query para os posts do blog (3 posts por página)
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 8,
                            'paged'          => $paged,
                        );
                        $blog_query = new WP_Query( $args );
                        if ( $blog_query->have_posts() ) :
                            while ( $blog_query->have_posts() ) : $blog_query->the_post();
                                $post_date      = get_the_date('j \d\e F \d\e Y');
                                $post_permalink = get_permalink();
                                $post_title     = get_the_title();
                                $post_excerpt   = get_the_excerpt();
                                $post_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : get_template_directory_uri() . '/assets/images/placeholder.png';
                                $categories     = get_the_category();
                                $cat_name       = ( ! empty( $categories ) ) ? $categories[0]->name : '';
                        ?>
                        <li class="grid-item wow animate__fadeIn">
                            <div class="blog-post box-shadow-small border-radius-6px">
                                <div class="blog-post-image cover-background xs-h-250px" style="background-image: url('<?php echo esc_url( $post_thumbnail ); ?>')">
                                    <a href="<?php echo esc_url( $post_permalink ); ?>" class="blog-post-image-overlay bg-dark-slate-blue"></a>
                                </div>
                                <div class="post-details bg-white padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                    <a href="<?php echo esc_url( $post_permalink ); ?>" class="blog-category alt-font text-extra-dark-gray border-color-black-transparent bg-white align-self-start margin-4-half-rem-bottom xs-margin-2-half-rem-bottom">
                                        <?php echo esc_html( $cat_name ); ?>
                                    </a>
                                    <a href="<?php echo esc_url( $post_permalink ); ?>" class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-15px-bottom xs-margin-10px-bottom">
                                        <?php echo esc_html( $post_title ); ?>
                                    </a>
                                    <p class="line-clamp-5"><?php echo esc_html( $post_excerpt ); ?></p>
                                    <a href="<?php echo esc_url( $post_permalink ); ?>" class="alt-font font-weight-500 text-small color-accent text-uppercase align-self-start">
                                        <?php the_author(); ?>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <?php
                            endwhile;
                            // Paginação
                            $big = 999999999; // número improvável para base
                            $pagination = paginate_links( array(
                                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format'  => '?paged=%#%',
                                'current' => max( 1, $paged ),
                                'total'   => $blog_query->max_num_pages,
                                'type'    => 'list',
                            ) );
                            wp_reset_postdata();
                        endif;
                        ?>
                    </ul>
                    <?php if ( $pagination ) : ?>
                        <style>
                            ul.page-numbers {
                                display: flex;
                                justify-content: center;
                                list-style: none;
                                padding: 0;
                                gap: 16px;
                            }
                        </style>
                        <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top xs-margin-4-rem-top wow animate__fadeIn" data-wow-delay="0.1s">
                            <?php echo $pagination; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da seção de posts -->

<?php
    get_footer();
?>