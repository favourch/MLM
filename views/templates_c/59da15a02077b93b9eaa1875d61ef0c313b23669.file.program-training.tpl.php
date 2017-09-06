<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 10:42:51
         compiled from "\xampp\htdocs\brainak\\views\templates\program-training.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2371758a1b89f9cdc48-72052662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59da15a02077b93b9eaa1875d61ef0c313b23669' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\program-training.tpl',
      1 => 1487756566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2371758a1b89f9cdc48-72052662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a1b89fa3b245_52804449',
  'variables' => 
  array (
    'HTTP_PATH' => 0,
    'page_content' => 0,
    'seo_url' => 0,
    'blogPanel' => 0,
    'relatedtraining_Panel' => 0,
    'tagPanel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a1b89fa3b245_52804449')) {function content_58a1b89fa3b245_52804449($_smarty_tpl) {?> <div id="container">
        <div class="v-page-heading v-bg-stylish v-bg-stylish-v1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-text">
                            <h1>Brainak Training</h1>
                        </div>

                        <ol class="breadcrumb">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
">Home</a></li>
                            <li><a href="javascript:">Program Training</a></li>
                            <li class="active">Core Java</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="v-page-wrap has-right-sidebar has-one-sidebar">
            <div class="container">

                <div class="row">

                    <div class="col-sm-9">

                        <?php echo $_smarty_tpl->tpl_vars['page_content']->value;?>

                        
                        <!------ code starts------>
                        
                       <!-- <article >

                            <figure class="media-wrap">
                                <img src="images/program-training/android_banner.jpg" />
                            </figure>

                            <h3 class="blog-post-caption">Advance Java</h3>

                            <div class="post-info clearfix">
                                <span class="vcard author">
                                    Course Duration <a href="javascript:" class="fn">120Hrs</a> 
                                  
                                </span>
                                <div class="like-info">
                                    <div class="comments-wrapper"><a href="#comments"><i class="fa fa-comments-o"></i><span>3 Comments</span></a></div>
                                </div>
                            </div>

                            <section class="article-body-wrap">

                                <div class="body-text clearfix">
                                    <p>
                                        <span class="dropcap1">L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam massa quis mauris
                                        sollicitudin commodo venenatis ligula commodo. Sed blandit convallis dignissim. Pellentesque
                                        pharetra velit eu velit elementum et convallis erat vulputate. Sed in nulla ut elit mollis posuere.
                                        Praesent a felis accumsan neque interdum molestie ut id massa. In hac habitasse platea dictumst.
                                        Nulla ut lorem ante. 
                                    </p>
                                    <blockquote class="pullquote">
                                        <span style="color: #888888;">
                                            Nulla ut lorem ante. In convallis, felis eget consequat faucibus, mi diam
                                            consequat augue, quis porta nibh leo a massa. Sed quam nunc, vulputate vel imperdiet vel,
                                            aliquet sit amet risus. Maecenas nec tempus velit. Praesent gravida mi et mauris sollicitudin
                                         
                                        </span>
                                    </blockquote>
                                 
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="v-heading-v2">
                                            <h3>Syllabus Overview</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="v-list-v2">
                                            <li><i class="fa fa-star"></i><span>JSetting Up Android Eclipse Or Android Studio</span></li>
                                            <li><i class="fa fa-star"></i><span>IDE Explanation</span></li>
                                            <li><i class="fa fa-star"></i><span>AVD Creation</span></li>
                                            <li><i class="fa fa-star"></i><span>Project Creation And Project Explanation</span></li>
                                            <li><i class="fa fa-star"></i><span>Layout And Widget Designing</span></li>
                                            <li><i class="fa fa-star"></i><span>XML And Java Class Mapping(Activity)</span></li>
                                            <li><i class="fa fa-star"></i><span>Listeners And Handlers</span></li>
                                            <li><i class="fa fa-star"></i><span>Alert Dialog And Custom Dialog</span></li>
                                            <li><i class="fa fa-star"></i><span>Spinner ,ListView,GridView With Java Class.</span></li>
                                            <li><i class="fa fa-star"></i><span>Intent</span></li>
                                            <li><i class="fa fa-star"></i><span>External Styles</span></li>
                                            <li><i class="fa fa-star"></i><span>Custom Action Bar</span></li>
                                            <li><i class="fa fa-star"></i><span>Progress Bar</span></li>
                                            <li><i class="fa fa-star"></i><span>Tab View</span></li>
                                            <li><i class="fa fa-star"></i><span>Navigation Bar</span></li>
                                        </ul>
                                    </div>
                                     <div class="col-sm-6">
                                        <ul class="v-list-v2">
                                        	
                                            <li><i class="fa fa-star"></i><span>Animations</span></li>
                                            <li><i class="fa fa-star"></i><span>Menu Bars</span></li>
                                            <li><i class="fa fa-star"></i><span>Fragment</span></li>
                                            <li><i class="fa fa-star"></i><span>Shared Preferences</span></li>
                                          	<li><i class="fa fa-star"></i><span>Google Map Integration</span></li>
                                            <li><i class="fa fa-star"></i><span>GPS</span></li>
                                            <li><i class="fa fa-star"></i><span>Google Ads Integration</span></li>
                                            <li><i class="fa fa-star"></i><span>Gmail Integration</span></li>
                                            <li><i class="fa fa-star"></i><span>SQLite</span></li>
                                            <li><i class="fa fa-star"></i><span>JSON</span></li>
                                            <li><i class="fa fa-star"></i><span>Broadcast Receiver</span></li>
                                            <li><i class="fa fa-star"></i><span>Asynctask</span></li> 
                                            <li><i class="fa fa-star"></i><span>Services</span></li> 
                                            <li><i class="fa fa-star"></i><span>GCM</span></li> 
                                        </ul>
                                    </div>
                                    
                                   
                                </div>

                                <div class="link-pages"></div>
                                <div class="share-links curved-bar-styling clearfix">
                                    <div class="share-text">Download Syllabus : <a href=""><i class="fa fa-download" aria-hidden="true"></i>
</a></div>
                                    <ul class="social-icons">
                                     <div class="share-text">Follow As :</div>
                                        <li class="sf-love">
                                            <div class="like-info">
                                                <div class="like-info-wrap">
                                                    <a href="#" class="like-info-inner"><i class="fa fa-heart"></i></a>
                                                    <span class="like-count">294</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="facebook"><a href="#" class="post_share_facebook"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#" class="product_share_twitter"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>
                                        <li class="mail"><a href="#" class="product_share_email"><i class="fa fa-envelope-o"></i><i class="fa fa-envelope-o"></i></a></li>
                                    </ul>
                                </div>

                               
                            </section>
                           
                        </article>
                        -->
                        
                        <!------ code ends------>
                        
                        
                        
                        
                        
                        
                         <div class="post-block-wrap">

                                <h3 class="v-heading"><span>Leave a message</span></h3>
                                 <form action="#" method="post" enctype="multipart/form-data"  id="id_contact_form" class="id_contact_form">
                                 <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['seo_url']->value;?>
_page" name="page_type" />
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label>Your name <span class="required">*</span></label>
                                            <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Your email address <span class="required">*</span></label>
                                            <input type="email" value="" maxlength="100" class="form-control" name="email_id" id="email_id">
                                        </div>
                                        <div class="col-sm-4">
											<label>Mobile Number </label>
                                            <input type="tel" value="" maxlength="100" class="form-control" name="mobile_number" id="mobile_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Your Message <span class="required">*</span></label>
                                            <textarea maxlength="5000" rows="7" class="form-control" name="message" id="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button name="contact_submit_btn" type="button" id="contact_submit_btn" class="btn v-btn v-btn-default v-small-button"><i class="fa fa-magic"></i> Send Message</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                    </div>

                    <aside class="sidebar right-sidebar col-sm-3">
                       <!-- <section class="widget v-search-widget clearfix">
                            <form role="search" method="get" id="searchform" class="searchform" action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="" name="s" id="s" placeholder="Search" />
                                </div>
                            </form>
                        </section>-->
                       
                      	<?php echo $_smarty_tpl->tpl_vars['blogPanel']->value;?>

                        <?php echo $_smarty_tpl->tpl_vars['relatedtraining_Panel']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['tagPanel']->value;?>

                        
                    </aside>
                </div>
            </div>
        </div><?php }} ?>
