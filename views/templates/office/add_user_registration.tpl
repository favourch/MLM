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
                    <h2>User Details <small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="user_registration.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                
                   <form action="" method="post" id="addprojectForm" name="addprojectForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="{$id}">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Desired Username </label>
                                <input type="text" class="form-control" required="required" value="{$GetUser_Qry.desired_username|upper}" readonly="readonly">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Your Fullname </label>
                                <input type="text" class="form-control" name="fname" id="fname" value="{$GetUser_Qry.your_fullname}" >
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile"  value="{$GetUser_Qry.mobile}" readonly="readonly" >
                           </div>
                           <!--<div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Define Password</label>
                                <input type="text" class="form-control" name="definepass"  id="definepass" value="{$GetUser_Qry.define_password}">
                           </div>-->
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="text" class="form-control" name="email" id="email" value="{$GetUser_Qry.email_address}" readonly="readonly">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Sponsor </label>
                                <input type="text" class="form-control" name="sponser" id="sponser" value="{$GetUser_Qry.sponsor}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Placement Id</label>
                                <input type="text" class="form-control" name="placement_id" id="placement_id"   value="{$GetUser_Qry.placement_id}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Bitcoin Address</label>
                                <input type="text" class="form-control" name="bitcoinaddress" id="bitcoin_address"  value="{$GetUser_Qry.bitcoin_address}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Gender</label>
                               <select class="form-control" name="gender" required="required">
                                  {html_options options=$GENDER selected={$GetUser_Qry.gender}}
                                 </select>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">DOB</label>
                                <input type="text" class="form-control" name="dob" id="dob"  value="{$GetUser_Qry.dob}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">PassPort</label>
                                <input type="text" class="form-control" name="passport" id="passport"  value="{$GetUser_Qry.passport}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Nationality</label>
                                <select class="form-control" name="nationility" required="required">
                                    {html_options options=$NATIONALITY selected={$GetDetails_Qry.nationality}}
                                 </select>
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="address" id="address"   value="{$GetUser_Qry.address}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Street</label>
                                <input type="text" class="form-control" name="street" id="street"   value="{$GetUser_Qry.street}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" name="city" id="city"   value="{$GetUser_Qry.city}">
                           </div>
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Postal Code</label>
                                <input type="text" class="form-control" name="postalcode" id="postalcode"   value="{$GetUser_Qry.postal_code}">
                           </div>
                           
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Required Placement </label>
                                <input type="text" class="form-control" name="required_placement" id="required_placement"   value="{$GetUser_Qry.required_placement}">
                           </div>
                           
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">User Block Status </label>
                                <select class="form-control" name="blockstatus" required="required">
                                    {html_options options=$BLOCKSTATUS selected={$Block_status}}
                                 </select>
                           </div>
                           
                          <div class="clearfix"></div>
                      		<div class="col-md-4">
                                <button type="submit" name="submit_user" value="Submit" class="btn btn-primary">Save Data</button>
                                <a href="user_registration.php" class="btn btn-primary">Cancel</a>
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

