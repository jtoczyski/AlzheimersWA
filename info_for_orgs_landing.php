<?php
    /*
    Template Name: Organisations landing
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid landing-page">
            <div class="row triangle-bg">
                <div class="col-xs-1"></div>
                <div class="col-xs-10"> 
       <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
                    
                    <h1><?php the_field("titlefororganisationspage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with triangles background-->

            <div class="row"><!--text-to-speech function-->
        <div class="text-to-speech">
<!--button for text-to-speech function-->
            <p>Listen to this page</p>
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
            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                     <!--image-->
                    
                    <p><?php the_field("textcontentorganisations"); ?> </p>

                    <img class = "landing-img" alt = "gathering at memory cafe" src ="<?php the_field("organisationspageimage");?>">
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
            
            <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("titleforfurtherinformationO"); ?></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("Ofurtherinfosubheading1"); ?></h3>
                        <p><?php the_field("Otextforfurtherinfo1"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("organisationsbutton1");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton1text");?></h4>
                        </a>
                    </div><!--button to cafes map -->
                        
            
                    </div>
                     <div class="col-sm-6">
                        <h3><?php the_field("Ofurtherinfosubheading2");?></h3>
                        <p><?php the_field("Otextforfurtherinfo2");?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("organisationsbutton2");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton2text");?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                    
                        <div class="col-sm-6">
                        <h3><?php the_field("Ofurtherinfosubheading3");?></h3>
                        <p><?php the_field("Otextforfurtherinfo3");?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("organisationsbutton3");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton3text");?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                </div>
                
<!--                INSERT map plug-in HERE-->

            </div>
            <div class="col-xs-1"></div>
        </section>
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>