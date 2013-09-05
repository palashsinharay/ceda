<?php 
//echo "<pre>";
//print_r($serviceDetail);
//echo "</pre>";

?>
    
        <!-- Example row of columns -->
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8 vertical-ceda">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    
                    
                    <h4><?php echo $serviceDetail->s_name;?></h4>
                    <a class="pull-left" href="#">
                        <div style=" height: 150px; width: 150px;">
                    <img class="media-object" src="<?php echo base_url('assets/uploads/files/'.$serviceDetail->s_image);?>" height="150" width="150">
                        </div>
                    </a>
                    <p class="media">
                        <?php echo $serviceDetail->s_desc;?>
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
            
            
