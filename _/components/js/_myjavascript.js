// this file is for my unique javascript code

//make menus drop automatically
	
$(function(){$("#home a:contains('Home')").parent().addClass("active");$("#about a:contains('About us')").parent().addClass("active");$("#Services a:contains('Services')").parent().addClass("active");$("#news a:contains('News')").parent().addClass("active");$("#register a:contains('Register')").parent().addClass("active");$("ul.nav li.dropdown").hover(function(){$(".dropdown-menu",this).fadeIn()},function(){$(".dropdown-menu",this).fadeOut("fast")})});	

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})