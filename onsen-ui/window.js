  
/*     window.fn = {};

    window.fn.open = function() {
      var menu = document.getElementById('menu');
      menu.open();
    };
    
    window.fn.load = function(page) {
      var content = document.getElementById('content');
      var menu = document.getElementById('menu');
      content.load(page)
        .then(menu.close.bind(menu));
    };
 */

    var prev = function() {
        var carousel = document.getElementById('carousel');
        carousel.prev();
      };
      
      var next = function() {
        var carousel = document.getElementById('carousel');
        carousel.next();
      };
      
      ons.ready(function() {
        var carousel = document.addEventListener('postchange', function(event) {
          console.log('Changed to ' + event.activeIndex)
        });
      });