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

	/* Fixation de la barre de navigation en haut de page quand l'élement est en haut de fenêtre*/
	jQuery(function($) {
	    $(window).scroll(function(e) {
    	var winSc = $(window).scrollTop(),
    		fixbaranchor = $('#fixbar-anchor').offset().top,
    		fixbar = $('#fixbar');

    		if (winSc > fixbaranchor) { /* Si l'élément est en haut de page */
    			if ($(window).width() >= 568) {
	    			fixbar.css({
	    				'position': 'fixed', /* On fixe sa position */
	    			});
	    			$('h6', fixbar).hide(); 				
	    		}
    		}
    		else {
    			fixbar.css({
    				'position' : 'relative'
    			});
    			if ($(window).width() >= 568) {
	    			$('h6', fixbar).show();
    			}
    		}
	    });
	});
});

/* Lorsqu'on clique sur un élement de la barre de navigation,
on scrolle jusqu'à la section correspondante */
function scrollonSection(iterator) {
	var idSection = '#link' + iterator;

	$('html, body').animate({
		scrollTop: $(idSection).offset().top
	}, 1000);

	if ($(window).width() >= 568) {
		$('#fixbar').css({
			'position': 'fixed', /* On fixe sa position */
		});
		$('h6', '#fixbar').hide();	
	}
}
