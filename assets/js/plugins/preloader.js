
function introLoader(element,delay) {
    this.open = function(callback) {
      setTimeout(function() {
        $(element).fadeIn(500, function() {
          if(callback !== undefined) callback();
        });
      }, delay);
      
    };
    this.close = function(callback) {
      setTimeout(function() {
        $(element).fadeOut(500, function() {
          if(callback !== undefined) callback();
        });
      }, delay);
    };
  }
  var LOADER = new introLoader('#introLoader',500);
  $(window).on('load', function() {
    LOADER.close(function() {
    });
  });