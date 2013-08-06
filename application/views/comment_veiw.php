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
        <div class="container well well-ceda">
            
            <div class="row">
                
                <div class="span8 vertical-ceda">
                    <div class="row">
                        
                        
                        
                        <?php foreach ($blogList as $value): ?>  
                        <div class="span8">
                        
                        <hr />
                           <div class="media">
                           
                            <div class="media-body well">
                            
                                          <div class="pull-left" style="margin-left:40px">
                                          <strong>Blog name</strong>
                                          <br/>
                                          <br/>
                                          <ul class="media-list">
                                          <li><?php echo $value->title; ?></li>
                                          </ul>
                                          </div>
                                          
                                          
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          <h5>Description</h5>
                                          <p><?php echo $value->desc; ?></p>
                                          </div>
                                          
                                          <div class="clearfix"></div>
                                          <div class="span5" style="margin-left:40px">
                                          
                                          <p><a href="/blog/comment/<?php echo $value->id;?>">Comment</a></p>
                                          </div>
                                         
                                </div>
                                </div> 
                        </div>                        
                       
                       <?php endforeach;?>   
                       
                    </div>
                </div>
           
     
            </div>
           
            

            
  