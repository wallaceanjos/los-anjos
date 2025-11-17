<?php
    get_header();
?>

<!-- exibe o conteúdo de page.php -->
<?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
?>


<?php
    get_footer();
?>