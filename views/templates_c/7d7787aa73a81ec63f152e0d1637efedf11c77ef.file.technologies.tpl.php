<?php /* Smarty version Smarty-3.1.16, created on 2017-04-17 11:18:03
         compiled from "\xampp\htdocs\brainak\\views\templates\technologies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311358f21b642c7d02-94091613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7787aa73a81ec63f152e0d1637efedf11c77ef' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\technologies.tpl',
      1 => 1492420682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311358f21b642c7d02-94091613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58f21b642f6b06_56224486',
  'variables' => 
  array (
    'HTTP_PATH' => 0,
    'path' => 0,
    'seo_url' => 0,
    'page_content' => 0,
    'tag' => 0,
    'img_tech' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f21b642f6b06_56224486')) {function content_58f21b642f6b06_56224486($_smarty_tpl) {?> <div id="container">
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

                            <h3 class="blog-post-caption">PhoneGap </h3>

                            <section class="article-body-wrap">

                                <div class="body-text clearfix">
                                    <p>
                                        <span class="dropcap1"></span>PhoneGap is a trendy software development framework, which is used to develop mobile applications. To develop apps using PhoneGap, we use  web-development languages like, HTML, CSS, and JScript.
                                    </p>	
                                    <div class="col-sm-12">
                                       <ul class="v-list-v2">
                                          	 
                                            <li><i class="fa fa-star"></i><span>PhoneGap has a robust backend system that tremendously speeds up the development process and reduces developer’s efforts.</span></li> 
                                           
                                            <li><i class="fa fa-star"></i><span>PhoneGap works on HTML5, CSS3 and JavaScript, the most common browser based skills which do not require any additional inputs. Hence the business owners can utilize their own tech team and get it developed smartly.</span></li> 
                                            <li><i class="fa fa-star"></i><span>The PhoneGap community compiles new codes and modules which are available for free because of its Open Source License.</span></li> 
                                           
                                        </ul>
                                    </div>
                                   
                                    <div class="clearfix"></div>
                                
                                  
                                    <p>
                                   One of the most amazing things about this framework is that it taps into the device’s hardware such as the camera, geo location, accelerometer and few others. With this, the apps developed on PhoneGap can easily make use of the properties of the native resources of the device, without compromising on the User Experience.
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
                         <?php echo $_smarty_tpl->tpl_vars['img_tech']->value;?>

                       <center>  <?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</center>
                    </aside>
                </div>
            </div>
        </div><?php }} ?>
