<?php /* Smarty version Smarty-3.1.16, created on 2017-09-02 10:50:19
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\direct_sponsor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318359aa70cbe14648-69108719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ff7e7dcf55caa633cf29ebc652374241622436' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\direct_sponsor.tpl',
      1 => 1504182148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318359aa70cbe14648-69108719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa70cbebefb2_38776754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa70cbebefb2_38776754')) {function content_59aa70cbebefb2_38776754($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\modifier.date_format.php';
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
                    <h2> Direct Sponsor : ansarindia001</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >ID</th>
                                <th >	Username </th>
                                <th >Name</th>
                                <th>Sponsor</th>
                                <th >Current Plan</th>
                                <th>Total Amount</th>
                                <th>Date</tr>
                               
                          </tr>
                        </thead>
                        <tbody>
                       
                      <!--  <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['content_item']->value['project_name'], 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['content_item']->value['lname'];?>
</td>
                        
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['month_committed'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['project_status'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['payment_status'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['project_type'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date']);?>
</td>
                        </tr>-->
                        <tr>
                        	<td>1</td>
                            <td>	ansarindia002</td>
                            <td>Ansar</td>
                            <td>ansarindia001</td>
                            <td>SILVER</td>
                            <td>0.0500000</td>
                            <td>2017-08-08 10:47:35</td>
                        </tr>
                      
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
