<div id="posts" class="container">
    <?php
//    rewind_posts();
    ?>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    query_posts( array('posts_per_page'=>'9', 'paged' => $paged));
    $my_posts = array();
    while ( have_posts() ) :
        the_post();
        $my_posts[] =  get_post(get_the_ID());
    endwhile; ?>
    <?php $row=140; $post_chunks = array_chunk($my_posts,3);
    for($chunks=0;$chunks<count($post_chunks);$chunks++): ?>
    <div class="row wow fadeInRight"  data-wow-offset="<?php echo $row; ?>" data-wow-delay="200ms">

        <!-- details card section starts from here -->
        <section class="details-card">
            <div class="container">
                <div class="row">
                    <?php for($index=0;$index<count($post_chunks[$chunks]);$index++): ?>
                    <div class="col-md-4 mt-3">
                        <div class="card-content">
                            <div class="card-img">
                                <?php echo get_the_post_thumbnail($post_chunks[$chunks][$index]->ID); ?>
                                <span><h4><?php echo $post_chunks[$chunks][$index]->post_title; ?></h4></span>
                            </div>
                            <div class="card-desc">
                                <h3><?php echo $post_chunks[$chunks][$index]->post_title; ?></h3>
                                <p>
                                    <?php echo $post_chunks[$chunks][$index]->post_excerpt;?>

                                </p>
                                <a href="<?php echo get_permalink($post_chunks[$chunks][$index]->ID);  ?>" class="btn-card">بخوانید..</a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- details card section starts from here -->
    </div>
   <?php $row+=20;
    endfor; ?>
</div>