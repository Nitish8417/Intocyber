<?php
// Template Name: Home
get_header(); ?>

<section class="main-wme" style="background-color:#fff;">
    <div class="container">
        <div class="wme">
            <div class="left-block">
                <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/Rectangle-2066.png" alt="left-wme">
            </div>
            <div class="right-block">
                <h2 class="h2text">Why Middle East?</h2>
                <p class="p16-color">The Middle East region is one of the most thriving business in cyberspace globally.
                    A flourishing economy and high rates of digitization in the region attracts attention from malicious actors worldwide and hence the requirement for efficient cybersecurity companies to be helping the organisations in all verticals.
                    The Middle East cybersecurity market size is projected to grow from USD 23.4 billion in 2023 to USD 44.7 billion by 2027, at a Compound Annual Growth Rate (CAGR) of 17.1% during the forecast period.osses from cyberattacks in Middle Eastern countries are increasing annually.
                    According to IBM data for 2020, the average cost of a cyberattack on organizations in Saudi Arabia and the UAE was $6.53 million, 69% higher than the global average./p>
            </div>
        </div>
    </div>
</section>

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