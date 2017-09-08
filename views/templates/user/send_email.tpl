{include file="user/header.tpl"}
<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3></h3>
        </div>

      </div>
      {if $showMsg neq ""}
      <div class="alert alert-info">{$showMsg}</div>
      {/if}
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Site Enquiries</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
           		<form action="send_email.php" method="post" >
               		<div class="form-group col-md-4">
                       <label for="exampleInputEmail1">Email Id<span class="red">*</span></label>
                       <input type="email" class="form-control" name="email" id="email"  required="required"  >
                    </div><div class="clearfix"></div>
                    <div class="form-group col-md-4">
                       <input type="submit" class="form-control btn btn-success" name="email_send_btn" value="Submit" id="email_send_btn" >
                    </div>
                </form>
            </div>
          </div>
        </div>    
    </div>
  </div><div class="clearfix"></div>
<!-- /page content -->
{include file="user/footer.tpl"}   

