function slideIn(element, elemPos){
	element.each(function(){
		var position = $(this).offset().top;
		if(position < elemPos + 600){
			$(this).addClass('animate');
		}
	});
}

function fixedMenu(element, elemPos){
		element.each(function(){
			if(elemPos > 84){
				$('.main_nav').addClass('fixed');
			} else {
				$('.main_nav').removeClass('fixed');
			}
		});

}

function scrollToTop(element, elemPos){
	if(elemPos > 300){
		element.addClass('show_to_top');
	} else {
		element.removeClass('show_to_top');
	}
}

$(document).scroll(function(){
		var addAnimation = $('.to_animate'),
			top = $(window).scrollTop(),
			toTop = $('.scroll_to_top'),
			menu = $('.header');
		

	slideIn(addAnimation, top);
	fixedMenu(menu, top);
	scrollToTop(toTop, top);
});

function carousel(){
	var next = $('#next'),
		prev = $('#prev'),
		liWidth = $('.opinion_box_carousel').find('li').outerWidth(true);
		box = $('.opinion_box_carousel');

		next.click(function(event) {
			box.animate({'right': liWidth + 'px'}, 'slow');
		});

		prev.click(function(event) {
			box.animate({'right': 0}, 'slow');
		});
}

$(function() {
	var moveToTop = $("a[href='#top']"),
		elemnts = $('html , body');

	moveToTop.click(function(e) {
		e.preventDefault();
		elemnts.animate({scrollTop : 0}, 800);
	});
	carousel();
});
