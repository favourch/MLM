<?php /* Smarty version Smarty-3.1.16, created on 2017-04-23 07:23:51
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271658aabec91145e9-55785628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce14e88b1aef8567dc342d36d1db885cadd5f4f' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\header.tpl',
      1 => 1492925029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271658aabec91145e9-55785628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58aabec9147267_06386484',
  'variables' => 
  array (
    'HTTP_PATH' => 0,
    'LOGIN_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aabec9147267_06386484')) {function content_58aabec9147267_06386484($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="shortcut icon" type="image/png" href="img/s_icon.png" />
    <title>Brainak Technologies | </title>
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
                <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>BRAINAK </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/s_icon.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               <h3><?php echo $_smarty_tpl->tpl_vars['LOGIN_NAME']->value;?>
</h3>
                <ul class="nav side-menu">
                     <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="index.php">Dashboard</a></li>
                        </ul>
                      </li>
                       <li><a class="ajax-link" href="cms_list.php"><i class="fa fa-contao"></i><span> Site Content</span></a></li>
						<!-- <li><a class="ajax-link" href="news.php"><i class="fa fa-desktop"></i></i><span> News</span></a></li>-->
                       <li><a class="ajax-link" href="experts.php"><i class="fa fa-desktop"></i></i><span> Experts</span></a></li>
                       <li><a class="ajax-link" href="projects.php"><i class="fa fa-desktop"></i></i><span> Projects</span></a></li>
                       <!-- <li><a><i class="fa fa-edit"></i> Vehicle Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a class="ajax-link" href="make.php"><i class="fa fa-car"></i> <span> Make & Models</span></a></li>
                          <li><a class="ajax-link" href="variant.php"><i class="fa fa-qrcode"></i> <span> Variants</span></a></li>
                          <li><a class="ajax-link" href="bstyle.php"><i class="fa fa-taxi"></i> <span> Body Style</span></a></li>
                          <li><a class="ajax-link" href="car_fields.php"><i class="fa fa-sun-o"></i> <span> Car Fields</span></a></li>
                        </ul>
                      </li>-->
                    <li><a class="ajax-link" href="enquiry.php"><i class="fa fa-newspaper-o"></i> <span> Leads / Enquiry</span></a></li>
                    <li><a class="ajax-link" href="send_email.php"><i class="fa fa-comment"></i> <span> Email Pattern</span></a></li>
                    <!--<li><a class="ajax-link" href="clients.php"><i class="fa fa-newspaper-o"></i> <span> Clients</span></a></li>-->
                </ul>
              </div>
              <div class="menu_section">
                <h3>Brainak Edu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Students<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="ajax-link" href="admission.php"><i class="fa fa-pie-chart"></i><span>Admission</span></a></li>
                      <li><a href="#">Internship</a></li>
                      `
                      <li><a href="#">Regular Class</a></li>
                    </ul>
                  </li>
                       
                </ul>
              </div>
               <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Project</a></li>
                      
                    </ul>
                  </li>
                     
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
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

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="img/s_icon.png" alt="">Brainak Team
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="admin-edit.php"><i class="fa fa-arrows-alt"></i> Profile</a></li>
                   
                     <?php if ($_SESSION['admin_userid']=="1") {?>
					<li><a href="general-settings.php"><i class="fa fa-cog fa-spin" ></i> General Settings  <span class="badge bg-red pull-right">50%</span></a></li>
                    <li class="divider"></li>
					<?php }?>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">3</span>
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
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


<!-----
fa fa-edit
fa fa-desktop
fa fa-table
fa fa-bar-chart-o
fa fa-clone
---><?php }} ?>
