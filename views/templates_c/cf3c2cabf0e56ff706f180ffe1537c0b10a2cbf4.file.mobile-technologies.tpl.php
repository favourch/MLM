<?php /* Smarty version Smarty-3.1.16, created on 2017-04-14 12:00:27
         compiled from "\xampp\htdocs\brainak\\views\templates\mobile-technologies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3099858eca9d623d713-66196044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3c2cabf0e56ff706f180ffe1537c0b10a2cbf4' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\mobile-technologies.tpl',
      1 => 1492164025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3099858eca9d623d713-66196044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58eca9d6264817_95213544',
  'variables' => 
  array (
    'HTTP_PATH' => 0,
    'path' => 0,
    'seo_url' => 0,
    'page_content' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eca9d6264817_95213544')) {function content_58eca9d6264817_95213544($_smarty_tpl) {?> <div id="container">
        <div class="v-page-heading v-bg-stylish v-bg-stylish-v1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-text">
                            <h1>Mobile Technologies</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
">Home</a></li>
                            <li><a href="javascript:"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</a></li>
                            <li class="active"><?php echo ucfirst($_smarty_tpl->tpl_vars['seo_url']->value);?>
</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="v-page-wrap has-right-sidebar has-one-sidebar">
            <div class="container">

                <div class="row">

                    <div class="col-sm-9" style="">

                        <!------ code starts------>
                        
                        <!--<article >

                            <h3 class="blog-post-caption">PHP / MySQL </h3>

                            <section class="article-body-wrap">

                                <div class="body-text clearfix">
                                    <p>
                                        <span class="dropcap1"></span>PHP / MySQL applications are compatible to all operating systems, support all the popular databases, 100% remotely configurable, perfect for web programming & provide higher performance and speed.
                                    </p>	
                                    <div class="col-sm-12">
                                       <ul class="v-list-v2">
                                          	 
                                            <li><i class="fa fa-star"></i><span>We offer all open source customization, programming and integration.</span></li> 
                                           
                                            <li><i class="fa fa-star"></i><span>Social network integration such as Facebook and Twitter.</span></li> 
                                            <li><i class="fa fa-star"></i><span>PHP application migration from lower version to higher version.</span></li> 
                                             <li><i class="fa fa-star"></i><span>PHP third party tool and plug-in integration such as chat, forum, blog ,google map,and search engine.</span></li> 
                                             <li><i class="fa fa-star"></i><span>We Offer website updation work  such as convertion of theme layer,attractive UI design, Database Managment etc..</span></li> 
                                        </ul>
                                    </div>
                                     <h3>PHP Programming Skill Sets</h3>
                                     <blockquote class="pullquote">
                                        <span style="color: #888888;">
                                          
                                           - Web based customized solutions<br />
                                           - Development services using Smarty template engine, WordPress, MVC Pattern<br />
                                           - PHP third part tool and plug-in integration such as Chat, Forum, Blog and Search Engine.<br />
                                           
                                           - PHP based products & Web services<br />
                                           - Search Engine Optimization<br />
                                           - Rich Internet Applications<br />
                                           - We do high performance website with Validation test, Google Speed test etc.<br />
                                           - PHP application migration from lower version to higher version<br />
                                          
                                        </span>
                                    </blockquote>
                                    <div class="clearfix"></div>
                                
                                  
                                    <p>
                                   	Brainak possess quality, optimized PHP Programmers & PHP Experts. We have dedicated PHP software development team with extensive experience in MySQL PHP & AJAX with full functional knowledge base to meet the customer expectations .
                                   </p>
                                 

                                </div>

                            
                            </section>
                           
                        </article>-->
                       
                 		<?php echo $_smarty_tpl->tpl_vars['page_content']->value;?>

                        
                        <!------ code ends------>
                        
                        
                        <div class="row">
                                    <div class="col-md-3 col-md-offset-9">
                                        <a href="contact-us" class="btn v-btn v-btn-default v-small-button"><i class="fa fa-money"></i> Get Quote!</a>
                                    </div>
                        </div>
                        
                        
                        
                        
                    </div>

                    <aside class="sidebar right-sidebar col-sm-3">
                         <section class="widget v-tag-cloud-widget clearfix">
                            <div class="widget-heading clearfix">
                                <h4 class="v-heading"><span>Tags</span></h4>
                            </div>
                            <div class="tagcloud">
                                <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>

                            </div>
                        </section>

                    </aside>
                </div>
            </div>
        </div><?php }} ?>
