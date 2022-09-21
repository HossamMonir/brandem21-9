$(document).ready(function() {
    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $('#back-top').show();
            } else {
                $('#back-top').hide();
            }
        });
        // scroll body to 0px on click
        $('#back-top a').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

    //menu
	$('.nav-icon').click(function() {
        $('.menu-rightside').toggleClass('menu_open');
        $('.nav-icon').toggleClass('icon_open');
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });

	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").slideToggle();
	});
	adjustMenu();
})

var ww = document.body.clientWidth;
$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 599) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 599) {
		$(".toggleMenu").css("display", "none");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}


$(document).ready(function() {
    //homepage main slider
    $('.hero').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: !0,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        disableOnInteraction: true,
        draggable: true,
        arrows: true
    });
    
    //homepage top projects slider
    $('.center').slick({
        dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '350px',
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [{
            breakpoint: 768,
            settings: {
                centerPadding: '250px'
            }
        }, {
            breakpoint: 480,
            settings: {
                centerPadding: '150px'
            }
        }]
    });

    //homepage testimonial slider
    $('.slideshow').slick({
        dots: false,
        infinite: true
    });

    //homepage top clients slider
    $('.clients-list').slick({
        centerMode: true,
        centerPadding: "60px",
        dots: false,
        slidesToShow: 6,
        infinite: true,
        arrows: true,
        lazyLoad: "ondemand",
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                centerMode: false
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }]
    });

    //about page secret slider
    $(".secrets-list").slick({
        infinite: true,
        dots: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        disableOnInteraction: true,
        draggable: true,
        vertical: true
    });

    //about values
    $(".engage")
        .on("mouseenter", function() {
            $('#about-popup').addClass('highlight');
        })
        .on("mouseleave", function() {
            $('#about-popup').removeClass('highlight');
        });
    $(".influence")
        .on("mouseenter", function() {
            $('#influence-popup').addClass('highlight');
        })
        .on("mouseleave", function() {
            $('#influence-popup').removeClass('highlight');
        });
    $(".innovate")
        .on("mouseenter", function() {
            $('#innovate-popup').addClass('highlight');
        })
        .on("mouseleave", function() {
            $('#innovate-popup').removeClass('highlight');
        });
    $(".implement")
        .on("mouseenter", function() {
            $('#implement-popup').addClass('highlight');
        })
        .on("mouseleave", function() {
            $('#implement-popup').removeClass('highlight');
        });
    $(".close-icon").click(function() {
        $('#about-popup').removeClass('highlight');
        $('#influence-popup').removeClass('highlight');
        $('#Innovate-popup').removeClass('highlight');
        $('#Implement-popup').removeClass('highlight');
    });


    //services
    $(".service-list > ul > li > a").click(function() {
        $(".services-popup").removeClass('highlight');
        $(".service-list > ul > li > a").show();
        $(this).parent().find(".services-popup").addClass('highlight');
        $(this).hide();
        $('html,body').animate({
            scrollTop: ($(this).parent().offset().top - 55)
        }, 1000);
    })

    $(".removeClass").click(function() {
        $(".service-list > ul > li > a").show();
        $(".service-list > ul > li  .services-popup").removeClass('highlight');
    });

    //works list
    mixitup('#mix-wrapper', {
        animation: {
            effects: 'fade',
            duration: 500
        },
        classNames: {
            block: 'works-filter',
            elementFilter: 'filter-btn'
        },
        selectors: {
            target: '.mix'
        }
    });


    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(
        function() {
            $(this).addClass("transition");
        },
        function() {
            $(this).removeClass("transition");
        }
    );
});