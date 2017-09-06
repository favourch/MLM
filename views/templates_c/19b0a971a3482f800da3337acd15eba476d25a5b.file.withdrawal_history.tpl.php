<?php /* Smarty version Smarty-3.1.16, created on 2017-08-31 14:40:18
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\withdrawal_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2392559a7aa53e46840-40504633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19b0a971a3482f800da3337acd15eba476d25a5b' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\withdrawal_history.tpl',
      1 => 1504183217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2392559a7aa53e46840-40504633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a7aa53e94a45_23199626',
  'variables' => 
  array (
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a7aa53e94a45_23199626')) {function content_59a7aa53e94a45_23199626($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\AMLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Withdrawal History</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >No.</th>
                                <th >Type </th>
                                <th >Description</th>
                                <th>Amount</th>
                                <th >Status</th>
                                <th >Date</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                      <!--  <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['content_item']->value['project_name'], 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['content_item']->value['lname'];?>
</td>
                        
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['month_committed'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['project_status'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['payment_status'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['project_type'];?>
</td>
                             <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date']);?>
</td>
                            
                          	
                        </tr>-->
                        <tr>
                        	<td>1</td>
                            <td>test</td>
                            <td>test</td>
                            <td>0.0500000</td>
                            <td>Paid</td>
                            <td>2017-08-08 10:47:35</td>
                        </tr>
                      
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
