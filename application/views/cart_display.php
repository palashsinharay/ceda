<?php 
//echo "<pre>";
//print_r($pageDetail);
//echo "</pre>";

?>
    
        <!-- Example row of columns -->
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8 vertical-ceda">
                    <div class="row">
                    <div class="span8">
                    <div class="media">
                    
                    
                    <h2>Shopping Cart<?php //echo $pageDetail->menutitle;?></h2>
<!--                    <a class="pull-left" href="#">
                         <div style=" height: 150px; width: 150px;"> <img class="media-object" src="<?php //echo base_url('assets/uploads/files/'.$pageDetail->filename);?>" height="150" width="150"></div>
                    
                    </a>-->
<!--                    <p class="media">
                        <?php // echo '<pre>';  print_r($cart) ; echo '<pre>' ;?>
                        
                        
                    </p>-->
                    <table class="table table-bordered table-striped">
                        <thead>
			  <tr>
				<th>Remove</th>
				<th>Image</th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Unit Price</th>
				<th>Total</th>
			  </tr>
			</thead>
			<tbody>
			  <?php foreach ($cart as $value):?>
                          
                            <tr>
				
				<td class="muted center_text"><a href="#"><div style=" height: 50px; width: 50px;"><img src="<?php echo base_url('assets/uploads/files/'.$value['image']);?>"></div></a></td>
				<td><?php echo $value['name'] ;?></td>
				<td><input type="text" class="input-mini" placeholder="1" value="<?php echo $value['qty'] ;?>"></td>
				<td><?php echo $value['price'] ;?></td>
				<td><?php echo $value['subtotal'] ;?></td>
                                <td class=""><button class="btn" type="button"><i class="icon-remove"></i></button> &nbsp <button class="btn" type="button"><i class="icon-edit"></i></button></td>
			  </tr>			  
			  <?php endforeach;?>				 
			  <tr>
				
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><strong><?php echo  $cart_total; ?></strong></td>
                                <td>&nbsp;</td>
			  </tr>		  
			</tbody>
		  </table>
                    </div>  
                    </div> 
                   

                        
                    </div>
                    

                    
                </div>
                
                
                
                
                   <?php include 'right_panel.php';?> 
               
            </div>
            
            
