<?php
// Template Name: Growth & Expansion
get_header(); ?>

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


<?php get_footer(); ?>