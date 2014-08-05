require(['jquery', 'lodash'], function($, _) {


    var parallax = [
        ["#big-logo", 0.20],
        ["#big-img", 0.5]
    ];

    $(function() {
        // Elements
        var $window = $(window);

        // other things
        var pageHeight = $window.height();

        // set the main image to take up exactly the right about of space
        $(".main-image").height(pageHeight);

        // cache some things, and remember the initial scroll for the parallax
        parallax = _.map(parallax, function(v) {
            var $e = $(v[0]);
            return {
              $el: $e,
              ratio: v[1],              // the ratio at which it scrolls
              oTop: $e.offset().top,    // Starting top
              height: $e.height()
            };
        });

        // apply the effect on scroll
        $window.scroll(function(e) {
            var p, elTop, adjPos, isVisible,
                scroll = $window.scrollTop();

            for(var i = parallax.length; --i >= 0; ) {
                p = parallax[i];
                // top position of the new element
                elTop = p.ratio * scroll + p.oTop;
                // if the element is within the viewable area
                if(elTop <= scroll + pageHeight && elTop + p.height >= scroll) {
                    p.$el.css("top", elTop);
                }
            }
        });
    });

});
