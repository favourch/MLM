<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 13:08:20
         compiled from "\xampp\htdocs\MLM\\views\templates\user\sponsor_bonus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2662759b27a2479f923-09605561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85a9ae0fc0564748a52d8b5f4ba9eee7ae8c6a1' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\user\\sponsor_bonus.tpl',
      1 => 1504868396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2662759b27a2479f923-09605561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponser_bonus' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b27a247e1fa7_96710979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b27a247e1fa7_96710979')) {function content_59b27a247e1fa7_96710979($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sponsor Bonus</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >No</th>
                                <th >Type </th>
                                <th >Description</th>
                                <th>Amount</th>
                               <!-- <th >Status</th>-->
                                <th >Date</th>
                               
                          </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sponser_bonus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                     		<tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td>Sponsor Bonus</td>
                            <td>Sponsor Bonus Username:  <?php echo $_smarty_tpl->tpl_vars['content_item']->value['child_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['bonus_amount'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date']);?>
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
