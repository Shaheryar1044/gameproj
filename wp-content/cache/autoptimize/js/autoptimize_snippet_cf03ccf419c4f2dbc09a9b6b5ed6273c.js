!function(e){function o(e,i){var o=e.find(".oew-accordion"),t=o.data("settings");o.hasClass("oew-has-active-item")&&o.find(".oew-accordion-item:nth-child("+t.active_item+")").addClass("oew-active").find(".oew-accordion-content").slideDown(200),o.find(".oew-accordion-title").on("click",function(){var e=i(this),o=e.parent(),n=e.next();"true"==t.multiple?o.toggleClass("oew-active").find(".oew-accordion-content").slideToggle(200):o.hasClass("oew-active")?(o.removeClass("oew-active"),n.slideUp(200)):(o.parent().find(".oew-accordion-item").removeClass("oew-active"),o.parent().find(".oew-accordion-content").slideUp(200),o.toggleClass("oew-active"),n.slideToggle(200))})}e(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/oew-accordion.default",o)})}(jQuery);