$(document).ready(function() {
	var user_onboarded = Cookies.get('user_onboarded');
	if (typeof user_onboarded == 'undefined') {
		$("#section-intro").show();
		$("#section-intro").html("<div class='section-intro-container'><img src='https://grado-website.herokuapp.com/website/assets/logo_green_large.png' id='section-intro-logo' width='45px' alt='say hello to grado'></div>");
		$("#section-intro-logo").show().transition({scale:1.2, opacity:1.0}, 600, 'ease'); 
		$("#section-intro-logo").delay(400).transition({scale:0.1, opacity:0.1}, 200, 'ease'); 
		$("#section-intro").delay(1050).fadeTo(300, 0.0, function() {
			$("#section-intro").hide();
			
		});
		//$("#section-intro").delay(1350).hide();
				
		var date = new Date();
		date.setTime(date.getTime() + (15 * 60 * 1000));
	 
		Cookies.set('user_onboarded', "true", {expires: date});
		
	}
	else $("#section-intro").hide();
	
});