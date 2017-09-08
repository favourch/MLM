<?php /* Smarty version Smarty-3.1.16, created on 2017-09-07 10:58:59
         compiled from "\xampp\htdocs\MLM\\views\templates\backend\roi_setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1775059b1095ad1e699-54501923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed448e42baab5bb896f168ef4e25540846d8ff4b' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\backend\\roi_setting.tpl',
      1 => 1504774696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1775059b1095ad1e699-54501923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b1095ad55195_76441988',
  'variables' => 
  array (
    'roiqry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1095ad55195_76441988')) {function content_59b1095ad55195_76441988($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("backend/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
       <?php echo $_smarty_tpl->getSubTemplate ("backend/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
