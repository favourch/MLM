<?php /* Smarty version Smarty-3.1.16, created on 2017-09-05 11:21:33
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\make_deposit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905159aa74b37bda08-36474310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271b8ddf792ebb7d38d7947205ec725598057fe2' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\make_deposit.tpl',
      1 => 1504603293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '905159aa74b37bda08-36474310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa74b3843ce4_44851104',
  'variables' => 
  array (
    'planqry_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa74b3843ce4_44851104')) {function content_59aa74b3843ce4_44851104($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                   
                   <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planqry_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
                      <div class="col-md-4 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                            	<?php echo $_smarty_tpl->tpl_vars['content_item']->value['plan_name'];?>

                            </div>
                          </div>
                          <div class="x_title">
                            <h2><i class="fa fa-usd" aria-hidden="true"></i><b><?php echo $_smarty_tpl->tpl_vars['content_item']->value['min'];?>
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
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       <style>
       .name_title{ margin-top:15px !important}
       </style><?php }} ?>
