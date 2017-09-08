<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 16:38:37
         compiled from "\xampp\htdocs\MLM\\views\templates\office\add_package.tpl" */ ?>
<?php /*%%SmartyHeaderCode:715759b28a66c4fc44-68770195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a7ff901e6fd60a04c9962df2d254d8274d747ae' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\office\\add_package.tpl',
      1 => 1504881516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '715759b28a66c4fc44-68770195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b28a66c922c8_14206398',
  'variables' => 
  array (
    'displayMsg' => 0,
    'GetPlan_Qry' => 0,
    'id' => 0,
    'PACKAGE_STATUS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b28a66c922c8_14206398')) {function content_59b28a66c922c8_14206398($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\function.html_options.php';
?> <?php echo $_smarty_tpl->getSubTemplate ("office/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['GetPlan_Qry']->value['plan_name'], 'UTF-8');?>
 Plan  Details <small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="package" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form action="" method="post" id="addprojectForm" name="addprojectForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Plan Name </label>
                                <input type="text" class="form-control" required="required" name="plan_name" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['GetPlan_Qry']->value['plan_name'], 'UTF-8');?>
" >
                           </div>
                           <div class="form-group col-md-1">
                                <label for="exampleInputEmail1"> Color </label>
                                <input type="color" name="bg_color" value="<?php echo $_smarty_tpl->tpl_vars['GetPlan_Qry']->value['bg_color'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Minimum </label>
                                <input type="text" class="form-control" name="min" id="min" required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetPlan_Qry']->value['min'];?>
" >
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Maximum</label>
                                <input type="text" class="form-control" name="max" id="max" required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetPlan_Qry']->value['max'];?>
"  >
                           </div>
                          
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Profit Term</label>
                                <input type="text" class="form-control" name="profit_term" id="profit_term"  required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetPlan_Qry']->value['profit_term'];?>
" >
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Sponsor Bonus </label>
                                <input type="text" class="form-control" name="sponsor_bonus" id="sponsor_bonus" required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetPlan_Qry']->value['sponsor_bonus'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Paring Bonus</label>
                                <input type="text" class="form-control" required="required" name="paring_bonus" id="paring_bonus"   value="<?php echo $_smarty_tpl->tpl_vars['GetPlan_Qry']->value['paring_bonus'];?>
">
                           </div>
                            <div class="form-group  col-md-4">
                                 <select class="form-control" name="status" required="required">
                                  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetPlan_Qry']->value['status'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PACKAGE_STATUS']->value,'selected'=>$_tmp1),$_smarty_tpl);?>

                                 </select>
                           </div>
                          
                           
                          <div class="clearfix"></div>
                      		<div class="col-md-4">
                                <button type="submit" name="submit_plan" value="Submit" class="btn btn-primary">Update</button>
                                <a href="package" class="btn btn-primary">Cancel</a>
                            </div>
                          </div>
                             <div class="clearfix"></div>

                        </form>
                  </div>
                </div>
          </div>
          </div>
          </div>
  
 
        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("office/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
