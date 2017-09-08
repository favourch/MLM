{include file="office/header.tpl"}


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registered Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                   <!--   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>-->
                      <!--<li><span ><a href="add_user_registration.php" class="btn btn-primary" style="text-decoration:none; font-size:18px">Add New User</a></span></li>-->
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                	{if $showMsg neq ""}
                    	<div class="alert alert-info">{$showMsg}</div>
                    {/if}
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table" id="datatable-buttons" >
                        <thead>
                          <tr class="headings" style="text-transform:uppercase">
                            	<th >S.No</th>
                                <th >Desired Username</th>
                            <!--    <th >Fullname</th>-->
                                <th > Mobile </th>
                                <th >Email Address</th>
                                <th >Sponsor</th>
                                <th >Bitcoin Address</th>
                                <th>Status</th>
                                <th >Reg Date</th>
                                <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         {foreach from=$user_rslt item=content_item name=content_name}
                        <tr>
                            <td>{$smarty.foreach.content_name.iteration}</td>
                            <td>{$content_item.desired_username|ucfirst}</td>
                           <!-- <td>{$content_item.your_fullname|ucfirst}</td>-->
                            <td>{$content_item.mobile}</td>
                            <td>{$content_item.email_address}</td>
                            <td>{$content_item.sponsor}</td>
                            <td>{$content_item.bitcoin_address}</td>
                            <td>{if $content_item.blockstatus eq 1}<button  class="btn btn-success btn-xs">Active</button>{elseif $content_item.blockstatus eq 0}<button  class="btn btn-warning
                             btn-xs">Inactive</button>{elseif $content_item.blockstatus eq -1}<button  class="btn btn-danger btn-xs">Blocked</button>{/if}</td>
                            <td>{$content_item.added_date|date_format}</td>
 
                          	<td>
                                <a class="btn btn-info" href="add_user_registration.php?id={$content_item.id}" title="Edit">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Edit
                                </a>
                                
                           </td>
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
       {include file="office/footer.tpl"}