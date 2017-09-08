{include file="office/header.tpl"}

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              {if $admin_id eq 'admin'}
              <div class="animated flipInY col-md-3 " style=" padding:0; margin-left:10px">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
               <h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF; text-transform:uppercase">User Registered Today</h5>
                  <div class="count text-center" style="padding:15px"> {$today_date} User</div>
                </div>
              </div>
              
               <div class="animated flipInY col-md-3 " style=" padding:0; margin-left:10px">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
               <h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF; text-transform:uppercase">Total Active User</h5>
                  <div class="count text-center" style="padding:15px"> {$gettotaluser} Users</div>
                </div>
              </div>
              <div class="animated flipInY col-md-3 " style=" padding:0; margin-left:10px">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
               <h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF; text-transform:uppercase">Total Active User</h5>
                  <div class="count text-center" style="padding:15px"> {$gettotaluser} Users</div>
                </div>
              </div>
              
             {/if}
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stripped table <small>Stripped table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stripped table <small>Stripped table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

                  </div>
                </div>
              </div>
            </div>
            
             <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                      <div class="btcwdgt-chart"></div>
                      <div class="tiles">
                      </div>
                    </div>

                    <div class="col-md-5 " style="overflow:scroll">
                      <div>
                        <div class="x_title">
                        <div class="btcwdgt-news" bw-entries="10"></div>
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
</div>
{include file="office/footer.tpl"}
{literal}
<style>
.tile-stats{border:1px solid #ccc; padding:5px}
</style>
<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>
{/literal}
