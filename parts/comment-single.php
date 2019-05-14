<br>
<br>
<div id="nooshin_a_comment_section" class="alert alert-primary" role="alert">
    بخش نظرات کاربران...
</div>

<?php
$args = array(
    'number'  => '5',
    'post_id' => get_the_ID(), // use post_id, not post_ID
);
$comments = get_comments( $args );

foreach ( $comments as $comment ) :
    echo "<div class=\"row\">
            <div class=\"media\">";
    echo "<img src=\"...\" class=\"mr-3\" alt=\"...\">";
    echo "<div class=\"media-body\">";
    echo "<h5 class=\"mt-0\">$comment->comment_author</h5>";
    echo   $comment->comment_content;
    echo "</div> </div></div>";
    comment_reply_link( array_merge( $args, array(
        'add_below'=>'comment',
        'depth'     => 1,
        'max_depth' => 3,
        'before'    => '<div class="reply">',
        'after'     => '</div>'
    ) ) );
    echo "<hr>";
endforeach;

?>