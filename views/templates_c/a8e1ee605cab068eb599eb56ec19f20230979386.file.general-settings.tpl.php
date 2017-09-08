<?php /* Smarty version Smarty-3.1.16, created on 2017-09-07 11:12:30
         compiled from "\xampp\htdocs\MLM\\views\templates\backend\general-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3203659b10d7ed447f5-75364689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8e1ee605cab068eb599eb56ec19f20230979386' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\backend\\general-settings.tpl',
      1 => 1504774672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3203659b10d7ed447f5-75364689',
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
  'unifunc' => 'content_59b10d7ed7b2f6_31059603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b10d7ed7b2f6_31059603')) {function content_59b10d7ed7b2f6_31059603($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("backend/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
<?php echo $_smarty_tpl->getSubTemplate ("backend/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
