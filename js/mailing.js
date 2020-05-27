$(document).ready(function() {
	var email_cookie = Cookies.get('user_email');
	if (typeof email_cookie != 'undefined') {
		$("#mailing-text").html("<h4>Thanks!</h4>You are all signed up! Why not share Grado too?");
		$("#mailing-signup").css({"opacity":"0.0"});
		$("#mailing-share").show();
				
	}
	else {
		$("#mailing-signup").submit(function(event) {
			event.preventDefault();
			mailingpost($(this).find("#mailing-input").val());
			
		});
		
	}

});

function mailingpost(email) {
	$.ajax({
		url: "https://grado-website.herokuapp.com/api/v1/user/mailing.php?email=" + email + "&list=news",
		headers: {"gdappkey": "app_WWiPnda8123nshd810271sjspa887s"},
        type: "GET",
		dataType:'json',
		success:function(result, status, xhr) {		
			var request_status = result[0].status;
			var request_error_code = result[0].error_code;
			
			if (request_error_code == 200) {
				$("#mailing-text").animate({opacity:0.0, 'top':'-20px'}, 500, "swing").html("<h4>Thanks!</h4>You are all signed up! Why not share Grado too?").animate({opacity:1.0, 'top':'0px'}, 1400, "swing");
				$("#mailing-signup").animate({opacity:0.0}, 700, "swing");
				$("#mailing-share").hide().delay(800).fadeIn();
			
				Cookies.set('user_email', email, {expires: 400});
				
			}
			else {
				if (request_error_code == 409) {					
					$("#mailing-text").animate({opacity:0.0, 'top':'-20px'}, 500, "swing").html("<h4>Whoops!</h4>We love the enthusiasm, but it looks like your already signed up!. Why not share Grado instead?").animate({opacity:1.0, 'top':'0px'}, 1700, "swing");
					$("#mailing-signup").animate({opacity:0.0}, 700, "swing");
					$("#mailing-share").hide().delay(800).fadeIn();
									
					Cookies.set('user_email', email, {expires: 400});
									
				}
				else $("#mailing-text").animate({opacity:0.0, 'top':'-20px'}, 500, "swing").html("<h4>Whoops!</h4>" + request_status).animate({opacity:1.0, 'top':'0px'}, 1400, "swing");
				
			}
			
		},
		error:function(xhr,status,error){
			var request_code = xhr.status;
			var request_status = status;
			
			$("#mailing-text").animate({opacity:0.0, 'top':'-20px'}, 500, "swing").html("<h4>Whoops!</h4>" + request_status).animate({opacity:1.0, 'top':'0px'}, 1400, "swing");
			
		}
		
	});
	
}