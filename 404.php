<?php
    // BLOG HOME
    get_header();
?>

<div class="mast page-mast">

    <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/03/SubpageBanner.jpg" />
    <div class="container mast-overlay">
        <h1>Page Not Found</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col col-12 col-lg-12">
            <p>The page you are looking for isn't available. Use the buttons below to find important pages about what we do, or <a href="https://wastesafe.com/contact/">contact us</a> for more information.</p>
        </div>
        <div class="col col-sm-12 col-md-4 text-align-center paddingtop25">
            <a href="https://wastesafe.com/services/" class="button">Our Services</a>
        </div>
        <div class="col col-sm-12 col-md-4 text-align-center paddingtop25">
            <a href="https://wastesafe.com/service-areas/" class="button">Our Service Areas</a>
        </div>
        <div class="col col-sm-12 col-md-4 text-align-center paddingtop25">
            <a href="https://wastesafe.com/about-us/" class="button">About Us</a>
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
