(function($) {

    // Event Tracking

    jQuery(document).on('mailsent.wpcf7', function (e) {
        $form=jQuery(e.target);
        
        if($form.attr('id').search('f200')!=-1){

            __gaTracker('send','event','Form','Submit','Contact');

        } else if ($form.attr('id').search('f85')!=-1) {

            __gaTracker('send','event','Form','Submit','Footer');

        } else if ($form.attr('id').search('f226')!=-1) {

            __gaTracker('send','event','Form','Submit','Popover');

        }
    });

    jQuery('a[href^="tel:"]').click(function(){
        var href = jQuery(this).attr('href');
        if (jQuery(window).width() < 601 ){
            __gaTracker('send','event','Phone','Click',href);
        }
    });
    
    // Left/right aligned containers padding offset

    // to keep things lined up

    function doResizeActions() {



        var nav         = $('#mainNav');

        var padding     = $("#refContainer").offset().left;

        var windowWidth = window.innerWidth;



        if(windowWidth > 1199) {

            $(".container-r .f-info").css('padding-left', padding + 'px');

            $(".container-l .f-info").css('padding-right', padding + 'px');

        } else {

            $(".container-r .f-info").css('padding-left', '24px');

            $(".container-l .f-info").css('padding-right', '24px');

            $(".container-r .f-home .f-info").css('padding-left', '16px');

        }





        // Mobile or desktop nav

        if( windowWidth < 992 ) {

            $(nav).removeClass('main-nav').addClass('mobile-nav');

        } else {

            $(nav).addClass('main-nav').removeClass('mobile-nav');

        }

        return true;



    }



    function onHashChange() {

        if(window.location.hash) {

            var hash = window.location.hash;

            $('body').addClass('sticky-header');

            setTimeout(function() {

                console.log(hash);

                var scrollTo = $(hash).offset().top - 70;

                $('body').animate({

                    scrollTop: scrollTo

                }, 'slow');

            }, 500);

        }

    }



    $(document).ready(function() {

        doResizeActions();

        onHashChange();

    });



    $(window).on('resize', function() {

        doResizeActions();

    });



    $(window).on('hashchange', function() {

        onHashChange();

    });



    $('.more-cory').on('click', function() {

        var more = $('.more-cory-text');

        $(more).toggleClass('open');

        // console.log($(this).text());

        if( $(more).hasClass('open') ) {

            $(this).text('Show less...');

        } else {

            $(this).text('Read more...');

        }

    });



    $(document).ready(function() {

        $('#testimonials').slick({

            autoplay: true,

            autoplaySpeed: 6000,

            fade: true,

            prevArrow: $(".slick-testimonial-prev"),

            nextArrow: $(".slick-testimonial-next")

        }).show();



        $('.charity-carousel').slick({

            infinite: true,

            variableWidth: true,

            centerMode: true,

            autoplay: true,

            autoplaySpeed: 0,

            speed: 6000,

            cssEase: 'linear',

            arrows: false

        }).show();



        $('#productLine').slick({

            infinite: true,

            slidesToShow: 4,

            variableWidth: true,

            slidesToScroll: 1,

            autoplay: false,

            pauseOnFocus: false,

            pauseOnHover: false,

            prevArrow: $(".slick-product-prev"),

            nextArrow: $(".slick-product-next")

        }).show();



    });



    var isSticky = false;
    var siteHeader = jQuery(".site-header");
	var height = siteHeader.height() + parseInt(siteHeader.css('padding-top'));
    var mainNav = jQuery("#mainNav");
	
	jQuery(window).on('resize', function() {
		if(!isSticky) {
			height = siteHeader.height() + parseInt(siteHeader.css('padding-top'));
		}
	});
	
    jQuery(document).on("scroll", function() {
        if ( jQuery(document).scrollTop() >= height ) {
            if(!isSticky) {
                // jQuery(siteHeader).slideUp();
                jQuery("body").addClass("sticky-header").css('margin-top',height);
                // jQuery(siteHeader).slideDown();
                isSticky = true;
            }
        } else {
            if(isSticky) {
                // jQuery(siteHeader).slideUp();
                jQuery("body").removeClass("sticky-header").css('margin-top',0);
                // jQuery(siteHeader).slideDown();
                isSticky = false;
            }
        }
    });
    jQuery('#navToggle, #closeNav, #openNavOverlay, .get-quote, #megaMenu').on('click', function() {
        if(jQuery(this).context.className != 'get-quote' && jQuery(this).context.id != 'megaMenu') {
            jQuery(mainNav).toggleClass('open');
            jQuery('#closeNav').toggleClass('open');
            jQuery('body').toggleClass('no-scroll');
        } else {
            jQuery(mainNav).removeClass('open');
            jQuery('#closeNav').removeClass('open');
            jQuery('body').removeClass('no-scroll');
        }
        // console.log(jQuery(this).context.className);
    });


    /////////////////////////////Smooth Scrolling For Scroll to top/////////////////////////////////////
      $(document).ready(function(){
    	//Check to see if the window is top if not then display button
    	$(window).scroll(function(){
            if ($(this).scrollTop() > 400 && $('.scrollToTop').is(':hidden')) {
                $('.scrollToTop').fadeIn();
            } else if ($(this).scrollTop() <= 400 && $('.scrollToTop').is(':visible:not(:animated)')){
                $('.scrollToTop').fadeOut();
            }
        });
    	//Click event to scroll to top
    	$('.scrollToTop').click(function(){
    		$('html, body').animate({scrollTop : 0},1000);
    		return false;
    	});

    });

    //////////////////////////////Smooth Scrolling for links on same page
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
               if (target.length) {
                 $('html,body').animate({
                     scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });


})(jQuery);

