

<!-- Example row of columns -->
        <div class="container well">
            <div class="row">
                <div class="span8">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    
                   <?php 
                   $datetime_arr=explode(" ", $blogDetail->timestamp); 
                   $date_arr=explode("-",$datetime_arr[0]);
                   
                   ?> 
                    <h2><?php echo $blogDetail->title; ?></h2>
                    <p>Posted on: <strong><?php echo $date_arr[2]."-".$date_arr[1]."-".$date_arr[0]; ?></strong></p>
                    <p class="media"><?php echo $blogDetail->desc; ?></p>
                    <p class="pull-right"><strong><?php echo $blogDetail->author; ?></strong></p>
                    <br/>
                    <hr/>
                    
                    <h4>Comments</h4>
                    <ul class="media-list">
                    <?php  foreach ($allcommentList as $commentvalue): 
                    $commnt_datetime_arr=explode(" ", $commentvalue->timestamp); 
                    $commnt_date_arr=explode("-",$commnt_datetime_arr[0]);
                    ?>
                    <li><?php echo $commentvalue->comment_text;?><p><strong><?php echo $commnt_date_arr[2]."-".$commnt_date_arr[1]."-".$commnt_date_arr[0]; ?>, <?php echo $commentvalue->author; ?>.</strong></p></li>
                    <br/>
                    <?php  endforeach; ?>
                    
                    </ul>
                    
                    <hr/>
                    <form action="#" method="post">
                        <input type="hidden" name="blog_id" id="blog_id" value="<?php echo $blogDetail->blog_id;?>" />   
                    <h4>Add comment</h4>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                    <br/>
                    <button type="button" class="btn btn-submit" id="submit_commit">Submit</button>
                    </form>
                    <div class="success-message" style="display:none; color:#FF0000; font-size:14px; font-weight:600; margin-left: 111px;"></div>
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
                
                
                
                
                <div class="span3 well">
                    <h4>Support</h4>
                    <img style="margin-bottom:5px;" src="img/support.jpg" alt="">
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
            

            
