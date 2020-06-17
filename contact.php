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
                    
                    <h1><?php the_field("titleforpage"); ?></h1>
                               <!--image-->
                <img class="landing-img" alt="gathering at memory cafe" src="<?php the_field("circleimage");?>">
        
    <div class="row"><!--text-to-speech function-->
        <div class="text-to-speech">
<!--button for text-to-speech function-->

<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=10');//look for posts that have the category of 10
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 10 get the content
?>
            <div><p class=""><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>

    </div>


        <div class="intro">

                <p><?php the_field("bodyforcontactpage"); ?> </p>
            </div>
               </div>
                </div><!--            row with circles background-->
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section><!--                intro text with image-->


    <section>
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <div id="contact-form">
<h2><?php the_field("titleofform"); ?></h2>
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

            </div>
        </div>
        <div class="col-xs-1"></div>
    </section><!--        contact form-->


    <section class="container-fluid address">
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><?php the_field("titleaddresses"); ?></h2>
                        <p><?php the_field("address1"); ?> </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="google-maps">
                            <iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=55%20Walters%20Drive%20Osborne%20Park%20WA%206017&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net"></a>
                        </div>
                    </div>
                </div>
                <div class="row services">
                        <p><?php the_field("servicestext"); ?> </p>
                </div>
            </div>
            <div class="col-xs-1"></div>
        </div>
    </section>
    <?php get_footer(); /* Tells WordPress to include footer.php */ ?>