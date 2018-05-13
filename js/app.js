function slideIn(element, elemPos){
	element.each(function(){
		var position = jQuery(this).offset().top;
		if(position < elemPos + 600){
			jQuery(this).addClass('animate');
		}
	});
}

function fixedMenu(element, elemPos){
		element.each(function(){
			if(elemPos > 84){
				jQuery('.main_nav').addClass('fixed');
			} else {
				jQuery('.main_nav').removeClass('fixed');
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

jQuery(document).scroll(function(){
		var addAnimation = jQuery('.to_animate'),
			top = jQuery(window).scrollTop(),
			toTop = jQuery('.scroll_to_top'),
			menu = jQuery('.header');
		

	slideIn(addAnimation, top);
	fixedMenu(menu, top);
	scrollToTop(toTop, top);
});

function carousel(){
	var next = jQuery('#next'),
		prev = jQuery('#prev'),
		liWidth = jQuery('.opinion_box_carousel').find('li').outerWidth(true);
		box = jQuery('.opinion_box_carousel');

		next.click(function(event) {
			box.animate({'right': liWidth + 'px'}, 'slow');
		});

		prev.click(function(event) {
			box.animate({'right': 0}, 'slow');
		});
}

jQuery(function() {
	var moveToTop = jQuery("a[href='#top']"),
		elemnts = jQuery('html , body');

	moveToTop.click(function(e) {
		e.preventDefault();
		elemnts.animate({scrollTop : 0}, 800);
	});
    // carousel();
});
