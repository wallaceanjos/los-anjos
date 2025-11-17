<?php
    get_header();
?>

            <!-- Head Section -->
            <section class="cover-background" data-parallax-background-ratio="0.5" style="background: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
                <div class="opacity-extra-medium-2 bg-extra-dark-gray"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-md-10 position-relative one-half-screen d-flex justify-content-end flex-column">
                            <h2 class="color-primary font-weight-500 fs-36 fs-md-56 margin-5-half-rem-bottom w-85 text-start"><?php the_title(); ?></h2>
                            <ul class="list-unstyled">
                                <li class="d-block d-sm-inline-block margin-25px-right">
                                    <span class="text-white opacity-5 d-block">Autor</span>
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>" class="text-white alt-font">
                                        <!-- se tiver autor the author se não Los Anjos -->
                                        <?php 
                                            if(get_the_author_meta('first_name') != ''){
                                                echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
                                            }else{
                                                echo 'Los Anjos';
                                            }
                                        ?>
                                    </a>
                                </li>
                                <li class="d-block d-sm-inline-block margin-25px-right">
                                    <span class="text-white opacity-5 d-block">Data</span>
                                    <a href="#" class="text-white alt-font"><?php echo get_the_date('j \d\e F \d\e Y'); ?></a>
                                </li>
                                <li class="d-block d-sm-inline-block">
                                    <span class="text-white opacity-5 d-block">Categorias</span>
                                    <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) : 
                                    ?>
                                        <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="text-white alt-font"><?php echo esc_html( $categories[0]->name ); ?></a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Head Section -->

            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">

                        <!-- Content -->
                        <div class="col-sm-8">

                            <?php
                                if(have_posts()){
                                    while(have_posts()){
                                        
                                        the_post();
                                        get_template_part('template-parts/content', 'article');
                                        
                                    }
                                }
                            ?>

                        </div>
                        <!-- End Content -->

                        <!-- Sidebar -->
                        <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                            <?php
                                if(have_posts()){
                                    the_post();
                                    get_template_part('template-parts/content', 'sidebar');
                                }
                            ?>
                        </div>
                        <!-- End Sidebar -->
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            


            

<?php
    get_footer();
?>