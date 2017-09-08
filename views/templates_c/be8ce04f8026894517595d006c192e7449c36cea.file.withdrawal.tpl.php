<?php /* Smarty version Smarty-3.1.16, created on 2017-09-06 12:50:58
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\withdrawal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2937059aa7778998a16-38629407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be8ce04f8026894517595d006c192e7449c36cea' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\withdrawal.tpl',
      1 => 1504695057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2937059aa7778998a16-38629407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa77789be882_11358997',
  'variables' => 
  array (
    'opt_mismatch' => 0,
    'showMsg' => 0,
    'mobile' => 0,
    'avail_bal_rslt' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa77789be882_11358997')) {function content_59aa77789be882_11358997($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Withdrawal</h2>
                   
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box" >
                    <?php echo $_smarty_tpl->tpl_vars['opt_mismatch']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['showMsg']->value=='otpsend') {?>
                    <!---- OTP VERIFY SECTION STARTS-----> 
                     
                          <div class="x_panel ui-ribbon-container fixed_height_390 withdrawal_sec"  >
                          <div class="x_title" >
                            <h2><b>Withdrawal</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="alert alert-success">Verification code has been sent to your phone number <?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
!!</div>
                          
                          <div class="x_content">
                            <h4 class="name_title" style="font-size:14px">  Available BTC amount: <i class="fa fa-btc" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['avail_bal_rslt']->value['Total_Amount'];?>
</h4>
                            <h4 class="name_title" style="font-size:14px">   Amount of withdrawal :<b><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</b></h4>
                           
                             <div class="divider"></div>
                          <form method="post">
                           <input type="hidden" name="tamt" value="<?php echo $_smarty_tpl->tpl_vars['avail_bal_rslt']->value['Total_Amount'];?>
" />
                           <input type="hidden" name="wamt" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" />
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">SMS Verificaton Code : <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="text" name="otp_code"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <input type="submit" class="btn btn-warning" style="margin-left:10px" name="Withdrawal_btn"  value="Withdraw" />
                           </form>   
                          </div>
                        </div> 
 					<!---- OTP VERIFY SECTION ENDS-----> 
                    
                    <?php } else { ?>
                    <!---- WITHDRAWAL SECTION STARTS----->
                        <div class="x_panel ui-ribbon-container fixed_height_390 " id="withdrawal_sec" >
                          <div class="x_title" >
                            <h2><b>Withdrawal</b></h2>
                            
                            <div class="clearfix"></div>
                            <?php if ($_smarty_tpl->tpl_vars['showMsg']->value=='worngpass') {?><div class="alert alert-danger">Password Missmatch !!</div><?php }?>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title" style="font-size:14px">  Available BTC amount: <i class="fa fa-btc" aria-hidden="true"></i> <b><?php echo $_smarty_tpl->tpl_vars['avail_bal_rslt']->value['Total_Amount'];?>
</b></h4>
                             <div class="divider"></div>
                          <form method="post">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Amount of withdrawal <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                   <input type="number" step="0.00001" required="" id="amount" name="amount" class="form-control" value="0.1" min="0.1"  style="text-align:right">
                                </div>
                              </div><br /><br /><br /><br />
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Password <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="password" name="password"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <center><input type="submit" class="btn btn-warning" name="verify_btn"  value="Verify with Phone Number" /></center>
                           </form>   
                          </div>
                        </div>
                  <!---- WITHDRAWAL SECTION ENDS-----> 
                        <?php }?>
  
  
  
  
                    
  
                     </div>
                      <?php if ($_smarty_tpl->tpl_vars['showMsg']->value=='withdraw_success') {?>
                      <style>
                      	#withdrawal_sec{ display:none}
                      </style>
                      <!---- WITHDRAWAL SUCCESS STARTS----->
                                  <div class="col-md-6 " style=" padding-top:20px;background:#FFF; margin-left:-100px ">
                                  	<div class="alert alert-success text-center" style="font-size:24px">Your Withdrawal Has Been Done Successfully Please Check Your Mail For Details </div>
                                  </div>
                    <!---- WITHDRAWAL SUCCESS ENDS-----> 
                    <?php }?> 
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
