<?php /* Smarty version Smarty-3.1.16, created on 2017-09-07 11:02:35
         compiled from "\xampp\htdocs\MLM\\views\templates\backend\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2280659b1090762d112-96596336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b25fd6102795d7e716c9c003360d18c813821d' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\backend\\login.tpl',
      1 => 1504774954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2280659b1090762d112-96596336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b1090765bf15_07555341',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1090765bf15_07555341')) {function content_59b1090765bf15_07555341($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    

    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

      <div class="form-signin" style="background:rgba(0,0,0,.8) !important;">
    <div class="text-center">
       <h1 style="color:#FFF"> Admin Login</h1>
    </div>
    <hr>
     <?php if ($_smarty_tpl->tpl_vars['msg']->value!='') {?>
	    <div class="alert alert-info-error text-center" style="color:#F00"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
            <?php }?>
    <div class="tab-content" >
        <div id="login" class="tab-pane active">
             <form class="form-horizontal" action="login.php" method="post" name="login">
                <p class="text-muted text-center">
                    Enter your username and password
                </p>
                  <input type="text" class="form-control" placeholder="Username" name="username">
               		<input type="password" class="form-control" placeholder="Password" name="password">
                
             
                <button type="submit" class="btn btn-lg btn-primary btn-block" name="login_x" value="Login">Login</button>
            </form>
          
        </div>
     
    </div>
  </div>


    <!--jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
  <style>
  .login .form-signin { max-width:430px !important; margin-top:50px}
  .login{ background:rgba(255,255,255,.5); background-image:url(../admin/img/network-marketing-leads.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:100% 100%; }
  </style>  

</body>

</html>
<?php }} ?>
