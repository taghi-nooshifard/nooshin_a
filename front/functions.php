<?php
function custom_posts_per_page( $query ) {

    if ( $query->is_archive('post') ) {
        set_query_var('posts_per_page', -1);
    }
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );
function wpse87489_filter_pre_get_posts( $query ) {
    if ( ( is_category() || is_tag() ) && $query->is_main_query ) {
        $query->set( 'posts_per_page', '2' );
    }
}
add_action( 'pre_get_posts', 'wpse87489_filter_pre_get_posts' );
function wp_pagination() {
    global $wp_query;
    $big = 12345678;
    $page_format = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array'
    ) );
    if( is_array($page_format) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

        echo '<li class="page-item-box">'. $paged . ' از ' . $wp_query->max_num_pages .'</li>';
        foreach ( $page_format as $page ) {
            echo "<li class=\"page-item\">$page</li>";
        }

    }
}