( function( $ ) {

"use strict";

// *** On ready *** //
$( document ).on( "ready" , function() {
	responsiveClasses();
	dataCustomOptions();
	fullscreenSection();
	imageBG();
	fitVideos();
	BGVideoYTPlayer();
	lightboxImage();
	lightboxGallery();
	lightboxIframe();
	scrollToAnchor();
	counterStats();
	bannerParallaxImageBG();
	sectionParallaxImageBG();
	sliderServices();
	sliderClients();
	formCTASubscribe1();
	formCTASubscribe2();
	scrollTopIcon();
});

// *** On load *** //
$( window ).on( "load" , function() {
	parallaxStellar();
	scrollProgress();
});

// *** On resize *** //
$( window ).on( "resize" , function() {
	responsiveClasses();
	fullscreenSection();
	parallaxStellar();
});

// *** On scroll *** //
$( window ).on( "scroll" , function() {
	scrollTopIcon();
	scrollProgress();
});

// *** On Scroll In On load *** //
$( window ).on( "load" , function() {
	$( window ).on( "scroll" , function() {

	});
});


// *** jQuery noConflict *** //
var $ = jQuery.noConflict();


// *** General Variables *** //
var $window = $( window ),
	$this = $( this ),
	$body = $( "body" );

// *** Data Custom Options *** //
function dataCustomOptions(){$("*[data-pattern-overlay-darkness-opacity]").each(function(){var a=$(this).data("pattern-overlay-darkness-opacity");$(this).css("background-color",convertHex("#000000",a))}),$("*[data-pattern-overlay-background-image]").each(function(){"none"==$(this).data("pattern-overlay-background-image")?$(this).css("background-image","none"):"yes"==$(this).data("pattern-overlay-background-image")&&$(this).css("background-image")}),$("*[data-remove-pattern-overlay]").each(function(){"yes"==$(this).data("remove-pattern-overlay")&&$(this).css("background","none")}),$("*[data-bg-color]").each(function(){var a=$(this).data("bg-color");$(this).css("background-color",a)}),$("*[data-bg-color-opacity]").each(function(){var a=$(this).data("bg-color-opacity"),t=$(this).css("background-color").replace("rgb","rgba").replace(")",", "+a+")");$(this).css("background-color",t)}),$("*[data-bg-img]").each(function(){var a=$(this).data("bg-img");$(this).css("background-image","url('"+a+"')")}),$("*[data-parallax-bg-img]").each(function(){var a=$(this).data("parallax-bg-img");$(this).css("background-image","url('./images/files/parallax-bg/"+a+"')")})}


// Custom banner height
$( ".banner-parallax" ).each(function() {
	var customBannerHeight = $( this ).data( "banner-height" ),
		boxContent = $( this ).find( ".row > [class*='col-']" );
	$( this ).css( "min-height" , customBannerHeight );
	$( boxContent ).css( "min-height" , customBannerHeight );
});



// *** Responsive Classes *** //
function responsiveClasses() {
	var jRes = jRespond([
		{
			label: "smallest",
			enter: 0,
			exit: 479
		},{
			label: "handheld",
			enter: 480,
			exit: 767
		},{
			label: "tablet",
			enter: 768,
			exit: 991
		},{
			label: "laptop",
			enter: 992,
			exit: 1199
		},{
			label: "desktop",
			enter: 1200,
			exit: 10000
		}
	]);
	jRes.addFunc([
		{
			breakpoint: "desktop",
			enter: function() { $body.addClass( "device-lg" ); },
			exit: function() { $body.removeClass( "device-lg" ); }
		},{
			breakpoint: "laptop",
			enter: function() { $body.addClass( "device-md" ); },
			exit: function() { $body.removeClass( "device-md" ); }
		},{
			breakpoint: "tablet",
			enter: function() { $body.addClass( "device-sm" ); },
			exit: function() { $body.removeClass( "device-sm" ); }
		},{
			breakpoint: "handheld",
			enter: function() { $body.addClass( "device-xs" ); },
			exit: function() { $body.removeClass( "device-xs" ); }
		},{
			breakpoint: "smallest",
			enter: function() { $body.addClass( "device-xxs" ); },
			exit: function() { $body.removeClass( "device-xxs" ); }
		}
	]);
}


// *** Loading Progress *** //
$("body").waitForImages({finished:function(){setTimeout(function(){$(".lp-content, #loading-progress .logo").css({opacity:0}),$("#loading-progress").addClass("hide-it"),setTimeout(function(){},1300)},0)},each:function(t,o,i){var n=Math.floor((t+1)/o*100);$("#lp-counter").animate({$this:n},{duration:150,easing:"",queue:!1,step:function(t){var o=Math.round(t);$("#lp-counter").text(o+"%")}}),$("#lp-bar").animate({width:n+"%"},0)},waitForAll:!0});


// *** Fullscreen Section *** //
function fullscreenSection() {
	$( ".fullscreen, #home-header, #home-banner" ).css( "height", $( window ).height() );
	$( "#banner.fullscreen" ).css( "height", $( window ).height() );
}


// *** RTL Case *** //
var HTMLDir = $( "html" ).css( "direction" ),
	owlRtl;

// If page is RTL
if ( HTMLDir == "rtl" ) { 
	// Owl Carousel
	owlRtl = true 
} else { 
	owlRtl = false 
}


// *** Image Background *** //
function imageBG() {
	$( ".img-bg" ).each(function() {
		var $this = $( this ),
			imgSrc = $this.find( "img" ).attr( "src" );

		if ( $this.parent( ".section-image" ).length ) {
			$this.css( "background-image", "url('" + imgSrc + "')"  );
		} else {
			$this.prepend( "<div class='bg-element'></div>" );
			var bgElement = $this.find( ".bg-element" );
			bgElement.css( "background-image", "url('" + imgSrc + "')"  );
		}
		$this.find( "img" ).css({ "opacity" : 0 , "visibility" : "hidden" });		
	});
}


// *** Stellar Parallax *** //
function parallaxStellar() {
	$(function() {
		if ( $body.hasClass( "device-lg" ) || $body.hasClass( "device-md" ) || $body.hasClass( "device-sm" ) ) {
			$.stellar({
				horizontalScrolling: false, // don't change this option
				// verticalScrolling: false,
				verticalOffset: 0,
		    	responsive: true, // false
			});
        }
	});
}


// *** Fit Videos *** //
function fitVideos() {
	$( "#full-container" ).fitVids();
}


// *** Background Videos *** //
function BGVideoYTPlayer() {
	$(".video-background").each( function() {
		$( this ).YTPlayer({
			mute: false,
			autoPlay: false,
			opacity: 1,
			containment: ".video-background",
			showControls: false,
			startAt: 0,
			addRaster: true,
			showYTLogo: false,
			stopMovieOnBlur: false
		});
	});
}


// *** Lightbox Iframe *** //
function lightboxIframe() {
	$( ".lightbox-iframe" ).magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});	
}


// *** Lightbox Image *** //
function lightboxImage() {
	$( ".lightbox-img" ).magnificPopup({
		type: 'image',
		gallery:{
			enabled: false
		},
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});	
}


// *** Lightbox Gallery *** //
function lightboxGallery() {
	$( ".lightbox-gallery" ).magnificPopup({
		type: 'image',
		gallery:{
			enabled: true
		},
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});	
}


// *** Scroll Top Icon *** //
function scrollTopIcon() {
	var windowScroll = $( window ).scrollTop();
	if ( $( window ).scrollTop() > 800 ) {
		$( ".scroll-top-icon" ).addClass( "show" );
	} else {
		$( ".scroll-top-icon" ).removeClass( "show" );
	}
}

$( ".scroll-top" ).on( "click" , function(e) {
	e.preventDefault();
    $( "html, body" ).animate({
        scrollTop: 0
    }, 1200, "easeInOutExpo" ); //1200 easeInOutExpo
});


// *** Scroll Progress *** //
function scrollProgress() {
    var docheight = $(document).height();
    var winheight = $(window).height();
    var height = docheight - winheight;
    var scroll = $(document).scrollTop();
    var scrollperc = scroll/(height/100);
    $("#scroll-progress .scroll-progress").width(scrollperc+'%');
    $(".scroll-percent").text(scrollperc.toFixed(0)+'%');	
}


// *** Scroll To Anchor *** //
function scrollToAnchor() {
   	var stickyBar = $( ".header-bar.sticky" ),
   		stickyBarHeight = stickyBar.height(),
	    offsetDifference = ( ! stickyBar ) ? 0 : stickyBarHeight;

    $(  ".scroll-to" ).on( "click", function( e ) {
        e.preventDefault();
        var $anchor = $( this );

        // scroll to specific anchor
        $(  "html, body" ).stop().animate({
            scrollTop: $( $anchor.attr( "href" ) ).offset().top - offsetDifference
        } , 1200 , "easeInOutExpo" );
    });    
}


// *** Banner Parallax Image BG *** //
function bannerParallaxImageBG() {
	var bannerParallax = $( ".banner-parallax" ),
		imgSrc = bannerParallax.children( "img:first-child" ).attr( "src" );

	bannerParallax.prepend( "<div class='bg-element'></div>" );
	var bgElement = bannerParallax.find( "> .bg-element" );
	bgElement.css( "background-image", "url('" + imgSrc + "')"  ).attr( "data-stellar-background-ratio" , 0.2 );
}


// *** Section Parallax Image BG *** //
function sectionParallaxImageBG() {
	$( ".parallax-section" ).each( function() {
		var parallaxSection = $( this ),
			imgSrc = parallaxSection.children( "img:first-child" ).attr( "src" );

		parallaxSection.prepend( "<div class='bg-element'></div>" );
		var bgElement = parallaxSection.find( "> .bg-element" );
		bgElement.css( "background-image", "url('" + imgSrc + "')"  ).attr( "data-stellar-background-ratio" , 0.2 );
	} );
}


// *** Counter Stats *** //
function counterStats(){$(".counter-stats").each(function(){var t=$(this),i=t.text(),a=i.toString().replace(/(\d)/g,"<span class='digit'><span class='digit-value'>$1</span></span>");t.html(a+"<div class='main'>"+i+"</span>"),t.find(".digit").each(function(){var t=$(this),i=t.find(".digit-value").text();t.append("<div class='counter-animator' data-value='"+i+"'><ul><li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li></ul></div>")})}),$(".counter-stats").each(function(i){var a=$(this);new Waypoint({element:a,handler:function(t){setTimeout(function(){setTimeout(function(){1<$(window).width()&&a.find(".counter-animator").each(function(){var t=$(this),i=10*t.data("value");t.find("ul").css({transform:"translateY(-"+i+"%)","-webkit-transform":"translateY(-"+i+"%)","-moz-transform":"translateY(-"+i+"%)","-ms-transform":"translateY(-"+i+"%)","-o-transform":"translateY(-"+i+"%)"})})},0*i)},0)},offset:"90%"})})}


// *** Slider Services *** //
function sliderServices() {
	var sliderServices = $( ".slider-services > .owl-carousel" );
	sliderServices.owlCarousel({
		// items: 3,
		rtl: owlRtl,
		autoplay: 4000,
		autoplaySpeed: 500, // Sliding autoplay speed
		autoplayTimeout: 5000, // Autoplay interval timeout.
		dragEndSpeed: 400, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: false,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 30, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: false, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        items : 1
		    },
		    480 : {
		        items : 1
		    },
		    600 : {
		        items : 2
		    },
		    768 : {
		        items : 2
		    },
		    1024 : {
		        items : 2
		    }
		},
		autoHeight: true,
		autoWidth: false,
		// animateOut: 'goDownOut',
	    // animateIn: 'goDownIn',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 400,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 400 // Sliding speed by using dots
	});
}


// *** Slider Clients *** //
function sliderClients() {
	var sliderClients = $( ".slider-clients > .owl-carousel" );
	sliderClients.owlCarousel({
		items: 6,
		rtl: owlRtl,
		autoplay: 3000,
		autoplaySpeed: 500, // Sliding autoplay speed
		autoplayTimeout: 3000, // Autoplay interval timeout.
		dragEndSpeed: 400, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: true,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 30, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: false, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        items : 2
		    },
		    480 : {
		        items : 3
		    },
		    768 : {
		        items : 4
		    },
		    992 : {
		        items : 5
		    },
		    1200 : {
		        items : 6
		    }
		},
		autoHeight: false,
		autoWidth: false,
		// animateOut: 'goDownOut',
	    // animateIn: 'goDownIn',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 400,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 400 // Sliding speed by using dots
	});
}


// *** Scroll To *** //
$(  ".scroll-to" ).on(  "click", function( e ) {
    e.preventDefault();
    var $anchor = $(this);      

    // scroll to specific anchor
    $(  "html, body" ).stop().animate({
        scrollTop: $( $anchor.attr( "href" ) ).offset().top
    } , 1200 , "easeInOutExpo" );
});    


// *** Form CTA Subscribe 1 *** //
function formCTASubscribe1() {
	$( "#form-cta-subscribe-1" ).validate({
		// rules
		rules: {
			cs1Email: {
				required: true,
				email: true
			}
		}
	});

	var errorMsgData = $( ".cs-notifications" ).data( "error-msg" ),
		errorMsgDefault = 'Please Follow Error Messages and Complete as Required',
		errorMsg = ( errorMsgData ) ? ( errorMsgData ) : errorMsgDefault;

	// Submit event
	$( "#form-cta-subscribe-1" ).on( "submit" , function( event ) {
	    if ( event.isDefaultPrevented() ) {
		    var errorContent = '<i class="cs-error-icon fa fa-close"></i>' +
		                       errorMsg;
			cs1SubmitMSG(false, errorContent);
	        cs1Error();
	    } else {
	        event.preventDefault();
	        cs1SubmitForm();
	    }
	});
}

function cs1SubmitForm(){
    // Initiate Variables With Form Content
    var email = $( "#cs1Email" ).val();

    $.ajax({
        type: "POST",
        url: "./php/cs1-process.php",
        data: "&cs1Email=" + email,
        success : function(text){
            if ( text == "success" ){
                cs1Success();
            } else {
                cs1Error();
                cs1SubmitMSG( false, text );
            }
        }
    });
}

function cs1Success(){var i=$(".cs-notifications").data("success-msg"),n=i||"Thank you for your submission :)";$("#form-cta-subscribe-1")[0].reset(),cs1SubmitMSG(!0,'<i class="cs-success-icon fa fa-check"></i>'+n),$(".cs-notifications-content").addClass("sent"),$(".cs-notifications").css("opacity",0),$(".cs-notifications").slideDown(300).animate({opacity:1},300).delay(5e3).slideUp(400)}function cs1Error(){$(".cs-notifications").css("opacity",0),$(".cs-notifications").slideDown(300).animate({opacity:1},300),$(".cs-notifications-content").removeClass("sent")}function cs1SubmitMSG(i,n){var s;s="shake animated",$(".cs-notifications").delay(300).addClass(s).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("shake bounce animated")}),$(".cs-notifications").children(".cs-notifications-content").html(n)}


// *** Form CTA Subscribe 2 *** //
function formCTASubscribe2() {
	$( "#form-cta-subscribe-2" ).validate({
		// rules
		rules: {
			cs2Name: {
				required: true,
				minlength: 3
			},
			cs2Email: {
				required: true,
				email: true
			}
		}
	});

	var errorMsgData = $( ".cs-notifications" ).data( "error-msg" ),
		errorMsgDefault = 'Please Follow Error Messages and Complete as Required',
		errorMsg = ( errorMsgData ) ? ( errorMsgData ) : errorMsgDefault;

	// Submit event
	$( "#form-cta-subscribe-2" ).on( "submit" , function( event ) {
	    if ( event.isDefaultPrevented() ) {
		    var errorContent = '<i class="cs-error-icon fa fa-close"></i>' +
		                       errorMsg;
			cs2SubmitMSG(false, errorContent);
	        cs2Error();
	    } else {
	        event.preventDefault();
	        cs2SubmitForm();
	    }
	});
}

function cs2SubmitForm(){
    // Initiate Variables With Form Content
    var name = $( "#cs2Name" ).val();
    var email = $( "#cs2Email" ).val();

    $.ajax({
        type: "POST",
        url: "./php/cs2-process.php",
        data: "cs2Name=" + name + "&cs2Email=" + email,
        success : function(text){
            if ( text == "success" ){
                cs2Success();
            } else {
                cs2Error();
                cs2SubmitMSG( false, text );
            }
        }
    });
}

function cs2Success(){var i=$(".cs-notifications").data("success-msg"),n=i||"Thank you for your submission :)";$("#form-cta-subscribe-2")[0].reset(),cs2SubmitMSG(!0,'<i class="cs-success-icon fa fa-check"></i>'+n),$(".cs-notifications-content").addClass("sent"),$(".cs-notifications").css("opacity",0),$(".cs-notifications").slideDown(300).animate({opacity:1},300).delay(5e3).slideUp(400)}function cs2Error(){$(".cs-notifications").css("opacity",0),$(".cs-notifications").slideDown(300).animate({opacity:1},300),$(".cs-notifications-content").removeClass("sent")}function cs2SubmitMSG(i,n){var s;s="shake animated",$(".cs-notifications").delay(300).addClass(s).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("shake bounce animated")}),$(".cs-notifications").children(".cs-notifications-content").html(n)}


// *** Mailchimp Subscribe Form *** //
$( "#form-cta-subscribe-3" ).ajaxChimp({
    callback: mailchimpCallback,
    url: "https://themeforest.us12.list-manage.com/subscribe/post?u=271ee03ffa4f5e3888d79125e&amp;id=163f4114e2" //Replace this with your own mailchimp post URL.
});

function mailchimpCallback(n){var i=$(".cs-notifications");"success"===n.result?($("#form-cta-subscribe-3")[0].reset(),i.children(".cs-notifications-content").html('<i class="cs-success-icon fa fa-check"></i>'+n.msg).addClass("sent shake animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("shake bounce animated")}),i.css("opacity",0),i.slideDown(300).animate({opacity:1},300).delay(8e3).slideUp(400)):"error"===n.result&&(i.children(".cs-notifications-content").html('<i class="cs-error-icon fa fa-close"></i>'+n.msg).removeClass("sent").addClass("bounce animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("shake bounce animated")}),i.css("opacity",0),i.slideDown(300).animate({opacity:1},300))}


// *** Popup Preview *** //
$( ".popup-btn, .popup-bg, .popup-close" ).on( "click" , function( e ) {
	e.preventDefault();
	$( ".popup-preview" ).toggleClass( "viewed" );
	$( "body" ).toggleClass( "scroll-lock" );
} );


// *** Replace all SVG images with inline SVG *** //
$('img.svg').each(function(){
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = $(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});

} )( jQuery );


function convertHex( hex , opacity ){
	// "use strict";
	// var r, g, b, result;
    hex = hex.replace( '#' , '' );
    r = parseInt( hex.substring( 0 , 2 ) , 16 );
    g = parseInt( hex.substring( 2 , 4 ) , 16 );
    b = parseInt( hex.substring( 4 , 6 ) , 16 );

    result = 'rgba('+r+', '+g+', '+b+', '+opacity+')';
    return result;
}
