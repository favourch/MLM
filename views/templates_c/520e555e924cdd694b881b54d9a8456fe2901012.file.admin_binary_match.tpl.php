<?php /* Smarty version Smarty-3.1.16, created on 2017-09-07 09:05:44
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\admin_binary_match.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2088059b0efc8b7d6b3-81456086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '520e555e924cdd694b881b54d9a8456fe2901012' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\admin_binary_match.tpl',
      1 => 1504703096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088059b0efc8b7d6b3-81456086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'withdrawal_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b0efc8beacb2_50356616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0efc8beacb2_50356616')) {function content_59b0efc8beacb2_50356616($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Admin Direct Referal</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            	<th>No.</th>
                                <th>Username  </th>
                                <th>Name</th>
                                <th>Sponsor</th>
                                <th>Current Plan</th>
                                <th>Total Amount</th>
                                <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['withdrawal_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['content_item']->value['type'], 'UTF-8');?>
 </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['description'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['status'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date']);?>
</td>
                        </tr>
                       
                        <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                        <tr>
                            <td colspan="10" style="text-align:center; color:red;">There's nothing to show...!</td>
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