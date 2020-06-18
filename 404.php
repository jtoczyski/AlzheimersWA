<?php
    /*
    Template Name: Error Page
    */
    ?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
<!--        Body section-->
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
                     <h1>Oops! That page can't be found.</h1>
                     <h2>We’re sorry but we couldn’t find the page you were looking for.</h2>
                <p>In the mean time to find the information you were looking for please use the main menu. </p>
               &nbsp;
                </div><!--            row with circles background-->
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section><!--                intro text with image-->

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>