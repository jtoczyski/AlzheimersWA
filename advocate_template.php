<?php
    /*
    Template Name: Dementia Adovcate subpage
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

                <h1><?php the_field("titleforadvocatepage"); ?></h1>
            </div>
            <div class="col-xs-1"></div>

        </div><!--            row with circles background-->
        <!--            Add text-to-speech function HERE
-->

        <div class="row intro">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <!--image-->
                <img class="landing-img" src="<?php the_field("advocateimage");?>">

                <p><?php the_field("bodyforadvocatetext"); ?> </p>

                <h2><?php the_field("headingforadvocatesection1"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection1"); ?> </p>

            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

        <div class="row intro">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">

                <h2><?php the_field("headingforadvocatesection2"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection2"); ?> </p>

                <h2><?php the_field("headingforadvocatesection3"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection3"); ?> </p>
                <h2><?php the_field("headingforadvocatesection4"); ?></h2>
                <p class="a-list"><?php the_field("bodyforadvocatesection4"); ?> </p>
                <!--                Insert advocate registration form here-->

            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section>

</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>