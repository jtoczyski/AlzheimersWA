<?php
    /*
    Template Name: Landing
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid landing-page">
            <div class="row bc-bg">
                <div class="col-xs-1"></div>
                <div class="col-xs-10"> 
                    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
                    
                    <h1><?php the_field("titleforlandingpage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with circles background-->
<!--            Add text-to-speech function HERE
-->
            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                     <!--image-->
                    <img class = "landing-img" alt = "gathering at memory cafe" src ="<?php the_field("landingpageimage");?>">
                    
                    <p><?php the_field("textcontent"); ?> </p>
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
           </section>
            
            <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("titleforfurtherinformation"); ?></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("furtherinfosubheading1"); ?></h3>
                        <p><?php the_field("textforfurtherinfo1"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("button1"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("button1text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                        
                        
            
                    </div>
                    <div class="col-sm-6">
                        <h3><?php the_field("furtherinfosubheading2"); ?></h3>
                        <p><?php the_field("textforfurtherinfo2"); ?> </p>
                        <div class= "learnmore">
                        <a href="<?php the_field("button2"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("button2text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                </div>
                
<!--                INSERT map plug-in HERE-->


            </div>
            <div class="col-xs-1"></div>
        </section>
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>