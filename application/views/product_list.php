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
                    <h4>Support</h4>
                    <img style="margin-bottom:5px;" src="<?php echo base_url('img/support.jpg')?>" alt="">
                    <address>
                            <strong>Ceda, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">USA Toll-free:</abbr> +1-888-268-6154
                            <abbr title="email">Email:</abbr>support@ceda.in
                            </address>
                        <img style="margin-bottom:5px;" src="http://images.batronix.com/logo/cc_payment.png" alt=""><br><img src="http://images.batronix.com/logo/Paypal-Logo.png" alt="">
                         <p>Credit Card, PayPal, Bank Transfer, Cash On Delivery</p>
               </div>
                      
     
            </div>
            <hr>
            

            
  