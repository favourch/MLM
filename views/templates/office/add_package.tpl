 {include file="office/header.tpl"}
  <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
           {if $displayMsg neq ""}
            <div class="alert alert-info" style="color:#27A0E6;">{$displayMsg}</div>
            {/if}
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{$GetPlan_Qry.plan_name|upper} Plan  Details <small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="package" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form action="" method="post" id="addprojectForm" name="addprojectForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="{$id}">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Plan Name </label>
                                <input type="text" class="form-control" required="required" name="plan_name" value="{$GetPlan_Qry.plan_name|upper}" >
                           </div>
                           <div class="form-group col-md-1">
                                <label for="exampleInputEmail1"> Color </label>
                                <input type="color" name="bg_color" value="{$GetPlan_Qry.bg_color}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Minimum </label>
                                <input type="text" class="form-control" name="min" id="min" required="required" value="{$GetPlan_Qry.min}" >
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Maximum</label>
                                <input type="text" class="form-control" name="max" id="max" required="required" value="{$GetPlan_Qry.max}"  >
                           </div>
                          
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Profit Term</label>
                                <input type="text" class="form-control" name="profit_term" id="profit_term"  required="required" value="{$GetPlan_Qry.profit_term}" >
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Sponsor Bonus </label>
                                <input type="text" class="form-control" name="sponsor_bonus" id="sponsor_bonus" required="required" value="{$GetPlan_Qry.sponsor_bonus}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Paring Bonus</label>
                                <input type="text" class="form-control" required="required" name="paring_bonus" id="paring_bonus"   value="{$GetPlan_Qry.paring_bonus}">
                           </div>
                            <div class="form-group  col-md-4">
                                 <select class="form-control" name="status" required="required">
                                  {html_options options=$PACKAGE_STATUS selected={$GetPlan_Qry.status}}
                                 </select>
                           </div>
                          
                           
                          <div class="clearfix"></div>
                      		<div class="col-md-4">
                                <button type="submit" name="submit_plan" value="Submit" class="btn btn-primary">Update</button>
                                <a href="package" class="btn btn-primary">Cancel</a>
                            </div>
                          </div>
                             <div class="clearfix"></div>

                        </form>
                  </div>
                </div>
          </div>
          </div>
          </div>
  
 
        <!-- /page content -->
{include file="office/footer.tpl"}

