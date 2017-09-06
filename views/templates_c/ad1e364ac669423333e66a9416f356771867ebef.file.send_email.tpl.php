<?php /* Smarty version Smarty-3.1.16, created on 2017-04-23 08:08:05
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\send_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88958fc3a69466607-79687241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad1e364ac669423333e66a9416f356771867ebef' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\send_email.tpl',
      1 => 1492927663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88958fc3a69466607-79687241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58fc3a69593289_33101378',
  'variables' => 
  array (
    'showMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc3a69593289_33101378')) {function content_58fc3a69593289_33101378($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3></h3>
        </div>

      </div>
      <?php if ($_smarty_tpl->tpl_vars['showMsg']->value!='') {?>
      <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['showMsg']->value;?>
</div>
      <?php }?>
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Site Enquiries</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
           		<form action="send_email.php" method="post" >
               		<div class="form-group col-md-4">
                       <label for="exampleInputEmail1">Email Id<span class="red">*</span></label>
                       <input type="email" class="form-control" name="email" id="email"  required="required"  >
                    </div><div class="clearfix"></div>
                    <div class="form-group col-md-4">
                       <input type="submit" class="form-control btn btn-success" name="email_send_btn" value="Submit" id="email_send_btn" >
                    </div>
                </form>
            </div>
          </div>
        </div>    
    </div>
  </div><div class="clearfix"></div>
<!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   

<?php }} ?>
