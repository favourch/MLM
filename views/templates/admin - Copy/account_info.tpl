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
                    <h2>Account Information / Deposit Information</h2>
                   
                   
                    <div class="clearfix"></div>
                  </div>
                	<!--<div class="alert alert-danger">Your Bitcoin! Deposit</div>-->
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table">
                      <caption class="alert alert-success"><b>{if $plan_rslt.plan_id eq '1'} SILVER {elseif $plan_rslt.plan_id eq '2'}	
GOLD {elseif $plan_rslt.plan_id eq '3'}	 PLATINUM {else} No Plan Selected {/if} </b></caption>
                        {if $plan_rslt.plan_id eq '0'}
                        <tr>
                            <td colspan="8" style="text-align:center; color:red;">No deposits for this plan...!</td>
                        </tr>
                        {else}
                        <thead>
                        
                          <tr class="headings">
                           	 	<th >Plan</th>
                                <th >Spent Amount (BTC)</th>
                                <th >Deposit Date</th>
                                <th >Total Profit</th>
                                <th >Days of Profit</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                        <tr>
                            <td>{if $plan_rslt.plan_id eq '1'} SILVER {elseif $plan_rslt.plan_id eq '2'}	
GOLD {elseif $plan_rslt.plan_id eq '3'}	 PLATINUM {else} No Plan Selected{/if}</td>
                            <td>{$plan_rslt.deposit_amount}</td>
                            <td>{$plan_rslt.deposit_date}</td>
                            <td>{$plan_rslt.total_profit}</td>
                            <td>{$plan_rslt.days_of_profit}</td>
                        </tr>
                      
                       {/if}
                        </tbody>
                      </table>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       {include file="admin/footer.tpl"}