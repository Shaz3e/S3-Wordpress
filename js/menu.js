$(function() {
	$('.dcToggleNav a').on('click', function(e) {
		e.preventDefault();
		var body = $('body');
		var nav = $('nav');
		var menu = $('#dcToggleNav');
		
		if(body.hasClass('dc-body-show')) {
			body.removeClass('dc-body-show');
		} else {
			body.addClass('dc-body-show');
		}
		
		if(nav.hasClass('dc-nav-show')) {
			nav.removeClass('dc-nav-show');
		} else {
			nav.addClass('dc-nav-show');
		}
		
		if(menu.hasClass('dc-menu-show')) {
			menu.removeClass('dc-menu-show').addClass('dcToggleNav');
		} else {
			menu.addClass('dc-menu-show').removeClass('dcToggleNav');
		}
	
		
	});
});
