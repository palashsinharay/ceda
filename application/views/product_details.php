<?php 
//echo "<pre>";
//print_r($productDetail);
//echo "</pre>";

?>
        <!-- Example row of columns -->
        <div class="container well">
            <div class="row">
                <div class="span8">
                    <div class="row">
                        <div class="span8">
                               
                                   <div class="span3">
<!--                                    <a class="pull-left" href="#">
                                    <h4 class="media-heading">Media heading</h4></a>-->
              <div class="media cont">                     
                <img id="1b" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image);?>" />
                <img id="2b" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image2);?>" />
                <img id="3b" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image3);?>" />
                </div>
                <div class="zoomthumb">
                
                    <img id="1" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image);?>" height="48" width="64"/>
                
                
                    <img id="2" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image2);?>"height="48" width="64" />
                                 
                
                    <img id="3" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image3);?>"height="48" width="64" />
                
                </div>
<!--                                    <img class="media-object" src="img/product.jpg">-->
<!--start product slider -->
<!--<div class="container-fluid">
    	
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="img/slides/thumbs/bridge.jpg" data-src="img/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Front view
                </div>
            </div>
            <div data-thumb="img/slides/thumbs/leaf.jpg" data-src="img/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    side view
                </div>
            </div>
            <div data-thumb="img/slides/thumbs/road.jpg" data-src="img/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    back view
                </div>
            </div>
            <div data-thumb="img/slides/thumbs/sea.jpg" data-src="img/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    left view
                </div>
            </div>
            
            <div data-thumb="img/slides/thumbs/tree.jpg" data-src="img/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    right view
                </div>
            </div>
        </div>
    </div>-->
<!--end product slider-->

                               
                                </div>
                                <div class="media-body well span4">
                                       <span class="label">Name :</span>
                                       <h5 class="offset1" style="display:inline;"><?php echo $productDetail->name;?></h5>
                                       <br>   
                                       <span class="label">Price :</span>
                                       <h5 class="offset1" style="display:inline;">US $<?php echo $productDetail->price;?></h5>
                                       <br>
                                       <br>
                                       <span class="label">Payment :</span>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                       <span class="label">Shipping :</span>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                       
                                       <span class="badge badge-inverse">Catalog</span><span class="offset1"><a href="<?php echo base_url('assets/uploads/files/'.$productDetail->cataloge) ;?>" target="_blank" ><img src="<?php echo base_url('img/pdf_icon.png');?>"/></a></span>
                                       <br><br>
                                       <span class="badge badge-inverse">Stock:  <?php echo $productDetail->stock;?></span>
                                       <br><br>
                                       <button class="btn btn-inverse pull-right">Add To Cart</button>
                                       
                                </div>
                                
                               
                               
                            
                        </div>
                                              
                    </div>
                    
                   <div class="media well-small">
                                <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#desc">Description</a></li>
    <li class=""><a href="#app">Application</a></li>
    <li class=""><a href="#spec">Specification</a></li>
    <li class=""><a href="#rev">Reviews</a></li>
    
    </ul>
     
    <div class="tab-content">
        <div class="tab-pane active" id="desc"><p><?php echo $productDetail->desc;?></p></div>
    <div class="tab-pane" id="app"><?php echo $productDetail->application;?></div>
    <div class="tab-pane" id="spec"><?php echo $productDetail->specs;?></div>
    <div class="tab-pane" id="rev"><?php echo $productDetail->review;?></div>
    </div>
     
    
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
