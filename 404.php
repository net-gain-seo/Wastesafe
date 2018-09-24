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

            <h1>404 Error - Page Not Found</h1>

            <p>The page you are looing for isn't available.</p>

        </div>
    </div>
</div>

<?php echo do_shortcode("[common_element id='579']"); ?>

<div class="container-fluid footer-contact-container dropshadow">
    <div class="container">
    <h3>CONTACT US FOR INFORMATION</h3>
    <?php echo do_shortcode( '[contact-form-7 id="258" title="Footer Form" html_class="footer-form"]' ); ?>
    </div>
</div>

<?php
    get_footer();
