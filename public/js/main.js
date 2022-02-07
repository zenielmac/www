"use strict";

function pieChart() {
	//circle progress bar
	if ((jQuery().easyPieChart) && (jQuery.support.leadingWhitespace)) {
		var count = 0 ;
		var colors = ['#119ee7'];
		jQuery('.chart').each(function(){
				
			var imagePos = jQuery(this).offset().top;
			var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+900) {

				jQuery(this).easyPieChart({
			        barColor: colors[count],
					trackColor: '#e4e4e4',
					scaleColor: false,
					scaleLength: false,
					lineCap: 'butt',
					lineWidth: 3,
					size: 160,
					rotate: 0,
					animate: 3000,
					onStep: function(from, to, percent) {
							jQuery(this.el).find('.percent').text(Math.round(percent));
						}
			    });
			}
			count++;
			if (count >= colors.length) { count = 0};
		});
	}
}


jQuery(document).ready(function() {
	///////////
	//Plugins//
	///////////
    //contact form processing
    jQuery('form.contact-form').on('submit', function( e ){
        e.preventDefault();
        var $form = jQuery(this);
        jQuery($form).find('span.contact-form-respond').remove();
        //checking on empty values
        var formFields = $form.serializeArray();
        for (var i = formFields.length - 1; i >= 0; i--) {
        	if (!formFields[i].value.length) {
        		$form.find('[name="' + formFields[i].name + '"]').addClass('invalid').on('focus', function(){jQuery(this).removeClass('invalid')});
        	};
        };
        //if one of form fields is empty - exit
        if ($form.find('[name]').hasClass('invalid')) {
        	return;
        };
        //sending form data to PHP server if fields are not empty
        var request = $form.serialize();
        var ajax = jQuery.post( "contact-form.php", request )
            .done(function( data ) {
                jQuery($form).find('[type="submit"]').attr('disabled', false).parent().append('<span class="contact-form-respond highlight">'+data+'</span>');
        })
            .fail(function( data ) {
                jQuery($form).find('[type="submit"]').attr('disabled', false).parent().append('<span class="contact-form-respond highlight">Mail cannot be sent. You need PHP server to send mail.</span>');
        })
    });
    
   
	//twitter
	//slide tweets
	jQuery('#tweets .twitter').bind('loaded', function(){
		jQuery(this).addClass('flexslider').find('ul').addClass('slides');
	});
	if (jQuery().tweet) {
		jQuery('.twitter').tweet({
			modpath: "./twitter/",
		    count: 2,
		    avatar_size: 48,
		    loading_text: 'loading twitter feed...',
		    join_text: 'auto',
		    username: 'ThemeForest', 
		    template: "{avatar}<div class=\"tweet_right\">{time}{join}<span class=\"tweet_text\">{tweet_text}</span></div>"
		});
	}


	//Search
	    jQuery(document).ready(function() {
		jQuery('#open_search_bar').on('click', function( e ){
			e.preventDefault();
			jQuery('#search').toggleClass('search_closed');
		});
		});

	//mainmenu
	if (jQuery().superfish) {
		jQuery('ul.sf-menu').superfish({
			delay:       300,
			animation:   {opacity:'show'},
			animationOut: {opacity: 'hide'},
			speed:       'fast',
			disableHI:   false,
			cssArrows:   true,
			autoArrows:  true
		});
	}
	jQuery('#toggle_mobile_menu, #mainmenu a').on('click', function(){
		jQuery('#header').toggleClass('mobile-active');
	});

	//toTop
	if (jQuery().UItoTop) {
        jQuery().UItoTop({ easingType: 'easeOutQuart' });
    }

    //parallax
	if (jQuery().parallax) {		
		jQuery('#land').parallax("50%", 0);
		
	}


	 //prettyPhoto
    if (jQuery().prettyPhoto) {
	   	jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({
	   		hook: 'data-gal',
			theme: 'facebook' /* light_rounded / dark_rounded / light_square / dark_square / facebook / pp_default*/
	  	});
	}

	//bx slider
	if (jQuery().bxSlider) {
		jQuery('.bxslider').bxSlider({
			auto: true,
			controls: true,
			pager: true,
		  	mode: 'fade'
		});
	}

   	//tooltip
   	if (jQuery().tooltip) {
		jQuery('[data-toggle="tooltip"]').tooltip();
	}

   	//carousel
   	if (jQuery().carousel) {
		jQuery('.carousel').carousel();
	}

	//owl carousel
	if (jQuery().owlCarousel) {			  	    
	    
	    jQuery("#about-carousel").owlCarousel({
	    	navigation : false,
	    	// navigationText : true,
	    	pagination : false,
	    	autoPlay:3000,
	    	items: 1, 
	    	itemsDesktop: [1199,1],
	    	itemsDesktopSmall: [991,1],
	    	itemsTablet: [768,1],
	    	itemsMobile: [479,1]

	    }); 

	}



	//single page localscroll and scrollspy
	var navHeight = jQuery('#header').outerHeight(true);
	jQuery('body').scrollspy({
		target: '#mainmenu_wrapper',
		offset: navHeight
	});
	if (jQuery().localScroll) {
		jQuery('#mainmenu').localScroll({
			duration:900,
			easing:'easeInOutQuart',
			offset: -navHeight+10
		});
		
	}

});


jQuery(window).load(function(){
	
	//chart
	pieChart();

	 // Detect Safari  

    var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    if (isSafari) $('html').addClass('is-safari');


	//stick header to top
	var affixHeader = jQuery('#header');
	
	var headerOffset = 0;
	jQuery(affixHeader).affix({
		offset: {
			top: headerOffset,
			bottom: 0
		}
	});
	
	

	//preloader
	jQuery(".preloaderimg").fadeOut();
	jQuery(".preloader").delay(200).fadeOut("slow").delay(200, function(){
		jQuery(this).remove();
	});

	jQuery('body').delay(1000).scrollspy('refresh');


	
	//animation to elements on scroll
	if (jQuery().appear) {
		// jQuery('.to_animate').appear().css({opacity: 0});
		jQuery('.to_animate').appear().css({'visibility': 'hidden'});
		jQuery('.to_animate').filter(':appeared').each(function(index){
			var self = jQuery(this);
			var animationClass = !self.data('animation') ? 'fadeInUp' : self.data('animation');
			var animationDelay = !self.data('delay') ? 270 : self.data('delay');
			setTimeout(function(){
				self.addClass("animated " + animationClass);
			}, index * animationDelay);
		});

		jQuery('body').on('appear', '.to_animate', function(e, $affected ) {
			jQuery($affected).each(function(index){
				var self = jQuery(this);
				var animationClass = !self.data('animation') ? 'fadeInUp' : self.data('animation');
				var animationDelay = !self.data('delay') ? 270 : self.data('delay');
				setTimeout(function(){
					self.addClass("animated " + animationClass);
				}, index * animationDelay);
			});
		});
	}

	//counters init on scroll
	if (jQuery().appear) {
		jQuery('.counter').appear();
		jQuery('.counter').filter(':appeared').each(function(index){
			if (jQuery(this).hasClass('counted')) {
				return;
			} else {
				jQuery(this).countTo().addClass('counted');
			}
		});
		jQuery('body').on('appear', '.counter', function(e, $affected ) {
			jQuery($affected).each(function(index){
				if (jQuery(this).hasClass('counted')) {
					return;
				} else {
					jQuery(this).countTo().addClass('counted');
				}
				
			});
		});
	}


	//flickr
	// use http://idgettr.com/ to find your ID
	if (jQuery().jflickrfeed) {
		jQuery("#flickr").jflickrfeed({
			flickrbase: "http://api.flickr.com/services/feeds/",
			limit: 9,
			qstrings: {
				id: "63512867@N07"
			},
			itemTemplate: '<a href="{{image_b}}" data-gal="prettyPhoto[pp_gal]"><li><img alt="{{title}}" src="{{image_s}}" /></li></a>'
		}, function(data) {
			jQuery("#flickr a").prettyPhoto({
				hook: 'data-gal',
				theme: 'facebook'
	   		});
	   		jQuery("#flickr li").hover(function () {						 
			   jQuery(this).find("img").stop().animate({ opacity: 0.5 }, 200);
		    }, function() {
			   jQuery(this).find("img").stop().animate({ opacity: 1.0 }, 400);
		    });
		});
	}

});

jQuery(window).resize(function(){

	jQuery('body').scrollspy('refresh');
	jQuery("#header_wrapper").css({height: jQuery('#header').outerHeight(true)}); //editing header wrapper height for smooth stick and unstick
	
});

jQuery(window).scroll(function() {

	//circle progress bar
	pieChart();


});




//switcher
/////////////////////////////////////////////
//DELETE FOLLOWING CODE TO DISABLE SWITCHER//
/////////////////////////////////////////////
jQuery(window).load(function(){
		
		var switcherHTML = '<div id="switcher">';
		switcherHTML +=    '<span class="glyphicon glyphicon-cog"></span>';
		switcherHTML +=    '<h6>Colors</h6>';
		switcherHTML +=    '<ul id="switcher-colors" class="list-inline">';
		switcherHTML +=        '<li>';
		switcherHTML +=            '<a href="#" data-color="" class="color1"></a>';
		switcherHTML +=        '</li>';
		switcherHTML +=        '<li>';
		switcherHTML +=            '<a href="#" data-color="2" class="color2"></a>';
		switcherHTML +=        '</li>';
		switcherHTML +=        '<li>';
		switcherHTML +=            '<a href="#" data-color="3" class="color3"></a>';
		switcherHTML +=        '</li>';
		switcherHTML +=    '</ul>';
		switcherHTML +=    '<h6>Layout</h6>';
		switcherHTML +=    '<div class="checkbox">';
		switcherHTML +=        '<label>';
		switcherHTML +=            '<input type="checkbox" id="layout"> Boxed';
		switcherHTML +=        '</label>';
		switcherHTML +=    '</div>';
		switcherHTML +='</div>';

		jQuery('body').append(switcherHTML);

		//switcher toggle
        jQuery('#switcher span').on('click', function(){
            jQuery(this).parent().toggleClass('active');
        });

        //boxed or wide
        jQuery('#layout').on('click', function(){
            jQuery('body').toggleClass('boxed');
            jQuery('#box_wrapper').toggleClass('container');
            jQuery('#isotopeContainer').isotope('reLayout');
            jQuery(window).trigger('resize');
        });

        //pattern switcher
        var patternClasses = [
            'pattern1',
            'pattern2',
            'pattern3',
            'pattern4'
        ];
        jQuery('#switcher-patterns').on('click', 'a', function(e){
            e.preventDefault();
            e.stopPropagation();
            jQuery('body').removeClass(patternClasses.join(' '));
            jQuery('body').addClass(jQuery(this).data('pattern'));
        });
        //deleting pattern
        jQuery('#remove_pattern').on('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            jQuery('body').removeClass(patternClasses.join(' '));
        });

        //color switcher
        jQuery('#switcher-colors a').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var color = jQuery(this).data('color');
            jQuery('#color-switcher-link').attr('href', 'css/main' + color + '.css');
        });

		//version switcher
        jQuery('#switcher-version a').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var version = jQuery(this).attr('class');
            switch(version) {
            	case 'dark':
            		jQuery('.light_section').toggleClass('light_section darkgrey_section');
            		jQuery('.grey_section').toggleClass('grey_section dark_section').addClass('');
            		jQuery('#footer, #copyright').attr('class', '').addClass('darkgrey_section');
            		break;

            	case 'light':
            		jQuery('.darkgrey_section').toggleClass('darkgrey_section light_section');
            		jQuery('.dark_section').toggleClass('dark_section grey_section');
            		jQuery('#footer, #copyright').attr('class', '').addClass('darkgrey_section');
            		break;
            }
        });

});