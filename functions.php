<?php

require_once ('framework/custom-walker-nav-menu.php');

/**
 * functions.php
 *
 * The theme's functions and definitions.
 */

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT',    get_stylesheet_directory_uri() );
define( 'IMAGES',       THEMEROOT . '/images' );
define( 'SCRIPTS',      THEMEROOT . '/js' );
define( 'FRAMEWORK',    get_template_directory() . '/framework' );
define('FACEBOOK', 		get_option('facebook_url')		);
define('TWITTER', 		get_option('twitter_url')		);
define('GOOGLEPLUS', 	get_option('google_plus_url')	);
define('PINTEREST', 	get_option('pinterest_url')		);
define('LINKEDIN',		get_option('linkedin_url')		);


/**
 * ----------------------------------------------------------------------------------------
 * 2.0 - Load the framework.
 * ----------------------------------------------------------------------------------------
 */
require_once( FRAMEWORK . '/init.php' );
require_once( FRAMEWORK . '/xpro-theme-options-page.php' );



/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */



if ( ! function_exists( 'xpro_setup' ) ) {
	function xpro_setup() {
		/**
		 * Make the theme available for translation.
		 */
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'xpro', $lang_dir );

		/**
		 * Add support for post formats.
		 */
		add_theme_support( 'post-formats',
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
			)
		);

		/**
		 * Add support for automatic feed links.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Add support for post thumbnails.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'xpro' )
			)
		);
	}

	add_action( 'after_setup_theme', 'xpro_setup' );
}


/**
 * ----------------------------------------------------------------------------------------
 * 5.0 - Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'xpro_post_meta' ) ) {
	function xpro_post_meta() {
		echo '<ul class="list-inline entry-meta">';

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i> ' . __( 'Sticky', 'xpro' ) . ' </li>';
			}

			// Get the post author.
			printf(
				'<li class="meta-author"><a href="%1$s" rel="author">%2$s</a></li>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);

			// Get the date.
			echo '<li class="meta-date"> ' . get_the_date() . ' </li>';

			// The categories.
			$category_list = get_the_category_list( ', ' );
			if ( $category_list ) {
				echo '<li class="meta-categories"> ' . $category_list . ' </li>';
			}

			// The tags.
			$tag_list = get_the_tag_list( '', ', ' );
			if ( $tag_list ) {
				echo '<li class="meta-tags"> ' . $tag_list . ' </li>';
			}

			// Comments link.
			if ( comments_open() ) :
				echo '<li>';
				echo '<span class="meta-reply">';
				comments_popup_link( __( 'Leave a comment', 'xpro' ), __( 'One comment so far', 'xpro' ), __( 'View all % comments', 'xpro' ) );
				echo '</span>';
				echo '</li>';
			endif;

			// Edit link.
			if ( is_user_logged_in() ) {
				echo '<li>';
				edit_post_link( __( 'Edit', 'xpro' ), '<span class="meta-edit">', '</span>' );
				echo '</li>';
			}
		}
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Display navigation to the next/previous set of posts.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'xpro_paging_nav' ) ) {
	function xpro_paging_nav() { ?>
		<ul>
			<?php 
				if ( get_previous_posts_link() ) : ?>
				<li class="next">
					<?php previous_posts_link( __( 'Newer Posts &rarr;', 'xpro' ) ); ?>
				</li>
				<?php endif;
			 ?>
			<?php 
				if ( get_next_posts_link() ) : ?>
				<li class="previous">
					<?php next_posts_link( __( '&larr; Older Posts', 'xpro' ) ); ?>
				</li>
				<?php endif;
			 ?>
		</ul> <?php
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - Register the widget areas.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'xpro_widget_init' ) ) {
	function xpro_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
				array(
					'name' => __( 'Main Widget Area', 'xpro' ),
					'id' => 'sidebar-1',
					'description' => __( 'Appears on posts and pages.', 'xpro' ),
					'before_widget' => '<div id="%1$s" class="widget widget_social %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Footer Widget Area', 'xpro' ),
					'id' => 'sidebar-2',
					'description' => __( 'Appears on the footer.', 'xpro' ),
					'before_widget' => '<div id="%1$s" class="widget widget_social col-sm-3 %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
		}
	}

	add_action( 'widgets_init', 'xpro_widget_init' );
}

/**
 * ----------------------------------------------------------------------------------------
 * 8.0 - Function that validates a field's length.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'xpro_validate_length' ) ) {
	function xpro_validate_length( $fieldValue, $minLength ) {
		// First, remove trailing and leading whitespace
		return ( strlen( trim( $fieldValue ) ) > $minLength );
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * 9.0 - Include the generated CSS in the page header.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'xpro_load_wp_head' ) ) {
	function xpro_load_wp_head() {
		// Get the logos
		$logo = IMAGES . '/logo.png';
		$logo_retina = IMAGES . '/logo@2x.png';

		$logo_size = getimagesize( $logo );
		?>
		
		<!-- Logo CSS -->
		<style type="text/css">
			.site-logo a {
				background: transparent url( <?php echo $logo; ?> ) 0 0 no-repeat;
				width: <?php echo $logo_size[0] ?>px;
				height: <?php echo $logo_size[1] ?>px;
				display: inline-block;
			}

			@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
			only screen and (-moz-min-device-pixel-ratio: 1.5),
			only screen and (-o-min-device-pixel-ratio: 3/2),
			only screen and (min-device-pixel-ratio: 1.5) {
				.site-logo a {
					background: transparent url( <?php echo $logo_retina; ?> ) 0 0 no-repeat;
					background-size: <?php echo $logo_size[0]; ?>px <?php echo $logo_size[1]; ?>px;
				}
			}
		</style>

		<?php
	}

	add_action( 'wp_head', 'xpro_load_wp_head' );
}

/**
 * ----------------------------------------------------------------------------------------
 * 10.0 - Load the custom scripts for the theme.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'xpro_scripts' ) ) {
	function xpro_scripts() {
		// Adds support for pages with threaded comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Register scripts
        wp_register_script( 'jquery-color-js', 'http://cdn.jsdelivr.net/jquery.color-animation/1/mainfile',  array( 'jquery' ), false, true );
        wp_register_script( 'bootstrap-js', 'http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'xpro-custom', SCRIPTS . '/scripts.js', array( 'jquery' ), false, true );
		wp_register_script( 'xpro-parallax-js', SCRIPTS . '/parallax.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'xpro-anime-js', SCRIPTS . '/anime.min.js', array( 'jquery' ), false, true );



		// Load the custom scripts
		wp_enqueue_script( 'jquery-color-js' );
		wp_enqueue_script( 'bootstrap-js' );
		wp_enqueue_script( 'xpro-parallax-js' );
		wp_enqueue_script( 'xpro-anime-js' );
		wp_enqueue_script( 'xpro-custom' );

		// Load the stylesheets
		wp_enqueue_style( 'font-awesome', THEMEROOT . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-gax', THEMEROOT . '/css/fonts.css' );
		wp_enqueue_style( 'xpro-master', THEMEROOT . '/css/master.css' );
	}

	add_action( 'wp_enqueue_scripts', 'xpro_scripts' );
}

?>


