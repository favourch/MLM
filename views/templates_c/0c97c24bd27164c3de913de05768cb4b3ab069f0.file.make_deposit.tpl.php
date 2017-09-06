<?php /* Smarty version Smarty-3.1.16, created on 2017-09-02 08:16:28
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\make_deposit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2214959a7aa4a741a42-37169826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c97c24bd27164c3de913de05768cb4b3ab069f0' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\make_deposit.tpl',
      1 => 1504332987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2214959a7aa4a741a42-37169826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a7aa4a79b7c1_06348146',
  'variables' => 
  array (
    'silver_rslt' => 0,
    'gold_rslt' => 0,
    'platinum_rslt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a7aa4a79b7c1_06348146')) {function content_59a7aa4a79b7c1_06348146($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px;background:#F2DEDE">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box" style="" >
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                              SILVER
                            </div>
                          </div>
                          <div class="x_title" >
                            <h2><i class="fa fa-usd" aria-hidden="true"></i> <b><?php echo $_smarty_tpl->tpl_vars['silver_rslt']->value['min'];?>
 - <?php echo $_smarty_tpl->tpl_vars['silver_rslt']->value['max'];?>
</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Min <?php echo $_smarty_tpl->tpl_vars['silver_rslt']->value['min'];?>
 BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Max <?php echo $_smarty_tpl->tpl_vars['silver_rslt']->value['max'];?>
 BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Profit Term <?php echo $_smarty_tpl->tpl_vars['silver_rslt']->value['profit_term'];?>
 Days</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Sponsor Bonus <?php echo $_smarty_tpl->tpl_vars['silver_rslt']->value['sponsor_bonus'];?>
%</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Pairing Bonus <?php echo $_smarty_tpl->tpl_vars['silver_rslt']->value['paring_bonus'];?>
%</h4>
                            <div class="divider"></div>
                           <center><a href="make_payment.php?plan_id=1"> <button class="btn btn-primary" style="margin-top:20px">Deposit Now</button></a></center>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-4 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                             GOLD
                            </div>
                          </div>
                          <div class="x_title">
                            <h2><i class="fa fa-usd" aria-hidden="true"></i><b><?php echo $_smarty_tpl->tpl_vars['gold_rslt']->value['min'];?>
 - <?php echo $_smarty_tpl->tpl_vars['gold_rslt']->value['max'];?>
</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Min <?php echo $_smarty_tpl->tpl_vars['gold_rslt']->value['min'];?>
  BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Max <?php echo $_smarty_tpl->tpl_vars['gold_rslt']->value['max'];?>
 BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Profit Term <?php echo $_smarty_tpl->tpl_vars['gold_rslt']->value['profit_term'];?>
 Days</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Sponsor Bonus <?php echo $_smarty_tpl->tpl_vars['gold_rslt']->value['sponsor_bonus'];?>
%</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Pairing Bonus <?php echo $_smarty_tpl->tpl_vars['gold_rslt']->value['paring_bonus'];?>
%</h4>
                            <div class="divider"></div>
                           <center><a href="make_payment.php?plan_id=2"> <button class="btn btn-primary" style="margin-top:20px">Deposit Now</button></a></center>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-4 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                              PLATINUM
                            </div>
                          </div>
                          <div class="x_title">
                            <h2><i class="fa fa-usd" aria-hidden="true"></i><b><?php echo $_smarty_tpl->tpl_vars['platinum_rslt']->value['min'];?>
 - Unlimited</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Min <?php echo $_smarty_tpl->tpl_vars['platinum_rslt']->value['min'];?>
 BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Max UNLIMITED</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Profit Term <?php echo $_smarty_tpl->tpl_vars['platinum_rslt']->value['profit_term'];?>
 Days</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Sponsor Bonus <?php echo $_smarty_tpl->tpl_vars['platinum_rslt']->value['sponsor_bonus'];?>
%</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Pairing Bonus <?php echo $_smarty_tpl->tpl_vars['platinum_rslt']->value['paring_bonus'];?>
%</h4>
                            <div class="divider"></div>
                           <center> <a href="make_payment.php?plan_id=3"><button class="btn btn-primary" style="margin-top:20px">Deposit Now</button></a></center>
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
