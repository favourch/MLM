	var servicepath = http_path_js+'request.php';
var homeurl = http_path_js;


executeRequestOne = function(methodtype,datatype,requestdata,beforefun,successfun,errorfunc){
    $.ajax({
        type:methodtype,
        datatype:datatype,
        url:servicepath,
        data:requestdata,
        beforeSend:beforefun,
        success:successfun,
        error:errorfunc
    });
};

loading_dialog = $( "#dialog-request-loading" ).dialog({
      autoOpen: false,
      resizable: false,
      height:150,
      modal: true,
    });
message_dialog = $( "#dialog-message" ).dialog({
      autoOpen: false,
      resizable: false,
      height:150,
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
});


(function($){
/*$("#reg_form").validate({
				
          rules: {
				fuser: {
                        required: true,
                        email: true
                    },
				fpass:"required",
				
                },
                messages: {
                    fuser: "Please enter your email",
					fpass: "Please enter your password",
                }
		});*/
		
$(document).on('click','#id_loginBtn',function(evt){
	//if($("#cb_loginForm").valid()){
    evt.preventDefault();
	var requestdata = $("form#cb_loginForm").serialize();
	requestdata += "&action=loginteamplayer";
	
	
    executeRequestOne(
        'POST',
        'json',
        requestdata,
        function(jqXHR){
            loading_dialog.dialog("open");
			
        },
        function (data,textStatus,jqXHR) {
			message_dialog.dialog("close");
			var res = data.split("@@"); 
			if(res[0] == "Success"){
				//message_dialog.html("Logged in Successfully");
				if(res[1] == 5)
					window.location = http_path_js +"team-dashboard.php";
					else if(res[1] == 6)
					window.location = http_path_js +"others_dashboard.php";
                else
                	window.location = http_path_js +"player_dashboard.php";
			}else{
				loading_dialog.dialog("open");
				message_dialog.html(data);
			}
            message_dialog.dialog("open");
            loading_dialog.dialog("close");
       },
        function(jqXHR,textStatus,errorThrown){
            loading_dialog.dialog("close");
            message_dialog.html(errorThrown);
            message_dialog.dialog("open");
        }
        );
	//}
});


$(document).on('click','#id_player_profile_pic_remove',function(evt){
    var r = confirm("Are you sure want to Remove this Image?");
    if (r == true) {
evt.preventDefault();

requestdata = "&action=remove_profile_image";

executeRequestOne(
	'GET',
	'json',
	requestdata,
	function(jqXHR){
		 loading_dialog.dialog("open");
	},
	function (data,textStatus,jqXHR) {

		$("#id_avatar_show").show();
		$("#id_ex_pic").hide();
		message_dialog.html('Successfully removed your profile image.');
		loading_dialog.dialog("close");
		location.reload();
   },
	function(jqXHR,textStatus,errorThrown){
		loading_dialog.dialog("close");
		message_dialog.html(errorThrown);
		message_dialog.dialog("open");
	}
	);
	  }
});

$(document).on('click','#id_team_profile_pic_remove',function(evt){
    var r = confirm("Are you sure want to Remove this Image?");
    if (r == true) {
evt.preventDefault();

requestdata = "&action=remove_team_profile_image";

executeRequestOne(
	'GET',
	'json',
	requestdata,
	function(jqXHR){
		 loading_dialog.dialog("open");
	},
	function (data,textStatus,jqXHR) {
		$("#id_team_pic_show").show();
		$("#id_team_ex_pic").hide();
		message_dialog.html('Successfully removed your profile image.');
		loading_dialog.dialog("close");
		location.reload();
   },
	function(jqXHR,textStatus,errorThrown){
		loading_dialog.dialog("close");
		message_dialog.html(errorThrown);
		message_dialog.dialog("open");
	}
	);
	  }
});

$(document).on('click','#id_other_profile_pic_remove',function(evt){
    var r = confirm("Are you sure want to Remove this Image?");
    if (r == true) {
evt.preventDefault();

requestdata = "&action=remove_other_profile_image";

executeRequestOne(
	'GET',
	'json',
	requestdata,
	function(jqXHR){
		 loading_dialog.dialog("open");
	},
	function (data,textStatus,jqXHR) {

		$("#id_avatar_show").show();
		$("#id_ex_pic").hide();
		message_dialog.html('Successfully removed your profile image.');
		loading_dialog.dialog("close");
		//location.reload();
   },
	function(jqXHR,textStatus,errorThrown){
		loading_dialog.dialog("close");
		message_dialog.html(errorThrown);
		message_dialog.dialog("open");
	}
	);
	  }
});




$(document).on('click','#id_forgotpwd',function(evt){
	
		evt.preventDefault();
		var requestdata = $("form#fpForm").serialize();
		requestdata += "&action=get_forgetpwd";
		executeRequestOne(
			'POST',
			'json',
			requestdata,
			function(jqXHR){
				 //loading_dialog.dialog("open");
			},
			function (data,textStatus,jqXHR) {
				$("#id_msg_fpwd").html(data);
				
				//message_dialog.html(data);
				//message_dialog.dialog("open");
				//loading_dialog.dialog("close");
		   },
			function(jqXHR,textStatus,errorThrown){
				loading_dialog.dialog("close");
				message_dialog.html(errorThrown);
				message_dialog.dialog("open");
			}
			);
});

$(document).on('click','#id_resetpass',function(evt){
		evt.preventDefault();
		var requestdata = $("form#form_pwdset").serialize();
		requestdata += "&action=get_resetpwd";
		executeRequestOne(
			'POST',
			'json',
			requestdata,
			function(jqXHR){
				 //loading_dialog.dialog("open");
			},
			function (data,textStatus,jqXHR) {
				$("#id_msg_resetpwd").html(data);
				//message_dialog.html(data);
				//message_dialog.dialog("open");
				//loading_dialog.dialog("close");
		   },
			function(jqXHR,textStatus,errorThrown){
				loading_dialog.dialog("close");
				message_dialog.html(errorThrown);
				message_dialog.dialog("open");
			}
			);
});




})(jQuery);




