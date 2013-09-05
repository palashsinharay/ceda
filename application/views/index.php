<?php 
//echo "<pre>";
//print_r($feturedProduct);
//echo "</pre>";
//die();
?>            

      
        <!-- Example row of columns -->
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8 vertical-ceda">
                    <div class="label-ceda">Featured Product</div>
<!--                    <img src="<?php //echo base_url('img/Featured-Product.png');?>" />-->
                    <br>
                    <br>
                    
                    <div class="row">
                        
                    <?php foreach ($feturedProduct as $value): ?>    
                        <div class="span8">
                               <div class="media">
                                <a class="pull-left" href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>">
                                    <div style=" height: 150px; width: 150px;"><img style="border: 1px solid #aeacac; padding: 2px;"  class="media-object" src="<?php echo base_url('assets/uploads/files/'.$value->image);?>" height="150" width="150"></div>
                                    
                                </a>
                                <div class="media-body">
                                <a href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>"><h5 class="media-heading"><?php echo $value->name;?></h5></a>
                                <p><?php  echo strip_tags(htmlspecialchars_decode(substr($value->desc,0,200)));?> </p>
                                <p><a href="<?php echo '#myModal'.$value->pid ;?>" role="button" class="btn pull-right" data-toggle="modal">Overview</a></p>
                                </div>
                                </div>
                            <!-- Modal -->
                            <div id="<?php echo 'myModal'.$value->pid ;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="<?php echo 'myModalLabel'.$value->pid ;?>" aria-hidden="true">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="<?php echo 'myModalLabel'.$value->pid ;?>"> <?php  echo $value->name;?></h3>
                            </div>
                            <div class="modal-body">
                            <?php  echo $value->desc;?>
                            </div>
                            <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                            <a class="btn btn-primary" href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>">Product details</a>
                            </div>
                            </div>
                            <hr>
                        </div>
                        
                     <?php endforeach;?>   
                    

                        
                    </div>
                   
                </div>
                
                <?php include 'right_panel.php';?>
               
            </div>
            

