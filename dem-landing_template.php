<?php
    /*
    Template Name: Dementia landing
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid landing-page">
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
                    <h1><?php the_field("titlefordementiapage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with leaf background-->

            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                     <!--image-->
                    <img class = "landing-img" alt = "father and son" src ="<?php the_field("dementiapageimage");?>">
                    
                    <p><?php the_field("textcontentdementia"); ?> </p>
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
    
    <section class="container-fluid resources">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("titleforresources"); ?></h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton1"); ?>" class="grey-btn" role="button">
                            <?php the_field("pdfbutton1text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton2"); ?>" class="grey-btn" role="button">
                            <?php the_field("pdfbutton2text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton3"); ?>" class="grey-btn" role="button">
                            <?php the_field("pdfbutton3text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton4"); ?>" class="grey-btn" role="button">
                            <?php the_field("pdfbutton4text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton5"); ?>" class="grey-btn" role="button">
                            <?php the_field("pdfbutton5text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton6"); ?>" class="grey-btn" role="button">
                            <?php the_field("pdfbutton6text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                </div>
                

            </div>
            <div class="col-xs-1"></div>
        </section><!--    Our resources-->
            
            <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("titleforfurtherinformationd"); ?></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("dfurtherinfosubheading1"); ?></h3>
                        <p><?php the_field("dexcerpt1"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("dementiabutton1"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("dementiabutton1text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                    
                     <div class="col-sm-6">
                        <h3><?php the_field("dfurtherinfosubheading2"); ?></h3>
                        <p><?php the_field("dexcerpt2"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("dementiabutton2"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("dementiabutton2text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                </div>
<!--                5 simple tips and where to access support further info row-->
                
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("dfurtherinfosubheading3"); ?></h3>
                        <p><?php the_field("dexcerpt3"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("dementiabutton3"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("dementiabutton3text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                </div><!--                becoming an advocate row-->
                
            </div>
            <div class="col-xs-1"></div>
        </section>
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>