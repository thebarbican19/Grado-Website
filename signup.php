<?

$user_type = $_GET['type'];
if (empty($user_type)) $user_type = "user";

?>

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
	<script src="js/auth.js"></script>
			
	<title>Grado - Signup</title>
	<meta name="description" content="Grado is a content discovery platform (for iOS) that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta name="keywords" content="grado,app,ios,mobile,community,content,discovery"/>
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="snippet,nofollow" />
	<meta http-equiv="content-language" content="en" />
	<meta name="language" content="English">
	<meta name="copyright" content="GradoApp Ltd." />
	<meta name="distribution" content="web">
	<meta name="apple-itunes-app" content="app-id=1090719110, affiliate-data=myAffiliateData, app-argument=gradoapp://">
	<meta name="google-site-verification" content="N7eXTwSwcrlKJLyeEEpVFDL574m3spBuw8zQmWiPXpk" />
		
	<? 
			
	echo '<meta http-equiv="last-modified" content="' . date ("Y-m-d@H:i:s", filemtime("signup.php")) . ' GMT" />';
	echo '<meta http-equiv="Content-type" content="text/html;charset=UTF-8">';
	
	?>
	
	<meta name="twitter:app:id:iphone" content="1090719110"/>
	<meta name="twitter:app:name:iphone" content="Grado"/>
	<meta name="twitter:site" content="@gradoapp">	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Grado - Signup"/>
	<meta name="twitter:description" content="Grado is a content discovery platform (for iOS) that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta name="twitter:image" content="https://gradoapp.com/website/assets/web_icon.png">
		
	<meta property="og:type" content="product" />
	<meta property="og:title" content="Grado - Signup"/>
	<meta property="og:description" content="Grado is a content discovery platform (for iOS) that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta property="og:image" content="https://gradoapp.com/website/assets/web_icon.png" />
	<meta property="og:site_name" content="Grado"/>
    <meta property="al:ios:app_store_id" content="1090719110"/>
    <meta property="al:ios:app_name" content="Grado" />
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link href="https://plus.google.com/b/113134776986953629476" rel="publisher" />    
	<link rel="icon" href="https://gradoapp.com/assets/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="style/main.css" type="text/css" charset="utf-8"/>
		
</head>
<body>	
	<div class="section-intro" id="section-intro"></div>
	<div class="container-fluid">
		<? include 'lib/navigation.php'; ?>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-header" style="min-height:600px;" align="center">
				<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs" align="center">
					<h1 style="margin-top:130px; margin-bottom:80px;" id="auth-title">SIGN UP</h1>
				</div>
				<div class="col-xs-12 visible-xs" align="center">
					<h1 style="margin-top:140px; margin-bottom:55px;" id="auth-title-mob">SIGN UP</h1>
				</div>	
				<div class="auth-container">	
					<form id="auth-form">
						<input type="text" placeholder="Username" id="auth-username" class="auth-input">
						<input type="text" placeholder="Email" id="auth-email" class="auth-input">
						<input type="password" placeholder="Password" id="auth-password" class="auth-input">			
						<input type="password" placeholder="Re-Enter Password" id="auth-repassword" class="auth-input">	
						<input type="text" value="signup" style="display:none;" id="auth-type" class="auth-input">	
						<input type="text" value="<? echo $user_type; ?>" style="display:none;" id="auth-user" class="auth-input">
						<input type="submit" value="SIGNUP" id="auth-action" class="auth-action"></input>
					</form>
					<div id="auth-login" style="cursor:pointer;">Login</div>
				</div>
			</div>
		</div>
		
	</div>
	<? include 'lib/footer.php'; ?>	
</body>