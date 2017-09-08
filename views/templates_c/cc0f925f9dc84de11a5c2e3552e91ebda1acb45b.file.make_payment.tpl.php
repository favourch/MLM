<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 15:06:37
         compiled from "\xampp\htdocs\MLM\\views\templates\user\make_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:393959b2822391a7a1-33180435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0f925f9dc84de11a5c2e3552e91ebda1acb45b' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\user\\make_payment.tpl',
      1 => 1504875996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '393959b2822391a7a1-33180435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b2822394d429_22729251',
  'variables' => 
  array (
    'plan_rslt' => 0,
    'MinPay' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2822394d429_22729251')) {function content_59b2822394d429_22729251($_smarty_tpl) {?><script>
$('document').ready(function(){
  setvaluetosession();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Make Deposit <small>Please Choose Your Plan</small></h1>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box" >
                        <div class="x_panel ui-ribbon-container fixed_height_390" style="background:<?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['bg_color'];?>
">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                             <?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['plan_name'];?>

                            </div>
                          </div>
                          <div class="x_title" >
                            <h2><img src="../user/img/bitcoin-coin.png" style="width:30px; height:30px" ><b> <?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['min'];?>
 - <?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['max'];?>
</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Deposit Amount(BTC)</h4>
                            <div class="divider"></div>
                            
                            <form method="post" action ="pay-per-membership.php">
                           <div class="form-group col-md-12">
                           <input type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['plan_rslt']->value['plan_id'];?>
"  name="plan_id"/>
                                <input type="number" step="0.00001" required="" id="amount" name="amount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['MinPay']->value;?>
"  style="text-align:right">
                           </div>
                           <center> <button type="submit" id = "PayWithBitcoin" value="Pay_With_Bitcoin" name="PayWithBitcoin" class="btn btn-info" style="margin-top:20px">Pay With Bitcoin</button></center >
                           <!-- a href="pay-per-membership.php">Deposit</a -->
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
       <?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       <style>
       .name_title{ margin-top:15px !important}
       </style>
       <script>
       function setvaluetosession(){
         var deposit_amount = $('#amount').val();
         alert(deposit_amount);
       }
       </script><?php }} ?>
