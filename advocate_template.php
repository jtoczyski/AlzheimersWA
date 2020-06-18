<?php
    /*
    Template Name: Dementia Adovcate subpage
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

    <section id="container-fluid sub-page">
        <div class="row leaf-bg">
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
                    
<span style="colour: #343741;"></span>
        <div class="row intro">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <!--image-->
                <img class="landing-img" src="<?php the_field("advocateimage");?>">

                <p><?php the_field("bodyforadvocatetext"); ?> </p>

                <h2><?php the_field("headingforadvocatesection1"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection1"); ?> </p>

                <h2><?php the_field("headingforadvocatesection2"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection2"); ?> </p>

                <h2><?php the_field("headingforadvocatesection3"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection3"); ?> </p>
                <h2><?php the_field("headingforadvocatesection4"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection4"); ?> </p>
                <!--                Insert advocate registration form here-->
                <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=24');//look for posts that have the category of 10
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 10 get the content
?>
            <div><p class=""><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>

            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section>

</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>