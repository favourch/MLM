<?php /* Smarty version Smarty-3.1.16, created on 2017-09-06 07:36:19
         compiled from "\xampp\htdocs\MLM_new\\views\templates\admin\withdrawal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2024759af89536f83a3-55399873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b6ec2b476a0ab4a0c574c38e57a50db91d72ea8' => 
    array (
      0 => '\\xampp\\htdocs\\MLM_new\\\\views\\templates\\admin\\withdrawal.tpl',
      1 => 1504183067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024759af89536f83a3-55399873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59af8953c7a153_99461867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af8953c7a153_99461867')) {function content_59af8953c7a153_99461867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Withdrawal</h2>
                   
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box" >
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                        
                          <div class="x_title">
                            <h2><b>Withdrawal</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title" style="font-size:14px">  Available BTC amount: <i class="fa fa-usd" aria-hidden="true"></i>1.68500</h4>
                             <div class="divider"></div>
                          <form method="post">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Amount of withdrawal <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="number" id="first-name" required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Password <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="password"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <center><input type="submit" class="btn btn-warning"  value="Verify with Phone Number" />
                           </form>   
                              
                              
                           
                           
                          </div>
                        </div>
                      </div>
                      
                      
                      
               
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       <style>
       .name_title{ margin-top:15px !important}
       </style><?php }} ?>
