<?php /* Smarty version Smarty-3.1.16, created on 2017-09-07 16:20:38
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\account_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3006359aa77890b7976-01856697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '584ea40f53a006f6b7816e2ec06db117137da8c5' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\account_info.tpl',
      1 => 1504794037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3006359aa77890b7976-01856697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa7789110036_84895185',
  'variables' => 
  array (
    'plan_rslt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa7789110036_84895185')) {function content_59aa7789110036_84895185($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2></h2>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Account Information / Deposit Information</h2>
                   
                   
                    <div class="clearfix"></div>
                  </div>
                	<!--<div class="alert alert-danger">Your Bitcoin! Deposit</div>-->
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table">
                      <caption class="alert alert-success"><b><?php if ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='1') {?> SILVER <?php } elseif ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='2') {?>	
GOLD <?php } elseif ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='3') {?>	 PLATINUM <?php } else { ?> No Plan Selected <?php }?> </b></caption>
                        <?php if ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='0') {?>
                        <tr>
                            <td colspan="8" style="text-align:center; color:red;">No deposits for this plan...!</td>
                        </tr>
                        <?php } else { ?>
                        <thead>
                        
                          <tr class="headings">
                           	 	<th >Plan</th>
                                <th >Spent Amount (BTC)</th>
                                <th >Deposit Date</th>
                                <th >Total Profit</th>
                                <th >Days of Profit</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                        <tr>
                            <td><?php if ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='1') {?> SILVER <?php } elseif ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='2') {?>	
GOLD <?php } elseif ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='3') {?>	 PLATINUM <?php } else { ?> No Plan Selected<?php }?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['deposit_amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['deposit_date'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['total_profit'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['days_of_profit'];?>
</td>
                        </tr>
                      
                       <?php }?>
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
