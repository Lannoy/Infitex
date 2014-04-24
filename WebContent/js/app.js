$(document).foundation({
	orbit: {
		timer_speed: 3000,
		animation_speed: 100,
	}
});

$(document).ready(function() {
	$('.tab').mouseenter(function() {
		$('a', this).css({
			'color': '#31a3dd',
			'padding-top': '-=6px'
		});
		$(this).prepend('<div id=1></div>');
		$('#1').addClass('blue-band');
	});
	$('.tab').mouseleave(function() {
		$('a', this).css({
			'color': '#777777',
			'padding-top': '+=6px'
		});
		$('#1').remove();
	});

	$('.bloc').mouseenter(function() {
		var getSrc = $('img', this).attr('src');
		var newSrc = getSrc.replace('-g', '-b');

		$(this).css({
			'outline': '2px solid #4096d2'
		});
		$('img', this).attr('src', newSrc);
	});
	$('.bloc').mouseleave(function() {
		var getSrc = $('img', this).attr('src');
		var newSrc = getSrc.replace('-b', '-g');

		$(this).css({
			'outline': '2px solid #eeeeed'
		});
		$('img', this).attr('src', newSrc);
	});

	var annotationTitle;

	$('.actu').mouseenter(function() {
		annotationTitle = $(this).find('.annotation_wrap').text();
		$(this).find('.annotation_wrap').remove();
		$(this).append('<div class="actu_overview">\
							<h5 class="overview_title white_color"> Fin du support de Windows 8 le 8 Avril ! </h5>\
							<p class="overview_content white_color">\
								Microsoft a assuré le support de Windows XP pendant les 12 dernières années.\
								Il est temps désormais, pour nous et nos partenaires fabricants (...)\
							</p>\
							<a href="#" class="tiny radius button activity_detail_button">EN SAVOIR PLUS</a>\
						</div>');
	});
	$('.actu').mouseleave(function() {
		$(this).find('.actu_overview').remove();
		$(this).append('<div class="annotation_wrap">\
							<p class="annotation_title white_color">' + annotationTitle + '</p>\
						</div>');
	});
});