//javascript

window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#ff1236",
      "text": "#ffdddd"
    },
    "button": {
      "background": "#cccccc"
    }
  },
  "content": {
    "href": "http://www.saleshill.biz/cookie-policy.html"
  }
})});

jQuery(document).ready(function() {
 
	var offset = 250;
 
	var duration = 300;
 
	jQuery(window).scroll(function() {
 
		if (jQuery(this).scrollTop() > offset) {
 
			jQuery('.back-to-top').fadeIn(duration);
 
		} else {
 
		jQuery('.back-to-top').fadeOut(duration);
 			   }
 
});
 

jQuery('.back-to-top').click(function(event) {
 
	event.preventDefault();
 
	jQuery('html, body').animate({scrollTop: 0}, duration);
 
	return false;
 
	})
 
});

$(".opened").click(function(){
    $(".left-sidebar-box").removeClass("sh-collapse");
});

$(".closed").click(function(){
    $(".left-sidebar-box").addClass("sh-collapse");
});
