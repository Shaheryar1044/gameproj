function postsSliderCarousel(){"use strict";$j("body").hasClass("no-carousel")||$j(".oceanwp-post-list").each(function(){var a=$j(this),b=a.find("> .posts-slider"),c=b.data("slideshow"),d=b.data("number");if($j("body").hasClass("rtl"))var e=!0;else var e=!1;if(a.hasClass("one"))var f=1,g=1,h=1,i=1,j=1;else if(a.hasClass("two"))var f=d,g=d,h=1,i=2,j=d;b.imagesLoaded(function(){b.slick({infinite:!0,slidesToShow:f,slidesToScroll:g,prevArrow:'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',nextArrow:'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',speed:500,autoplay:!0,autoplaySpeed:c,rtl:e,responsive:[{breakpoint:1200,settings:{slidesToShow:j,slidesToScroll:j}},{breakpoint:980,settings:{slidesToShow:i,slidesToScroll:i}},{breakpoint:480,settings:{slidesToShow:h,slidesToScroll:h}}]})})})}var $j=jQuery.noConflict();$j(document).on("ready",function(){"use strict";postsSliderCarousel()});