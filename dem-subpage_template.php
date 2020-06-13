<?php
    /*
    Template Name: Dementia subpage
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
                    
                    <h1><?php the_field("titleforsubpage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with circles background-->
<!--            Add text-to-speech function HERE
-->
            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    
                    <p class="a-list"><?php the_field("introtext"); ?> </p>
                    <div><?php the_field("memoryvid"); ?></div>
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
    <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <h2><?php the_field("headingforsubsection1"); ?></h2>
                    <p class="b-list"><?php the_field("bodyforsubsection1"); ?> </p>
                    <img class = "landing-img" alt = "ladies at memory cafe" src ="<?php the_field("subsectionimage1");?>">
                    <p class="b-list"><?php the_field("bodyforsubsection1continued"); ?> </p>
                    
                    <a href="<?php the_field("buttonforsubsection1"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextforsubsection1"); ?></h4>
                        </a>
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
<div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <h2><?php the_field("headingforsubsection2"); ?></h2>
                    <p class="c-list"><?php the_field("bodyforsubsection2"); ?> </p>
                    
                    <a href="<?php the_field("buttonforsubsection2"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("buttontextforsubsection2"); ?></h4>
                        </a>
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
            
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>