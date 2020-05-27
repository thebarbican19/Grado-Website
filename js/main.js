$(document).ready(function() {			
	var metadata_article_placeholder = $("#metadata-article-mob").html();
	var metadata_comment_placeholder = $("#metadata-comments-mob").html();
	var metadata_comment_visible = false;
		
	$(".header-image").delay(200).animate({"top":"0px","opacity":"1.0"}, 400, "easeOutQuint");
	
	$(".header-text").each(function() {
		$(this).delay(500).fadeTo(300, 1.0);
		
	});
	
	$(".header-action").each(function() {
		$(this).hover(function() {
			$(this).stop().animate({"top":"-5px"}, 150, 'easeOutExpo'); 
			
		}, function() {
			$(this).stop().animate({"top":"0px"}, 250, 'easeOutQuint'); 
			
		});
					
		$(this).click('click', function (event) {
			$('html,body').animate({scrollTop: $("#section-mailing").offset().top - 230});
				
		});
		
	});
	
	$(".sharing-cell").each(function(){
		var item_identfyer = $(this).attr('id');
		var item_identfyer_label = "#" + item_identfyer + "-label";
		if (typeof item_identfyer != 'undefined') {
			$(this).hover(function() {
				$(this).stop().transition({scale:1.05}, 100, 'ease'); 
				$(item_identfyer_label).switchClass("share-tag", "share-tag-over", 150, "easeInOutBack");
				
			}, function() {
				$(this).stop().transition({scale:1.0}, 350, 'ease'); 
				$(item_identfyer_label).switchClass("share-tag-over", "share-tag", 100, "easeInQuad");
				
			});
			
		}
		
	});
	
		
	setsegmentunderline(false);
	setcommunitycontent();
			
	$(window).resize(function() {
		setsegmentunderline(true);
		
	});
	
	$(".community-segment-item").click(function() {
		var button_width = $(this).width();
		var button_offset = $(this).offset();
		var button_position = button_offset.left;
		var button_pressed = $(this).html();
				
		var title  = $(this).attr("title");
		var content = $(this).attr("content");	
		var image = $(this).attr("image");			
		var output = "<h3>" + title + "</h3>" + content;
		
		if (image == "local") {
			animate_right_1 = -40;
			animate_top_1 = -30;
			animate_right_2 = 40;
	 		animate_top_2 = 65;
			
		}
		else if (image == "trending") {
			animate_right_1 = -20;
			animate_top_1 = 30;
			animate_right_2 = 20;
			animate_top_2 = -45;
			
		}
		else if (image == "user") {
			animate_right_1 = -50;
			animate_top_1 = 0;
			animate_right_2 = 50;
			animate_top_2 = 0;
			
		}
		else if (image == "staff") {
			animate_right_1 = 30;
			animate_top_1 = -30;
			animate_right_2 = -30;
			animate_top_2 = 30;
			
		}
				
		$(".community-image").each(function() {
			var id = $(this).attr("id");
			if (id == "community-image-1") {
				$(this).stop().animate({opacity:0.0}, 100, function() {
					$(this).attr("src", "https://grado-website.herokuapp.com/assets/tile_" + image + "_1.png");
					$(this).attr("alt", image + " community tile");	
					$(this).animate({"marginLeft":animate_right_1, "marginTop":animate_top_1, opacity:1.0}, 600, "easeInOutBack");
			
				});		
				
			}
			else if (id == "community-image-2") {
				$(this).stop().animate({opacity:0.0}, 100, function() {
					$(this).attr("src", "https://grado-website.herokuapp.com/assets/tile_" + image + "_2.png");
					$(this).attr("alt", image + " community tile");				
					$(this).animate({"marginLeft":animate_right_2, "marginTop":animate_top_2, opacity:1.0}, 600, "easeInOutBack");
					
				});
				
			}
			
		});
		
		if (button_selected != button_pressed) {
			$(this).switchClass("community-segment-item", "community-segment-item-selected", 100, "easeInOutQuad");
			$(".community-segment-item-selected").switchClass("community-segment-item-selected", "community-segment-item", 100, "easeInOutQuad");
			$(".community-segment-underline").animate({"width":button_width + 20, "left":button_position}, 400, "easeOutBack");
			$(".community-text").each(function() {
				if (isMobile.any) {
					$(".community-text").stop().animate({opacity:0.0, top:"20px"}, 100, "swing", function() {
						$(".community-text").stop().html(output).animate({opacity:1.0, top:"0px"}, 800, "swing");
					
					});
					
				}
				else {	
					$(".community-text").stop().animate({opacity:0.0, left:"20px"}, 100, "swing", function() {
						$(".community-text").stop().html(output).animate({opacity:1.0, left:"0px"}, 800, "swing");
					
					});
					
				}
			
			});
			
		}
				
		button_selected = button_pressed;
		
	});
		
	if (isMobile.any) {
		$(".sharing-cell").each(function(){		
			$(this).animate({opacity:1.0}, 300 ,"swing");
			
		});
							
	}	
	
	$(window).scroll(function() {
		var scroll_pos = $(window).scrollTop();
		var scroll_height = $(window).height();
		var scroll_pos_bottom =  scroll_pos + scroll_height;
		
		var scrollheader_top = $("#section-header").offset().top;
		var scrollheader_height = $("#section-header").height();				
		var scrollheader_bottom = scrollheader_top + scrollheader_height;
		
		var scrollcommunity_top = $("#section-communities").offset().top;
		var scrollcommunity_height = $("#section-communities").height();				
		var scrollcommunity_bottom = scrollcommunity_top + scrollcommunity_height;
		
		var scrollsharing_top = $("#section-sharing").offset().top;
		var scrollsharing_height = $("#section-metadata").height();				
		var scrollsharing_bottom = scrollsharing_top + scrollsharing_height;
		
		var scrollmeta_top = $("#section-metadata").offset().top;
		var scrollmeta_height = $("#section-metadata").height();		
		var scrollmeta_bottom = scrollmeta_top + scrollmeta_height;
								
		if (scroll_pos_bottom > (scrollsharing_bottom - 150.0) && scroll_pos < scrollsharing_bottom) {
			var sharing_animate = 0.0;
			$(".sharing-cell").each(function(){
				sharing_animate += 200;
				if ($(this).css('opacity') == 0.0) {
					$(this).delay(sharing_animate).animate({opacity:1.0}, 300 ,"swing");
					
				}
				
			});	
		
		}	
		
		if (scroll_pos_bottom > (scrollmeta_bottom / 2) && scroll_pos < scrollmeta_bottom) {
			var scroll_image_height = $("#metadata-image").height() - 520;
			var scroll_image_pos = (scroll_pos - (scrollheader_height + scrollcommunity_height + (scrollsharing_height / 2)) + 20) * 2.5;
		
			if (scroll_image_pos < scroll_image_height && scroll_image_pos > 0) {			
				$("#metadata-image").css({'top':-scroll_image_pos + "px"});
				
			}
			else if (scroll_image_pos < scroll_image_height) {
				$("#metadata-image").css({'top':"0px"});
								
			}
			else {
				$("#metadata-image").css({'top':"-410px"});
			}
						
			if (scroll_image_pos >= ((scrollmeta_height / 2) - 50) && metadata_comment_visible == false) {
				metadata_comment_visible = true;							
				$("#metadata-text").stop().animate({opacity: 0.0, left: "20px"}, 100, "swing", function() {
					$("#metadata-text").stop().html(metadata_comment_placeholder).animate({opacity: 1.0, left: "0px"}, 800, "swing");
					
				});
				
			} 
			else if (scroll_image_pos <= ((scrollmeta_height / 2) - 50)  && metadata_comment_visible == true) {
				metadata_comment_visible = false;					
				$("#metadata-text").stop().animate({opacity: 0.0, left: "20px"}, 100, "swing", function() {
					$("#metadata-text").stop().html(metadata_article_placeholder).animate({opacity: 1.0, left: "0px"}, 800, "swing");
					
				});
				
			}
			
		}
						
	});
	
	
});

function setsegmentunderline(each) {
	if (each == false) {
		$(".community-segment-item").each(function(){
			var button_width = $(this).width();
			var button_offset = $(this).offset();
			var button_position = button_offset.left;
			window.button_selected = $(this).html();
					
			var title  = $(this).attr("title");
			var content = $(this).attr("content");	
			var output = "<h3>" + title + "</h3>" + content;
			
			$(".community-text").each(function(){
				$(this).html(output);
				
			});
				    
			$(this).switchClass("community-segment-item", "community-segment-item-selected", 100, "easeInOutQuad");
			$(".community-segment-underline").animate({"width":button_width + 20, "height":2, "left":button_position}, 100, "easeInSine");
	
			return false;
				
		});
		
	}
	else {
		$(".community-segment-item-selected").each(function(){
			var button_width = $(this).width();
			var button_offset = $(this).offset();
			var button_position = button_offset.left;
			window.button_selected = $(this).html();
					
			var title  = $(this).attr("title");
			var content = $(this).attr("content");	
			var output = "<h3>" + title + "</h3>" + content;
			
			$(".community-text").each(function(){
				$(this).html(output);
				
			});
				    
			$(this).switchClass("community-segment-item", "community-segment-item-selected", 100, "easeInOutQuad");
			$(".community-segment-underline").css({"width":button_width + 20, "height":2, "left":button_position});
	
			return false;
				
		});
		
	}
	
}

function setcommunitycontent() {
	var animate_right_1 = -40;
	var animate_top_1 = -30;
	var animate_right_2 = 40;
	var animate_top_2 = 65;
	$(".community-image").each(function() {
		var id = $(this).attr("id");
		if (id == "community-image-1") $(this).css({"marginLeft":animate_right_1, "marginTop":animate_top_1, opacity:1.0});
		else $(this).css({"marginLeft":animate_right_2, "marginTop":animate_top_2, opacity:1.0});
	
	});
	
}