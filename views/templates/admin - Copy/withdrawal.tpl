{include file="admin/header.tpl"}
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
                    {$opt_mismatch}
                    {if $showMsg eq 'otpsend'}
                    <!---- OTP VERIFY SECTION STARTS-----> 
                     
                          <div class="x_panel ui-ribbon-container fixed_height_390 withdrawal_sec"  >
                          <div class="x_title" >
                            <h2><b>Withdrawal</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="alert alert-success">Verification code has been sent to your phone number {$mobile}!!</div>
                          
                          <div class="x_content">
                            <h4 class="name_title" style="font-size:14px">  Available BTC amount: <i class="fa fa-btc" aria-hidden="true"></i> {$avail_bal_rslt.Total_Amount}</h4>
                            <h4 class="name_title" style="font-size:14px">   Amount of withdrawal :<b>{$amount}</b></h4>
                           
                             <div class="divider"></div>
                          <form method="post">
                           <input type="hidden" name="tamt" value="{$avail_bal_rslt.Total_Amount}" />
                           <input type="hidden" name="wamt" value="{$amount}" />
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">SMS Verificaton Code : <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="text" name="otp_code"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <input type="submit" class="btn btn-warning" style="margin-left:10px" name="Withdrawal_btn"  value="Withdraw" />
                           </form>   
                          </div>
                        </div> 
 					<!---- OTP VERIFY SECTION ENDS-----> 
                    
                    {else}
                    <!---- WITHDRAWAL SECTION STARTS----->
                        <div class="x_panel ui-ribbon-container fixed_height_390 " id="withdrawal_sec" >
                          <div class="x_title" >
                            <h2><b>Withdrawal</b></h2>
                            
                            <div class="clearfix"></div>
                            {if $showMsg eq 'worngpass'}<div class="alert alert-danger">Password Missmatch !!</div>{/if}
                          </div>
                          <div class="x_content">
                            <h4 class="name_title" style="font-size:14px">  Available BTC amount: <i class="fa fa-btc" aria-hidden="true"></i> <b>{$avail_bal_rslt.Total_Amount}</b></h4>
                             <div class="divider"></div>
                          <form method="post">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Amount of withdrawal <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                   <input type="number" step="0.00001" required="" id="amount" name="amount" class="form-control" value="0.1" min="0.1"  style="text-align:right">
                                </div>
                              </div><br /><br /><br /><br />
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">Password <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="password" name="password"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <center><input type="submit" class="btn btn-warning" name="verify_btn"  value="Verify with Phone Number" /></center>
                           </form>   
                          </div>
                        </div>
                  <!---- WITHDRAWAL SECTION ENDS-----> 
                        {/if}
  
  
  
  
                    
  
                     </div>
                      {if $showMsg eq withdraw_success}
                      <style>
                      	#withdrawal_sec{ display:none}
                      </style>
                      <!---- WITHDRAWAL SUCCESS STARTS----->
                                  <div class="col-md-6 " style=" padding-top:20px;background:#FFF; margin-left:-100px ">
                                  	<div class="alert alert-success text-center" style="font-size:24px">Your Withdrawal Has Been Done Successfully Please Check Your Mail For Details </div>
                                  </div>
                    <!---- WITHDRAWAL SUCCESS ENDS-----> 
                    {/if} 
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