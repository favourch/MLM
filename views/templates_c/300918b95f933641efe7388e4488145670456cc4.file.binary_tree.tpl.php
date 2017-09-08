<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 13:08:38
         compiled from "\xampp\htdocs\MLM\\views\templates\user\binary_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3245159b27a36e0c1a7-97632272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300918b95f933641efe7388e4488145670456cc4' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\user\\binary_tree.tpl',
      1 => 1504868359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245159b27a36e0c1a7-97632272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b27a36e3ee22_08023953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b27a36e3ee22_08023953')) {function content_59b27a36e3ee22_08023953($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
.tree ul {
    padding-top: 20px; position: relative;
	padding-left: 30px;
	
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.tree li {
    float: left; text-align: center;
    list-style-type: none;
    position: relative;
    padding: 35px 18px 0 1px;

    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
}

.tree li::before, .tree li::after{
    content: '';
    position: absolute; top: 0; right: 50%;
    border-top: 5px solid #ccc;
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
    border: 0px solid #ccc;
    padding: 15px 40px;
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
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    localStorage.removeItem("firsttimeflag");
          localStorage.removeItem("parent_id");
});
</script>
<div class="right_col" role="main"  style=" width: 100%;
    height: 700px;
    border: thin solid black;
    overflow-x: scroll;
    overflow-y: hidden;">

 

<div class="tree"  >

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


    </div>
    </div>
    




<script>
var arr_contain_id=[];
var dataindex=0;
function expandTree(parent_id){

    var value = localStorage.getItem("firsttimeflag");
    if(value==null){
      valuePassParent(parent_id,"parent_id");
    }
    else{

       if(arr_contain_id.indexOf(parent_id)>-1){


       }
       else{
           valuePassParent(parent_id,"");
       }            


    }
   
}

function valuePassParent(parentid,localstorage1){
 $.ajax({
        type: "GET",
        url: "ajax-common.php?existing_check=binaryExpand&parent_id="+parentid,
        
        success: function(msg) {
		
			if(msg == 0){
			alert("This node does not have child nodes")
			}
			else{
                  
                 arr_contain_id[dataindex]=parentid;
                 if(localstorage1!=null || localstorage1!=""){
                     localStorage.setItem(localstorage1,parentid);
                     localStorage.setItem("firsttimeflag","success");
                 }
                
            //msg1 = JSONstringify(msg);
            
            $("#"+parentid).append(msg);
            
            }
        }
    });
dataindex++;

}

</script>
 <?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
