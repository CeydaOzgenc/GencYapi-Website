"use strict";

var liza_window = jQuery(window);
jQuery(document).ready(function () {
    liza_theme_setup();
    if (jQuery('.liza_js_bg_image').length > 0) {
        jQuery('.liza_js_bg_image').each(function () {
            jQuery(this).css('background-image', 'url(' + jQuery(this).attr('data-src') + ')');
        });
    }
	jQuery('.liza_back_to_top').attr('data-bottom', parseInt(jQuery('.liza_back_to_top').css('bottom'), 10));
	liza_window.on('scroll', function(){
	});
});
function liza_theme_setup() {
	if (jQuery('.liza_aside_menu_wrapper').length > 0 && liza_window.width() > 960) {
		var liza_main_level = jQuery('.liza_aside_menu_wrapper').find('.liza_menu').children('li'),
			liza_sub_level1 = liza_main_level.children('ul'),
			liza_sub_level1_li = liza_main_level.children('ul').children('li'),
			liza_sub_level2 = liza_sub_level1_li.children('ul'),
			liza_sub_level2_li = liza_sub_level2.children('li'),
			liza_nav_width = jQuery('.liza_main_nav').width(),
			set_w1 = Math.floor(liza_nav_width*0.35),
			set_w2 = Math.floor(liza_nav_width*0.22),
			set_space = Math.floor(liza_nav_width*0.09);
			
		liza_main_level.width(set_w1);
		liza_sub_level1.width(set_w2).css('left', set_w1 + 'px').css('padding-left', set_space + 'px');
		liza_sub_level2.width(set_w2).css('left', set_w2 + 'px').css('padding-left', set_space + 'px');
	}
}
var	html = jQuery('html'),
	liza_albums_slider = jQuery('.liza_albums_slider_inner'),
	liza_albums_slider_wrapper = jQuery('.liza_albums_slider_wrapper'),
	liza_albums_slider_thumbs = jQuery('.liza_albums_slider_thumbs'),
	liza_albums_slider_thumbs_1 = jQuery('.liza_albums_slider_thumbs_1'),
	liza_albums_slider_thumbs_inner = jQuery('.liza_albums_slider_thumbs_inner'),
	liza_albums_slider_counter = jQuery('.liza_albums_slider_counter'),
	liza_albums_slider_cur_count = jQuery('.liza_albums_current_counter'),
	liza_albums_all_counter = jQuery('.liza_albums_all_counter');

var lastChange = +new Date();

jQuery(document).ready(function() {
	liza_aslider_setup();
	liza_aslider_setSlide(1);
	jQuery('.liza_albums_thumb').on('click',function(){
		liza_aslider_setSlide(jQuery(this).attr('data-count'));
	});
function liza_aslider_setup() {
	liza_albums_slider_thumbs_inner.removeClass('centered_thumbs');
	if (liza_albums_slider_thumbs_inner.height() < jQuery('.liza_albums_slider_thumbs').height()) {
		liza_albums_slider_thumbs_inner.addClass('centered_thumbs');
	}
}
function liza_aslider_setup() {
	liza_albums_slider_thumbs_inner.removeClass('centered_thumbs');
	if (liza_albums_slider_thumbs_inner.height() < jQuery('.liza_albums_slider_thumbs_1').height()) {
		liza_albums_slider_thumbs_inner.addClass('centered_thumbs');
	}
}
var thumbs_top = 0,
		thumbs_obj = jQuery('.liza_albums_slider_thumbs_inner'),
		thumbs_obj_parent = jQuery('.liza_albums_slider_thumbs_wrapper'),
		thumbs_ground = thumbs_obj_parent.height() - thumbs_obj.height(),
		thumbs_step = -200,
		deltaY = 0;
});
function liza_aslider_setSlide(slideNum) {
	var	slideNum = parseInt(slideNum, 10);

	liza_albums_slider.find('.current-thmb').removeClass('current-thmb');
	
	liza_albums_slider.find('.prev-slide').removeClass('prev-slide');
	liza_albums_slider.find('.current-slide').removeClass('current-slide');
	liza_albums_slider.find('.next-slide').removeClass('next-slide');

	var liza_max_slide = liza_albums_slider.find('.liza_albums_slide').length;
	
	if((parseInt(slideNum, 10)+1) > liza_max_slide) {
		var	nextSlide = liza_albums_slider.find('.liza_albums_slide1');
	} else if ((parseInt(slideNum, 10)+1) == liza_max_slide){
		var	nextSlide = liza_albums_slider.find('.liza_albums_slide'+liza_max_slide);
	} else {
		var	nextSlide = liza_albums_slider.find('.liza_albums_slide'+(parseInt(slideNum, 10)+1));
	}
	
	if((parseInt(slideNum, 10)-1) < 1) {
		var	prevSlide = liza_albums_slider.find('.liza_albums_slide'+liza_max_slide);
	} else if ((slideNum-1) == 1){
		var	prevSlide = liza_albums_slider.find('.liza_albums_slide1');
	} else {
		var	prevSlide = liza_albums_slider.find('.liza_albums_slide'+(parseInt(slideNum, 10)-1));
	}

	prevSlide.addClass('prev-slide');
	var curSlide = liza_albums_slider.find('.liza_albums_slide'+slideNum),
	uzunluk = ('.liza_albums_slide').length ;
	
	curSlide.addClass('current-slide');
	nextSlide.addClass('next-slide');
	
	if (!prevSlide.hasClass('was_showed')) {
		prevSlide.addClass('was_showed');
	}
	if (!curSlide.hasClass('was_showed')) {
		curSlide.addClass('was_showed');
	}
	if (!nextSlide.hasClass('was_showed')) {
		nextSlide.addClass('was_showed');
	}	
	if (slideNum < 10) slideNum = '0' + slideNum;
	liza_albums_slider_cur_count.text(slideNum);
	liza_albums_all_counter.text(liza_max_slide);
	
}




