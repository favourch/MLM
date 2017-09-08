{include file="office/header.tpl"}
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plan Details</h2>
                  	<a href="add_package.php"><button class="btn btn-success" style="float:right">Add New</button></a>
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-left:80PX; padding-bottom:50px;background:#F2DEDE">
                  
                     {foreach from=$planqry_rslt item=content_item name=content_name}
                      <div class="col-md-4 col-xs-12 widget widget_tally_box" >
                        <div class="x_panel ui-ribbon-container fixed_height_390" style="background:{$content_item.bg_color}" onclick="">
                          <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                            	{$content_item.plan_name}
                            </div>
                          </div>
                          <div class="x_title">
                            <h2><img src="../user/img/bitcoin-coin.png" style="width:30px; height:30px" ><b> {$content_item.min} - {$content_item.max}</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <h4 class="name_title">Min {$content_item.min}  BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Max {$content_item.max} BTC</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Profit Term {$content_item.profit_term} Days</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Sponsor Bonus {$content_item.sponsor_bonus}%</h4>
                            <div class="divider"></div>
                            <h4 class="name_title" >Pairing Bonus {$content_item.paring_bonus}%</h4>
                            <div class="divider"></div>
                            
                          {if $admin_id eq admin} <center><a href="add_package.php?plan_id={$content_item.plan_id}"> <button class="btn btn-primary" style="margin-top:20px">
                          Update  </button></a> &nbsp;&nbsp;&nbsp; {if $content_item.status eq 0}<img src="../user/img/wrong.png" />{else}<img src="../user/img/right.png" />{/if}</center>{/if}
                           
                          </div>
                        </div>
                      </div>
                      {foreachelse}
                        
                            <p style="text-align:center; color:red;">No record found...!<p>
                        
                       {/foreach} 
                      
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       {include file="office/footer.tpl"}
       <style>
       .name_title{ margin-top:15px !important}
       </style>