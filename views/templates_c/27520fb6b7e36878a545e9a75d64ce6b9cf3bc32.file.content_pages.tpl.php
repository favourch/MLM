<?php /* Smarty version Smarty-3.1.16, created on 2017-03-05 10:43:19
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\content_pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:831558bbdda3c071a0-67118512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27520fb6b7e36878a545e9a75d64ce6b9cf3bc32' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\content_pages.tpl',
      1 => 1488706998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '831558bbdda3c071a0-67118512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58bbdda3c4d6a5_09200661',
  'variables' => 
  array (
    'displayMsg' => 0,
    'id' => 0,
    'PAGE_LABEL' => 0,
    'meta_contents_qry' => 0,
    'ImageFile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bbdda3c4d6a5_09200661')) {function content_58bbdda3c4d6a5_09200661($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\function.html_options.php';
?> <?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
           <?php if ($_smarty_tpl->tpl_vars['displayMsg']->value!='') {?>
            <div class="alert alert-info" style="color:#27A0E6;"><?php echo $_smarty_tpl->tpl_vars['displayMsg']->value;?>
</div>
            <?php }?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cms Content  <small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="cms_list.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                    <form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <div class="form-group col-md-2 row">
                         			<label for="exampleInputEmail1">Page Label <span class="red">(Required)</span></label>
                                      <select name="pagelabel" id="pagelabel" class="form-control">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['label'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PAGE_LABEL']->value,'selected'=>$_tmp1),$_smarty_tpl);?>

                                      </select>
                        </div><div class="clearfix"></div>
                         <div class="form-group">
                                        <label for="exampleInputEmail1">Page Title <span class="red">(Required)</span></label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Page Title" value="<?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['title'];?>
">
                                 </div>
                         <div class="form-group">
                                        <label for="exampleInputEmail1">Meta Title <span class="red">(Optional)</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title" value="<?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['meta_title'];?>
">
                                 </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Meta Keyword <span class="red">(Optional)</span></label>
                                <textarea class="form-control" name="meta_keyword" placeholder="Enter Meta Keyword"><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['meta_keyword'];?>
</textarea>
                             </div>
                         <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description <span class="red">(Optional)</span></label>
                                <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description"><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['meta_description'];?>
</textarea>
                             </div>
                
                        <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Image Upload <span class="red">(Optional)</span></label><br>
                            <?php echo $_smarty_tpl->tpl_vars['ImageFile']->value;?>

                             </div>-->
                         <div class="form-group">
                            <label for="exampleInputEmail1">Video Link <span class="red">(Optional)</span></label>
                            <textarea class="form-control" name="videolink" placeholder="Enter Short Description"><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['videolink'];?>
</textarea>
                         </div>
                        
                          <div class="form-group">
                                <label for="exampleInputEmail1">Short Description <span class="red">(Optional)</span></label>
                                <textarea class="form-control" name="short_desc" placeholder="Enter Short Description"><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['short_desc'];?>
</textarea>
                             </div>
                        <div class="entry">
                            <button type="submit" name="submit_text" value="Submit" class="btn btn-success">Save page</button> <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form> 
                  </div>
                </div>
          </div>
 
        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
