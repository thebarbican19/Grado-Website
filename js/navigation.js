$(document).ready(function() {	
	var page = window.location.pathname.toString();	
	var header = $(".section-header");
	if (!isMobile.any) {
		$(window).scroll(function(){
			var scroll = $(window).scrollTop();
			if (scroll > 20) {
				$("#navigation-action").switchClass("navigation-action", "navigation-action-white", 20, "easeInOutQuad");
				$("#navigation-logo").attr('src', 'https://gradoapp.com/assets/logo_green.png');
				$("#navigation-mobile").css('box-shadow', '0px 0px 3px rgba(70, 83, 96, 0.3)');		
				$("#navigation").css('box-shadow', '0px 0px 3px rgba(70, 83, 96, 0.3)');		
				$("#navigation").stop().animate({
					backgroundColor:'white',
					borderColor:'#E2E2E2',
				
				}, 20);
				
				$("#navigation-items").children().stop().animate({color: "#7A7A7A"} ,20);
				$("#navigation-items").children().css('text-shadow', '0px 1px 3px rgba(34, 34, 34, 0.0)');
				
			}
			else {
				if (header.length > 0) {
					$("#navigation-action").switchClass("navigation-action-white", "navigation-action", 20, "easeInOutQuad");
					$("#navigation-logo").attr('src', 'https://gradoapp.com/assets/logo_white.png');
					$("#navigation-mobile").css('box-shadow', '0px 0px 3px rgba(70, 83, 96, 0.0)');
					$("#navigation").css('box-shadow', '0px 0px 3px rgba(70, 83, 96, 0.0)');	
					
					$("#navigation").stop().animate({
						backgroundColor: 'transparent',
						borderColor:"transparent"
						
					}, 20);
					
					$("#navigation-items").children().stop().animate({color: "white"}, 20);	
					$("#navigation-items").children().css('text-shadow', '0px 1px 3px rgba(34, 34, 34, 0.3)');
				
				}
				
			}
			
		});
		
	}
		
	if (header.length > 0) {
		$("#navigation").css('position', 'fixed');			
		$("#navigation").css('box-shadow', '0px 0px 3px rgba(70, 83, 96, 0.0)');	
		$("#navigation").css('background-color', 'transparent');
		$("#navigation-logo").each(function() {
			$(this).attr('src', 'https://gradoapp.com/assets/logo_white.png');
			
		});
		
	}
	else {
		$("#navigation-action").switchClass("navigation-action", "navigation-action-white", 0, "easeInOutQuad");
		$("#navigation-logo").attr('src', 'https://gradoapp.com/assets/logo_green.png');
		$("#navigation").css('box-shadow', '0px 0px 3px rgba(70, 83, 96, 0.3)');		
		$("#navigation").stop().animate({
			backgroundColor:'white',
			borderColor:'#E2E2E2',
		
		}, 20);
		
		$("#navigation-items").children().stop().animate({color: "#7A7A7A"} ,20);
		$("#navigation-items").children().css('text-shadow', '0px 1px 3px rgba(34, 34, 34, 0.0)');
		
	}
	
	$("#navigation-mobile").css('box-shadow', '0px 0px 3px rgba(70, 83, 96, 0.0)');
	$("#navigation-reveal").attr('src', 'https://gradoapp.com/assets/icon_menu.png');	
	$("#navigation-logo-mob").attr('src', 'https://gradoapp.com/assets/logo_green.png');		
				
	$("#navigation-reveal").click(function() {
		togglemenu();
		
	});
	
	$(".navigation-action").each(function() {
		$(this).click(function() {
			var button = $(this).html();
			if (button == "dashboard") location.href = 'http://gradoapp.com/auth/index';
			else {
				$('html,body').animate({scrollTop: $("#section-mailing").offset().top - 230});
				togglemenu();
				
			}
			
		});

	});
	
});

function togglemenu() {
	if ($('#nagivation-menu').is(":hidden")) {
		$("#nagivation-menu").slideDown("fast");
		$(".navigation-action").each(function() {
			$(this).switchClass("navigation-action", "navigation-action-white", 20, "easeInOutQuad");
			
		});
		
		var animationdelay = 40;
		$(".navigation-menu-item").each(function() {
			animationdelay += 80;
			$(this).delay(animationdelay).animate({opacity:"1.0", left:"0px"});
			
							
		});
		
		$("#navigation-reveal").attr('src', 'http://gradoapp.com/website/assets/icon_close.png');		

	}
	else {
		$(".navigation-menu-item").each(function() {
			$(this).css({opacity:"0.0", left:"-12px"});
							
		});
						
		$("#nagivation-menu").slideUp("fast");
		$("#navigation-reveal").attr('src', 'http://gradoapp.com/website/assets/icon_menu.png');		
		
	}
	
}
