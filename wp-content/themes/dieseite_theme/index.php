<?php //Template Name: Home
get_header(); ?>
<!--HOME-->
<?php if (have_rows('first_screen')) : while (have_rows('first_screen')) : the_row(); ?>
<div
    id="home"
    class="parallax-window"
    data-parallax="scroll"
    data-image-src="<?php the_sub_field('first_screen_background_image'); ?>">
    <span class="overlay"></span>

    <div class="h-100">
        <div
            class="d-flex h-100 flex-column justify-content-center align-items-center position-relative">
            <h1><?php the_sub_field('first_screen_title'); ?><br>
                <span><?php the_sub_field('first_screen_subtitle'); ?></span>
            </h1>
            <span class="description auto-typing">
                <div class="d-flex justify-content-around">
                    <div class="box">Brand- und Web-Design</div>
                    <div class="box">Webentwicklung</div>
                    <div class="box">Internet Marketing</div>
                </div>
            </span>
            <a href="#was" class="nav-link" id="arrow-down">
                <i class="fa fa-chevron-down"></i>
            </a>
            <?php if (have_rows('first_screen_text_items')) : while
            (have_rows('first_screen_text_items')) : the_row(); ?>
            <script>
                //type it
                window.addEventListener('load', () => {
                    $(function () {
                        new
                        TypeIt('.auto-typing', {speed: 45})
                            .pause(500) // .type('Webauftrito')
                            .options({
                                // speed: 500  })  .delete(3)  .type('itt ')  .options({
                                speed: 45 // })  .pause(300)  .type('für kleine und mittlere Unternehmen')
                                // .break()  .pause(500)  .options({  speed: 70  }) .pause(200)
                                    .type('Web-, Brand- und App-Design, ')
                                    .break()
                                    .pause(300)
                                    .type('Webentwicklunk')
                                    .delete(2)
                                    .type('ng, ')
                                    .break()
                                    .pause(300)
                                    .type('Internet Marketing')
                                    .options({speed: 100})
                            });
                    })
            </script>
            <?php
            endwhile; endif; ?>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<!--WAS-->
<?php if (have_rows('section_was')) : while (have_rows('section_was')) : the_row(); ?>
<section id="was" class="white-theme">
    <h2><?php the_sub_field('section_was_title'); ?></h2>
    <div
        class="d-flex px-1 px-md-3 px-lg-5 flex-column align-items-center align-items-lg-stretch">
        <?php if (have_rows('section_was_info_box')) : while (have_rows('section_was_info_box')) : the_row(); ?>
        <div
            data-brackets-id="47"
            class="<?php the_sub_field('section_was_info_box_classes'); ?>">
            <h3 data-brackets-id="48"><?php the_sub_field('section_was_info_box_title'); ?></h3>
            <div class="d-flex flex-column flex-lg-row align-items-start">
                <img src="<?php the_sub_field('section_was_info_box_img'); ?>" alt="">
                <ul class="ml-3 mt-2 mt-lg-0 ul-style-1">
                    <h4><?php the_sub_field('section_was_info_box_subtitle'); ?></h4>
                    <?php if (have_rows('section_was_info_box_list')) : while (have_rows('section_was_info_box_list')) : the_row(); ?>
                    <li><?php the_sub_field('section_was_info_box_list_text'); ?></li>
                    <?php endwhile;
                                    endif; ?>
                </ul>
            </div>
        </div>
        <?php endwhile;
                endif; ?>
        <!--info-box-->
        <?php if (have_rows('section_was_contact_link')) : while (have_rows('section_was_contact_link')) : the_row(); ?>
        <div
            class="position-relative w-100 d-flex flex-column flex-lg-row justify-content-center mt-5 p-3 active">
            <h3 class="auto-typing text-center text-lg-left"><?php the_sub_field('section_was_contact_link_text'); ?></h3>
            <a class="btn_href btn ml-0 ml-lg-5 mt-1 mt-lg-0" href="#kontakt"><?php the_sub_field('section_was_contact_link_text_button'); ?></a>
        </div>
        <?php endwhile;
                endif; ?>
    </div>
    <!--f-conz-->
</section>
<?php endwhile;
endif; ?>

<!--WERKE-->
<?php if (have_rows('portfolio')) : while (have_rows('portfolio')) : the_row(); ?>
<section id="werke" class="white-theme">
    <div class="d-flex flex-column">
        <h2><?php the_sub_field('portfolio_title'); ?></h2>
        <div class="d-flex flex-wrap">
            <?php if (have_rows('portfolio_project')) : while (have_rows('portfolio_project')) : the_row(); ?>
            <a href="<?php the_sub_field('portfolio_project_link'); ?>" class="werk">
                <div class="desc">
                    <h4><?php the_sub_field('portfolio_project_title'); ?></h4>
                </div>
                <img src="<?php the_sub_field('portfolio_project_img'); ?>" alt="">
            </a>
            <?php endwhile;
                    endif; ?>
            <!--werk-->

        </div>
        <!--flex-wrap-->
        <?php if (have_rows('portfolio_tab')) : while (have_rows('portfolio_tab')) : the_row(); ?>
        <button class="read-more-toggle link align-self-center mt-5"><?php the_sub_field('portfolio_tab_title'); ?>
            <i class="ml-1 fas fa-arrow-alt-circle-left"></i>
        </button>

        <div class="read-more-content mt-3">
            <div class="d-flex flex-column align-items-center">
                <div class="d-flex align-self-center justify-content-center">
                    <button class="btn active" onclick="filterSelection('all')">Alle</button>
                    <?php if (have_rows('tabs_items')) : while (have_rows('tabs_items')) : the_row(); ?>
                    <button
                        class="btn"
                        onclick="filterSelection('<?php the_sub_field('tabs_items_id'); ?>')"><?php the_sub_field('tabs_items_title'); ?></button>
                    <?php endwhile;
                                    endif; ?>
                </div>
                <div class="d-flex flex-wrap w-100">
                    <?php if (have_rows('tabs_items')) : while (have_rows('tabs_items')) : the_row(); ?>
                    <?php if (have_rows('tabs_project_item')) : while (have_rows('tabs_project_item')) : the_row(); ?>
                    <a
                        href="<?php the_sub_field('tabs_project_item_link'); ?>"
                        class="werk <?php the_sub_field('tabs_project_item_id'); ?>">
                        <div class="desc">
                            <h4><?php the_sub_field('tabs_project_item_title'); ?></h4>
                        </div>
                        <img src="<?php the_sub_field('tabs_project_item_image'); ?>" alt="">
                    </a>
                    <?php endwhile;
                                            endif; ?>
                    <?php endwhile;
                                    endif; ?>
                </div>
                <a href="#werke" class="mt-3 link closeWerke">
                    Alle Projekte schließen
                    <i class="ml-1 fas fa-times-circle"></i>
                </a>
            </div>

        </div>
        <?php endwhile;
                endif; ?>
        <!--read more content-->
    </div>
    <!--flex-column-wrap-->
</section>
<?php endwhile;
endif; ?>

<!--WIR-->
<?php if (have_rows('about_us')) : while (have_rows('about_us')) : the_row(); ?>
<section id="wir" class="dark-theme">
    <div class="container">
        <h2><?php the_sub_field('about_us_title'); ?></h2>
        <div class="row">
            <div class="col-12 col-lg-6 mb-3">
                <div class="">
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php if (have_rows('about_us_slider')) : while (have_rows('about_us_slider')) : the_row(); ?>
                            <div
                                class="carousel-item <?php the_sub_field('about_us_slider_active'); ?>"
                                data-interval="4000">
                                <img
                                    src="<?php the_sub_field('about_us_slider_image'); ?>"
                                    class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?php the_sub_field('about_us_slider_name'); ?></h5>
                                    <h6><?php the_sub_field('about_us_slider_education'); ?></h6>
                                    <p><?php the_sub_field('about_us_slider_occupation'); ?></p>
                                </div>
                            </div>
                            <?php endwhile;
                                    endif; ?>
                        </div>
                        <a
                            class="carousel-control-prev car"
                            href="#carouselExampleInterval"
                            role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a
                            class="carousel-control-next car"
                            href="#carouselExampleInterval"
                            role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <?php if (have_rows('about_us_social_media')) : while (have_rows('about_us_social_media')) : the_row(); ?>
                    <p class="my-3 text-center"><?php the_sub_field('about_us_social_media_text'); ?></p>
                    <div class="d-flex mt-3 justify-content-center">
                        <?php if (have_rows('about_us_social_media_items')) : while (have_rows('about_us_social_media_items')) : the_row(); ?>
                        <a
                            class="link ml-1 mr-1"
                            href="<?php the_sub_field('about_us_social_media_items_link'); ?>"
                            target="_blank">
                            <i
                                class="fab <?php the_sub_field('about_us_social_media_items_class_icon'); ?>"></i>
                        </a>
                        <?php endwhile;
                                        endif; ?>
                    </div>
                    <?php endwhile;
                            endif; ?>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="">
                    <?php the_sub_field('about_us_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile;
endif; ?>

<!--SEO BLOCK-->
<?php if (have_rows('internet_article')) : while (have_rows('internet_article')) : the_row(); ?>
<section id="warum" class="light-theme">
    <h2><?php the_sub_field('internet_article_title'); ?></h2>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="<?php the_sub_field('internet_article_image'); ?>" alt="">
            </div>
            <div class="mt-3 mt-lg-0 col-12 col-lg-6">
                <?php the_sub_field('internet_article_description'); ?>
            </div>
        </div>
        <div class="mt-3 pt-3 row">
            <?php if (have_rows('internet_article_items')) : while (have_rows('internet_article_items')) : the_row(); ?>
            <div class="col-md-12 col-lg-6 col-xl-4 mb-4">
                <h4>
                    <i
                        class="fas mr-2 <?php the_sub_field('internet_article_items_name_icon'); ?>"
                        aria-hidden="true"></i><?php the_sub_field('internet_article_items_title'); ?></h4>
                <ul class="ul-style-1">
                    <?php the_sub_field('internet_article_items_text'); ?>
                </ul>

            </div>
            <?php endwhile;
                    endif; ?>
        </div>
    </div>
</section>
<?php endwhile;
endif; ?>

<!--KONTAKT-->
<section id="kontakt" class="white-theme">
    <div class="container">
        <h2><?php the_field('contact_form_title'); ?></h2>
        <div id="myForm" class="anm_mod right delay">
            <?php echo do_shortcode(get_field('contact_form_shortcode_form')); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>