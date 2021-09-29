<?php
/**
 * Register meta boxes.
 */
function hobi_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'Chef Details', 'hcf' ), 'hobi_display_callback', 'chef', 'normal', 'high');
    add_meta_box( 'hcf-2', __( 'Menu Details', 'hcf' ), 'hobi_menudisplay_callback', 'menu', 'normal', 'high');
}
add_action( 'add_meta_boxes', 'hobi_register_meta_boxes' );

/**
 * =================================
 *          CHEF CUSTOM FIELDS
 * =================================
 * 
 */
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function hobi_display_callback( $post ) {
    require plugin_dir_path(__FILE__) . '/inc/custom-fields/form.php';

}
function hobi_menudisplay_callback( $post ) {
    require plugin_dir_path(__FILE__) . '/inc/custom-fields/menuform.php';

}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function hobi_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'hobi_position',
        'hobi_instagram_link',
        'hobi_email',
        'menu_price',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'hobi_save_meta_box' );

?>