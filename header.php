<?php include('common/header.php'); ?>
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
