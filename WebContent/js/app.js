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
	    		fixbaranchor = $('#fixbar-anchor').offset().top;
	    		fixbar = $('#fixbar');

	    		if (winSc > fixbaranchor) { /* Si l'élément est en haut de page */
	    			fixbar.css({
	    				'position': 'fixed', /* On fixe sa position */
	    				'top': 0,
	    				'width': '100%',
	    				'margin': 'auto'
	    			});
	    			$('h6', fixbar).css({ /* On enlève les textes */
	    				'display': 'none'
	    			});
	    		}
	    		else { /* Sinon */
	    			fixbar.css({
	    				'position' : 'relative'
	    			});
	    			$('h6', fixbar).css({
	    				'display': 'block'
	    			});
	    		}
	    });
	});
});

