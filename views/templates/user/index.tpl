{include file="user/header.tpl"}

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              {if $admin_id neq 'admin'}
              <div class="animated flipInY col-md-3 " style=" padding:0; margin-left:10px">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
               <h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF">AVAILABLE WALLET</h5>
                  <div class="count text-center" style="padding:15px"> {$gettotalearnings.Total_Amount}</div>
                </div>
              </div>
             {if $getplan neq ''} 
              <div class="animated flipInY col-md-3 col-md-offset-1" style=" padding:0;">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
                <a href=""><h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF"><b>{$getplan}</b></h5></a>
                  <div class="count text-center" style="padding:15px">100/100</div>
                </div>
              </div>
              {/if}
              
             <!-- <div class="animated flipInY col-md-3 col-md-offset-1" style=" padding:0;">
                <div class="tile-stats"  style="background:#2A3F54; padding:0;">
                <a href=""><h5 style="text-align:center; background:#43B1A9; padding:10px 0; margin:0; color:#FFF">RE-ENTRY WALLET</h5></a>
                  <div class="count text-center" style="padding:15px"> 0.00050</div>
                </div>
              </div>--><div class="clearfix"></div>

              <div class="animated flipInY col-md-2" >
                <div class="tile-stats" >
                  <div class="count" style=" ">{if $gettotalearnings.Total_Amount eq ''}0.00000000{else}{$gettotalearnings.Total_Amount}{/if}</div>
                 <h5 style="text-align:center; background:#32B92D; padding:10px 0; margin:0;color:#FFF">TOTAL EARNING</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats"  >
                  <div class="count">{if $getwithdraw eq ''}0.00000000{else}{$getwithdraw}{/if}</div>
                 <h5 style="text-align:center; background:#FF6EB0; padding:10px 0; margin:0;color:#FFF">TOTAL WITHDRAW</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats" >
                  <div class="count">{if $gettotalearnings.deposit_amount eq ''}0.00000000{else}{$gettotalearnings.deposit_amount}{/if}</div>
                 <h5 style="text-align:center; background:#FFCB00; padding:10px 0; margin:0;; color:#FFF">TOTAL DEPOSIT</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats"  >
                  <div class="count">{if $getprofit eq ''}0.00000000{else}{$getprofit}{/if}</div>
                 <h5 style="text-align:center; background:#93228D; padding:10px 0; margin:0;color:#FFF">TOTAL PROFIT</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats" >
                  <div class="count">{if $getsponser eq ''}0.00000000{else}{$getsponser}{/if}</div>
                 <h5 style="text-align:center; background:#F20075; padding:10px 0; margin:0;color:#FFF">TOTAL SPONSOR</h5>
                </div>
              </div>
              <div class="animated flipInY col-md-2" >
                <div class="tile-stats">
                  <div class="count">{if $getparing eq ''}0.00000000{else}{$getparing}{/if}</div>
                 <h5 style="text-align:center; background:#C70039; padding:10px 0; margin:0;color:#FFF">TOTAL BINARY</h5>
                </div>
              </div>
             {/if}
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                      <!--<div class="demo-container" style="height:280px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>-->
                      <div class="btcwdgt-chart"></div>
                      <div class="tiles">
                       
                        <!--<div class="col-md-4 tile">
                          <span>Total Revenue</span>
                          <h2>$231,809</h2>
                          <span class="sparkline22 graph" style="height: 160px;">
                                <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                        </div>-->
                       
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
{include file="user/footer.tpl"}
{literal}
<style>
.tile-stats{border:1px solid #ccc; text-align:center; padding:0; padding-top:10px}
.tile-stats .count{font-size:24px;}
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
