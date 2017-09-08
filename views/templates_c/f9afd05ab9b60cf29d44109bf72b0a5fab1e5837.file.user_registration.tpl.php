<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 17:59:36
         compiled from "\xampp\htdocs\MLM\\views\templates\office\user_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3108959b285c0afde06-33086402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9afd05ab9b60cf29d44109bf72b0a5fab1e5837' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\office\\user_registration.tpl',
      1 => 1504886375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3108959b285c0afde06-33086402',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b285c0b4fe81_11620515',
  'variables' => 
  array (
    'showMsg' => 0,
    'user_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b285c0b4fe81_11620515')) {function content_59b285c0b4fe81_11620515($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("office/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registered Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                   <!--   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>-->
                      <!--<li><span ><a href="add_user_registration.php" class="btn btn-primary" style="text-decoration:none; font-size:18px">Add New User</a></span></li>-->
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                	<?php if ($_smarty_tpl->tpl_vars['showMsg']->value!='') {?>
                    	<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['showMsg']->value;?>
</div>
                    <?php }?>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" id="datatable-buttons" >
                        <thead>
                          <tr class="headings" style="text-transform:uppercase">
                            	<th >S.No</th>
                                <th >Desired Username</th>
                            <!--    <th >Fullname</th>-->
                                <th > Mobile </th>
                                <th >Email Address</th>
                                <th >Sponsor</th>
                                <th >Bitcoin Address</th>
                                <th>Status</th>
                                <th >Reg Date</th>
                                <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo ucfirst($_smarty_tpl->tpl_vars['content_item']->value['desired_username']);?>
</td>
                           <!-- <td><?php echo ucfirst($_smarty_tpl->tpl_vars['content_item']->value['your_fullname']);?>
</td>-->
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['mobile'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['email_address'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['sponsor'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['bitcoin_address'];?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['content_item']->value['blockstatus']==1) {?><button  class="btn btn-success btn-xs">Active</button><?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['blockstatus']==0) {?><button  class="btn btn-warning
                             btn-xs">Inactive</button><?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['blockstatus']==-1) {?><button  class="btn btn-danger btn-xs">Blocked</button><?php }?></td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date']);?>
</td>
 
                          	<td>
                                <a class="btn btn-info" href="add_user_registration.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
" title="Edit">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Edit
                                </a>
                                
                           </td>
                        </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                        <tr>
                            <td colspan="10" style="text-align:center; color:red;">No record found...!</td>
                        </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("office/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
