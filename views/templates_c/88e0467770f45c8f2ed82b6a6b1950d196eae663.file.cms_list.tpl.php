<?php /* Smarty version Smarty-3.1.16, created on 2017-08-31 07:41:09
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\cms_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2789559a7a175708065-70332714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e0467770f45c8f2ed82b6a6b1950d196eae663' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\cms_list.tpl',
      1 => 1479207012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2789559a7a175708065-70332714',
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
  'unifunc' => 'content_59a7a17575a0e6_02090535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a7a17575a0e6_02090535')) {function content_59a7a17575a0e6_02090535($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\AMLM\\libs\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>CMS Page</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      <li><span class="label-success label label-default"><a href="content_pages.php" style="color:black; text-decoration:none;">Add New</a></span></li>
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
                            <th class="column-title" width="10%">Label </th>
                            <th class="column-title" width="10%">Title </th>
                            <th class="column-title">Description </th>
                             <th class="column-title">Video's </th>
                            <th class="column-title no-link last" width="20%">Action
                            </th> 
                          </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $_smarty_tpl->tpl_vars['content_item']->value['label'];?>
</td>
                            <td class=" "><?php echo $_smarty_tpl->tpl_vars['content_item']->value['title'];?>
</td>
                            <td class=" "><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['content_item']->value['description']),200,'..',true,true);?>
 </td>
                            <td class=" "><?php echo $_smarty_tpl->tpl_vars['content_item']->value['videolink'];?>
 </td>
                            <td class=" last"> <a class="btn btn-info" href="content_pages.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
" title="Edit">
                            <i class="fa fa-pencil-square-o"></i> Edit</a>
           					 <a class="btn btn-danger" href="cms_list.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
&action=delete" onclick="return confirm('Are you sure want to delete this?');" title="Delete"><i class="fa fa-trash-o"></i> Delete</a>
                            </td>
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
