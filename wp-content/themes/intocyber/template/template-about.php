<?php

// Template Name: About Us

get_header(); ?>

<?php echo get_template_part('block/content', 'left_img_right_text'); ?>

<?php echo get_template_part('block/content', 'we_offer_sales'); ?>
<?php echo get_template_part('block/content', 'three_block_content_white-bg'); ?>
<?php echo get_template_part('block/content', 'accordion-list'); ?>
<?php echo get_template_part('block/content', 'vender-need'); ?>
<?php echo get_template_part('block/content', 'contact'); ?>
<?php echo get_template_part('block/content', 'full-width-text'); ?>


 <?php
// $orders = get_field('section_block');
// if (is_array($orders)) {
//     foreach ($orders as $order) :
//         if (!empty($order)) :
//             set_query_var('section_block', $order);
//             echo get_template_part('parts/content', $order['acf_fc_layout']);
//         endif;
//     endforeach;
// } else {    
//     echo "No orders found.";
// }
 ?>


<?php get_footer(); ?>