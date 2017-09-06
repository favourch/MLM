$(document).ready(function() {
    // JavaScript Document

	
	$("#id_contact_form").validate({
        rules: {
             name: {
                required: true,
                minlength: 3
                },
            
            email_id: {
                required: true,
                email: true
            },
			
           /* mobile_number:{
                 required: true,
                 number: true,
            },*/
			message: "required",
           
			
        },
        messages: {
           name: {
                required: " please enter your name",
                minlength: " your name must consist of at least 3 characters"
            },
            email_id: " please enter your email Id",
           /* mobile_number: {
            required: " please enter your mobile number",
            number: "enter valid numbers",
        	}*/
			 message: " please enter your message ",
            
        }
    });
	
	$("#id_product_form").validate({
        rules: {
             name: {
                required: true,
                minlength: 3
                },
            
            email_id: {
                required: true,
                email: true
            },
			
          /*  mobile_number:{
                 required: true,
                 number: true,
            },
*/
			
        },
        messages: {
           name: {
                required: " enter your name",
                minlength: "name must have at least 3 characters"
            },
            email_id: " please enter your email Id",
           /*	mobile_number: {
            required: "enter your mobile number",
            number: "enter valid numbers",
        	},*/
        }
    });

	$("#contact_submit_btn").click(function(e) {
        if ($("#id_contact_form").valid()) {
            dataString = $("#id_contact_form").serialize();
            //alert(dataString);
            $.ajax({
                type: "POST",
                url: http_path_js + "request.php?action=sendmessage",
                data: dataString,
                dataType: "json",
                success: function(data) {
                    if (data == "SUCCESS") {
                       alert('Your Message Has Been Successfully Received,One Of Our Member Will Get You Shortly..');
					   $("#id_contact_form")[0].reset();
					   
                    } else
                        alert('Sorry, Please Try Again After Sometime');
						
                }
            })
        };
    });
	
	$("#product_submit_btn").click(function(e) {
        if ($("#id_product_form").valid()) {
            dataString = $("#id_product_form").serialize();
           // alert(dataString);
            $.ajax({
                type: "POST",
                url: http_path_js + "request.php?action=viewproduct",
                data: dataString,
                dataType: "json",
                success: function(data) {
                    if (data == "SUCCESS") {
					   window.location.replace("product-we-have");
                    } else
                        alert('Sorry, Please Try Again After Sometime');
						
                }
            })
        };
    });



});



function openproductpop() {

    $.ajax({
        type: "GET",
        url: http_path_js + "ajax-player-dashboard-popup.php",
        //data:{pid : pid},
        success: function(msg) {
			alert(msg);
            $("#getCodeModal").modal("toggle");
            $("#getCode").html(msg);
			
        }
    });
}









