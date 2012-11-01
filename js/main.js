var po = {};
po.functions = {};
po.constants = {};

po.constants.sitename = 'http://profoffice.dev/';

po.functions.img_seo_placeholder_resize = function($img){
  if($img[0] !== undefined){
    var $this = jQuery($img[0]),
        $parent = $this.parent('.dyn_bg_wr'),
        W = $parent.width(),
        H = $parent.height(),
        R = W/H;
    if(R>1){
      $this.width(W);
      $this.css({
        'margin-top' : (Math.round((H - $this.height())/2)) + 'px'
      });
    } else {
      $this.height(H);
      $this.css({
        'margin-left' : (Math.round((W - $this.width())/2)) + 'px'
      });
    }
  }
};

po.functions.img_seo_placeholder = function(){
  jQuery('.img_seo_placeholder').each(function(){
    var $this = jQuery(this);
    if(jQuery('.lt-ie9').size()){
      console.log('ie8');
      po.functions.img_seo_placeholder_resize($this);
    } else {
      $this.parent('.dyn_bg_wr').css({'background-image' : 'url(' + $this.attr('src') + ')'});
      $this.remove();
    }
  });
};

po.functions.prepare_menu = function(){
  jQuery('#main_nav_wr a').each(function(){
    var $this = jQuery(this),
        _href = $this.attr('href'),
        $parent = $this.parent('li');

    if($this.next('ul').size()){
      $parent.addClass('has_sub');
    }

    if(_href == '#'){
      $parent.attr('rel',$this.text().toLowerCase());
    } else {
      $parent.attr('rel',_href.toLowerCase());
    }
  });

  var base_url = window.location.href.split(po.constants.sitename);

  if(base_url[1].length){
    var _path = base_url[1].split('/'),
        size = _path.length;

    jQuery('li[rel="/'+_path[0]+'"]').addClass('breadcrumb');

    if(size > 1){
      jQuery('li[rel="/'+_path[0]+'/'+_path[1]+'"]').addClass('breadcrumb');
    }

    if(size > 2){
      jQuery('li[rel="/'+_path[0]+'/'+_path[1]+'/'+_path[2]+'"]').addClass('breadcrumb');
    }

  }

};

po.functions.manage_menu = function(){
  jQuery('#main_nav_wr a').bind('click',function(e){
    // e.preventDefault();
    var $this = jQuery(this),
        _href = $this.attr('href'),
        $parent = $this.parent('li'),
        $parents = $this.parents('li'),
        _deep = $parents.size()-1,
        _has_sub = $parent.hasClass('has_sub');

    $this.blur();

    if(_has_sub){
      switch(_deep){
        case 0:
          e.preventDefault();
          $parent.toggleClass('clicked');
        break;
        case 1:
          e.preventDefault();
          if ($parent.hasClass('clicked')) {
            $parent.removeClass('clicked');
          } else {
            $parent.siblings().removeClass('clicked');
            $parent.addClass('clicked');
          }
        break;
        case 2:
          e.preventDefault();
          console.log('sub sub');
        break;
      }
    }
  });
};

po.functions.set_custom_scroll_pane = function(){
  jQuery('.scroll-pane').jScrollPane({
    hideFocus: true
  });
};

jQuery(document).bind('ready',function(){
  jQuery.each(po.functions, function(){
    this(document);
  });
});

jQuery(window).bind('resize',function(){
  po.functions.img_seo_placeholder();
});
