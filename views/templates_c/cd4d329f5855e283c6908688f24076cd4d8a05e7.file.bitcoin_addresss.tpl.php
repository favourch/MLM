<?php /* Smarty version Smarty-3.1.16, created on 2017-09-04 11:27:32
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\bitcoin_addresss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171559aa7856cdcca0-12798338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4d329f5855e283c6908688f24076cd4d8a05e7' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\bitcoin_addresss.tpl',
      1 => 1504517247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171559aa7856cdcca0-12798338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa7856d05c45_66168937',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa7856d05c45_66168937')) {function content_59aa7856d05c45_66168937($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    	<div class="col-md-4 padset" ><input type="radio" name ="payment_address" value="blockchain" />&nbsp;&nbsp;<img src="../admin/img/blockchain.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="coinbase"/>&nbsp;&nbsp;<img src="../admin/img/coinbase.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="bitcoincoid" />&nbsp;&nbsp;<img src="../admin/img/bitcoincoid.png" /></div>
                        <div class="col-md-4 padset" ><input type="radio" name ="payment_address" value="zebpay" />&nbsp;&nbsp;<img src="../admin/img/zebpay.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="bitpay"/>&nbsp;&nbsp;<img src="../admin/img/bitpay.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="bitsquare" />&nbsp;&nbsp;<img src="../admin/img/bitsquare.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="bitfinex" />&nbsp;&nbsp;<img src="../admin/img/bitfinex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="cex" />&nbsp;&nbsp;<img src="../admin/img/cex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="copay" />&nbsp;&nbsp;<img src="../admin/img/copay.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="localbitcoin"/>&nbsp;&nbsp;<img src="../admin/img/localbitcoin.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="luno" />&nbsp;&nbsp;<img src="../admin/img/luno.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="poloniex" />&nbsp;&nbsp;<img src="../admin/img/poloniex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="remitano" />&nbsp;&nbsp;<img src="../admin/img/remitano.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="xapo" />&nbsp;&nbsp;<img src="../admin/img/xapo.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="payment_address" value="btccom" />&nbsp;&nbsp;<img src="../admin/img/btccom.png" /></div>
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
