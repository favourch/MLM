<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 13:03:15
         compiled from "\xampp\htdocs\MLM\\views\templates\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:901359b278f3d32544-49578036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2986306bfdbdf79baff9f15579e3aa622ad2093b' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\user\\index.tpl',
      1 => 1504868501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901359b278f3d32544-49578036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_id' => 0,
    'gettotalearnings' => 0,
    'getplan' => 0,
    'getwithdraw' => 0,
    'getprofit' => 0,
    'getsponser' => 0,
    'getparing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b278f3d80744_81847692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b278f3d80744_81847692')) {function content_59b278f3d80744_81847692($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <?php if ($_smarty_tpl->tpl_vars['admin_id']->value!='admin') {?>
              <div class="animated flipInY col-md-3 " style=" padding:0; margin-left:10px">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
               <h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF">AVAILABLE WALLET</h5>
                  <div class="count text-center" style="padding:15px"> <?php echo $_smarty_tpl->tpl_vars['gettotalearnings']->value['Total_Amount'];?>
</div>
                </div>
              </div>
             <?php if ($_smarty_tpl->tpl_vars['getplan']->value!='') {?> 
              <div class="animated flipInY col-md-3 col-md-offset-1" style=" padding:0;">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
                <a href=""><h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF"><b><?php echo $_smarty_tpl->tpl_vars['getplan']->value;?>
</b></h5></a>
                  <div class="count text-center" style="padding:15px">100/100</div>
                </div>
              </div>
              <?php }?>
              
             <!-- <div class="animated flipInY col-md-3 col-md-offset-1" style=" padding:0;">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
                <a href=""><h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF">RE-ENTRY WALLET</h5></a>
                  <div class="count text-center" style="padding:15px"> 0.00050</div>
                </div>
              </div>--><div class="clearfix"></div>

              <div class="animated flipInY col-md-2" >
                <div class="tile-stats" >
                  <div class="count" style=" "><?php if ($_smarty_tpl->tpl_vars['gettotalearnings']->value['Total_Amount']=='') {?>0.00000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['gettotalearnings']->value['Total_Amount'];?>
<?php }?></div>
                 <h5 style="text-align:center; background:#32B92D; padding:10px 0; margin:0;color:#FFF">TOTAL EARNING</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats"  >
                  <div class="count"><?php if ($_smarty_tpl->tpl_vars['getwithdraw']->value=='') {?>0.00000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['getwithdraw']->value;?>
<?php }?></div>
                 <h5 style="text-align:center; background:#FF6EB0; padding:10px 0; margin:0;color:#FFF">TOTAL WITHDRAW</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats" >
                  <div class="count"><?php if ($_smarty_tpl->tpl_vars['gettotalearnings']->value['deposit_amount']=='') {?>0.00000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['gettotalearnings']->value['deposit_amount'];?>
<?php }?></div>
                 <h5 style="text-align:center; background:#FFCB00; padding:10px 0; margin:0;; color:#FFF">TOTAL DEPOSIT</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats"  >
                  <div class="count"><?php if ($_smarty_tpl->tpl_vars['getprofit']->value=='') {?>0.00000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['getprofit']->value;?>
<?php }?></div>
                 <h5 style="text-align:center; background:#93228D; padding:10px 0; margin:0;color:#FFF">TOTAL PROFIT</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats" >
                  <div class="count"><?php if ($_smarty_tpl->tpl_vars['getsponser']->value=='') {?>0.00000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['getsponser']->value;?>
<?php }?></div>
                 <h5 style="text-align:center; background:#F20075; padding:10px 0; margin:0;color:#FFF">TOTAL SPONSOR</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats">
                  <div class="count"><?php if ($_smarty_tpl->tpl_vars['getparing']->value=='') {?>0.00000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['getparing']->value;?>
<?php }?></div>
                 <h5 style="text-align:center; background:#C70039; padding:10px 0; margin:0;color:#FFF">TOTAL BINARY</h5>
                </div>
              </div>
             <?php }?>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                      <!--<div class="demo-container" style="height:280px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>-->
                      <div class="btcwdgt-chart"></div>
                      <div class="tiles">
                       
                        <!--<div class="col-md-4 tile">
                          <span>Total Revenue</span>
                          <h2>$231,809</h2>
                          <span class="sparkline22 graph" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>-->
                       
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
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<style>
.tile-stats{border:1px solid #ccc; text-align:center; padding:0; padding-top:10px}
.tile-stats .count{font-size:24px;}
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
