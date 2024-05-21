<?php if (!empty($section_block)) :
    $three_block_data_title = $section_block['three_block_data_title'];
    $three_block_data_description = $section_block['three_block_data_description'];
    $rows = $section_block['three_block'];
?>

<section class="three-blocks">
    <div class="container">
        <?php if (!empty($three_block_data_title) || !empty($three_block_data_description)) : ?>
            <div class="blck-title">
                <?php if (!empty($three_block_data_title)) : ?>
                    <h2><?php echo $three_block_data_title; ?></h2>
                <?php endif; ?>
                <?php if (!empty($three_block_data_description)) : ?>
                    <p class="p18-color"><?php echo $three_block_data_description; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($rows) : ?>
            <div class="three-block-data">
                <?php foreach ($rows as $row) :
                    $block_image = $row['block_image']['url']; // Correctly fetch the URL of the image
                    $block_title = $row['block_title'];
                    $block_decoration = $row['block_decoration'];
                    $block_button_link = $row['block_button_link'];
                    $block_button = $row['block_button'];
                ?>
                    <div class="block-item">
                        <div>
                            <div class="block-icon">
                                <img src="<?php echo $block_image; ?>" alt="<?php echo $block_title; ?>">
                            </div>
                            <h4><?php echo $block_title; ?></h4>
                            <p class="p16"><?php echo $block_decoration; ?></p>
                            <a href="<?php echo $block_button_link; ?>"><button><?php echo $block_button; ?></button></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>
