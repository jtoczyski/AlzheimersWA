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
                
<div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
</div>
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
                
<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>

            </div>
            <div class="col-xs-1"></div>
        </section>
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>