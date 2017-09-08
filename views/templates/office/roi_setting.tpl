{include file="office/header.tpl"}
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>ROI SETTING</b></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="background:#F7F7F7; padding-top:50px; padding-bottom:50px">
                  <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 widget widget_tally_box"  >
                        <div class="x_panel ui-ribbon-container fixed_height_390" style="border:1px solid #ccc; ">
                        
                          <div class="x_title" >
                            <h2><b>ROI SETTING</b></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                          <form method="post" name="update_form" id="update_form">
                           
                             
                              <div class="form-group">
                                <label class="control-label col-md-12 col-xs-12" for="first-name">ROI Amount <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                  <input type="text" name="amount" id="amount" value="{$roiqry}"  required class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><br /><br /><br /><br />
                              <input type="submit" name="update_btn" class="btn btn-warning"  value="Update" />
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
       {include file="office/footer.tpl"}
       <style>
       .name_title{ margin-top:15px !important}
       </style>
       
       <script>
       $("#change_form").validate({
        rules: {
          
			new_password: {
            required: true,
            minlength: 5
        	},
        password_confirm: {
            required: true,
            minlength: 5,
            equalTo: "#new_password"
        }
			
        },
        messages: {
         
        }
    });

       </script>