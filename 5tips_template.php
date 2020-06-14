<?php
    /*
    Template Name: 5 Tips subpage
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid sub-page">
            <div class="row leaf-bg">
                <div class="col-xs-1"></div>
                <div class="col-xs-10"> 
                    
<!--                    Add breadcrumb plugin here-->
                    
                    <h1><?php the_field("titlefortipspage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with leaf background-->
<!--            Add text-to-speech function HERE
-->
            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <!--image-->
                    <img class = "landing-img" src ="<?php the_field("tipsimage");?>">
                    
                    <h2><?php the_field("subtitlefortips"); ?></h2>
                    <p class="a-list"><?php the_field("bodyfortips"); ?> </p>
                    <div class="pdf-link">
                            <a href="<?php the_field("buttonfortips"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div> 
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
            
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>