<?php if (!empty($section_block)) :
    $left_title_content = $section_block['left_title_content'];
    $left_description_content = $section_block['left_description_content'];
    $right_title_content = $section_block['right_title_content'];
    $right_description_content = $section_block['right_description_content'];

?>
<section>
    <div class="container">
        <div class="text-main-info-block">
            <div class="main-left-txt-block">
                <h4><?php echo $left_title_content; ?></h4>
                <p class="p20"><?php echo $left_description_content; ?></p>
            </div>
            <div class="main-right-txt-block">
                <h4><?php echo $right_title_content; ?></h4>
                <p class="p20"><?php echo $right_description_content; ?></p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>