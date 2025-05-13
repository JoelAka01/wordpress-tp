<?php
/*
Plugin Name: ESGI Post Duplicator
Version: 1.0
Description: Plugin permettant de dupliquer les posts et pages WordPress
Author: Votre Nom
*/

// Ajouter le lien "Dupliquer" dans la liste des posts
function esgi_displayDuplicateLink($actions, $post) {
    // Vérifier que l'utilisateur a les droits d'édition
    if (current_user_can('edit_posts')) {
        // Créer l'URL avec un nonce pour la sécurité
        $url = wp_nonce_url(
            add_query_arg(
                [
                    'action' => 'esgi_duplicate_post',
                    'post' => $post->ID,
                ],
                'admin.php'
            ),
            basename(__FILE__),
            'duplicate_nonce'
        );
        
        // Ajouter le lien "Dupliquer" au tableau des actions
        $actions['duplicate'] = '<a href="' . $url . '">Dupliquer</a>';
    }
    
    return $actions;
}

// Hook pour les posts
add_filter('post_row_actions', 'esgi_displayDuplicateLink', 10, 2);
// Hook pour les pages
add_filter('page_row_actions', 'esgi_displayDuplicateLink', 10, 2);

// Fonction pour dupliquer un post
function esgi_duplicate_post() {
    // Cree un post a partir du dupicatre  en recuperant le post original 
    $original_post= get_post($_GET['post']);
    //recupérer les clés de l'original

    
    $args = array(
        'post_title' => $original_post->post_title,
        'post_content' => $original_post->post_content,
        'post_status' => 'draft', // Mettre le statut à "brouillon"
        'post_type' => $original_post->post_type,
        'post_date' => current_time('mysql'),
        'post_author' => get_current_user_id(),
    );
    // Créer le post dupliqué
    $new_post_id = wp_insert_post($args);
    // Vérifier si le post a été créé avec succès
    exit;
}

// Hook pour l'action de duplication
add_action('admin_action_esgi_duplicate_post', 'esgi_duplicate_post');

// Afficher la notice de duplication réussie
function esgi_duplicate_admin_notice() {
    // Vérifier si les paramètres sont présents dans l'URL
    if (isset($_GET['saved']) && isset($_GET['esgi_duplicate']) && $_GET['saved'] == $_GET['esgi_duplicate']) {
        $post_id = absint($_GET['saved']);
        $post = get_post($post_id);
        
        if ($post) {
            echo '<div class="notice notice-success is-dismissible">';
            echo '<p>Post <strong>' . esc_html($post->post_title) . '</strong> dupliqué avec succès.</p>';
            echo '</div>';
        }
    }
}

// Hook pour afficher la notice
add_action('admin_notices', 'esgi_duplicate_admin_notice');

// Fin du fichier
?>