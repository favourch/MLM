<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 13:10:03
         compiled from "\xampp\htdocs\MLM\\views\templates\user\direct_sponsor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1520359b27a35ea85a8-82949715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d38593fa2904b5445a89c442d1f6366cda1526e' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\user\\direct_sponsor.tpl',
      1 => 1504869002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1520359b27a35ea85a8-82949715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b27a35eeac25_40215669',
  'variables' => 
  array (
    'direct_referral_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b27a35eeac25_40215669')) {function content_59b27a35eeac25_40215669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h2>Daily Sponser</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >ID</th>
                                <th >	Username </th>
                                <th >Name</th>
                                <th>Sponsor</th>
                                <th >Current Plan</th>
                                <th>Total Amount</th>
                                <th>Date</tr>
                               
                          </tr>
                        </thead>
                        <tbody>
                      <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['direct_referral_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['desired_username'];?>
</td>
                        
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['your_fullname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['sponser'];?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['content_item']->value['plan_name']=='') {?>No Plan Selected<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['content_item']->value['plan_name'];?>
<?php }?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['deposit_amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['deposit_date'];?>
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
       <?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
