<?php 
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<?php 
	// Get the favicon.
	$favicon = IMAGES . '/icons/favicon.png';

	// Get the custom touch icon.
	$touch_icon = IMAGES . '/icons/apple-touch-icon-152x152-precomposed.png';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $touch_icon; ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



	<!-- MAIN CONTENT AREA -->
    <header id="nav-main">
        <nav class="navbar navbar-fixed-top ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <div id="lineDrawing"> <svg viewBox="0 0 350.00 80.00">
                            <g fill="none" fill-rule="evenodd" stroke="#ffffff" stroke-width="2" class="lines">
                                <path class="cls-1" d="M83.69,74.73,99.87,53.52H59ZM58.12,44.37h48.73l10.61-13.9H64.74A20.9,20.9,0,0,0,58.12,44.37ZM92.83,17.3a97.1,97.1,0,0,0-13.06,4h44.66L134.9,7.61S101,15.57,92.83,17.3Z" transform="translate(-4.73 -6.28)"/>
                                <path class="cls-2" d="M5.41,7.61l16,13.72H79.77a97.1,97.1,0,0,1,13.06-4C101,15.57,134.9,7.61,134.9,7.61ZM48.28,44.37h9.84a20.9,20.9,0,0,1,6.62-13.9H32.07Z" transform="translate(-4.73 -6.28)"/>

                                <path class="cls-3" d="M191.09,32.19l-21,33.33q-3.56,5.66-7.8,7.85t-12.42,2.19h-30.6q-4.55,0-6.82-2a5.53,5.53,0,0,1-1.66-5.47,9.59,9.59,0,0,1,.65-2.11,15.12,15.12,0,0,1,1.24-2.27l29.65-47.13q3.6-5.65,7.76-7.84t12.36-2.19h30.67c3.06,0,5.36.68,6.87,2a5.68,5.68,0,0,1,1.65,5.6,8.29,8.29,0,0,1-.65,2,20.48,20.48,0,0,1-1.28,2.32l-2,3.21H168.21a8.86,8.86,0,0,0-4.49,1.08,9.68,9.68,0,0,0-3.3,3.34L141.91,55.92a6.11,6.11,0,0,0-.45.82,3.63,3.63,0,0,0-.25.87,2,2,0,0,0,.75,2.08,5.08,5.08,0,0,0,3,.74,8.84,8.84,0,0,0,4.44-1A9.85,9.85,0,0,0,152.74,56l5.52-8.7h-5.77l9.56-15.13Z" transform="translate(-4.73 -6.28)"/>
                                <path class="cls-3" d="M227.67,6.53H264.5a7,7,0,0,1,5.35,1.91,5.67,5.67,0,0,1,1.2,5.12,9.66,9.66,0,0,1-.38,1.47,16.11,16.11,0,0,1-.67,1.63l-27.4,58.9H168.49l43.65-43.37h24.77L210.42,60.43h14.93l17.06-35.18a.7.7,0,0,1,.08-.2,4.61,4.61,0,0,0,.35-1.08,1.79,1.79,0,0,0-.47-1.67,2.64,2.64,0,0,0-1.92-.64H218.33Z" transform="translate(-4.73 -6.28)"/>
                                <path class="cls-3" d="M296.3,57.2l-11.82,11a28,28,0,0,1-8.83,5.73A33.6,33.6,0,0,1,264,75.56H248.32l9.55-15.13h3.36a15.8,15.8,0,0,0,5.57-.85,16.38,16.38,0,0,0,4.85-3.14l21.6-18.62L288.47,6.53H311l2,14,9.29-8.77a18.56,18.56,0,0,1,6.19-4,22.28,22.28,0,0,1,7.79-1.22h18.32L345,21.66h-1.89a15.23,15.23,0,0,0-5.45.87,16.89,16.89,0,0,0-4.88,3.12L316,40l5.39,35.54H298.92Z" transform="translate(-4.73 -6.28)"/>

                                <path class="cls-4" d="M163.72,22.74a8.86,8.86,0,0,1,4.49-1.08h29.54l2-3.21A20.48,20.48,0,0,0,201,16.13a8.29,8.29,0,0,0,.65-2A5.68,5.68,0,0,0,200,8.57c-1.51-1.36-3.81-2-6.87-2H162.49q-8.2,0-12.36,2.19t-7.76,7.84L128.84,38.07c2.94,2,9,5.52,19,8.24l12.55-20.23A9.68,9.68,0,0,1,163.72,22.74ZM336.27,6.53a22.28,22.28,0,0,0-7.79,1.22,18.56,18.56,0,0,0-6.19,4L313,20.54l-2-14H288.47l4,26.21c9.36,0,19.32.91,27.36,4l13-11.11a16.89,16.89,0,0,1,4.88-3.12,15.23,15.23,0,0,1,5.45-.87H345l9.58-15.13Zm-71.77,0H227.67l-9.34,15.13h22.12a2.64,2.64,0,0,1,1.92.64,1.79,1.79,0,0,1,.47,1.67,4.61,4.61,0,0,1-.35,1.08.7.7,0,0,0-.08.2l-8.92,18.39c8.52-1.94,17.64-4.38,27.4-7.4L270,16.66a16.11,16.11,0,0,0,.67-1.63,9.66,9.66,0,0,0,.38-1.47,5.67,5.67,0,0,0-1.2-5.12A7,7,0,0,0,264.5,6.53ZM212.14,32.19,194.49,49.72a248.52,248.52,0,0,0,29.85-4.13l12.57-13.4ZM152.49,47.32h5.77l-.7,1.11a138,138,0,0,0,22.18,1.81l11.35-18.05h-29Z" transform="translate(-4.73 -6.28)"/>

                                </g>
                            </svg>
                            </div></a>
<!--                        <div id="infiniteLoop" class="site-logo">-->
                            </a>
<!--                        </div>-->
                    </div>
                    <div id="menulinks" class="col-xs-12 col-sm-9 pull-right">
                        <?php

                            $walker = new custom_nav_walker;

                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'menu'              => 'Main Menu',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'depth'             => 2,
                                'walker'            => $walker
                            ) );
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
