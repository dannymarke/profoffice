var po = {};
po.functions = {};
po.constants = {};

po.constants.sitename = 'http://profoffice.dev/';
// po.constants.sitename = 'http://192.168.1.5/';

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
      // console.log('ie8');
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
          // console.log('sub sub');
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



// SLIDESHOW

po.functions.set_slideshow_size = function(){
  var $ssw = jQuery('#main_slideshow_wr'),
      _w   = $ssw.width(),
      $ssl = jQuery('#main_slideshow_list'),
      $sld = $ssl.find('li'),
      nsld = $sld.size();
  $ssl.width(nsld*_w);
  $sld.width(_w);
};

po.functions.set_slideshow_navigation = function(){

  /* gestisco il keydown da tastiera per azionare la navigazione con le frecce dx e sx della tastiera */
  var event2key = {
      '37' : 'left',
      '39' : 'right',
      '38' : 'up',
      '40' : 'down',
      '13' : 'enter',
      '27' : 'esc',
      '32' : 'space',
      '107' : '+',
      '109' : '-',
      '33' : 'pageUp',
      '34' : 'pageDown'
  }, e2key = function(e) {
      return event2key[(e.which || e.keyCode)] || '';
  }, pageKey = function(e) {
      switch(e2key(e)) {
          case 'left':
              if(jQuery('#prev_control:visible')) {
                jQuery('#prev_control').trigger('click');
              }
              break;
          case 'right':
              if(jQuery('#next_control:visible')) {
                jQuery('#next_control').trigger('click');
              }
              break;
          case 'esc':
              if(jQuery('#close_control:visible')) {
                jQuery('#close_control').trigger('click');
              }
              break;
      }
  }, captEvt = function(e) {
      e = e || window.event;
      /* catturo correttamente l'evento anche per IE */
      pageKey(e);
  };

  document.onkeydown = captEvt;



  if(jQuery('#main_slideshow_list li').size() > 1){

    // arrow navigation: prev
    jQuery('#prev_control').bind('click',function(e){
      e.preventDefault();

      var $this   = jQuery(this),
          $ssw    = jQuery('#main_slideshow_wr'),
          _w      = $ssw.width(),
          $ssl    = jQuery('#main_slideshow_list'),
          $sld    = $ssl.find('li'),
          nsld    = $sld.size(),
          cur_ind = jQuery('#pic_nav_wr a.current').index();

      if (cur_ind == nsld-1) {
        jQuery('#next_control').show();
      }

      if( cur_ind > 0 ){
        jQuery('#pic_nav_wr a.current').removeClass('current');
        jQuery('#pic_nav_wr a').eq(--cur_ind).addClass('current');

        var $cur_img = $sld.eq(cur_ind).find('img');

        if($cur_img.css('background-image')==='none'){
          $cur_img.css({
            'background-image' : 'url("' + $cur_img.attr('rel') + '")'
          });
        }

        if(Modernizr.csstransitions){
          $ssl.css({
            'left' : (-cur_ind*_w)+'px'
          });
        } else {
          $ssl.animate({
            'left' : (-cur_ind*_w)+'px'
          });
        }

        // console.log(cur_ind + ' / ' + nsld);

        if (cur_ind === 0) {
          $this.hide();
        }
      }

    });

    // arrow navigation: next
    jQuery('#next_control').bind('click',function(e){
      e.preventDefault();

      var $this   = jQuery(this),
          $ssw    = jQuery('#main_slideshow_wr'),
          _w      = $ssw.width(),
          $ssl    = jQuery('#main_slideshow_list'),
          $sld    = $ssl.find('li'),
          nsld    = $sld.size(),
          cur_ind = jQuery('#pic_nav_wr a.current').index();

      if (cur_ind === 0) {
        jQuery('#prev_control').show();
      }

      if( cur_ind < nsld-1 ){
        jQuery('#pic_nav_wr a.current').removeClass('current');
        jQuery('#pic_nav_wr a').eq(++cur_ind).addClass('current');

        var $cur_img = $sld.eq(cur_ind).find('img');
        if($cur_img.css('background-image')==='none'){
          $cur_img.css({
            'background-image' : 'url("' + $cur_img.attr('rel') + '")'
          });
        }


        if(Modernizr.csstransitions){
          $ssl.css({
            'left' : (-cur_ind*_w)+'px'
          });
        } else {
          $ssl.animate({
            'left' : (-cur_ind*_w)+'px'
          });
        }

        if (cur_ind == nsld-1) {
          $this.hide();
        }
      }

    });
  } else {
    jQuery('#prev_control, #next_control').remove();
  }

  // close control
  jQuery('#close_control').bind('click',function(e){
    e.preventDefault();
    jQuery('#main_slideshow_wr').hide();
    jQuery('#pic_nav_wr a.current').removeClass('current');
    jQuery('#next_control').show();
    jQuery('#prev_control').show();
  });

  // icon navigation
  jQuery('#pic_nav_wr a').bind('click',function(e){
    e.preventDefault();

    var $this    = jQuery(this),
        cur_ind  = $this.index(),
        $ssw     = jQuery('#main_slideshow_wr'),
        _w       = $ssw.width(),
        $ssl     = jQuery('#main_slideshow_list'),
        $sld     = $ssl.find('li'),
        nsld     = $sld.size(),
        $cur_img = $sld.eq(cur_ind).find('img');

    jQuery('#pic_nav_wr a.current').removeClass('current');
    $this.addClass('current');

    if(Modernizr.csstransitions){
      $ssl.css({
        'left' : (-cur_ind*_w)+'px'
      });
    } else {
      $ssl.animate({
        'left' : (-cur_ind*_w)+'px'
      });
    }

    if(cur_ind === 0){
      jQuery('#prev_control').hide();
    }

    if(cur_ind === nsld-1){
      jQuery('#next_control').hide();
    }

    $cur_img.css({
      'background-image' : 'url("' + $cur_img.attr('rel') + '")'
    });

    $ssw.show();
  });


  // touch support
  jQuery('#main_slideshow_wr').swipe({
    swipeLeft:function(event, direction, distance, duration, fingerCount) {
      if(jQuery('#next_control:visible')) {
        jQuery('#next_control').trigger('click');
      }
    },
    swipeRight:function(event, direction, distance, duration, fingerCount) {
      if(jQuery('#prev_control:visible')) {
        jQuery('#prev_control').trigger('click');
      }
    },
    threshold:20
  });

};

jQuery(document).bind('ready',function(){
  jQuery.each(po.functions, function(){
    this(document);
  });
});

jQuery(window).bind('resize',function(){
  po.functions.img_seo_placeholder();
  po.functions.set_slideshow_size();
});
