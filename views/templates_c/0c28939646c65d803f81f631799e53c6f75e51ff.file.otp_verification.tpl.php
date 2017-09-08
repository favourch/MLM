<?php /* Smarty version Smarty-3.1.16, created on 2017-09-05 16:44:39
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\otp_verification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1978159ae9ce3ba4b46-18517919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c28939646c65d803f81f631799e53c6f75e51ff' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\otp_verification.tpl',
      1 => 1504622623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1978159ae9ce3ba4b46-18517919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59ae9ce3bd77c3_35023302',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae9ce3bd77c3_35023302')) {function content_59ae9ce3bd77c3_35023302($_smarty_tpl) {?>
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
       <h1 style="color:#FFF"> OTP Verification</h1>
    </div>
    <hr>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value!='') {?>
	    <div class="alert alert-info-error text-center" style="color:#F00"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
            <?php }?>
    <div class="tab-content" >
        <div id="login" class="tab-pane active">
             <form class="form-horizontal"  method="post" name="login">
                <p class="text-muted text-center">
                    Please Enter Your OTP for Mobile Number Verification
                </p>
                  <input type="text" class="form-control" placeholder="OTP" name="userotp" required>
               		
                <button type="submit" class="btn btn-lg btn-primary btn-block" name="verify_x" value="Verify">VERIFY</button>
            </form>
           
        </div>
     
    </div>
  </div>


    <!--jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>


  <style>
  .login .form-signin { max-width:430px !important; margin-top:50px}
  .login{ background:rgba(255,255,255,.5); background-image:url(../admin/img/network-marketing-leads.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:100% 100%; }
  </style>  

</body>

</html>
<?php }} ?>
