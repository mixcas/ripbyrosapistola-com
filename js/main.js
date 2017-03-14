/* jshint browser: true, devel: true, indent: 2, curly: true, eqeqeq: true, futurehostile: true, latedef: true, undef: true, unused: true */
/* global $, jQuery, document, Site, Modernizr */

Site = {
  mobileThreshold: 601,
  init: function() {
    var _this = this;

    $(window).resize(function(){
      _this.onResize();
    });

    $(document).ready(function () {
      Site.Menu.init();
    });

  },

  onResize: function() {
    var _this = this;

  },

  fixWidows: function() {
    // utility class mainly for use on headines to avoid widows [single words on a new line]
    $('.js-fix-widows').each(function(){
      var string = $(this).html();
      string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
      $(this).html(string);
    });
  },
};

Site.Menu = {
  init: function() {
    var _this = this;

    _this.$body = $('body');
    _this.$menu = $('#mobile-menu');
    _this.$toggle = $('.menu-toggle');

    _this.bind();
  },

  bind: function() {
    var _this = this;

   _this.$toggle.on('click', function(e) {
    e.preventDefault();
    _this.$menu.toggleClass('active');
    _this.$body.toggleClass('mobile-menu');
   });
  },
};

Site.Share = {
  onFB: function() {
    if( typeof FB !== undefined) {
      FB.ui({
        method: 'share',
        href: document.URL,
      }, function(response){});
    }
  },
  onTW: function(){
    window.open("https://twitter.com/intent/tweet?url="+encodeURIComponent(document.URL)+"&text="+encodeURIComponent(document.title)+ "&count=none/", "", "height=300, width=550, resizable=1");
    return true;
  }
};

Site.init();
