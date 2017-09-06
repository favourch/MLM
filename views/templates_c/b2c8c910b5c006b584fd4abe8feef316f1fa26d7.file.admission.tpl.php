<?php /* Smarty version Smarty-3.1.16, created on 2017-03-05 06:49:33
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\admission.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2427158ae77b801f0e2-15224998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c8c910b5c006b584fd4abe8feef316f1fa26d7' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\admission.tpl',
      1 => 1488692972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2427158ae77b801f0e2-15224998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ae77b8069464_45346372',
  'variables' => 
  array (
    'admission_rslt' => 0,
    'admission_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ae77b8069464_45346372')) {function content_58ae77b8069464_45346372($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>admission recorded in brainak database</small></h3>
              </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Button Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    Student Admission Registration Details. 
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Mobile Number</th>
                          <th>Email Id</th>
                          <th>College Name</th>
                          <th>Qualification</th>
                          <th>Department</th>
                          <th>Purpose</th>
                          <th>Staff</th>
                          <th>Total Payment</th>
                          <th>Admission Date</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php  $_smarty_tpl->tpl_vars['admission_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admission_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admission_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admission_item']->key => $_smarty_tpl->tpl_vars['admission_item']->value) {
$_smarty_tpl->tpl_vars['admission_item']->_loop = true;
?>
                      <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['name'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['mobile_no'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['email_id'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['college_name'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['qualification'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['department'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['purpose'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['staff_undertaken'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['total_payment'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['admission_item']->value['admission_date'];?>
</td>
                          
                        </tr>
                      
                       <?php }
if (!$_smarty_tpl->tpl_vars['admission_item']->_loop) {
?>
                       <?php } ?>
                    
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

   <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
