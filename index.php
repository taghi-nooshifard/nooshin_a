<!--Header php File Called-->
<?php  get_header(); ?>
<!--Top Content-->
<?php get_template_part("parts/post","top"); ?>
<!--Top Content-->

<!--Advertise Section-->
<?php get_template_part("parts/advertise"); ?>
<!--Advertise End-->

<!--Post Card-->
<?php get_template_part("parts/posts"); ?>
<!--Post End-->

<!--Paging Section-->
<?php get_template_part("parts/pager"); ?>
<!--Paging End-->

<?php get_footer();?>