(function ($, root, undefined) {
	
	$(function () {
		'use strict';
		
		$('.plus-icon').hover(function(){
			var data=$(this).attr('data');
			$('[data-open="'+data+'"]').addClass('data-show');
			$(this).parents('.sec').addClass('data-visible');
		});
		
	});
	
})(jQuery, this);
