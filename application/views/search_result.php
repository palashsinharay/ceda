<?php 
//echo "<pre>";
//print_r($searchList);
//echo "</pre>";
//die();
?> 

<!-- Example row of columns -->
        <div class="container well">
            
            <div class="row">
                
                <div class="span8">
                  <?php if(!empty($searchList['blog'])){?>
                    <div class="row">
                        
                        
                        
                        <?php 
                        foreach ($searchList['blog'] as $value): 
                          
                        ?>  
                        <div class="span8">
                        
                        <hr />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h2><a href="<?php echo base_url('blog/blogdetail').'/'.$value->blog_id; ?>"><?php echo $value->title; ?></a></h2></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <p><?php echo substr($value->desc,0,100); ?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('blog/blogdetail').'/'.$value->blog_id; ?>">....more</a></p></span>
                                          </div>
                                          <div class="clearfix"></div>
                                        
                                </div>
                          </div> 
                        </div>                        
                       
                       <?php endforeach; ?>   
                      
                    </div>
                    <?php 
                  }
                  
                  if(!empty($searchList['cms'])) 
                        {
                   ?>   
                      
                    
                <div class="row">
                        
                        
                        
                        <?php 
                        foreach ($searchList['cms'] as $value): 
                          
                        ?>  
                        <div class="span8">
                        
                        <hr />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h2><a href="<?php echo base_url('main/page').'/'.$value->cid; ?>"><?php echo $value->menutitle; ?></a></h2></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <p><?php echo substr($value->content,0,500); ?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/page').'/'.$value->cid; ?>">....more</a></p></span>
                                          </div>
                                          <div class="clearfix"></div>
                                        
                                </div>
                          </div> 
                        </div>                        
                       
                       <?php endforeach; ?>   
                      
                    </div>                   
                    
                   <?php }

                  if(!empty($searchList['product'])) 
                        {
                   ?>   
                      
                    
                <div class="row">
                        
                        
                        
                        <?php 
                        foreach ($searchList['product'] as $value): 
                          
                        ?>  
                        <div class="span8">
                        
                        <hr />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h2><a href="<?php echo base_url('main/productdetail').'/'.$value->pid; ?>"><?php echo $value->name; ?></a></h2></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <p><?php echo substr($value->desc,0,500); ?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/productdetail').'/'.$value->pid; ?>">....more</a></p></span>
                                          </div>
                                          <div class="clearfix"></div>
                                        
                                </div>
                          </div> 
                        </div>                        
                       
                       <?php endforeach; ?>   
                      
                    </div>                   
                    
                   <?php }

                   
                  if(!empty($searchList['service'])) 
                        {
                   ?>   
                      
                    
                <div class="row">
                        
                        
                        
                        <?php 
                        foreach ($searchList['service'] as $value): 
                          
                        ?>  
                        <div class="span8">
                        
                        <hr />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h2><a href="<?php echo base_url('main/servicedetail').'/'.$value->s_id; ?>"><?php echo $value->s_name; ?></a></h2></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <p><?php echo substr($value->s_desc,0,500); ?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/servicedetail').'/'.$value->s_id; ?>">....more</a></p></span>
                                          </div>
                                          <div class="clearfix"></div>
                                        
                                </div>
                          </div> 
                        </div>                        
                       
                       <?php endforeach; ?>   
                      
                    </div>                   
                    
                   <?php }


                   if(!empty($searchList['news'])) 
                        {
                   ?>   
                      
                    
                <div class="row">
                        
                        
                        
                        <?php 
                        foreach ($searchList['news'] as $value): 
                          
                        ?>  
                        <div class="span8">
                        
                        <hr />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h2><a href="<?php echo base_url('main/newsdetail').'/'.$value->id; ?>"><?php echo $value->title; ?></a></h2></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <p><?php echo substr($value->description,0,500); ?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/newsdetail').'/'.$value->id; ?>">....more</a></p></span>
                                          </div>
                                          <div class="clearfix"></div>
                                        
                                </div>
                          </div> 
                        </div>                        
                       
                       <?php endforeach; ?>   
                      
                    </div>                   
                    
                   <?php }
                        if(empty($searchList['blog']) && empty($searchList['cms']) && empty($searchList['product']) && empty($searchList['service']) && empty($searchList['news']) )
                        {
                        echo "<h2>No Result Found !! </h2>";
                        }
                          
                    
                    ?>
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
<!--             <div class="pagination">
       <?php //echo $pagination_link_blog;?>
               
    </div>-->
            <hr>
            