<?php /* Smarty version Smarty-3.1.16, created on 2017-09-05 12:41:45
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\downline_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:885959aa7847e166a8-35258765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'becba898d99dff2b2740d9772781fe1269f74e04' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\downline_user.tpl',
      1 => 1504607151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '885959aa7847e166a8-35258765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa7847ec0568_89313646',
  'variables' => 
  array (
    'username' => 0,
    'GetDownline' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa7847ec0568_89313646')) {function content_59aa7847ec0568_89313646($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Downline User  : <b><?php echo ucfirst($_smarty_tpl->tpl_vars['username']->value);?>
</b></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >ID</th>
                                <th >Username </th>
                                <th >Sponsor</th>
                                <th>Placement</th>
                                <th >Leg</th>
                                <th >Total Amount</th>
                                <th >Date</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GetDownline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['DESIRED_USERNAME'];?>
</td>
                        
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['SPONSER'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['PLACEMENT'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['deposit_amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['LEG'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['ADDED_DATE']);?>
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
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
