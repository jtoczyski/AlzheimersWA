<?php
    /*
    Template Name: Cafe landing
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid landing-page">
            <div class="row circle-bg">
                <div class="col-xs-1"></div>
                <div class="col-xs-10"> 
                
<!--                    Insert Breadcrumbs-->
                    <h1><?php the_field("titleformemorypage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with circles background-->

            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                     <!--image-->
                    <img class = "landing-img" alt = "gathering at memory cafe" src ="<?php the_field("memorypageimage");?>">
                    
                    <p><?php the_field("textcontentmemory"); ?> </p>
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
            
            <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("titleforfurtherinformationm"); ?></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("mfurtherinfosubheading1"); ?></h3>
                        <p><?php the_field("mtextforfurtherinfo1"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("memorybutton1"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("memorybutton1text"); ?></h4>
                        </a>
                    </div><!--button to cafes map -->
                        
            
                    </div>
                     <div class="col-sm-6">
                        <h3><?php the_field("mfurtherinfosubheading2"); ?></h3>
                        <p><?php the_field("mtextforfurtherinfo2"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("memorybutton2"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("memorybutton2text"); ?></h4>
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