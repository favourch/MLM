{include file="office/header.tpl"}

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Admin Direct Referal</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" id="datatable-buttons">
                        <thead>
                          <tr class="headings">
                            	<th>No.</th>
                                <th>User Name  </th>
                                <th>Bonus Type</th>
                                <th>Bonus Amount</th>
                                <th>Credited Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          {foreach from=$daily_bonus item=content_item name=content_name}
                        <tr>
                            <td>{$smarty.foreach.content_name.iteration}</td>
                            <td>{$content_item.desired_username|upper} </td>
                            <td>{$content_item.your_fullname}</td>
                            <td>{$content_item.bonus_amount}</td>
                            <td>{$content_item.added_date|date_format}</td>
                        </tr>
                       
                       
                        {foreachelse}
                        <tr>
                            <td colspan="10" style="text-align:center; color:red;">There's nothing to show...!</td>
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
       {include file="office/footer.tpl"}