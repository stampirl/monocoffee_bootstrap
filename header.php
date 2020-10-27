<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<script src="https://kit.fontawesome.com/3aaeb33305.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class() ?>>
<header class="site-header">
    <div class="container">
	<div class="site-logo">
	    <?php echo get_custom_logo(); ?>
	</div>
	<?php if ( has_nav_menu( 'primary' )) : ?>
	    <nav role="navigation">
		<ul class="primary-menu">
		    <?php wp_nav_menu(
			array(
			    'container' => '',
			    'items_wrap' => '%3$s',
			    'theme_location' => 'primary',
			)
		    ); ?>
		</ul>
	    </nav>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'lang' )) : ?>
	    <nav>
		<ul class="lang-menu">
		    <?php wp_nav_menu(
			array(
			    'container' => '',
			    'items_wrap' => '%3$s',
			    'theme_location' => 'lang',
			)
		    ); ?>
		</ul>
	    </nav>
	<?php endif; ?>
    </div>
</header>
