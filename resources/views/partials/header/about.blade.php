<title>About Us</title>
<link href="about-us?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
<link href="about-us?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
<link href="index.php/component/search/?Itemid=101&amp;format=opensearch" rel="search" title="Search EduX" type="application/opensearchdescription+xml" />
<link href="templates/theme3557/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="media/jui/css/chosen.css?168c1d0d02a12ac3c9a4a0f2e53376a1" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/css/template.css" rel="stylesheet" type="text/css" />
<link href="templates/system/css/system.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/css/megamenu.css" rel="stylesheet" type="text/css" />
<link href="plugins/system/t3/base-bs3/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/fonts/material-design/css/material-design.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/fonts/material-icons/css/material-icons.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/fonts/thin/css/thin.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/fonts/glyphicons/css/glyphicons.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/fonts/linearicons/css/linearicons.css" rel="stylesheet" type="text/css" />
<link href="templates/theme3557/html/mod_icemegamenu/css/navbar.css" rel="stylesheet" type="text/css" />
<style type="text/css">
div.mod_search195 input[type="search"]{ width:auto; }
</style>
<script src="media/jui/js/jquery.min.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="media/jui/js/jquery-noconflict.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="media/jui/js/jquery-migrate.min.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/bootstrap/js/bootstrap.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="media/jui/js/chosen.jquery.min.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="templates/theme3557/js/script.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/jquery.tap.min.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/script.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/menu.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/nav-collapse.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="media/system/js/html5fallback.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script><![endif]-->
<script src="modules/mod_owl_carousel/js/jquery.owl-carousel.js" type="text/javascript"></script>
<script src="modules/mod_tm_parallax/js/jquery.materialize-parallax.js" type="text/javascript"></script>
<script src="templates/theme3557/html/mod_icemegamenu/js/menu.js" type="text/javascript" defer="defer"></script>
<script src="templates/theme3557/html/mod_icemegamenu/js/jquery.rd-navbar.js" type="text/javascript" defer="defer"></script>
<script type="text/javascript">
jQuery(function($){ initTooltips(); $("body").on("subform-row-add", initTooltips); function initTooltips (event, container) { container = container || document;$(container).find(".hasTooltip").tooltip({"html": true,"container": "body"});} });
jQuery(function ($) {
  initChosen();
  $("body").on("subform-row-add", initChosen);

  function initChosen(event, container)
  {
    container = container || document;
    $(container).find("select").chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Type or select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
  }
});

var path = "templates/theme3557/js/";

;(function($){
  $(window).load(function() {
      $(document).on("click touchmove",function(e) {

            var container = $("#t3-mainnav .t3-navbar-collapse");
            if (!container.is(e.target)
                && container.has(e.target).length === 0 && container.hasClass("in"))
            {
                $("#t3-mainnav .t3-navbar-collapse").toggleClass("in")
            }
        })
      // check we miss any nav
      if($(window).width() < 768){
          $('.t3-navbar-collapse ul.nav').has('.dropdown-menu').t3menu({
              duration : 100,
              timeout : 50,
              hidedelay : 100,
              hover : false,
              sb_width : 20
          });
      }
  });
})(jQuery);

    ;(function($){
      $(document).ready(function(){
        var o=$('a[href="#modal"]');
        if(o.length>0){
          o.attr("data-toggle","modal").attr("data-target", "#modal");
        }
        o.click(function(event){
          event.preventDefault();
          $("#modal").addClass('in');

          setTimeout(function(){
            $("#modal #searchword").focus();
          }, 500);
        });

        $(".modalClose").on("click", function(){
          $(this).parent("#modal").removeClass("in");
        });
      });
    })(jQuery);

(function ($) {
    $(document).ready(function(){
      var o = $(".owl-carousel_305");
          if (o.length) {
              var isTouch = "ontouchstart" in window;

              function preventScroll(e) {
                  e.preventDefault();
              }

              $(document).ready(function () {
                  o.each(function () {
                      var c = $(this), responsive = {};
                      var aliaces = ["-", "-xs-", "-sm-", "-md-", "-lg-"], values = [0, 480, 768, 992, 1200], i, j;
                      for (i = 0; i < values.length; i++) {
                          responsive[values[i]] = {};
                          for (j = i; j >= -1; j--) {
                              if (!responsive[values[i]]["items"] && c.attr("data" + aliaces[j] + "items")) {
                                  responsive[values[i]]["items"] = j < 0 ? 1 : parseInt(c.attr("data" + aliaces[j] + "items"));
                              }
                              if (!responsive[values[i]]["stagePadding"] && responsive[values[i]]["stagePadding"] !== 0 && c.attr("data" + aliaces[j] + "stage-padding")) {
                                  responsive[values[i]]["stagePadding"] = j < 0 ? 0 : parseInt(c.attr("data" + aliaces[j] + "stage-padding"));
                              }
                              if (!responsive[values[i]]["margin"] && responsive[values[i]]["margin"] !== 0 && c.attr("data" + aliaces[j] + "margin")) {
                                  responsive[values[i]]["margin"] = j < 0 ? 30 : parseInt(c.attr("data" + aliaces[j] + "margin"));
                              }
                          }
                      }
                      c.owlCarousel({
                          autoplay: c.attr("data-autoplay") === "true",
                          autoplayTimeout: 8000,
                          loop: c.attr("data-loop") !== "false",
                          nav: c.attr("data-nav") === "true",
                          dots: c.attr("data-dots") === "true",
                          dotsEach: c.attr("data-dots-each") ? parseInt(c.attr("data-dots-each")) : false,
                          responsive: responsive,
                          navText: [],
                          onInitialized: function () {
                $(".owl-carousel_305 .owl-item").each(function(){
                  if($(this).hasClass("cloned-gallery1")){
                    $(this).find("a.fancybox-thumb").attr("data-fancybox-group", "cloned-gallery1");
                  }
                  if($(this).hasClass("cloned-gallery2")){
                    $(this).find("a.fancybox-thumb").attr("data-fancybox-group", "cloned-gallery2");
                  }
                });

                              if ($.fn.magnificPopup) {
                                  var o = this.$element.find("[data-lightbox]").not("[data-lightbox='gallery'] [data-lightbox]"), g = this.$element.find("[data-lightbox^='gallery']");
                                  if (o.length) {
                                      o.each(function () {
                                          var $this = $(this);
                                          $this.magnificPopup({
                                              type: $this.attr("data-lightbox"),
                                              callbacks: {
                                                  open: function () {
                                                      if (isTouch) {
                                                          $(document).on("touchmove", preventScroll);
                                                          $(document).swipe({
                                                              swipeDown: function () {
                                                                  $.magnificPopup.close();
                                                              }
                                                          });
                                                      }
                                                  }, close: function () {
                                                      if (isTouch) {
                                                          $(document).off("touchmove", preventScroll);
                                                          $(document).swipe("destroy");
                                                      }
                                                  }
                                              }
                                          });
                                      })
                                  }
                                  if (g.length) {
                                      g.each(function () {
                                          var $gallery = $(this);
                                          $gallery.find("[data-lightbox]").each(function () {
                                              var $item = $(this);
                                              $item.addClass("mfp-" + $item.attr("data-lightbox"));
                                          }).end().magnificPopup({
                                              delegate: "[data-lightbox]",
                                              type: "image",
                                              gallery: {enabled: true},
                                              callbacks: {
                                                  open: function () {
                                                      if (isTouch) {
                                                          $(document).on("touchmove", preventScroll);
                                                          $(document).swipe({
                                                              swipeDown: function () {
                                                                  $.magnificPopup.close();
                                                              }
                                                          });
                                                      }
                                                  }, close: function () {
                                                      if (isTouch) {
                                                          $(document).off("touchmove", preventScroll);
                                                          $(document).swipe("destroy");
                                                      }
                                                  }
                                              }
                                          });
                                      });

                                  }
                              }
                          }
                      });
                  });
              });
          }
      });
})(jQuery);
  ;(function($){
      $(window).load(function(){
          userAgent = navigator.userAgent.toLowerCase();
          isIE = userAgent.indexOf("msie") != -1 ? parseInt(userAgent.split("msie")[1], 10) : userAgent.indexOf("trident") != -1 ? 11 : userAgent.indexOf("edge") != -1 ? 12 : false;

          isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);


          if (!isIE && !isMobile) {
              $("#mod_tm_parallax_302 .mod_tm_parallax").parallaxmat();
          } else {

              imgPath = $("#mod_tm_parallax_302 .mod_tm_parallax").find("img").attr("src");

              $("#mod_tm_parallax_302 .mod_tm_parallax").css({
                  "background-image": "url(" + imgPath + ")",
                  "background-size": "cover",
                  "background-attachment": "fixed"
              });
          }
      });
  })(jQuery);

(function($){
$(document).ready(function(){
  $(".home_menu .sidebar-menu").click(function(e){
    $("div.icemegamenu").toggleClass("active");
    return false;})
  })
  $(document).on('mouseup touchend', function (e) {
    var container = $("#icemegamenu");
    if (!container.is(e.target)
      && container.has(e.target).length === 0)
    {
      $('.home_menu .icemegamenu').removeClass('active');
    }
  });
})(jQuery);
jQuery(function($){var e=$(window).width();$("#icemegamenu").find(".icesubMenu").each(function(a){var b=$(this).offset();var c=b.left+$(this).width();if(c>=e){$(this).addClass("ice_righttoleft")}});$(window).resize(function(){var d=$(window).width();$("#icemegamenu").find(".icesubMenu").removeClass("ice_righttoleft").each(function(a){var b=$(this).offset();var c=b.left+$(this).width();if(c>=d){$(this).addClass("ice_righttoleft")}})})});
</script>





<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script type="text/javascript" src="plugins/system/t3/base-bs3/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here or use T3 Injection feature -->

  <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
