<?php /* Smarty version Smarty-3.1.16, created on 2017-02-17 07:41:32
         compiled from "\xampp\htdocs\brainak\\views\templates\page-404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3122158a18f9e5d23c1-05679090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b346acf7bbdb2dac9f7e01fbc7b5f53a8e5ff138' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\page-404.tpl',
      1 => 1487313691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3122158a18f9e5d23c1-05679090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58a18f9e5f17c6_28731782',
  'variables' => 
  array (
    'HTTP_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a18f9e5f17c6_28731782')) {function content_58a18f9e5f17c6_28731782($_smarty_tpl) {?>  <div id="container">

        <div class="v-page-heading v-bg-stylish v-bg-stylish-v1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-text">
                            <h1 class="entry-title">Page Not Found</h1>
                        </div>

                        <ol class="breadcrumb">
                            <li><a href="#">Pages</a></li>
                            <li class="active">Page Not Found</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="v-page-wrap">

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <div class="container v-page-not-found-wrap">
                <div class="row">

                    <div class="col-sm-3 col-sm-offset-3">
                        <h1 class="v-error">Error</h1>
                        <h1 class="v-404">404 </h1>
                    </div>

                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-3">

                        <h3>Links To Redirect</h3>
                        <div class="v-list-v2">
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
"><i class="fa fa-link"></i>Home</a></li>
                                <li><a href="about-us"><i class="fa fa-link"></i>About Us</a></li>
                                <li><a href="contact-us"><i class="fa fa-link"></i>Contact Us</a></li>
                                <li><a href="javascript:"><i class="fa fa-link"></i>Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="v-spacer col-sm-12 v-height-standard"></div>
                </div>

               <!-- <div class="row center">
                    <div class="col-sm-12">
                        <h3>Search Our Website</h3>
                        <p>Can't find what you need? Take a moment and do a search below!</p>
                        <div class="v-search-widget">
                            <form role="search" method="get" id="Form1" class="searchform" action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="" name="s" id="s" placeholder="Search" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>-->
            </div>

            <div class="v-spacer col-sm-12 v-height-standard"></div>
        </div><?php }} ?>
