<?php
    
    require_once("core/init.php");

    // Play with settings --------------------------------------------------
    $pw = REQ('pw');

    if ($pw['PHP_SELF']) $PHP_SELF = $pw['PHP_SELF'];
    if ($pw['template']) $template = $pw['template'];

    if ($pw['start_from']) $start_from = $pw['start_from'];
    if ($pw['number']) $number = $pw['number'];
    if ($pw['archive']) $archive = $pw['archive'];
    if ($pw['category']) $category = $pw['category'];
    if ($pw['ucat']) $ucat = $pw['ucat'];
    if ($pw['sortby']) $sortby = $pw['sortby'];
    if ($pw['dir']) $dir = $pw['dir'];
    if ($pw['page_alias']) $page_alias = $pw['page_alias'];
    if ($pw['tag']) $page_alias = $pw['tag'];
    if ($pw['user_by']) $user_by = $pw['user_by'];

    if ($pw['static']) $static = $pw['static'];
    if ($pw['reverse']) $reverse = $pw['reverse'];
    if ($pw['only_active']) $only_active = $pw['only_active'];
    if ($pw['no_prev']) $no_prev = $pw['no_prev'];
    if ($pw['no_next']) $no_next = $pw['no_next'];
    // ---------------------------------------------------------------------

    if ($_GET['do'] == "rss") include("rss.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Meta -->
	<meta name="description" content="SmartOn is a complete responsive, retina-ready and multipurpose theme." />
	<meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
	<meta name="author" content="FourGrafx">
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="3 days" />
	<title>SmartON - Premium Multipurpose HTML5/CSS3 Theme - FourGrafx</title>


    <!-- Styles -->
           
		<!-- Bootstrap core CSS -->
		<link href="./css/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Revolution Slider CSS -->       
		<link href="./css/css/themecss/revolution-slider.css" rel="stylesheet">
           
		<!-- Lightbox CSS -->       
    	<link href="./css/css/themecss/lightbox.css" rel="stylesheet">
    	
    	<!-- Animate CSS -->       
    	<link href="./css/css/themecss/animate.css" rel="stylesheet">
       
		<!-- Theme CSS -->
  		<link href="./css/css/smarton.css" rel="stylesheet">
        
        <!-- Color CSS -->
  		<link href="./css/css/colors/color-default.css" rel="stylesheet">

   
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
    
  </head>

  <body>

<!-- Page Main Wrapper -->
<div class="page-wrapper">
  
<!-- Slide Top Panel Container -->
<div class="slide-pannel-wrapper">

  <div id="slide-panel">
    <div class="container">
        <div class="row">
              <div class="col-sm-6 col-md-6">
                  <div class="blank-spacer padding-xsmall"></div>
                  <h3 class="color-white">Nice Sliding Panel</h3>
                    <img alt="" class="img-rounded alignleft" src="./css/img/theme/who-thumb.jpg"><p><strong>Sliding Panel</strong> can be filled with any html content. The Boostrap Grid can be used to create the necesary columns and rows. It supports any element provided in this theme starting from typography elements, videos and images gallery and go all the way to complex elements.</p>
                    
                    <p class="lead margin-top20">We hope you enjoy it.</p>
          <div class="btn-group">
            <a class="btn btn-primary btn-border">Read More<i class="fa fa-share fa-margin-left"></i></a>
            <a class="btn btn-default btn-border">Order SmartOn<i class="fa fa-shopping-cart fa-margin-left"></i></a>
          </div>
                    <div class="blank-spacer padding-xsmall"></div>
                </div>
              <div class="col-sm-6 col-md-6">
                  <div class="blank-spacer padding-xsmall"></div>
                  <h3 class="color-white">Contact Us</h3>
          <form class="clean-form dark-form" role="form">
                    <div class="row">
                      <div class="col-md-6">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputName">Name</label>
                  <input type="email" class="form-control" id="exampleInputName" placeholder="Enter your name">
                </div>
                        </div>
                      <div class="col-md-6">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail">Email</label>
                  <input type="password" class="form-control" id="exampleInputEmail" placeholder="Enter email">
                </div>
                        </div>                        
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                </div>
                        </div>                     
                    </div>
            <button type="submit" class="btn btn-default btn-border">Sign in</button>
          </form>
                  <div class="blank-spacer padding-xsmall"></div>
                </div>
            </div>    
        </div>  
    </div>
  <div class="slide-btn-wrapper"><a href="#" class="slide-panel-btn"></a></div>
      
</div>
<!-- /Slide Top Panel Container -->

<!-- Header Container -->
<div class="header-wrapper">

  <!-- Header Top Container -->
    <div class="header-top">
    
    <div class="container"> <!-- Container -->
 
    <div class="row"><!-- Row-->
        
          <div class="col-md-6">
                    
              <div class="top-menu-left"><!-- Top Menu Left -->
                  <ul class="list-inline">
            <li>
              <div class="top-cart">
                    
                <div class="toggle-container">
                    <!--<a class="toggle-link" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a>-->
                                    
                    <div class="togglebox">

                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-right" href="#"><img alt="" class="media-object" src="./css/img/demo/thumbs/iphone-concept.jpg" width="64" height="64"></a>
                        <div class="media-body">
                          <h4 class="media-heading title-color">iPhone 6s Concept</h4>
                          Quisque eleifend nulla euismod accumsan iaculis. Donec id luctus lorem. Nullam pellentesque, ante quis.
                        </div>
                      </li>
                      <li class="media">
                        <a class="pull-right" href="#"><img alt="" class="media-object" src="./css/img/demo/thumbs/lords.jpg" width="64" height="64"></a>
                        <div class="media-body">
                          <h4 class="media-heading title-color">Two Towers</h4>
                          Aliquam erat volutpat. Quisque hendrerit nibh ac ligula imperdiet mattis. Praesent consectetur, sem tempor. 
                        </div>
                      </li>                                                        
                    </ul>
                    <div class="clearfix"></div>
                                        <h4><strong>Subtotal:</strong> <small>2 items, Total of $856</small></h4>
                                        <div class="btn-group btn-group-sm">
                          <button type="button" class="btn btn-primary">View Cart <i class="fa fa-angle-right fa-margin-left"></i></button>
                        <button type="button" class="btn btn-primary">Checkout <i class="fa fa-angle-right fa-margin-left"></i></button>
                      </div>                                      
                  </div>
                                    
                </div>

              </div>
                        </li>
                        <li>
              <div class="top-login">                           
                
                  <!--<a  href="#login" data-toggle="modal" class="toggle-link"><i class="fa fa-user"></i> Login</a>-->
                  <!-- modal content -->
                  <div id="login" class="modal fade" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" >
                      <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>
                                                <h3 class="modal-title title-color" id="myModalLabel"><i class="fa fa-user"></i> User Login</h3>
                            </div>
                            <div class="modal-body">
                          <form role="form">
                              <div class="form-group input-group">                                                        
                                                          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                              </div>
                              <div class="form-group input-group">                                                        
                                                          <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                              </div>
                                                        <div class="form-group">
                              <div class="checkbox">
                                  <label><input type="checkbox"> Remeber Me!</label> | <a href="#">Lost Password?</a>
                              </div>
                              </div>
                              <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-sm">Sign in</button>
                            </div>
                          </form>
                            </div>

                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

              </div> 
                        </li>
                        <li>
              <div class="top-language">
                
                <div class="toggle-container">
                    <a class="toggle-link" href="#"><i class="fa fa-globe"></i> Language</a>
                    <div class="togglebox">
                    <ul class="language-menu">
                      <li class="active"><a href="#">Espa&ntilde;ol</a></li>
                      <li><a href="#">English</a></li>
                    </ul>
                                    </div>
                </div>
              </div>  
                        
                        </li>                
                  </ul>
                </div><!-- /Top Menu Left -->
      
            </div>
            
          <div class="col-md-6">
      
              <div class="top-menu-right"><!-- Top Menu right -->
            
        <ul class="top-social list-inline">
          <li><a class="tooltip-on" title="Facebook" href="http://www.facebook.com"><div class="icon-wrapper icon-border-round"><i class="fa fa-facebook"></i></div></a></li>
                    <li><a class="tooltip-on" title="Twitter" href="http://www.twitter.com"><div class="icon-wrapper icon-border-round"><i class="fa fa-twitter"></i></div></a></li>
                    <li><a class="tooltip-on" title="Google Plus" href="http://www.google.com"><div class="icon-wrapper icon-border-round"><i class="fa fa-google-plus"></i></div></a></li>
                    <li><a class="tooltip-on" title="Linkedin" href="http://www.twitter.com"><div class="icon-wrapper icon-border-round"><i class="fa fa-linkedin"></i></div></a></li>
                    <li><a class="tooltip-on" title="Pinterest" href="http://www.twitter.com"><div class="icon-wrapper icon-border-round"><i class="fa fa-pinterest"></i></div></a></li>
                    <li><a class="tooltip-on" title="RSS" href="http://www.twitter.com"><div class="icon-wrapper icon-border-round"><i class="fa fa-rss"></i></div></a></li>
        </ul>
                
                </div><!-- /Top Menu right -->
            
            </div>
            
    </div> <!-- /Row-->
     
  </div> <!-- /Container -->

  </div>
    <!-- /Header Top Container -->

  <!-- Header Middle Container -->
    <div class="header-middle">
    
    <div class="container"> <!-- Container -->
  
    <div class="row"><!-- Row-->
        
          <div class="col-md-8">
                        
              <div class="logo">                
                  <a href="index.html"><img src="./css/img/theme/logo.png" width="185" height="54" alt="SmartON Logo"></a>
                </div>
            
      </div>
            
          <div class="col-md-4  hidden-xs">
            
              <div class="contact-info">
          <ul class="fa-ul list-inline">
            <li><i class="fa-li fa fa-map-marker"></i>First St, New York</li>
            <li><i class="fa-li fa fa-phone"></i>+4-0544-042-442</li>
            <li><i class="fa-li fa fa-envelope"></i>office@fourgrafx.com</li>
            <li><i class="fa-li fa fa-clock-o"></i>Mon. - Fri. 09:00 - 18:00</li>
          </ul>
        </div>
                
            </div>
            
    </div><!-- /Row-->
     
  </div> <!-- /Container -->

  </div>
  <!-- /Header Middle Container -->

  <!-- Header Bottom Container -->
    <div class="header-bottom" >
    
    <div class="container"> <!-- Container -->
 
    <div class="row"><!-- Row-->
        
      <div class="col-md-12">

      <!-- Navigation -->
            <div class="main-navigation">
        <a id="menu-button"></a>
        <ul id="main-menu" class="sm sm-default">
          <li><a class="has-submenu" href="index.html">Principal</a>
            <!--<ul >             
                            <li><a href="index.html">Classic (default)</a></li>
                            <li><a href="index-parallax.html">Parallax</a></li>
              <li><a href="index-shop.html">Shop Page</a></li>
              <li><a href="index-landing.html">Landing Page</a></li>
                            <li><a href="index-converting.html">Converting Page</a></li>
            </ul>-->
          </li>
                <li ><a href="services-alternative.html" class="has-submenu">Servicios</a>
            <!--<ul >
              <li><a>Elements</a>
                <ul>
                                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="buttons-progress.html">Buttons &amp; Progress Bars</a></li>
                  <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="info-boxes.html">Info Boxes</a></li>
                  <li><a href="lists.html">Lists</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="labels.html">Labels &amp; Badges</a></li>
                                    <li><a href="tooltips.html">Tooltips &amp; Popover</a></li>
                                    <li><a href="separators.html">Separators &amp; Dividers</a></li>
                </ul>                            
                            </li>
                            <li><a href="animation.html">Animation</a></li>
              <li><a href="icons.html">Icons</a></li>
                            <li><a href="images-lightbox.html">Lightbox &amp; Images</a></li>
                            <li><a href="videos.html">Videos</a></li>
              <li><a>Tables</a>
                <ul>
                                  <li><a href="pricing-tables.html">Pricing Tables</a></li>
                  <li><a href="standard-tables.html">Standard Tables</a></li>
                </ul>                             
                            </li>
                            <li><a href="forms.html">Forms</a></li>
                            <li><a href="useful-blocks.html">Useful Blocks</a></li>
            </ul>-->
          </li>
          <li><a href="portfolio-2-cols-with-toggled-text.html" class="has-submenu">Portafolio</a>
            <!--<ul >
              <li><a class="disabled has-submenu">Header Styles</a>
                              <ul>
                  <li><a href="header-top-dark.html">Dark Header (default)</a></li>
                  <li><a href="header-top-light.html">Light Header</a></li>
                                    <li><a href="header-top-dark-center.html">Centered Header (dark)</a></li>
                  <li><a href="header-top-light-center.html">Centered Header (light)</a></li>
                                    <li><a href="header-top-none.html">No Header</a></li>
                                    <li><a href="header-top-none-center.html">Centered No Header</a></li>
                </ul>
                            </li>
              <li><a class="disabled has-submenu">Footer Styles</a>
                              <ul>
                  <li><a href="footer-default.html#footer-view">Wide (default)</a></li>
                  <li><a href="footer-boxed.html#footer-view">Boxed Footer</a></li>
                                    <li><a href="footer-wide-small.html#footer-view">Small Footer Wide</a></li>
                  <li><a href="footer-boxed-small.html#footer-view">Small Footer Boxed</a></li>
                                    <li><a href="footer-none.html#footer-view">No Footer</a></li>
                </ul>
                            </li>
              <li><a class="disabled has-submenu">Menu Styles</a>
                              <ul>
                                  <li><a href="menu-default.html">Default Style</a></li>
                                    <li><a href="menu-icons.html">Icons Menu</a></li>                                    
                                    <li><a href="menu-full-width.html">Full Width Style</a></li>
                  <li><a href="menu-tab.html">Tab Menu</a></li>
                                    <li><a href="menu-radius.html">Radius Menu</a></li>
                                    <li><a href="menu-separator.html">Separator Style</a></li>
                </ul>
                            </li>
              <li><a class="disabled has-submenu">Inner Pages - Headers</a>
                              <ul>
                                  <li><a href="inner-header-default.html">Default</a></li>
                                    <li><a href="inner-header-parallax.html">Parallax Inner Header</a></li>
                  <li><a href="inner-header-light.html">Light Inner Header</a></li>
                                    <li><a href="inner-header-static.html">Static Image Header</a></li>
                                    <li><a href="inner-header-fancy.html">Fancy Inner Header</a></li>
                </ul>
                            </li>                            
            </ul>-->
          </li>
          <li><a href="blog-grid.html" class="has-submenu">Formaci&oacute;n</a>
            <!--<ul >
              <li><a class="disabled has-submenu">About Us</a>
                              <ul>
                                  <li><a href="about-us.html">About Us (default)</a></li>
                                    <li><a href="about-us-alternative.html">About Us Alternative</a></li>
                </ul>
                            </li>
              <li><a class="disabled has-submenu">Our Team</a>
                              <ul>
                                  <li><a href="our-team.html">Our Team (default)</a></li>
                                    <li><a href="our-team-header.html">Our Team Special Header</a></li>
                </ul>                              
                            </li>
              <li><a class="disabled has-submenu">Services</a>
                              <ul>
                                  <li><a href="services.html">Services (default)</a></li>
                                    <li><a href="services-alternative.html">Services Alternative</a></li>
                                    <li><a href="services-header.html">Services Special Header</a></li>
                </ul>                              
                            </li>
              <li><a href="faq.html">F.A.Q.</a></li>                           
                            <li><a href="coming-soon.html">Comming Soon</a></li>
                            <li><a href="results.html">Search Results</a></li>
              <li><a href="404.html">Custom 404</a></li>            </ul>-->
          </li>
          <!--<li><a class="disabled has-submenu">Portfolio</a>
            <ul >
              <li><a class="disabled has-submenu">Portoflio 1 Column</a>
                              <ul>
                                  <li><a href="portfolio-1-cols-with-text.html">Items With Text</a></li>
                                  <li><a href="portfolio-1-cols-with-toggled-text.html">Items With Toggled Text</a></li>
                                    <li><a href="portfolio-1-cols-without-text.html">Items Without Text</a></li>
                </ul>
                            </li>
              <li><a class="disabled has-submenu">Portfolio 2 Columns</a>
                              <ul>
                                  <li><a href="portfolio-2-cols-with-text.html">Items With Text</a></li>
                                  <li><a href="portfolio-2-cols-with-toggled-text.html">Items With Toggled Text</a></li>
                                    <li><a href="portfolio-2-cols-without-text.html">Items Without Text</a></li>
                </ul>
                            </li>
              <li><a class="disabled has-submenu">Portfolio 3 Columns</a>
                              <ul>
                                  <li><a href="portfolio-3-cols-with-text.html">Items With Text</a></li>
                                  <li><a href="portfolio-3-cols-with-toggled-text.html">Items With Toggled Text</a></li>
                                    <li><a href="portfolio-3-cols-without-text.html">Items Without Text</a></li>
                </ul>
                            </li>
                            <li><a class="disabled has-submenu">Portfolio 4 Columns</a>
                              <ul>
                                  <li><a href="portfolio-4-cols-with-text.html">Items With Text</a></li>
                            <li><a href="portfolio-4-cols-with-toggled-text.html">Items With Toggled Text</a></li>
                            <li><a href="portfolio-4-cols-without-text.html">Items Without Text</a></li>
                </ul>
                            </li>
                            <li><a href="portfolio-mansonry-cols.html">Portfolio Mansonry</a></li>                            
                            <li><a class="disabled has-submenu">Portfolio Mixed Columns</a>
                              <ul>
                                  <li><a href="portfolio-mixed-cols-with-text.html">Items With Text</a></li>
                            <li><a href="portfolio-mixed-cols-with-toggled-text.html">Items With Toggled Text</a></li>
                            <li><a href="portfolio-mixed-cols-without-text.html">Items Without Text</a></li>
                </ul>
                            </li>                            
                            <li><a class="disabled has-submenu">Portfolio Sidebar</a>
                              <ul>
                                  <li><a href="portfolio-sidebar-left.html">Portfolio Sidebar Left</a></li>
                                    <li><a href="portfolio-sidebar-right.html">Portfolio Sidebar Right</a></li>
                </ul>
                            </li>
                            <li><a class="disabled has-submenu">Portfolio Single Item</a>
                              <ul>
                                  <li><a class="disabled has-submenu">Full Width</a>
                                    <ul>
                      <li><a href="portfolio-single-full-slider.html">Slider</a></li>
                      <li><a href="portfolio-single-full-images.html">Images</a></li>
                      <li><a href="portfolio-single-full-gallery.html">Gallery</a></li>
                      <li><a href="portfolio-single-full-video.html">Video</a></li>
                    </ul>                     
                                  </li>
                                  <li><a class="disabled has-submenu">Split Half</a>
                                    <ul>
                      <li><a href="portfolio-single-split-slider.html">Slider</a></li>
                      <li><a href="portfolio-single-split-gallery.html">Gallery</a></li>
                      <li><a href="portfolio-single-split-video.html">Video</a></li>
                    </ul> 
                                  </li>
                </ul>
                            </li>
            </ul>
          </li>
          <li><a class="disabled has-submenu">Shop</a>
            <ul >
              <li><a href="index-shop.html">Home Shop Page</a></li>
                            <li><a href="shop-default.html">Interior Shop Page</a></li>
                            <li><a href="shop-item.html">Product Page</a></li>
                            <li><a href="shop-checkout.html">Checkout</a></li>
            </ul>
          </li>-->                     
                    <li><a href="blog-image-medium.html" class="has-submenu">Blog</a>
                      <!--<ul >
              <li><a class="disabled has-submenu">Blog Image</a>
                              <ul>
                                  <li><a href="blog-image-big.html">Blog Big Image</a></li>
                                    <li><a href="blog-image-medium.html">Blog Medium Image</a></li>
                  <li><a href="blog-image-small.html">Blog Small Image</a></li>
                </ul> 
                            </li>
                            <li><a class="disabled has-submenu">Blog Double Sidebar</a>
                              <ul>
                                  <li><a href="blog-double-left.html">Blog Double Left</a></li>
                                    <li><a href="blog-double-right.html">Blog Double Right</a></li>
                </ul>
                            </li>
                            <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                            <li><a href="blog-timeline.html">Blog Timeline Layout</a></li>
                            <li><a class="disabled has-submenu">Blog Single Article</a>
                              <ul>
                                  <li><a href="blog-single.html">Blog Single Article Sidebar</a></li>
                                    <li><a href="blog-single-nosidebar.html">Blog Single Article No Sidebar</a></li>
                </ul>
                            </li>
            </ul>-->                    
                    </li>
                    <li><a href="about-us-alternative.html" class="has-submenu">Qui&eacute;nes Somos</a>
                    <li><a href="contact-split.html" class="has-submenu">Contacto</a>
                      <!--<ul >
              <li><a href="contact.html">Contact Big Map (default)</a></li>
                            <li><a href="contact.php">Contact Working Form</a></li>
                            <li><a href="contact-noheader.html">Contact No Header </a></li>
              <li><a href="contact-split.html">Contact Split Half</a></li>
              <li><a href="contact-sidebar.html">Contact With Sidebar</a></li>
            </ul>-->
                    </li>
        </ul>
            </div>
                   
        <div class="top-search hidden-xs hidden-sm"> <!-- Top Search --> 
                    
          <div class="toggle-container">
              <a class="toggle-link" href="#"><i class="fa fa-search"></i></a>
              <div class="togglebox">
              <form role="form">
                <div class="input-group">
                                  <span class="btn btn-primary input-group-addon"><i class="fa fa-search"></i></span>
                  <input class="form-control" type="text" placeholder="Search">
                </div>
              </form>
            </div>
          </div>
                                                          
        </div><!-- /Top Search --> 

      <!-- /Navigation -->

			</div> 
                     
		</div> <!-- /Row --> 
            
	</div> <!-- /Container -->
    
    </div>   
	<!-- /Header Bottom Container -->

</div>
<!-- /Header Container -->

<!-- Container Tile & Breadcrumbs --> 
	<div class="fullsize"> 
    
    	<div class="page-header">
		
        	<div class="container">
            	<div class="row">
            		<div class="col-md-6">
						<h1 class="page-title">Blog - <small>with medium image</small></h1>
                    </div>
                    <div class="col-md-6">
                            
						<ol class="breadcrumb">
  							<li><a class="disabled has-submenu" href="index.html">Home</a></li>
                            <li>Blog</li>
                            <li>Blog Medium Image</li>
						</ol>
                    
                    </div>            
            	</div>
            </div>
            
		</div>


	</div>
<!-- /Container Tile & Breadcrumbs --> 
  
<!-- Main Container -->
<div class="main-wrapper">

	<div class="container container-inner">    
       
		<div class="row">

			<div class="col-md-9">
			         <!-- contenido del blog-->
               <div class="blog-post post-format-standard medium-post">
                          <div id="wrapper">

                          <div class="nav">
                              <div style="float: right"><a href="<?php echo getoption('http_script_dir'); ?>/rss.php"><img src="<?php echo getoption('http_script_dir'); ?>/skins/images/rss_icon.gif" alt="RSS"></a></div>
                              <b>Navigation</b>:
                              <a href="<?php echo PHP_SELF; ?>">Main page</a> |
                              <a href="<?php echo PHP_SELF; ?>?do=archives">Archives</a> |
                              <a href="<?php echo PHP_SELF; ?>?do=rss">RSS</a> |
                              <a href="<?php echo PHP_SELF; ?>?do=stats">Stats</a> |
                              <a href="#">Link 1</a> |
                              <a href="#">Link 2</a> | ...
                          </div>



                          <!--<div class="col-md-6 col-sm-6">
                          <div class="post-format"></div>
                          <div class="post-content">-->

                              <!-- MAIN CONTENT, FIRST -->
                              <div class="pagedata">
                                  <?php

                                  /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                  Here we decide what page to include
                                  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
                                  if ($_GET['search'])
                                  {
                                      include ("search.php");
                                      echo "Se incluye aqui";
                                  }
                                  elseif ($_GET['do'] == 'archives')
                                  {
                                      include ("show_archives.php");
                                      echo "Se incluye aqui";
                                  }
                                  elseif ($_GET['do'] == "stats")
                                  {
                                    echo "Se incluye aqui";
                                      echo "You can download the stats addon and include it here to show how many news, comments ... you have"; // include("$path/stats.php");
                                  }
                                  else
                                  {
                                      include ("show_news.php");
                                  }

                                  ?>
                              </div>


                              <!-- END MAIN CONTENT -->
                              <!--<div style="clear: both"></div>-->

                          <!--</div>
                        </div>-->
                      </div>
               </div>
               <!-- fin del contenido del blog-->
            	<!-- medium blog post -->
                <div class="blog-post post-format-standard medium-post">
				
                	<div class="row">
                    	
                        <div class="col-md-6 col-sm-6">
                      		<div class="post-media">
                            <div class="image-overlay">
            									<img alt="" src="./css/img/demo/blog/1-medium.jpg" >
                                <div class="overlay-fade">
                                      <a href="blog-single.html" ><i class="icon-overlay fa fa-link"></i></a>
              									</div>
          								  </div>
                      		</div>                        
                        </div>
                        <!--Contenido del blog-->

                        <!--Fin del contenido del blog-->




                        <div class="col-md-6 col-sm-6">
                      	 <div class="post-format"></div>
                          		<div class="post-info">
                        				  <h3 class="post-title"><a href="#">This is a standard simple post</a></h3>
                            			<ul class="list-inline post-meta-info">
                  									<li class="meta-author"><a href="">webmastert</a></li>
                  									<li class="meta-date"><a href="">16/11/2013</a></li>
                  									<li class="meta-comments"><a href="">16 comments</a></li>
                                    <li class="meta-tags"><a href="">news</a>, <a href="">design</a></li>
                								  </ul>
                          		</div>
      							<div class="post-content">
      								<p>Nulla sapien lorem, <strong>lobortis non dui vitae</strong>, gravida imperdiet velit. Vivamus nec bibendum odio. Smart at adipiscing leo, eget sodales purus. Nullam ante tellus, tempus vitae est ut, smart rhoncus ligula. Donec molestie arcu in nisl luctus volutpat. Nullam porttitor metus sapien, sit amet suscipit massa laoreet eu.</p>
      							</div>                    		                       
                        </div>                  
                    </div>
					<div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-default btn-sm read-more pull-right" href="blog-single.html">Read More<i class="fa fa-margin-left fa-arrow-circle-right"></i></a>
                        </div>                    
                    </div>
                
                </div>
                <!-- /medium blog post -->

            	<!-- medium blog post -->  
                <div class="blog-post post-format-video medium-post">

					<div class="row">
                
                		<div class="col-md-6 col-sm-6">
                    		<div class="post-media">
            					<div class="flex-video">
									<iframe src="http://player.vimeo.com/video/35434264?color=ffffff" width="1279" height="720" ></iframe>
                				</div>				
                    		</div>                    
                    	</div>
                    
                   		<div class="col-md-6 col-sm-6">
                			<div class="post-format"></div>
                    		<div class="post-info">
                				<h3 class="post-title"><a href="#">Video in a blog article it's never been so easy</a></h3>
                    			<ul class="list-inline post-meta-info">
									<li class="meta-author"><a href="">webmastert</a></li>
									<li class="meta-date"><a href="">23/11/2013</a></li>
									<li class="meta-comments"><a href="">12 comments</a></li>
                        			<li class="meta-tags"><a href="">marketing</a>, <a href="">design</a></li>
								</ul>
                    		</div>                    
							<div class="post-content">
								<p>Nulla sapien lorem, <strong>lobortis non dui vitae</strong>, gravida imperdiet velit. Vivamus nec bibendum odio. Smart at adipiscing leo, eget sodales purus. Nullam ante tellus, tempus vitae est ut, smart rhoncus ligula. Donec molestie arcu in nisl luctus volutpat. Nullam porttitor metus sapien, sit amet suscipit massa laoreet eu.</p>
							</div>                 
                    	</div>
                
                	</div>

					<div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-default btn-sm read-more pull-right" href="blog-single.html">Read More<i class="fa fa-margin-left fa-arrow-circle-right"></i></a>
                        </div>                    
                    </div>

                </div>
                <!-- /medium blog post -->

            	<!-- medium blog post -->
                <div class="blog-post post-format-image medium-post">

					<div class="row">
                    
                    	<div class="col-md-6 col-sm-6">
                    		<div class="post-media">
                    			<div class="image-overlay">
									<img alt="" src="./css/img/demo/blog/2-medium.jpg" >
                            		<div class="overlay-fade">
                            			<a href="blog-single.html" ><i class="icon-overlay fa fa-link"></i></a>
									</div>
								</div>
                    		</div>
                        </div>
                        <div class="col-md-6 col-sm-6">
							<div class="post-format"></div>
                    		<div class="post-info">
                				<h3 class="post-title"><a href="#">Simple article with single image media.</a></h3>
                    			<ul class="list-inline post-meta-info">
									<li class="meta-author"><a href="">webmastert</a></li>
									<li class="meta-date"><a href="">06/12/2013</a></li>
									<li class="meta-comments"><a href="">4 commentst</a></li>
                        			<li class="meta-tags"><a href="">illustrations</a>, <a href="">design</a></li>
								</ul>
                    		</div>
							<div class="post-content">
								<p>Nulla sapien lorem, <strong>lobortis non dui vitae</strong>, gravida imperdiet velit. Vivamus nec bibendum odio. Smart at adipiscing leo, eget sodales purus. Nullam ante tellus, tempus vitae est ut, smart rhoncus ligula. Donec molestie arcu in nisl luctus volutpat. Nullam porttitor metus sapien, sit amet suscipit massa laoreet eu.</p>
							</div>
                        </div>
                    
                    </div>
                    
					<div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-default btn-sm read-more pull-right" href="blog-single.html">Read More<i class="fa fa-margin-left fa-arrow-circle-right"></i></a>
                        </div>                    
                    </div>
                    
                </div>
                <!-- /medium blog post -->

            	<!-- medium blog post -->
                <div class="blog-post post-format-gallery medium-post">

					<div class="row">
                    
                    	<div class="col-md-6 col-sm-6">
							<div class="post-media">
								<div class="simple-slider">
  									<ul class="slides">
    									<li><img alt="" class="img-responsive" src="./css/img/demo/blog/3-medium.jpg"></li>
    									<li><img alt="" class="img-responsive" src="./css/img/demo/blog/4-medium.jpg"></li>
    									<li><img alt="" class="img-responsive" src="./css/img/demo/blog/5-medium.jpg"></li>
  									</ul>
								</div>
                    		</div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                			<div class="post-format"></div>
                    		<div class="post-info">
                				<h3 class="post-title"><a href="#">Gallery media used in the preview of the article.</a></h3>
                    			<ul class="list-inline post-meta-info">
									<li class="meta-author"><a href="">webmastert</a></li>
									<li class="meta-date"><a href="">14/12/2013</a></li>
									<li class="meta-comments"><a href="">21 commentst</a></li>
                        			<li class="meta-tags"><a href="">news</a>, <a href="">development</a>, <a href="">design</a></li>
								</ul>
                    		</div>
							<div class="post-content">
								<p>Nulla sapien lorem, <strong>lobortis non dui vitae</strong>, gravida imperdiet velit. Vivamus nec bibendum odio. Smart at adipiscing leo, eget sodales purus. Nullam ante tellus, tempus vitae est ut, smart rhoncus ligula. Donec molestie arcu in nisl luctus volutpat. Nullam porttitor metus sapien, sit amet suscipit massa laoreet eu.</p>
							</div>
                        </div>
                        
                    </div>

					<div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-default btn-sm read-more pull-right" href="blog-single.html">Read More<i class="fa fa-margin-left fa-arrow-circle-right"></i></a>
                        </div>                    
                    </div>

                </div>
                <!-- /medium blog post -->

            	<!-- medium blog post -->
                <div class="blog-post post-format-link">
                	<div class="post-format"></div>
                    <div class="post-info">
                		<h3 class="post-title"><a href="#">How about using link post format with no post content or any media and just simple title link?</a></h3>
                    	<ul class="list-inline post-meta-info">
							<li class="meta-author"><a href="">webmastert</a></li>
							<li class="meta-date"><a href="">25/12/2013</a></li>
							<li class="meta-comments"><a href="">19 commentst</a></li>
                        	<li class="meta-tags"><a href="">jQuery</a>, <a href="">PHP</a></li>
						</ul>
                    </div>
                </div>
                <!-- /medium blog post -->

				<!-- pagination -->
				<div class="text-center">
                	<ul class="pagination">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li  class="disabled"><a href="#">...</a></li>
						<li><a href="#">14</a></li>
						<li><a href="#">15</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul> 
                </div>           
				<!-- /pagination -->
                                
			</div>

			<div class="col-md-3">
            	<div class="sidebar">
                
                	<!-- sidebar widget -->
                	<div class="sidebar-widget animation fadeInUp">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
							</span>
							<input class="form-control" type="text">
						</div>
                    </div>
                    <!-- /sidebar widget -->  
                     
                	<!-- sidebar widget -->
                	<div class="sidebar-widget animation fadeInUp">
						<h4 class="widget-title"><span>Categories</span></h4>
						<ul class="fa-ul list-divider">
							<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Web Design <span>(6)</span></a></li>
							<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Development <span>(24)</span></a>
								<ul>
									<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>PHP <span>(8)</span></a></li>
									<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>jQuery <span>(11)</span></a></li>
									<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>HTML5 &amp; CSS3 <span>(5)</span></a></li>
								</ul>
							</li>
							<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Marketing <span>(17)</span></a></li>
                            <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>Special Offers <span>(3)</span></a></li>                            					
						</ul>                        
                    </div>
                    <!-- /sidebar widget --> 

                	<!-- sidebar widget -->
                	<div class="sidebar-widget animation fadeInUp">
						<!-- tabs top -->
                        <div class="tabs sidebar-tabs">
							<ul id="tab" class="nav nav-tabs">
								<li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
								<li><a href="#comments" data-toggle="tab">Comments</a></li>
							</ul>
							<div id="tab-content" class="tab-content">
								<div id="popular" class="tab-pane active in">
									<ul class="recent-posts">
                                    	<li class="clearfix">
											<div class="recent-post-image">
                                       	    	<img alt="" src="./css/img/demo/portfolio/08.jpg" width="400" height="300">
                                            </div>
                                            <div class="recent-post-content">
                                            	<div class="recent-post-title">
                                            		<a href="#">This is a standard post</a>
                                            	</div>
                                        		<div class="recent-post-meta">
                                       	    		<span class="meta-date">1 December 2013</span>
                                            	</div>                                                
                                            </div>
                                        </li>
                                    	<li class="clearfix">
											<div class="recent-post-image">
                       	    	    	    	<img alt="" src="./css/img/demo/portfolio/06.jpg" width="400" height="300">
                                            </div>
                                            <div class="recent-post-content">
                                            	<div class="recent-post-title">
                                            		<a href="#">Using video in a blog article it's quite easy</a>
                                            	</div>
                                        		<div class="recent-post-meta">
                                       	    		<span class="meta-date">23 November 2013</span>
                                            	</div>                                                
                                            </div>
                                        </li>
                                    	<li class="clearfix">
											<div class="recent-post-image">
                       	    	    	    	<img alt="" src="./css/img/demo/portfolio/10.jpg" width="400" height="300">
                                            </div>
                                            <div class="recent-post-content">
                                            	<div class="recent-post-title">
                                            		<a href="#">Gallery media used in the preview of the article.</a>
                                            	</div>
                                        		<div class="recent-post-meta">
                                       	    		<span class="meta-date">15 September 2013</span>
                                            	</div>                                                
                                            </div>
                                        </li>
                                    </ul>
								</div>
								<div id="comments" class="tab-pane">
									<ul class="recent-posts">
                                    	<li class="clearfix">
											<div class="recent-post-image">
                               	    	    	<img alt="" src="img/demo/team/team-member1-small.jpg" width="280" height="200">
                                            </div>
                                            <div class="recent-post-content">                                            	
                                            	<a class="meta-author" href="#">Brian Iorgsten</a> on                                          	
                                        		<div class="recent-post-meta">
                                       	    		<a href="#">Simple article with single image media.</a>
                                            	</div>                                                
                                            </div>
                                      </li>
                                    	<li class="clearfix">
											<div class="recent-post-image">
                       	    	    	    	<img alt="" src="./css/img/demo/team/team-member2-small.jpg" width="280" height="200">
                                            </div>
                                            <div class="recent-post-content">                                            	
                                            	<a class="meta-author" href="#">Bruce Dingeling</a> on                                          	
                                        		<div class="recent-post-meta">
                                       	    		<a href="#">Why not use quote in article preview?</a>
                                            	</div>                                                
                                            </div>
                                        </li>
                                    	<li class="clearfix">
											<div class="recent-post-image">
                       	    	    	    	<img alt="" src="./css/img/demo/team/team-member3-small.jpg" width="280" height="200">
                                            </div>
                                            <div class="recent-post-content">                                            	
                                            	<a class="meta-author" href="#">Carolyne Dones</a> on                                          	
                                        		<div class="recent-post-meta">
                                       	    		<a href="#">Gallery media used in the preview of the article.</a>
                                            	</div>                                                
                                            </div>
                                        </li>
                                    </ul>
								</div>
							</div>
						</div>
                        <!-- /tabs -->                        
                    </div>
                    <!-- /sidebar widget --> 

                	<!-- sidebar widget -->
                	<div class="sidebar-widget animation fadeInUp">
                    	<h4 class="widget-title"><span>Twitter Widget</span></h4>
                    	<div class="recent-tweets">
							<div class="tweet"></div>                  
                    	</div>
                    </div>
                    <!-- /sidebar widget --> 

                	<!-- sidebar widget -->
                	<div class="sidebar-widget animation fadeInUp">
                    	<h4 class="widget-title"><span>Tags</span></h4>
                        <div class="tags">
							<a href="#">Business</a> <a href="#">Clean</a> <a href="#">Gallery</a> <a href="#">HTML5</a> <a href="#">CSS3</a> <a href="#">dolor</a> <a href="#">Corporate</a> <a href="#">Responsive</a> <a href="#">jQuery</a> <a href="#">Portfolio</a> <a href="#">2013</a> <a href="#">Retina</a> <a href="#">Animation</a>
                    	</div>
                    </div>
                    <!-- /sidebar widget --> 

                	<!-- sidebar widget -->
                	<div class="sidebar-widget animation fadeInUp">
                    	<h4 class="widget-title"><span>Archives</span></h4>
						<ul class="fa-ul list-divider">
							<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>September 2013</a></li>
							<li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>October 2013</a></li>
                            <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>November 2013</a></li>
                            <li><a href=""><i class="fa-li fa fa-chevron-circle-right"></i>December 2013</a></li>                              					
						</ul>
                    </div>
                    <!-- /sidebar widget --> 

                                   
                </div>                    
			</div>

		</div>

	</div>

</div>
<!-- /Main Container -->


<!-- Footer Container -->
<div class="footer-wrapper">

  <!-- Footer Top Container -->
    <div class="footer-top">    
        <div class="map-overlay">
          <br />
          <br />
          <br />
        </div>
  </div>
  <!-- /Footer Top Container -->

  <!-- Footer Middle Container -->
    <div class="footer-middle">
    
    <div class="container"> <!-- Container -->

    <div class="row">
        
          <div class="col-md-3">
              <div class="footer-widget">
                <h3>Sobre GemWebs</h3>
                    <p class="lead">"<em>Empresa de desarrollo de software</em>"</p>
                  <p><strong>Equipo de desarrollo </strong>Especializado en las mejores tecnolog&iacute;as de software<strong>Servicios prestados</strong>Empresa que ofrece sercicios orientados al desarrollo de software</p>
            </div>
            </div>
            
            <div class="col-md-3">
              <div class="footer-widget">
                <h3>Contacto</h3>
                  <p>Para m&aacute; informaci&oacute;n
</p>
          <ul class="fa-ul">
              <li><i class="fa-li fa fa-map-marker"></i>Universidad Pablo de Olavide</li>
              <li><i class="fa-li fa fa-print"></i>(34) 666-666-666</li>
              <li><i class="fa-li fa fa-phone"></i>(34) 95-555-998-95</li>
              <li><i class="fa-li fa fa-envelope"></i>info@gemwebs.com</li>
          </ul>
            </div>
            </div>
            
            <div class="col-md-3">
              <div class="footer-widget">
                <h3>Sitios</h3>
                    <ul class="footer-custom-menu">
                      <li><a href="#">Sitio uno</a></li>
                        <li><a href="#">Sitio 2</a></li>
                        <li><a href="#">Sitio 3</a></li>
                        <li><a href="#">Sitio 4</a></li>
                    </ul>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="footer-widget">
                <h3>&uacute;ltimos Tweets</h3>
                    <div class="recent-tweets">
            <div class="tweet"></div>                  
                    </div>
              </div>
            </div>
            
    </div>
     
  </div> <!-- /Container -->

  </div>
  <!-- /Footer Middle Container -->

  <!-- Footer Bottom Container -->
    <div class="footer-bottom">
    
    <div class="fullsize container"> <!-- Container -->
    
      <div class="row">
          <div class="col-md-6">
              <div class="logo-bottom">
                <img src="./css/img/theme/logo-pie.png" width="220" height="58" alt="SmartON Logo">
                </div>
            </div>
            <div class="col-md-6">
            
        <ul class="footer-social list-inline">
          <li><a href="http://www.facebook.com"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-facebook"></i></div></a></li>
                    <li><a href="http://www.twitter.com"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-twitter"></i></div></a></li>
                    <li><a href="https://plus.google.com/?"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-google-plus"></i></div></a></li>
                    <li><a href="https://www.linkedin.com/"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-linkedin"></i></div></a></li>
                    <li><a href="http://www.pinterest.com/"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-pinterest"></i></div></a></li>
                    <li><a href="#rss"><div class="icon-wrapper icon-border-round fa-2x"><i class="fa fa-rss"></i></div></a></li>
        </ul>
            
            </div>
    </div>
        
        <div class="row">
        <div class="col-md-6 col-md-push-6">
        <ul class="footer-menu list-inline">
            <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
        </ul>
            </div>
        <div class="col-md-6 col-md-pull-6">
        <div class="copy-left">&copy; 2014 GemWebs Wordpress/Presatshop/HTML. Todos los derechs reservados</div>
      </div>
    </div>
     
  </div> <!-- /Container -->  

  </div>
  <!-- /Footer Bottom Container -->

</div>
<!-- /Footer Container -->

</div>  

<!-- Post Navigation -->
<div class="post-navigation">
  <a class="article-nav article-prev">

      <i class="nav-icon fa fa-angle-left"></i>
        <span class="nav-info-wrapper">
          <span class="nav-info">
              <span class="nav-info-title">Contenido Adicional izquierda</span>
            </span>
        </span>

    </a>
    <a class="article-nav article-next">

      <i class="nav-icon fa fa-angle-right"></i>
        <span class="nav-info-wrapper">
          <span class="nav-info">
              <span class="nav-info-title">Contenido adicional derecha</span>
            </span>
        </span>

    </a>
</div>
<!-- /Post Navigation -->

<!-- Back To Top -->
  <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<!-- /Back To Top -->

<!-- Preloader 
<div id="page-preloader"></div>
<!-- /Preloader -->

    <!-- Javascripts
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./css/js/bootstrap.min.js"></script>

    <!-- Main Navigation -->
	<script src="./css/js/themejs/jquery.smartmenus.js" type="text/javascript"></script>
    
	<!-- Parallax -->
	<script src="./css/js/themejs/jquery.stellar.js" type="text/javascript"></script>
	
	<!-- Animation Viewport -->
	<script src="./css/js/themejs/jquery.waypoints.min.js" type="text/javascript"></script>
    	
	<!-- Lightbox -->
	<script src="./css/js/themejs/jquery.lightbox.min.js" type="text/javascript"></script>
    
    <!-- include jQuery + carouFredSel plugin -->
	<script type="text/javascript" src="./css/js/themejs/jquery.carouFredSel-6.2.1-packed.js"></script>

	<!-- optionally include helper plugins -->
	<script type="text/javascript" src="./css/js/themejs/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="./css/js/themejs/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="./css/js/themejs/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="./css/js/themejs/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
    
    <!-- REVOLUTION Slider -->
	<script type="text/javascript" src="./css/js/revolutionjs/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="./css/js/revolutionjs/jquery.themepunch.revolution.min.js"></script>

    <!-- Flex Slider -->
	<script type="text/javascript" src="./css/js/themejs/jquery.flexslider.js"></script>

    <!-- Pie Chart -->
	<script src="./css/js/themejs/jquery.easypiechart.min.js"></script>
    
    <!-- tooltip-bootster -->
	<script src="./css/js/themejs/jquery.tooltipster.js" type="text/javascript"></script>
    
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;.js"></script>

    <!-- Timer -->
	<script type="text/javascript" src="./css/js/themejs/TimeCircles.js"></script>

    <!-- Twitter -->
	<script src="./css/js/themejs/tweetie.js" type="text/javascript"></script>

    <!-- Range Select -->
	<script src="./css/js/themejs/jquery.nouislider.min.js" type="text/javascript"></script>
    
    <!-- Load Scripts -->
	<script src="./css/js/themejs/application.js"></script>

  </body>
</html>