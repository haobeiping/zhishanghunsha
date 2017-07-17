window.onload=function () {
	$(function(){

		$('#li_1,.hidden1').mouseover(function(){
			$('.hidden1').css('display','block');
		});
		$('#li_1,.hidden1').mouseout(function(){
			$('.hidden1').css('display','none');});

		$('.li_2,.hidden2').mouseover(function(){
			$('.hidden2').css('display','block');
		});
		$('.li_2,.hidden2').mouseout(function(){
			$('.hidden2').css('display','none');});

		$('.li_3,.hidden3').mouseover(function(){
			$('.hidden3').css('display','block');
		});
		$('.li_3,.hidden3').mouseout(function(){
			$('.hidden3').css('display','none');});

		$('.li_4,.hidden4').mouseover(function(){
			$('.hidden4').css('display','block');
		});
		$('.li_4,.hidden4').mouseout(function(){
			$('.hidden4').css('display','none');});

		$('.li_5,.hidden5').mouseover(function(){
			$('.hidden4').css('display','block');
		});
		$('.li_5,.hidden5').mouseout(function(){
			$('.hidden4').css('display','none');});
		
	});
};
$(function(){
	var headOne = $('.top>.head');
	var headTwo = $('.top>.head_2');
	$(window).scroll(function(){
		if( $(document).scrollTop() >= 100 ){
			headOne.fadeOut();
			headTwo.fadeIn();
		} else{
			headTwo.fadeOut();
			headOne.fadeIn();
		}
	})
})
$(function () {
	var $img = $('.show2_img_box > img');
	$img.click(function(event){
		console.log(event)
		$('.big_img > img').attr('src', this.src);
		$('.big_img').fadeToggle();
	})
	$('.mask').click(function () {
		$('.big_img').fadeToggle();
	})
})
$(function(){
	var $rightImg = $(".right_img");
	$(window).scroll(function(){
		if( $(document).scrollTop() >= 750){
			$rightImg.css({
				"position": "fixed"
			});
		} else {
			$rightImg.css({
				"position": "static"
			});
		}
	})
})