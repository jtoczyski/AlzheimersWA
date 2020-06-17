<?php
    /*
    Template Name: Cafe landing
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid landing-page">
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
                     <!--image-->
                    <img class = "landing-img" alt = "gathering at memory cafe" src ="<?php the_field("memorypageimage");?>">
                    
                    <p><?php the_field("textcontentmemory"); ?> </p>
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
            
            <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("titleforfurtherinformationm"); ?></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("mfurtherinfosubheading1"); ?></h3>
                        <p><?php the_field("mtextforfurtherinfo1"); ?> </p>
                        
                        
                         <div class= "learnmore">
                             <div class= "dropdown">
                        <a href="<?php the_field("memorybutton1"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("memorybutton1text"); ?></h4>
                            </a>
<?php 
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=12');//look for posts that have the category of 12
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 12 get the content
?>
            <div class="dropdown-content"><p><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
                             </div> <!--dropdown-->
                        </div><!--button to cafes map -->
                        
            
                    </div>
                     <div class="col-sm-6">
                        <h3><?php the_field("mfurtherinfosubheading2"); ?></h3>
                        <p><?php the_field("mtextforfurtherinfo2"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("memorybutton2"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("memorybutton2text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                </div>
                
            </div>
            <div class="col-xs-1"></div>
        </section>
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>