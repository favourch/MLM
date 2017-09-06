$(document).ready(function (e) {
 
 $("#id_updateprofileimage").on('click',(function(e) {
  e.preventDefault();
  var uid = $('#uid').val();
   var pimage = $('#pimage').val();
   alert(pimage);
  $('#loading-img').show();
  $.ajax({
         url: http_path_js+"modules/uploadajax.php?act=saveprofileimage",
   type: "POST",
   data:  new FormData('#id_player_profile_update'),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
		  alert(data);
    if(data=='invalid file')
    {
     // invalid file format.
	 $('#loading-img').hide();
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
	 $('#loading-img').hide();
     $("#preview").html(data).fadeIn();
     $("#profileimage")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
	$('#loading-img').hide();
      }          
    });
 }));
 

 });
 
