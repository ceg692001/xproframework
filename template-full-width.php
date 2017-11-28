<?php 
/**
 * template-full-width.php
 *
 * Template Name: Full Width Page
 */
?>

<?php get_header(); ?>
    <div class="top-spacing"><h1>CREATING INGENIOUS DESIGNS</h1></div>
	<div class="home-page-content" role="main">
        <div class="container-fluid">
            <div class="row">
                <div class="overlay-pattern"></div>
                <div id="home-top" class="col-xs-12">
                    <div class="video-bg">
                        <video loop autoplay controls="hidden" src="<?php echo THEMEROOT . '/videos/home-video-bg5.mov'; ?>"></video>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 no-padding">
                    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo THEMEROOT . '/images/parallax-image3.jpg'; ?>">
                        <div class="lower-hero">
                            <div class="container">
                                <div class="row">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <h1 class="display-3">Custom Website</h1>
                                            <p class="lead">Increasing your business visibility online with custom built WordPress theme, search engine optimization, online reputation management, digital, video & social media advertising.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid text-center no-padding sectionHeader">
                    <h2>RECENT PROJECTS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 no-padding">
                    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo THEMEROOT . '/images/parallax-image4.jpg'; ?>">
                        <div class="past-projects">
                            <div class="container">

                                <div class="col-xs-12 col-sm-4">

                                </div>
                                <div class="col-xs-12 col-sm-4">

                                </div>
                                <div class="col-xs-12 col-sm-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- end container-fluid -->

	</div> <!-- end main-content -->

<?php get_footer(); ?>