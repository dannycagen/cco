<!doctype html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/json2/20150503/json2.min.js"></script>
		<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.14/es5-shim.min.js"></script>
		<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.14/es5-sham.min.js"></script>
		<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,300,100,600,700,800,400italic">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/jquery-serialize-object/2.5.0/jquery.serialize-object.min.js"></script>
	<script charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>

	<!--[if lt IE 10]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/4.0.1/placeholders.min.js"></script>
	<![endif]-->

	<script>
		var API_ENDPOINT = '<?= admin_url("admin-ajax.php") ?>';
	</script>

	<?php
		wp_enqueue_script('main', get_cached_busted_theme_url('assets/js/main.js'));
		wp_enqueue_style('main',  get_cached_busted_theme_url('assets/css/main.css'));
		wp_enqueue_style('theme', get_cached_busted_theme_url('style.css'));
	?>

	<?php wp_head() ?>

	<?php if ($data = get_open_graph_data()): ?>

		<meta property="fb:app_id"      content="">
		<meta property="og:title"       content="<?= esc_attr($data->title) ?>">
		<meta property="og:type"        content="website">
		<meta property="og:url"         content="<?= esc_attr($data->url) ?>">
		<meta property="og:image"       content="<?= esc_attr($data->image) ?>">
		<meta property="og:site_name"   content="La voix des patients">
		<meta property="og:description" content="<?= esc_attr($data->description) ?>">

		<meta name="twitter:card"        content="summary_large_image">
		<meta name="twitter:title"       content="<?= esc_attr($data->title) ?>">
		<meta name="twitter:description" content="<?= esc_attr($data->description) ?>">
		<meta name="twitter:image"       content="<?= esc_attr($data->image) ?>">

	<?php endif ?>

	<?php if (get_field('ga_web_property_id','option')): ?>

		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php the_field("ga_web_property_id","option") ?>', 'auto');
		ga('send', 'pageview');
		</script>
		<!-- End Google Analytics -->

	<?php endif ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1955788891300824');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1955788891300824&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>
<body <?php body_class() ?>>


<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId   : '<?php the_field("facebook_app_id","option") ?>',
			xfbml   : true,
			version : 'v2.8'
		});
		FB.Event.subscribe('edge.create', function(url){
			trackSocial('Facebook', 'Like', url);
		});
	};
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>



<div id="wrap">
	<header id="banner" role="banner" class="container-fluid">

		<div class="row">
			<a class="logo visible-xs-block" href="<?= home_url() ?>">
				<img src="<?php the_theme_url('assets/img/logo.jpg') ?>" height="34" alt="WIDEX">
			</a>
			<nav class="nav-primary" role="navigation">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-primary-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="glyphicon glyphicon-remove"></span>
				</button>
				<div class="collapse navbar-collapse" id="nav-primary-collapse">
					<?php
						wp_nav_menu([
							'container'      => false,
							'theme_location' => 'header_navigation_1',
							'fallback_cb'    => false,
						])
					?>
					<a class="logo hidden-xs" href="<?= home_url() ?>">
						<img src="<?php the_theme_url('assets/img/logo.jpg') ?>" height="34" alt="WIDEX">
					</a>
					<?php
						wp_nav_menu([
							'container'      => false,
							'theme_location' => 'header_navigation_2',
							'fallback_cb'    => false,
						])
					?>
					<?php  echo the_language_switcher()  ?>
				</div>
			</nav>
		</div>
	</header>
	<div id="document" role="document">
