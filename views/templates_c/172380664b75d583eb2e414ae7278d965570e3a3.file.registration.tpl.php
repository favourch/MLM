<?php /* Smarty version Smarty-3.1.16, created on 2017-09-01 15:32:35
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1764559a842abb0a2c4-19795337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '172380664b75d583eb2e414ae7278d965570e3a3' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\registration.tpl',
      1 => 1504272753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1764559a842abb0a2c4-19795337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a842abb3cf43_99273272',
  'variables' => 
  array (
    'sponsor' => 0,
    'PLACEMENT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a842abb3cf43_99273272')) {function content_59a842abb3cf43_99273272($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\AMLM\\libs\\plugins\\function.html_options.php';
?>
<!DOCTYPE html>
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
    <div class="col-md-8  col-md-offset-2 " style="background:rgba(0,0,0,.7); border-radius:10px; margin-top:20px; padding-top:10px; padding-bottom:10px">
      <div class="x_panel">
        <div class="text-center">
       <h1 style="color:#FFF"> SIGN IN NOW</h1>
    </div>
        <div class="x_content">
          <br />
          <form method="post"  id="reg-form" data-parsley-validate class="form-horizontal form-label-left" style="color:#FFF">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Desired Username <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="desired_username" name="desired_username" onChange="checkusername()" required class="form-control col-md-7 col-xs-12">
                <div id="exist-alert" ></div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Your Fullname <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="your_fullname" name="your_fullname" required class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="mobile" required class="form-control col-md-7 col-xs-12" type="tel" name="mobile">
              </div>
            </div>
           
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Define Password <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input  name="define_password" class="form-control col-md-7 col-xs-12" required type="password">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input  id="password_confirm" name="" class="form-control col-md-7 col-xs-12" required type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Address<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input  name="email_address" id="email_address" class="date-picker form-control col-md-7 col-xs-12"  onChange="checkemail()" required type="email">
                <div id="exist-alert" ></div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sponsor 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input  name="sponsor" class="date-picker form-control col-md-7 col-xs-12"  value="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value;?>
" type="text" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Placement ID<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input  name="placement_id" class="date-picker form-control col-md-7 col-xs-12" required type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Placement <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="placement">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PLACEMENT']->value),$_smarty_tpl);?>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Bitcoin Address <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input  name="bitcoin_address" class="date-picker form-control col-md-7 col-xs-12" required type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox col-md-offset-3">
                <label>
                  <input type="checkbox" class="flat" checked="checked" required>  By creating an account you agree to our terms of service
                </label>
              </div>
            </div>
            
            			
           
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
               <a href="login.php">
                <button class="btn btn-danger" type="button">Cancel</button>
                </a>
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="submit" class="btn btn-success" name="reg_btn" value="Register">Register</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.js"></script>


</body>

</html>

<script>
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
			
            mobile:{
                 required: true,
                 number: true,
            },
		
			/*define_password: {
            required: true,
            minlength: 5
        	},
        password_confirm: {
            required: true,
            minlength: 5,
            equalTo: "#define_password"
        }*/
			
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
        		}
			
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
 /*email_address = $("#email_address").val();
 alert(email_address);
    $.ajax({
        type: "GET",
        url: "ajax-common.php?existing_check=checkemail",
        data:{checkemail : checkemail,},
        success: function(msg) {
			alert(msg);
			if(msg == 0){
			$("#exist-alert").html('<span style="color:red">Email Already Exist. </span>');
			$("#email_address").val('').focus();
			}
			else
			$("#exist-alert").html('');
        }
    });*/
}

</script>
<?php }} ?>
