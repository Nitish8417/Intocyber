<?php if (!empty($section_block)) :
    $accordion_title = $section_block['accordion_title'];  
    $accordion_description = $section_block['accordion_description'];  
    $accordion_repeater_block_rows = $section_block['accordion_repeater_block'];  
?>
<section>
    <div class="container">
        <div class="bottom-header-info">
            <h2><?php echo  $accordion_title; ?></h2>
            <p class="p18-color"><?php echo  $accordion_description; ?></p>
        </div>

        <div class="accordion-block mainaccord">
            <div class="accordion-block-item">
                <div class="accordion-text-item-list">
                    <div class="accordion-title">
                        <div class="count">
                            01
                        </div>
                        <h5>Complex and Evolving Product Offerings</h5>
                    </div>
                    <div class="accordion-decp">
                        <p>We bring the route to quality end customer and channel management to stay ahead of the curve against our competition.</p>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section>
<?php endif; ?>