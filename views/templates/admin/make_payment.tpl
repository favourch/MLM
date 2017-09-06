<script>
$('document').ready(function(){
  setvaluetosession();
});
</script>
{include file="admin/header.tpl"}
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Make Deposit</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	<div class="alert alert-success" style="text-transform:uppercase">Please Choose Your Plan:</div>
                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box" >
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                             {$plan_rslt.plan_name}
                            </div>
                          </div>
                          <div class="x_title">
                            <h2><i class="fa fa-usd" aria-hidden="true"></i> <b>{$plan_rslt.min} - {$plan_rslt.max}</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Deposit Amount(BTC)</h4>
                            <div class="divider"></div>
                            
                            <form method="post" action ="pay-per-membership.php">
                           <div class="form-group col-md-12">
                           <input type="hidden"  value="{$plan_rslt.plan_id}"  name="plan_id"/>
                                <input type="number" step="0.00001" required="" id="amount" name="amount" class="form-control" value="{$MinPay}"  style="text-align:right">
                           </div>
                           <center> <button type="submit" id = "PayWithBitcoin" value="Pay_With_Bitcoin" name="PayWithBitcoin" class="btn btn-info" style="margin-top:20px">Pay With Bitcoin</button></center >
                           <!-- a href="pay-per-membership.php">Deposit</a -->
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
       {include file="admin/footer.tpl"}
       <style>
       .name_title{ margin-top:15px !important}
       </style>
       <script>
       function setvaluetosession(){
         var deposit_amount = $('#amount').val();
         alert(deposit_amount);
       }
       </script>