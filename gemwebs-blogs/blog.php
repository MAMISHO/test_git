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
    <title>GemBlog</title>
    
    <!-- Styles Presonalizados de Gemwebs-->
           
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


    <!--Estilos propios del blog-->
    <style>
        <!--
        a, a:link, a:visited { color: #003366; text-decoration: none; }
        a:active, a:hover { color: #54622D; }

        body { margin: 0; padding: 0; }
        body, td
        {
            font-family: verdana, arial, sans-serif;
            color: black;
            font-size: 12px;
            font-weight: normal;
            line-height: 1.3em;
        }

        /*.logo { position: fixed; width: 100%; height: 43px; box-shadow: 0 2px 6px #aaa; background: #f0f0f0; border-bottom: 3px solid #bbbbbb; padding: 8px 0 8px 0; }
        .logo div.c { margin: 0 auto; width: 800px; }
        .logo div.d { margin: 0 0 0 300px; }
        .logo img { float: left; }
        .logo h1 { margin: 0 0 6px 0; padding: 4px 0 0 0; font-size: 17px; font-weight: normal; }*/

        #wrapper { width: 1000px; margin: 0 auto; padding: 62px 0 0 0; border-left: 2px solid #bbbbbb; border-right: 2px solid #bbbbbb; border-bottom: 1px solid #bbbbbb; box-shadow: 0 6px 12px #c0c0c0; }
        #footer { width: 1000px; margin: 0 auto; text-align: center; padding: 10px; color: #999999; }

        .content h2 { margin: 0; padding: 8px 0; }

        .nav { border-bottom: 1px dashed #888888; background: #F3F4F5; padding: 5px; margin: 0 0 4px 0; font-size: 12px; }
        .content { padding: 6px; }

        .sidebar { width: 300px; float: right;  padding: 0; }
        .sidebar h3 { margin: 4px 0; padding: 3px; background: #2060A0; font-weight: normal; color: white; }

        .pagedata { float: left; width: 665px; padding: 0 10px 0 0; border-right: 1px dotted #888888; overflow: hidden; }

        input { border-radius: 3px; }
        input.text { background: #ffffff; border: 1px solid gray; }
        input.submit { background: #f0f0f0; border: 1px groove #808080; }
        input.submit:hover { background: #ffffff; cursor: pointer; }

        /* Customize cutenews CSS */
        .cn_search_form { padding: 4px; border: 1px solid #e0e0e0; border-radius: 4px; background: #f0f0f0; }
        .cn_search_form .cn_search_basic { width: 300px; padding: 4px; }

        .cutenews_found_news { font-size: 19px; font-family: Arial; text-decoration: underline; }
        .cn_search_body { margin: 0 0 16px 16px; }
        .cn_comm_textarea { width: 450px; height: 150px; }

        .cn_tag_item { display: inline-block; border-radius: 4px; border: 1px solid #c0c0c0; background: #fffaf0; padding: 4px; }
        .cn_tag_item:hover { background: #f0f0f0; color: black; }
        .cn_tag_item.cn_tag_selected { background: #ffffff; color: black; }

        .cn_search_hl { font-weight: bold; color: #008; }
        .blocking_posting_comment, .cn_error_comment{ font-weight: bold; color: #F00;}
        //-->
    </style>
    <script>
        window.onload=function()
        {
            var edt_comm_mode=document.getElementById('edt_comm_mode');
            if(edt_comm_mode!=null)
            {
                window.scrollTo(0,9999);
            }
        }
    </script>
</head>
<body>
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
                        <a class="pull-right" href="#"><img alt="" class="media-object" src="css/img/demo/thumbs/iphone-concept.jpg" width="64" height="64"></a>
                        <div class="media-body">
                          <h4 class="media-heading title-color">iPhone 6s Concept</h4>
                          Quisque eleifend nulla euismod accumsan iaculis. Donec id luctus lorem. Nullam pellentesque, ante quis.
                        </div>
                      </li>
                      <li class="media">
                        <a class="pull-right" href="#"><img alt="" class="media-object" src="css/img/demo/thumbs/lords.jpg" width="64" height="64"></a>
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
                  <a href="index.html"><img src="css/img/theme/logo.png" width="185" height="54" alt="SmartON Logo"></a>
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
                  </li>
                        <li ><a href="services-alternative.html" class="has-submenu">Servicios</a>
                        </li>
                  <li><a href="portfolio-2-cols-with-toggled-text.html" class="has-submenu">Portafolio</a>
                  </li>
                  <li><a href="blog-grid.html" class="has-submenu">Formaci&oacute;n</a>
                  </li>                
                            <li><a href="blog-image-medium.html" class="has-submenu">Blog</a>                
                            </li>
                            <li><a href="about-us-alternative.html" class="has-submenu">Qui&eacute;nes Somos</a>
                            <li><a href="contact-split.html" class="has-submenu">Contacto</a>
                            </li>
                </ul>
            </div>
                   
          <div class="top-search hidden-xs hidden-sm"> 
            <!-- Top Search --> 
                      
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
                                                            
          </div>
        <!-- /Top Search --> 

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
    
        <div class="page-header light-header">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title-color page-title">Blog</h1>
                    </div>
                    <div class="col-md-6">
                            
                        <ol class="breadcrumb">
                            <li><a class="disabled has-submenu" href="index.html">Principal</a></li>
                            <li>Blog</li>
                            
                        </ol>
                    
                    </div>            
                </div>
            </div>
            
        </div>

    </div>
<!-- /Container Tile & Breadcrumbs --> 

    <!--<div class="logo">
        <div class="c">
            <img src="<?php echo getoption('http_script_dir'); ?>/skins/images/cutenews-logo.png"/>
            <div class="d">
                <h1>Put here your title</h1>
                <div>and this is your description</div>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>-->

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

        <div class="content">

            <!-- MAIN CONTENT, FIRST -->
            <div class="pagedata">
                <?php

                /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                Here we decide what page to include
                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
                if ($_GET['search'])
                {
                    include ("search.php");
                }
                elseif ($_GET['do'] == 'archives')
                {
                    include ("show_archives.php");
                }
                elseif ($_GET['do'] == "stats")
                {
                    echo "You can download the stats addon and include it here to show how many news, comments ... you have"; // include("$path/stats.php");
                }
                else
                {
                    include ("show_news.php");
                }

                ?>
            </div>


            <!-- END MAIN CONTENT -->
            <div style="clear: both"></div>

        </div>
    </div>

    <div id="footer"> &copy; your site, put your footer and copyright here </div>


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
                <img src="css/img/theme/logo-pie.png" width="220" height="58" alt="SmartON Logo">
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

    <!-- PhotoMontage -->
    <script type="text/javascript" src="./css/js/themejs/jquery.montage.min.js"></script>
    
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