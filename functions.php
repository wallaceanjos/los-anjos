<?php
require_once get_template_directory() . '/inc/clone-functionality.php';
require_once get_template_directory() . '/inc/institutional-settings-functionality.php';
require_once get_template_directory() . '/inc/projects-functionality.php';

function los_anjos_theme_support(){
    // add title tag dinamically
    add_theme_support('title-tag');
	add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'los_anjos_theme_support');

function los_anjos_menus(){

    register_nav_menus( array(
        'menu-front' => 'Menu da página inicial',
        'menu-outras' => 'Menu para outras páginas'
    ) );
}
add_action('init', 'los_anjos_menus');

function permitir_upload_svg( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'permitir_upload_svg' );

function wpdev_filter_login_head() {

    if ( has_custom_logo() ) :

        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        ?>
        <style type="text/css">
            .nav-logo-wrap a {
                background: url(<?php echo esc_url( $image[0] ); ?>) no-repeat center center / contain;
                width: <?php echo absint( $image[1] ) ?>px;
                height: <?php echo absint( $image[2] ) ?>px;
            }
        </style>
        <?php
    endif;
}
add_action( 'login_head', 'wpdev_filter_login_head', 100 );


function get_category_events_posts( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
      return;
    }
   
    if ( is_page( 'events' ) ) { // Substitua 'nome-da-pagina' pelo slug da página que você criou
      $query->set( 'category_name', 'eventos' ); // Substitua 'eventos' pelo slug da categoria que você quer exibir
    }
  }
  add_action( 'pre_get_posts', 'get_category_events_posts' );


// Exibir até 3 imagens relacionadas em cada post na listagem
function display_related_images() {
    global $post;
    $post_id = $post->ID;
    $related_images = get_attached_media('image', $post_id);
    $count = 0;
    $has_thumbnail = false;
    if (has_post_thumbnail() || $related_images ){
        echo '<div class="blog-media">
                <ul class="clearlist content-slider">';
                    // Verificar se o post tem uma imagem em destaque (thumbnail) e exibi-la primeiro
                    if (has_post_thumbnail()) {
                        $has_thumbnail = true;
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_image = wp_get_attachment_image_src($thumbnail_id, 'thumbnail');
                        echo '<li>';
                        echo '  <a href="' . get_permalink() . '" style="display:block;background:url('. $thumbnail_image[0] .')no-repeat center center / cover">
                                    <img width="100%" height="auto" src="https://portal.josuevalandro.com.br/wp-content/uploads/2023/04/placeholder-16x9-1.png" alt="' . get_the_title() . '">
                                </a>';
                        echo '</li>';
                        $count++;
                    }
                    
                    // Exibir até 2 imagens adicionais relacionadas
                    if ($related_images) {
                        foreach ($related_images as $image) {
                            if ($count < 3) {
                                // Ignorar a imagem em destaque se já foi exibida
                                if ($has_thumbnail && $image->ID == $thumbnail_id) {
                                    continue;
                                }
                                echo '<li>';
                                echo '  <a href="' . get_permalink() . '" style="display:block;background:url('. $image->guid .')no-repeat center center / cover">
                                            <img width="100%" height="auto" src="https://portal.josuevalandro.com.br/wp-content/uploads/2023/04/placeholder-16x9-1.png" alt="' . $image->post_title . '">
                                        </a>';
                                echo '</li>';
                                $count++;
                            } else {
                                break;
                            }
                        }
                    }
        echo '</ul></div>';
    }
}


// CRIA CAIXA DE DATA DO EVENTO QUANDO SELECIONADO CATEGORIA DE EVENTO EM UM POST
function evento_add_meta_box() {
    $screens = ['post']; // Especifica em quais post types o meta box será exibido.
    foreach ( $screens as $screen ) {
        add_meta_box(
            'evento_meta_box', // ID do meta box
            'Data do evento', // Título do meta box
            'evento_meta_box_callback', // Callback function
            'post', // Post type
            'side', // Contexto do meta box
            'high' // Prioridade do meta box
        );
    }
}
add_action( 'add_meta_boxes', 'evento_add_meta_box' );

function evento_meta_box_callback( $post ) {
    wp_nonce_field( 'evento_meta_box', 'evento_meta_box_nonce' );
    $data_do_evento = get_post_meta( $post->ID, '_data_do_evento', true );
    ?>
    <p>
        <label for="data_do_evento">Data do evento:</label>
        <br>
        <input type="date" id="data_do_evento" name="data_do_evento" value="<?php echo esc_attr( $data_do_evento ); ?>">
    </p>
    <?php
}

function evento_save_meta_box_data( $post_id ) {
    if ( ! isset( $_POST['evento_meta_box_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['evento_meta_box_nonce'], 'evento_meta_box' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( isset( $_POST['post_type'] ) && 'post' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }
    if ( ! isset( $_POST['data_do_evento'] ) ) {
        return;
    }
    $data_do_evento = sanitize_text_field( $_POST['data_do_evento'] );
    update_post_meta( $post_id, '_data_do_evento', $data_do_evento );
}
add_action( 'save_post', 'evento_save_meta_box_data' );

// Retorna breadcrumb
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;/&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;/&nbsp;<span>Post</span> ";
            }
    } elseif (is_page()) {
        echo "&nbsp;/&nbsp;<span>Post</span>";
    } elseif (is_search()) {
        echo "&nbsp;/&nbsp;Busca por ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

add_theme_support( 'block-templates' );

add_action( 'after_setup_theme', 'theme_custom_templates' );

function theme_custom_templates() {
    // Adicione suporte a templates personalizados para páginas e posts
    add_theme_support( 'custom-page-templates', array(
        'page-project.php' => 'Projeto', // Substitua 'page-project.php' pelo nome do seu template
    ) );
    
    add_post_type_support( 'post', 'custom-page-templates' );
}

function los_anjos_register_styles(){
    $version = wp_get_theme() -> get('Version');
    wp_enqueue_style('los-anjos-style-theme-vendors', get_template_directory_uri() . "/assets/css/theme-vendors.min.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style', get_template_directory_uri() . "/assets/css/style.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style-font-awesome', get_template_directory_uri() . "/assets/css/font-icons.min.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style-icons', get_template_directory_uri() . "/assets/css/icons.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style-forms', get_template_directory_uri() . "/assets/css/forms.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style-colors', get_template_directory_uri() . "/assets/css/colors.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style-layout', get_template_directory_uri() . "/assets/css/layout.css", array(), $version, 'all');
    wp_enqueue_style('los-anjos-style-YTPlayer', get_template_directory_uri() . "/assets/css/YTPlayer.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'los_anjos_register_styles');

function los_anjos_register_scripts(){
    $version = wp_get_theme() -> get('Version');
    wp_enqueue_script('los-anjos-script-jquery', get_template_directory_uri() . "/assets/js/jquery.min.js", array(),'1.11.2', 'all');
    wp_enqueue_script('los-anjos-script-theme-vendors', get_template_directory_uri() . "/assets/js/theme-vendors.min.js", array(),'1.11.2', 'all');
    wp_enqueue_script('los-anjos-script-main.js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.3', 'all');
    // wp_enqueue_script('los-anjos-script-loader.js', get_template_directory_uri() . "/assets/js/loader.js", array(), '1.3', 'all');
    wp_enqueue_script('los-anjos-script-YTPlayer', get_template_directory_uri() . "/assets/js/jquery.mb.YTPlayer.js", array(), '1.3', 'all');
}
add_action('wp_enqueue_scripts', 'los_anjos_register_scripts');

?>