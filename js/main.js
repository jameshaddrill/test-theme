
var init = function() {
	mobileNavInit();
};

$(window).load(init);

var resizeTimer;

$(window).on('resize', function(e) {

  	clearTimeout(resizeTimer);
  	resizeTimer = setTimeout(function() {
    	mobileNavInit();
  	}, 250);
});

var mobileNavInit = function() {
	if ($(window).width() < 660) {
		$('#primary-menu .menu-item-has-children > a').on('click', function() {
			$('.sub-menu').hide();
			$(this).parent('.menu-item-has-children').find('.sub-menu').toggle();
			console.log('test');
			return false;
		});
	}
};