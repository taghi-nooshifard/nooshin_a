<?php
$args = array(
    'numberposts' => 4,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true
);
$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent  ){

    echo "<li><i class='fa fa-newspaper fa-1x mr-1'></i><a href='".get_permalink($recent["ID"])."'>";

    $post_title_excerpt = mb_substr($recent["post_title"], 0, 50);
    echo $post_title_excerpt;

    if (strlen($post_title_excerpt) > 55) {
        echo ' ...';
    }
    echo "  </a></li>";
}
?>