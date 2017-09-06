<?php /* Smarty version Smarty-3.1.16, created on 2017-08-31 07:40:17
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\admin-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:955159a7a1418928e2-68280501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c28376da7de7bd11ecf969649f91c4ba750f2a0' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\admin-edit.tpl',
      1 => 1487911441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '955159a7a1418928e2-68280501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'admin_res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a7a1418d10e1_78148374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a7a1418d10e1_78148374')) {function content_59a7a1418d10e1_78148374($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                    <h2>Edit Admin Account</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="index.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                   <form action="admin-edit.php" name="add_emp" method="POST">
                     <div class="form-group">
                            <label for="exampleInputEmail1">User Name <span class="red">(Required)</span></label> 
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" value="<?php echo $_smarty_tpl->tpl_vars['admin_res']->value['username'];?>
">
                     </div>
                     <div class="form-group">
                            <label for="exampleInputEmail1">Password<span class="red">(Required)</span></label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password" value="<?php echo $_smarty_tpl->tpl_vars['admin_res']->value['password'];?>
">
                     </div>
                     <div class="form-group">
                            <label for="exampleInputEmail1">Email Address<span class="red">(Required)</span></label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php echo $_smarty_tpl->tpl_vars['admin_res']->value['email'];?>
">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Contact Phone</label>
                        <input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="Enter Contact Phone" value="<?php echo $_smarty_tpl->tpl_vars['admin_res']->value['phone'];?>
">
                     </div>
                     <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Display Name<span class="red">(Required)</span></label>
                            <input type="text" class="form-control" name="disname" id="disname" placeholder="Enter your name" value="<?php echo $_smarty_tpl->tpl_vars['admin_res']->value['display_name'];?>
">
                     </div>-->
                     <button type="submit" class="btn btn-success" name="save" value="submit_btn">Save</button>
                    <a href="index.php" style="text-decoration:none;">Back to list</a>
                </form>
                  </div>
                </div>
          </div>
 
        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
