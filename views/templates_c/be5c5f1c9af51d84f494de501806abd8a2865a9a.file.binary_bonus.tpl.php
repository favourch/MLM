<?php /* Smarty version Smarty-3.1.16, created on 2017-09-02 09:42:24
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\binary_bonus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1253359a7aa4d6341c1-78121919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be5c5f1c9af51d84f494de501806abd8a2865a9a' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\binary_bonus.tpl',
      1 => 1504338143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253359a7aa4d6341c1-78121919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a7aa4d686249_85030124',
  'variables' => 
  array (
    'paring_bonus' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a7aa4d686249_85030124')) {function content_59a7aa4d686249_85030124($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\AMLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   

	<script type="text/javascript">
    function confirm_delete() {
      return confirm('are you sure?');
    }
    </script>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Binary Bonus</h2>
                   
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
                                <th >Date</th>
                               
                          </tr>
                        </thead>
                        <tbody>
                      <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paring_bonus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                     		<tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td>Paring Bonus</td>
                            <td>Sponsor Bonus Username :  <?php echo $_smarty_tpl->tpl_vars['content_item']->value['child_name'];?>
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
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
