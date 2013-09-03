<?php 
//echo "<pre>";
//print_r($searchList);
//echo "</pre>";
//die();
?> 

<!-- Example row of columns -->
        <div class="container well">
            
            <div class="row">
                
                <div class="span8 vertical-ceda">
                  <?php if(!empty($searchList['blog'])){?>
                    <div class="row">
                        
                        
                        
                        <?php 
                        foreach ($searchList['blog'] as $value): 
                          
                        ?>  
                        <div class="span8">
                        
                        <hr-ceda />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h4><a href="<?php echo base_url('blog/blogdetail').'/'.$value->blog_id; ?>"><?php echo $value->title; ?></a></h4></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span7" style="margin-left:40px">
                                          <p><?php echo strip_tags(htmlspecialchars_decode(substr($value->desc,0,200)));?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('blog/blogdetail').'/'.$value->blog_id; ?>">....more</a></p></span>
                                          </div>
                                         
                                        
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
                        
                        <hr-ceda />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h4><a href="<?php echo base_url('main/page').'/'.$value->cid; ?>"><?php echo $value->menutitle; ?></a></h4></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span7" style="margin-left:40px">
                                          <p><?php echo strip_tags(htmlspecialchars_decode(substr($value->content,0,200)));?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/page').'/'.$value->cid; ?>">....more</a></p></span>
                                          </div>
                                          
                                        
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
                        
                        <hr-ceda />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h4><a href="<?php echo base_url('main/productdetail').'/'.$value->pid; ?>"><?php echo $value->name; ?></a></h4></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span7" style="margin-left:40px">
                                          <p><?php echo strip_tags(htmlspecialchars_decode(substr($value->desc,0,200)));?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/productdetail').'/'.$value->pid; ?>">....more</a></p></span>
                                          </div>
                                         
                                        
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
                        
                        <hr-ceda />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h4><a href="<?php echo base_url('main/servicedetail').'/'.$value->s_id; ?>"><?php echo $value->s_name; ?></a></h4></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span7" style="margin-left:40px">
                                          <p><?php echo strip_tags(htmlspecialchars_decode(substr($value->s_desc,0,200))); ?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/servicedetail').'/'.$value->s_id; ?>">....more</a></p></span>
                                          </div>
                                        
                                        
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
                        
                        <hr-ceda />
                           <div class="media">
                           
                               <div class="media-body">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <ul class="media-list">
                                          <li><h4><a href="<?php echo base_url('main/newsdetail').'/'.$value->id; ?>"><?php echo $value->title; ?></a></h4></li>
                                          </ul>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="span7" style="margin-left:40px">
                                          <p><?php echo strip_tags(htmlspecialchars_decode(substr($value->description,0,200)));?></p>
                                          <span class="pull-right"><p><a href="<?php echo base_url('main/newsdetail').'/'.$value->id; ?>">....more</a></p></span>
                                          </div>
                                        
                                        
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
        <?php include 'right_panel.php';?>     
     
            </div>
<!--             <div class="pagination">
       <?php //echo $pagination_link_blog;?>
               
    </div>-->
            <hr-ceda>
            