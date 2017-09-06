<?php /* Smarty version Smarty-3.1.16, created on 2017-02-22 12:21:59
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\add-news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:925958ad74575be527-44914292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a6cad46aa3be5ec00d226f876172e8eb8221bf' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\add-news.tpl',
      1 => 1472209110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '925958ad74575be527-44914292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HTTP_PATH' => 0,
    'displayMsg' => 0,
    'id' => 0,
    'meta_contents_qry' => 0,
    'ImageFile' => 0,
    'editor' => 0,
    'status_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ad74575fcd24_62195010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad74575fcd24_62195010')) {function content_58ad74575fcd24_62195010($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['HTTP_PATH']->value;?>
js/jquery.validate.min.js" type="text/javascript"></script>


<script type="text/javascript">
/*function mngeCat(){
	var cat = [];
	var subCat = [];
	$(".category:checked").each(function(){
		cat.push(this.value);
	});
	$(".subcategory:checked").each(function(){
		subCat.push(this.value);
	});
	if(cat.length < 1 || subCat.length < 1){
		alert("Please tick category");
		return false;
	}
	return false;
}*/
(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
			$("#newsForm").validate({

				rules: {
					title: "required",
					videolink: "required",
					eimage: "required",
					description : "required"
				},
				messages: {
					title    : "Please enter title",
					videolink  : "Please enter video link",
					eimage   : "Please choose image",
					description   : "Please enter page content"
				},
				submitHandler: function(form) {
					form.submit();
				}
			 });
        }
    }

//when the dom has loaded setup form validation rules
$(D).ready(function($) {
		JQUERY4U.UTIL.setupFormValidation();

});

})(jQuery, window, document);

</script>


  <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
           <?php if ($_smarty_tpl->tpl_vars['displayMsg']->value!='') {?>
            <div class="alert alert-info" style="color:#27A0E6;"><?php echo $_smarty_tpl->tpl_vars['displayMsg']->value;?>
</div>
            <?php }?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>News Content <small>Add/Edit</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li> <a href="news.php" style="text-decoration:none; color:rgb(42,63,84); font-weight:600; border:2px solid #CCC">BACK TO LIST</a></li>
                    </ul>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
                    
                   <form action="" method="post" id="newsForm" name="newsForm" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Page Title <span class="red">(Required)</span></label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Page Title" value="<?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['title'];?>
">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image Upload <span class="red">(Required)</span></label><br>
                                    <?php echo $_smarty_tpl->tpl_vars['ImageFile']->value;?>

                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Seo Url <span class="red">(Optional)</span></label>
                                    <input type="text" class="form-control" name="seo_url" id="seo_url" placeholder="Enter Seo Url" value="<?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['seo_url'];?>
">
                                 </div>
                            </div>
                            
                             <div class="col-md-12">
                             <div class="form-group">
                                    <label for="exampleInputEmail1">Page Content <span class="red">(Required)</span></label>
                                    <?php echo $_smarty_tpl->tpl_vars['editor']->value;?>

                                 </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Description <span class="red">(Optional)</span></label>
                                    <textarea class="form-control" name="short_desc" placeholder="Enter Short Description"><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['short_desc'];?>
</textarea>
                                 </div>
                    
                                 <div class="form-group">
                                            <label for="exampleInputEmail1">Meta Title <span class="red">(Optional)</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title" value="<?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['meta_title'];?>
">
                                     </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Meta Keyword <span class="red">(Optional)</span></label>
                                    <textarea class="form-control" name="meta_keyword" placeholder="Enter Meta Keyword"><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['meta_keyword'];?>
</textarea>
                                 </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Meta Description <span class="red">(Optional)</span></label>
                                    <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description"><?php echo $_smarty_tpl->tpl_vars['meta_contents_qry']->value['meta_description'];?>
</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <?php echo $_smarty_tpl->tpl_vars['status_options']->value;?>

                                </div>
                                
                            <div class="entry">
                                <button type="submit" name="submit_news" value="Submit" class="btn btn-primary">Save page</button> <button class="btn btn-primary">Cancel</button>
                            </div>
                            </div>
                        </form>
                  </div>
                </div>
          </div>
 
        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
