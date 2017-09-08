<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 14:52:14
         compiled from "\xampp\htdocs\MLM\\views\templates\user\make_deposit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1314159b278f75cbcc3-22605832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b385a7dcf39dbb1708692f5a29b4fc244994899' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\user\\make_deposit.tpl',
      1 => 1504875133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314159b278f75cbcc3-22605832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b278f760e342_76628752',
  'variables' => 
  array (
    'planqry_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b278f760e342_76628752')) {function content_59b278f760e342_76628752($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Make Deposit - <small>Please Choose Your Plan</small></h1>
                  
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px;">
                  <div class="col-md-1"></div>
                   
                   <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planqry_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
                      <div class="col-md-4 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390" style="background:<?php echo $_smarty_tpl->tpl_vars['content_item']->value['bg_color'];?>
">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                            	<?php echo $_smarty_tpl->tpl_vars['content_item']->value['plan_name'];?>

                            </div>
                          </div>
                          <div class="x_title">
                            <h2><img src="../user/img/bitcoin-coin.png" style="width:30px; height:30px" ><b> <?php echo $_smarty_tpl->tpl_vars['content_item']->value['min'];?>
 - <?php echo $_smarty_tpl->tpl_vars['content_item']->value['max'];?>
</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Min <?php echo $_smarty_tpl->tpl_vars['content_item']->value['min'];?>
  BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Max <?php echo $_smarty_tpl->tpl_vars['content_item']->value['max'];?>
 BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Profit Term <?php echo $_smarty_tpl->tpl_vars['content_item']->value['profit_term'];?>
 Days</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Sponsor Bonus <?php echo $_smarty_tpl->tpl_vars['content_item']->value['sponsor_bonus'];?>
%</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Pairing Bonus <?php echo $_smarty_tpl->tpl_vars['content_item']->value['paring_bonus'];?>
%</h4>
                            <div class="divider"></div>
                            
                      
                           
                           <center><a href="make_payment.php?plan_id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['plan_id'];?>
"> <button class="btn btn-primary" style="margin-top:20px">
                           Deposit Now </button></a></center>
                           
                          </div>
                        </div>
                      </div>
                      <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                        
                            <p style="text-align:center; color:red;">No record found...!<p>
                        
                       <?php } ?>
                      
                      
                     
               
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
       </style><?php }} ?>
