<!--Header php File Called-->
<?php  get_header(); ?>
<?php if(have_posts()): ?>
<?php while (have_posts()): the_post();?>
<div class="jumbotron jumbotron-fluid bg-white">
    <div class="container ">
        <h2 class="display-md-4"><?php echo the_title(); ?></h2>

        <hr class="my-2">

        <p class="lead">

            <button type="button" class="btn btn-primary mb-2">
                نظرات <span class="badge badge-light"><?php echo get_comments_number(get_the_ID());?></span>
            </button>
            <button type="button" class="btn btn-primary mb-2">
            تاریخ انتشار:  <span class="entry-date"><?php echo get_the_date(); ?></span>
            </button>

            <button type="button" class="btn btn-primary mb-2">
                نویسنده:  <span class="entry-date"><?php echo get_the_author(); ?></span>
            </button>
        </p>

    </div>
</div>
    <div class="container">
        <div class="row mt-1">
            <?php echo the_content(); ?>
        </div>
            <?php  get_template_part("parts/comment","single"); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<div class="container">


<?php comment_form(); ?>
</div>
<?php get_footer();?>