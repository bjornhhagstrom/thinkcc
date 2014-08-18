/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  // custom panel nav
  $('.panel-nav a, .home-link').click(function(e) {
    e.preventDefault();

    var $this = $(this);
    var $thisPanel = $this.parents('.panel');
    var $nextPanel = $this.attr('href');
    var $nextNav = $($nextPanel).find('.panel-nav');

    if($this.hasClass('top')) {

      $($thisPanel).animate({ top: "100%" }, 300);
      $($nextPanel).animate({ top: "0" }, 300);

    } else if($this.hasClass('right')) {

      $($thisPanel).animate({ left: "-100%" }, 300);
      $($nextPanel).css('left', '100%').animate({ left: "0" }, 300);

    } else if($this.hasClass('bottom')) {

      $($thisPanel).animate({ top: "-100%" }, 300);
      $($nextPanel).animate({ top: "0" }, 300);

    } else if($this.hasClass('left')) {

      $($thisPanel).animate({ left: "100%" }, 300);
      $($nextPanel).css('left', '-100%').animate({ left: "0" }, 300);

    }
    $('.panel-nav').removeClass('active');
    $nextNav.addClass('active');
  });

	// swipe control
	$(function(){
		$( document ).on( "swipeleft swiperight swipeup swipedown", ".panel", function( e ) {

			$this = $(this);
			$left = $this.find('.panel-nav a.left').attr('href');
			$right = $this.find('.panel-nav a.right').attr('href');
			$top = $this.find('.panel-nav a.top').attr('href');
			$down = $this.find('.panel-nav a.down').attr('href');

			if ( e.type === "swipeleft" && ($right != '') ) {

				$this.animate({ left: "-100%" }, 300);
				$($right).css('left', '100%').animate({ left: "0" }, 300);

				$('.panel-nav').removeClass('active');
				$($right).find('.panel-nav').addClass('active');

			} else if ( e.type === "swiperight" && ($left != '') ) {

				$this.animate({ left: "100%" }, 300);
				$($left).css('left', '-100%').animate({ left: "0" }, 300);

				$('.panel-nav').removeClass('active');
				$($left).find('.panel-nav').addClass('active');

			} else if ( e.type === "swipeup" && ($up != '') ) {

				$this.animate({ top: "-100%" }, 300);
				$($up).animate({ top: "0" }, 300);

				$('.panel-nav').removeClass('active');
				$($up).find('.panel-nav').addClass('active');

			} else if ( e.type === "swipedown" && ($down != '') ) {

				$this.animate({ top: "100%" }, 300);
				$($down).animate({ top: "0" }, 300);

				$('.panel-nav').removeClass('active');
				$($down).find('.panel-nav').addClass('active');

			}

		});
	});

  // switch images on different devices
  $(window).on("load resize",function(){
      var h = $(window).height();
      var w = $(window).width();

      waitForFinalEvent( function() {
        if(w > h) {
          // landscape
          var project = $('.project').removeClass('portrait').addClass('landscape');
          project.each(function(){
            $this = $(this);
            var imageH = $this.data('imageh');
            $this.css('background-image', imageH);
          });
        }else{
          // portrait
          var project = $('.project').removeClass('landscape').addClass('portrait');;
          project.each(function(){
            $this = $(this);
            var imageV = $this.data('imagev');

            $this.css('background-image', imageV);
          });
        }
    }, timeToWaitForLast, "detect-orientation");
  });


}); /* end of as page load scripts */
