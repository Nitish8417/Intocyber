<?php if (!empty($section_block)) :
    $intocyber_approach_title = $section_block['intocyber_approach_title'];
    $intocyber_approach_description = $section_block['intocyber_approach_description'];
    $intocyber_approach_sales_sub_block_rows = $section_block['intocyber_approach_sales_sub_block'];
    $intocyber_approach_channel_sub_block_rows = $section_block['intocyber_approach_channel_sub_block'];
    $intocyber_approach_markiting_sub_block_rows = $section_block['intocyber_approach_markiting_sub_block'];

?>
    <section>
        <div class="container">
            <div class="bottom-header-info">
                <h2><?php echo $intocyber_approach_title; ?></h2>
                <p class="p18-color"><?php echo $intocyber_approach_description; ?></p>
            </div>

            <div class="approach-block">
                <div class="sales-block">
                    <div class="sales-block-img">
                        <img src="../wp-content/uploads/2024/05/sales.svg" alt="sales" />
                    </div>
                    <?php if ($intocyber_approach_sales_sub_block_rows) { ?>
                        <?php foreach ($intocyber_approach_sales_sub_block_rows as $row) {
                            $intocyber_approach_sales_sub_block_content = $row['intocyber_approach_sales_sub_block_content'];
                        ?>
                            <div class="sales-block-tabs">

                                <ul class="sales-block-img-text">
                                    <li class="sales-icon">
                                        <img src="../wp-content/uploads/2024/05/yes.svg" alt="cancle">
                                    </li>
                                    <div>
                                        <li class="sales-block-text">
                                            <p class="p18"><?php echo $intocyber_approach_sales_sub_block_content; ?></p>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>
                <div class="channel-block">
                    <div class="channel-block-img">
                        <img src="../wp-content/uploads/2024/05/channel.svg" alt="channel" />
                    </div>
                    <?php if ($intocyber_approach_channel_sub_block_rows) { ?>
                        <?php foreach ($intocyber_approach_channel_sub_block_rows as $row) {
                            $intocyber_approach_channel_sub_block_content = $row['intocyber_approach_channel_sub_block_content'];
                        ?>
                            <div class="sales-block-tabs">
                                <ul class="sales-block-img-text">
                                    <li class="sales-icon">
                                        <img src="../wp-content/uploads/2024/05/yes.svg" alt="cancle">
                                    </li>
                                    <div>
                                        <li class="sales-block-text">
                                            <p class="p18"><?php echo $intocyber_approach_channel_sub_block_content; ?></p>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="markiting-block">
                    <div class="markiting-block-img">
                        <img src="../wp-content/uploads/2024/05/markiting.svg" alt="markiting" />
                    </div>
                    <?php if ($intocyber_approach_markiting_sub_block_rows) { ?>
                        <?php foreach ($intocyber_approach_markiting_sub_block_rows as $row) {
                            $intocyber_approach_markiting_sub_block_content = $row['intocyber_approach_markiting_sub_block_content'];
                        ?>
                            <div class="sales-block-tabs">
                                <ul class="sales-block-img-text">
                                    <li class="sales-icon">
                                        <img src="../wp-content/uploads/2024/05/yes.svg" alt="cancle">
                                    </li>
                                    <div>
                                        <li class="sales-block-text">
                                            <p class="p18"><?php echo $intocyber_approach_markiting_sub_block_content; ?></p>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>

            </div>

        </div>

    </section>
<?php endif; ?>