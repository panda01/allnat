require(['jquery'], function($) {

  var $el = $("#main"),
      $frame = c("img.frame.slide"),
      $buffer = c("img.buffer.slide"),
      imgs = [], interval = null;



  $frame.hide();
  $el.append($frame, $buffer);

  // slide show operations
  var slideshow = {
      fadeIn: function(img, $frame, $buffer) {
          // set them frame image
          $frame.attr("src", img.img.src);
          // fade in the frame
          $frame.fadeIn(800, function() {
              // set the image to the buffer
              $buffer.attr("src", img.img.src);
              // hide the frame
              $frame.hide();
          });
      },
      slideShowStart: function(list) {
          var i = 0;
          interval = setInterval(function() {
              slideshow.fadeIn(list[i++], $frame, $buffer);
              if(i >= list.length) {
                  i = 0;
              }
          }, 2000);
      },
      initImages: function(imgs) {
          for(var i = 1; i < 9; i++) {
              imgs.push(new image(i + ".jpg"));
          }
      }
  };


  slideshow.initImages(imgs);
  slideshow.slideShowStart(imgs);






  function image(url) {
      var src = "wp-content/themes/yeopress/images/allnat/";

      this.img = new Image();


      this.url = src + url;

      this.img.src = this.url;
  }

  function c(str) {
      var s = str.split("."),
          el = document.createElement(s.shift());
      return $(el).addClass(s.join(" "));
  }

});
