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
                                <div class="media-body well span4 pull-right">
                                    
                 
                                  
<!--<form name="_xclick" id="_xclick" action="https://www.sandbox.paypal.com/in/cgi-bin/webscr" method="POST" onsubmit="send_to_paypal();return false;">-->

                                    
                                    
<!--                                       <span class="label">Name :</span>-->
                                       <h3><?php echo $productDetail->name;?></h3>
                                       <p style="color:#777575;"><?php echo strip_tags(htmlspecialchars_decode(substr($productDetail->desc,0,500)));?></p>
<!--                                       <span class="label">Price :</span>-->
                                       <h1 >US $<?php echo $productDetail->price;?></h1>
                                      
                                      
                                       
<!--                                       <span class="badge badge-inverse">Catalog</span>-->
                                       <span class=""><a href="<?php echo base_url('assets/uploads/files/'.$productDetail->cataloge) ;?>" target="_blank" ><img src="<?php echo base_url('img/pdf_icon.png');?>"/></a></span>
                                       
                                       <span class="badge-ceda offset1">Stock:  <?php echo $productDetail->stock;?></span>
                                       <br><br>
                                       
       
 <p><a href="#myModal" role="button" class="btn btn-primary medium green" data-toggle="modal">&nbsp;&nbsp;&nbsp;&nbsp;Buy&nbsp;&nbsp;&nbsp;&nbsp;</a><span class="offset-ceda" style="color:#777575;">Credit Card, Paypal, Bank Transfer</span></p>
                                    
                                    
                                </div>
                            

                                
                               
                               
                            
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
            
       
