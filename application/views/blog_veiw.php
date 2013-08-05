       <!-- Example row of columns -->
        <div class="container well">
            
            <div class="row">
                
                <div class="span8">
                    <lable class="label-ceda">Blog</lable>
                    <div class="row">
                        
                        
                        
                        <?php 
                        foreach ($blogList as $value): 
                        $data['recentcommentList'] = $this->Cms->get_recent_comment_list($value->blog_id);
//                        echo "<pre>";
//                        print_r($data['recentcommentList']);
//                        echo "</pre>";

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
                                         
                                          <div class="span5" style="margin-left:40px">
                                          <h5>Comments</h5>
                                          </div>
                                         <?php  foreach ($data['recentcommentList'] as $commentvalue): ?>
                                          
                                          <div class="span5" style="margin-left:40px">
                                         
                                          <p><?php echo $commentvalue->comment_text; ?></p>
                                          </div>
                                         <?php  endforeach; ?>
                                          <div class="clearfix"></div>
<!--                                          <div class="span5" style="margin-left:40px">
                                          <p><a href="/blog/comment/<?php echo $value->id;?>">Comment</a></p>
                                          </div>-->
                                         
                                </div>
                                </div> 
                        </div>                        
                       
                       <?php endforeach;
                      
                       ?>   
                      
                    </div>
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
             <div class="pagination">
       <?php echo $pagination_link_blog;?>
               
    </div>
            <hr>
            