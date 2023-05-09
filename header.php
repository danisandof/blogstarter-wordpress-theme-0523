<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>
" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>
<body>
<div class="container">
    <!-- header -->
    <div class="logo">
        <h2><?php bloginfo('name'); ?></h2>
    </div>
    <?php wp_nav_menu ( array ( 'theme_location' => 'custom-menu' ) ); ?>
    <!-- header -->
