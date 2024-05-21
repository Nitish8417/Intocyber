<?php if (!empty($section_block)) :
    $challages_of_vendors_title = $section_block['challages_of_vendors_title'];
    $intocyber_solutions_title = $section_block['intocyber_solutions_title'];
    $challages_of_vendors_main_sub_block_rows = $section_block['challages_of_vendors_main_sub_block'];
    $intocyber_solutions_main_sub_block_rows = $section_block['intocyber_solutions_main_sub_block'];
?>

    <section>
        <div class="container">
            <div class="challages-blocks">
                <div class="callages-of-vendors">
                    <h2><?php echo $challages_of_vendors_title; ?></h2>
                    <?php if ($challages_of_vendors_main_sub_block_rows) : ?>
                        <?php foreach ($challages_of_vendors_main_sub_block_rows as $row) :
                            $top_main_title_content = $row['top_main_title_content'];
                            $chrows = $row['challages_of_vendors_sub_block'];
                        ?>
                            <div class="sub-clg-data">
                                <div class="main-clg-vdr-text">
                                    <ul class="clg-vdr-img-text">
                                        <li class="clg-vdr-img"><img src="<?php bloginfo('template_url'); ?>/assets/images/cancle.svg" alt="cancle"></li>
                                        <li class="clg-vdr-text">
                                            <h3><?php echo $top_main_title_content; ?></h3>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <?php
                                if ($chrows) { ?>
                                    <div class="sub-clg-vdr-text">
                                        <?php foreach ($chrows as $rows) {
                                            $challages_of_vendors_sub_block_img = $rows['challages_of_vendors_sub_block_img']['url'];
                                            $challages_of_vendors_sub_block_title = $rows['challages_of_vendors_sub_block_title'];
                                            $challages_of_vendors_sub_block_description = $rows['challages_of_vendors_sub_block_description'];
                                        ?>
                                            <ul class="clg-vdr-img-text">
                                                <li class="clg-vdr-img">
                                                    <img src="<?php echo $challages_of_vendors_sub_block_img; ?>" alt="<?php echo $challages_of_vendors_sub_block_title; ?>">
                                                </li>
                                                <div>
                                                    <li class="clg-vdr-text">
                                                        <h3><?php echo $challages_of_vendors_sub_block_title; ?></h3>
                                                    </li>
                                                    <li class="clg-vdr-ptext p14">
                                                        <p><?php echo $challages_of_vendors_sub_block_description; ?></p>
                                                    </li>
                                                </div>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>


                <div class="btwn-line">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/btwn-line.svg" alt="line">
                </div>


                <div class="intoCyber-solutions">
                    <h2><?php echo $intocyber_solutions_title; ?></h2>
                    <?php if ($intocyber_solutions_main_sub_block_rows) : ?>
                        <?php foreach ($intocyber_solutions_main_sub_block_rows as $row) :
                            $top_intocyber_solutions_main_title_content = $row['top_intocyber_solutions_main_title_content'];
                            $ichrows = $row['intocyber_solutions_sub_block'];
                        ?>
                            <div class="itro-solu-block">
                                <div class="main-ic-sln-text">
                                    <ul class="ic-sln-img-text">
                                        <li class="ic-sln-img"><img src="<?php bloginfo('template_url'); ?>/assets/images/ok.svg" alt="ok"></li>
                                        <li class="ic-sln-text">
                                            <h3><?php echo $top_intocyber_solutions_main_title_content ?></h3>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <?php
                                if ($ichrows) { ?>
                                    <div class="sub-ic-sln-text">
                                        <?php foreach ($ichrows as $rows) {
                                            $intocyber_solutions_sub_block_img = $rows['intocyber_solutions_sub_block_img']['url'];
                                            $intocyber_solutions_sub_block_title = $rows['intocyber_solutions_sub_block_title'];
                                            $intocyber_solutions_sub_block_description = $rows['intocyber_solutions_sub_block_description'];
                                        ?>
                                            <ul class="ic-sln-img-text">
                                                <li class="ic-sln-img">
                                                    <img src="<?php echo $intocyber_solutions_sub_block_img; ?>" alt="<?php echo $intocyber_solutions_sub_block_title; ?>">
                                                </li>
                                                <div>
                                                    <li class="ic-sln-text">
                                                        <h3><?php echo $intocyber_solutions_sub_block_title; ?></h3>
                                                    </li>
                                                    <li class="ic-sln-ptextp p14">
                                                        <p><?php echo $intocyber_solutions_sub_block_description; ?></p>
                                                    </li>
                                                </div>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>

        </div>

    </section>
<?php endif; ?>