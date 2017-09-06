<?php /* Smarty version Smarty-3.1.16, created on 2017-04-18 09:11:49
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\add-clients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3111758f5b3e795e841-07991372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc4f82efa2073dbfbca402da7f63a1ba1e52a99' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\add-clients.tpl',
      1 => 1492499182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3111758f5b3e795e841-07991372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58f5b3e7a067c5_87295032',
  'variables' => 
  array (
    'displayMsg' => 0,
    'news_upload_path' => 0,
    'ImageFile' => 0,
    'GetDetails_Qry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f5b3e7a067c5_87295032')) {function content_58f5b3e7a067c5_87295032($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <h2>Experts Personal Details <?php echo $_smarty_tpl->tpl_vars['news_upload_path']->value;?>
<small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="experts.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                   <form action="" method="post" id="clientform" name="clientform" enctype="multipart/form-data">
                   		<div class="col-md-12">
                           <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Client Image</label><br>
                                    <?php echo $_smarty_tpl->tpl_vars['ImageFile']->value;?>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Client  Name </label>
                                <input type="text" class="form-control" name="cname" id="cname"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['fname'];?>
">
                           </div>
                          <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Status </label>
                                <select class="form-control" name="status" >
                                	<option value="show">Show</option>
                                    <option value="hide">Hide</option>
                                </select>
                           </div>
                           </div>
                             <div class="clearfix"></div>   
                            <div class="entry">
                                <button type="submit" name="submit_expert" value="Submit" class="btn btn-primary">Submit</button>
                                <a href="experts.php" class="btn btn-primary">Cancel</a>
                            </div>
                            </div>
                        </form>
                  </div>
                </div>
          </div>
          
    <!-- <textarea name="address" id="address"  >
                                <?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['address'];?>

                                </textarea>-->
 
        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
