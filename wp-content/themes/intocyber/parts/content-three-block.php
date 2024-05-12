<section class="three-blocks">
    <div class="container">
        <?php
        $three_block_data_title = get_field("three_block_data_title");
        $three_block_data_description = get_field("three_block_data_description");
        if (!empty($three_block_data_title) || !empty($three_block_data_description)) {
        ?>
            <div class="blck-title">
                <?php if (!empty($three_block_data_title)) { ?>
                    <h2><?php echo $three_block_data_title; ?></h2>
                <?php } ?>
                <?php if (!empty($three_block_data_description)) { ?>
                    <p class="p18-color"><?php echo $three_block_data_description; ?></p>
                <?php } ?>
            </div>
        <?php
        }
        ?>      
            <div class="three-block-data">                
                    <div class="block-item">
                        <div>
                            <div class="block-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/map.svg" alt="icon">                               
                            </div>
                            <h4>Local Sales Office</h4>
                            <p class="p16">Speed to Market is crucial to launch and expand you business. By having a local office your proximity to the customer is established immediately.</p>
                            <button>Read More</button>
                        </div>                       
                    </div>                
                    <div class="block-item">
                        <div>
                            <div class="block-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/MPX.svg" alt="icon">                               
                            </div>
                            <h4>Market Penetration and Expansion</h4>
                            <p class="p16">Penetrating new markets can be a Daunting TASKS for a tech company. We deliver this with our long standing experience in driving growth for Startups and Seasoned tech companies in Middle East, Sub Saharan Africa and Turkey.</p>
                            <button>Read More</button>
                        </div>                       
                    </div>                
                    <div class="block-item">
                        <div>
                            <div class="block-icon">
                            <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/so.svg" alt="icon">                               
                            </div>
                            <h4>Sales Outsourcing</h4>
                            <p class="p16">Outsourcing direct sales offers a strategic edge, tapping into specialized expertise, global market reach, and scalable solutions for streamlined growth and increased market penetration.</p>
                            <button>Read More</button>
                        </div>                       
                    </div>                
            </div>

             

    </div>
</section>