<?php 

// Template Name: About Us

get_header();?>


<?php echo get_template_part('parts/content', 'left-img-text'); ?>

<?php echo get_template_part('parts/content', 'right-img-text'); ?>


<?php echo get_template_part('parts/content', 'products'); ?>


<!-- contact form block -->
<?php echo get_template_part('parts/content', 'contact'); ?>
<!--end contact block-->

<!--full width text-->
<?php echo get_template_part('parts/content', 'full-width-text'); ?>
<!---->



<?php get_footer();?>