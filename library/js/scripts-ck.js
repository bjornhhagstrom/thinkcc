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
*//*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/function updateViewportDimensions(){var e=window,t=document,n=t.documentElement,r=t.getElementsByTagName("body")[0],i=e.innerWidth||n.clientWidth||r.clientWidth,s=e.innerHeight||n.clientHeight||r.clientHeight;return{width:i,height:s}}var viewport=updateViewportDimensions(),waitForFinalEvent=function(){var e={};return function(t,n,r){r||(r="Don't call this twice without a uniqueId");e[r]&&clearTimeout(e[r]);e[r]=setTimeout(t,n)}}(),timeToWaitForLast=100;jQuery(document).ready(function(e){e(".panel-nav a, .home-link").click(function(t){t.preventDefault();var n=e(this),r=n.parents(".panel"),i=n.attr("href"),s=e(i).find(".panel-nav");if(n.hasClass("top")){e(r).animate({top:"100%"},300).removeClass("active-panel");e(i).animate({top:"0"},300).addClass("active-panel")}else if(n.hasClass("right")){e(r).animate({left:"-100%"},300).removeClass("active-panel");e(i).css("left","100%").animate({left:"0"},300).addClass("active-panel")}else if(n.hasClass("bottom")){e(r).animate({top:"-100%"},300).removeClass("active-panel");e(i).animate({top:"0"},300).addClass("active-panel")}else if(n.hasClass("left")){e(r).animate({left:"100%"},300).removeClass("active-panel");e(i).css("left","-100%").animate({left:"0"},300).addClass("active-panel")}e(".panel-nav").removeClass("active");s.addClass("active")});e(function(){e("#home").swipe({swipe:function(e,t,n,r,i,s){alert("You swiped "+t)},threshold:0})});e(window).on("load resize",function(){var t=e(window).height(),n=e(window).width();waitForFinalEvent(function(){if(n>t){var r=e(".project").removeClass("portrait").addClass("landscape");r.each(function(){$this=e(this);var t=$this.data("imageh");$this.css("background-image",t)})}else{var r=e(".project").removeClass("landscape").addClass("portrait");r.each(function(){$this=e(this);var t=$this.data("imagev");$this.css("background-image",t)})}},timeToWaitForLast,"detect-orientation")})});