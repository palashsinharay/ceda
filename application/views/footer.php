  
        </div>
        <div class="container-fluid" style="background-color: #1d1d1d; color: white">
            <br>
            <footer class="container span12" >
            <!--<p>&copy; Company 2012</p>-->
                <div class="span4 footer-linkceda"><strong>Links</strong><br>
                
                    <a  href="<?php echo base_url();?>">Home</a>
                   | <a  href="<?php echo base_url('main/page').'/11';?>">About Us</a>
                   | <a  href="<?php echo base_url('main/newsList');?>">News List</a>
                   | <a  href="<?php echo base_url('main/contact_us');?>">Contact Us</a>
                   | <a href="<?php echo base_url('main').'/sitemap';?>">Site Map</a> 
                               
                </div>
                <div class="span3 "><strong>Follow Us:</strong><br>
                            <button type="button" class="btn"><i class="icon-facebook "></i></button> 
                            <button type="button" class="btn"><i class="icon-twitter "></i></button> 
                            <button type="button" class="btn"><i class="icon-google-plus "></i></button> 
                            <button type="button" class="btn"><i class="icon-pinterest "></i></button>
                </div>
   
<!--                <div class="span4 pull-right">
                        <address>
                        <strong>Contact Us:</strong><br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                       
                </div>-->
        	</footer>
        	
            </div>
                
            
            

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('js/vendor/jquery-1.10.1.min.js')?>"><\/script>')</script>

<script src="<?php echo base_url('js/vendor/bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('js/main.js')?>"></script>
<script src="<?php echo base_url('js/jquery.elevatezoom.js')?>"></script>
        
<script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
<script>
           
$(function () {      
    $('#myTab a:first').tab('show');   
})
    
    $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    })
    
    $(document).on('hover', '.yamm .dropdown-menu', function(e) {
    alert('sdfsd');
    })
    </script>   
<script type="text/javascript">
$(document).ready(function() {

$('#submit_commit').click(function() {


var form_data = {
comment 	: $('#comment').val(),
blog_id 	: $('#blog_id').val(),
ajax 	: '1'
};
		
		//alert($('#cap_div').text());	
		if($('#comment').val()=='')
			{
					//alert("Enter NAME");
					msg="Comment Field must not be blank !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}
			else
			{
				$.ajax({
				url: "<?php echo site_url('blog/submitComment'); ?>",
				//url: "main/email_send",
				type: 'POST',
				async : false,
				data: form_data,
				success: function(msg) {
				//alert(msg);
				
				$('.success-message').html(msg);
				$('.success-message').fadeIn(500).show();
				
				}
				});
		
		
		}
return false;
});


$('#submit_contact').click(function() {
//alert("hiiiiiiiii");
//alert($('#name').val());
//alert($('#email').val());
//alert($('#state').val());
//alert($('#stateprovince').val());
//alert($('#country').val());
//alert($('#message').val());
var form_data = {
name            : $('#name').val(),
email           : $('#email').val(),
state           : $('#state').val(),
stateprovince 	: $('#stateprovince').val(),
country 	: $('#country').val(),
message 	: $('#message').val(),
ajax 	: '1'
};
		
		//alert($('#cap_div').text());	
		if($('#name').val()=='')
			{
					//alert("Enter NAME");
					msg="Name Field must not be blank !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}
                else if($('#email').val()=='')
			{
					//alert("Enter NAME");
					msg="Email Field must not be blank !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}        
               else if(!validateEmail($('#email').val()))
			{
                         msg="Please provide a valid email address !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}        

                        else
			{
				$.ajax({
				url: "<?php echo site_url('main/contactus_email'); ?>",
				//url: "main/email_send",
				type: 'POST',
				async : false,
				data: form_data,
				success: function(msg) {
				//alert(msg);
				
				$('.success-message').html(msg);
				$('.success-message').fadeIn(500).show();
				
				}
				});
		
		
		}
return false;
});

function validateEmail(user_email){
   var filter = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{1,4}$/;
    if(filter.test(user_email)){
        return true;
    }else{
        return false;
    }
}

});


</script>
<!--for slider-->
<script src="<?php echo base_url('js/jquery.camera.min.js')?>"></script>
<script src="<?php echo base_url('js/jquery.mobile.customized.min.js')?>"></script>
<script src="<?php echo base_url('js/jquery.easing.1.3.js')?>"></script>
<script src="<?php echo base_url('js/camera.min.js')?>"></script>
        
<script>
		jQuery.noConflict();
                jQuery(document).ready(function() {
                jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: false,
                                height: '250px',
                                pagination: false,
                                autoAdvance: true,
                                mobileAutoAdvance: true,
                                fx: 'random',
                                mobileEasing: '',
                                mobileFx: '',
                                hover: false,
                                navigation: true,
                                navigationHover: true,
                                mobileNavHover: false,
                                playPause: false
			});

			
		});});
	</script>
        
<script type="text/javascript">
   
    $('#add_cart').click(function(){
        alert("hiii");
        
        $.ajax({
        url: "<?php echo site_url('main/addtocart'); ?>",
        type: 'POST',
        data: $('#_xclick').serialize(),
        success: function(msg) {
            //$('#custom').val(msg);
            //$('#_xclick').submit();
            alert(msg);
            $('#cart_bucket_count').html(msg);
            return true;
        }
        });
    });
    
      $('#destroy_cart').click(function(){
        alert("hiii");
        $.ajax({
        url: "<?php echo site_url('main/distroycart'); ?>"
        });
       $('#cart_bucket_count').html('0');
    });
    
     $('.product_update').click(function(){
        //alert($(this).attr('id'));
        $.ajax({
        url: "<?php echo site_url('main/updatecart'); ?>",
        type: 'POST',
        data: $('#row_'+$(this).attr('id')).serialize(),
        success: function(msg) {
            //alert(msg);
            location.reload();
            $('.success-message-cart').html(msg);
            $('.success-message-cart').fadeIn(500).show();
            return true;
        }
        });
    });
    
     $('.product_delete').click(function(){
        //alert($(this).attr('id'));
        var str=$(this).attr('id');
        id = str.substr(4)  
        alert(id);
        
        $.ajax({
        url: "<?php echo site_url('main/deletecart'); ?>",
        type: 'POST',
        data: $('#row_'+id).serialize(),
        success: function(msg) {
            //$('#custom').val(msg);
            //$('#_xclick').submit();
            //alert(msg);
           // $('#cart_bucket_count').html(msg);
           location.reload();
            return true;
        }
        });
    });
    
    
     $('#checkout').click(function(){
        $.ajax({
        url: "<?php echo site_url('main/checkout'); ?>",
        type: 'POST',
        data: $('#_xclick').serialize(),
        success: function(msg) {
            //$('#custom').val(msg);
           // alert(msg);
            $('#_xclick').submit();
            
           // $('#cart_bucket_count').html(msg);
            return true;
        }
        });
    });
   
   
 // function send_to_paypal(){
 $('#paypal_button').click(function() {
 
 if($('#name').val()=='')
			{
					//alert("Enter NAME");
					msg="Name must not be blank !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}
                else if($('#email').val()=='')
			{
					//alert("Enter NAME");
					msg="Email must not be blank !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}
                else if(!validateEmail($('#email').val()))
			{
                         msg="Please provide a valid email address !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}                          
              else if($('#phone').val()=='')
			{
					//alert("Enter NAME");
					msg="Mobile  must not be blank !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			} 
                        
//              else if($('#shipping_address').val()=='')
//			{
//					//alert("Enter NAME");
//					msg="Shipping Address must not be blank !";
//					$('.success-message').html(msg);
//					$('.success-message').fadeIn(500).show();
//					return false;
//								
//			}           
                        else
                            {
                                
                                       $.ajax({
    url: "<?php echo site_url('main/payment'); ?>",
    type: 'POST',
    data: $('#_xclick').serialize(),
    success: function(msg) {
        $('#custom').val(msg);
        $('#_xclick').submit();
        return true;
    }
  });
                                
                            }
 
 
return false;
});
 
function validateEmail(user_email){
   var filter = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{1,4}$/;
    if(filter.test(user_email)){
        return true;
    }else{
        return false;
    }
} 
 </script> 
        
<script>

<?php echo strip_tags(htmlspecialchars_decode($siteConfig->google_analytics)); ?>
</script>   
 
<?php 

//echo trim($siteConfig->google_analytics);

?>
<script type="text/javascript">
$("#zoom_01").elevateZoom({
    zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750,
    gallery : "gallery_01",
    galleryActiveClass: "active"
}); 



//Fix z-index youtube video embedding
$(document).ready(function (){
$('iframe').each(function(){
var url = $(this).attr("src");
$(this).attr("src",url+"?wmode=transparent");
});
});

</script>

</body>
</html>