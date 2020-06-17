<?php
    /*
    Template Name: Stories Subpage 1
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

                <p><?php the_field("textbody"); ?> </p>

                <h3><?php the_field("titleforvideo"); ?></h3>
                <div class="video"><?php the_field("storyvideo"); ?></div>

                <p><?php the_field("textcontinued"); ?> </p>

            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section>

    <section class="container-fluid more-info">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <h2><?php the_field("titleforothers"); ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("subheading1"); ?></h3>
                    <p><?php the_field("subexcerpt1"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("othersubpagebutton");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("othersubpagebuttontext1");?></h4>
                        </a>
                    </div>
                    <!--button to resourses for business or local government-->


                </div>
                <div class="col-sm-6">
                    <h3><?php the_field("subheading2");?></h3>
                    <p><?php the_field("subexcerpt2");?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("othersubpagebutton2");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("othersubpagebuttontext2");?></h4>
                        </a>
                    </div>
                    <!--button to learnmore success stories-->
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("subheading3"); ?></h3>
                    <p><?php the_field("subexcerpt3"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("othersubpagebutton3");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("othersubpagebuttontext3");?></h4>
                        </a>
                    </div>
                    <!--button to resourses for business or local government-->


                </div>

            </div>

        </div>
        <div class="col-xs-1"></div>
    </section>

</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>