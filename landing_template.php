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
<!--                    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>-->
                    
                    <h1><?php the_field("titleforlandingpage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with circles background-->

            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                     <!--image-->
                    <img class = "landing-img" alt = "gathering at memory cafe" src ="<?php the_field("landingpageimage");?>">
                    
                    <p><?php the_field("textcontent"); ?> </p>
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
    <div class="row video-section">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <p><?php the_field("textforvideointro"); ?> </p>
                    <p>Setting up a Memory Café is a fairly simple process, but you will need a dedicated group of people who are committed to getting the Memory Café up and running. Once the Memory Café is established, it will almost run itself.
                        <br>
                        <br>
                        The first step is to arrange a meeting between key people in your community. You may include:
                    </p>
                    <ul class="a-list">
                        <li>A café owner</li>
                        <li>Shopping centre management</li>
                        <li>A local government representative</li>
                        <li>A person living with dementia </li>
                        <li>A carer</li>
                        <li>And other interested community members</li>
                    </ul>
                    <p>In the meeting, talk about how the Memory Café will look, feel and operate.
                        <br>
                        <br>

                        Your next step is to identify a suitable café. You may already have a café owner on board, or have an idea of a café you would like to approach.
                        <br>
                        <br>
                        Before deciding on a café, it’s a good idea to consider our dementia enabling environment guidelines, available to download from our website.
                        <br>
                        <br>
                        The guidelines cover things like parking, wheelchair access, noise levels, space and location.
                        <br>
                        <br>
                        One important outcome from the meeting should be the formation of a working group, which is just a group of people who will meet on a regular basis to help get the Memory Café up and running.
                    </p>
                    <div class="video" style="height: 480px"></div>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            video section-->
    
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

 <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("furtherinfosubheading3"); ?></h3>
                        <p><?php the_field("textforfurtherinfo3"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("button3"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("button3text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                        
                        
            
                    </div>
                    <div class="col-sm-6">
                        <h3><?php the_field("furtherinfosubheading4"); ?></h3>
                        <p><?php the_field("textforfurtherinfo4"); ?> </p>
                        <div class= "learnmore">
                        <a href="<?php the_field("button4"); ?>" class="btn red-btn" role="button">
                            <h4><?php the_field("button4text"); ?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                </div>
            </div>
            <div class="col-xs-1"></div>
        </section>
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>