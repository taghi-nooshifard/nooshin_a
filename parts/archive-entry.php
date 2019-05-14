<?php $args = array(
    'type'            => 'monthly',
    'limit'           => '4',
    'format'          => 'html',
    'before'          => '<i class="fa fa-archive fa-1x mr-1"></i>',
    'after'           => '',
    'show_post_count' => false,
    'echo'            => 1,
    'order'           => 'DESC',
    'post_type'     => 'post'
);
wp_get_archives( $args ); ?>

