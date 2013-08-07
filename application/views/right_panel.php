<?php 
//echo "<pre>";
//print_r($rightPanelData);
//echo "</pre>";

?> 
<div class="span3 pull-right">
                    <h4><?php echo $rightPanelData->title; ?></h4>
                    
                    <?php if(!empty($rightPanelData->upper_image)): ?>
                    <img style="margin-bottom:5px;" src="<?php echo base_url('assets/uploads/files/'.$rightPanelData->upper_image);?>" alt="">
                    <?php endif; 
                    if(!empty($rightPanelData->address)): ?>
                    <address>
                           <?php echo $rightPanelData->address; ?>
                    </address>
                    <?php endif; 
                    if(!empty($rightPanelData->card_image1)): ?>
                    <img style="margin-bottom:5px;" src="<?php echo base_url('assets/uploads/files/'.$rightPanelData->card_image1);?>" alt="">
                     <?php endif; ?><br>
                    <?php if(!empty($rightPanelData->card_image2)): ?>
                    <img src="<?php echo base_url('assets/uploads/files/'.$rightPanelData->card_image2);?>" alt="">
                     <?php endif; 
                     if(!empty($rightPanelData->credit_card_info_block)): ?>
                    <p> <?php echo $rightPanelData->credit_card_info_block; ?></p>
                    <?php endif; 
                    if(!empty($rightPanelData->lower_image)): ?>
                    <img style="margin-bottom:5px;" src="<?php echo base_url('assets/uploads/files/'.$rightPanelData->lower_image);?>" alt="">
                    <?php endif; 
                    if(!empty($rightPanelData->lower_image2)): ?>
                    <img style="margin-bottom:5px;" src="<?php echo base_url('assets/uploads/files/'.$rightPanelData->lower_image2);?>" alt="">
                    <?php endif; ?>
 </div>
