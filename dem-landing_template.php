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
                            <a href="<?php the_field("pdfbutton1"); ?>" target="_blank" class="grey-btn" role="button">
                            <?php the_field("pdfbutton1text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton2"); ?>" target="_blank" class="grey-btn" role="button">
                            <?php the_field("pdfbutton2text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton3"); ?>" target="_blank" class="grey-btn" role="button">
                            <?php the_field("pdfbutton3text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton4"); ?>" target="_blank" class="grey-btn" role="button">
                            <?php the_field("pdfbutton4text"); ?>
                            </a>
                        </div>                
                    </div> 
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton5"); ?>" target="_blank" class="grey-btn" role="button">
                            <?php the_field("pdfbutton5text"); ?>
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("pdfbutton6"); ?>" target="_blank" class="grey-btn" role="button">
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