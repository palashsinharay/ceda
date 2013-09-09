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
                <div class="pull-left product-image-left-ceda">
<!--                    <img src="<?php //echo base_url('img/news.png');?>" />-->
                     <div class="label-ceda" style="margin-left:20px"><?php echo $downloadcatdetails->dcat_name;?></div>
                </div>
             </div>
            <br>
            <br>
<!--            <hr />-->
            <div class="row">
                
                <div class="span8 vertical-ceda">
                    <div class="row">
                        
                        
                        <ul>
                            
                         <?php foreach ($downloadlist as $value): ?>  
                         <div class="span8">
                    <div class="row">
                    <div class="span8 well">
                    
                    
                    <li style="list-style: none; font-size: 20px;"><?php echo $value->d_name;?><span class="pull-right" ><a href="<?php echo base_url('assets/uploads/files/download/'.$value->filename) ;?>" target="_blank" >Download</a></span></li>
                    
                    
                    
                    
                    </div> 
                    </div>
             </div>                     
                         <hr />
                       <?php endforeach;?>   
                       </ul>
                    </div>
                </div>
                
                <?php include 'right_panel.php';?>
                      
     
            </div>
<!--            <div class="pagination">
       <?php //echo $pagination_link;?>
               
    </div>-->
            
