<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 14:12:39
         compiled from "\xampp\htdocs\MLM\\views\templates\office\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3175859b27b72e0b209-75439841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddaed7c7b7d199a0dd7788f20ce29b462a706383' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\office\\header.tpl',
      1 => 1504872758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3175859b27b72e0b209-75439841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b27b72e26784_23632357',
  'variables' => 
  array (
    'DOMAIN_NAME' => 0,
    'HTTP_PATH' => 0,
    'UserName' => 0,
    'admin_id' => 0,
    'last_login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b27b72e26784_23632357')) {function content_59b27b72e26784_23632357($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="shortcut icon" type="image/png" href="img/s_icon.png" />
    <title><?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
 | </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="css/daterangepicker.css" rel="stylesheet">

	  <!-- iCheck -->
    <link href="green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
   <link href="css/custom.min.css" rel="stylesheet" type="text/css">
   
    <script>
		var js_http_path = "<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
";
	</script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $_smarty_tpl->tpl_vars['DOMAIN_NAME']->value;?>
</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/s_icon.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome </span>
                <h2><?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
<?php echo ucfirst($_smarty_tpl->tpl_vars['admin_id']->value);?>
</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              <?php if ($_smarty_tpl->tpl_vars['admin_id']->value=='admin') {?>
                <ul class="nav side-menu">
                      	<li><a class="ajax-link" href="index.php"><i class="fa fa-desktop"></i></i><span> OverView</span></a></li>  
                        <li><a><i class="fa fa-user" aria-hidden="true"></i>Admin Profile<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          
                          <li><a class="ajax-link" href="admin_profile_info"><i class="fa fa-qrcode"></i> <span> Admin Information</span></a></li>
                          <li><a class="ajax-link" href="admin_change_password"><i class="fa fa-key" aria-hidden="true"></i> Change Password</span></a></li>
                         
                        </ul>
                      </li>
                      <li><a class="ajax-link" href="package"><i class="fa fa-money"></i></i><span>Package</span></a></li>
                      <li><a class="ajax-link" href="user_registration"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>User Registration</span></a></li>
                       <li><a class="ajax-link" href="admin_direct_referal"><i class="fa fa-plug" aria-hidden="true"></i><span>Direct Referal</span></a></li>
                        <li><a class="ajax-link" href="roi_setting"><i class="fa fa-wpforms" aria-hidden="true"></i><span>ROI Setting</span></a></li>
                        <li><a class="ajax-link" href="admin_binary_match"><i class="fa fa-connectdevelop" aria-hidden="true"></i><span>Binary Match</span></a></li>
                        <li><a class="ajax-link" href="admin_roi_report"><i class="fa fa-money"></i></i><span>ROI Report</span></a></li>
                         <li><a class="ajax-link" href="admin_bonus_report"><i class="fa fa-print" aria-hidden="true"></i><span>Bonus Report</span></a></li>
                        
                </ul>
               
                <?php }?>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <i class="fa fa-cog" aria-hidden="true"></i>
              </a>
             
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Profile">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right" style="margin-right:20px">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="img/s_icon.png" alt=""><b><?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['admin_id']->value);?>
 </b>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <?php if ($_smarty_tpl->tpl_vars['admin_id']->value=='admin') {?><li><a href="admin_profile_info.php"><i class="fa fa-arrows-alt"></i> Profile</a></li><?php }?>
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out &nbsp;&nbsp;&nbsp;
                     <?php if ($_smarty_tpl->tpl_vars['admin_id']->value=='admin') {?><small> <?php echo $_smarty_tpl->tpl_vars['last_login']->value;?>
</small><?php }?></a> </li>
                  </ul>
                </li>
			
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php }} ?>
