/**
 * @module       Materianize Parallax
 * @licesne      MIT License
 * @see          http://materializecss.com/parallax-demo.html
 */
(function(b){b.fn.parallaxmat=function(){var e=b(window).width();return this.each(function(n){function d(d){var c;c=601>e?0<a.height()?a.height():a.children("img").height():0<a.height()?a.height():500;var f=a.children("img").first(),l=f.height()-c,m=a.offset().top+c,k=a.offset().top,g=b(window).scrollTop(),h=window.innerHeight;c=Math.round((g+h-k)/(c+h)*l);d&&f.css("display","block");m>g&&k<g+h&&f.css("transform","translate3D(-50%,"+c+"px, 0)")}var a=b(this);a.addClass("parallax");a.children("img").one("load",
  function(){d(!0)}).each(function(){this.complete&&b(this).trigger("load")});b(window).scroll(function(){e=b(window).width();d(!1)});b(window).resize(function(){e=b(window).width();d(!1)})})}})(jQuery);
