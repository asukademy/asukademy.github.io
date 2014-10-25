jQuery(document).ready(function($) {

	// Logo
	var logo = $('.home .uk-navbar-brand img');

	if (logo) {
		logo.attr('src', 'media/img/asukademy-logo-horz-white.png');
	}

	// Table style
	var tables = $('table');

	tables.addClass('uk-table uk-table-striped');
});