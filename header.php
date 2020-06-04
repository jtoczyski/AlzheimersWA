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


<!—Viewport responsive  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK -->
    <!—Google fonts  -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">

    
       
    <!-- CSS:  -->
<!--remove all our styles and any Javascript code. Wordpress automatically calls javascript /jquery elsewhere, calls to javascript are not needed in the header or the footer now-->
    
<?php wp_head(); ?> <!--very important that this is added-->


</head>

<body>

    <div id="page-wrap">

        <!--Navbar-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="row">


                    <div class="navbar-header">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4">
                            <a href="#"><img class="header-img" src="images/awa-logo-with-tagline-final.png" alt="Alzheimer's WA Logo"></a> 
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-6 right-menu">
                            <div class="row desktop-header">
                                
                                <a href="tel:1300667788" ><h6>Customer Support:</h6> <h5>1300 66 77 88</h5>
                                </a> 
                                <form class="navbar-form navbar-right">
                                    <div class="form-group">
                                        <input class="desktop-input" type="text" id="mySearch" onkeyup="myFunction()" title="Type in a category">
                            
                                    <button type="submit" class="btn btn-search">Search</button></div>
                                </form>
                                
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
                        <ul class="nav navbar-nav">
                            <li class="search-nav">
                            <form class="navbar-form navbar-right">
                                    <div class="form-group">
                                        <input type="text" id="mySearch2" onkeyup="myFunction()" title="Type in a category">
                            
                                    <button type="submit" class="btn btn-search">Search</button></div>
                                </form></li>
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">What is Dementia?</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">5 Simple Tips</a></li>
                                    <li><a href="#">Where to Access Support</a></li>
                                    <li><a href="#">Becoming an Advocate</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle"  href="cafes.html">Memory Cafés</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Setting up a Memory Café</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Information for Organisations</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Resources for Businesses</a></li>
                                    <li><a href="#">Resources for Local Governments</a></li>
                                    <li><a href="#">Success Stories</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                            <li>
                                    <a class="cust-support" href="tel:1300667788" ><img src="images/phone-icon.png" alt="blue phone icon"><img src="images/phone-icon-white.png" class="hover-white" alt="white phone icon" > Call Customer Support
                                </a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>