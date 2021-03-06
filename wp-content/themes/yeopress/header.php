<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html lang="en" class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald" type="text/css" />
        <title><?php wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="">
		<link rel="author" href="">
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
		<header id="page-header" class="hidden">
			<?php wp_nav_menu(array(
				'container'      => 'nav',
        'container_id'   => 'primary-nav'
			)) ?>
      <a class="logo" href="<?php echo site_url() ?>">
        <img src="<?php echo bloginfo("template_url"); ?>/images/logo.png" width="100px" />
      </a>
		</header>
    <?php if( is_front_page() ) { ?>
    <div class="main-image">
        <?php wp_nav_menu(array(
          "container"      => "nav",
          "container_id"   => "primary-nav"
        )) ?>
        <img id="big-logo" src="<?php echo bloginfo("template_url"); ?>/images/logo.png" />
        <img id="big-img" src="<?php echo bloginfo("template_url"); ?>/images/allnat/1.jpg" width="100%" />
    </div>
    <?php } ?>
		<div id="content-wrap" class="hidden">
