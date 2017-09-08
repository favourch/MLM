<?php /* Smarty version Smarty-3.1.16, created on 2017-09-07 13:45:28
         compiled from "\xampp\htdocs\MLM\\views\templates\backend\admin_roi_report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1448259b10eb3dd7f58-94649375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a0ecf44b9cc68cf010e35a74dbdf4caf1e4a5c' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\backend\\admin_roi_report.tpl',
      1 => 1504784727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448259b10eb3dd7f58-94649375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b10eb3e1e450_09714526',
  'variables' => 
  array (
    'daily_bonus' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b10eb3e1e450_09714526')) {function content_59b10eb3e1e450_09714526($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("backend/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                      <table class="table table-striped jambo_table" id="datatable-buttons">
                        <thead>
                          <tr class="headings">
                            	<th>No.</th>
                                <th>User Name  </th>
                                <th>Bonus Type</th>
                                <th>Bonus Amount</th>
                                <th>Credited Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daily_bonus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['content_item']->value['desired_username'], 'UTF-8');?>
 </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['your_fullname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['bonus_amount'];?>
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
       <?php echo $_smarty_tpl->getSubTemplate ("backend/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
