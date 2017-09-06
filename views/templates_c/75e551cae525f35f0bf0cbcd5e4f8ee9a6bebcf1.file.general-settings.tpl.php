<?php /* Smarty version Smarty-3.1.16, created on 2017-02-20 11:19:53
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\general-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1828758aac2c9994262-08843072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e551cae525f35f0bf0cbcd5e4f8ee9a6bebcf1' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\general-settings.tpl',
      1 => 1479200202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828758aac2c9994262-08843072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'gen_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58aac2c99edfe6_14524087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aac2c99edfe6_14524087')) {function content_58aac2c99edfe6_14524087($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <!-- page content -->
  
        <div class="right_col" role="main">
            <div class="clearfix"></div>
           <?php if ($_smarty_tpl->tpl_vars['msg']->value!='') {?>
            <div class="alert alert-info" style="color:#fff;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
            <?php }?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Website Settings</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="cms_list.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                  <form name="general-settings" method="POST" >
                    <!-- start id-form -->
                     <!--<div class="form-group">
                        <label for="exampleInputEmail1">Domain URL</label>
                        <input type="text" class="form-control" name="website_url" id="website_url" placeholder="Enter Website Url" value="<?php echo $_smarty_tpl->tpl_vars['gen_detail']->value['website_url'];?>
">
                     </div>-->
                     <div class="form-group">
                        <label for="exampleInputEmail1">Website Name</label>
                        <input type="text" class="form-control" name="website_name" id="website_name" placeholder="Enter Website Name" value="<?php echo $_smarty_tpl->tpl_vars['gen_detail']->value['website_name'];?>
">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Website Url</label>
                        <input type="text" class="form-control" name="weburl" id="weburl" placeholder="Enter Web URL" value="<?php echo $_smarty_tpl->tpl_vars['gen_detail']->value['website_url'];?>
">
                     </div>
                     
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Save</button>
                    <a href="index.php" style="text-decoration:none;">Back to list</a>
                </form>

                  </div>
                </div>
          </div>
 
        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
