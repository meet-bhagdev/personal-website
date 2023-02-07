<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="nl" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="Meet Bhagdev" />	
		<meta name="description" content="I am Meet Bhagdev, a tenured product manager who has spent most of his career building and growing cloud services. I am a problem solver who likes to challenge assumptions and find design innovating solutions. I am currently a lead Product Manager at Amazon Web Services focusing on NoSQL database services such as Amazon DocumentDB. I am currently a lead Product Manager at Amazon Web Services focusing on NoSQL database services such as Amazon DocumentDB. I am originally from India and moved to the United States in 2011 to study at University of California, UCLA." />
		<meta name="keywords" content="Meet Bhagdev, Product Manager at Amazon Web Services (ex Microsoft Azure)" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="14 days" />
			
		<title>Meet Bhagdev</title>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
		<link href="view/css/bootstrap.min.css" rel="stylesheet" />
		<link href="view/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="shortcut icon" href="letter-k-16.ico" type="image/x-icon" />
		<link rel="icon" href="letter-k-16.ico" type="image/x-icon" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="view/js/utils.js"></script>
        <script type="text/javascript" src="view/js/jquery.csv.js"></script>

		
		<!-- Begin Inspectlet Embed Code -->
		<script type="text/javascript" id="inspectletjs">
			window.__insp = window.__insp || [];
			__insp.push(['wid', 92785244]);
			(function() {
				function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://www.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
				if (window.attachEvent){
					window.attachEvent('onload', __ldinsp);
				}else{
					window.addEventListener('load', __ldinsp, false);
				}
			})();
		</script>
		<!-- End Inspectlet Embed Code -->
	</head>
	<body data-spy="scroll" data-target="#navbar-example">	 
		
		
		<?php 
			
			// show an different picture per day, loop through array
			$header_images = array(
				array('source' => VIEW_PATH.'images/hotdog_stand_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/metro_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/taxi_drive_by_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/tower_scope_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/highway_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/window_rain_animation.gif', 'position' => 'bottom right'),
				array('source' => VIEW_PATH.'images/coffee_animation.gif', 'position' => 'center center')
			);
			$current_index  = (@isset($_GET['header']) && is_numeric($_GET['header'])) ? intval($_GET['header']) : date('d') % count($header_images); // $_GET['header'] overwrites current header
			$current_header = (@isset($header_images[$current_index])) ? $header_images[$current_index] : current($header_images);
		
			if(date('d-m') == '19-11')
			{
				$current_header = array('source' => VIEW_PATH.'images/birthday_animation.gif', 'position' => 'center center');
			}
		?>
	
		<div id="top" class="jumbotron" data-src="<?= $current_header['source']; ?>" data-position="<?= $current_header['position']; ?>">
			<div class="container">
				<h1><?= $profile->full_name; ?></h1>
				<p class="lead">Interactive resume</p>
			</div>
			
			<div class="overlay"></div>
			
			<a href="#profile" class="scroll-down">	
				<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
		</div>
		
		<nav class="navbar navbar-default" id="navbar-example" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#profile">Profile</a></li>
					<li><a href="#experiences">Experiences</a></li>
					<li><a href="#abilities">Abilities</a></li>
					<li><a href="#interests">Interests</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<div id="profile" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/profile.inc.php'); ?>
			</div>	
		</div>	
		
		<div id="experiences" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/experiences.inc.php'); ?>
		</div>
		
		<div class="background-white">
			<div id="abilities" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/abilities.inc.php'); ?>
			</div>
		</div>
		
		<div id="interests" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/interests.inc.php'); ?>
		</div>
		
		<div class="background-gray">
			<div id="contact" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/contact.inc.php'); ?>
			</div>
		</div>
		
		<?php include(VIEW_INCLUDE_PATH.'sections/upgrade.inc.php'); ?>
		

		
		</script>
	</body>
</html>