<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 10:42:48
         compiled from "\xampp\htdocs\brainak\\views\templates\events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062558a685108d1084-35051837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c32e8cce3689b321538bc9e94def80cb512486e' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\events.tpl',
      1 => 1487756556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062558a685108d1084-35051837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a6851092ec80_85572459',
  'variables' => 
  array (
    'heading' => 0,
    'HTTP_PATH' => 0,
    'page_content' => 0,
    'seo_url' => 0,
    'blogPanel' => 0,
    'relatedtraining_Panel' => 0,
    'tagPanel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a6851092ec80_85572459')) {function content_58a6851092ec80_85572459($_smarty_tpl) {?> <div id="container">
        <div class="v-page-heading v-bg-stylish v-bg-stylish-v1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-text">
                            <h1><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
                        </div>

                        <ol class="breadcrumb">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
">Home</a></li>
                            <li><a href="javascript:">Events</a></li>
                            <li class="active"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="v-page-wrap has-right-sidebar has-one-sidebar">
            <div class="container">

                <div class="row">

                    <div class="col-sm-9">

                      
                        <!------ code starts------>
                       <!-- <b style="font-size:80px; font-variant:small-caps; ">Under Process...</b>-->
                        
                   		<?php echo $_smarty_tpl->tpl_vars['page_content']->value;?>

                       


		

 

                        <!------ code ends------>
                        
                        
                        
                        
                        
                        
                         <div class="post-block-wrap">

                                <h3 class="v-heading"><span>Leave a comment regarding <?php echo ucfirst($_smarty_tpl->tpl_vars['seo_url']->value);?>
</span></h3>
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
