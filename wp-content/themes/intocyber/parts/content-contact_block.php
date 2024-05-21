<?php if(!empty($section_block)): 
	$contact_block_image = $section_block['contact_block_image'];
	$contact_title = $section_block['contact_title'];
	$contact_description = $section_block['contact_description'];
	$contact_sub_description = $section_block['contact_sub_description'];
?>
<section>
    <div class="container">
        <div id="main-contact">
            <div class="cont-txt-info-left">
                <div class="git">
                    <h2><?php echo $contact_title; ?></h2>
                    <p class="p18-color"><?php echo $contact_description; ?></p>
                    <p class="p18"><?php echo $contact_sub_description; ?></p>
                </div>
                <div>
                    <?php echo do_shortcode('[contact-form-7 id="1186923" title="Contact form"]'); ?>
                </div>
            </div>
            <div class="cont-txt-info-right">
            <img src="<?php echo $contact_block_image['url'];?>" alt='img'>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>