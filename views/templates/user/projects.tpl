{include file="user/header.tpl"}

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2></h2>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Brainak Experts</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      <li><span ><a href="add-projects.php" class="btn btn-primary" style="text-decoration:none; font-size:18px">Add New Project</a></span></li>
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
                          <tr class="headings">
                            <th >S.No</th>
                                <th >Project Name</th>
                               <!-- <th >Project Specification</th>-->
                                <!--<th >Under Taken by</th>
                                <th >Project Duration</th>
                                <th >Total Cost</th>-->
                                <th >Month Committed</th>
                                <th>Project Status</th>
                                <th>Payment Status</th>
                                <th >Project Type</th>
                                <th >Reg Date</th>
                                <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         {foreach from=$projects_rslt item=content_item name=content_name}
                        <tr>
                            <td>{$smarty.foreach.content_name.iteration}</td>
                            <td>{$content_item.project_name|upper} {$content_item.lname}</td>
                          <!--  <td>{$content_item.specification}</td>-->
                           <!-- <td>{$content_item.undertaken_by|ucfirst}</td>
                            <td>{$content_item.duration}</td>
                            <td>{$content_item.total_cost}</td>-->
                            <td>{$content_item.month_committed}</td>
                            <td>{$content_item.project_status}</td>
                            <td>{$content_item.payment_status}</td>
                            <td>{$content_item.project_type}</td>
                             <td>{$content_item.added_date|date_format}</td>
                            
                          	<td>
                                <a class="btn btn-info" href="add-projects.php?id={$content_item.id}" title="Edit">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Edit
                                </a>
                              <!-- 	<a class="btn btn-danger" href="projects.php?id={$content_item.id}&action=delete" onclick="return confirm_delete('Are you sure want to delete this?');" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        Remove
                               	</a>-->
                                
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
       {include file="user/footer.tpl"}