{include file="admin/header.tpl"}
   

	<script type="text/javascript">
    function confirm_delete() {
      return confirm('are you sure?');
    }
    </script>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Direct Sponsor : ansarindia001</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >ID</th>
                                <th >	Username </th>
                                <th >Name</th>
                                <th>Sponsor</th>
                                <th >Current Plan</th>
                                <th>Total Amount</th>
                                <th>Date</tr>
                               
                          </tr>
                        </thead>
                        <tbody>
                       {*   {foreach from=$projects_rslt item=content_item name=content_name}*}
                      <!--  <tr>
                            <td>{$smarty.foreach.content_name.iteration}</td>
                            <td>{$content_item.project_name|upper} {$content_item.lname}</td>
                        
                            <td>{$content_item.month_committed}</td>
                            <td>{$content_item.project_status}</td>
                            <td>{$content_item.payment_status}</td>
                            <td>{$content_item.project_type}</td>
                            <td>{$content_item.added_date|date_format}</td>
                        </tr>-->
                        <tr>
                        	<td>1</td>
                            <td>	ansarindia002</td>
                            <td>Ansar</td>
                            <td>ansarindia001</td>
                            <td>SILVER</td>
                            <td>0.0500000</td>
                            <td>2017-08-08 10:47:35</td>
                        </tr>
                      {*  {foreachelse}
                        <tr>
                            <td colspan="10" style="text-align:center; color:red;">No record found...!</td>
                        </tr>
                        {/foreach} *}
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