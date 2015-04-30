$(document).ready(function() {
	$('a').click(function(e) {
		e.preventDefault();
		$('a').addClass('progress');
		$.get("/?trigger=1", function() { 
		  if (window.navigator.vibrate) {
  		  window.navigator.vibrate(200);
  		}
		  $('a').removeClass('progress').addClass('success').delay(2000).queue(function(next){
        $('a').removeClass("success");
        next();
      });
	  });
	});
	var light = $('#status');
	  
	function updateServerStatus() {
	  light.addClass("ping");
	  $.ajax({ url: "/?ping=1", timeout: 500}) 
	  .done(function() {
	    light.addClass("green").removeClass("red");
	  })
	  .fail(function() {
  	  light.addClass("red").removeClass("green");
	  })
	  .always(function() {
	    light.removeClass("ping");
	  });
	}
	window.setInterval(updateServerStatus, 1000);
	updateServerStatus();
});
