            

            
            <div class="row">
            
            <footer class="container well span11" >
            <!--<p>&copy; Company 2012</p>-->
                <div class="span3 "><strong>Links</strong><br><br>
                <ul class="media-list">
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact Us</a></li>
                
                
                
                
                </ul>
                
                
                
                </div>
                <div class="span4 "><strong>Follow Us:</strong><br><br><div class="btn pull-left">
                            <button type="button" class="btn"><i class="icon-facebook icon-2x"></i></button> 
                            <button type="button" class="btn"><i class="icon-twitter icon-2x"></i></button> 
                            <button type="button" class="btn"><i class="icon-google-plus icon-2x"></i></button> 
                            <button type="button" class="btn"><i class="icon-pinterest icon-2x"></i></button>
   </div>
   </div>
   
                <div class="span3 pull-right">
                        <address>
                        <strong>Contact Us:</strong><br><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                       
                </div>
        	</footer>
        	
        	</div>   
        </div>
                
            
            

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('js/vendor/jquery-1.10.1.min.js')?>"><\/script>')</script>

        <script src="<?php echo base_url('js/vendor/bootstrap.min.js')?>"></script>

        <script src="<?php echo base_url('js/main.js')?>"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
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
					msg="Comemnt Field must not be blank !";
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



});
</script>
</body>
</html>