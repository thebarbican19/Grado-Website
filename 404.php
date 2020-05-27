<head>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/transit.js"></script>
	<script src="js/cookies.js"></script>
	<script src="js/mobiledetection.js"></script>
	<script src="js/navigation.js"></script>
	<script src="js/mailing.js"></script>
	<script src="js/intro.js"></script>
	<script>
		$(document).ready(function() {		
			$(".header-action").each(function() {
				$(this).hover(function() {
					$(this).stop().animate({"top":"-5px"}, 150, 'easeOutExpo'); 
					
				}, function() {
					$(this).stop().animate({"top":"0px"}, 250, 'easeOutQuint'); 
					
				});
							
				$(this).click('click', function (event) {
					event.preventDefault();
					history.back(1);
						
				});
				
			});
			
		});
		
	</script>
			
	<title>404 | Grado</title>
	<meta name="description" content="Grado is a content discovery platform (for iOS) that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta name="keywords" content="grado,app,ios,mobile,community,content,discovery"/>
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
	<meta http-equiv="content-language" content="en" />
	<meta name="language" content="English">
	<meta name="copyright" content="GradoApp Ltd." />
	<meta name="apple-itunes-app" content="app-id=1090719110, affiliate-data=myAffiliateData, app-argument=gradoapp://">
	
	<? 
			
	echo '<meta http-equiv="last-modified" content="' . date ("Y-m-d@H:i:s", filemtime("index.php")) . ' GMT" />';
	echo '<meta http-equiv="Content-type" content="text/html;charset=UTF-8">';
	
	?>
	
	<meta name="twitter:app:id:iphone" content="1090719110"/>
	<meta name="twitter:app:name:iphone" content="Grado"/>
	<meta name="twitter:site" content="@gradoapp">	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Grado - Content Discovery via Community"/>
	<meta name="twitter:description" content="Grado is a content discovery platform (for iOS) that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta name="twitter:image" content="https://grado-website.herokuapp.com/website/assets/web_icon.png">
		
	<meta property="og:type" content="product" />
	<meta property="og:title" content="Grado - Content Discovery via Community"/>
	<meta property="og:description" content="Grado is a content discovery platform (for iOS) that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta property="og:image" content="https://grado-website.herokuapp.com/website/assets/web_icon.png" />
	<meta property="og:site_name" content="Grado"/>
    <meta property="al:ios:app_store_id" content="1090719110"/>
    <meta property="al:ios:app_name" content="Grado" />
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link href="https://plus.google.com/b/113134776986953629476" rel="publisher" />    
	<link rel="icon" href="https://grado-website.herokuapp.com/assets/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://grado-website.herokuapp.com/style/main.css" type="text/css" charset="utf-8"/>
	
</head>
<body>	
	<div class="section-intro" id="section-intro"></div>
	<div class="container-fluid">
		<? include 'lib/navigation.php'; ?>
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-header" id="section-header" style="overflow-y:hidden; color:white;" align="center">
				<div class="lost-container" align="center">
					<h1 style='font-size:160px;'>404</h1>
					<div class="lost-text">It looks like the page or channel you were looking for has been removed or never existed. Or maybe it's a conspiracy!</div>
					<div class="header-action" id="header-action">Go Back</div>
				</div>
			</div>
		</div>
		<? include 'lib/mailing.php'; ?>
	</div>
	<? include 'lib/footer.php'; ?>
</body>
</html>