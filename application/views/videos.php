<?php
//echo "<pre>";
//print_r($productList);
//echo "</pre>";
//
//echo "<pre>";
//print_r(videoPageList);
//echo "</pre>";
//
//die();
?>
        
        <!-- Example row of columns -->
        <div class="container well well-ceda">
             <div class="media">
                <div class="span2 pull-left product-image-left-ceda">
<!--                    <img src="<?php //echo base_url('img/videos_button.png');?>" />-->
                    <div class="label-ceda">Videos</div>
                </div>
             </div>
            <br>
            <br>
<!--            <hr />-->
            <div class="row">
                
                <div class="span8 vertical-ceda">
                    <div class="row">
                        
                        
                        
                         <?php foreach ($videoPageList as $value): ?>  
                         <div class="span8">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    <div class="media well pull-left">
                    
                    
                    <h4><?php echo $value->menutitle;?></h4>
                        <?php echo $value->content;?>
                    
                    </div>
                    </div>  
                    </div> 
                    </div>
             </div>                     
                       
                       <?php endforeach;?>   
                       
                    </div>
                </div>
                
                <?php include 'right_panel.php';?>
                      
     
            </div>
<!--    <div class="pagination">
       <?php //echo $pagination_link_video;?>
               
    </div>
            -->
            

            
  