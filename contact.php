<?php
    /*
    Template Name: Contact
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

    
        <section class="container-fluid landing-page">
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" data-toggle="tooltip" title="Go to &#8220;Home&#8221;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                    <h1>Contact Us</h1>
                </div>
                <div class="col-xs-1"></div>


            </div><!--            row with circles background-->
                       
            <div class="row">
        <div class="text-to-speech">
<!--                button for text-to-speech function-->
            <p>Listen to this page</p>
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
                <div class="col-xs-1"></div>


            <div class="row intro">
                <?php 
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=11');//look for posts that have the category of 12
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 12 get the content
?>
            <div><p><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <img class="landing-img" alt="couple holding hands" src="images/holding-hands.png">
                    <p>Alzheimer’s WA’s Dementia Friendly Communities focuses on you and your community surrounding dementia, and finding ways to keep those living with the condition connected to the world around them.
                        <!--
                        <br>
                        <br>
                        Social isolation is a widespread problem among those living with dementia. We believe the best way to combat this issue is for the community to be aware of the condition.
                        <br>
                        <br>
                        Find out more about dementia, how to communicate with people living with dementia, and places that are dementia-friendly near you within our website.
-->
                    </p>
                    <h3>Together we can help prevent the stigma surrounding dementia.</h3>
                    <p>If your town is interested in becoming a Dementia Friendly Town, or you would like to get involved in Memory Cafés please contact us on 1300 66 77 88 or <a  href="mailto:dfc@alzheimerswa.org.au"data-toggle="tooltip" title="Send an email" class="links">dfc@alzheimerswa.org.au</a>.
                    </p>
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->

        </section><!--                intro landing page text with image-->


        <section>

            <form id="contact-form" method="post" action="contact.php" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="form_name">First Name *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first name *" required="required" data-error="First name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="form_lastname">Last Name *</label>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last name *" required="required" data-error="Last name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="form_phone">Phone *</label>
                                <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Please enter your phone number *" required="required" data-error="Valid number is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="form_postcode">Postcode</label>
                                <input id="form_postcode" type="text" name="email" class="form-control" placeholder="Please enter your postcode" data-error="Valid postcode is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="form_business">Business</label>
                                <input id="form_business" type="text" name="business" class="form-control" placeholder="Please enter your company name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-message btn-send" value="Send message">
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                <strong>*</strong> These fields are required.</p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>

            </form>
        </section><!--        contact form-->


        <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2>Head Office</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <p>55 Walters Drive<br>
                            Osborne Park WA 6017<br>
                            Telephone: 1300 66 77 88<br>
                            Fax: (08) 9388 2739</p>
                        <h4>Postal Address</h4>
                        <p> PO Box 1509, Subiaco WA 6904
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <span style="color:darkmagenta">(INSERT MAP OF HEAD OFFICE WITH WP PLUGIN)</span>
                    </div>
                </div>
                <div class="services">
                <p>Alzheimer’s WA also offers a range of <a href="https://www.alzheimerswa.org.au/training/">training</a> and <a href="https://www.alzheimerswa.org.au/consultancy-services/">consultancy services</a> to further grow your understanding of dementia and support those in the community on their dementia journey.</p>
                </div>
            </div>
            <div class="col-xs-1"></div>
        </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>