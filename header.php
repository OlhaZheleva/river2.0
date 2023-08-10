<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=<?=time();?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css?ver=<?=time();?>">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/favicon.svg">
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<?php wp_head(); ?>
</head>
<body>
    <div class="zoom-container">
        <div class="wrapper">
            <header class="header">
                <div class="navigation">
                    <button class="open-menu">
                        <img id="open" src="<?php echo get_template_directory_uri();?>/images/icon-logo.svg" alt="River Advisors">
                        <div class="mobile-menu">
                            <ul class="nav">
                                <li>
                                    <a href="#bl2" class="nav-link">Services</a>
                                </li>
                                <li>
                                    <a href="#bl4" class="nav-link">ABout us</a>
                                </li>
                                <li>
                                    <a href="#footer" class="nav-link">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </button>
                    <ul class="nav">
                        <li>
                            <a href="#bl2" class="nav-link">Services</a>
                        </li>
                        <li>
                            <a href="#bl4" class="nav-link">ABout us</a>
                        </li>
                        <li>
                            <a href="#footer" class="nav-link">Contacts</a>
                        </li>
                    </ul>
                </div>
                <a class="logo" href="#">
                    <img src="<?php echo get_template_directory_uri();?>/images/main-logo.svg" alt="River Advisors">
                    <img src="<?php echo get_template_directory_uri();?>/images/main-logomob.svg" alt="River Advisors">
                </a>
            </header>