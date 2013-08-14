<?php
//echo "<pre>";
//print_r($productList);
//echo "</pre>";
//
//echo "<pre>";
//print_r($categoryList);
//echo "</pre>";

//die();
?>
        
        <!-- Example row of columns -->
        <div class="container well well-ceda">
             <div class="media">
                <div class="span8 pull-left product-image-left-ceda">
<!--                    <lable class="label-ceda"><?php //echo $categoryList->cat_name;?></lable>-->
                    
                    <?php if ($categoryList->cat_id == 40): ?>
                    <img src="<?php echo base_url('img/Ham-Radio-Products.png');?>" />
                    <?php elseif ($categoryList->cat_id == 41):?>
                    <img src="<?php echo base_url('img/FPGA-Development-Boards.png');?>" />
                    <?php elseif ($categoryList->cat_id == 42):?>
                    <img src="<?php echo base_url('img/MIL-STD-Power-Adapters.png');?>" />
                    <?php elseif ($categoryList->cat_id == 43):?>
                    <img src="<?php echo base_url('img/PCB-&-SIGNAL-INTEGRITY.png');?>" />
                    <?php elseif ($categoryList->cat_id == 44):?>
                    <img src="<?php echo base_url('img/Used-Instruments.png');?>" />
                    <?php else :?>
                    <lable class="label-ceda"><?php echo $categoryList->cat_name;?></lable>
                    <?php endif; ?>
                    
                </div>
                 <br><br>
             </div>
            <div class="row">
                
                <div class="span8 vertical-ceda">
                    <div class="row">
                  
                        <?php foreach ($productList as $value): ?>  
                        <div class="span8">
                            <div class="span2">
                                <a href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>">
                                 <img class="media-object" src="<?php echo base_url('assets/uploads/files/'.$value->image);?>">
                               </a>
                            </div>
                            <div class="span3">
                                <h4 class="media-heading"> <a href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>"><?php echo $value->name; ?></a></h4>
                                <p><?php echo substr($value->desc,0, 200); ?></p>
                                <a href="<?php echo base_url('assets/uploads/files/'.$value->cataloge) ;?>" target="_blank" ><img src="<?php echo base_url('img/ProductDatasheet_e.gif')?>"/></a>
                                <a href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>" target="_blank" ><img src="<?php echo base_url('img/ProductDetails_e.gif')?>"/></a>
                            </div>
                            <div class="span2 pull-right">
                                <h4><?php echo $value->price; ?> USD</h4>
                                <span class="badge badge-inverse">Stock:  <?php echo $value->stock;?></span>
                               <br/>
                               <br/>
                                <p> Without VAT, Plus Shipping Costs </p>
                            </div>

                        </div>                        
                      <div class="clearfix"></div>
                        <hr>
                       <?php endforeach;?>   
                       
                    </div>
                </div>
                
                <?php include 'right_panel.php';?>
                      
     
            </div>
        <div class="pagination">
           <?php echo $pagination_link_pro;?>

        </div>
         
            

            
  