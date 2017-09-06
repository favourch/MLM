<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 12:20:33
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1116358ad7401ed28a9-31551737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43dac8fbe850538b01d621eb2323a5b031434c0d' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\news.tpl',
      1 => 1472284672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1116358ad7401ed28a9-31551737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showMsg' => 0,
    'news_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ad7402030727_17236054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad7402030727_17236054')) {function content_58ad7402030727_17236054($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2></h2>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blog</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      <li><span class="label-success label label-default"><a href="add-news.php" style="color:black; text-decoration:none;">Add New</a></span></li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                	<?php if ($_smarty_tpl->tpl_vars['showMsg']->value!='') {?>
                    	<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['showMsg']->value;?>
</div>
                    <?php }?>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table">
                        <thead>
                          <tr class="headings">
                            <th >Title</th>
                                <th >Description</th>
                                <th >Date</th>
                                <th >Status</th>
                                <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['title'];?>
</td>
        <td><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['content_item']->value['description']),100,"...",true);?>
</td>
        <td class="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['nDate'],"%d-%m-%Y");?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['content_item']->value['status']==0) {?>
			<td class="center">Published</td>
		<?php } elseif ($_smarty_tpl->tpl_vars['content_item']->value['status']==1) {?>
			<td class="center">Hidden</td>
		<?php } else { ?>
			<td class="center">Deleted</td>
		<?php }?>
		<td class="center" style="text-align:right;">
            <!--<a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>-->
            <a class="btn btn-info" href="add-news.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
" title="Edit">
                <i class="fa fa-pencil-square-o"></i>
                Edit
            </a>
			
				<a class="btn btn-danger" href="news.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure want to delete this?');" title="Delete">
					<i class="fa fa-trash-o"></i>
					Delete
				</a>
			
				<!--<a class="btn btn-danger" href="news.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
&action=delete&status=delTrash" onclick="return confirm('Are you sure want to delete this?');" title="Delete">
					<i class="glyphicon glyphicon-trash icon-white"></i>
					Delete
				</a>-->
			
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
            </div>
          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
