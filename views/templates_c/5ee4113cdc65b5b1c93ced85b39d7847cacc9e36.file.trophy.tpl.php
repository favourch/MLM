<?php /* Smarty version Smarty-3.1.16, created on 2017-02-20 11:02:56
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\trophy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3026358aabed08193e9-17622597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee4113cdc65b5b1c93ced85b39d7847cacc9e36' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\trophy.tpl',
      1 => 1479199260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3026358aabed08193e9-17622597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showMsg' => 0,
    'trophy_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58aabed085f8e7_30971843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aabed085f8e7_30971843')) {function content_58aabed085f8e7_30971843($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\modifier.date_format.php';
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
                    <h2>Trophies <small>Management</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     <li><span class="label-success label label-default"><a href="add-make.php" style="color:black; text-decoration:none;">Add New</a></span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered jambo_table">
                      <thead>
                        <tr >
                         <th >Title</th>
                         <th >Match Type</th>
                         <th >Price</th>
                         <th >Reg At</th>
                         <th >Actions</th>
                        </tr>
                      </thead>


                      <tbody>
                       <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trophy_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
                        <tr>
                           <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['title'];?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['match_type'];?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['price'];?>
</td>
                           <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['created_at'],"%B %e, %Y");?>
</td>
                          
                            <td class="center" style="text-align:right;">
                               <!-- <a class="btn btn-info" href="add-make.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
" title="Edit">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="make.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure want to delete this?');" title="Delete">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>-->
                            </td>
                        </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                        <tr>
                            <td colspan="3" style="text-align:center; color:red;">No record found...!</td>
                        </tr>
                        <?php } ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>    
          </div>
        </div>
        <!-- /page content -->
   <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
<?php }} ?>
