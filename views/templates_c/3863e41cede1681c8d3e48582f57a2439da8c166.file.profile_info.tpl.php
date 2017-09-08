<?php /* Smarty version Smarty-3.1.16, created on 2017-09-06 20:16:14
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\profile_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331959aa78533e5d65-24186272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3863e41cede1681c8d3e48582f57a2439da8c166' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\profile_info.tpl',
      1 => 1504721502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331959aa78533e5d65-24186272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa7853434884_98833309',
  'variables' => 
  array (
    'displayMsg' => 0,
    'account_status' => 0,
    'Affiliate' => 0,
    'GetAffiliate_name_Qry' => 0,
    'id' => 0,
    'GetDetails_Qry' => 0,
    'GENDER' => 0,
    'NATIONALITY' => 0,
    'PLACEMENT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa7853434884_98833309')) {function content_59aa7853434884_98833309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\function.html_options.php';
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
                    <h2>PROFILE INFORMATION<small>UPDATE</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    Affiliate Link <br />
                   <?php if ($_smarty_tpl->tpl_vars['account_status']->value==1) {?> <h2><b><?php echo $_smarty_tpl->tpl_vars['Affiliate']->value;?>
?ref=<?php echo $_smarty_tpl->tpl_vars['GetAffiliate_name_Qry']->value;?>
 </b></h2><?php }?>
                   <form action="" method="post" id="newsForm" name="newsForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Full Name <span class="red">*</span></label>
                                <input type="text" class="form-control" name="fname" id="fname"  required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['fname'];?>
">
                           </div>
                          
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Gender</label>
                                <select class="form-control" name="gender">
                                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['gender'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['GENDER']->value,'selected'=>$_tmp1),$_smarty_tpl);?>

                                 </select>
                           </div>
                           <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Date of Birth </label>
                                <input type="text" class="form-control" name="dob" id="dob"  
                                value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['dob'];?>
">
                           </div>
                          
                          <!-- <div class="form-group  col-md-4">
                              <label for="exampleInputEmail1">Date of Birth</label>
                                <div class="control-group">
                                  <div class="controls">
                                    <div class="col-md-12 row xdisplay_inputx form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left" name="joining_date" id="single_cal4" placeholder="Joining Date" aria-describedby="inputSuccess2Status4"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['joining_date'];?>
">
                                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                    </div>
                                  </div>
                                </div>
                           </div>-->
                          
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">NRIC/Passport/SSID</label>
                                <input type="text" class="form-control" name="passport"   id="passport" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['passport'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Phone </label>
                                <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['phone'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email <span class="red">*</span></label>
                                <input type="email" class="form-control" name="email" required="required"  readonly="readonly" id="email" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['email'];?>
">
                           </div>
                           
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Nationality</label>
                                <select class="form-control" name="nationality">
                                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['nationality'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['NATIONALITY']->value,'selected'=>$_tmp2),$_smarty_tpl);?>

                                 </select>
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Address</label>
<textarea class="form-control" name="address" id="address" cols="40" rows="1"><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['address'];?>
</textarea>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Street</label>
                                <input type="text" class="form-control"  name="street" id="street" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['street'];?>
">
                           </div><div class="clearfix"></div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['city'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Postal Code </label>
                                <input type="text" class="form-control" name="postal_code" id="postal_code"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['postal_code'];?>
">
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Postal Code </label>
                                 <select class="form-control" name="placement" required="required">
                                 	<option value="">----- SELECT -----</option>
                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['required_placement'];?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PLACEMENT']->value,'selected'=>$_tmp3),$_smarty_tpl);?>

                                </select>
                           </div>
                           
                        </div>
                             <div class="clearfix"></div>
                                
                            <div class="entry">
                                <button type="submit" name="profile_info" value="profile_info" class="btn btn-primary">Update</button>
                                
                            </div>
                            </div>
                        </form>
                  </div>
                </div>
          </div>
          </div>

        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
