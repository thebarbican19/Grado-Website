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
	<script src="js/tagwidget.js"></script>
		
	<title>Gradtag - Tag Generator WebApp</title>
	<meta name="description" content="The rich text tag generator algorithm used to power Grado, now available for bloggers and developers"/>
	<meta name="keywords" content="grado,tags,gradtag,machine,learning,algorithm"/>
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
			
	echo '<meta http-equiv="last-modified" content="' . date ("Y-m-d@H:i:s", filemtime("gradtag.php")) . ' GMT" />';
	echo '<meta http-equiv="Content-type" content="text/html;charset=UTF-8">';
	
	?>
	
	<meta name="twitter:app:id:iphone" content="1090719110"/>
	<meta name="twitter:app:name:iphone" content="Grado"/>
	<meta name="twitter:site" content="@gradoapp">	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Gradtag - Tag Generator WebApp"/>
	<meta name="twitter:description" content="The rich text tag generator algorithm used to power Grado, now available for bloggers and developers"/>
	<meta name="twitter:image" content="https://gradoapp.com/website/assets/web_icon.png" />
			
	<meta property="og:type" content="product" />
	<meta property="og:title" content="Gradtag - Tag Generator WebApp"/>
	<meta property="og:description" content="The rich text tag generator algorithm used to power Grado, now available for bloggers and developers"/>
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
	<link rel="stylesheet" href="style/gradtag.css" type="text/css" charset="utf-8"/>
		
</head>
<body>	
	<div class="section-intro" id="section-intro"></div>
	<div class="container-fluid">
		<? include 'lib/navigation.php'; ?>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-header" style="min-height:600px;" align="center">
				<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs" align="center">
					<h1 style="margin-top:140px;">Gradtag</h1>
				</div>
				<div class="col-xs-12 visible-xs" align="center">
					<h1 style="margin-top:170px;">Gradtag</h1>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 widget-input">
					<form id="widget-form">
						<textarea class="widget-textarea" id="widget-textarea">This web-app is designed to demonstrate the core framework in Grado (the all new content discovery platform powered by communities). Its job is to take text data and use various technologies to 'understand' the contents of the text by producing an array of associated keywords. &#10;&#10;You can copy any text into this widget to generate associated keywords. This is perfect for producing tags for your blog!</textarea>
						<div class="widget-footer">
							<div id="widget-count" class="widget-count">0 words</div>
							<input type="submit" value="analyse" id="widget-action" class="widget-action"></input>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-data">
				<div class="data-container" id="data-container">
					<h2>positivity rating</h2>	
					<div class="data-progress" id="data-positivity-bar">0%</div><p>
					<h2>related tags</h2>			
					<div id="data-tag-container" class="data-tag-container">

					</div>
					<!--
					<h3>also mentioned</h3>			
					<div id="data-na-container" class="data-tag-container">

					</div>
					-->
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-descripton" align="center">
				<div class="description-containers">
					<div class="col-sm-4 col-md-4 col-lg-4 hidden-xs description-cell" align="left">
						<h2>the problem</h2>
						<a href="https://gradoapp.com" alt="grado, content discovery via community for iOS" class="description-link">Grado</a> is built around mass data. When a user posts something we harvest meta data from the source. But data alone not much use unless you can make sense of it and making sense of so much data as quickly as possible isn’t easy!
	
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 hidden-xs description-cell" align="center">
						<h2>the solution</h2>
						To address this issue we developed a system we call <a href="https://gradoapp.com/gradtag" alt="gradtag webapp for generation SEO tags" class="description-link">gradtag</a>. This uses a dictionary of over 15,000 words and lots of magic code and <a href="https://en.wikipedia.org/wiki/Machine_learning" target="_blank" alt="machine learning wiki" class="description-link">machine-learning</a> to generate an array tags in just a few miliseconds. With these tags we can then cataogrise the data easiliy. Cool right?
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 hidden-xs description-cell" align="right">
						<h2>the widget</h2>
						The only way to really test something like this is to use real world scenarios and live data, which is why we created this awesome free widget! <p><p>If you have any questions about this widget, or anything Grado related the drop us a <a href="https://gradoapp.com/contact"  alt="grado contact us" class="description-link">message</a>, we would love to hear from you!
					</div>
					
					<div class="col-xs-12 visible-xs" align="center">
						<div class="description-cell">
							<h2>the problem</h2>
							<a href="https://gradoapp.com" alt="grado, content discovery via community for iOS" class="description-link">Grado</a> is built around mass data. When a user posts something we harvest meta data from the source. But data alone not much use unless you can make sense of it and making sense of so much data as quickly as possible isn’t easy!
						</div>
						<div class="description-cell">
							<h2>the solution</h2>
							To address this issue we developed a system we call <a href="https://gradoapp.com/gradtag" alt="gradtag webapp for generation SEO tags" class="description-link">gradtag</a>. This uses a dictionary of over 15,000 words and lots of magic code and <a href="https://en.wikipedia.org/wiki/Machine_learning" target="_blank" alt="machine learning wiki" class="description-link">machine-learning</a> to generate an array tags in just a few miliseconds. With these tags we can then cataogrise the data easiliy. Cool right?<p>
								
						</div>
						<div class="description-cell">
							<h2>the widget</h2>
							The only way to really test something like this is to use real world scenarios and live data, which is why we created this awesome free widget! <p><p>If you have any questions about this widget, or anything Grado related the drop us a <a href="https://gradoapp.com/contact"  alt="grado contact us" class="description-link">message</a>, we would love to hear from you!
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