<?php
    /*
    Template Name: Error page
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
<div>
    <p class="about-text"><?php the_content() ?></p>
</div>
<?php
endwhile;
endif;
wp_reset_query();?>

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
                <p><?php the_field("bodyforerrorpage"); ?> </p>
                <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

                                            <ul id="sidebar">

                                                <?php dynamic_sidebar( 'sidebar1' ); ?>

                                            </ul>
            </div>
        </div>

    </section>
</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>