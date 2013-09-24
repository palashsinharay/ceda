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
                    
                    <table class="table table-bordered table-striped">
                        <thead>
			  <tr>
				<th>Image</th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Unit Price</th>
				<th>Total Price</th>
				<th>Action</th>
			  </tr>
			</thead>
                        <?php 
//                        echo "<pre>";
//                        print_r($cart);
//                        echo "</pre>";
                        ?>
			<tbody>
			  <?php foreach ($cart as $value):?>
                          <?php //$paypalItemName .=$value['name'].'|' ;?>
                            <tr>
                        <form class="product_row" name="row_<?php  echo $value['id']?>" id="row_<?php  echo $value['id']?>" action="#" method="POST" >
				<input type="hidden" name="rowid" value="<?php echo $value['rowid'];?>">
				<td class="muted center_text"><a href="#"><div style=" height: 50px; width: 50px;"><img src="<?php echo base_url('assets/uploads/files/'.$value['image']);?>"></div></a></td>
				<td><?php echo $value['name'] ;?></td>
				<td><input name="qty" type="text" class="input-mini" placeholder="1" value="<?php echo $value['qty'] ;?>"></td>
				<td><?php echo $value['price'] ;?></td>
				<td><?php echo $value['subtotal'] ;?></td>
                                <td class="">
                                    <button class="btn product_delete" type="button" id="del_<?php  echo $value['id']?>"><i class="icon-remove"></i></button> &nbsp 
                                    <button class="btn product_update" type="button" id="<?php  echo $value['id']?>" ><i  class="icon-edit"></i></button></td>
			</form>  
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
                           <tr>
				
				<td colspan="6" class="success-message-cart">&nbsp;</td>
                                
				
			  </tr>	
			</tbody>
		  </table>
                    
                    <table class="table table-bordered table-striped">
                     <form name="_xclick" id="_xclick" method="POST" action="<?php echo $paypal_url;?>">
                        <input type="hidden" name="cmd" value="_xclick">
                            
                        <input type="hidden" name="business" value="<?php echo $paypal_email;?>">

                        <input type="hidden" name="currency_code" value="<?php echo $paypal_currency_code;?>">
                        <input type="hidden" name="item_name" value="<?php echo strip_tags(htmlspecialchars_decode($paypalItemName));?>">
                        <input type="hidden" name="amount" value="<?php echo  $cart_total; ?>">
                        <input type="hidden" name="return" value="<?php echo site_url( 'shop/success' )?>">
                        <input type="hidden" name="cancel_return" value="<?php echo site_url( 'shop/cancel' )?>">
                        <input type="hidden" name="notify_url" value="<?php echo site_url( 'shop/ipn' )?>">
                        <input type="hidden" name="custom" id="custom" value="<?php echo $transcation_id ; ?>">
                        <input type="hidden" name="shipping" value="<?php echo $shipping;?>">
                        <!--<input type="hidden" name="add" value="1">-->
<!--                        <input type="hidden" name="upload" value="1">-->

                         <thead>
			  <tr colspan="2">
				<th>Customer Information</th>
			  </tr>
			</thead>

                        <tr>
                            <td>
                            <input type="text" name="name" id="name" placeholder="Name" required="true" /><br/>
                            <input type="email" name="email" id="email" placeholder="Email" required="true"/><br/>
                            <input type="text" name="phone" id="phone" placeholder="phone" required="true"/>
                            </td>
                           <td><textarea name="address" id="address" placeholder="Shipping Address" required="true"></textarea><br/>
                            <input type="button" id="checkout" class="btn btn-primary" name="Check Out" value="Check Out" />
                           </td>

                        </tr>
                    </form>
                    </table>
                 
                        
                      
                    
                    </div>  
                    </div> 
                  

                        
                    </div>
                    

                    
                </div>
                
                
                
                
                   <?php include 'right_panel.php';?> 
               
            </div>
            
            
