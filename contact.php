<html>
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
	<script src="js/contact.js"></script>
				
	<title>Grado-Tag - Contact Us</title>
	<meta name="description" content="The text alaysing tag generating api used in Grado for iOS"/>
	<meta name="keywords" content="grado,tags,content,videos,discovery,app"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="snippet,follow" />
	<meta http-equiv="content-language" content="en" />
	<meta name="language" content="English">
	<meta name="copyright" content="GradoApp Ltd." />
	<meta name="revisit-after" content="5 days">
	<meta name="distribution" content="web">
	<meta name="apple-itunes-app" content="app-id=1090719110, affiliate-data=myAffiliateData, app-argument=gradoapp://">
	<meta name="google-site-verification" content="N7eXTwSwcrlKJLyeEEpVFDL574m3spBuw8zQmWiPXpk" />
	
	<?
			
	echo '<meta http-equiv="last-modified" content="' . date ("Y-m-d@H:i:s", filemtime("contact.php")) . ' GMT" />';
	echo '<meta http-equiv="Content-type" content="text/html;charset=UTF-8">';
	
	?>
	
	<meta name="twitter:app:id:iphone" content="1090719110"/>
	<meta name="twitter:app:name:iphone" content="Grado"/>
	<meta name="twitter:site" content="@gradoapp">	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Grado - Content Discovery via Community"/>
	<meta name="twitter:description" content="Grado is a content discovery platform that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta name="twitter:image" content="http://gradoapp.com/website/assets/web_icon.png">
		
	<meta property="og:type" content="product" />
	<meta property="og:title" content="Grado - Content Discovery via Community"/>
	<meta property="og:description" content="Grado is a content discovery platform that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta property="og:image" content="http://gradoapp.com/website/assets/web_icon.png" />
	<meta property="og:site_name" content="Grado"/>
    <meta property="al:ios:app_store_id" content="1090719110"/>
    <meta property="al:ios:app_name" content="Grado" />
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link href="https://plus.google.com/b/113134776986953629476" rel="publisher" />    
	<link rel="icon" href="https://grado-website.herokuapp.com/assets/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="style/main.css" type="text/css" charset="utf-8"/>
	<link rel="stylesheet" href="style/gradtag.css" type="text/css" charset="utf-8"/>
		
</head>
<body>	
	<div class="section-intro" id="section-intro"></div>
	<div class="container-fluid">
		<? include 'lib/navigation.php'; ?>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs section-header" style="min-height:310px;" align="center">
				<h1 style="margin-top:140px;">Say Hello</h1>
			</div>
			<div class="col-xs-12 visible-xs section-header" style="min-height:310px;" align="center">
				<h1 style="margin-top:170px;">Say Hello</h1>
			</div>
			<div id="contact-container">			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-container">
					<form id="contact-form" style="margin-top">
						<input type="text" placeholder="Email" id="contact-email" class="contact-input">
						<input type="text" placeholder="Your Name" id="contact-name" class="contact-input" style="border-left-style:solid; border-left-width:1px; border-left-color:#E7E7E7;">			
						<textarea class="contact-textarea" id="contact-message" placeholder="Your message"></textarea>
						<div class="contact-footer">
							<div id="contact-error" class="contact-error"></div>							
							<input type="submit" value="send" id="contact-action" class="contact-action"></input>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-contact" style="padding-top:120px;" align="center">
				<h3>message sent!</h3>
				We will get back to within 48 hours.
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-contact" style="padding-top:10px; padding-bottom:65px;" align="center">
				<div class="contact-team">
					<h3>the team</h3>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="team-person">
							<div class="team-ovatar" url="https://angel.co/joe-barbour">
								<img src="https://d1qb2nb5cznatu.cloudfront.net/users/647198-large?1458665290" alt="Joe Barbour Co-founder of Grado" width="100%">
								<div class="team-overlay">
									<div class="team-name">Joe Barbour</div>
									<div class="team-description">Co-founder of Grado</div>
								</div>
							</div>
						</div>
					</div>		
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="team-person">
							<div class="team-ovatar" url="https://angel.co/rahul-khanna-4">
								<img src="https://d1qb2nb5cznatu.cloudfront.net/users/1832021-large?1467325401" alt="Rahul Khanna Co-founder of Grado" width="100%">
								<div class="team-overlay">
									<div class="team-name">Rahul Khanna</div>
									<div class="team-description">Co-founder of Grado</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
		<? include 'lib/mailing.php'; ?>
	</div>
	<? include 'lib/footer.php'; ?>
</body>
</html>