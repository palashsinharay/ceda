<?php 
//echo "<pre>";
//print_r($feturedProduct);
//echo "</pre>";
//die();
?>            

      
        <!-- Example row of columns -->
        <div class="container well">
            <div class="row">
                <div class="span8">
                    <div class="row">
                    <?php foreach ($feturedProduct as $value): ?>    
                        <div class="span7">
                               <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="<?php echo base_url('assets/uploads/files/'.$value->image);?>" height="150" width="150">
                                </a>
                                <div class="media-body">
                                <h4 class="media-heading"><?php echo $value->name;?></h4>
                                <p><?php  echo substr($value->desc,0, 200);?> </p>
                                <p><a href="<?php echo '#myModal'.$value->pid ;?>" role="button" class="btn" data-toggle="modal">Overview</a></p>
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
                            <button class="btn btn-primary">Product details</button>
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

