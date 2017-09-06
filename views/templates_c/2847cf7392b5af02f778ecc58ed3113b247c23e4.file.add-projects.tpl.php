<?php /* Smarty version Smarty-3.1.16, created on 2017-09-04 18:11:01
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\add-projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300959ad7b15e4a987-28325369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2847cf7392b5af02f778ecc58ed3113b247c23e4' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\add-projects.tpl',
      1 => 1489127589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300959ad7b15e4a987-28325369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayMsg' => 0,
    'news_upload_path' => 0,
    'id' => 0,
    'GetDetails_Qry' => 0,
    'MONTH_ARRAY' => 0,
    'PROJECT_STATUS' => 0,
    'PAYMENT_STATUS' => 0,
    'PROJECT_TYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59ad7b15ebbe01_53830531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad7b15ebbe01_53830531')) {function content_59ad7b15ebbe01_53830531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\MLM\\libs\\plugins\\function.html_options.php';
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
                    <h2>Project  Details <?php echo $_smarty_tpl->tpl_vars['news_upload_path']->value;?>
<small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="projects.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                   <form action="" method="post" id="addprojectForm" name="addprojectForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Project Name <span class="red">*</span></label>
                                <input type="text" class="form-control" name="project_name" id="project_name"  required="required" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['GetDetails_Qry']->value['project_name'], 'UTF-8');?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Specification <span class="red">*</span></label>
                                <input type="text" class="form-control" name="specification" id="specification" placeholder="eg:android application" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['specification'];?>
" required="required">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project UnderTaken by <span class="red">*</span></label>
                                <input type="text" class="form-control" name="undertaken_by" id="undertaken_by" required="required"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['undertaken_by'];?>
" placeholder="aravind,manoj">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Duration<span class="red">*</span></label>
                                <input type="text" class="form-control" name="duration"   id="duration" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['duration'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Initial Cost Paid </label>
                                <input type="text" class="form-control" name="initial_cost_paid" id="initial_cost_paid" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['initial_cost_paid'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Total Cost </label>
                                <input type="text" class="form-control" name="total_cost" id="total_cost" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['total_cost'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Committed Month <span class="red">*</span></label>
                               <!-- <input type="text" class="form-control" name="month_committed" required="required"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['month_committed'];?>
">-->
                                 <select class="form-control" name="month_committed" required="required">
                                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['month_committed'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['MONTH_ARRAY']->value,'selected'=>$_tmp1),$_smarty_tpl);?>

                                 </select>
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Started Date</label>
                               
                                  <div class="control-group">
                                    <div class="controls">
                                      <div class="col-md-12 row xdisplay_inputx form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" name="started_date" id="single_cal4" placeholder="Joining Date" aria-describedby="inputSuccess2Status4"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['started_date'];?>
">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                      </div>
                                    </div>
                                  </div>
                                
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Deadline</label>
                               
                                  <div class="control-group">
                                    <div class="controls">
                                      <div class="col-md-12 row xdisplay_inputx form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" name="deadline" id="single_cal5" placeholder="Joining Date" aria-describedby="inputSuccess2Status4"  value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['deadline'];?>
">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                      </div>
                                    </div>
                                  </div>
                                
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Root Source/Reference</label>
                                <input type="text" class="form-control" name="reference" id="reference"  required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['reference'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Status </label>
                                <select class="form-control" name="project_status">
                                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['project_status'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PROJECT_STATUS']->value,'selected'=>$_tmp2),$_smarty_tpl);?>

                                 </select>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Payment Status </label>
                                <select class="form-control" name="payment_status">
                                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['payment_status'];?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PAYMENT_STATUS']->value,'selected'=>$_tmp3),$_smarty_tpl);?>

                                 </select>
                           </div>
                          
                          
                          
                          <div class="clearfix"></div>
                            <div class="form-group  col-md-8">
                                <label for="exampleInputEmail1">Project Description<span class="red">*</span></label>
                                <textarea  class="form-control" name="project_description"  rows="5"><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['project_description'];?>
</textarea>
                           </div>
                            <!--<div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Experts Involved</label><br />
                               	<div class="col-md-4"><input type="checkbox" value="" /> Aravind</div>
                                <div class="col-md-4"><input type="checkbox"  value=""/> Manoj</div>
                                <div class="col-md-4"><input type="checkbox"  value="" /> Rajesh</div>
                                <div class="col-md-4"><input type="checkbox" value="" /> Ramesh</div>
                                <div class="col-md-4"><input type="checkbox"  value="" /> Ranjith</div>
                                
                           </div>-->
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Type</label>
                                 <select class="form-control" name="project_type">
                                 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['project_type'];?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PROJECT_TYPE']->value,'selected'=>$_tmp4),$_smarty_tpl);?>

                                 </select>
                           </div>
                          
                        </div>
                             <div class="clearfix"></div>
                              <hr />
                              <h2>Client Details</h2>
                              <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Client Name</label>
                                <input type="text" class="form-control" name="cname" id="cname" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['cname'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Contact Number</label>
                                <input type="text" class="form-control" name="cmobile_number" id="cmobile_number" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['cmobile_number'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email Id</label>
                                <input type="text" class="form-control" name="cemail_id" id="cemail_id" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['cemail_id'];?>
">
                           </div> 
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Skype Name</label>
                                <input type="text" class="form-control" name="cskype_id" id="cskype_id" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['cskype_id'];?>
">
                           </div> 
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Organization Name</label>
                                <input type="text" class="form-control" name="organization_name" id="organization_name" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['organization_name'];?>
">
                           </div> 
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Location</label>
                                <input type="text" class="form-control" name="clocation" id="clocation" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['clocation'];?>
">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Live URL</label>
                                <input type="text" class="form-control" name="live_url" id="live_url" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['live_url'];?>
">
                           </div>  <div class="clearfix"></div>
                            <div class="entry">
                                <button type="submit" name="submit_project" value="Submit" class="btn btn-primary">Save Data</button>
                                <a href="experts.php" class="btn btn-primary">Cancel</a>
                            </div>
                            </div>
                        </form>
                  </div>
                </div>
          </div>
          
  
 
        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
