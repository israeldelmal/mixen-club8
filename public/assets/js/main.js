$('.item-menu').on('click', function(event) {
	event.preventDefault();
	let Item = $(this).attr('href');
	
	if ($(window).width() > 1030) {
		$('body, html').stop(true, true).animate({
			scrollTop: $(Item).offset().top - 100
		}, 1000);
	} else {
		$('body > button > span').removeClass('active-button');
		$('body > nav').removeClass('active-nav');
		$('body, html').stop(true, true).animate({
			scrollTop: $(Item).offset().top
		}, 1000);
	}
});

$('body > button').on('click', function(event) {
	event.preventDefault();
	$('body > button > span').toggleClass('active-button');
	$('body > nav').toggleClass('active-nav');
});

$('#galeria > section > figure > a').on('click', function(event) {
	event.preventDefault();
	let Image = $(this).attr('data-image');
	$('#ImageModal').html('<img src="' + Image + '">');

	$('.modal').fadeIn('normal');
});

$('.modal > a').on('click', function(event) {
	event.preventDefault();
	$('.modal').fadeOut('normal');
});

$('#FormContact').on('submit', function(event) {
	event.preventDefault();
	$(this).find('#name').val('');
	$(this).find('#tel').val('');
	$(this).find('#email').val('');
	$(this).find('#message').val('');
	alert('Gracias por contactarnos, nos pondremos en contacto a la brevedad.');
});