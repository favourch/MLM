<?php /* Smarty version Smarty-3.1.16, created on 2017-09-02 11:07:01
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\make_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1427659aa74b5088184-41598229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49f4cefd1d722830625c5eb78a20b325895b0e1' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\make_payment.tpl',
      1 => 1504330369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1427659aa74b5088184-41598229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plan_rslt' => 0,
    'MinPay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa74b50b8b99_82284836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa74b50b8b99_82284836')) {function content_59aa74b50b8b99_82284836($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Make Deposit</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	<div class="alert alert-success" style="text-transform:uppercase">Please Choose Your Plan:</div>
                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box" >
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                             <?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['plan_name'];?>

                            </div>
                          </div>
                          <div class="x_title">
                            <h2><i class="fa fa-usd" aria-hidden="true"></i> <b><?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['min'];?>
 - <?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['max'];?>
</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Deposit Amount(BTC)</h4>
                            <div class="divider"></div>
                            <form method="post">
                           <div class="form-group col-md-12">
                           <input type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id'];?>
"  name="plan_id"/>
                                <input type="number" step="0.01" required="" id="amount" name="amount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['MinPay']->value;?>
" style="text-align:right">
                           </div>
                           <!--center> <button type="submit" value="Pay With Bitcoin" name="PayWithBitcoin" class="btn btn-info" style="margin-top:20px">Pay With Bitcoin</button></center-->
                           <a href="pay-per-membership.php">Deposit</a>
                           </form>
                          </div>
                        </div>
                      </div>
                      
                      
                      
                      
               
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       <style>
       .name_title{ margin-top:15px !important}
       </style><?php }} ?>
