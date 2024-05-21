<?php if(!empty($section_block)): 
	$upload_image = $section_block['upload_image'];
	$add_title_content = $section_block['add_title_content'];
	$add_description_content = $section_block['add_description_content'];
	$button_link = $section_block['button_link'];
	$button_title = $section_block['button_title'];
?>
<section class="main-wme">
    <div class="container">
        <div class="wme">
            <div class="left-block">              
                <?php if(isset($upload_image['url'])): ?>
                <img src="<?php echo $upload_image['url'];?>" alt='img'>
                <?php endif; ?>
            </div>
            <div class="right-block">               
                <?php if(!empty($add_title_content)): ?>
                <h2><?php echo $add_title_content; ?></h2>
                <?php endif; ?>               
                <?php if(!empty($add_description_content)): ?>
                <p class="p16"><?php echo $add_description_content; ?></p>
                <?php endif; ?>                
                <?php if(!empty($button_link) && !empty($button_title)): ?>
                <a href="<?php echo $button_link; ?>"><button><?php echo $button_title; ?></button></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>