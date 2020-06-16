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


            </div><!--            row with triangles background-->

            <div class="row">
                <!--text-to-speech function-->
                <div class="text-to-speech">
                    <button type="button" data-toggle="collpase" data-target="#rspeaker">
                    <img alt="text-to-speech icon" src="<?php the_field("ttsicon");?>">

                <p><?php the_field("ttsname"); ?> </p>
                        </button>
                </div>
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
        </div>
        <div class="col-xs-1"></div>

        <div class="row intro">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <!--image-->
                <img class="landing-img" alt="gathering at memory cafe" src="<?php the_field("organisationspageimage");?>">

                <p><?php the_field("textcontentorganisations"); ?> </p>

            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section>

    <section class="container-fluid more-info">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <h2><?php the_field("titleforfurtherinformationo"); ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("ofurtherinfosubheading1"); ?></h3>
                    <p><?php the_field("otextforfurtherinfo1"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("organisationsbutton1");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton1text");?></h4>
                        </a>
                    </div>
                    <!--button to resourses for business -->


                </div>
                <div class="col-sm-6">
                    <h3><?php the_field("ofurtherinfosubheading2");?></h3>
                    <p><?php the_field("otextforfurtherinfo2");?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("organisationsbutton2");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton2text");?></h4>
                        </a>
                    </div>
                    <!--button to learnmore local government-->
                </div>

                <div class="col-sm-6">
                    <h3><?php the_field("ofurtherinfosubheading3");?></h3>
                    <p><?php the_field("otextforfurtherinfo3");?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("organisationsbutton3");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton3text");?></h4>
                        </a>
                    </div>
                    <!--button to success stories -->
                </div>
            </div>


        </div>
        <div class="col-xs-1"></div>
    </section>

</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>