
var init = function() {
	mobileNavInit();
	$('#tabs').tabs({
		active: 0
	});
};

$(window).load(init);

var resizeTimer;

$(window).on('resize', function(e) {

  	clearTimeout(resizeTimer);
  	resizeTimer = setTimeout(function() {
    	mobileNavInit();
  	}, 250);

	$('#home-banner').css("background-size", 'cover');

});

var mobileNavInit = function() {
	if ($(window).width() < 660) {
		$('#primary-menu .menu-item-has-children > a').on('click', function() {
			$('.sub-menu').hide();
			$(this).parent('.menu-item-has-children').find('.sub-menu').toggle();
			return false;
		});
	}
};
