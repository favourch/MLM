 {include file="admin/header.tpl"}
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
                    <h2>Project  Details {$news_upload_path}<small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="projects.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                   <form action="" method="post" id="addprojectForm" name="addprojectForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="{$id}">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Project Name <span class="red">*</span></label>
                                <input type="text" class="form-control" name="project_name" id="project_name"  required="required" value="{$GetDetails_Qry.project_name|upper}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Specification <span class="red">*</span></label>
                                <input type="text" class="form-control" name="specification" id="specification" placeholder="eg:android application" value="{$GetDetails_Qry.specification}" required="required">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project UnderTaken by <span class="red">*</span></label>
                                <input type="text" class="form-control" name="undertaken_by" id="undertaken_by" required="required"  value="{$GetDetails_Qry.undertaken_by}" placeholder="aravind,manoj">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Duration<span class="red">*</span></label>
                                <input type="text" class="form-control" name="duration"   id="duration" value="{$GetDetails_Qry.duration}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Initial Cost Paid </label>
                                <input type="text" class="form-control" name="initial_cost_paid" id="initial_cost_paid" value="{$GetDetails_Qry.initial_cost_paid}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Total Cost </label>
                                <input type="text" class="form-control" name="total_cost" id="total_cost" value="{$GetDetails_Qry.total_cost}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Committed Month <span class="red">*</span></label>
                               <!-- <input type="text" class="form-control" name="month_committed" required="required"  value="{$GetDetails_Qry.month_committed}">-->
                                 <select class="form-control" name="month_committed" required="required">
                                 {html_options options=$MONTH_ARRAY selected={$GetDetails_Qry.month_committed}}
                                 </select>
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Started Date</label>
                               
                                  <div class="control-group">
                                    <div class="controls">
                                      <div class="col-md-12 row xdisplay_inputx form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" name="started_date" id="single_cal4" placeholder="Joining Date" aria-describedby="inputSuccess2Status4"  value="{$GetDetails_Qry.started_date}">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                      </div>
                                    </div>
                                  </div>
                                
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Deadline</label>
                               
                                  <div class="control-group">
                                    <div class="controls">
                                      <div class="col-md-12 row xdisplay_inputx form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" name="deadline" id="single_cal5" placeholder="Joining Date" aria-describedby="inputSuccess2Status4"  value="{$GetDetails_Qry.deadline}">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                      </div>
                                    </div>
                                  </div>
                                
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Root Source/Reference</label>
                                <input type="text" class="form-control" name="reference" id="reference"  required="required" value="{$GetDetails_Qry.reference}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Status </label>
                                <select class="form-control" name="project_status">
                                 {html_options options=$PROJECT_STATUS selected={$GetDetails_Qry.project_status}}
                                 </select>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Payment Status </label>
                                <select class="form-control" name="payment_status">
                                 {html_options options=$PAYMENT_STATUS selected={$GetDetails_Qry.payment_status}}
                                 </select>
                           </div>
                          
                          
                          
                          <div class="clearfix"></div>
                            <div class="form-group  col-md-8">
                                <label for="exampleInputEmail1">Project Description<span class="red">*</span></label>
                                <textarea  class="form-control" name="project_description"  rows="5">{$GetDetails_Qry.project_description}</textarea>
                           </div>
                            <!--<div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Experts Involved</label><br />
                               	<div class="col-md-4"><input type="checkbox" value="" /> Aravind</div>
                                <div class="col-md-4"><input type="checkbox"  value=""/> Manoj</div>
                                <div class="col-md-4"><input type="checkbox"  value="" /> Rajesh</div>
                                <div class="col-md-4"><input type="checkbox" value="" /> Ramesh</div>
                                <div class="col-md-4"><input type="checkbox"  value="" /> Ranjith</div>
                                
                           </div>-->
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Project Type</label>
                                 <select class="form-control" name="project_type">
                                 {html_options options=$PROJECT_TYPE selected={$GetDetails_Qry.project_type}}
                                 </select>
                           </div>
                          
                        </div>
                             <div class="clearfix"></div>
                              <hr />
                              <h2>Client Details</h2>
                              <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Client Name</label>
                                <input type="text" class="form-control" name="cname" id="cname" value="{$GetDetails_Qry.cname}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Contact Number</label>
                                <input type="text" class="form-control" name="cmobile_number" id="cmobile_number" value="{$GetDetails_Qry.cmobile_number}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email Id</label>
                                <input type="text" class="form-control" name="cemail_id" id="cemail_id" value="{$GetDetails_Qry.cemail_id}">
                           </div> 
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Skype Name</label>
                                <input type="text" class="form-control" name="cskype_id" id="cskype_id" value="{$GetDetails_Qry.cskype_id}">
                           </div> 
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Organization Name</label>
                                <input type="text" class="form-control" name="organization_name" id="organization_name" value="{$GetDetails_Qry.organization_name}">
                           </div> 
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Location</label>
                                <input type="text" class="form-control" name="clocation" id="clocation" value="{$GetDetails_Qry.clocation}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Live URL</label>
                                <input type="text" class="form-control" name="live_url" id="live_url" value="{$GetDetails_Qry.live_url}">
                           </div>  <div class="clearfix"></div>
                            <div class="entry">
                                <button type="submit" name="submit_project" value="Submit" class="btn btn-primary">Save Data</button>
                                <a href="experts.php" class="btn btn-primary">Cancel</a>
                            </div>
                            </div>
                        </form>
                  </div>
                </div>
          </div>
          
  
 
        <!-- /page content -->
{include file="admin/footer.tpl"}

