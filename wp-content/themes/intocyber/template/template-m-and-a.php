<?php
// Template Name: M&A, Funding, and Joint Ventures
get_header(); ?>

<!--Challages of Vendors------IntoCyber Solutions------------>
<?php echo get_template_part('parts/content', 'cv-introcyber-slon'); ?>
<!-end--->

<?php echo get_template_part('parts/content', 'right-img-text'); ?>
<?php echo get_template_part('parts/content', 'left-accordion'); ?>
<?php echo get_template_part('parts/content', 'right-img-text'); ?>
<?php echo get_template_part('parts/content', 'ptn-xpns'); ?>

<?php
$orders = get_field('section_block');
if (is_array($orders)) {
    foreach ($orders as $order) :
        if (!empty($order)) :
            set_query_var('section_block', $order);
            echo get_template_part('parts/content', $order['acf_fc_layout']);
        endif;
    endforeach;
} else {    
    echo "No orders found.";
}
?>



<?php get_footer();?>