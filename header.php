<head>
    <meta charset="<?php bloginfo('charset'); ?>">


    <title>
        <?php
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


    <!—Viewport responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
        <!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK -->
        <!—Google fonts -->

            <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">



            <!-- CSS:  -->
            <!--remove all our styles and any Javascript code. Wordpress automatically calls javascript /jquery elsewhere, calls to javascript are not needed in the header or the footer now-->

            <?php wp_head(); ?>
            <!--very important that this is added-->


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
                                <a href="https://dementiafriendlywa.com.au/"><img class="header-img" alt="Alzheimer's WA Logo" src="<?php the_field("headerlogo");?>"></a>
                            </div>
                            <div class="col-xs-1"></div>
                            <div class="col-xs-6 right-menu">
                                <div class="row desktop-header">

                                    <a href="tel:1300667788">
                                        <h6>Customer Support:</h6>
                                        <h5>1300 66 77 88</h5>
                                    </a>
                                    <div class="navbar-form navbar-right">
                                        <div class="form-group">
					
				
                                            <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

                                            <ul id="sidebar">

                                                <?php dynamic_sidebar( 'sidebar1' ); ?>

                                            </ul>

                                            <?php endif; ?></div>
                                    </div>

                                </div>

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