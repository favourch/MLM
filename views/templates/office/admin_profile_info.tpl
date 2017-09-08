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
                    <h2>ADMIN INFORMATION<small>UPDATE</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form action="" method="post" id="AdminForm" name="AdminForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="{$id}">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Username <span class="red">*</span></label>
                                <input type="text" class="form-control" name="username" id="username"  required="required" value="{$GetDetails_Qry.username}">
                           </div>
                          
                       
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" required="required"  id="email" value="{$GetDetails_Qry.email}">
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Website Name </label>
                                <input type="text" class="form-control" name="website_name"  id="website_name" value="{$GetDetails_Qry.website_name}">
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Contact Number</label>
                                <input type="tel" class="form-control" name="phone"  id="phone" value="{$GetDetails_Qry.phone}">
                           </div>

                        </div>
                             <div class="clearfix"></div>
                                
                            <div class="entry col-md-12">
                                <button type="submit" name="admin_info" value="admin_info" class="btn btn-primary">Update</button>
                                
                            </div>
                            
                        </form>
                  </div>
                </div>
          </div>
          </div>

        <!-- /page content -->
{include file="office/footer.tpl"}

