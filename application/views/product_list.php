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
        <div class="container well">
             <div class="media">
                <div class="span2 pull-left product-image-left-ceda">
                    <h2><?php echo $categoryList->cat_name;?></h2>
                </div>
             </div>
            <div class="row">
                
                <div class="span8">
                    <div class="row">
                        
                        
                        
                        <?php foreach ($productList as $value): ?>  
                        <div class="span8">
                        
                        <hr />
                           <div class="media">
                           <div class="span2 pull-left product-image-left-ceda">
                        
                            <a href="#">
                                 <h4 class="media-heading"><?php echo $value->name; ?></h4>
                                 <img class="media-object" src="<?php echo base_url('img/product.jpg')?>">
                            </a><br />
                            </div>
                            <div class="media-body well">
                            
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
                                          <div class="span5" style="margin-left:40px">
                                          <button class="btn btn-inverse pull-left">buy</button>
                                          </div>
                                </div>
                                </div> 
                        </div>                        
                       
                       <?php endforeach;?>   
                       
                    </div>
                </div>
                
                <div class="span3 well">
                    <h2>News</h2>
                    <ul  class="media-list">
                      <?php foreach ($newsList as $value): ?>   
                        <li><h4><?php echo $value->title;?></h4>
                        <p><?php echo $value->description;?></p>
                        </li>
                        <?php endforeach;?>    
                                   
                    </ul>
               </div>
                      
     
            </div>
            <hr>
            

            
  