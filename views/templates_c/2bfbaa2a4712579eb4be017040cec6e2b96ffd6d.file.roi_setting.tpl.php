<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 13:58:06
         compiled from "\xampp\htdocs\MLM\\views\templates\office\roi_setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1525359b285ceaa2149-50076844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bfbaa2a4712579eb4be017040cec6e2b96ffd6d' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\office\\roi_setting.tpl',
      1 => 1504869445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1525359b285ceaa2149-50076844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roiqry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b285cead0f46_59041214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b285cead0f46_59041214')) {function content_59b285cead0f46_59041214($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("office/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>ROI SETTING</b></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box"  >
                        <div class="x_panel ui-ribbon-container fixed_height_390" style="border:1px solid #ccc; ">
                        
                          <div class="x_title" >
                            <h2><b>ROI SETTING</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                          <form method="post" name="update_form" id="update_form">
                           
                             
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">ROI Amount <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="text" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['roiqry']->value;?>
"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <input type="submit" name="update_btn" class="btn btn-warning"  value="Update" />
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
       <?php echo $_smarty_tpl->getSubTemplate ("office/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       <style>
       .name_title{ margin-top:15px !important}
       </style>
       
       <script>
       $("#change_form").validate({
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
