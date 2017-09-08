<?php /* Smarty version Smarty-3.1.16, created on 2017-09-07 18:06:29
         compiled from "\xampp\htdocs\MLM\\views\templates\backend\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2985459b108d0de5a11-98295189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bcedbd78ff2f1e682c11f4106f7caa834634aaf' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\backend\\index.tpl',
      1 => 1504800388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2985459b108d0de5a11-98295189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b108d0e24214_69697179',
  'variables' => 
  array (
    'admin_id' => 0,
    'today_date' => 0,
    'gettotaluser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b108d0e24214_69697179')) {function content_59b108d0e24214_69697179($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("backend/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <?php if ($_smarty_tpl->tpl_vars['admin_id']->value=='admin') {?>
              <div class="animated flipInY col-md-3 " style=" padding:0; margin-left:10px">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
               <h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF; text-transform:uppercase">User Registered Today</h5>
                  <div class="count text-center" style="padding:15px"> <?php echo $_smarty_tpl->tpl_vars['today_date']->value;?>
 User</div>
                </div>
              </div>
               <div class="animated flipInY col-md-3 " style=" padding:0; margin-left:10px">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
               <h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF; text-transform:uppercase">Total Active User</h5>
                  <div class="count text-center" style="padding:15px"> <?php echo $_smarty_tpl->tpl_vars['gettotaluser']->value;?>
 Users</div>
                </div>
              </div>
	
             <?php }?>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                      <div class="btcwdgt-chart"></div>
                      <div class="tiles">
                      </div>
                    </div>

                    <div class="col-md-5 " style="overflow:scroll">
                      <div>
                        <div class="x_title">
                        <div class="btcwdgt-news" bw-entries="10"></div>
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
</div>
<?php echo $_smarty_tpl->getSubTemplate ("backend/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<style>
.tile-stats{border:1px solid #ccc; padding:5px}
</style>
<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>

<?php }} ?>
