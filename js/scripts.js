(function ($, root, undefined) {
	
	$(function () {
		'use strict';
		
		$('.plus-icon').hover(function(){
			var data=$(this).attr('data');
			$('[data-open="'+data+'"]').addClass('data-show');
			$(this).parents('.sec').addClass('data-visible');
		});
		//number counter desktop
		$('.number').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});




		var advtop= $('#advertisers .plus-icon').offset().top;
		var advleft= $('#advertisers .plus-icon').offset().left;
$('#advertisers  .labels').on('mousemove', function(e){


    $('#advertisers .plus-icon').css('top', e.pageY);
    $('#advertisers .plus-icon').css('left', e.pageX);
 $('#advertisers .plus-icon').css('position', 'absolute');
});
$('#advertisers  .labels').on('mouseleave', function(e){
    $('#advertisers .plus-icon').css('top', advtop);
    $('#advertisers .plus-icon').css('left', advleft);
 $('#advertisers .plus-icon').css('position', 'absolute');

});





var afftop= $('#affiliates .plus-icon').offset().top;
var affleft= $('#affiliates .plus-icon').offset().left;
$('#affiliates  .labels').on('mousemove', function(e){


$('#affiliates .plus-icon').css('top', e.pageY);
$('#affiliates .plus-icon').css('left', e.pageX);
$('#affiliates .plus-icon').css('position', 'absolute');
});
$('#affiliates  .labels').on('mouseleave', function(e){
$('#affiliates .plus-icon').css('top', afftop);
$('#affiliates .plus-icon').css('left', affleft);
$('#affiliates .plus-icon').css('position', 'absolute');

});
	});
	
})(jQuery, this);
