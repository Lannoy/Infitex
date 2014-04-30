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

	$('.prestations_img').mouseenter(function() {
		$(this).animateRotate(360, 800);
	});

	/* Fixation de la barre de navigation en haut de page quand l'élement est en haut de fenêtre*/
	jQuery(function($) {
	    $(window).scroll(function(e) {
    	var winSc = $(window).scrollTop(),
    		fixbaranchor = $('#fixbar-anchor').offset().top,
    		fixbar = $('#fixbar');

    		if (winSc > fixbaranchor) { /* Si l'élément est en haut de page */
    			if ($(window).width() >= 568) {
    				$('#link1').css({
    					'margin-top': '165px'
    				});
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
    				$('#link1').css({
    					'margin-top': '50px'
    				});
	    			$('h6', fixbar).show();
    			}
    		}
	    });
	});
});

/* Rotations des images, partie prestations */
$.fn.animateRotate = function(angle, duration, easing, complete) {
    return this.each(function() {
        var $elem = $(this);

        $({deg: 0}).animate({deg: angle}, {
            duration: duration,
            easing: easing,
            step: function(now) {
                $elem.css({
                    transform: 'rotate(' + now + 'deg)'
                });
            },
            complete: complete || $.noop
        });
    });
};

/* Lorsqu'on clique sur un élement de la barre de navigation,
on scrolle jusqu'à la section correspondante */
function scrollonSection(iterator) {
	var idSection = '#link' + iterator;

	var scroll = $(idSection).offset().top;
	if ($(window).width() >= 568) {		/* Si la window dépasse cette taille, la barre est fixe,
											on prend sa hauteur en compte */
		scroll -= $('#fixbar').height()
	}
	$('html, body').animate({
		scrollTop: scroll
	}, 1000);
}
