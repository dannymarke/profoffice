jQuery(document).bind('ready',function(){
    jQuery('.img_seo_placeholder').each(function(){
        var $this = jQuery(this);
        $this.parent('.dyn_bg_wr').css({'background-image' : 'url(' + $this.attr('src') + ')'});
        $this.remove();
    });
});
