<?php

$comments = get_comments('status=approve&number=4');
if ($comments) {
    foreach ($comments as $comment) {

        //Print Comment icon & Author Avatar
        echo '<li><i class="fa fa-comment fa-1x mr-1"></i>
        <a href="' . get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '" title="' . $comment->comment_author . ' | ' . get_the_title($comment->comment_post_ID) .'">'. get_avatar($comment->comment_author_email, 25)."::" ;

        $comment_string = $comment->comment_content;

        //Print 20 Max Character of Comments.Use mb_substr for utf-8
        $comment_excerpt = mb_substr($comment_string, 0, 20);
        echo $comment_excerpt;

        if (strlen($comment_excerpt) > 25) {
            echo ' ...';
        }

        echo '</a></li>';
    }
}
    ?>


<!--<li><i class="fa fa-comment fa-1x mr-1"></i><a href="http://7learn.com">حذف تصویرزمینه...</a></li>-->
<!--<li><i class="fa fa-comment fa-1x mr-1"></i><a href="http://7learn.com">بازتاب آیینه...</a></li>-->
<!--<li><i class="fa fa-comment fa-1x mr-1"></i><a href="http://7learn.com">طراحی لوگو...</a></li>-->
<!--<li><i class="fa fa-comment fa-1x mr-1"></i><a href="http://7learn.com">مجازی سازی...</a></li>-->
<!--                -->
