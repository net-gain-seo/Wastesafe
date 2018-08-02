<?php
    // BLOG HOME
    get_header();
?>

<div class="mast page-mast">

    <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/03/SubpageBanner.jpg" />
    <div class="container mast-overlay">
        <h1>Blog</h1>
    </div>
</div>
<div class="container">
    <div class="row blog-content">
        <div class="col col-12 col-lg-12">

            <div class="blog-listing">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>

                    <h2 class="post-title">
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <?php the_excerpt(); ?>

                </article>
            <?php endwhile; // End of the loop. ?>
            </div>

            <div class="next-prev">
                <div class="prev"><?php next_posts_link( '<i class="fa fa-angle-double-left"></i> Older posts' ); ?></div>
                <div class="next"><?php previous_posts_link( 'Newer posts <i class="fa fa-angle-double-right"></i>' ); ?></div>
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
