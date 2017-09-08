<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 17:36:35
         compiled from "\xampp\htdocs\MLM\\views\templates\office\add_user_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1505759b29b5b193b89-08394626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f4623eff7850f1747a1670a2dc08217b4e7be9' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\office\\add_user_registration.tpl',
      1 => 1504884992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1505759b29b5b193b89-08394626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b29b5b1ed903_38313833',
  'variables' => 
  array (
    'displayMsg' => 0,
    'id' => 0,
    'GetUser_Qry' => 0,
    'GENDER' => 0,
    'NATIONALITY' => 0,
    'GetDetails_Qry' => 0,
    'BLOCKSTATUS' => 0,
    'Block_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b29b5b1ed903_38313833')) {function content_59b29b5b1ed903_38313833($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\function.html_options.php';
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
                    <h2>User Details <small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="user_registration.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                
                   <form action="" method="post" id="addprojectForm" name="addprojectForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Desired Username </label>
                                <input type="text" class="form-control" required="required" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['GetUser_Qry']->value['desired_username'], 'UTF-8');?>
" readonly="readonly">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Your Fullname </label>
                                <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['your_fullname'];?>
" >
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile"  value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['mobile'];?>
" readonly="readonly" >
                           </div>
                           <!--<div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Define Password</label>
                                <input type="text" class="form-control" name="definepass"  id="definepass" value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['define_password'];?>
">
                           </div>-->
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['email_address'];?>
" readonly="readonly">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Sponsor </label>
                                <input type="text" class="form-control" name="sponser" id="sponser" value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['sponsor'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Placement Id</label>
                                <input type="text" class="form-control" name="placement_id" id="placement_id"   value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['placement_id'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Bitcoin Address</label>
                                <input type="text" class="form-control" name="bitcoinaddress" id="bitcoin_address"  value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['bitcoin_address'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Gender</label>
                               <select class="form-control" name="gender" required="required">
                                  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['gender'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['GENDER']->value,'selected'=>$_tmp1),$_smarty_tpl);?>

                                 </select>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">DOB</label>
                                <input type="text" class="form-control" name="dob" id="dob"  value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['dob'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">PassPort</label>
                                <input type="text" class="form-control" name="passport" id="passport"  value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['passport'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Nationality</label>
                                <select class="form-control" name="nationility" required="required">
                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['nationality'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['NATIONALITY']->value,'selected'=>$_tmp2),$_smarty_tpl);?>

                                 </select>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="address" id="address"   value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['address'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Street</label>
                                <input type="text" class="form-control" name="street" id="street"   value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['street'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" name="city" id="city"   value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['city'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Postal Code</label>
                                <input type="text" class="form-control" name="postalcode" id="postalcode"   value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['postal_code'];?>
">
                           </div>
                           
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Required Placement </label>
                                <input type="text" class="form-control" name="required_placement" id="required_placement"   value="<?php echo $_smarty_tpl->tpl_vars['GetUser_Qry']->value['required_placement'];?>
">
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">User Block Status </label>
                                <select class="form-control" name="blockstatus" required="required">
                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['Block_status']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['BLOCKSTATUS']->value,'selected'=>$_tmp3),$_smarty_tpl);?>

                                 </select>
                           </div>
                           
                          <div class="clearfix"></div>
                      		<div class="col-md-4">
                                <button type="submit" name="submit_user" value="Submit" class="btn btn-primary">Save Data</button>
                                <a href="user_registration.php" class="btn btn-primary">Cancel</a>
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
