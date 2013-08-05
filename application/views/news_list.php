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
                    <lable class="label-ceda">News</lable>
                </div>
             </div>
            <hr />
            <div class="row">
                
                <div class="span8">
                    <div class="row">
                        
                        
                        
                         <?php foreach ($newsListAll as $value): ?>  
                         <div class="span8">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    <div class="media well pull-left">
                    
                    <a class="pull-left" href="<?php echo base_url('main/newsdetail').'/'.$value->id; ?>">
                    <img class="media-object" src="<?php echo base_url('assets/uploads/files/'.$value->image) ;?>" width="150" height="120">
                    </a>
                    <h4><a href="<?php echo base_url('main/newsdetail').'/'.$value->id;?>"><?php echo $value->title;?></a></h4>
                    <p><?php echo substr($value->description,0,350);?></p>
                    <p><h5>Posted on: <?php echo $value->date; ?></h5></p>
                    <span class="pull-right"><p><a href="<?php echo base_url('main/newsdetail').'/'.$value->id; ?>">....more</a></p></span>
                    </div>
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
            <div class="pagination">
       <?php echo $pagination_link;?>
               
    </div>
            <hr>
            

            
  