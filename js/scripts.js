(function ($, root, undefined) {
	var isMobile = window.matchMedia("only screen and (max-width: 992px)");

	$(function () {
		'use strict';
		$('.plus-icon').click(function(){
			$(this).hide();
			var data=$(this).attr('data');
			$('[data-open="'+data+'"]').addClass('data-show');
			$(this).parents('.sec').addClass('data-visible');
		});
		$('.close-icon').click(function(){
			
			$(this).parents('.adv-content').removeClass('data-show');
			$(this).parents('.sec').removeClass('data-visible');
			$(this).parents('.sec').find('.plus-icon').show();
		});

		if (!isMobile.matches) {
		//number counter desktop
		calcLeft();

		calcWidth();
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
	}else{

//number counter mobile
var i=1;
setInterval(function(){

$('.numbers>div').removeClass('number-turn');
$('.numbers>div:nth-of-type('+i+')').addClass('number-turn');
i++
if(i==4){
i=1;
}


}, 1000);
	}









/*		var advtop= $('#advertisers .plus-icon').offset().top;
		var advleft= $('#advertisers .plus-icon').offset().left;
$('#advertisers  .labels').on('mousemove', function(e){


    //$('#advertisers .plus-icon').css('top', e.pageY);
    //$('#advertisers .plus-icon').css('left', e.pageX);
 //$('#advertisers .plus-icon').css('position', 'absolute');
});
$('#advertisers  .labels').on('mouseleave', function(e){
    //$('#advertisers .plus-icon').css('top', advtop);
    //$('#advertisers .plus-icon').css('left', advleft);
 //$('#advertisers .plus-icon').css('position', 'absolute');
 $('[data-open="advertisers"]').removeClass('data-show');
 $(this).parents('.sec').removeClass('data-visible');

});





var afftop= $('#affiliates .plus-icon').offset().top;
var affleft= $('#affiliates .plus-icon').offset().left;
$('#affiliates  .labels').on('mousemove', function(e){


//$('#affiliates .plus-icon').css('top', e.pageY);
//$('#affiliates .plus-icon').css('left', e.pageX);
//$('#affiliates .plus-icon').css('position', 'absolute');
});
$('#affiliates  .labels').on('mouseleave', function(e){
//$('#affiliates .plus-icon').css('top', afftop);
//$('#affiliates .plus-icon').css('left', affleft);
//$('#affiliates .plus-icon').css('position', 'absolute');
$('[data-open="affiliates"]').removeClass('data-show');
$(this).parents('.sec').removeClass('data-visible');
});
*/
	});
	




// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
	  $('a').removeClass('current-sec');
	  $(this).addClass('current-sec');
	  $('.mobile-nav').removeClass('open-nav');
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
       //   $target.focus();
         // if ($target.is(":focus")) { // Checking if the target was focused
          //  return false;
         // } else {
           // $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
        //    $target.focus(); // Set focus again
          //};
        });
      }
    }
  });

  $('.desktop-nav .open').click(function(){
	$(this).parents('.desktop-nav').addClass('open-nav');
	
	});



  $('.desktop-nav .close').click(function(){
	$(this).parents('.desktop-nav').removeClass('open-nav');
	});



	$('.mobile-nav .open').click(function(){
		$(this).parents('.mobile-nav').addClass('open-nav');
		
		});
	
	
	
	  $('.mobile-nav .close').click(function(){
		$(this).parents('.mobile-nav').removeClass('open-nav');
		});




	var current=parseInt($('.next').attr('data'));
$('.next').click(function(){
	$('.about_sec').hide();
	current=current+1;
	$('[about='+current+']').fadeIn();
	if(current>1){
		$('.prev').fadeIn();
	}else{
        $('.prev').hide();
	}
	if(current>=3){
$('.next').hide();
}else{
$('.next').fadeIn();
}
	
});
$('.prev').click(function(){
$('.about_sec').hide();
current=current-1;
$('[about='+current+']').fadeIn();
	if(current>1){
		$('.prev').fadeIn();
	}else{
        $('.prev').hide();
	}
	if(current>=3){
$('.next').hide();
}else{
$('.next').fadeIn();
}
	
});


$(window).resize(function(){


	if (!isMobile.matches) {
		calcLeft();
		calcWidth();
	}
});


})(jQuery, this);


//left of for show sections 
function calcLeft(){
	var advLeft=$('#advertisers .sec-title').offset().left+$('#advertisers .sec-title').width()+28;
	var affLeft=$('#affiliates .sec-title').offset().left+$('#affiliates .sec-title').width()+28;
	var serLeft=$('#services .sec-title').offset().left+$('#services .sec-title').width()+28;
	$('#advertisers .adv-content').css('left',advLeft);
	$('#affiliates .adv-content').css('left',affLeft);
	$('#services .adv-content').css('left',serLeft);

}
//left of for show sections 
function calcWidth(){
	var advWidth=$('#advertisers .container').width()-$('#advertisers .labels').width()+28;
	var affWidth=$('#affiliates .container').width()-$('#affiliates .labels').width()+28;
	var affWidth=$('#services .container').width()-$('#services .labels').width()+28;
	$('#advertisers .adv-content').css('width',advWidth);
	$('#affiliates .adv-content').css('width',affWidth);
	$('#services .adv-content').css('width',affWidth);

}