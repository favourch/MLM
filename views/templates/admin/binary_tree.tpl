{include file="admin/header.tpl"}
<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3></h3>
        </div>

      </div>
     
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Binary Tree</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <!--form id="form1">
 
                <div class="tree" id="FamilyTreeDiv">
                 
                <ul>
                <li>
                	<div><span class="male">ansarindia001</span></div>
                </li>
                
                <li>
                	<div>
                    	 <span class="female">Left <br />Current : 0.05000 <br />Total : 0.05000</span>
                    	 <span class="spacer"></span><span class="male">Right <br />Current : 0.05000 <br />Total : 0.05000</span>
                    </div>
                <ul>
                
                <li>
                 
                <div><span class="male">1</span><span class="spacer"></span><span class="female">2</span></div>
              
                 
                </li>

                <li>
                	<div>
                    	<span class="male">5</span>
                        <span class="spacer"></span>
                        <span class="female">6</span>
                   </div>
                </li>
                
                </ul>
                </li>
                 
                </ul>
                </div>
                 
                </form-->
              

              
            </div>
          </div>
        </div>    
    </div>
  </div>
  </div><div class="clearfix"></div>
<!-- /page content -->
{include file="admin/footer.tpl"}   
{literal}

<style>
* {
margin: 0;
padding: 0;
font-family:sans-serif,Arial;
font-size:10pt;
}
.tree {
white-space: nowrap;
min-width: 800px;
min-height:500px;
}
.tree ul {
padding-top: 20px;
position: relative;
transition: all 0.5s;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
}
.tree li {
float: left;
text-align: center;
list-style-type: none;
position: relative;
padding: 20px 5px 0 5px;
transition: all 0.5s;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
}
/*We will use ::before and ::after to draw the connectors*/
.tree li::before, .tree li::after {
content: '';
position: absolute;
top: 0;
right: 50%;
border-top: 1px solid #ccc;
width: 50%;
height: 20px;
}
.tree li::after {
right: auto;
left: 50%;
border-left: 1px solid #ccc;
}
/*We need to remove left-right connectors from elements without any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
display: none;
}
/*Remove space from the top of single children*/
.tree li:only-child {
padding-top: 0;
}
/*Remove left connector from first child and right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after {
border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before {
border-right: 1px solid #ccc;
border-radius: 0 5px 0 0;
-webkit-border-radius: 0 5px 0 0;
-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after {
border-radius: 5px 0 0 0;
-webkit-border-radius: 5px 0 0 0;
-moz-border-radius: 5px 0 0 0;
}
/*Time to add downward connectors from parents*/
.tree ul ul::before {
content: '';
position: absolute;
top: 0;
left: 50%;
border-left: 1px solid #ccc;
width: 0;
height: 20px;
}
.tree li div {
border: 1px solid #ccc;
padding: 5px 10px;
text-decoration: none;
color: #666;
font-family: arial, verdana, tahoma;
font-size: 11px;
display: inline-block;
min-width: 80px;
min-height: 30px;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
transition: all 0.5s;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
}
.tree li div .male {
background-color:lightblue;
display: inline-block;
width:120px;
padding:10px;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
}
.tree li div .female {
background-color:lightpink;
display: inline-block;
width:120px;
padding:10px;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
}
.tree li div .spacer {
background-color:lightblue;
display: inline-block;
width:10px;
}
/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li div:hover, .tree li div:hover + ul li div {
background: #c8e4f8;
color: #000;
border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li div:hover + ul li::after,
.tree li div:hover + ul li::before,
.tree li div:hover + ul::before,
.tree li div:hover + ul ul::before {
border-color: #94a0b4;
}
</style>

{/literal}

<style>
.tree ul {
    padding-top: 20px; position: relative;

    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.tree li {
    float: left; text-align: center;
    list-style-type: none;
    position: relative;
    padding: 20px 5px 0 5px;

    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.tree li::before, .tree li::after{
    content: '';
    position: absolute; top: 0; right: 50%;
    border-top: 1px solid #ccc;
    width: 50%; height: 20px;
}
.tree li::after{
    right: auto; left: 50%;
    border-left: 1px solid #ccc;
}

.tree li:only-child::after, .tree li:only-child::before {
    display: none;
}

.tree li:only-child{ padding-top: 0;}

.tree li:first-child::before, .tree li:last-child::after{
    border: 0 none;
}
.tree li:last-child::before{
    border-right: 1px solid #ccc;
    border-radius: 0 5px 0 0;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
    border-radius: 5px 0 0 0;
    -webkit-border-radius: 5px 0 0 0;
    -moz-border-radius: 5px 0 0 0;
}
.tree ul ul::before{
    content: '';
    position: absolute; top: 0; left: 50%;
    border-left: 1px solid #ccc;
    width: 0; height: 20px;
}
.tree li div{
    border: 1px solid #ccc;
    padding: 5px 10px;
    text-decoration: none;
    color: #666;
    font-family: arial, verdana, tahoma;
    font-size: 11px;
    display: inline-block;

    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;

    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}
.tree li div:hover, .tree li div:hover+ul li div {
    background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
.tree li div:hover+ul li::after, 
.tree li div:hover+ul li::before, 
.tree li div:hover+ul::before, 
.tree li div:hover+ul ul::before{
    border-color:  #94a0b4;
}

</style>

<div class="tree">

        <ul>
            <li>
                <div><input type="checkbox"> Main <br/> <button> Test Btn </button></div>
                <ul>
                    <li>
                        <div><input type="checkbox"> Sub-1</div>
                    </li>
                    <li>
                        <div><input type="checkbox"> Sub-2</div>
                        <ul>
                            <li>
                                <div><input type="checkbox"> Sub-2-1</div>
                            </li>
                            <li>
                                <div><input type="checkbox"> Sub-2-2</div>
                            </li>
                        </ul>  
                    </li>
                </ul>

            </li>
        </ul>

    </div> -->
	