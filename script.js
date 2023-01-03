$( document ).ready(function() {
  $('.order_btn').on('click', function() {
      $('.modal-wrapper').toggleClass('open');
      $('.lead_form').toggleClass('blur-it');
      return false;
  });
  $('.head').on('click', function (){
      $('.modal-wrapper').removeClass('open');
  })
});

$( document ).ready(function() {
  $('.navbar-toggle_mm').on('click', function() {
      $('.nav-bar_mm').toggleClass('open');
      $('.lead_form').toggleClass('blur-it');
      return false;
  });
  $('.close_mm').on('click', function (){
      $('.nav-bar_mm').removeClass('open');
  })
});

$(document).ready(function($) {
	(function fixedMenu() {
		const headerOffsetTop = $('.header-bottom').offset().top;
		$(window).scroll(function () {
			if ($(this).scrollTop() > headerOffsetTop) {
				$('.header-sticky').addClass('sticky_mm');
			} else {
				$('.header-sticky').removeClass('sticky_mm');
			}
		});
	})();
	});
