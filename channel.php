<?
	
$channel_id = str_replace("/", "", $_SERVER[REQUEST_URI]);
$channel_api = 'https://gradoapp.com/api/v1/channel/channel.php?query=' . $channel_id . '';
$channel_apiheaders = array('http'=>array('method'=>"GET", 'header'=>"Accept-language:en\r\n" . "gdappkey:app_WWiPnda8123nshd810271sjspa887s"));
$channel_apicontact = stream_context_create($channel_apiheaders);
$channel_output = json_decode(file_get_contents($channel_api, false, $channel_apicontact)); 
$channel_code = (int)$channel_output[0]->error_code;
//if ($channel_code != 200) header("Location: http://gradoapp.com/404.php");

print_r($channel_output);	
	
?>
<html>
<head>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/transit.js"></script>	
	<script src="js/cookies.js"></script>
	<script src="js/mobiledetection.js"></script>
	<script src="js/navigation.js"></script>
	<script src="js/mailing.js"></script>
	<script src="js/intro.js"></script>
	
	<?
	
	$channel_title = $channel_output[0]->output->title;
	$channel_type = $channel_output[0]->output->type;
	$channel_updated = strtotime($channel_output[0]->output->lastupdated);
	$channel_owner = $channel_output[0]->output->owner->username;
	$channel_keywords = implode(",", $channel_output[0]->output->owner->tags) . ",grado";
	$channel_header = $channel_output[0]->output->header;
	$channel_id = $channel_output[0]->output->id;
	$channel_description = explode(" ", $channel_output[0]->output->description);
	if (count($stream_description) > 155) {
		$channel_description = array_splice($channel_description, 0, 155);
		$channel_description = implode(" ", $channel_description) . "...";
		
	}
	else $channel_description = implode(" ", $channel_description);
			
	echo '<title>' . ucfirst($channel_title) . ' | Grado</title>';
	echo '<meta name="description" content="' . $channel_description . '"/>';
	echo '<meta name="keywords" content="' . $channel_keywords . '"/>';
	echo '<meta name="robots" content="index, follow" />';
	echo '<meta name="googlebot" content="snippet,follow" />';
	echo '<meta http-equiv="content-language" content="en" />';
	echo '<meta name="language" content="English">';
	echo '<meta name="copyright" content="GradoApp Ltd." />';
	echo '<meta name="revisit-after" content="5 days">';
	echo '<meta name="distribution" content="web">';	
	echo '<meta name="referrer" content="always">';	
	echo '<meta http-equiv="last-modified" content="' . date("Y-m-d@H:i:s", date("Y-m-d H:i:s" ,$channel_updated)) . ' GMT" />';
	echo '<meta http-equiv="Content-type" content="text/html;charset=UTF-8">';
	echo '<meta name="apple-itunes-app" content="app-id=1090719110, affiliate-data=myAffiliateData, app-argument=gradoapp://channel?id=' . $channel_id . '&name=' . $channel_title . '">';
	echo '<meta name="google-site-verification" content="z5mJLjVGtEe5qzCefW1pamxI7H46u19n4XnxEzgl1AU" />';
	
	echo '<link rel="canonical" href="http://gradoapp.com/' . $channel_title . '"/>';
	echo '<link rel="icon" href="http://gradoapp.com/assets/favicon.ico">';
		
	echo '<meta name="twitter:app:id:iphone" content="1090719110"/>';
	echo '<meta name="twitter:app:name:iphone" content="Grado"/>';
	echo '<meta name="twitter:site" content="@gradoapp">';
	echo '<meta name="twitter:card" content="summary">';
	echo '<meta name="twitter:title" content="' . $channel_title . ' | Grado"/>';
	echo '<meta name="twitter:description" content="' . $channel_description . '"/>';
	echo '<meta name="twitter:image" content="' . $channel_header . '" />';
			
	echo '<meta property="og:type" content="product" />';
	echo '<meta property="og:title" content="' . $channel_title . ' | Grado"/>';
	echo '<meta property="og:description" content="' . $channel_description . '"/>';
	echo '<meta property="og:image" content="' . $channel_header . '" />';
	echo '<meta property="og:site_name" content="Grado"/>';
	
	?>
	
    <meta property="al:ios:app_store_id" content="1090719110"/>
    <meta property="al:ios:app_name" content="Grado" />
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<? if ($channel_owner == "gradmin") echo '<link href="https://plus.google.com/b/113134776986953629476" rel="publisher" />'; ?>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="style/main.css" type="text/css" charset="utf-8"/>
	
</head>
<body>	
	<div class="section-intro" id="section-intro"></div>
	<div class="container-fluid">
		<? include 'lib/navigation.php'; ?>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-community" style="min-height:600px;" align="center">
				<div class="channel-container">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="channel-header">
							<? if (getimagesize($channel_header) > 0) echo '<img src="' . $channel_header . '" alt="' . $channel_title . ' channel on grado" height="100%">'; ?>
							<div class="team-overlay">
								<? echo '<div class="channel-name">' . $channel_title . '</div>'; ?>
								<? echo '<div class="channel-description">' . $channel_description . '</div>'; ?>
							</div>
						</div>
					</div>		
				</div>
				<div class="channel-error">				
					<h2>Coming Soon</h2>
					Channels are awesome communities/categories/topics you can follow and subscribe too! <p>Unfornatualey you only access channels in our iOS currently.
					
				</div>
			</div>
		</div>
		<? include 'lib/mailing.php'; ?>
	</div>
	<? include 'lib/footer.php'; ?>
</body>
</html>