</main>
<footer class="container-fluid site-footer">
    <div class="container flex-footer">
      <div class="f-item logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-footer.png" width="495px" class="footerlogo" alt=""></a>
        <div class="companylogos"><a href="https://vsee.com/blog/hipaa-canada-health-information-privacy/" target="_blank" class="companylogo"><img src="<?php bloginfo('template_url'); ?>/img/HIPPA.png" /></a>
        <a href="https://www.osha.gov/" target="_blank" class="companylogo"><img src="<?php bloginfo('template_url'); ?>/img/OSHA.png" /></a>
        <a href="https://medwasteonline.org/" target="_blank" class="companylogo"><img src="<?php bloginfo('template_url'); ?>/img/MWMA.png" /></a></div>
      </div>

        <div class="f-item phone-assoc">
          <div class="social">
              <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/facebookicon.png" width="45px" alt=""></a>
              <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/twittericon.png" width="45px" alt=""></a>
              <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/googleicon.png" width="45px" alt=""></a>
              <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/linkedinicon.png" width="45px" alt=""></a>
          </div>
          <div class="phone">
              <a href="tel:18887473380">Call (888) 747-3380</a>
              <p>574 Eccles Avenue</br>
                 South San Francisco, California 94080</p>
          </div>
        </div>
        <div class="f-item copyright">&copy; <?php echo date("Y"); ?> WasteSafe, Medical Waste Solutions <span>|</span> <a href="privacy-policy/" class="whiteText">Privacy Policy</a></div>

        <div class="f-item netgain">Website Designed by <a href="http://www.netgainseo.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/netgain.png" alt=""></a></div>
    </div>
</footer>
<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popover-header">
                <h1 class="modal-title title">REQUEST A QUOTE</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="226" title="Popover Form" html_class="popover-form"]' ); ?>
            </div>
            <div class="modal-footer hidden-sm-up">
                <button type="button" class="close popover-btn-cancel" data-dismiss="modal" aria-label="Close"><span>Cancel</span> &times;</button>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scrollToTop">&uarr;</a>
<div id="refContainer" class="container" style="visibility: hidden;"></div>
<div id="openNavOverlay"></div>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>
</body>
</html>
