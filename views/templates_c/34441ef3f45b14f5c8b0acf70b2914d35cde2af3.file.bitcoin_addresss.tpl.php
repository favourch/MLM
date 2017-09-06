<?php /* Smarty version Smarty-3.1.16, created on 2017-08-31 15:46:41
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\bitcoin_addresss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1709559a80fc96d6fe4-97861531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34441ef3f45b14f5c8b0acf70b2914d35cde2af3' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\bitcoin_addresss.tpl',
      1 => 1504187200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1709559a80fc96d6fe4-97861531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a80fc9729063_67999029',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a80fc9729063_67999029')) {function content_59a80fc9729063_67999029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2></h2>
              </div>
             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bitcoin Address</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="col-md-8">
                    	<div class="col-md-4 padset" ><input type="radio" value="blockchain" />&nbsp;&nbsp;<img src="../admin/img/blockchain.png" /></div>
                        <div class="col-md-4 padset"><input type="radio"  value="coinbase"/>&nbsp;&nbsp;<img src="../admin/img/coinbase.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="bitcoincoid" />&nbsp;&nbsp;<img src="../admin/img/bitcoincoid.png" /></div>
                        <div class="col-md-4 padset" ><input type="radio" value="zebpay" />&nbsp;&nbsp;<img src="../admin/img/zebpay.png" /></div>
                        <div class="col-md-4 padset"><input type="radio"  value="bitpay"/>&nbsp;&nbsp;<img src="../admin/img/bitpay.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="bitsquare" />&nbsp;&nbsp;<img src="../admin/img/bitsquare.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="bitfinex" />&nbsp;&nbsp;<img src="../admin/img/bitfinex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="cex" />&nbsp;&nbsp;<img src="../admin/img/cex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="copay" />&nbsp;&nbsp;<img src="../admin/img/copay.png" /></div>
                        <div class="col-md-4 padset"><input type="radio"  value="localbitcoin"/>&nbsp;&nbsp;<img src="../admin/img/localbitcoin.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="luno" />&nbsp;&nbsp;<img src="../admin/img/luno.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="poloniex" />&nbsp;&nbsp;<img src="../admin/img/poloniex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="remitano" />&nbsp;&nbsp;<img src="../admin/img/remitano.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="xapo" />&nbsp;&nbsp;<img src="../admin/img/xapo.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" value="btccom" />&nbsp;&nbsp;<img src="../admin/img/btccom.png" /></div>
                        <div class="col-md-8 "><input class="col-md-8" type="text"  placeholder="Bitcoin Address" /></div><div class="clearfix"></div>
                        <div class="col-md-3 " style="margin-top:10px"><input class="col-md-8 btn btn-primary" type="submit"  value="Update" /></div>
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
       .padset{margin:10px 0; padding:10px; border:1px solid #eee}
       </style>
       <?php }} ?>
