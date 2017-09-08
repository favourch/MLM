{include file="admin/header.tpl"}

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Withdrawal History</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" >
                        <thead>
                          <tr class="headings">
                            <th >No.</th>
                                <th >Type </th>
                                <th >Description</th>
                                <th>Amount</th>
                                <th >Status</th>
                                <th >Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          {foreach from=$withdrawal_rslt item=content_item name=content_name}
                        <tr>
                            <td>{$smarty.foreach.content_name.iteration}</td>
                            <td>{$content_item.type|upper} </td>
                            <td>{$content_item.description}</td>
                            <td>{$content_item.amount}</td>
                            <td>{$content_item.status}</td>
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
       {include file="admin/footer.tpl"}