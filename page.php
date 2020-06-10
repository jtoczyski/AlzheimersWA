<?php get_header(); /* Tells WordPress to include header.php */ ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    

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
                            <a href="#"><img class="header-img" src="images/awa-logo-with-tagline-final.png" alt="AWA Logo"></a>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-6 right-menu">
                            <div class="row desktop-header">

                                <a href="tel:1300667788">
                                    <h6>Customer Support:</h6>
                                    <h5>1300 66 77 88</h5>
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
                                </form>
                            </li>
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">What is Dementia?<span></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">5 Simple Tips</a></li>
                                    <li><a href="#">Where to Access Support</a></li>
                                    <li><a href="#">Becoming an Advocate</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="cafes.html">Memory Cafés<span></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Setting up a Memory Café</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="border-right: solid 1px #fff">Information for Organisations</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Resources for businesses</a></li>
                                    <li><a href="#">Resources for Local Governments</a></li>
                                    <li><a href="#">Success stories</a></li>
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
        </nav><!--        navbar-->

        <section class="container-fluid landing-page">
            <div class="row bc-bg">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <!--<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Memory Cafès</li>
                    </ol>
                    <h1>Memory Cafès</h1>
                </div>
                <div class="col-xs-1"></div>


            </div><!--row with circles background-->
            <!--<div class=" row">
                <div class="col-xs-1"></div>
                <div class="col-xs-3 tts-landing">
                    <!--                button for text-to-speech function-->
                    <!--<p>Listen to this page</p>
                </div>
                <div class="col-xs-1"></div>
            </div><!--            text-to-speech-->

            <!--<div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <img class="lan<!--ding-img" alt="gathering at memory cafe" src="images/cafe-2.jpg">
                    <p>Once a month in a select number of cafés across Perth, a very special morning tea takes place.
                        <br>
                        <br>

                        The morning tea is for people living with dementia; <!--an informal and social affair where people can feel welcomed and accepted remain socially active and make new friends.
                        <br>
                        <br>
                        In recognising the need to encourage inclusion of people living with dementia in the local community, Alzheimer’s WA has partnered with local Government and businesses to bring the Memory Café concept to Western Australia.
                        <br>
                        <br>
                        Each of the cafés involved has an inviting and friendly atmosphere, employs delightful staff and offers delicious coffee and cake.
                        <br>
                        <br>
                        Do you, a family member or friend live with dementia? Visit a Memory Café, enjoy a coffee and some great conversation.
                    </p>
                </div>-->

<!--php start--><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
	<div <?php post_class(); ?>>
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

		<div class="postcontent">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		</div><!--postcomtet-->
						
		<div class="content-band">
			<span class="postmeta-category"><?php the_category(', '); ?></span>
			<span class="postmeta-comments"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span>
			
		</div><!--content-band-->
        </div><!--post class-->


                <div class="col-xs-1"></div>
            </div><!--row-->
                </section><!--intro landing page text with image-->

        <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2>Further Information</h2>
                <div class="row">
                <!--<div class="col-sm-6">
                    <h3>Search for a Cafè Near Me</h3>
                    <p>Search by suburb or on the map for a Memory Cafè nearest you.</p>
                    <div class="learnmore">
                         <button type="button" class="btn red-btn" data-toggle="collapse" data-target="#cafe-map">Search Cafès</button>
                    </div>
                    </div>
                <div class="col-sm-6">
                    <h3>Setting up a Memory Cafè</h3>
                    <p>Find information and advice on setting up a Memory Cafè in your area.</p>
                    <div class="learnmore">
                        <a href="#" class="btn red-btn" role="button">
                            <h4>Learn more</h4>
                        </a>
                    </div></div>
                </div>
                
                <div class="row">
                    <div class="collapse" id="cafe-map">
                    (insert WP map plug-in here)
                    </div>
                    
                
                </div>-->
                </div>
            </div>
            <div class="col-xs-1"></div>
        </section>
<?php get_footer(); ?>