<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?><?php wp_title(':'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	</head>
	<body<?php body_class(); ?>>
	
	<div id="container">
		
		<div id="head">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<p id="desc"><?php bloginfo('description'); ?></p>
			
			<?php if(has_post_thumbnail($post->ID)): ?>
				<p><?php echo get_the_post_thumbnail($post->ID); ?></p>
			<?php else: ?>
				<p><img src="<?php header_image(); ?>" alt="店内"
					title="" width="<?php echo HEADER_IMAGE_WIDTH; ?>"
					height="<?php echo HEADER_IMAGE_HEIGHT; ?>" /></p>
			<?php endif; ?>
			
			<?php wp_nav_menu(array('theme_location' => 'navbar')); ?>
		</div>