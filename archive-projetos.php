<?php
    get_header();
    
    $placeholder_img = get_template_directory_uri() . '/assets/images/bg_la_1.jpg';
?>

    <!-- Início do título da página -->
    <section class="no-padding cover-background position-relative" style="background-image: url(<?php echo esc_url($placeholder_img) ?>);">
            <div class="container position-relative h-800px md-h-600px sm-h-500px">
                <div class="row align-items-center h-100 md-padding-10-rem-bottom sm-no-padding-bottom">
                    <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5 text-center text-sm-start">
                        <div class="d-flex flex-center flex-md-end">
                            <div class="flex-column la-card max-w-md-500 p-32">
                                    <h2 class="alt-font color-white letter-spacing-minus-1px margin-40px-bottom font-weight-500">Nossos <span class="text-decoration-line-bottom-thick">Projetos</span></h2>
                                    <span class="alt-font color-white line-height-30px opacity-7 font-weight-300 text-extra-medium margin-40px-bottom d-block w-75 md-w-100 xs-w-80 mx-auto mx-sm-0 w-200">
                                    <p>Conheça alguns dos nossos projetos mais recentes e bem-sucedidos.</p></span>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    <!-- Fim do título da página -->
    
    
    <!-- Início da seção de projetos -->
    <section class="big-section border-top border-color-medium-gray pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- start filter navigation -->
                    <ul class="blog-filter grid-filter nav nav-tabs justify-content-center border-0 text-uppercase font-weight-500 alt-font padding-6-rem-bottom md-padding-4-half-rem-bottom sm-padding-2-rem-bottom">
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
                <div class="col-12 blog-content xs-no-padding-lr wow animate__fadeIn">
                    <ul class="blog-modern blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
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
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple" style="overflow:unset;">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'full' );
                                            } else {
                                                // Caso não tenha imagem destacada, exiba uma imagem padrão
                                                echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/default.jpg' ) . '" alt="' . get_the_title() . '">';
                                            }
                                        ?>
                                        </a>
                                        
                                        <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                            <a href="<?php the_permalink(); ?>" class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase"><?php echo esc_attr( $term_classes ); ?></a>
                                            <a href="<?php the_permalink(); ?>" class="alt-font text-extra-dark-gray text-extra-dark-gray-hover text-large line-height-26px d-block margin-20px-bottom "><?php the_title(); ?></a>
                                            <a href="<?php the_permalink(); ?>" class="alt-font text-uppercase text-extra-small letter-spacing-1px d-block"><?php echo get_the_date(); ?></a>
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
    <!-- Fim da seção de projetos -->

<?php
    get_footer();
?>
