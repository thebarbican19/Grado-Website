$(document).ready(function() {	
	//if (navigator.geolocation) navigator.geolocation.getCurrentPosition(showPosition);
	
	$("#auth-form").submit(function(event) {		
		var requestusername = $("#auth-username").val();		
		var requestemail = $("#auth-email").val();		
		var requestpassword = $("#auth-password").val();		
		var requestrepassword = $("#auth-repassword").val();		
		var requesttype = $("#auth-type").val();		
					
		event.preventDefault();	
					
		if (requesttype == "signup") {
			//var usernameavailable = username_available(requestusername);
			if (requestusername.length < 4) {
				
			} 
			else if (requestemail.length < 4) {
				$("#auth-email").stop().animate({color:"#E86469"});
				$("#auth-email").stop().animate({borderColor:'red'});
						$("#auth-password").focus();
						
			}
			else if (requestpassword.length < 4) {
				$("#auth-password").stop().animate({color:"#E86469"});
				$("#auth-password").stop().animate({borderColor:'red'});
				$("#auth-password").focus();
				
			}
			else if (requestpassword != requestrepassword) {
				$("#auth-password").stop().animate({color:"#E86469"});
				$("#auth-password").stop().animate({borderColor:'red'});
				$("#auth-password").focus();
				
			}	
			else {
				var requesturl = "https://gradoapp.com/api/v1//user/signup.php";
				var requestparams = {"username":requestusername, "email":requestemail, "password":requestpassword}	
				
				authenticate(requesturl, requestparams);
				
			}
			
			
		}
		else if (requesttype == "login") {
			var requesturl = "https://gradoapp.com/api/v1/user/authenticate.php";
			var requestparams = {"email":requestemail, "password":requestpassword}	
			
			authenticate(requesturl, requestparams);
			
		}	

		
	});
	
	$("#auth-login").click(function() {
		$("#auth-title").html('LOG IN');
		$("#auth-title-mob").html('LOG IN');
		$("#auth-action").val('LOG IN');	
		$("#auth-type").val('login');
		$("#auth-username").slideUp();
		$("#auth-email").slideDown();
		$("#auth-password").slideDown();
		$("#auth-repassword").slideUp();
					
	});		
	
	$("#auth-forgotten").click(function() {
		$("#auth-title").html('RESET PASSWORD');
		$("#auth-title-mob").html('RESET PASSWORD');
		$("#auth-type").val('reset');
		$("#auth-username").slideUp();
		$("#auth-email").slideDown();
		$("#auth-repassword").slideUp();
		$("#auth-password").slideUp();
		
	});		
	
});

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}

function authenticate(url, data) {
	console.log(url, data);
	$.ajax({
		url:url,
		type:"POST",		
		headers: {"gdappkey":"app_WWiPnda8123nshd810271sjspa887s"},
		dataType:'json',
		data: JSON.stringify(data),		
		success:function(result, status, xhr) {		
			var requeststatus = result[0].status;
			var requesterrcode = result[0].error_code;
			console.log(requeststatus);
							
			if (requesterrcode == 200) {
				var requesttok = result[0].user.auth.token;
				var requestusername = result[0].user.username;
				var requesttype = result[0].user.type;
				var requestemail = result[0].user.email;
				var requestkey = result[0].user.key;
				var requestavarar = result[0].user.key;
				var requestuser = {"username":requestusername, "type":requestemail, "key":requestkey, "email":requestemail, "avatar":requestavarar}
				var requestexpires = 60*60*24*90;
									
				Cookies.set('gd_bearer', requesttok, {expires:requestexpires, secure: true});
				Cookies.set('gd_user', requestuser, {expires:requestexpires, secure: true});
									
				location.href = 'https://gradoapp.com/auth/index';
				
			} 
			else if (requesterrcode == 409) {
				//exists, signin	
			}
			else {
				
			}
			
			
			
		},
		error:function(xhr,status,error){
			var requestcode = xhr.status;
			console.log(requestcode);
			//if (requesterrcode != 200) {
				//$("#modal-notice").stop().html("Whoops - " + requeststatus).animate({top:'104px'});
				//$("#modal-notice").delay(12000).animate({top:'74px'});
				
			//}
			
		}	
		
	});	
	
}