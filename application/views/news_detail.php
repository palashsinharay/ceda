<?php 
//echo "<pre>";
//print_r($newsDetail);
//echo "</pre>";

?>
        <!-- Example row of columns -->
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8 vertical-ceda">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                   
                    <h4><?php echo $newsDetail->title;?></h4>
                    <h5>Posted on: <?php echo $newsDetail->date;?></h5>
                    <div style=" height: 250px; width: 300px; float: left;margin-right: 5px; ">
                    <img class="media-object" src="<?php echo base_url('assets/uploads/files/'.$newsDetail->image) ;?>" width="285" height="190" >
                    </div>
                    
                    <p class="media"><?php echo $newsDetail->description;?></p>
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
            
 