<?php
// Adiciona link de clonar na lista de posts
function add_clone_link_global($actions, $post) {
    if (current_user_can('edit_posts')) {
        $actions['clone'] = '<a href="' . wp_nonce_url('admin.php?action=clone_post_global&post=' . $post->ID, 'clone_post_' . $post->ID) . '" title="Clonar este item" rel="permalink">Clonar</a>';
    }
    return $actions;
}
add_filter('post_row_actions', 'add_clone_link_global', 10, 2);
add_filter('page_row_actions', 'add_clone_link_global', 10, 2);

// Função para clonar o post
function clone_post_global() {
    if (!(isset($_GET['post']) || isset($_POST['post']) || (isset($_REQUEST['action']) && 'clone_post_global' == $_REQUEST['action']))) {
        wp_die('Nenhum post para clonar foi fornecido!');
    }

    // Verifica o nonce
    if (!isset($_GET['_wpnonce']) || !wp_verify_nonce($_GET['_wpnonce'], 'clone_post_' . $_GET['post'])) {
        wp_die('Você não tem permissão para clonar este post.');
    }

    // Obtém o ID do post
    $post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);

    // Obtém os dados do post
    $post = get_post($post_id);

    // Verifica se o post existe
    if (isset($post) && $post != null) {
        // Prepara os dados do novo post
        $args = array(
            'post_title' => $post->post_title . ' (Cópia)',
            'post_content' => $post->post_content,
            'post_status' => 'draft',
            'post_type' => $post->post_type,
            'post_author' => $post->post_author,
        );

        // Insere o novo post
        $new_post_id = wp_insert_post($args);

        // Clona os meta dados do post original
        $meta_data = get_post_meta($post_id);
        foreach ($meta_data as $key => $value) {
            update_post_meta($new_post_id, $key, maybe_unserialize($value[0]));
        }

        // Redireciona para a página de edição do novo post
        wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
        exit;
    } else {
        wp_die('Erro ao clonar o post: o post original não foi encontrado.');
    }
}
add_action('admin_action_clone_post_global', 'clone_post_global');
?>