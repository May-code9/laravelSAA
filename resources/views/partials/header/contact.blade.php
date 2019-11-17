<title>Contact Us</title>
<link href="index.php/component/search/?Itemid=101&amp;format=opensearch" rel="search" title="Search EduX" type="application/opensearchdescription+xml" />
<link href="templates/theme3557/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="modules/mod_tm_ajax_contact_form/css/style.css" rel="stylesheet" type="text/css" />
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
<script src="modules/mod_tm_ajax_contact_form/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="modules/mod_tm_ajax_contact_form/js/additional-methods.min.js" type="text/javascript"></script>
<script src="modules/mod_tm_ajax_contact_form/js/autosize.min.js" type="text/javascript"></script>
<script src="modules/mod_tm_ajax_contact_form/js/moment.js" type="text/javascript"></script>
<script src="modules/mod_tm_ajax_contact_form/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="modules/mod_tm_ajax_contact_form/js/ajaxsendmail.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/bootstrap/js/bootstrap.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="media/jui/js/chosen.jquery.min.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="templates/theme3557/js/script.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/jquery.tap.min.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/script.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/menu.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/nav-collapse.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="media/system/js/html5fallback.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script><![endif]-->
<script src="modules/mod_tm_google_map/js/mod_tm_google_map.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=&sensor=false&libraries=geometry,places&v=3.7" type="text/javascript"></script>
<script src="templates/theme3557/html/mod_icemegamenu/js/menu.js" type="text/javascript" defer="defer"></script>
<script src="templates/theme3557/html/mod_icemegamenu/js/jquery.rd-navbar.js" type="text/javascript" defer="defer"></script>
<script type="text/javascript">
;(function($){$(document).ready(function(){autosize($("textarea")); $(".no-edit").closest(".moduletable").addClass("no-edit");})})(jQuery);
                jQuery(document).ready(function($){
                  $(window).load(function() {
                      $(".timepicker_3_115").datetimepicker({
                        format: "hh:mm A",
                        icons: {
                                time: 'fa fa-clock-o',
                                date: 'fa fa-calendar',
                                up: 'fa fa-angle-up',
                                down: 'fa fa-angle-down',
                                previous: 'fa  fa-angle-left',
                                next: 'fa fa-angle-right',
                                today: 'fa fa-crosshairs',
                                clear: 'fa fa-trash',
                                close: 'fa fa-close'
                            }
                              });
                  });
                });
                jQuery(document).ready(function($){
                  $(window).load(function() {
                      $(".datepicker_4_115").datetimepicker({
                        format: "DD.MM.YYYY",
                        icons: {
                                time: 'fa fa-clock-o',
                                date: 'fa fa-calendar',
                                up: 'fa fa-angle-up',
                                down: 'fa fa-angle-down',
                                previous: 'fa  fa-angle-left',
                                next: 'fa fa-angle-right',
                                today: 'fa fa-crosshairs',
                                clear: 'fa fa-trash',
                                close: 'fa fa-close'
                            }
                              });
                  });
                });
(function($){$(document).ready(function(){var v=$("#contact-form_115").validate({wrapper:"mark",submitHandler:function(f){$(f).ajaxsendmail();return false}});$("#clear_115").click(function(){$("#contact-form_115").trigger("reset");v.resetForm();if(!$.support.placeholder){$(".mod_tm_ajax_contact_form *[placeholder]").each(function(n){$(this).parent().find(">.form_placeholder").show()})}return false});$("#message_5_115").rules("add", {minlength: 20});})})(jQuery);
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

;(function ($, undefined){

  $(window).on("load",function(){
    /**
     * isScrolledIntoView
     * @description  check the element whas been scrolled into the view
     */
    function isScrolledIntoView(elem) {

        return elem.offset().top + elem.outerHeight() >= $(window).scrollTop() && elem.offset().top <= $(window).scrollTop() + $(window).height();

    }

    /**
     * initOnView
     * @description  calls a function when element has been scrolled into the view
     */
    function lazyInit(element, func) {
      var $win = jQuery(window);

      $(document).ready(function(){
        if(element.offset().top < $(window).height()){
          var head = document.getElementsByTagName('head')[0],
          insertBefore = head.insertBefore;

          head.insertBefore = function (newElement, referenceElement) {
          if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') != -1 || newElement.innerHTML.indexOf('gm-style') != -1) {
            return;
          }
          insertBefore.call(head, newElement, referenceElement);
        };
          func.call();
          element.addClass('lazy-loaded');
        }
      });

      $win.on('load scroll', function () {
        if ((!element.hasClass('lazy-loaded') && (isScrolledIntoView(element)))) {
          var head = document.getElementsByTagName('head')[0],
          insertBefore = head.insertBefore;

          head.insertBefore = function (newElement, referenceElement) {
            if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') != -1 || newElement.innerHTML.indexOf('gm-style') != -1) {
              return;
            }
            insertBefore.call(head, newElement, referenceElement);
          };
          func.call();
          element.addClass('lazy-loaded');
        }
      });
    }



    var $googleMapItem = $("#mod_tm_google_map_269 .rd-google-map");

    lazyInit($googleMapItem, $.proxy(function () {
      var $this = $(this),
        styles = $this.attr("data-styles");

      $this.googleMap({
        marker: {
          basic: $this.data('marker'),
          active: $this.data('marker-active')
        },
        styles: [{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"on"}]}],
        onInit: function (map) {
          google.maps.event.addListener(map, 'tilesloaded', function(evt) {
            $("#mod_tm_google_map_269").addClass('map-loaded');
          });
        }
      });
    }, $googleMapItem));

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
