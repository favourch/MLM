<?php /* Smarty version Smarty-3.1.16, created on 2017-04-26 09:11:01
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\project_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10758590025e5f34690-15606693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0484e232afbf588dd9c962408feeaf7f1714a7' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\project_stats.tpl',
      1 => 1493190661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10758590025e5f34690-15606693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590025e6161591_48209071',
  'variables' => 
  array (
    'showMsg' => 0,
    'project_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590025e6161591_48209071')) {function content_590025e6161591_48209071($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\modifier.date_format.php';
?>    <?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3></h3>
            </div>
    
          </div>
          <?php if ($_smarty_tpl->tpl_vars['showMsg']->value!='') {?>
          <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['showMsg']->value;?>
</div>
          <?php }?>
          <div class="clearfix"></div>
    
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Project Inprogress</h2>
                  <a href="index.php" class="btn btn-warning" style="float:right">Back To Dashboard</a>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable1" class="table table-striped table-bordered jambo_table">
                    <thead>
                      <tr >
                          <th width="3%">ID</th>
                          <th >Project Name</th>
                          <th >Project Specification</th>
                          <th >Committed Month</th>
                          <th >Project Status</th>
                          <th >Payment Status</th>
                          <th >Project Type</th>
                          <th >Added Date</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['project_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
                     <tr>		
                      <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['project_name'];?>
</td>
                      <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['specification'];?>
</td>
                      <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['month_committed'];?>
</td>
                      <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['project_status'];?>
</td>
                      <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['payment_status'];?>
</td>
                      <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['project_type'];?>
</td>
                      <td style="text-align:center;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date'],"%d-%m-%Y");?>
</td>
                     
                      </tr>
                      <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                      <tr>
                          <td colspan="8" style="text-align:center; color:red;">No record found...!</td>
                      </tr>
                      
                      <?php } ?>
    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>    
        </div>
      </div><div class="clearfix"></div>
    <!-- /page content -->
    <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
    
<?php }} ?>
