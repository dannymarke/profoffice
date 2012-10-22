var po = {};
po.functions = {};
po.constants = {};

po.constants.sitename = 'http://profoffice.dev/';

po.functions.img_seo_placeholder = function(){
  jQuery('.img_seo_placeholder').each(function(){
    var $this = jQuery(this);
    $this.parent('.dyn_bg_wr').css({'background-image' : 'url(' + $this.attr('src') + ')'});
    $this.remove();
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

    jQuery('li[rel="/'+_path[0]+'"]').addClass('current');

    if(size > 1){
      jQuery('li[rel="/'+_path[0]+'/'+_path[1]+'"]').addClass('current');
    }

    if(size > 2){
      jQuery('li[rel="/'+_path[0]+'/'+_path[1]+'/'+_path[2]+'"]').addClass('current');
    }

  } else {
    // console.log('hp');
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

    if(_has_sub){
      jQuery('.current').removeClass('current').addClass('highlighted');
      jQuery('.opened').removeClass('opened');
      $parents.addClass('opened');
      switch(_deep){
        case 0:
          e.preventDefault();
        break;
        case 1:
          e.preventDefault();
        break;
        case 2:
          // e.preventDefault();
        break;
      }
    }
  });
};


jQuery(document).bind('ready',function(){
  jQuery.each(po.functions, function(){
    this(document);
  });
});