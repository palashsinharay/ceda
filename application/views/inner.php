<?php 
//echo "<pre>";
//print_r($pageDetail);
//echo "</pre>";

?>
    
        <!-- Example row of columns -->
        <div class="container well">
            <div class="row">
                <div class="span8">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    
                    
                    <h2><?php echo $pageDetail->menutitle;?></h2>
                    <a class="pull-left" href="#">
                    <img class="media-object" src="<?php echo base_url('assets/uploads/files/'.$pageDetail->filename);?>" height="150" width="150">
                    </a>
                    <p class="media">
                        <?php echo $pageDetail->content;?>
                    </p>
                    </div>  
                    </div> 
                   

                        
                    </div>
                    
                   <!--<div class="media well-small">
                                <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#desc">Description</a></li>
    <li class=""><a href="#app">Application</a></li>
    <li class=""><a href="#spec">Specification</a></li>
    
    </ul>
     
    <div class="tab-content">
        <div class="tab-pane active" id="desc"><p>Deposit of US $500.00 within 24 hours of auction close. Immediate deposit required for Buy It Now. Full payment required within 7 days of auction close. </p></div>
    <div class="tab-pane" id="app">...</div>
    <div class="tab-pane" id="spec">...</div>
    </div>
     
    <script>
    $(function () {
    $('#myTab a:first').tab('show');
    })
        $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    })
    </script>
                        </div>-->
                    
                </div>
                
                
                
                
                   <div class="span-ceda well">
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
            
