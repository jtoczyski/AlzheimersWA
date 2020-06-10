<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<?php echo do_shortcode('[sp_wpcarousel id="13"]'); ?>
        <section class="container-fluid landing-links">
        <div class="container">
            <div class="row">
        <div class="text-to-speech">
<!--                button for text-to-speech function-->
            <p>Listen to this page</p>
                </div>
            </div><!--        row-->
            <div class="row dementia">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 d-bg">
                    <img class="d-image img-responsive" alt="support group" src="images/support-group-lg.jpg"><img class="d2image img-responsive" alt="support group cropped" src="images/support-group-md.jpg">
                </div>
                <div class="col-sm-4 d-text">
                    <h2>What is Dementia?</h2>
                    <p>Find helpful information about dementia and how it effects people’s lives.</p>
                    <div class="learnmore" id="whatisdementia">
                        <a href="#" class="btn red-btn" role="button">
                            <h4>Learn more</h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div><!--        what is dementia row-->
            
            <div class="row cafe">
                <div class="col-sm-1"></div>
                
                <div class="col-sm-4 c-text">
                    <h2>Memory Cafes</h2>
                    <p>Learn how Memory Cafès can help people living with dementia and where to find one near you.</p>
                    <div class="learnmore" id="memorycafes">
                        <a href="cafes.html" class="btn red-btn" role="button">
                            <h4>Learn more</h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 c-bg">
                    <img class="c-image img-responsive" alt="couple at a cafe" src="images/cafe-lg.jpg">
                    <img class="c2image img-responsive" alt="couple at a cafe cropped" src="images/cafe-md.jpg">
                </div>
                <div class="col-sm-1"></div>
            </div><!--        memory cafe row-->
            
             <div class="row organisation">
                 <div class="col-sm-1"></div>
                <div class="col-sm-6 o-bg">
                    <img class="o-image img-responsive" alt="supermarket employee" src="images/employee-at-supermarket-lg.jpg"><img class="o2image img-responsive" alt="supermarket employee cropped" src="images/employee-at-supermarket-md.jpg">
                </div>
                <div class="col-sm-4 o-text">
                    <h2>Information for Organisations</h2>
                    <p>Learn how your business or organisation can make changes to assist those living with dementia.</p>
                    <div class="learnmore" id="organisations">
                        <a href="#" class="btn red-btn" role="button">
                            <h4>Learn more</h4>
                        </a>
                    </div>
                </div>
                 <div class="col-sm-1"></div>
            </div><!--        info for organisations row-->
        </div><!--          container-->
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>