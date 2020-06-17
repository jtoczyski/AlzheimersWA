<?php
    /*
    Template Name: Success Stories Landing
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
        </div><!--            row with triangles background-->

        <div class="row intro">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <!--image-->
                <img class="landing-img" alt="gathering at memory cafe" src="<?php the_field("imageforstories");?>">

                <h2><?php the_field("successstoriessubtitle"); ?></h2>

                <p><?php the_field("bodyforsuccesssection"); ?> </p>

            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section>

    <section class="container-fluid more-info">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <h2><?php the_field("casestudyheading"); ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("manjimuptitle"); ?></h3>
                    <p><?php the_field("manjimupexcerpt"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonformanjimup");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextformanjimup");?></h4>
                        </a>
                    </div>
                    <!--button to manjimup case study -->


                </div>
                <div class="col-sm-6">
                    <h3><?php the_field("yorktitle");?></h3>
                    <p><?php the_field("yorkexcerpt");?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonforyork");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextforyork");?></h4>
                        </a>
                    </div>
                    <!--button to case study-->
                </div>

                <div class="col-sm-6">
                    <h3><?php the_field("margarettitle");?></h3>
                    <p><?php the_field("margaretexcerpt");?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonformargaret");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextformargaret");?></h4>
                        </a>
                    </div>
                    <!--button to case study -->
                </div>

                <div class="col-sm-6">
                    <h3><?php the_field("toodyaytitle"); ?></h3>
                    <p><?php the_field("toodyayexcerpt"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonfortoodyay");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextfortoodyay");?></h4>
                        </a>
                    </div>
                    <!--button to manjimup case study -->


                </div>
            </div>


        </div>
        <div class="col-xs-1"></div>
    </section>

</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>