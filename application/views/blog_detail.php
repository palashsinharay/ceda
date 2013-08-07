

<!-- Example row of columns -->
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8 vertical-ceda">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    
                   <?php 
                   $datetime_arr=explode(" ", $blogDetail->timestamp); 
                   $date_arr=explode("-",$datetime_arr[0]);
                   
                   ?> 
                    <h4><?php echo $blogDetail->title; ?></h4>
                    <p>Posted on: <strong><?php echo $date_arr[2]."-".$date_arr[1]."-".$date_arr[0]; ?></strong></p>
                    <p class="media"><?php echo $blogDetail->desc; ?></p>
                    <p class="pull-right"><strong><?php echo $blogDetail->author; ?></strong></p>
                    <br/>
                    <hr/>
                    
                    <h4>Comments</h4>
                    <ul class="media-list">
                    <?php  foreach ($allcommentList as $commentvalue): 
                    $commnt_datetime_arr=explode(" ", $commentvalue->timestamp); 
                    $commnt_date_arr=explode("-",$commnt_datetime_arr[0]);
                    ?>
                    <li><?php echo $commentvalue->comment_text;?><p><strong><?php echo $commnt_date_arr[2]."-".$commnt_date_arr[1]."-".$commnt_date_arr[0]; ?>, <?php echo $commentvalue->author; ?>.</strong></p></li>
                    <br/>
                    <?php  endforeach; ?>
                    
                    </ul>
                    
                    <hr/>
                    <form action="#" method="post">
                        <input type="hidden" name="blog_id" id="blog_id" value="<?php echo $blogDetail->blog_id;?>" />   
                    <h4>Add comment</h4>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                    <br/>
                    <button type="button" class="btn btn-submit" id="submit_commit">Submit</button>
                    </form>
                    <div class="success-message" style="display:none; color:#FF0000; font-size:14px; font-weight:600; margin-left: 111px;"></div>
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
            
            

            
