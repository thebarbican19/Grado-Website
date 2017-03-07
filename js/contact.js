$(document).ready(function() {	
	var email_cookie = Cookies.get('user_email');
	window.person_detect = 0;
	
	window.input_email = "";
	window.input_name = "";
	window.input_message = "";
	window.input_message_words = 0;
	window.input_verifyed = false;
	window.input_params = "";
	window.input_loading = false;
	window.input_type = "general"; 
					
	$("#contact-email").val(email_cookie);
	
	$("#contact-form").keyup(function(event) {
		messageactivity();
				
	});
	
	$("#contact-form").bind("paste", function(e){
		messageactivity();
		
	});
	
	$("#contact-form").submit(function(event) {
		event.preventDefault();
		messagesend();
		
	});
	
	$("body").mousemove(function(event) {
		person_detect += event.pageY + event.pageX;
		
	});
	
	$(".team-ovatar").each(function(event) {
		var url = $(this).attr("url")
		$(this).click(function(event) {
			window.open(url, '_blank');
			
		});
		
		$(this).hover(function(){
    		$(this).stop().transition({scale: 1.02});
			
    	}, function(){
   			$(this).stop().transition({scale: 1.0});
			
		});
			
		
	});
	
});

function messagesend() {
	if (input_loading == false) {
		if (person_detect < 5000 && !isMobile.any) {
			$("#contact-error").html('Robot Alert!');
			$("#contact-container").effect("shake",{times:3}, 500);
				
		}	
		else if (input_verifyed == false) {
			$("#contact-error").html('Please enter all the fields');	
			//$("#contact-container").effect("shake",{times:3}, 500);
			
		}
		else if (input_verifyed == true) {
			input_loading = true;
			$.ajax({
	  			url: "https://gradoapp.com/etc/feedback.php",
				type: "POST",
				dataType:'json',
				data: JSON.stringify(input_params),		
				success:function(result, status, xhr) {		
					$(".contact-container").animate({'opacity':0.0, 'top':-5} ,600 ,"easeOutQuart");
					
					input_loading = false;			
								
	    		},
	   			error:function(xhr,status,error){
					$("#contact-container").effect("shake",{times:3}, 500);
					$("#contact-error").html(error);	
				
					input_loading = false;
					
	    		}	
				
			});
			
		}
		
	}
	else $("#contact-container").effect("shake",{times:3}, 500);
	
}


function messageactivity() {	
	input_email = $("#contact-email").val();
	input_name = $("#contact-name").val();
	input_message = $("#contact-message").val();
	input_message_words = input_message.split(' ');
	input_params = {"email":input_email, "name":input_name, "message":input_message, "type":input_type};
		
	if (input_email.length > 3 && input_name.length > 3 && input_message_words.length > 3) input_verifyed = true;
	else input_verifyed = false;
		
	if (input_verifyed == true) $("#contact-form").find("#contact-action").stop().animate({backgroundColor:"#36D38F"});
	else $("#contact-form").find("#contact-action").stop().animate({backgroundColor:"rgba(70, 83, 96, 0.2)"});
	
}