<?php
//echo "<pre>";
//print_r($productList);
//echo "</pre>";
//
//echo "<pre>";
//print_r($newsList);
//echo "</pre>";
//
//die();
?>
        
        <!-- Example row of columns -->
        <div class="container well well-ceda">
             <div class="media">
                <div class="span2 pull-left product-image-left-ceda">
                    <lable class="label-ceda"><?php echo $categoryList->cat_name;?></lable>
                </div>
                 <br><br>
             </div>
            <div class="row">
                
                <div class="span8 vertical-ceda">
                    <div class="row">
                  
                        <?php foreach ($productList as $value): ?>  
                        <div class="span8">
                        
                       
                           <div class="media">
                           <div class="span2 pull-left product-image-left-ceda">
                        
                            <a href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>">
                                 <h4 class="media-heading"><?php echo $value->name; ?></h4>
                                 <img class="media-object" src="<?php echo base_url('assets/uploads/files/'.$value->image);?>">
                            </a><br />
                            </div>
                            <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <strong>Product name</strong>
                                          <br/>
                                          <br/>
                                          <ul class="media-list">
                                          <li><?php echo $value->name; ?></li>
                                          </ul>
                                          </div>
                                          
                                          <div class="pull-left" style="margin-left:40px">
                                          <strong>Price</strong>
                                          <br/>
                                          <br/>
                                          <ul class="media-list">
                                          <li><?php echo $value->price; ?>/-</li>
                                          </ul>
                                          </div>
                                          
                                          <div class="pull-left" style="margin-left:50px">
                                          <strong>Download Catalog</strong>
                                          <br/>
                                          <br/>
                                          <ul class="media-list">
                                          <li><a href="<?php echo base_url('assets/uploads/files/'.$value->cataloge) ;?>" target="_blank" ><img src="<?php echo base_url('img/pdf_icon.png')?>"/></a></li>
                                          </ul>
                                          </div>
                                          
                                          
                                          
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <h5>details</h5>
                                          <p><?php echo $value->desc; ?></p>
                                          </div>
                                          <?php if($value->review!=''): ?>
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <h5>review</h5>
                                          <p><?php echo $value->review; ?></p>
                                          </div>
                                          <?php endif; ?>
                                          <div class="span5" style="margin-left:40px">
                                          <button class="btn btn-inverse pull-left">buy</button>
                                          </div>
                                </div>
                                </div> 
                             <hr>
                        </div>                        
                       
                       <?php endforeach;?>   
                       
                    </div>
                </div>
                
                <?php include 'right_panel.php';?>
                      
     
            </div>
        <div class="pagination">
           <?php echo $pagination_link_pro;?>

        </div>
         
            

            
  