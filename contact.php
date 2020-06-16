<?php
    /*
    Template Name: Contact
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">


    <section class="container-fluid landing-page">
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
                </div>
                <h1><?php the_field("titleofcontactpage"); ?></h1>
            </div>
            
             <div class="row">
                    <!--text-to-speech function-->

                    <button class="text-to-speech" type="button" data-toggle="collpase" data-target="<?php the_field("ttsbutton");?>">
                        <img class="s-icon" alt="text-to-speech icon" src="<?php the_field("ttsicon");?>">

                        <p><?php the_field("ttsname"); ?> </p>
                    </button>
                </div>
                <div class="row">
                    <div class="collapse" id="rspeaker">

                        <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=10');//look for posts that have the category of 10
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 10 get the content
?>
                        <div>
                            <p class=""><?php the_content() ?></p>
                        </div>
                        <?php
endwhile;
endif;
wp_reset_query();?>
                    </div>
                </div>
            <div class="col-xs-1"></div>


        </div><!--            row with circles background-->

        <div class="row intro">

            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <!--image-->
                <img class="landing-img" alt="gathering at memory cafe" src="<?php the_field("circleimage");?>">
                <p><?php the_field("bodyforcontactpage"); ?> </p>
            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section><!--                intro text with image-->


    <section>

        <form id="contact-form" method="post" action="contact.php" role="form">
            
            <!--insert form here in wordpress-->
            <?php 
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=11');//look for posts that have the category of 11
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 11 get the content
?>
            <div>
                <p><?php the_content() ?></p>
            </div>
            <?php
endwhile;
endif;
wp_reset_query();?>

        </form>
    </section><!--        contact form-->


    <section class="container-fluid more-info">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <h2><?php the_field("titleaddresses"); ?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <p><?php the_field("address1"); ?> </p>
                </div>
                <div class="col-sm-6">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=55%20Walters%20Drive%20Osborne%20Park%20WA%206017&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                </div>
            </div>
            <div class="services">
                <p><?php the_field("servicestext"); ?> </p>
            </div>
        </div>
        <div class="col-xs-1"></div>
    </section>
    <?php get_footer(); /* Tells WordPress to include footer.php */ ?>