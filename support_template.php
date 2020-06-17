<?php
    /*
    Template Name: Dementia Support subpage
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

        </div><!--            row with leaf background-->
        <!--            Add text-to-speech function HERE
-->

        <div class="row intro">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <!--image-->
                <img class="landing-img" src="<?php the_field("supportimage");?>">

                <p class="a-list"><?php the_field("bodyforsupporttext"); ?> </p>


            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section>

    <section class="container-fluid more-info">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <h2><?php the_field("headingforservicesection"); ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("subheadingforservice1"); ?></h3>
                    <p><?php the_field("bodyforservice1"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonforservice1"); ?>" class="btn red-btn" role="button">
                            <?php the_field("buttonforservice1Text"); ?>
                        </a>
                    </div>
                    <!--button to families and friends course -->


                </div>
                <div class="col-sm-6">
                    <h3><?php the_field("subheadingforservice2"); ?></h3>
                    <p><?php the_field("bodyforservice2"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonforservice2"); ?>" class="btn red-btn" role="button">
                            <?php the_field("buttonforservice2Text"); ?>
                        </a>
                    </div>
                    <!--friendship clubs -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("subheadingforservice3"); ?></h3>
                    <p><?php the_field("bodyforservice3"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonforservice3"); ?>" class="btn red-btn" role="button">
                            <?php the_field("buttonforservice3Text"); ?>
                        </a>
                    </div>
                    <!--button to adjusting to change -->


                </div>

            </div>

        </div>
        <div class="col-xs-1"></div>
    </section>
    
    <section class="container-fluid resources">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("supportresourcesheading"); ?></h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource1"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource1text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource2"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource2text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource3"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource3text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource4"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource4text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource5"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource5text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource6"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource6text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource7"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource7text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource8"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource8text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource9"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource9text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource10"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource10text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource11"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource11text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource12"); ?>" class="grey-btn" role="button">
                                 <?php the_field("supportresource12text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                </div>
                

            </div>
            <div class="col-xs-1"></div>
        </section><!--    Our resources-->


</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>