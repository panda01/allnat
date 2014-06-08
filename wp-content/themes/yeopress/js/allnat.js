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
          var setImg = function($img, i) {
              $img.attr("src", i.img.src);                   // set the image to the buffer
          };
          // set them frame image
          setImg($frame, img);
          // fade in the frame
          $frame.fadeIn(900, function() {
              setImg($buffer, img);
              // hide the frame
              $frame.hide();
          });
      },
      slideShowStart: function(list) {
          var i = 0,
              slide = function() {
                  slideshow.fadeIn(list[i++], $frame, $buffer);
                  if(i >= list.length) {
                      i = 0;
                  }
              };
          slide();
          interval = setInterval(slide, 5000);
      },
      initImages: function(imgs) {
          for(var i = 1; i < 9; i++) {
              imgs.push(new image(i + ".jpg"));
          }

      },
      initFrames: function(f) {
          for(var i = 0; i < f.length; i++) {
              f[i].css("margin-top", ((-.5 * .75 * $(document).width()) + "px"))// set the margin to that way the image is centered on the page
          }
      }
  };


  slideshow.initFrames([$frame, $buffer]);
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
