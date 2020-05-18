var visibleOrNo=0;
jQuery(document).ready(function () {
  jQuery("#s-button-menu").on('click',function() {
    if (jQuery("#site-navigation").is(':hidden')) {
      visibleOrNo=1;
    } else {
      visibleOrNo=0;
    }
    setTimeout(function(){
      if (visibleOrNo) {
        jQuery("#site-navigation").show(400);
      } else {
        jQuery("#site-navigation").hide(400);
      }
    },200);
  });
});













