<?php
function custom_global_settings_page() {
    add_menu_page(
        'Informações gerais', // Título da página
        'Institucional',              // Nome do menu no painel
        'manage_options',             // Permissão necessária
        'global-settings',            // Slug da página
        'render_global_settings_page',// Função para renderizar o conteúdo
        'dashicons-admin-home',    // Ícone do menu
        10                            // Posição no menu
    );
}
add_action('admin_menu', 'custom_global_settings_page');

function render_global_settings_page() {
    ?>
    <div class="wrap">
        <h1>Configurações Globais</h1>
        <form method="post" action="options.php">
            <?php
            // Registra as configurações para salvar
            settings_fields('global_settings_group');
            do_settings_sections('global-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function custom_global_settings_fields() {
    // Registra as configurações
    register_setting('global_settings_group', 'global_scope');
    register_setting('global_settings_group', 'global_name');
    register_setting('global_settings_group', 'global_phone');
    register_setting('global_settings_group', 'global_address');
    register_setting('global_settings_group', 'global_number');
    register_setting('global_settings_group', 'global_city');
    register_setting('global_settings_group', 'global_state');
    register_setting('global_settings_group', 'global_country');
    register_setting('global_settings_group', 'global_zipcode');
    register_setting('global_settings_group', 'global_branches');
    register_setting('global_settings_group', 'global_facebook');
    register_setting('global_settings_group', 'global_instagram');
    register_setting('global_settings_group', 'global_youtube');
    register_setting('global_settings_group', 'global_flickr');
    register_setting('global_settings_group', 'global_x');
    register_setting('global_settings_group', 'global_institutional_video');

    // Adiciona a seção de Informações Gerais
    add_settings_section(
        'global_settings_section',
        'Informações Gerais',
        null,
        'global-settings'
    );

    // Adiciona os campos de Informações Gerais
    add_settings_field(
        'global_scope',
        'Abrangência',
        'render_global_scope_field',
        'global-settings',
        'global_settings_section'
    );
    
    add_settings_field(
        'global_name',
        'Nome da Instituição',
        'render_global_name_field',
        'global-settings',
        'global_settings_section'
    );
    
    add_settings_field(
        'global_phone',
        'Telefone de Contato',
        'render_global_phone_field',
        'global-settings',
        'global_settings_section'
    );

    add_settings_field(
        'global_address',
        'Endereço',
        'render_global_address_field',
        'global-settings',
        'global_settings_section'
    );

    add_settings_field(
        'global_number',
        'Número',
        'render_global_number_field',
        'global-settings',
        'global_settings_section'
    );

    add_settings_field(
        'global_city',
        'Cidade',
        'render_global_city_field',
        'global-settings',
        'global_settings_section'
    );

    add_settings_field(
        'global_state',
        'Estado',
        'render_global_state_field',
        'global-settings',
        'global_settings_section'
    );

    add_settings_field(
        'global_country',
        'País',
        'render_global_country_field',
        'global-settings',
        'global_settings_section'
    );

    add_settings_field(
        'global_zipcode',
        'CEP',
        'render_global_zipcode_field',
        'global-settings',
        'global_settings_section'
    );
    
    add_settings_field(
        'global_branches',
        'Filiais',
        'render_global_branches_field',
        'global-settings',
        'global_settings_section'
    );

    // Adiciona a seção de Redes Sociais
    add_settings_section(
        'social_settings_section',
        'Redes Sociais',
        null,
        'global-settings'
    );

    // Adiciona os campos de Redes Sociais
    add_settings_field(
        'global_facebook',
        'Facebook',
        'render_global_facebook_field',
        'global-settings',
        'social_settings_section'
    );

    add_settings_field(
        'global_instagram',
        'Instagram',
        'render_global_instagram_field',
        'global-settings',
        'social_settings_section'
    );

    add_settings_field(
        'global_youtube',
        'YouTube',
        'render_global_youtube_field',
        'global-settings',
        'social_settings_section'
    );

    add_settings_field(
        'global_flickr',
        'Flickr',
        'render_global_flickr_field',
        'global-settings',
        'social_settings_section'
    );

    add_settings_field(
        'global_x',
        'X (Twitter)',
        'render_global_x_field',
        'global-settings',
        'social_settings_section'
    );
    
    // Adiciona a seção de Redes Sociais
    add_settings_section(
        'global_institutional_video_section',
        'Video Institucional',
        null,
        'global-settings'
    );
    
    add_settings_field(
        'global_institutional_video',
        'Vídeo Institucional',
        'render_global_institutional_video_field',
        'global-settings',
        'global_institutional_video_section'
    );
}
add_action('admin_init', 'custom_global_settings_fields');

// Funções para renderizar os campos
function render_global_scope_field() {
    $value = get_option('global_scope', '');
    echo '<input type="text" name="global_scope" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_name_field() {
    $value = get_option('global_name', '');
    echo '<input type="text" name="global_name" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_phone_field() {
    $value = get_option('global_phone', '');
    echo '<input type="text" name="global_phone" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_address_field() {
    $value = get_option('global_address', '');
    echo '<input type="text" name="global_address" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_number_field() {
    $value = get_option('global_number', '');
    echo '<input type="text" name="global_number" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_city_field() {
    $value = get_option('global_city', '');
    echo '<input type="text" name="global_city" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_state_field() {
    $value = get_option('global_state', '');
    echo '<input type="text" name="global_state" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_country_field() {
    $value = get_option('global_country', '');
    echo '<input type="text" name="global_country" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_zipcode_field() {
    $value = get_option('global_zipcode', '');
    echo '<input type="text" name="global_zipcode" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_branches_field() {
    $value = get_option('global_branches', '');
    echo '<input type="text" name="global_branches" value="' . esc_attr($value) . '" class="regular-text">';
}

// Funções para renderizar os campos de Redes Sociais
function render_global_facebook_field() {
    $value = get_option('global_facebook', '');
    echo '<input type="text" name="global_facebook" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_instagram_field() {
    $value = get_option('global_instagram', '');
    echo '<input type="text" name="global_instagram" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_youtube_field() {
    $value = get_option('global_youtube', '');
    echo '<input type="text" name="global_youtube" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_flickr_field() {
    $value = get_option('global_flickr', '');
    echo '<input type="text" name="global_flickr" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_x_field() {
    $value = get_option('global_x', '');
    echo '<input type="text" name="global_x" value="' . esc_attr($value) . '" class="regular-text">';
}

function render_global_institutional_video_field() {
    // Recupera o valor salvo, garantindo que seja um array
    $values = get_option('global_institutional_video', array());
    if ( ! is_array($values) ) {
        $values = array();
    }
    ?>
    <div id="global_institutional_video_container">
        <?php if ( ! empty($values) ) : ?>
            <?php foreach ( $values as $index => $video_url ) : 
                // Tenta extrair o ID do vídeo da URL
                $video_id = '';
                $thumb_html = '';
                if ( ! empty($video_url) && preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video_url, $matches) ) {
                    $video_id = $matches[1];
                    $thumb_url = 'https://img.youtube.com/vi/' . $video_id . '/hqdefault.jpg';
                    $thumb_html = '<img src="' . esc_url($thumb_url) . '" alt="Thumbnail" class="video_thumbnail" style="max-width:120px; margin-left:10px; vertical-align:middle;">';
                }
                ?>
                <div class="global_institutional_video_item" style="margin-bottom: 10px;">
                    <input type="text" name="global_institutional_video[]" value="<?php echo esc_attr($video_url); ?>" class="regular-text video_link_input">
                    <?php echo $thumb_html; ?>
                    <button class="button remove_video_field">Remover</button>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="global_institutional_video_item" style="margin-bottom: 10px;">
                <input type="text" name="global_institutional_video[]" value="" class="regular-text video_link_input">
                <button class="button remove_video_field">Remover</button>
            </div>
        <?php endif; ?>
    </div>
    <button id="add_video_field" class="button">Adicionar Link</button>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        // Função para atualizar a thumbnail ao lado do input
        function updateThumbnail($input) {
            var videoUrl = $input.val();
            var videoId = '';
            var regex = /[\\?\\&]v=([^\\?\\&]+)/;
            var matches = videoUrl.match(regex);
            if(matches && matches[1]) {
                videoId = matches[1];
            }
            var thumbUrl = '';
            if(videoId) {
                thumbUrl = 'https://img.youtube.com/vi/' + videoId + '/hqdefault.jpg';
            }
            // Verifica se já existe um elemento de thumbnail ao lado
            var $thumb = $input.siblings('.video_thumbnail');
            if ($thumb.length) {
                if (thumbUrl) {
                    $thumb.attr('src', thumbUrl);
                } else {
                    $thumb.remove();
                }
            } else {
                if(thumbUrl) {
                    $input.after('<img src="'+thumbUrl+'" alt="Thumbnail" class="video_thumbnail" style="max-width:120px; margin-left:10px; vertical-align:middle;">');
                }
            }
        }

        // Ao clicar em "Adicionar Link", adiciona um novo campo de vídeo
        $('#add_video_field').click(function(e) {
            e.preventDefault();
            var field_html = '<div class="global_institutional_video_item" style="margin-bottom: 10px;">' +
                             '<input type="text" name="global_institutional_video[]" value="" class="regular-text video_link_input">' +
                             '<button class="button remove_video_field">Remover</button>' +
                             '</div>';
            $('#global_institutional_video_container').append(field_html);
        });

        // Remove um campo ao clicar em "Remover"
        $(document).on('click', '.remove_video_field', function(e) {
            e.preventDefault();
            $(this).closest('.global_institutional_video_item').remove();
        });

        // Atualiza a thumbnail quando o usuário sair do campo (blur)
        $(document).on('blur', '.video_link_input', function() {
            updateThumbnail($(this));
        });
    });
    </script>
    <?php
}

?>