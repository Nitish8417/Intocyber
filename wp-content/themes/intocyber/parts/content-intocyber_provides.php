<?php if (!empty($section_block)) :
    $intocyber_provides_text = $section_block['intocyber_provides_text'];
    $intocyber_provides_dic = $section_block['intocyber_provides_dic'];
    $rows = $section_block['intocyber_products'];
?>
    <?php
    if ($rows) : ?>
        <section id="scroll-down">
            <div class="container">
                <div class="bottom-header-info">
                    <h2><?php echo $intocyber_provides_text; ?></h2>
                    <p class="p18-color"><?php echo $intocyber_provides_dic; ?></p>
                </div>
                <div class="product-block">
                    <?php foreach ($rows as $row) :
                        $product_img = $row['product_icon']['url']; // Correctly fetch the URL of the image
                        $product_title = $row['product_title'];

                    ?>
                        <div class="product-block-item">
                            <div class="prd-icon">
                                <img src="<?php echo $product_img; ?>" alt="<?php echo $product_title; ?>">
                            </div>
                            <div class="product-text">
                                <p class="p20"><?php echo $product_title; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>