<?

include '../lib/callback.php';

$user_token = $_COOKIE['gd_bearer'];
$user_api = 'https://grado-website.herokuapp.com/api/v1/user/me.php';
$user_output = api_callback($user_api ,'GET' , '', '');
$user_error = (int)$user_output[0]->error_code;
$user_type = $user_output[0]->user->type;
$user_name = $user_output[0]->user->username;
$user_email = $user_output[0]->user->email;

if ($user_type == "admin" || $user_type == "developer") $action_button = "dashboard";
else $action_button = "get the app";

if ($user_error == 401 || $user_error == 400 || $user_error == 371 || empty($user_token) || $user_type != "admin") {
	$auth_url = "https://grado-website.herokuapp.com/api/v1/user/authenticate.php";
	$auth_destroy = api_callback($auth_url ,'DELETE' , '', '');
	if (auth_destroy[0]->error_code == 200) unset($_COOKIE['gd_bearer']);
	
	header('Location: http://gradoapp.com/signup?type=login');
			
}

?>

<!DOCTYPE html>
<head>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="../js/transit.js"></script>	
	<script src="../js/cookies.js"></script>
	<script src="../js/mobiledetection.js"></script>
	<script src="../js/navigation.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/mailing.js"></script>
	<script src="../js/intro.js"></script>
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link href="https://plus.google.com/b/113134776986953629476" rel="publisher" />    
	<link rel="icon" href="https://grado-website.herokuapp.com/assets/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="../style/main.css" type="text/css" charset="utf-8"/>
	
</head>
<body>	
	<div class="section-intro" id="section-intro"></div>
	<div class="container-fluid">
		<? include '../lib/navigation.php'; ?>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-descripton" align="center">
							
			<?
			
			if (!empty($user_token)) {
				echo '<p><p><p><p><p><p><p>welcome to grado <strong>' . $user_email . '</strong><p>Bearer: ' . $user_token . "<p><p>";
				var_dump($_COOKIE['gd_user']);
				
			}
			
			?>
			</div>
		</div>
	</div>
</body>	