<?php
//Template Name: Project Dummy
//Template Post Type: project
get_header('two'); ?>
<!--HOME-->
<div id="home" class="parallax-window" data-parallax="scroll" data-image-src="https://arztpraxis-tettenborn.de/wp-content/uploads/2019/02/MG_0537_sch-Ring-Uhr_1.jpg">
    <div class="h-100">
        <div class="d-flex h-100 flex-column justify-content-center align-items-center position-relative">
            <h1>Webdesign-Agentur<br>
                <span>aus Nürnberg</span>
            </h1>
            <span class="description">
                Projekt: <?php the_field('project_for'); ?>
            </span>
            <a href="#first-section" class="nav-link" id="arrow-down">
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
    </div>
    <span class="overlay"></span>
</div>

<!--PROJECT-INFO-->
<section id="project-info" class="light-theme">
    <h2><?php the_field('project_title'); ?></h2>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
            </div>
            <div class="mt-3 mt-lg-0 col-12 col-lg-6">
                <?php the_field('project_description'); ?>
            </div>
        </div>

        <div class="mt-3 pt-4 row">
            <?php if (have_rows('project_text_item')) : while (have_rows('project_text_item')) : the_row(); ?>
                    <div class="col-md-12 col-lg-6 col-xl-4 mb-4">
                        <h4><?php the_sub_field('project_text_item_title'); ?></h4>
                        <ul class="ul-style-1">
                            <?php the_sub_field('project_text_item_description'); ?>
                        </ul>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>

<!--LARGE-GALLERY-->
<section>
    <h2><?php the_field('project_please'); ?></h2>
    <div id="carouselExampleCaptions" class="carousel carousel-large slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php if (have_rows('project_slider')) : while (have_rows('project_slider')) : the_row(); ?>
                    <div class="carousel-item active">
                        <img src="<?php the_sub_field('project_slider_slide_image'); ?>" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php the_sub_field('project_slider_slide_title'); ?></h5>
                            <p><?php the_sub_field('project_slider_slide_description'); ?></p>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
            <!-- <div class="carousel-item">
                <img src="https://images.pexels.com/photos/735911/pexels-photo-735911.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/356056/pexels-photo-356056.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!--SMALL-SECTION-->
<section class="section-small white-theme">
    <div class="container">
        <h3><?php the_field('title_seo_text'); ?></h3>
        <div class="row">
            <?php if (have_rows('project_text')) : while (have_rows('project_text')) : the_row(); ?>
                    <div class="col col-lg-6">
                        <?php the_sub_field('project_text_left');?>
                    </div>
                    <div class="col col-lg-6">
                    <?php the_sub_field('project_text_right');?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>