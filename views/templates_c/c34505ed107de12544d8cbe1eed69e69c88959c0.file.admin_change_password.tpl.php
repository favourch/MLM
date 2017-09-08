<?php /* Smarty version Smarty-3.1.16, created on 2017-09-06 18:35:39
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\admin_change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2046359ae6a0a6bfc66-50627106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c34505ed107de12544d8cbe1eed69e69c88959c0' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\admin_change_password.tpl',
      1 => 1504715738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046359ae6a0a6bfc66-50627106',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59ae6a0a6eea69_79691030',
  'variables' => 
  array (
    'showMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ae6a0a6eea69_79691030')) {function content_59ae6a0a6eea69_79691030($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Change Password</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box"  >
                        <div class="x_panel ui-ribbon-container fixed_height_390" style="border:1px solid #ccc; ">
                        <?php echo $_smarty_tpl->tpl_vars['showMsg']->value;?>

                          <div class="x_title" >
                            <h2><b> Change Password</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                          <form method="post" name="admin_change_form" id="admin_change_form">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Current Password <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="password" id="current_password" name="current_password" required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br />
                              <div class="divider"></div><br /><br />
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">New Password <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="password" id="new_password" name="new_password" required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br />
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Re-Type New Password <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="password" name="password_confirm" id="password_confirm"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br />
                              <center><input type="submit" name="update_btn" class="btn btn-warning"  value="Update" />
                           </form>   
                           
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       <style>
       .name_title{ margin-top:15px !important}
       </style>
       
       <script>
       $("#admin_change_form").validate({
        rules: {
          
			new_password: {
            required: true,
            minlength: 5
        	},
        password_confirm: {
            required: true,
            minlength: 5,
            equalTo: "#new_password"
        }
			
        },
        messages: {
         
        }
    });

       </script><?php }} ?>
