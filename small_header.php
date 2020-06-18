<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div id="page-wrap">
        <header>
            <!--Navbar-->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="row">


                        <div class="navbar-header">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-4">
                                <a href="https://dementiafriendlywa.com.au/"><img class="header-img" alt="Alzheimer's WA Logo" src="images/awa-logo-with-tagline-final.png"></a>
                            </div>
                            <div class="col-xs-1"></div>
                            <div class="col-xs-6 right-menu">
                                <div class="row desktop-header">

                                    <div class="navbar-form navbar-right">
                                        <div class="form-group">

                                            <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

                                            <ul id="sidebar">

                                                <?php dynamic_sidebar( 'sidebar1' ); ?>

                                            </ul>

                                            <?php endif; ?></div>
                                    </div>

                                </div>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="collapse navbar-collapse" id="myNavbar">
                            
                            <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>

                        </div>
                    </div>
                </div>
            </nav>
        </header>