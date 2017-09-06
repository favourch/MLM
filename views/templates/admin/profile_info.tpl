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
                    <h2>PROFILE INFORMATION<small>UPDATE</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    Affiliate Link <br />
                   {if $account_status eq 1} <h2><b>{$Affiliate}?ref={$GetAffiliate_name_Qry} </b></h2>{/if}
                   <form action="" method="post" id="newsForm" name="newsForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="{$id}">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Full Name <span class="red">*</span></label>
                                <input type="text" class="form-control" name="fname" id="fname"  required="required" value="{$GetDetails_Qry.fname}">
                           </div>
                          
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Gender</label>
                                <select class="form-control" name="gender">
                                 {html_options options=$GENDER selected={$GetDetails_Qry.gender}}
                                 </select>
                           </div>
                           <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Date of Birth </label>
                                <input type="text" class="form-control" name="dob" id="dob"  
                                value="{$GetDetails_Qry.dob}">
                           </div>
                          
                          <!-- <div class="form-group  col-md-4">
                              <label for="exampleInputEmail1">Date of Birth</label>
                                <div class="control-group">
                                  <div class="controls">
                                    <div class="col-md-12 row xdisplay_inputx form-group has-feedback">
                                      <input type="text" class="form-control has-feedback-left" name="joining_date" id="single_cal4" placeholder="Joining Date" aria-describedby="inputSuccess2Status4"  value="{$GetDetails_Qry.joining_date}">
                                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                      <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                    </div>
                                  </div>
                                </div>
                           </div>-->
                          
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">NRIC/Passport/SSID</label>
                                <input type="text" class="form-control" name="passport"   id="passport" value="{$GetDetails_Qry.passport}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Phone </label>
                                <input type="text" class="form-control" name="phone" id="phone" value="{$GetDetails_Qry.phone}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email <span class="red">*</span></label>
                                <input type="email" class="form-control" name="email" required="required"  id="email" value="{$GetDetails_Qry.email}">
                           </div>
                           
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Nationality</label>
                                <select class="form-control" name="nationality">
                                 {html_options options=$NATIONALITY selected={$GetDetails_Qry.nationality}}
                                 </select>
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Address</label>
<textarea class="form-control" name="address" id="address" cols="40" rows="1">{$GetDetails_Qry.address}</textarea>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Street</label>
                                <input type="text" class="form-control"  name="street" id="street" value="{$GetDetails_Qry.street}">
                           </div><div class="clearfix"></div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" name="city" id="city" value="{$GetDetails_Qry.city}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Postal Code </label>
                                <input type="text" class="form-control" name="postal_code" id="postal_code" value="{$GetDetails_Qry.postal_code}">
                           </div>
                        </div>
                             <div class="clearfix"></div>
                                
                            <div class="entry">
                                <button type="submit" name="profile_info" value="profile_info" class="btn btn-primary">Update</button>
                                
                            </div>
                            </div>
                        </form>
                  </div>
                </div>
          </div>

        <!-- /page content -->
{include file="admin/footer.tpl"}

