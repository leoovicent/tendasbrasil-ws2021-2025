uebbFloatingBox = function() {
  var limitMobile = 992;
  var winWidth = jQuery(window).width();
  if (winWidth < limitMobile) { return }

  var offsetStart   = 130
  var widthBox      = jQuery('.uebb-floating-box').innerWidth()
  var topOffset     = jQuery('.uebb-floating-box').offset().top;
  var leftOffset    = jQuery('.uebb-floating-box').offset().left;
  var bottomOffset  = jQuery('.uebb-floating-box').height() + topOffset;
  var contentHeight = jQuery('.uebb-floating-content').height();
  var scrollTop     = jQuery(window).scrollTop();

  bottomOffset      = bottomOffset - contentHeight - (offsetStart + 40);
  topOffset         = topOffset - offsetStart;
  var topAbsFix     = bottomOffset - topOffset;

  if(scrollTop < topOffset) {
    jQuery('.uebb-floating-content').removeClass('uebb-floating-current-fix');
    jQuery('.uebb-floating-content').removeClass('uebb-floating-fix');
    jQuery('.uebb-floating-content').css('width', '');
    jQuery('.uebb-floating-content').css('left', '');
    jQuery('.uebb-floating-content').css('top', '');
  }

  if(scrollTop > topOffset && scrollTop < bottomOffset) {
    jQuery('.uebb-floating-content').addClass('uebb-floating-current-fix');
    jQuery('.uebb-floating-content').addClass('uebb-floating-fix').css('left', leftOffset);
    jQuery('.uebb-floating-content').css('width', widthBox);
    jQuery('.uebb-floating-content').css('left', leftOffset);
    jQuery('.uebb-floating-content').css('top', '');
  }

  if(scrollTop >= bottomOffset && scrollTop > topOffset) {
    jQuery('.uebb-floating-content').removeClass('uebb-floating-current-fix');
    jQuery('.uebb-floating-content').addClass('uebb-floating-fix');
    jQuery('.uebb-floating-content').css('width', '');
    jQuery('.uebb-floating-content').css('left', 0);
    jQuery('.uebb-floating-content').css('top', topAbsFix);
  }
}

jQuery('document').ready(function(){
  if(jQuery('.uebb-floating-box').length){
    uebbFloatingBox();
    jQuery(window).scroll(uebbFloatingBox);
  }
});
