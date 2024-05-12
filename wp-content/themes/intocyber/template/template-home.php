<?php
// Template Name: Home
get_header(); ?>

<div style="position: relative;">
    <?php echo get_template_part('parts/content', 'products'); ?>
    <img src="<?php bloginfo('template_url'); ?>/assets/images/light.svg" alt="" class="bg-light-text">
    <?php echo get_template_part('parts/content', 'three-block'); ?>
</div>

<div style="position: relative;">
<section class="main-wme">
    <div class="container">
        <div class="wme">
            <div class="left-block">
                <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/left1.png" alt="left-wme">
            </div>
            <div class="right-block">
                <h2>Why Middle East?</h2>
                <p class="p16">The Middle East region is one of the most thriving business in cyberspace globally.
                    A flourishing economy and high rates of digitization in the region attracts attention from malicious actors worldwide and hence the requirement for efficient cybersecurity companies to be helping the organisations in all verticals.
                    The Middle East cybersecurity market size is projected to grow from USD 23.4 billion in 2023 to USD 44.7 billion by 2027, at a Compound Annual Growth Rate (CAGR) of 17.1% during the forecast period.
                    Losses from cyberattacks in Middle Eastern countries are increasing annually.
                    According to IBM data for 2020, the average cost of a cyberattack on organizations in Saudi Arabia and the UAE was $6.53 million, 69% higher than the global average.</p>
                <button class="btn-readm">Read more</button>
            </div>
        </div>
    </div>
</section>
<img src="<?php bloginfo('template_url'); ?>/assets/images/light.svg" alt="" class="bg-light-text">
<section>
    <div class="container">
        <div class="blck-title">
            <h2>Attractive Opportunities in the Middle East Cybersecurity Market</h2>
        </div>
        <div>
            <div class="opt-left-block">
                <div class="count-number">
                    <h1>23.4</h1>
                    <p class="p20">USD Billion 2023</p>
                </div>
                <div class="count-number">
                    <h1>44.7.3</h1>
                    <p class="p20">USD Billion 2027</p>
                </div>
                <div class="count-number">
                    <h1>CAGR</h1>
                    <h2>17.1%</h2>
                    <p class="p16">The Middle East Cybersecurity market size is Projected to grow from USD 23.4 million in 2023 to USD 44.7 billion by 2027. recording a CAGR of 17.1% from 2022 to 2027</p>
                </div>
                <div class="count-number">
                    <ul>
                        <li><img src="<?php bloginfo('template_url'); ?>/assets/images/internet.svg" alt="icon"></li>
                        <li>
                            <p class="p16">The growth of this market can be attributed to the rapid growth of cybersecurity incidents worldwide during the COVID - 19 pandemic</p>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="<?php bloginfo('template_url'); ?>/assets/images/market.svg" alt="icon"></li>
                        <li class="p16">
                            <p>The growth of this market can be attributed to the rapid growth of cybersecurity incidents worldwide during the COVID - 19 pandemic</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

</div>

<section>
    <div class="container">
        <div class="main-left-right">
            <div class="left-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/imgleft.png" alt="img">
            </div>
            <div class="right-txt-data">
                <h2><span class="banner-bold-txt">Intocyber</span> for Growth and Expansion Stage Companies</h2>
                <p class="p16">Sales Leaders of cybersecurity companies in Growth, Expansion or a late Pre-IPO stage, face unique challenges of scaling their sales operations effectively while maintaining a focus on innovation and customer satisfaction. Outsourcing emerges as a strategic solution to these challenges, offering a pathway to better results and enhanced efficiency</p>
                <div>
                    <button>Book Meeting</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="text-main-info-block">
            <div class="main-left-txt-block">
                <h4>Partnering with IntoCyber</h4>
                <p class="p20">We bridge the gap between your cybersecurity innovations and market success. At this pivotal growth stage, effective sales strategies are not just beneficial they are essential. Our sales outsourcing solutions are tailor-made to navigate the unique challenges and opportunities of the cybersecurity landscape.</p>
            </div>
            <div class="main-right-txt-block">
                <h4>Partnering with IntoCyber</h4>
                <p class="p20">We bridge the gap between your cybersecurity innovations and market success. At this pivotal growth stage, effective sales strategies are not just beneficial they are essential. Our sales outsourcing solutions are tailor-made to navigate the unique challenges and opportunities of the cybersecurity landscape.</p>
            </div>
        </div>
    </div>
</section>


<!-- contact form block -->
<!-- contact form block -->

<?php echo get_template_part('parts/content', 'contact'); ?>
<!--end contact block-->

<!---->
<?php echo get_template_part('parts/content', 'full-width-text'); ?>
<!---->






<?php get_footer(); ?>