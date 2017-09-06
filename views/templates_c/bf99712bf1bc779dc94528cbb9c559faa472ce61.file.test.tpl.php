<?php /* Smarty version Smarty-3.1.16, created on 2017-03-01 06:02:46
         compiled from "\xampp\htdocs\brainak\\views\templates\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2412558b6521928b2c9-01275277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf99712bf1bc779dc94528cbb9c559faa472ce61' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\test.tpl',
      1 => 1488344564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2412558b6521928b2c9-01275277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b652192dd340_03870303',
  'variables' => 
  array (
    'HTTP_PATH' => 0,
    'home' => 0,
    'active' => 0,
    'aboutus' => 0,
    'corporate_services' => 0,
    'program_training' => 0,
    'events' => 0,
    'contactus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b652192dd340_03870303')) {function content_58b652192dd340_03870303($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Brainak - Android Application Developement, Website Development Coimbatore, Program Training, Industrial Experience  </title>
    <meta name="keywords" content="apps development in coimbatore,android development in coimbatore, best software development in coimbatore, web designing and development company in coimbatore, best android training,java training, best PHP training, free internships and training with placemnents." />
    <meta name="description" content="brainak - we provides best industrial experience on Java, J2EE programming, training on mobile applications, web designing, PHP, digital markiting.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
    <link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
images/s_icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
 
	<link href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
css/web-font.css" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
css/style.css" rel="stylesheet" type="text/css"/>
  
   
   
    
    
    
    
    
    <script type="text/javascript">
        var http_path_js = "<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
";
    </script>
     
    


<script  type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92187917-1', 'auto');
  ga('send', 'pageview');
</script>

    
</head>


<body>

    <!--Header-->
    <div class="header-container">
        <header class="header fixed clearfix">

            <div class="container">

                <!--Site Logo-->
                <div class="logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
">
                        <img alt="brainak-logo" src="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
images/logo.jpg" data-logo-height="35">
                       <!--<span style="font-size:35px; font-weight:800; color:#3799EF;font-variant:small-caps;">BrainAk</span>-->
                    </a>
                </div>
                <!--End Site Logo-->

                <div class="navbar-collapse nav-main-collapse collapse">

                    <!--Header Search-->
                   <!-- <div class="search" id="headerSearch">
                        <a href="#" id="headerSearchOpen"><i class="fa fa-search"></i></a>
                        <div class="search-input">
                            <form id="headerSearchForm" action="#" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            <span class="v-arrow-wrap"><span class="v-arrow-inner"></span></span>
                        </div>
                    </div>-->
                    <!--End Header Search-->
                      
                     <!--Main Menu-->
                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main" id="mainMenu">
                            <li class="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">
                                
                                <a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
"><i class="fa fa-home"></i> Home <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
</a>
                            </li> 
                            <li  class="<?php echo $_smarty_tpl->tpl_vars['aboutus']->value;?>
">
                                <a href="about-us"><i class="fa fa-industry"></i> About Us <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
</a>
                            </li>
                           
                            <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['corporate_services']->value;?>
">
                                <a class="dropdown-toggle" href="javascript:"><i class="fa fa-pie-chart"></i> Corporate Services <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
mobile-application">Mobile Application</a></li>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
system-application">System Application</a></li>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
website-development">Web Design & Development</a></li>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
erp-softwares">ERP Softwares</a></li>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
digital-marketing">Digital Marketing</a></li>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
corporate-training">Corporate Training</a></li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['program_training']->value;?>
">
                                <a class="dropdown-toggle" href="javascript:"><i class="fa fa-university"></i> Program Training <i class="fa fa-caret-down"></i></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
core-java">Core Java</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
advance-java">Advance Java</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
android">Android</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
ios">IOS</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
phone-gap">Phone Gap</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
integrated-courses">Integrated Courses <span class="v-menu-item-info">new</span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
graphic-design">Graphic/UI design</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
web-designing">Web Designing</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
web-development">Web Development</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
database">Oracle/Sql</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
gaming">Gaming</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
animation">Animation</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['events']->value;?>
">
                                <a class="dropdown-toggle" href="javascript:"><i class="fa fa-users"></i> Events <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
internship">Internship</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
inplant-visit">Inplant Visit</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
seminars">Seminar Arrangement</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
workshop">Workshop Organize</a></li>
                                    
                                  <!--  <li class="dropdown-submenu">
                                        <a href="javascript:"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
workshop/1day">1 Day Workshop </a></li>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
workshop/2days">2 Days Workshop</a></li>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
workshop/morethan-2days">2> Days Workshop</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </li>
                           <li class="<?php echo $_smarty_tpl->tpl_vars['contactus']->value;?>
">
                                <a  href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
contact-us"><i class="fa fa-envelope-o"></i> Contact Us</a>
                            </li>

                        </ul>
                    </nav>
                    <!--End Main Menu--> 
                </div>
                <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <span class="v-header-shadow"></span>
            
        </header>
    </div>
   
    <!--End Header-->

   
    <style>
        .masonry-items .v-blog-item .v-blog-masonry-item,
        .masonry-items .v-portfolio-item-info {
            background: #ffffff;
        }
    </style>

    <div id="container" style="background-color: #f9f9f9">


       

        <div class="v-page-wrap no-bottom-spacing">

            <div class="row fw-row">
                <div class="v-blog-widget col-sm-12">
                    <div class="v-blog-wrap">
                        <div class="v-blog-items-wrap v-blog-masonry-fw ">
                            <ul class="v-blog-items row masonry-items first-load clearfix" id="blogGrid">

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                        
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-standard-post.html">Amazing Standard Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on November 9, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Etiam aliquam massa quis mauris sollicitudin
                                                    commodo venenatis ligula commodo.
                                                </p>
                                            </div>
                                            <a class="btn v-btn v-third-dark" href="blog-standard-post.html">Read more</a>
                                            
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                        
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-full-width-post.html">Full Width Media Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on November 8, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Etiam aliquam massa quis mauris sollicitudin
                                                    commodo venenatis ligula commodo.
                                                </p>
                                            </div>
                                           
                                            
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                       
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-standard-post.html">Standard Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on November 6, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Etiam aliquam massa quis mauris sollicitudin
                                                    commodo venenatis ligula commodo.
                                                </p>
                                            </div>
                                            <a class="btn v-btn v-third-dark" href="blog-standard-post.html">Read more</a>
                                            
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-standard-post.html">Text-only Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on November 5, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Integer imperdiet iaculis ipsum aliquet
                                                    ultricies. Sed a tincidunt enim maecenas...
                                                </p>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                       
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-full-width-post.html">Full Width Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on November 4, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Etiam aliquam massa quis mauris sollicitudin
                                                    commodo venenatis ligula commodo.
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                        
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-slideshow-post.html">Amazing Slideshow Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on October 22, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                                    aliquam massa quis mauris sollicitudin commodo
                                                    venenatis ligula commodo sed...
                                                </p>
                                            </div>
                                            <a class="btn v-btn v-third-dark" href="blog-slideshow-post.html">Read more</a>
                                            
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                        
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-standard-sidebar.html">Perfect Sidebar Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on September 15, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Etiam aliquam massa quis mauris sollicitudin
                                                    commodo venenatis ligula commodo. Sed...
                                                </p>
                                            </div>
                                            <a class="btn v-btn v-third-dark" href="blog-standard-sidebar.html">Read more</a>
                                           
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3 format-quote" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                        <div class="quote-excerpt heading-font">
                                            <h3>
                                                <i class="fa fa-magic v-icon v-icon-float-left medium"></i>
                                                <a href="blog-quote-post.html" target="_blank">We are Volvox, and we make incredible things.</a>
                                            </h3>
                                        </div>
                                        <div class="v-blog-item-info clearfix">
                                            <a class="btn v-btn v-third-dark" href="blog-quote-post.html">Read more</a>
                                            
                                        </div>
                                    </div>
                                </li>

                                <li class="v-blog-item col-sm-3" style="border:2px solid #000">
                                    <div class="v-blog-masonry-item">
                                        
                                        <div class="v-blog-item-info clearfix">
                                            <h4><a href="blog-standard-sidebar.html">Cool Sidebar Post</a></h4>
                                            <div class="v-blog-item-details">By <a href="page-about-me.html" rel="author">Volvox</a> on September 15, 2014</div>
                                            <div class="excerpt">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Etiam aliquam massa quis mauris sollicitudin..
                                                </p>
                                            </div>
                                            <a class="btn v-btn v-third-dark" href="blog-standard-sidebar.html">Read more</a>
                                           
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

 <!--Footer-Wrap-->
        <div class="footer-wrap">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <section class="widget">
                                <!--img alt="BrainAk" src="images/logo.png" style="height: 40px; margin-bottom: 20px;"-->
								<h4>About Brainak</h4>
                                <p class="pull-bottom-small">
                                   We brainak people have enough experience, highly talented, more knowledgeable, very  punctual,smart worker, work with passion etc. apart from this we work with social responsibility, self-satisfaction, full hearted, cent-percent  commitment.
                                </p>
                                <p>
                                    <a href="about-us">Read More →</a>
                                </p>
                            </section>
                        </div>
                        <div class="col-sm-2">
                            <section class="widget v-recent-entry-widget">
                                <div class="widget-heading">
                                    <h4>Quick Menu</h4>
                                    <div class="horizontal-break"></div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
mobile-application">Our Services</a>
                                    </li>
                                    <li>
                                        <a href="site-map">Site Map</a>
                                    </li>
                                    <li>
                                        <a href="javascript:">carrers</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <section class="widget v-recent-entry-widget">
                                <div class="widget-heading">
                                    <h4>Recent Blogs</h4>
                                    <div class="horizontal-break"></div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="http://brainakinfo.blogspot.in/2017/02/best-mobile-application-development.html" target="_blank" rel="nofollow">Mobile Application Development Team</a>
                                    </li>
                                    <li>
                                        <a href="http://brainakinfo.blogspot.in/2017/02/things-we-need-to-check-before-buying.html" target="_blank" rel="nofollow">Check Before Buying a Smart Phone</a>
                                    </li>
                                    <li>
                                        <a href="http://brainakinfo.blogspot.in/2017/02/how-to-get-approved-from-google-adsense.html" target="_blank" rel="nofollow">How to get approved from Google </a>
                                    </li>
                                    <li>
                                        <a href="http://brainakinfo.blogspot.in/2017/02/simple-ways-to-earn-money-from-online.html" target="_blank"  rel="nofollow">Simple ways to Earn Money from Online</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <section class="widget" >
                                <div class="widget-heading">
                                    <h4>Our Channel</h4>
                                    <div class="horizontal-break"></div>
                                </div>
                              
                              <iframe  src="https://www.youtube.com/embed/FJOwywVCoTM" frameborder="0" allowfullscreen width="230"></iframe>
                            </section>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="copyright">
                <div class="container">
                    <p>© Copyright by Brainak System Technologies Pvt Ltd. All Rights Reserved.</p>

                    <ul class="social-icons std-menu pull-right">
                        <li><a href="https://twitter.com/brainakinfo" target="_blank" data-placement="top"  title="twitter" data-original-title="Twitter" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/brainakinfo/?ref=bookmarks" target="_blank" data-placement="top" title="facebook" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/" target="_blank" data-placement="top" title="plusgoogle" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                       <!-- <li><a href="http://www.linkedin.com/" target="_blank" data-placement="top" rel="tooltip" title="" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>-->
                        <li><a href="https://www.youtube.com/channel/UCNXiO-JX4njpedo93hOCIjQ" target="_blank" data-placement="top"  title="youtube" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
        <!--End Footer-Wrap-->
    </div>

    <!--// BACK TO TOP //-->
    <div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>

    <!-- Libs -->
    <script  src="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
js/jquery.min.js"></script>
 
    

    <script  src="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
js/jquery.validate.js"></script>
    <script  src="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
js/theme-plugins.js"></script>
    <script  src="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
js/theme-core.js"></script>



         

</body>
</html>

<?php }} ?>
