<?php /* Smarty version Smarty-3.1.16, created on 2017-04-17 09:23:02
         compiled from "\xampp\htdocs\brainak\\views\templates\emerging-technologies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1358458f457d7b083b4-91086729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '283bf3e50916ab08cded91c8c54c1aa49036d818' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\emerging-technologies.tpl',
      1 => 1492413779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1358458f457d7b083b4-91086729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58f457d7bbfd39_96498809',
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
<?php if ($_valid && !is_callable('content_58f457d7bbfd39_96498809')) {function content_58f457d7bbfd39_96498809($_smarty_tpl) {?> <div id="container">
        <div class="v-page-heading v-bg-stylish v-bg-stylish-v1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-text">
                            <h1>Emerging Technologies</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
">Home</a></li>
                            <li><a href="javascript:"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</a></li>
                            <li class="active"><?php echo $_smarty_tpl->tpl_vars['seo_url']->value;?>
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

                            <h3 class="blog-post-caption">CSS3 </h3>

                            <section class="article-body-wrap">

                                <div class="body-text clearfix">
                                    <p>
                                        <span class="dropcap1"></span>CSS (Cascading Style Sheets) is one of the core technology used widely for building Web pages. Cascading Style Sheets facilitates web developers to separate the design and layout of a website from that of content. CSS 3 is the latest standards for CSS and with this technology we can easily maintain sites, share style sheets across pages. In CSS3, web developers can remove more styling from the html and put the styling in the css file and have a cleaner html. This CSS language is referred to as the separation of structure from presentation.
                                    </p>	
                                  
                                  
                                    <p>The market for the iPhone and iPad web apps is expanding rapidly and considering the growing demand for CSS3 based mobile application development BRAINAK provide technology-driven mobile application development that meets the strategic objectives of our clients. CSS3 is the technology behind most of the eye-catching visuals on the web today. Using CSS3 Web developers can easily create rounded edges on borders on Images, navigation items, tabs etc. With CSS3 we create web apps that interact much like native apps. By using this advanced web technology developer can exploit modern browser capabilities while providing more basic content to older browsers.</p>
                                    <p>BRAINAK has been developing iPhone and iPad apps for quite a while and now by using more advanced web technologies like CSS3. With advanced features of CSS3 for graphics we can deliver an immersive app experience to iOS users. By making use of its cutting edge features we have created compelling mobile web experiences for iPhone and iPad users. Our expertise in mobile app development and CSS3 web development helps us create feature-rich CSS3 compatible apps for the iPhone/iPad. Our highly skilled mobile developers can build cost effective and secure mobile applications.</p>
                                   
                                   
                                    <div class="clearfix"></div>
                                
                                  
                                

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
