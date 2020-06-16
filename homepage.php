<?php
    /*
    Template Name: Home Page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
            <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=3');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
        <section class="container-fluid landing-links">
        <div class="container">    

            <div class="row">
        <div class="text-to-speech-home">
<!--                button for text-to-speech function-->
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
                
            </div><!--row-->
            <div class="row dementia">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 d-bg"> <!--image-->
                    <img class = 'd-image img-responsive' alt = 'support group' src ='<?php the_field("sectionimage1");?>'>
                </div>
                <div class="col-sm-4 d-text"> <!--What is Dementia?-->
                    <h2><?php the_field("titleforsection1"); ?></h2>
                    <p><?php the_field("sectionparagraph1"); ?> </p>
                    <div class = 'learnmore' id = 'whatisdementia'>
                        <a href="<?php the_field('learnmore1'); ?>" class="btn red-btn" role="button">
                            <h4>Learn more</h4>
                        </a>
                    </div><!--button what is dem? -->
                </div>
                
                <div class="col-sm-1"></div>
            </div><!--what is dementia row-->
            
            <div class="row cafe">
                <div class="col-sm-1"></div>
                
                <div class="col-sm-4 c-text"><!--Memory Cafes-->
                     <h2><?php the_field("titleforsection2"); ?></h2>
                    <p><?php the_field("sectionparagraph2"); ?> </p>
                    <div class="learnmore" id="memorycafes">                       <a href="<?php the_field('learnmore2'); ?>" class="btn red-btn" role="button">
                            <h4>Learn more</h4>
                        </a>
                    </div>
                    </div>
                
            <div class="col-sm-6 c-bg"><!--image-->                    
                <img class = 'c-image img-responsive' alt = 'couple at a cafe' src ='<?php the_field("sectionimage2");?>'>
                    <!--<img class = 'c2image img-responsive' alt = 'couple at a cafe cropped' src = 'images/cafe-md.jpg'> CUSTOM FIELD FOR RESPONSIVE IMAGE???--> 
                </div>
            </div>


        <div class="col-sm-1"></div>
            <!--        memory cafe row-->
            
             <div class="row organisation">
                 <div class="col-sm-1"></div>
                <div class="col-sm-6 o-bg"><!--image-->
                <img class = 'o-image img-responsive' alt ='supermarket employee' src ='<?php the_field("sectionimage3");?>'>
                </div>
                <div class="col-sm-4 o-text"><!--Info for Orgs-->
                     <h2><?php the_field("titleforsection3"); ?></h2>
                    <p><?php the_field("sectionparagraph3"); ?> </p>
                    <div class = 'learnmore' id = 'organisations'>
                        <a href="<?php the_field('learnmore3'); ?>" class="btn red-btn" role="button">
                            <h4>Learn more</h4>
                        </a>
                    </div>
                 <div class="col-sm-1"></div>
            </div><!--info for organisations row-->
            </div>
        </div><!--container-->
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>