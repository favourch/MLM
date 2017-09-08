{include file="user/header.tpl"}
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
                    <h2>Bitcoin Address </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="col-md-8">
                    <form method="post">
                    	<div class="col-md-4 padset" ><input type="radio" name ="bitcoin_type" {if $bitcoin_details.bitcoin_type eq 'blockchain'}checked{/if} value="blockchain" />&nbsp;&nbsp;<img src="../user/img/blockchain.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="coinbase" {if $bitcoin_details.bitcoin_type eq 'coinbase'}checked{/if} />&nbsp;&nbsp;<img src="../user/img/coinbase.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitcoincoid" {if $bitcoin_details.bitcoin_type eq 'bitcoincoid'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/bitcoincoid.png" /></div>
                        
                        <div class="col-md-4 padset" ><input type="radio" name ="bitcoin_type" value="zebpay" {if $bitcoin_details.bitcoin_type eq 'zebpay'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/zebpay.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitpay" {if $bitcoin_details.bitcoin_type eq 'bitpay'}checked{/if} />&nbsp;&nbsp;<img src="../user/img/bitpay.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitsquare" {if $bitcoin_details.bitcoin_type eq 'bitsquare'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/bitsquare.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitfinex" {if $bitcoin_details.bitcoin_type eq 'bitfinex'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/bitfinex.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="cex" {if $bitcoin_details.bitcoin_type eq 'cex'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/cex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="copay" {if $bitcoin_details.bitcoin_type eq 'copay'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/copay.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="localbitcoin" {if $bitcoin_details.bitcoin_type eq 'localbitcoin'}checked{/if} />&nbsp;&nbsp;<img src="../user/img/localbitcoin.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="luno"{if $bitcoin_details.bitcoin_type eq 'luno'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/luno.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="poloniex" {if $bitcoin_details.bitcoin_type eq 'poloniex'}checked{/if} />&nbsp;&nbsp;<img src="../user/img/poloniex.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="remitano" {if $bitcoin_details.bitcoin_type eq 'remitano'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/remitano.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="xapo"  {if $bitcoin_details.bitcoin_type eq 'xapo'}checked{/if} />&nbsp;&nbsp;<img src="../user/img/xapo.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="btccom" {if $bitcoin_details.bitcoin_type eq 'btccom'}checked{/if}  />&nbsp;&nbsp;<img src="../user/img/btccom.png" /></div>
                        <div class="col-md-8 "><input class="col-md-8" type="text" value="{$bitcoin_details.bitcoin_address}" name="bitcoin_address"  placeholder="Bitcoin Address" /></div><div class="clearfix"></div>
                        <div class="col-md-3 " style="margin-top:10px"><input class="col-md-8 btn btn-primary" type="submit" name="bitadd_btn"  value="Update" /></div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       {include file="user/footer.tpl"}
       {literal}
       <style>
       .padset{margin:10px 0; padding:10px; border:1px solid #eee}
       </style>
       {/literal}