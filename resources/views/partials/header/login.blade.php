<title>Login form</title>
<link href="templates/theme3557/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
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
<script type="application/json" class="joomla-script-options new">{"csrf.token":"f1b06bcbd7dbcee4e5279ebeba05672c","system.paths":{"root":"\/joomla_prod-13901_v1","base":"\/joomla_prod-13901_v1"},"system.keepalive":{"interval":300000,"uri":"\/joomla_prod-13901_v1\/index.php\/component\/ajax\/?format=json"}}</script>
<script src="media/system/js/core.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<!--[if lt IE 9]><script src="media/system/js/polyfill.event.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script><![endif]-->
<script src="media/system/js/keepalive.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="media/jui/js/jquery.min.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="media/jui/js/jquery-noconflict.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="media/jui/js/jquery-migrate.min.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/bootstrap/js/bootstrap.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="templates/theme3557/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="templates/theme3557/js/additional-methods.min.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="media/system/js/html5fallback.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script><![endif]-->
<script src="media/jui/js/chosen.jquery.min.js?168c1d0d02a12ac3c9a4a0f2e53376a1" type="text/javascript"></script>
<script src="templates/theme3557/js/script.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/jquery.tap.min.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/script.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/menu.js" type="text/javascript"></script>
<script src="plugins/system/t3/base-bs3/js/nav-collapse.js" type="text/javascript"></script>
<script src="templates/theme3557/html/mod_icemegamenu/js/menu.js" type="text/javascript" defer="defer"></script>
<script src="templates/theme3557/html/mod_icemegamenu/js/jquery.rd-navbar.js" type="text/javascript" defer="defer"></script>
<script type="text/javascript">
jQuery(document).bind("ready",function(){validator=jQuery("#login-form").validate({wrapper:"mark"})});
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
