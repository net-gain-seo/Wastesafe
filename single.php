<?php
    get_header();
?>

<div class="mast page-mast">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/03/SubpageBanner.jpg" />
</div>

<div class="container blog-content">
    <div class="row">
        <div class="col col-12 col-lg-12">
            <?php while ( have_posts() ) : the_post(); ?>

                <article>
                    <div class="blog-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="blog-article">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; // End of the loop. ?>

            <div class="next-prev">
                <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                <div class="next"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer-contact-container dropshadow">
    <div class="container">
    <h3>CONTACT US FOR INFORMATION</h3>
    <?php echo do_shortcode( '[contact-form-7 id="258" title="Footer Form" html_class="footer-form"]' ); ?>
    </div>
</div>

<?php
    get_footer();
