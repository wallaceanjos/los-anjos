<?php
// REGISTRA O CUSTOM POST TYPE "Projetos"
function register_projetos_cpt() {
    $labels = array(
        'name'                  => _x( 'Projetos', 'Nome geral do post type', 'textdomain' ),
        'singular_name'         => _x( 'Projeto', 'Nome singular do post type', 'textdomain' ),
        'menu_name'             => _x( 'Projetos', 'Texto do menu no admin', 'textdomain' ),
        'name_admin_bar'        => _x( 'Projeto', 'Adicionar novo no Toolbar', 'textdomain' ),
        'add_new'               => __( 'Adicionar Novo', 'textdomain' ),
        'add_new_item'          => __( 'Adicionar Novo Projeto', 'textdomain' ),
        'new_item'              => __( 'Novo Projeto', 'textdomain' ),
        'edit_item'             => __( 'Editar Projeto', 'textdomain' ),
        'view_item'             => __( 'Ver Projeto', 'textdomain' ),
        'all_items'             => __( 'Todos os Projetos', 'textdomain' ),
        'search_items'          => __( 'Buscar Projetos', 'textdomain' ),
        'parent_item_colon'     => __( 'Projetos Pai:', 'textdomain' ),
        'not_found'             => __( 'Nenhum projeto encontrado.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Nenhum projeto encontrado na lixeira.', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projetos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
    );

    register_post_type( 'projetos', $args );
}
add_action( 'init', 'register_projetos_cpt' );


// ADICIONA META BOXES PARA OS CAMPOS PERSONALIZADOS
function projetos_add_meta_boxes() {
    // Meta box para os textos/informações
    add_meta_box(
        'projetos_info_meta',
        __( 'Informações do Projeto', 'textdomain' ),
        'projetos_info_meta_box_callback',
        'projetos',
        'normal',
        'high'
    );

    // Meta box para as imagens
    add_meta_box(
        'projetos_imagens_meta',
        __( 'Imagens do Projeto', 'textdomain' ),
        'projetos_imagens_meta_box_callback',
        'projetos',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'projetos_add_meta_boxes' );


// CALLBACK PARA A META BOX DE INFORMAÇÕES (TEXTOS)
function projetos_info_meta_box_callback( $post ) {
    wp_nonce_field( 'save_projetos_meta', 'projetos_meta_nonce' );

    // Recupera os valores salvos para os campos de texto
    $project_name           = get_post_meta( $post->ID, 'project_name', true );
    $project_about          = get_post_meta( $post->ID, 'project_about', true );
    $project_about_date     = get_post_meta( $post->ID, 'project_about_date', true );
    $project_about_client   = get_post_meta( $post->ID, 'project_about_client', true );
    $project_about_industry = get_post_meta( $post->ID, 'project_about_industry', true );
    $project_about_website  = get_post_meta( $post->ID, 'project_about_website', true );
    $project_behance_link   = get_post_meta( $post->ID, 'project_behance_link', true );
    $project_inpiration     = get_post_meta( $post->ID, 'project_inpiration', true );
    $project_challenge      = get_post_meta( $post->ID, 'project_challenge', true );
    $project_approach       = get_post_meta( $post->ID, 'project_approach', true );
    $project_institutional_video = get_post_meta( $post->ID, 'project_institutional_video', true );
    ?>
    <p>
        <label for="project_name"><?php _e( 'Nome do Projeto', 'textdomain' ); ?></label><br>
        <input type="text" id="project_name" name="project_name" value="<?php echo esc_attr( $project_name ); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="project_about"><?php _e( 'Descrição', 'textdomain' ); ?></label><br>
        <textarea id="project_about" name="project_about" rows="4" style="width:100%;"><?php echo esc_textarea( $project_about ); ?></textarea>
    </p>
    <p>
        <label for="project_about_date"><?php _e( 'Data', 'textdomain' ); ?></label><br>
        <input type="text" id="project_about_date" name="project_about_date" value="<?php echo esc_attr( $project_about_date ); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="project_about_client"><?php _e( 'Cliente', 'textdomain' ); ?></label><br>
        <input type="text" id="project_about_client" name="project_about_client" value="<?php echo esc_attr( $project_about_client ); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="project_about_industry"><?php _e( 'Indústria/Setor', 'textdomain' ); ?></label><br>
        <input type="text" id="project_about_industry" name="project_about_industry" value="<?php echo esc_attr( $project_about_industry ); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="project_about_website"><?php _e( 'Website', 'textdomain' ); ?></label><br>
        <input type="text" id="project_about_website" name="project_about_website" value="<?php echo esc_attr( $project_about_website ); ?>" style="width:100%;" />
    </p>
    <!-- Novo campo para Behance Link, adicionado abaixo de project_about_website -->
    <p>
        <label for="project_behance_link"><?php _e( 'Behance Link', 'textdomain' ); ?></label><br>
        <input type="text" id="project_behance_link" name="project_behance_link" value="<?php echo esc_attr( $project_behance_link ); ?>" style="width:100%;" placeholder="<?php _e( 'Insira o link do Behance', 'textdomain' ); ?>" />
    </p>
    <p>
        <label for="project_inpiration"><?php _e( 'Inspiração', 'textdomain' ); ?></label><br>
        <textarea id="project_inpiration" name="project_inpiration" rows="4" style="width:100%;"><?php echo esc_textarea( $project_inpiration ); ?></textarea>
    </p>
    <p>
        <label for="project_challenge"><?php _e( 'Desafio', 'textdomain' ); ?></label><br>
        <textarea id="project_challenge" name="project_challenge" rows="4" style="width:100%;"><?php echo esc_textarea( $project_challenge ); ?></textarea>
    </p>
    <p>
        <label for="project_approach"><?php _e( 'Abordagem', 'textdomain' ); ?></label><br>
        <textarea id="project_approach" name="project_approach" rows="4" style="width:100%;"><?php echo esc_textarea( $project_approach ); ?></textarea>
    </p>
    <!-- Campo para vídeo institucional -->
    <p>
        <label for="project_institutional_video"><?php _e( 'Vídeo Institucional do Cliente', 'textdomain' ); ?></label><br>
        <input type="text" id="project_institutional_video" name="project_institutional_video" value="<?php echo esc_attr( $project_institutional_video ); ?>" style="width:100%;" placeholder="<?php _e( 'Video institucional do cliente (YouTube)', 'textdomain' ); ?>" />
    </p>
    <!-- Novo campo para Agradecimentos -->
    <p>
        <label for="project_concluding_remarks"><?php _e( 'Considerações finais', 'textdomain' ); ?></label><br>
        <textarea id="project_concluding_remarks" name="project_concluding_remarks" rows="4" style="width:100%;"><?php echo esc_textarea( get_post_meta($post->ID, 'project_concluding_remarks', true) ); ?></textarea>
    </p>
    <p>
        <label for="project_thanks"><?php _e( 'Agradecimentos', 'textdomain' ); ?></label><br>
        <textarea id="project_thanks" name="project_thanks" rows="4" style="width:100%;"><?php echo esc_textarea( get_post_meta($post->ID, 'project_thanks', true) ); ?></textarea>
    </p>
    <!-- Script para exibir a thumbnail do vídeo ao sair do campo -->
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#project_institutional_video').on('blur', function() {
            var videoUrl = $(this).val();
            var regex = /[?&]v=([^?&]+)/;
            var matches = videoUrl.match(regex);
            var videoId = '';
            if (matches && matches[1]) {
                videoId = matches[1];
            }
            var thumbUrl = '';
            if (videoId) {
                thumbUrl = 'https://img.youtube.com/vi/' + videoId + '/hqdefault.jpg';
            }
            var $thumb = $('#video_thumb');
            if ($thumb.length) {
                if (thumbUrl) {
                    $thumb.attr('src', thumbUrl).show();
                } else {
                    $thumb.hide();
                }
            } else {
                if (thumbUrl) {
                    $('#project_institutional_video').after('<img id="video_thumb" src="' + thumbUrl + '" alt="Thumbnail" style="max-width:120px; margin-left:10px; vertical-align:middle;">');
                }
            }
        });
    });
    </script>
    <?php
}


// CALLBACK PARA A META BOX DE IMAGENS
function projetos_imagens_meta_box_callback( $post ) {
    wp_enqueue_media();
    wp_nonce_field( 'save_projetos_meta', 'projetos_meta_nonce' );

    $image_fields = array(
        'project_bg_header'              => __( 'Imagem de Fundo do Header', 'textdomain' ),
        'project_logo_icon_svg'          => __( 'Logo Ícone SVG', 'textdomain' ),
        'project_logo_icon_png'          => __( 'Logo Ícone PNG', 'textdomain' ),
        'project_logo_full'              => __( 'Logo Completa', 'textdomain' ),
        'project_section_challenge'      => __( 'Imagem da Seção Desafio', 'textdomain' ),
        'project_section_approach'       => __( 'Imagem da Seção Abordagem', 'textdomain' ),
        'project_section_divider'        => __( 'Imagem Divisória da Seção', 'textdomain' ),
        'project_section_video_placeholder' => __( 'Placeholder para Vídeo', 'textdomain' ),
        'project_img_prev_post'          => __( 'Imagem para Post Anterior', 'textdomain' ),
        'project_img_next_post'          => __( 'Imagem para Próximo Post', 'textdomain' )
    );
    
    foreach ( $image_fields as $field_key => $label ) {
        $value   = get_post_meta( $post->ID, $field_key, true );
        $img_url = $value ? wp_get_attachment_image_url( $value, 'thumbnail' ) : '';
        ?>
        <p>
            <label for="<?php echo esc_attr( $field_key ); ?>"><?php echo esc_html( $label ); ?></label><br>
            <img id="preview_<?php echo esc_attr( $field_key ); ?>" src="<?php echo esc_url( $img_url ); ?>" style="max-width:120px; <?php echo $img_url ? '' : 'display:none;'; ?>" /><br>
            <input type="hidden" id="<?php echo esc_attr( $field_key ); ?>" name="<?php echo esc_attr( $field_key ); ?>" value="<?php echo esc_attr( $value ); ?>" />
            <button class="button upload_image_button" data-target="<?php echo esc_attr( $field_key ); ?>"><?php _e( 'Selecionar Imagem', 'textdomain' ); ?></button>
            <button class="button remove_image_button" data-target="<?php echo esc_attr( $field_key ); ?>" style="<?php echo $img_url ? '' : 'display:none;'; ?>"><?php _e( 'Remover Imagem', 'textdomain' ); ?></button>
        </p>
        <?php
    }

    $project_section_mockups = get_post_meta( $post->ID, 'project_section_mockups', true );
    if ( ! is_array( $project_section_mockups ) ) {
        $project_section_mockups = array();
    }
    ?>
    <p>
        <strong><?php _e( 'Mockups', 'textdomain' ); ?></strong>
    </p>
    <div id="project_section_mockups_container">
        <?php if ( ! empty( $project_section_mockups ) ) : ?>
            <?php foreach ( $project_section_mockups as $attachment_id ) : 
                $thumb = wp_get_attachment_image_url( $attachment_id, 'thumbnail' );
                ?>
                <div class="project_mockup_item" style="margin-bottom:10px;">
                    <img src="<?php echo esc_url( $thumb ); ?>" style="max-width: 120px; margin-right: 10px; vertical-align: middle;">
                    <input type="hidden" name="project_section_mockups[]" value="<?php echo esc_attr( $attachment_id ); ?>">
                    <button class="button remove_mockup_image"><?php _e( 'Remover', 'textdomain' ); ?></button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <button id="add_mockup_images" class="button"><?php _e( 'Adicionar Imagens', 'textdomain' ); ?></button>
    
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.upload_image_button').on('click', function(e) {
            e.preventDefault();
            var button = $(this);
            var target = button.data('target');
            var frame = wp.media({
                title: '<?php _e('Selecionar Imagem','textdomain'); ?>',
                button: { text: '<?php _e('Selecionar','textdomain'); ?>' },
                multiple: false
            });
            frame.on('select', function(){
                var attachment = frame.state().get('selection').first().toJSON();
                $('#' + target).val( attachment.id );
                $('#preview_' + target).attr('src', attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url).show();
                $('.remove_image_button[data-target="'+target+'"]').show();
            });
            frame.open();
        });
    
        $('.remove_image_button').on('click', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('#' + target).val('');
            $('#preview_' + target).hide();
            $(this).hide();
        });
    
        var mockup_frame;
        $('#add_mockup_images').on('click', function(e) {
            e.preventDefault();
            if ( mockup_frame ) {
                mockup_frame.open();
                return;
            }
            mockup_frame = wp.media({
                title: '<?php _e( 'Selecionar Imagens de Mockup', 'textdomain' ); ?>',
                button: { text: '<?php _e( 'Adicionar Imagens', 'textdomain' ); ?>' },
                multiple: true
            });
            mockup_frame.on('select', function() {
                var attachments = mockup_frame.state().get('selection').toArray();
                attachments.forEach(function(attachment) {
                    attachment = attachment.toJSON();
                    var thumb = ( attachment.sizes && attachment.sizes.thumbnail ) ? attachment.sizes.thumbnail.url : attachment.url;
                    $('#project_section_mockups_container').append(
                        '<div class="project_mockup_item" style="margin-bottom:10px;">' +
                            '<img src="' + thumb + '" style="max-width: 120px; margin-right: 10px; vertical-align: middle;">' +
                            '<input type="hidden" name="project_section_mockups[]" value="' + attachment.id + '">' +
                            '<button class="button remove_mockup_image"><?php _e( 'Remover', 'textdomain' ); ?></button>' +
                        '</div>'
                    );
                });
            });
            mockup_frame.open();
        });
    
        $(document).on('click', '.remove_mockup_image', function(e) {
            e.preventDefault();
            $(this).closest('.project_mockup_item').remove();
        });
    });
    </script>
    <?php
}


// FUNÇÃO PARA SALVAR OS CAMPOS PERSONALIZADOS
function save_projetos_meta( $post_id ) {
    if ( ! isset( $_POST['projetos_meta_nonce'] ) || ! wp_verify_nonce( $_POST['projetos_meta_nonce'], 'save_projetos_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( isset( $_POST['post_type'] ) && 'projetos' === $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }
    
    // Campos de informações (textos), incluindo o novo campo project_behance_link
    $info_fields = array(
        'project_name',
        'project_about',
        'project_about_date',
        'project_about_client',
        'project_about_industry',
        'project_about_website',
        'project_behance_link',
        'project_inpiration',
        'project_challenge',
        'project_approach',
        'project_institutional_video',
        'project_concluding_remarks',
        'project_thanks',
    );
    foreach ( $info_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            // Para campos que devem receber URL, usamos esc_url_raw()
            if ( $field === 'project_behance_link' ) {
                update_post_meta( $post_id, $field, esc_url_raw( $_POST[ $field ] ) );
            } else {
                update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
            }
        }
    }
    
    // Campos de imagem – salvar como ID
    $image_fields = array(
        'project_bg_header',
        'project_logo_icon_svg',
        'project_logo_icon_png',
        'project_logo_full',
        'project_section_challenge',
        'project_section_approach',
        'project_section_divider',
        'project_section_video_placeholder',
        'project_img_prev_post',
        'project_img_next_post'
    );
    foreach ( $image_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            $val = $_POST[ $field ];
            update_post_meta( $post_id, $field, $val ? absint( $val ) : '' );
        }
    }
    
    // Salva os mockups (array de IDs)
    if ( isset( $_POST['project_section_mockups'] ) && is_array( $_POST['project_section_mockups'] ) ) {
        $mockups = array_map( 'absint', $_POST['project_section_mockups'] );
        update_post_meta( $post_id, 'project_section_mockups', $mockups );
    } else {
        delete_post_meta( $post_id, 'project_section_mockups' );
    }
}
add_action( 'save_post', 'save_projetos_meta' );
?>
