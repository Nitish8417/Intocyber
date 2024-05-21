<?php if (!empty($section_block)) :
    $title_content = $section_block['title_content'];
    $first_block_number = $section_block['first_block_number'];
    $first_block_title = $section_block['first_block_title'];
    $second_block_number = $section_block['second_block_number'];
    $second_block_title = $section_block['second_block_title'];
    $third_block_title_ = $section_block['third_block_title_'];
    $third_block_title_number = $section_block['third_block_title_number'];
    $third_block_description = $section_block['third_block_description'];
    $first_description = $section_block['first_description'];
    $second_description = $section_block['second_description'];

?>
    <section>
        <div class="container">
            <div class="blck-title">
                <h2><?php echo $title_content; ?></h2>
            </div>
            <div>
                <div class="opt-left-block">
                    <div class="count-number">
                        <h1><?php echo $first_block_number; ?></h1>
                        <p class="p20"><?php echo $first_block_title; ?></p>
                    </div>
                    <div class="count-number">
                        <h1><?php echo $second_block_number; ?></h1>
                        <p class="p20"><?php echo $second_block_title; ?></p>
                    </div>
                    <div class="count-number">
                        <h1><?php echo $third_block_title_; ?></h1>
                        <h2><?php echo $third_block_title_number; ?></h2>
                        <p class="p16"><?php echo $third_block_description; ?></p>
                    </div>
                    <div class="count-number">
                        <ul>
                            <li><img src="<?php bloginfo('template_url'); ?>/assets/images/internet.svg" alt="icon"></li>
                            <li>
                                <p class="p16"><?php echo $first_description; ?></p>
                            </li>
                        </ul>
                        <ul>
                            <li><img src="<?php bloginfo('template_url'); ?>/assets/images/market.svg" alt="icon"></li>
                            <li class="p16">
                                <p><?php echo $second_description; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>
<?php endif; ?>