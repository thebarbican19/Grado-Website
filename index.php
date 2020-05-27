<!DOCTYPE html>
<head>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/transit.js"></script>	
	<script src="js/cookies.js"></script>
	<script src="js/mobiledetection.js"></script>
	<script src="js/navigation.js"></script>
	<script src="js/main.js"></script>
	<script src="js/mailing.js"></script>
	<script src="js/intro.js"></script>
			
	<title>Grado - Content Discovery via Community</title>
	<meta name="description" content="Grado is a content discovery platform (for iOS) that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!"/>
	<meta name="keywords" content="grado,app,ios,mobile,community,content,discovery"/>
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
	<link rel="stylesheet" href="style/main.css" type="text/css" charset="utf-8"/>
	
</head>
<body>	
	<div class="section-intro" id="section-intro"></div>
	<div class="container-fluid">
		<? include 'lib/navigation.php'; ?>
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-header" id="section-header" style="overflow-y:hidden;" align="center">
				<div class="header-container" align="center">
					<div class="col-sm-6 col-md-6 col-lg-6 hidden-xs header-text" style="text-align:left; padding-right:25px;">
						<h1>Content Discovery via Community</h1>Grado is a content discovery platform that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!<br/><div class="header-action" id="header-action">Get it!</div>
					</div>
					<div class="col-xs-12 visible-xs header-text" style="margin-top:120px;">
						<h1>Content Discovery via Community</h1>Grado is a content discovery platform that blends the best of the web, rich data and the power of community together all in one simple platform for everybody!<br/><div class="header-action" id="header-action">Get it!</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 hidden-xs header-image">
						<img src="assets/iphone_commnuity.png" width="100%" alt="grado communities on iPhone 7">					
					</div>					
					<div class="col-xs-12 visible-xs  header-image" align="center" style="margin-top:45px;">
						<img src="assets/iphone_commnuity.png" width="100%" alt="grado communities on iPhone 7">
					</div>				
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-communities" id="section-communities" align="center">
				<div class="community-segment">
					<div class="community-segment-underline"></div>
					<span class="community-segment-item" id="community-action" title="Be part of the Community" content="With procedurally generated, location based channels you can keep up to date with what’s going on in your local area, discover events, ask questions or even just gossip with your neighbours." image="local">local</span>
					<span class="community-segment-item" id="community-action" title="What's Trending" content="Grado procedurally generates channels based on trending topics. These can be anything from breaking news stories to recently aired  tv shows.  Whatever it is you can stay updated and in the loop." image="trending">trending</span>
					<span class="community-segment-item" id="community-action" title="Make Your Own" content="You can make your own channels right in the app! These can be just for your own personal use or they can be public meaning anyone can subscribe. You can even add moderators allow anyone in the world to upload to your channel. You make the rules!" image="user">user</span>
					<span class="community-segment-item" id="community-action" title="Staff Picks" content="When we aren't super busy building the content revolution which is Grado we also sometimes create our own channels, these can range from special events to just things our team likes." image="staff">staff</span>	
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6 hidden-xs" style="position:relative;">
					<div class="community-image-container" id="community-image-container" align="right">
						<img src="assets/tile_local_1.png" class="community-image" id="community-image-1" alt="local communities greenwich, uk instagram">
						<img src="assets/tile_local_2.png" class="community-image" id="community-image-2" alt="local communities greenwich, uk">
					</div>
				</div>	
				<div class="col-xs-12 visible-xs community-image-container-mob" id="community-image-container">
					<img src="assets/tile_local_1.png" class="community-image" id="community-image-1">
					<img src="assets/tile_local_2.png" class="community-image" id="community-image-2">
					
				</div>	
				<div class="col-sm-6 col-md-6 col-lg-6 hidden-xs" align="left">
					<div class="community-text" style="text-align:left; margin-left:30px; margin-top:140px; margin-bottom:200px;">
					
					</div>
				</div>	
				<div class="col-xs-12 visible-xs" style="center">
					<div class="community-text" style="text-align:center; margin-top:20px; margin-bottom:60px;">
						
					</div>
				</div>	
				
			</div>
		</div>
		<div class="row">	
			<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs section-sharing" id="section-sharing" align="center">
				<div class="sharing-container"  align="center">
					<div class="sharing-text">
						<h2>Share & Discover </h2>Share and discover <span id="share-video-label" class="share-tag">videos</span>, <span id="share-url-label" class="share-tag">articles</span>, blogs, images, websites, jokes, quotes, questions and even  <span id="share-audio-label" class="share-tag">music!</span>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 hidden-xs sharing-cell" id="share-video" align="center">
						<img src="assets/view_videotile.png" alt="videos on grado" width="100%">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 hidden-xs sharing-cell" id="share-url" align="center">
						<img src="assets/view_urltile.png"  alt="websites blogs on grado" width="100%">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 hidden-xs sharing-cell" id="share-audio" align="center">
						<img src="assets/view_audiotile.png" alt="music (soundcloud) on grado"  width="100%">
					</div>
				</div>
			</div>	
			<div class="col-xs-12 visible-xs section-sharing" align="center">	
				<div class="sharing-text">
					<h2>Share & Discover </h2>Share and discover <span id="share-video-label" class="share-tag">videos</span>, <span id="share-url-label" class="share-tag">articles</span>, blogs, images, websites, jokes, quotes, questions and even  <span id="share-audio-label" class="share-tag">music!</span>
				</div>			
				<div class="col-xs-12 visible-xs sharing-cell" align="center">
					<img src="assets/view_videotile.png" alt="videos on grado" width="70%">
				</div>
				<div class="col-xs-12 visible-xs sharing-cell" align="center">
					<img src="assets/view_urltile.png" alt="websites blogs on grado" width="70%">
				</div>
				<div class="col-xs-12 visible-xs sharing-cell" align="center">
					<img src="assets/view_audiotile.png" alt="music (soundcloud) on grado" width="70%">
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs section-metadata" id="section-metadata" align="center">
				<div class="metadata-container" style="max-height:520px;">
					<div class="col-sm-6 col-md-6 col-lg-6 metadata-image" id="metadata-image">
						<img src="assets/view_article.png" width="100%" style="margin-top:45px; margin-bottom:45px; float:left;">
						<img src="assets/view_comments.png" width="100%" style="margin-bottom:45px; float:left;">
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 metadata-text" id="metadata-text">
						<h2 style='color:white;'>Totally Meta</h2>Grado harvests a ton of data. This is so our system can understand and organize it, but it's also so we can present content in such a way that it is packed with rich data while still being simple, yet elegant.
					</div>
				</div>
			</div>	
			<div class="col-xs-12 visible-xs section-metadata" id="section-metadata" align="center">
				<div class="metadata-container" align="center">
					<div id="metadata-article-mob" style="margin-top:55px;  margin-bottom:35px;">
					<h2 style='color:white;'>Totally Meta</h2>Grado harvests a ton of data. This is so our system can understand and organize it, but it's also so we can present content in such a way that it is packed with rich data while still being simple, yet elegant.
					</div>
					<img src="assets/view_article.png" alt="grado app article example from flickreel" width="80%" style="margin-top:25px; margin-bottom:25px;">
					<div id="metadata-comments-mob" style="margin-top:55px; margin-bottom:35px;">
						<h2 style='color:white;'>Join the Discussion</h2>A community is nothing without a good discussion. That's why we build 'smart' comments.
					</div>
					<img src="assets/view_comments.png" alt="grado app comments example" width="80%" style="margin-bottom:25px;">
											
				</div>
			</div>			
		</div>
		<? include 'lib/mailing.php'; ?>
	</div>
	<? include 'lib/footer.php'; ?>
</body>
</html>