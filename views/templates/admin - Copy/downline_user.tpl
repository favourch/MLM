{include file="admin/header.tpl"}


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Downline User  : <b>{$username|ucfirst}</b></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >ID</th>
                                <th >Username </th>
                                <th >Sponsor</th>
                                <th>Placement</th>
                                <th >Leg</th>
                                <th >Total Amount</th>
                                <th >Date</th>
                          </tr>
                        </thead>
                        <tbody>
                         {foreach from=$GetDownline item=content_item name=content_name}
                        <tr>
                            <td>{$smarty.foreach.content_name.iteration}</td>
                            <td>{$content_item.DESIRED_USERNAME}</td>
                            <td>{$content_item.SPONSER}</td>
                            <td>{$content_item.PLACEMENT}</td>
                            <td>{$content_item.deposit_amount}</td>
                            <td>{$content_item.LEG}</td>
                            <td>{$content_item.ADDED_DATE|date_format}</td>
                          	
                        </tr>
                        
                      {foreachelse}
                        <tr>
                            <td colspan="10" style="text-align:center; color:red;">No record found...!</td>
                        </tr>
                        {/foreach} 
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