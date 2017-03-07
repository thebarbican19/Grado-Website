$(document).ready(function() {	
	var input = $(this).find("#widget-textarea").val();
	window.inputloading = 0;
	widgetactivity(input);
	widgetsubmit(input, 0);
			
	$("#widget-form").keyup(function(event) {
		var input = $(this).find("#widget-textarea").val();
		widgetactivity(input);
		
	});
	
	$("#widget-textarea").bind("paste", function(e){
		var input = e.originalEvent.clipboardData.getData('text');
		widgetactivity(input);
		
	});
	
	$("#widget-form").submit(function(event) {
		event.preventDefault();
		var input = $(this).find("#widget-textarea").val();
		if (inputloading == 0) widgetsubmit(input, 1);
		
	});
					
});

function widgetsubmit(input, scroll) {
	var inputmin = 20;
	var inputwords = input.split(' ');
	var inputparams = {"text":input};
			
	if (inputwords.length > inputmin) {
		inputloading = 1;
		$.ajax({
  			url: "https://gradoapp.com/etc/keywords.php",
			type: "POST",
			dataType:'json',
			data: JSON.stringify(inputparams),		
				success:function(result, status, xhr) {		
					
					console.log(result);
					
				var requeststatus = result[0].status;
				var requesterrcode = result[0].error_code;
				var requesttags = result[0].output.topic_tags;
				var requesttannames = result[0].output.topic_tags;			
				var requestscore = result[0].output.positivity_score;
								
				var tagappend = "";
				var nameappend = "";
								
				if (requesttags.length < 1) var tagappend = "Whoops! No tags have been found. We are still in beta and are constantly updating our database and algorythm to make sure this doesn't happen. Please try entering more text and try again.";	
				else {				
					$.each(requesttags, function(index, value){
						tagappend += '<span class="data-tag">' + value.type + '</span>';
						$.each(value.subtype, function(indexsub, valuesub){
							tagappend += '<span class="data-tag">' + valuesub + '</span>';
						
						});
						
					});	
					
				}
				
				if (scroll == 1) $('html,body').animate({scrollTop: $("#data-container").offset().top - 230});
				
				$("#data-tag-container").html(tagappend);
				$("#data-positivity-bar").html(requestscore + "%");
				$("#data-positivity-bar").stop().show().animate({width:requestscore + "%"}, 1700, "swing");
				$("#widget-form").find("#widget-action").stop().animate({backgroundColor:"rgba(70, 83, 96, 0.2)"});
				
				if (requesttags.length > 0) {
					var taganimate = 60;
					$(".data-tag").each(function() {
						taganimate += 80;
						$(this).delay(taganimate).fadeIn();
						
					});
					
				}
								
    		},
   			error:function(xhr,status,error){
				var requestcode = xhr.status;
				console.log(error);
				$("#data-container").html("<h3>Whoops!</h3>An error occured (" + status + ")");
				
				inputloading = 0;	
				
    		}		
			
		});
		
	}
	else $("#data-container").html("<h3>Whoops!</h3>Please enter more than <strong>" + inputmin + "</strong> words.");
	
}

function widgetactivity(input) {	
	var inputmin = 20;
	var inputwords = input.split(' ');
	inputloading = 0;	
					
	if (inputwords.length == 2) var inputcount = inputwords.length - 1 + " word";
	else var inputcount = inputwords.length - 1 + " words";
	
	$("#widget-form").find("#widget-count").html(inputcount);
	
	if (inputwords.length > inputmin) {
		$("#widget-form").find("#widget-action").stop().animate({backgroundColor:"#36D38F"});
		$("#widget-form").find("#widget-count").stop().animate({color:"#465360"});
						
	}
	else {
		$("#widget-form").find("#widget-action").stop().animate({backgroundColor:"rgba(70, 83, 96, 0.2)"});
		$("#widget-form").find("#widget-count").stop().animate({color:"#E36466"});
		
	}
	
}