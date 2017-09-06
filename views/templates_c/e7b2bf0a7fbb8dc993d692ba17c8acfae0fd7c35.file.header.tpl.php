<?php /* Smarty version Smarty-3.1.16, created on 2017-09-05 12:22:04
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1779659aa7024a886c0-10780391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b2bf0a7fbb8dc993d692ba17c8acfae0fd7c35' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\header.tpl',
      1 => 1504606875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1779659aa7024a886c0-10780391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa7024a9baa6_70143604',
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
<?php if ($_valid && !is_callable('content_59aa7024a9baa6_70143604')) {function content_59aa7024a9baa6_70143604($_smarty_tpl) {?><!DOCTYPE html>
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
                          
                          <li><a class="ajax-link" href="admin_profile_info.php"><i class="fa fa-qrcode"></i> <span> Admin Information</span></a></li>
                          <li><a class="ajax-link" href="admin_change_password.php"><i class="fa fa-key" aria-hidden="true"></i> Change Password</span></a></li>
                         
                        </ul>
                      </li>
                      <li><a class="ajax-link" href="package.php"><i class="fa fa-money"></i></i><span>Package</span></a></li>
                      <li><a class="ajax-link" href="user_registration.php"><i class="fa fa-money"></i></i><span>User Registration</span></a></li>
                </ul>
                <?php } else { ?>
                
                <ul class="nav side-menu">
                      	<li><a class="ajax-link" href="index.php"><i class="fa fa-desktop"></i></i><span> OverView</span></a></li>  
                        <li><a><i class="fa fa-user" aria-hidden="true"></i>Profile<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a class="ajax-link" href="account_info.php"><i class="fa fa-user-secret" aria-hidden="true"></i> <span> Account Information</span></a></li>
                          <li><a class="ajax-link" href="profile_info.php"><i class="fa fa-qrcode"></i> <span> Profile Information</span></a></li>
                          <li><a class="ajax-link" href="change_password.php"><i class="fa fa-key" aria-hidden="true"></i> Change Password</span></a></li>
                          <li><a class="ajax-link" href="bitcoin_addresss.php"><i class="fa fa-sun-o"></i> <span>Bitcoin Address</span></a></li>
                        </ul>
                      </li>
                      <li><a class="ajax-link" href="make_deposit.php"><i class="fa fa-money"></i></i><span> Make Depoist</span></a></li>
                      <li><a><i class="fa fa-sitemap"></i> Network User <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a class="ajax-link" href="direct_referral_user.php"><i class="fa fa-car"></i> <span> Direct Referral User</span></a></li>
                          <li><a class="ajax-link" href="downline_user.php"><i class="fa fa-qrcode"></i> <span> Downline User</span></a></li>
                          
                        </ul>
                      </li>
                      <li><a><i class="fa fa-bar-chart"></i> Bonus Report <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a class="ajax-link" href="sponsor_bonus.php"><i class="fa fa-car"></i> <span> Sponsor Bonus</span></a></li>
                          <li><a class="ajax-link" href="binary_bonus.php"><i class="fa fa-qrcode"></i> <span> Binary Bonus</span></a></li>
                          <li><a class="ajax-link" href="daily_profits.php"><i class="fa fa-taxi"></i> <span> Daily Profits</span></a></li>
                          
                        </ul>
                      </li>
                      <li><a><i class="fa fa-sitemap"></i> Network Tree <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a class="ajax-link" href="direct_sponsor.php"><i class="fa fa-car"></i> <span> Direct Sponsor</span></a></li>
                          <li><a class="ajax-link" href="binary_tree.php"><i class="fa fa-qrcode"></i> <span> Binary Tree</span></a></li>
                         </li>
                        </ul>
                      </li>
                      <li><a><i class="fa fa-edit"></i> Bonus Action  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a class="ajax-link" href="withdrawal.php"><i class="fa fa-car"></i> <span> Withdrawal</span></a></li>
                         <li><a class="ajax-link" href="withdrawal_history.php"><i class="fa fa-qrcode"></i> <span> Withdrawal History</span></a></li>
                        </ul>
                      </li>
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
                    <?php if ($_smarty_tpl->tpl_vars['admin_id']->value=='admin') {?><li><a href="admin_profile_info.php"><i class="fa fa-arrows-alt"></i> Profile</a></li><?php } else { ?><li><a href="profile_info.php"><i class="fa fa-arrows-alt"></i> Profile</a></li><?php }?>
                    <?php if ($_SESSION['admin_userid']=="1") {?>
					<li><a href="general-settings.php"><i class="fa fa-cog fa-spin" ></i> General Settings  <span class="badge bg-red pull-right">50%</span></a></li>
                    <li class="divider"></li>
					<?php }?>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out &nbsp;&nbsp;&nbsp; <?php if ($_smarty_tpl->tpl_vars['admin_id']->value=='admin') {?><small> <?php echo $_smarty_tpl->tpl_vars['last_login']->value;?>
</small><?php }?></a> </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-red">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="img/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    
                  </ul>
                </li>
                 <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="badge bg-blue">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="img/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
                 <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="badge bg-green">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="img/user.png" alt="Profile Image" /></span>
                        <span class="message">
                          You have 3 Direct Sponsor
                        </span>
                      </a>
                    </li>
                   
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php }} ?>
