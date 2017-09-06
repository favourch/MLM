{include file="admin/header.tpl"}
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
       {include file="admin/footer.tpl"}
       {literal}
       <style>
       .padset{margin:10px 0; padding:10px; border:1px solid #eee}
       </style>
       {/literal}