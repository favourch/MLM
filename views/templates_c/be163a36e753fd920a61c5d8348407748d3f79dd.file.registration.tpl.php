<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 15:47:10
         compiled from "\xampp\htdocs\MLM\\views\templates\user\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2535359b29f40a4e184-51475342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be163a36e753fd920a61c5d8348407748d3f79dd' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\user\\registration.tpl',
      1 => 1504878429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2535359b29f40a4e184-51475342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b29f40a90808_84285084',
  'variables' => 
  array (
    'MAilCheck' => 0,
    'woref' => 0,
    'sponsor' => 0,
    'placement_name' => 0,
    'PLACEMENT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b29f40a90808_84285084')) {function content_59b29f40a90808_84285084($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>
    
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

<body style="background:rgba(255,255,255,.5); background-image:url(../admin/img/network-marketing-leads.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:100% 100%; ">
<div class="container">
<div class="row">
    <div class="col-md-8  col-md-offset-2 " style="background:rgba(0,0,0,.7); border-radius:10px; margin-top:30px; padding-top:20px; padding-bottom:30px; padding-left:0; padding-right:0">
      <div class="x_panel">
        <div class="text-center">
      <h1 style="color:#FFF"> <?php if ($_smarty_tpl->tpl_vars['MAilCheck']->value=='Mail') {?>Please Check Your Email and Verify Your Mobile Number <?php } else { ?> SIGN IN NOW <?php }?></h1>
       <h1 style="color:#FFF"></h1>
    </div>
        <div class="x_content" >
          <br />
          <?php if ($_smarty_tpl->tpl_vars['MAilCheck']->value!='Mail') {?>
          <form method="post"  id="reg-form" class="form-horizontal form-label-left" style="color:#FFF">
                <div class="form-group">
                    <label class="control-label col-md-4  col-xs-12" for="first-name" >Desired Username <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="desired_username" name="desired_username" onChange="checkusername()" required class="form-control col-md-7 col-xs-12">
                      <div id="exist-alert" ></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4 col-xs-12" for="last-name">Your Fullname <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="your_fullname" name="your_fullname" required class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="middle-name" class="control-label col-md-4 col-xs-12">Mobile <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="mobile" required class="form-control col-md-7 col-xs-12" type="tel" name="mobile">
                    </div>
                  </div>
                
                
                <div class="form-group">
                <label class="control-label col-md-4 col-xs-12">Define Password <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="password" id="define_password" name="define_password" required class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4 col-xs-12">Confirm Password<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="password_confirm" id="password_confirm"  required class="form-control col-md-7 col-xs-12">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-md-4 col-xs-12">Email Address<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  name="email_address" id="email_address" class="date-picker form-control col-md-7 col-xs-12"   required type="email">
                  <div id="exist-alert-email" ></div>
                </div>
              </div>
              
              <div class="form-group "  <?php if ($_smarty_tpl->tpl_vars['woref']->value=='Direct_Company') {?> style ="display:none" <?php }?>>
                <label class="control-label col-md-4 col-xs-12">Sponsor 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input  name="sponsor" id ="sponsor" class="form-control col-md-7 col-xs-12"  value="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value;?>
" type="text" readonly>
                </div>
              </div>
             
               <div class="form-group "   <?php if ($_smarty_tpl->tpl_vars['woref']->value=='Direct_Company') {?> style ="display:none" <?php }?>>
                  <label class="control-label col-md-4 col-xs-12">Placement ID
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input  name="placement_id" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['placement_name']->value;?>
" readonly type="text">
                  </div>
                </div>
                
                <input type="text" hidden value ="<?php echo $_smarty_tpl->tpl_vars['PLACEMENT']->value;?>
" name="placement"/>
                <!--div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Placement <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name="placement">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PLACEMENT']->value),$_smarty_tpl);?>

                    </select>
                  </div>
                </div -->
                <div class="form-group">
                  <label class="control-label col-md-4 col-xs-12">Bitcoin Address 
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input  name="bitcoin_address" class="date-picker form-control col-md-7 col-xs-12" required type="text">
                  </div>
                </div>
               <!-- <div class="form-group">
              <div class="checkbox col-md-offset-4">
                <label>
                  <input type="checkbox" class="flat" checked required ="required">  By creating an account you agree to our terms of service
                </label>
              </div>
            </div>-->
            	<div class="form-group">
                   <label class="control-label col-md-4 col-xs-12">
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="checkbox" checked name="agree"> By creating an account you agree to our terms of service
                  </div>
                </div>
                
              <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                     <a href="login.php">
                      <button class="btn btn-danger" type="button">Cancel</button>
                      </a>
                      <button class="btn btn-primary" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success" name="reg_btn" value="Register">Register</button>
                    </div>
                  </div>

             </form>   
          
          <?php }?>
        </div>
      </div>
    </div>
  </div>

</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.js"></script>


</body>

</html>

<script>
/*jQuery.validator.addMethod( 'passwordMatch', function(value, element) {
    
    // The two password inputs
    var password = $("#define-password").val();
    var confirmPassword = $("#password_confirm").val();

    // Check for equality with the password inputs
    if (password != confirmPassword ) {
        return false;
    } else {
        return true;
    }

}, "Your Passwords Must Match");*/

$("#reg-form").validate({
        rules: {
			  your_fullname: {
                required: true,
                minlength: 3
                },
            
            email_address: {
                required: true,
                email: true
            },
			bitcoin_address: {
                required: false,
            },
			
			
            mobile:{
                 required: true,
                 number: true,
            },
		agree:{
			    required: true,
			},
          
			define_password: {
            required: true,
            minlength: 5
        	},
        password_confirm: {
            required: true,
            minlength: 5,
            equalTo: "#define_password"
        }
        },
        messages: {
			 your_fullname: {
                required: " please enter your name",
                minlength: " your name must consist of at least 3 characters"
            },
           email_address: " please enter your email Id",
           mobile: {
            	required: " please enter your mobile number",
            	number: "enter valid numbers",
        		},
            define_password: {
            required: "What is your password?",
            minlength: "Your password must contain more than 5  characters"
        },

        }
    });



function checkusername() {
 desired_username = $("#desired_username").val();
    $.ajax({
        type: "GET",
        url: "ajax-common.php?existing_check=username",
        data:{desired_username : desired_username,},
        success: function(msg) {
			if(msg == 0){
			$("#exist-alert").html('<span style="color:red">User Name Not Availabe. Please Choose Any Other Name</span>');
			$("#desired_username").val('').focus();
			}
			else
			$("#exist-alert").html('<span style="color:green">User Name Availabe.</span>');
        }
    });
}
function checkemail() {
 //alert("Hi");
 email_address = $("#email_address").val();
 //alert(email_address);
    $.ajax({
        type: "GET",
        url: "ajax-common.php?existing_check=checkemail",
        data:{email_address : email_address,},
        success: function(msg) {
			//alert(msg);
			if(msg == 0){
		//	$("#exist-alert-email").html('<span style="color:red">Email Already Exist. </span>');
			//$("#email_address").val('').focus();
			}
			else
			$("#exist-alert-email").html('');
        }
    });
}




</script>
<?php }} ?>
