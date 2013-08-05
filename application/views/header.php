<?php 

//echo "<pre>";
//print_r($productList);
//echo "</pre>";
//
//echo "<pre>";
//print_r($newsList);
//echo "</pre>";
//echo "<pre>";
//print_r($allCategoryData);
//echo "</pre>";
//echo "<pre>";
//print_r($allServicesData);
//echo "</pre>";

//echo "<pre>";
//print_r($siteConfig);
//echo "</pre>";

//die();

?>

<!DOCTYPE html>
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
/*                padding-top: 125px;*/
                padding-bottom: 40px;
                 background: url("img/gradient.png") repeat-x scroll 0 0 #FCF9F3;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-responsive.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/yamm.css')?>">
        
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css')?>">
      
        <link rel="stylesheet" href="<?php echo base_url('css/main.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-magnify.min.css')?>">
        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="row">
                    <div class="span3">
                        <a class="brand" href="#"><img src="<?php echo base_url('img/ceda.png')?>" alt="logo"></a>
                    </div>    
                    <div class="span6 text-center header-text">LEADING PROGRAMMING AND MEASUREMENT SOLUTIONS</div>
                    <div class="span3 pull-right">
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
                            <?php foreach ($cmsData as $value): ?>  
                            <li>
                            <a href="<?php echo base_url('main/page').'/'.$value->cid;?>"> <?php echo $value->menutitle; ?> </a>
                            </li>
                            <?php endforeach;?> 
                            <!-- Classic dropdown -->
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services <b class="caret"></b> </a><!-- Classic Dropdown -->
                              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                               <?php foreach ($allServicesData as $value): ?>  
                                  <li>
                                  <a tabindex="-1" href="<?php echo base_url('main/servicedetail').'/'.$value->s_id;?>"> <?php echo $value->s_name; ?> </a>
                                </li>
                               <?php endforeach;?>   
                              </ul>
                            </li>
                            <!-- Pictures -->
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
                                          <li class="span3">
                                        
                                            
                                        
                                         <a class="" href="<?php echo base_url('main/productListpagei').'/'.$value->cat_id;?>"> <img alt="150x120" src="<?php echo base_url('assets/uploads/files/category/thumb/'.$value->cat_image) ;?>" width="100" height="80"> </a>
                                      <a class="" href="<?php echo base_url('main/productListpagei').'/'.$value->cat_id;?>"><h5><?php echo $value->cat_name; ?></h5></a>
                                          <ul class="media-list">
                                            <?php foreach ($data['productList'] as $pvalue): ?>
                                                 <li><a href="<?php echo base_url('main/productdetail').'/'.$pvalue->pid;?>"><?php echo $pvalue->name; ?></a></li>
                                            <?php  endforeach;?> 
                                              
                                          </ul>
                                         
                                        
                                      </li>
                                      
                                  
                                                         
                                        
                                      <?php if($count==3):?>
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
                            
                            <li>
                            <a href="<?php echo base_url('blog').'/';?>"> Blog </a>
                            </li>

                          </ul>
                          </div>
                          <div class="span3 pull-right" >
                     <form class="navbar-search">
                     <input type="text" class="search-query" placeholder="Search">
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
                         
        
        
        <div class="container well well-ceda">
            <div class="row">
                <div class="span8">
                <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item"><img src="<?php echo base_url('img/1101281484C89ekB.jpg')?>"></div>
                    <div class="item"><img src="<?php echo base_url('img/img_1.jpg')?>"></div>
                    <div class="item"><img src="<?php echo base_url('img/img_2.jpg')?>"></div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
                </div>
                <div class="span4">
                       <lable class="label">News updates</lable>
                    <ul  class="media-list">
                        <?php foreach ($newsList as $value): ?>  
                        <li><h5><a href="<?php echo base_url('main/newsdetail').'/'.$value->id;?>"><?php echo $value->title;?></a></h5>
                        <?php echo substr($value->description,0,150);?>
                    </li>
                    <?php endforeach;?>
                <span class="pull-right"><p><a href="<?php echo base_url('main/newsList');?>">All News</a></p></span>                 
                                   
                    </ul>
                    </div>
            </div>
            
          </div> <!-- /container -->
