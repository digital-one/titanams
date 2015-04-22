 var isTouchDevice = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isTouchDevice.Android() || isTouchDevice.BlackBerry() || isTouchDevice.iOS() || isTouchDevice.Opera() || isTouchDevice.Windows());
    }
};


$(function(){


$('#home #slider').imagesLoaded( function() {
 console.log('loaded')
});

$('#mobile-menu').on('click',function(e){
	e.preventDefault();
	_menu = $('#nav ul');
	if($(this).hasClass('active')){
		_menu.hide();
		$(this).removeClass('active');
	} else {
		_menu.show();
		$(this).addClass('active');
	}
})

if($('#bios #slider').length){

$('#bios #slider').slick({
    dots: false,
    autoplay: false,
    speed: 600,
    pauseOnHover: false,
    //adaptiveHeight: true,
    arrows: true,
	infinite: true,
  	slidesToShow: 1
});

var _slides = $('.slick-slide'),
	_height = _slides.eq(0).height();
	_slides.each(function(){
		var _slideHeight = $(this).height();
		if(_slideHeight > _height) _height = _slideHeight;
	})
	$('#bios').height(_height);
}

if($('#home #slider').length){

$('#home #slider').slick({
    dots: false,
    autoplay: true,
    speed: 600,
    pauseOnHover: false,
     autoplaySpeed: 6000,
    //adaptiveHeight: true,
    arrows: true,
	infinite: true,
});

}

});
