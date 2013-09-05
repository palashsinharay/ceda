<?php 
//echo "<pre>";
//print_r($productDetail);
//echo "</pre>";

?>   
    <div class="container well well-ceda">
            <div class="row">
                <div class="span10">

<img src="<?php echo base_url('assets/uploads/files/'.$productDetail->heading_image);?>" style="width: 971px; height: 253px;"/>
                    <!-- #camera_wrap_1 -->
                </div>
                <div class="span2">
                       <lable class="label">News updates</lable>
                    <ul  class="media-list">
                        <?php foreach ($newsList as $value): ?>  
                        <li><h5><a href="<?php echo base_url('main/newsdetail').'/'.$value->id;?>"><?php echo $value->title;?></a></h5>
                        <?php echo substr($value->description,0,90);?>
                    </li>
                    <?php endforeach;?>
                <span class="pull-right"><p><a href="<?php echo base_url('main/newsList');?>">All News</a></p></span>                 
                                   
                    </ul>
                    </div>
            </div>
            
          </div> <!-- /container -->



        <!-- Example row of columns -->
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8 vertical-ceda">
                    <div class="row">
                        <div class="span8">
                               
                                   <div class="span5">
                                        <div class="cont"> 
                                            <img id="zoom_01" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image);?>" data-zoom-image="<?php echo base_url('assets/uploads/files/'.$productDetail->image);?>" />
                                        </div>
                                        <div class="zoomthumb" id="gallery_01" style="padding-top: 10px;">
                                            <a data-zoom-image="<?php echo base_url('assets/uploads/files/'.$productDetail->image);?>" data-image="<?php echo base_url('assets/uploads/files/'.$productDetail->image);?>" class="elevatezoom-gallery" href="tester"><img width="100" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image);?>"></a>  
                                            <a data-zoom-image="<?php echo base_url('assets/uploads/files/'.$productDetail->image2);?>" data-image="<?php echo base_url('assets/uploads/files/'.$productDetail->image2);?>" class="elevatezoom-gallery" href="tester"><img width="100" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image2);?>"></a>  
                                            <a data-zoom-image="<?php echo base_url('assets/uploads/files/'.$productDetail->image3);?>" data-image="<?php echo base_url('assets/uploads/files/'.$productDetail->image3);?>" class="elevatezoom-gallery" href="tester"><img width="100" src="<?php echo base_url('assets/uploads/files/'.$productDetail->image3);?>"></a>
                                        </div>                               
                                </div>
                                <!--<div class="media-body well span4 pull-right">
                                       <span class="label">Name :</span>
                                       <h5><?php echo $productDetail->name;?></h5>
                                      
                                       <span class="label">Price :</span>
                                       <h5 >US $<?php echo $productDetail->price;?></h5>
                                      
                                       <span class="label">Payment :</span>
                                       <p><?php echo $productDetail->payment;?></p>
                                       <span class="label">Shipping :</span>
                                       <p><?php echo $productDetail->shipping;?></p>
                                       
                                       <span class="badge badge-inverse">Catalog</span><span class="offset1"><a href="<?php echo base_url('assets/uploads/files/'.$productDetail->cataloge) ;?>" target="_blank" ><img src="<?php echo base_url('img/pdf_icon.png');?>"/></a></span>
                                       <br><br>
                                       <span class="badge badge-inverse">Stock:  <?php echo $productDetail->stock;?></span>
                                       <br><br>
                                        <p><a href="#myModal" role="button" class="btn" data-toggle="modal">Buy</a></p> 
                                </div>-->
<!-- TEST                            -->
      <div class="span2">
      
        <div class="span3" style="width: 290px;">
            <address>
                <h3><?php echo $productDetail->name;?></h3><br>
                <strong>Description:</strong> <span><?php echo strip_tags(htmlspecialchars_decode(substr($productDetail->desc,0,500)));?></span><br><br>
                <strong>Download Catalog:</strong> <span><a href="<?php echo base_url('assets/uploads/files/'.$productDetail->cataloge) ;?>" target="_blank" ><img src="<?php echo base_url('img/pdf_icon.png');?>"/></a></span><br>
                <strong>Availability:</strong> <span>Available ( <?php echo $productDetail->stock;?> ) </span><br>
            </address>
        </div>    
                
        <div class="span4">
            <h3 style="line-height: 10px;">
                <strong>Price: $<?php echo $productDetail->price;?></strong> <br><br>
            </h3>
        </div>    
        
        <div class="span4">
            <form class="form-inline">
                <div>
                    <label>Qty:</label>
                    <input type="text" placeholder="1" class="span1">
                    <!--<button type="submit" class="btn btn-primary">Add to cart</button>-->
                    <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Buy</a>
                </div>        
            </form>
        </div>        
        
        
      </div>    
<!-- TEST                            -->

                                
                               
                               
                            
                        </div>
                                              
                    </div>
             <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
<!--                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>-->
                            <h3 id="myModalLabel">Buy Form</h3>
                            </div>
                            <div class="modal-body">
<div class="control-group">
<div class="success-message" style="display:none; color:#FF0000; font-size:14px; font-weight:600; margin-left: 0px; margin-top: 2px;"></div>    
<form name="_xclick" id="_xclick" action="<?php echo $paypal_url;?>" method="POST" >
<!--<form name="_xclick" action="https://www.paypal.com/in/cgi-bin/webscr" method="post">-->
<input type="hidden" name="cmd" value="_xclick">
<!--<input type="hidden" name="business" value="sahani.bunty_buss@gmail.com">-->
<input type="hidden" name="business" value="<?php echo $paypal_email;?>">
<!--<input type="hidden" name="currency_code" value="USD">-->
<input type="hidden" name="currency_code" value="<?php echo $paypal_currency_code;?>">
<input type="hidden" name="item_name" value="<?php echo $productDetail->name;?>">
<input type="hidden" name="amount" value="<?php echo $productDetail->price ?>">
<input type="hidden" name="return" value="<?php echo site_url( 'shop/success' )?>">
<input type="hidden" name="cancel_return" value="<?php echo site_url( 'shop/cancel' )?>">
<input type="hidden" name="notify_url" value="<?php echo site_url( 'shop/ipn' )?>">
<input type="hidden" name="custom" id="custom" value="">
<input type="hidden" name="shipping" value="<?php echo $shipping;?>">


<div class="control-group">
<label for="Name" class="control-label">	
Name :
</label>
<div class="controls">
<input type="text" name="name" id="name" value=""/>
<span class="help-inline"> </span>
</div>
</div>

<div class="control-group">
<label for="Email" class="control-label">	
Email :
</label>
<div class="controls">
<input type="text" name="email" id="email" value=""/>
<span class="help-inline"> </span>
</div>
</div>

<div class="control-group">
<label for=">Mobile" class="control-label">	
Mobile :
</label>
<div class="controls">
<input type="text" name="phone" id="phone" value=""/>
<span class="help-inline"> </span>
</div>
</div>

<!--<div class="control-group">
<label for="Shipping Address" class="control-label">	
Shipping Address :
</label>
<div class="controls">
    <textarea rows="4" cols="50" name="shipping_address" id="shipping_address">

    </textarea>

<span class="help-inline"> </span>
</div>
</div>-->

<div class="control-group">
<label for="button" class="control-label pull-left">	
<input type="image" id="paypal_button" class="btn btn-inverse pull-right" name="submit" value="Buy Now" />
</label>
</div>




</div>


<!--<input type="image" src="http://www.paypal.com/en_GB/i/btn/x-click-but01.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">-->

</form> 
<br/>    

                                
                            </div>
                            <div class="modal-footer">
                               <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                            </div>
             </div>  
                    
      <div class="media well-small">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#desc">Description</a></li>
        <li class=""><a href="#app">Application</a></li>
        <li class=""><a href="#spec">Specification</a></li>
        <li class=""><a href="#rev">Reviews</a></li>
        <li class=""><a href="#payment">Payment</a></li>
        <li class=""><a href="#ship">Shipping</a></li>  
    </ul>     
    <div class="tab-content">
        <div class="tab-pane active" id="desc"><p><?php echo $productDetail->desc;?></p></div>
        <div class="tab-pane" id="app"><?php echo $productDetail->application;?></div>
        <div class="tab-pane" id="spec"><?php echo $productDetail->specs;?></div>
        <div class="tab-pane" id="rev"><?php echo $productDetail->review;?></div>
        <div class="tab-pane" id="payment"><?php echo $productDetail->payment;?></div>
        <div class="tab-pane" id="ship"><?php echo $productDetail->shipping;?></div>
    </div>
</div>
                    
                </div>
                
                
                
                
                 <?php include 'right_panel.php';?>     

               
            </div>
            
       
