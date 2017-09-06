<?php /* Smarty version Smarty-3.1.16, created on 2017-02-23 06:24:12
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\experts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705958ad75db2e3da1-41257592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48de053492ba3fbf062d24f47c509fbfdeaa5bb8' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\experts.tpl',
      1 => 1487827451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705958ad75db2e3da1-41257592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ad75db331fa2_09284518',
  'variables' => 
  array (
    'showMsg' => 0,
    'experts_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad75db331fa2_09284518')) {function content_58ad75db331fa2_09284518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2></h2>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Brainak Experts</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      <li><span class="label-success label label-default"><a href="add-experts.php" style="color:black; text-decoration:none;">Add New Member</a></span></li>
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
                      <table class="table table-striped jambo_table">
                        <thead>
                          <tr class="headings">
                            <th >Employee Id</th>
                                <th >Full Name</th>
                                <th >Mobile Number</th>
                                <th >Email Id</th>
                                <th >Designation</th>
                                <th >Joining Date</th>
                                <th >Status</th>
                                <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['experts_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
                        <tr>
                            <td><?php if ($_smarty_tpl->tpl_vars['content_item']->value['employee_id']=='') {?>In Progress..<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['content_item']->value['employee_id'];?>
<?php }?></td>
                            <td><?php echo ucfirst($_smarty_tpl->tpl_vars['content_item']->value['fname']);?>
 <?php echo $_smarty_tpl->tpl_vars['content_item']->value['lname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['mobile_number'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['personal_email_id'];?>
</td>
                            <td><?php echo ucfirst($_smarty_tpl->tpl_vars['content_item']->value['designation']);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['joining_date'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['status'];?>
</td>
                          	<td>
                                <a class="btn btn-info" href="add-experts.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
" title="Edit">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Edit
                                </a>
                                   <!-- <a class="btn btn-danger" href="experts.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure want to delete this?');" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        Delete
                                    </a>-->
                           </td>
                        </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                        <tr>
                            <td colspan="8" style="text-align:center; color:red;">No record found...!</td>
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
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
