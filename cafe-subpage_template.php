<?php
    /*
    Template Name: Cafe subpage
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid sub-page">
            <div class="row circle-bg">
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
    </div>
                     </div>
                <div class="col-xs-1"></div>

            </div><!--            row with circles background-->
 
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    
                    <p class="a-list"><?php the_field("introtext"); ?> </p>
                    <div class="video"><?php the_field("memoryvid"); ?></div>
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
    <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <h2><?php the_field("headingforsubsection1"); ?></h2>
                    <p class="b-list"><?php the_field("bodyforsubsection1"); ?> </p>
                    <img class = "landing-img" alt = "ladies at memory cafe" src ="<?php the_field("subsectionimage1");?>">
                    <p class="b-list"><?php the_field("bodyforsubsection1continued"); ?> </p>
                    
                    <a href="<?php the_field("buttonforsubsection1"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextforsubsection1"); ?></h4>
                        </a>
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
<div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <h2><?php the_field("headingforsubsection2"); ?></h2>
                    <p class="c-list"><?php the_field("bodyforsubsection2"); ?> </p>
                    
                    <a href="<?php the_field("buttonforsubsection2"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextforsubsection2"); ?></h4>
                        </a>
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
            
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>