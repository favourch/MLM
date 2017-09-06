{include file="admin/header.tpl"}

  <!-- page content -->
  
        <div class="right_col" role="main">
            <div class="clearfix"></div>
           {if $msg neq ""}
            <div class="alert alert-info" style="color:#fff;">{$msg}</div>
            {/if}
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Website Settings</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="cms_list.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                  <form name="general-settings" method="POST" >
                    <!-- start id-form -->
                     <!--<div class="form-group">
                        <label for="exampleInputEmail1">Domain URL</label>
                        <input type="text" class="form-control" name="website_url" id="website_url" placeholder="Enter Website Url" value="{$gen_detail.website_url}">
                     </div>-->
                     <div class="form-group">
                        <label for="exampleInputEmail1">Website Name</label>
                        <input type="text" class="form-control" name="website_name" id="website_name" placeholder="Enter Website Name" value="{$gen_detail.website_name}">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Website Url</label>
                        <input type="text" class="form-control" name="weburl" id="weburl" placeholder="Enter Web URL" value="{$gen_detail.website_url}">
                     </div>
                     
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Save</button>
                    <a href="index.php" style="text-decoration:none;">Back to list</a>
                </form>

                  </div>
                </div>
          </div>
 
        <!-- /page content -->
{include file="admin/footer.tpl"}