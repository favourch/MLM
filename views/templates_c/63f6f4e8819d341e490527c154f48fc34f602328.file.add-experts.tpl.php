<?php /* Smarty version Smarty-3.1.16, created on 2017-03-18 10:36:23
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\add-experts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652358ad773ed6f122-83674022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f6f4e8819d341e490527c154f48fc34f602328' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\add-experts.tpl',
      1 => 1489829762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652358ad773ed6f122-83674022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ad773eda9aa1_91689366',
  'variables' => 
  array (
    'displayMsg' => 0,
    'news_upload_path' => 0,
    'id' => 0,
    'GetDetails_Qry' => 0,
    'EMP_STATUS' => 0,
    'ImageFile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad773eda9aa1_91689366')) {function content_58ad773eda9aa1_91689366($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\function.html_options.php';
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
                    <h2>Experts Personal Details <?php echo $_smarty_tpl->tpl_vars['news_upload_path']->value;?>
<small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="experts.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                   <form action="" method="post" id="newsForm" name="newsForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">First Name <span class="red">*</span></label>
                                <input type="text" class="form-control" name="fname" id="fname"  required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['fname'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Middle Name</label>
                                <input type="text" class="form-control" name="mname" id="mname" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['mname'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Last Name <span class="red">*</span></label>
                                <input type="text" class="form-control" name="lname" id="lname" required="required"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['lname'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Mobile Number<span class="red">*</span></label>
                                <input type="text" class="form-control" name="mobile_number" required="required"  id="mobile_number" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['mobile_number'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Alternate Number </label>
                                <input type="text" class="form-control" name="alternate_number" id="alternate_number" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['alternate_number'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Emergency Contact Numbers <span class="red">*</span></label>
                                <input type="text" class="form-control" name="emergency_contact_numbers" required="required"  id="emergency_contact_numbers" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['emergency_contact_numbers'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Personal Email Id <span class="red">*</span></label>
                                <input type="text" class="form-control" required="required"  name="personal_email_id" id="personal_email_id" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['personal_email_id'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email Id</label>
                                <input type="text" class="form-control" name="email_id" id="email_id" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['email_id'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Skype Name </label>
                                <input type="text" class="form-control" name="skype_name" id="skype_name" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['skype_name'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Aadhar card </label>
                                <input type="text" class="form-control" name="aadhar_number" id="aadhar_number" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['aadhar_number'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Qualification <span class="red">*</span></label>
                                <input type="text" class="form-control" name="qualification" id="qualification" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['qualification'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Designation<span class="red">*</span></label>
                                <input type="text" class="form-control" name="designation" id="designation" required="required"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['designation'];?>
">
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Blood Group<span class="red">*</span></label>
                                <input type="text" class="form-control" name="blood_group" id="blood_group" required="required"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['blood_group'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Joining Date</label>
                               
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
                                
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Relieving Date</label>
                                <fieldset>
                                  <div class="control-group">
                                    <div class="controls">
                                      <div class="col-md-12 row xdisplay_inputx form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" name="relieving_date" id="single_cal4" placeholder="Admin Process" aria-describedby="inputSuccess2Status4">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                      </div>
                                    </div>
                                  </div>
                                </fieldset>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Date Of Birth</label>
                                <input type="text" class="form-control" name="dob" id="dob" placeholder="eg (07-07-1985)" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['dob'];?>
">
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Employee Id</label>
                                <input type="text" class="form-control" name="employee_id" id="employee_id" placeholder="Admin Process" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['employee_id'];?>
">
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" name="status">
                                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['status'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['EMP_STATUS']->value,'selected'=>$_tmp1),$_smarty_tpl);?>

                                 </select>
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Address<span class="red">*</span></label>
<textarea class="form-control" name="address" id="address" cols="40" rows="5"><?php if ($_smarty_tpl->tpl_vars['GetDetails_Qry']->value['address']!='') {?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['address'];?>
<?php }?></textarea>

                           </div>
                           <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Profile Image</label><br>
                                    <?php echo $_smarty_tpl->tpl_vars['ImageFile']->value;?>

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
