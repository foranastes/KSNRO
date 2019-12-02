$("#Glide").glide({
        type: "carousel",
		autoplay: 6500,
		animationDuration: 700,
		hoverpause: true,
  		keyboard: false,
		beforeTransition: function () {
			$('.slideh').removeAttr('style');
		} ,
		afterInit: function () {
			$(".slideh").delay(1000).fadeIn('slow',function(){
  $(this).animate({'left': '+=50px'},'slow');
});
		} ,
		afterTransition: function () {
			$(".slideh").fadeIn('slow',function(){
  $(this).animate({'left': '+=50px'},'slow');
});
		}
			
    });