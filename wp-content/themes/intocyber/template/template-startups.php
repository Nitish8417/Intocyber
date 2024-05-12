<?php 

// Template Name: Startups

get_header();?>

<?php echo get_template_part('parts/content', 'three-block'); ?>

<!--Challages of Vendors------IntoCyber Solutions------------>
<?php echo get_template_part('parts/content', 'cv-introcyber-slon'); ?>
<!-end--->


<!--IntoCyber Approach-->

<?php echo get_template_part('parts/content', 'ic-approach'); ?>
<!--end-->

<?php echo get_template_part('parts/content', 'products'); ?>

<!-- contact form block -->
<?php echo get_template_part('parts/content', 'contact'); ?>
<!--end contact block-->

<!---->
<?php echo get_template_part('parts/content', 'full-width-text'); ?>
<!---->


<?php get_footer();?>
