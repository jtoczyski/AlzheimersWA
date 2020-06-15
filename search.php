<?php

    /*

    Template Name: Search Page

    */

    ?>

<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

<div class="container-fluid main-content">

               <section class="container">

        <div class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 

          <p>This is the search page</p>

          <h4> <?php the_title(); ?></h4>

 

        <?php the_content(); ?>

 

        <?php endwhile; else : ?>

                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; ?>

 

        </div>

            </section>

        </div>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>