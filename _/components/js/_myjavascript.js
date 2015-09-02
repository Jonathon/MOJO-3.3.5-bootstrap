// this file is for my unique javascript code

//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn('500');
	}, function() {
		$('.dropdown-menu', this).fadeOut('1000');
	});



}); 
//jQuery is loaded