<?php 
//echo "<pre>";
//print_r($cmsData);
//echo "</pre>";

?>
    
        <!-- Example row of columns -->
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8 vertical-ceda">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    
                    
                    <h2>Site Map</h2>
                    <p class="media">
                    <h4>Pages</h4>
                    <ul>
                        <?php foreach ($cmsData as $value): ?>
                        <li><a href="<?php echo base_url('main/page').'/'.$value->cid;?>"><?php echo strip_tags(htmlspecialchars_decode($value->menutitle)); ?> </a></li>
                        <?php endforeach;?> 
                        <li><a  href="<?php echo base_url('main/contact_us');?>">Contact Us</a></li>
                    </ul>
                    </p>

                    <p class="media">
                    <h4>Services</h4>
                    <ul>
                        <?php foreach ($allServicesData as $value): ?>
                        <li><a href="<?php echo base_url('main/servicedetail').'/'.$value->s_id;?>"><?php echo strip_tags(htmlspecialchars_decode($value->s_name)) ; ?></a></li>
                        <?php endforeach;?> 
                    </ul>
                    </p>

                    <p class="media">
                    <h4>News</h4>
                    <ul>
                        <?php foreach ($newsList as $value): ?>
                        <li><a href="<?php echo base_url('main/newsdetail').'/'.$value->id;?>"><?php echo strip_tags(htmlspecialchars_decode($value->title));?></a></li>
                        <?php endforeach;?> 
                    </ul>
                    </p>
                    
                    
                    <p class="media">
                    <h4>Downloads</h4>
                    <ul>
                        <?php foreach ($allDownloadcCat as $value): ?>
                        <li><a  href="<?php echo base_url('main/downloadCat').'/'.$value->dcat_id;?>"> <?php echo strip_tags(htmlspecialchars_decode($value->dcat_name)) ; ?> </a></li>
                        <?php endforeach;?> 
                    </ul>
                    </p>
                    
                    <p class="media">
                    <h4>Products</h4>
                    <ul>
                        <?php foreach ($allCategoryData as $value):  
                            $data['productList'] = $this->Cms->get_productList($value->cat_id);
//                        echo "<pre>";
//                        print_r( $data['productList'] );
//                        echo "</pre>";
                            ?>
                        <li>
                            <a class="" href="<?php echo base_url('main/productList').'/'.$value->cat_id;?>"><b><?php echo $value->cat_name;?></b></a>
                        </li>
                        <ul>
                             <?php foreach ($data['productList'] as $value): ?>
                            <li style="list-style: square">  
                      <a href="<?php echo base_url('main/productdetail').'/'.$value->pid;?>"><?php echo strip_tags(htmlspecialchars_decode($value->name)); ?></a>
                            </li>
                             <?php endforeach;?> 
                        </ul>

                        <?php endforeach;?> 
                    </ul>
                    </p>
                    
                    <p class="media">
                        <h4>Blog</h4>
                        <ul>
                            <li><a href="<?php echo base_url('blog').'/';?>">Blog</a></li>    
                        </ul>
                    </p>
                    
                    <p class="media">
                    <h4>Videos</h4>
                    <ul>
                    <li>
                         <a href="<?php echo base_url('main').'/videoPage';?>">Videos</a>   
                    </li>
                    </ul>    
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
                
                
                
                
                   <?php include 'right_panel.php';?> 
               
            </div>
            
            
