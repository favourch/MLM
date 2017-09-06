<?php /* Smarty version Smarty-3.1.16, created on 2017-09-01 02:48:00
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\account_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993759a7a8b12a4007-66439364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20c19e63a04873599f2efac013267d0eb323c3ba' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\account_info.tpl',
      1 => 1504224558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '993759a7a8b12a4007-66439364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a7a8b12ee385_26397505',
  'variables' => 
  array (
    'plan_rslt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a7a8b12ee385_26397505')) {function content_59a7a8b12ee385_26397505($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
GOLD <?php } else { ?> PLATINUM<?php }?> DAILY FOR 100 DAYS</b></caption>
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
GOLD <?php } else { ?> PLATINUM<?php }?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['deposit_amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['deposit_date'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['total_profit'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['days_of_profit'];?>
</td>
                        </tr>
                       <?php if ($_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id']=='') {?>
                        <tr>
                            <td colspan="8" style="text-align:center; color:red;">No deposits for this plan...!</td>
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
