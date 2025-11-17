
<?php
    $placeholder_img = get_template_directory_uri() . '/images/placeholder.png';
?>


<?php
    if(have_posts()){
        the_post();
    }
?>

        <div class="flex-column gap-32">
            <!-- Search Widget -->
            <div class="flex-column">
                
                <form action="<?php echo home_url('/'); ?>" method="get" class="flex-row">
                    <input type="text" name="s" class="input input-basic" placeholder="Buscar...">
                    <button class="btn btn-very-small btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" onclick="copyToClipboard('<?php the_permalink(); ?>')">
                        <span class="i-matcha-search i-size-sm"></span>
                    </button>
                </form>
                
                
            </div>
            <!-- End Search Widget -->
            
            <!-- Share Widget -->
            <div class="flex-column">
            
                <span class="fs-14 text-uppercase font-weight-700">
                    Compartilhe:
                </span>
                
                
                <div class="flex-row gap-16">
                    
                    <script>
                        function copyToClipboard(text) {
                            var input = document.createElement('input');
                            input.value = text;
                            document.body.appendChild(input);
                            input.select();
                            document.execCommand('copy');
                            document.body.removeChild(input);
                        }
                    </script>
                
                    <!-- copiar link -->
                    <div class="flex-column gap-8">
                        <div class="flex-row gap-8">
                            <button class="btn btn-very-small btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" onclick="copyToClipboard('<?php the_permalink(); ?>')">
                                <span class="i-matcha-copy-out i-size-sm"></span>
                            </button>
                            
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="btn btn-very-small btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" target="_blank">
                                <span class="i-matcha-facebook i-size-sm"></span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" class="btn btn-very-small btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" target="_blank">
                                <span class="i-matcha-x i-size-sm"></span>
                            </a>
                            <a href="https://wa.me/?text=<?php the_permalink(); ?>" class="btn btn-very-small btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" target="_blank">
                                <span class="i-matcha-whatsapp i-size-sm"></span>
                            </a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <!-- End Share Widget -->
            
            <!-- Last Posts Widget-->
            <div class="flex-column">
                
                <span class="fs-14 text-uppercase font-weight-700">Pode gostar também de:</span>
                
                <div class="flex-column gap-16">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    );
                    $query = new WP_Query($args);
        
                    if($query->have_posts()) {
                        while($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <li class="flex-column gap-16">
                                <a href="<?php the_permalink()?>" title="" class="flex-row gap-16">
                                    <!-- thumbnail -->
                                    <div class="min-w-120 w-120 max-w-120 w-md-100-p max-w-md-100-p min-w-md-100-p" style="
                                    background: url(<?php
                                            if(has_post_thumbnail()) {
                                                $thumbnail_url = get_the_post_thumbnail_url();
                                            } else {
                                                $thumbnail_url = $placeholder_img;
                                            }
                                            echo $thumbnail_url;
                                        ?>
                                        )no-repeat center center / cover; aspect-ratio: 12/8; border-radius: 8px;">
                                    </div>
                                    <div class="flex-column flex-center gap-8">
                                        <span class="fw-500 fs-14 lh-18"><?php the_title()?></span>
                                        <a href="<?php the_permalink()?>" class="btn btn-link color-accent">
                                            <span class="fw-700 fs-12 lh-18 mr-8">Ver mais</span>
                                            <span class="i-matcha-arrow-right w-12--force h-12--force lh-12--force fs-12--force" style="transform: rotateZ(-45deg);"></span>
                                        </a>
                                    </div>
                                </a>
                            </li>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                
            </div>
            <!-- End Last Posts Widget -->
            
            <!-- Widget Categories-->
            <div class="flex-column">
                
                <span class="fs-14 text-uppercase font-weight-700">Categorias:</span>
                
                <div class="flex-column gap-16">
                    <?php
                        $categories = get_categories(); // Obter uma lista de todas as categorias
                        if ($categories) {
                            echo '<div class="d-flex gap-8 flex-wrap">';
                            foreach ($categories as $category) {
                                $category_link = get_category_link($category->term_id); // Obter o link para a categoria
                                $category_count = $category->count; // Obter o número de posts na categoria
                                echo '<a href="' . $category_link . '" class="btn btn-very-small btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr"><span class="fw-700 fs-12 lh-18">' . $category->name . '</span></a>'; // Exibir a categoria e o número de posts
                            }
                            echo '</div>';
                        }
                    ?>
                </div>
                
            </div>
            <!-- End Widget -->
            
        </div>

