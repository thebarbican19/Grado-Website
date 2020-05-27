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
	<script>
		$(document).ready(function() {
			var question_count = 0;	
			$(".faq-container").each(function() {
				if (isMobile.any) $(this).find("#faq-reveal").html('[tap to reveal]');
				else $(this).find("#faq-reveal").html('[click to reveal]');
				
				question_count += 1;
				$("#faq-summary").html("There are currently <strong>" + question_count + "</strong> questions and answers, but we might have missed something. If you cannot find the answer to your question please <a href='https://grado-website.herokuapp.com/contact?t=question' alt='contact us'>contact us</a> and we will be sure to help you out!");
				
				$(this).click(function() {
					if ($(this).find("#faq-text").is(":hidden")) {
						$(this).find("#faq-text").slideDown("fast");
						if (isMobile.any) $(this).find("#faq-reveal").html('[tap to hide]');
						else $(this).find("#faq-reveal").html('[click to hide]');
						
					}
					else {
						$(this).stop().find("#faq-text").slideUp();
						if (isMobile.any) $(this).find("#faq-reveal").html('[tap to reveal]');
						else $(this).find("#faq-reveal").html('[click to reveal]');
						
					}
					
				});
				
			});
			
		});
	
	</script>
	
	<title>Grado - FAQ's</title>
	<meta name="description" content="Frequently asked questions about Grado, the app and everything else!"/>
	<meta name="keywords" content="grado,app,faq,questions,appstore"/>
	<meta name="robots" content="index, follow" />
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
			
	echo '<meta http-equiv="last-modified" content="' . date ("Y-m-d@H:i:s", filemtime("faqs.php")) . ' GMT" />';
	echo '<meta http-equiv="Content-type" content="text/html;charset=UTF-8">';
	
	?>
	
	<meta name="twitter:app:id:iphone" content="1090719110"/>
	<meta name="twitter:app:name:iphone" content="Grado"/>
	<meta name="twitter:site" content="@gradoapp">	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Grado - FAQ's"/>
	<meta name="twitter:description" content="Frequently asked questions about Grado, the app and everything else!"/>
	<meta name="twitter:image" content="https://grado-website.herokuapp.com/website/assets/web_icon.png">
		
	<meta property="og:type" content="product" />
	<meta property="og:title" content="Grado - FAQ's"/>
	<meta property="og:description" content="Frequently asked questions about Grado, the app and everything else!"/>
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
			<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs section-header" style="min-height:310px;" align="center">
				<h1 style="margin-top:140px;">Frequently Asked Questions</h1>
			</div>
			<div class="col-xs-12 visible-xs section-header" style="min-height:310px;" align="center">
				<h1 style="margin-top:170px;">Frequently Asked Questions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section-faq" align="center">
				<div class="faq-container">
					<h3>What is Grado?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado is a content discovery platform that blends the best of the web, rich data and the power of community together all in one simple platform for everybody. Whether you want to know what’s going on in your local area or want to stay updated with tech news grado has you covered!
					</div>
				</div>
				
				<div class="faq-container">
					<h3>How is Grado different to other platforms?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						As avid users of Facebook, Twitter and Pinterest for content discovery in the past, we found that just because your friends share something doesn't mean it's interesting. The same applies if 1 million people like something it doesn't make it interesting to you. We are all different and have different tastes. <p><p>
						Looking at the internet as a whole we found that strangers bond over all different things and because of that micro-communities, blogs, and discussion boards can be found all over the web. But sometimes they are hard to find, harder to follow and just generally messy. We saw an exciting opportunity to solve all these problems and build a platform from the ground up that allows people easily to build communities in which they can share rich content that is relevant to them and to anybody with aligned interests, all with simplicity and ease. 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Is Grado a Social Network?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						No, Grado is very much the opposite of a social network. Sure you can chat and meet people but everything is built around your interests and not based on any social graph, of what other people like or what your friends like. It's about you and the communities you are part of.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What are Channels?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Channels are communities/categories/topics you can subscribe too. These are made up of 3 different types, local, trending, and user.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What are Local Channels?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Location-based channels are procedurally generated when a certain amount of user from the same area join Grado. They are designed to bring local communities and people together. They are great places for getting up to date with what’s going in your area, discover events, asking questions or even if you just want  to gossip with your neighbors, you can do that too!
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What are Trending Channels?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado procedurally generates channels based on trending topics. These can be anything from breaking news stories to recently aired  tv shows.  Whatever it is you can stay updated and in the loop.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What are User Channels<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						User channels are channels created by you, the users! These can be just for your own personal use or they can be public meaning anyone can subscribe. You can even add moderators allow anyone in the world to upload to your channel. You make the rules!
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What is a Channel 'Subscription'?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						All channels give you the option to 'subscribe', this means it is added to your subscriptions in the app and whenever that particular channel is updated it will be more predominant in the app. 
						When you subscribe to a channel you will also be asked if you want to receive notifications. This means you will get push notifications and/or email notifications delivered to you whenever that channel is updated.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What should/can I subscribe to?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado was built on the idea that people all around share the same interests, that's why we are community driven - to allow users to discover things relevant, rather than things your friends are interested in.  So, in short, you should subscribe to anything that interests you. Over time the app will learn what you like and what you don't and present more interesting channels we think you will like, but the choice is yours!
					</div>
				</div>
				
				<div class="faq-container">
					<h3>How do I subscribe and unsubscribe to a Channel?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						To Subscribe to a channel just tap/click to view it and hit the 'subscribe' button right at the top of the screen. To unsubscribe just tap this again.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Can I create my own channel?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Yes! You can create as many channels as you like.  
					</div>
				</div>
				
				<div class="faq-container">
					<h3>I want my channel to be private, can I do this?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						When creating a channel you can select 'public' or 'private'. If you select public it will be available for everybody to access. If you select private only you and any 'moderators' you add can access it. You can change this later if you choose in the options menu of the channel. 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What is a Channel 'moderator'?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						A moderator is a user that has privileges to edit a channel. This means they can delete, and upload posts but they cannot delete it or change the description like the owner  of the channel can.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What should I share?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado is designed for sharing all types of great content. This includes and websites, blogs, articles, videos, pictures and even music (via Soundcloud). You could even just share a quote or a joke if you wanted.
					</div>
				</div>
	
				<div class="faq-container">
					<h3>What shouldn't I share?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado is not a social network. Every post is public, so keep those angry rants and selfies on Facebook. If it's something you think a stranger might like then post it!
					</div>
				</div>
				
				<div class="faq-container">
					<h3>How do I share a content<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						To share content open the compose view in the Grado app. Then you have two choices, share a URL. To do this simply paste in any URL. Alternatively you can add an image from your camera roll, or by capturing a new image with the camera.<p><p>
						Once you have done this you can add a comment to give it some context by just typing into the same text box. Hit share, and that's it! 

					</div>
				</div>
				
				<div class="faq-container">
					<h3>Who can see what I post?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						In short, potentially every Grado user! So If you don't want people to see something don't post it on Grado. But if you do you can delete it by navigating to the post in question > options > delete. 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What happens if I post racist, homophobic, fanatical or offensive/aggressive content?</h3>
					<div id="faq-text" class="faq-text">
						We are very strict on this. If we deem any posts to match these criteria we will remove it without warning, we may even suspend user accounts depending on the contents of the posts. You are fully responsible for what you post. This type of content is also violating our Terms and Conditions so make sure you read them prior to posting.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What happens if I post content that violates copyright?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						If you post anything that you do not own or that violates copyright it will be removed without warning. If you continue to post copyright content we will suspend your account. 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What happens if my post gets 'flagged' or if I flag a post.<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Anytime a post is flagged our team is notified and we will determine if it violates any of our guidelines. If if does it will be removed without warning. However, if a post is flagged a significant number of times in a certain time period it will be removed automatically and is not subject to review. If your post is removed and you would like to contest it please email us at <a href="mailto:support@gradoapp.com" alt="support email">support@gradoapp.com</a>
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Does Grado require an internet connection?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado does require an internet connection to signup and view new and up-to-date content, however, once the content is loaded into Grado it can be viewed offline. This excludes music and videos. 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Why does Grado require my location?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						You do not need to allow location privileges on your device to use Grado, however, if you do choose to share your location it means we can show you posts for your local community (in our nearby timeline). 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What should I do if I find a bug in the app?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						If you are unfortunate enough to find a bug then please contact us using the support form in the app or by emailing us at <a href="mailto:support@gradoapp.com" alt="support email">support@gradoapp.com</a>
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Does Grado cost anything to use?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado is and always will be 100% free to use forever. We have no plans to implement a paid model in the future. 
					</div>
				</div>
	
				<div class="faq-container">
					<h3>Is, and if not when will Grado be supported on my device?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Grado is currently only on iOS. Before 2018 we will be working on both an android version and a responsive website meaning if you don't have an iOS or Android device you will still be able to use Grado via your browser. 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>What happens to my pictures if I share them? Do they still belong to me?</h3>
					<div id="faq-text" class="faq-text">
						Any personally uploaded images from your device are stored securely on our servers. These images still belong to you and at any time you can request them to be removed from our servers. 
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Who can signup to Grado?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Anybody with an email address can signup to Grado, we're not prejudiced! The app is available in every country but currently we currently only support the English language. As time goes on we will add support for multiple languages. If you want to help us speed up the process and localize for your country then please email us at <a href="mailto:info@gradoapp.com" alt="localization email">info@gradoapp.com</a>
					</div>
				</div>
				
				<div class="faq-container">
					<h3>How do I create an account<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						You can create an account simply by downloading our app and hitting the signup button. Easy!
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Why do I need to signup<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						If you create a Grado account you will be able to not only post as much content as you like whenever you want but you will also be able to like and comment on posts plus much much more! It's totally worth it!
					</div>
				</div>
				
				<div class="faq-container">
					<h3>How do I deactivate/delete my account?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						If you want to completely remove your account from our system please email us at <a href="mailto:accounts@gradoapp.com" alt="account email">accounts@gradoapp.com</a>. This process may take up to 2 working days to process.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>Are my personal details secure?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						Keeping your information secure is our highest priority. We are constantly updating our system sure it's secure from hackers. We also NEVER share your contact details with any 3rd parties.
					</div>
				</div>
				
				<div class="faq-container">
					<h3>How are my personal details used?<span class="faq-reveal" id="faq-reveal"></span></h3>
					<div id="faq-text" class="faq-text">
						We may use your details to notify you of events in Grado but you can unsubscribe at any time from any kind of notification. We may also use your personal details to contact you directly for whatever reason. Other than that we will not use your personal details without your approval, and we will certainly not share any information with 3rd parties.
					</div>
				</div>
				
				<div class="faq-summary" id="faq-summary">hello world</div>
			</div>
		</div>
		<? include 'lib/mailing.php'; ?>
	</div>
	<? include 'lib/footer.php'; ?>
</body>
</html>