$(document).ready(function() {	
	window.channel_key = $("#channel-subscribe").attr('key');
	window.channel_status = $("#channel-subscribe").html();	
	
	$("#channel-subscribe").click(function() {		
		if (channel_status == "subscribe") subscribe_channel(channel_key, false);
		else subscribe_channel(channel_key, true);
		
	});
	
	$("#channel-subscribe").hover(function() {		
		$(this).stop().transition({scale:1.02}, 100, 'ease'); 
		if (channel_status == "subscribed") {
			$(this).css({"color":"white", "backgroundColor":"#E36366"},);
			$(this).html("unsubscribe");
			
		}
		
	}, function() {
		$(this).stop().transition({scale:1.0}, 350, 'ease'); 
		if (channel_status == "subscribed") {
			$(this).css({"color":"white", "backgroundColor":"#35D38F"});	
			$(this).html(channel_status);
						
		}		
		
	});
	
});

function subscribe_channel(channel, unsubscribe) {	
	var apibearer = Cookies.get('gd_bearer');		
	var apiurl = "https://gradoapp.com/api/v1/channel/subscribe?channel=" + channel;
	var apiparams = {"email":"1", "channel":channel};
	var apiheaders = {"gdappkey":"app_WWiPnda8123nshd810271sjspa887s", "gdbearer":apibearer};
	if (unsubscribe == true) var apimethod = "DELETE";
	else var apimethod = "POST";
	
	$.ajax({
		url:apiurl,
		type:apimethod,		
		headers:apiheaders,
		dataType:'json',
		data: JSON.stringify(apiparams),		
		success:function(result, status, xhr) {		
			var requeststatus = result[0].status;
			var requesterrcode = result[0].error_code;
					
			if (requesterrcode == 200 || requesterrcode == 400) {
				if (unsubscribe == true) {
					$("#channel-subscribe").html('subscribe');
					$("#channel-subscribe").css({"color":"white", "backgroundColor":"#35D38F"});	
						
					window.channel_status = $("#channel-subscribe").html();
						
				}
				else {
					$("#channel-subscribe").html('unsubscribe');
					$("#channel-subscribe").css({"color":"white", "backgroundColor":"#E36366"});
							
					window.channel_status = "subscribed";	
									
				}
				
			}
			
		},
		error:function(xhr,status,error){
			var requestcode = xhr.status;
			if (requestcode == 401) location.href = 'https://gradoapp.com/signup?';
			
		}	
		
	});	
				
}