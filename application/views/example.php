<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
        <link rel="stylesheet" href="<?php echo base_url('css/styles_admin_menu.css');?>" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
<style type='text/css'>
body
{
	
	background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
	color: #000;
	font: 14px Arial;
	margin: 0 auto;
	padding: 0;
	position: relative;

}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
#data_tbl {width:90%; margin: 0 auto;}
</style>
</head>
<body>
    <nav>
            <ul class="fancyNav">
<!--                <li id="home"><a href="#home" class="homeIcon">Home</a></li>-->
                <li id="news"><a href='<?php echo base_url('admin/cms_page')?>'>CMS</a> </li>
                <li id="about"><a href='<?php echo base_url('admin/service')?>'>Service</a></li>
                <li id="services"><a href='<?php echo base_url('admin/product_categorie')?>'>Product Category</a></li>
                <li id="contact"><a href='<?php echo base_url('admin/products')?>'>Products</a></li>
<!--                <li id="contact"><a href='<?php //echo base_url('admin/products')?>'>Product Images</a></li>-->
                <li id="services"><a href='<?php echo base_url('admin/contactus')?>'>Contact Us</a></li>
                <li id="services"><a href='<?php echo base_url('admin/news')?>'>News</a></li>
                <li id="services"><a href='<?php echo base_url('admin/blog')?>'>Blog</a></li>
                <li id="services"><a href='<?php echo base_url('admin/comments')?>'>Comments</a></li>
                <li id="services"><a href='<?php echo base_url('admin/siteconfig')?>'>Site Config</a></li>
                <li id="services"><a href='<?php echo base_url('admin/right_panel')?>'>Right Panel</a></li>
                <li id="services"><a href='<?php echo base_url('admin/logout')?>'>logout</a></li>
                
            </ul>
        </nav>
    
<!--    <div style="float:right;margin-right: 60px; margin-bottom: 40px; font-weight: bold;"> Unapproved comment : <?php //echo $UnapprovedComment; ?> </div>-->
   
<!--	<div style='height:20px;'></div>  -->
    <div id="data_tbl">
		<?php echo $output; ?>
    </div>
</body>
</html>
