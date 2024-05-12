<?php 
// Template Name: Growth & Expansion
get_header();?>

<?php echo get_template_part('parts/content', 'left-img-text'); ?>

<?php echo get_template_part('parts/content', 'right-img-text'); ?>

<!--IntoCyber Approach-->
<?php echo get_template_part('parts/content', 'ic-approach'); ?>
<!--end-->

<?php echo get_template_part('parts/content', 'products'); ?>


<?php echo get_template_part('parts/content', 'accordion-block'); ?>



<!-- contact form block -->
<?php echo get_template_part('parts/content', 'contact'); ?>
<!--end contact block-->

<!---->
<?php echo get_template_part('parts/content', 'full-width-text'); ?>
<!---->


<?php get_footer();?>