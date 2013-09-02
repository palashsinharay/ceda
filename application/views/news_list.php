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
             <div class="media">
                <div class="span2 pull-left product-image-left-ceda">
<!--                    <img src="<?php //echo base_url('img/news.png');?>" />-->
                     <lable class="label-ceda">News</lable>
                </div>
             </div>
            <br>
            <br>
<!--            <hr />-->
            <div class="row">
                
                <div class="span8 vertical-ceda">
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
                
                <?php include 'right_panel.php';?>
                      
     
            </div>
<!--            <div class="pagination">
       <?php //echo $pagination_link;?>
               
    </div>-->
            
