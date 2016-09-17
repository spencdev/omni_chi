(function ($) {
  Drupal.behaviors.slicknav = {
    attach: function (context, settings) {
	  $('.block--system-main-menu ul.menu, .omni-chi-menu--main-menu').slicknav();
	}
  };
})(jQuery);
