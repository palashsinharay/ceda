<!DOCTYPE html>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
 <!--[if lt IE 9]>
     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $siteConfig->sitename;?></title>
    
        <?php if(isset($productDetail)):?>
        <meta name="description" content="<?php echo $productDetail->product_meta;?>">
        <meta name="keywords" content="<?php echo $productDetail->product_meta_key;?>"/>
         <?php elseif(isset($newsDetail)):?>
        <meta name="description" content="<?php echo $newsDetail->news_meta_desc;?>">
        <meta name="keywords" content="<?php echo $newsDetail->news_meta_key;?>"/>
        <?php elseif(isset($serviceDetail)): ?>
        <meta name="description" content="<?php echo $serviceDetail->s_meta_desc;?>">
        <meta name="keywords" content="<?php echo $serviceDetail->s_meta_key;?>"/>
        <?php elseif(isset($pageDetail)): ?>
        <meta name="description" content="<?php echo $pageDetail->metadesc;?>">
        <meta name="keywords" content="<?php echo $pageDetail->metakey;?>"/>
        <?php elseif(isset($blogDetail)): ?>
        <meta name="description" content="<?php echo $blogDetail->metadesc;?>">
        <meta name="keywords" content="<?php echo $blogDetail->metakey;?>"/>
        <?php else: ?>
        <meta name="description" content="<?php echo $siteConfig->metadesc;?>">
        <meta name="keywords" content="<?php echo $siteConfig->metakey;?>"/>
        <?php endif; ?>
        
        
        <meta name="viewport" content="width=device-width">
        <meta name="google-translate-customization" content="883dcd8b29005853-d7cc32e011376955-g4ced92e47c2679ac-13"></meta>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
        <style>
            body {
                padding-top: 145px;
/*                padding-bottom: 40px;*/
                 background: url <?php echo base_url('img/gradient.png')?> repeat-x scroll 0 0 #FCF9F3;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-responsive.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/yamm.css')?>">
        
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css')?>">
      
        <link rel="stylesheet" href="<?php echo base_url('css/main.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-magnify.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/camera.css')?>">
        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="row">
                    <div class="span3">
                        <a class="brand" href="#"><img src="<?php echo base_url('img/ceda.jpg')?>" alt="logo"  width="200" height="125"></a>
                    </div>    
                    <div class="span6 text-center header-text">RF AND EMC ENGINEERING SOLUTIONS</div>
                    <div class="span2 pull-right">
                            <div id="google_translate_element" ></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
                    </div>
                    
                   </div>
                <div class="row-fluid">
                
                <div class="navbar">
               	 
                 <div>
                  <div class="navbar yamm">
                    <div class="navbar-inner">
                      <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav1">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <div class="row-fluid">
                        <div class="span12">
                        
                        <div class="nav-collapse collapse" id="nav1">
                           <ul class="nav">
                            <!-- Classic list -->
                            <li>
                            <a href="<?php echo base_url();?>"> Home </a>
                            </li>
                            
                             <li class="dropdown yamm-fullwidth">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Products <b class="caret"></b> </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <div class="yamm-content">
                                   
                                      <?php 
                                         $count=-1;
                                         foreach ($allCategoryData as $value):  $count++; 
                                               $data['productList'] = $this->Cms->get_productList($value->cat_id);
                                           
                                         ?> 
                                    <?php if( ($count == 0)):?>
                                    <div class="row-fluid">
                                       
                                      <ul class="thumbnails">
                                        <?php endif;?> 
                                          <li class="span2">
                                        
                                            
                                        

                                      <a class="" href="<?php echo base_url('main/productListpagei').'/'.$value->cat_id;?>"> <img alt="150x120" src="<?php echo base_url('assets/uploads/files/category/'.$value->cat_image) ;?>" style=" max-height:80px; max-width: 100px; border: 1px solid #aeacac; padding: 2px;" > </a>
                                      <a class="" href="<?php echo base_url('main/productList').'/'.$value->cat_id;?>"><h5><?php echo $value->cat_name; ?></h5></a>
<!--                                          <ul class="media-list" style="list-style:square;">
                                            <?php //foreach ($data['productList'] as $pvalue): ?>
                                                 <li><a href="<?php //echo base_url('main/productdetail').'/'.$pvalue->pid;?>"><?php //echo $pvalue->name; ?></a></li>
                                            <?php  //endforeach;?> 
                                              
                                          </ul>-->
                                         
                                        
                                      </li>
                                      
                                  
                                                         
                                        
                                      <?php if($count==4):?>
                                      </ul>
                                        
                                    </div>
                                      <div class="row-fluid">
                                       
                                      <ul class="thumbnails">
                                    <?php endif;?>
                                     <?php  endforeach;?>     
                                  </div>
                                </li>
                              </ul>
                            </li>
                            
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services <b class="caret"></b> </a><!-- Classic Dropdown -->
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                               <?php foreach ($allServicesData as $value): ?>  
                                  <li>
                                   <a tabindex="-1" href="<?php echo base_url('main/servicedetail').'/'.$value->s_id;?>"> <?php echo strip_tags(htmlspecialchars_decode($value->s_name)) ; ?> </a>
                                </li>
                               <?php endforeach;?>   
                              </ul>
                            </li>
                            
                            <?php foreach ($cmsData as $value): ?>  
                            <li>
                             <a href="<?php echo base_url('main/page').'/'.$value->cid;?>"> <?php echo strip_tags(htmlspecialchars_decode($value->menutitle)); ?> </a>        
                            </li>
                            <?php endforeach;?> 
                         
                            <li>
                            <a href="<?php echo base_url('blog').'/';?>"> Blog </a>
                            </li>
                             <li>
                            <a href="<?php echo base_url('main').'/videoPage';?>"> Videos </a>
                            </li>

                          </ul>
                          </div>
                          <div class="span3 pull-right" >
                     <form class="navbar-search" action="<?php echo base_url('main/searchAll'); ?>" method="post">
                     <input style="width:237px;" type="text" name="search_keyword" id="search_keyword" class="search-query" placeholder="Search">
<!--                     <button type="submit" class="btn btn-submit" id="submit_search">Search</button>-->
                     </form>                     
                          </div>
                          </div>
                        </div><!--/.nav-collapse -->
                      </div>
                    </div>
                  </div>
                  </div>
      		
            </div>    
                    
                    </div>
                </div>
                      <!--/.nav-collapse -->
                </div>
            </div>

