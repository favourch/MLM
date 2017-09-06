<?php /* Smarty version Smarty-3.1.16, created on 2017-02-20 11:02:55
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1583958aabecf682fe8-53705012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81ce83c7cb25bf846af14ce57732f8397a30ac3' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\user.tpl',
      1 => 1479205272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1583958aabecf682fe8-53705012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showMsg' => 0,
    'newlyjoinedplayer' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58aabecf70f9e5_34161744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aabecf70f9e5_34161744')) {function content_58aabecf70f9e5_34161744($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['showMsg']->value!='') {?>
            <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['showMsg']->value;?>
</div>
            <?php }?>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Owner / Dealer <small>Management</small></h2>
                   <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><span class="label-success label label-default"><a href="add-user.php" style="color:black; text-decoration:none;">Add New</a></span></li>
                    </ul>-->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered jambo_table">
                      <thead>
                        <tr >
                          <th>User Id</th>
                          <th>Member Id</th>
                          <th>First Name</th>
                          <th>User Type</th>
                          <th>City</th>
                          <th>Division</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Reg. Date</th>
                           <!--<th>Status</th>
                         	<th>Edit</th>-->
                          <th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newlyjoinedplayer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['user_id'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['member_id'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['name'];?>
</td>
                          <td><?php if ($_smarty_tpl->tpl_vars['content_item']->value['user_type_id']==1) {?>BatsMan<?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['user_type_id']==2) {?>Bowler<?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['user_type_id']==3) {?>Wicket Keeper<?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['user_type_id']==4) {?>All Rounder<?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['user_type_id']==5) {?>Team<?php }?></td>
                          <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['city'];?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['division'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['email_id'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['contact_no'];?>
</td>
                          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['created_at'],"%B %e, %Y");?>
</td>
                          <!--  <td><?php if ($_smarty_tpl->tpl_vars['content_item']->value['status']==2) {?><span class="label-default label label-danger">Blocked</span><?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['status']=="0") {?><span class="label-default label label-success">Active</span><?php } else { ?><span class="label-default label label-danger">In-Active</span><?php }?></td>
                         
                        <td> <a href="add-user.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
" class="btn btn-info" title="Edit"><i class="fa fa-pencil-square-o"></i> Edit</a></td>-->
                          <td><a  class="btn btn-danger"  href="user.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['user_id'];?>
&action=delete" onclick="return confirm('Are you sure want to delete this member and his/she Details?');" title="Delete"><i class="fa fa-trash-o"></i> Delete</a>
                          </td>
                        </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                        <tr>
                            <td colspan="3" style="text-align:center; color:red;">No record found...!</td>
                        </tr>
                        <?php } ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>    
          </div>
        </div>
        <!-- /page content -->

   <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
<?php }} ?>
