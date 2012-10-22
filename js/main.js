var po = {};
po.functions = {};

po.functions.img_seo_placeholder = function(){
  jQuery('.img_seo_placeholder').each(function(){
    var $this = jQuery(this);
    $this.parent('.dyn_bg_wr').css({'background-image' : 'url(' + $this.attr('src') + ')'});
    $this.remove();
  });
};

po.functions.init = function(){
  po.functions.img_seo_placeholder();
};

jQuery(document).bind('ready',function(){
  jQuery.each(po.functions, function() {
      this(document); // context
    });
});