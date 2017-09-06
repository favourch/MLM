<?php /* Smarty version Smarty-3.1.16, created on 2017-08-31 07:41:34
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\enquiry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2956359a7a18ea4dea1-81704306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '583b428c1fa0efd6b846d3c6c36fde1a21f2daec' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\enquiry.tpl',
      1 => 1487762028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2956359a7a18ea4dea1-81704306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showMsg' => 0,
    'enquiry_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a7a18eaa3da2_76091314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a7a18eaa3da2_76091314')) {function content_59a7a18eaa3da2_76091314($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\AMLM\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
              <h2>Site Enquiries</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered jambo_table">
                <thead>
                  <tr >
                      <th width="3%">ID</th>
                      <th width="35%">Name</th>
                      <th width="10%">Email</th>
                      <th width="10%">Mobile Number	</th>
                      <th width="10%">Type</th>
                      <th width="15%">Added Date </th>
                      <th width="12%">Options</th>
                  </tr>
                </thead>
                <tbody>
               <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enquiry_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                 <tr>		
                  <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['name'];?>
<br><b>Message: </b> <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['content_item']->value['message']);?>
</td>
                  <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['email_id'];?>
</td>
                  <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['mobile_number'];?>
</td>
                  <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['content_item']->value['type'];?>
</td>
                  <td style="text-align:center;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date'],"%d-%m-%Y");?>
</td>
                  
                  <td class="options-width">
                  <a href="enquiry.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure want to delete this? ');" class="btn btn-danger" title="Delete">
                  <i class="fa fa-trash-o"></i> Delete
                  </a>
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
