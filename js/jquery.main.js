/* script by ProVerstka */
$(document).ready(function(){
	initSlider();
	initFlexImage();
	initNav();
	initScroll();
	inintQuantitySwitch();
	initPopups ();
	maskInput();
	initPlayerForm();
	//wow and Animate.css
	var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       false,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
            callback:     function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );
    wow.init();
	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		$.smoothScroll();
	} catch(err) {};
	//popup
	function initPopups (){
		$('body')
			.popup({
				"opener":".order",
				"popup_holder":"#form",
				"popup":".popup",
				"close_btn":".close-popup",
				"beforeOpen": function(popup) {
					$('body').addClass('modal-open');
					$(popup).css({
						'left': 0,
						'top': 0
					}).hide();
				}
			})
			.popup({
				"opener":".book-btn",
				"popup_holder":"#book-tour",
				"popup":".popup",
				"close_btn":".close-popup",
				"beforeOpen": function(popup) {
					$('body').addClass('modal-open');
					$(popup).css({
						'left': 0,
						'top': 0
					}).hide();
				}
			})
	}
	$('.product-list').on('click', '.order', function(e){
        console.log('click .product-list');
        if($("#form").length){
            console.log('#form is visible');
		}

        $('#form').popup('show');
		e.preventDefault();
	});
	$('.product-list').on('click', 'a', function(e){
		e.preventDefault();
	})
	//load
	$(window).load(function(){
		$('body').addClass('load');
	});
	//fancy
	$('.fancy').fancybox();
});
function initSlider(){
	if($(".main-gallery").length){
		$(".main-gallery").slick({
			dots: false,
			infinite: true,
			speed: 500,
			cssEase: 'linear',
			arrows: false,
			asNavFor: '.main-gallery-nav',
			autoplay: true,
			autoplaySpeed: 4000,
			fade: true
		});
		$('.main-gallery-nav').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			asNavFor: '.main-gallery',
			dots: false,
			focusOnSelect: true,
			arrows: false,
			responsive: [
				{
					breakpoint: 1000,
					settings: {
					centerMode: true,
					slidesToShow: 3
					}
				},
				{
					breakpoint: 640,
					settings: {
					slidesToShow: 2
					}
				}
			]
		});
	}

	/*
	* ProductSlider initialization moved into tmtours.jquery.showcase.js
	* */

	if($(".advantages").length){
		$(".advantages").slick({
			dots: false,
			infinite: true,
			arrows: false,
			slidesToShow: 4,
			slidesToScroll: 2,
			responsive: [
				{
					breakpoint: 1000,
					settings: {
					slidesToShow: 2,
					dots: true
					}
				},
				{
					breakpoint: 640,
					settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true
					}
				}
			]
		});
	}
	if($(".partners").length){
		$(".partners").slick({
			dots: false,
			infinite: true,
			arrows: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1280,
					settings: {
					arrows: false,
					dots: true
					}
				},
				{
					breakpoint: 1000,
					settings: {
					slidesToShow: 2,
					arrows: false,
					dots: true
					}
				},
				{
					breakpoint: 640,
					settings: {
					slidesToShow: 1,
					arrows: false,
					dots: true
					}
				}
			]
		});
	}
	if($(".reviews").length){
		$(".reviews").slick({
			dots: true,
			infinite: true,
			arrows: false,
			slidesToShow: 4,
			slidesToScroll: 2,
			responsive: [
				{
					breakpoint: 1000,
					settings: {
					slidesToShow: 3,
					slidesToScroll: 3
					}
				},
				{
					breakpoint: 768,
					settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: false,
					dots: true
					}
				},
				{
					breakpoint: 640,
					settings: {
					slidesToShow: 1,
					slidesToScroll: 1
					}
				}
			]
		});
	}
	if($(".blog").length){
		$(".blog").slick({
			dots: false,
			infinite: true,
			arrows: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
				{
					breakpoint: 1280,
					settings: {
					arrows: false,
					dots: true
					}
				},
				{
					breakpoint: 1000,
					settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					arrows: false,
					dots: true
					}
				},
				{
					breakpoint: 560,
					settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true
					}
				}
			]
		});
	}
}
function initFlexImage(){
	$('.flex-image').each(function(){
		$(this).closest('.flex-img-holder').css({
			'background':'url('+$(this).attr('src')+') no-repeat 50% 50%'
		})
	});
}
function initNav(){
	$('.btn-open').click(function(){
		$('.mobile-sidebar').addClass('open');
		$('.mobile-sidebar ul').removeClass('fade-out')
		return false;
	});
	$('.btn-close').click(function(){
		$('.mobile-sidebar ul').addClass('fade-out')
		setTimeout(function(){
			$('.mobile-sidebar').removeClass('open');
		},500);
		return false;
	});
	// scroll
	var block = $('.nav-section');
	var headerHeight = $('#header').height();
	var _t;
	$(window).scroll(function(){
		var _delta = headerHeight+10;
		var _sections = [];
		var wS = $(window).scrollTop();
		block.each(function(){
			_sections.push($(this).offset().top-_delta);
		});
		$.each(_sections, function(i, val){
			if (i>0){
				if (i==_sections.length-1){
					if (wS>=val){
						$('#nav li.nav-item').removeClass('active');
						$('#nav li.nav-item').eq(i).addClass('active');
					}
				} else {
					if ((wS>=val)&&(wS<_sections[i+1])){
						$('#nav li.nav-item').removeClass('active');
						$('#nav li.nav-item').eq(i).addClass('active');
					}
				}
			} else {
				if ((wS>=$('.nav-section').offset().top-_delta)&&(wS<_sections[i+1])){
					$('#nav li.nav-item').removeClass('active');
					$('#nav li.nav-item').eq(i).addClass('active');
				}
			}
			if(wS < $('.nav-section').offset().top-_delta){
				$('#nav li.nav-item').removeClass('active');
			}
		});
		$.each(_sections, function(i, val){
			if (i>0){
				if (i==_sections.length-1){
					if (wS>=val){
						$('.mobile-menu li.nav-item').removeClass('active');
						$('.mobile-menu li.nav-item').eq(i).addClass('active');
					}
				} else {
					if ((wS>=val)&&(wS<_sections[i+1])){
						$('.mobile-menu li.nav-item').removeClass('active');
						$('.mobile-menu li.nav-item').eq(i).addClass('active');
					}
				}
			} else {
				if ((wS>=$('.nav-section').offset().top-_delta)&&(wS<_sections[i+1])){
					$('.mobile-menu li.nav-item').removeClass('active');
					$('.mobile-menu li.nav-item').eq(i).addClass('active');
				}
			}
			if(wS < $('.nav-section').offset().top-_delta){
				$('#nav li.nav-item').removeClass('active');
			}
		});
	});
	$('#nav li.nav-item a, .mobile-menu li.nav-item a').click(function(e){
		var _href = $(this).attr('href');
		$('html, body').animate({scrollTop:$(_href).offset().top - headerHeight}, 600);
		$('.btn-close').trigger('click');
		e.preventDefault();
	});
}
function initScroll(){
	if ($(window).scrollTop() > 20){
		$("#wrapper").addClass("head-fixed");
	} else {
		$("#wrapper").removeClass("head-fixed");
	}
	$(window).scroll(function(){
		if ($(window).scrollTop() > 20){
			$("#wrapper").addClass("head-fixed");
		} else {
			$("#wrapper").removeClass("head-fixed");
		}
		if ($(window).scrollTop() > $(window).height()/2) {
			$('.btn-top:hidden').fadeIn(400);
		} else {
			$('.btn-top:visible').fadeOut(400);
		}
	});
	$('.btn-top, .index .logo a').click(function(){
		$('body, html').animate({scrollTop:0},600)
		return false;
	});
}
function inintQuantitySwitch(){
	var quantityEl = '.quantity .btn-quantity'
		min = 0,
		max = 100;
	$(quantityEl).each(function(){
		if($(this).parent().parent().find('input').val()<=min){
			$(this).parent().parent().find('.minus').addClass('disabled');
		}else{
			$(this).parent().parent().parent().addClass('pick');
		}
		if($(this).parent().parent().find('input').val()>=max){
			$(this).parent().parent().find('.plus').addClass('disabled');
		}
	});
	$(document).on('click', quantityEl ,function(e){
	  var input=$(this).parent().parent().find('input'),
	   	  val=parseInt(input.val()),
	   	  delta = 1;
	  if($(this).is('.plus')){
	  		if(val+delta>=max){
		   	 	input.val(max);
		   	 	$(this).addClass('disabled');
		   }else{
		   		if(val>=delta){
		   			input.val(val= val+delta);
		   		}else{
		   			input.val(val= val+(delta-val));
		   		}
		   	 	$(this).parent().parent().find('.btn-quantity').removeClass('disabled');
		   	 	$(this).parent().parent().parent().addClass('pick');
		   }
	  }else{
		   if(val-delta<=min){
		   	 	input.val(min);
		   	 	$(this).addClass('disabled');
		   	 	$(this).parent().parent().parent().removeClass('pick');
		   }else{
		   	 	input.val(val= val-delta);
		   	 	$(this).parent().parent().find('.btn-quantity').removeClass('disabled');
		   	 	$(this).parent().parent().parent().addClass('pick');
		   }
	  }
	  e.preventDefault();
	});
}
function maskInput() {
	if ($(".phone-input").size()) $(".phone-input").mask("+38 (999) 999-99-99", {
		placeholder: "_"
	});
}
function initPlayerForm(){
	$('.form').each(function(){
        var form=$(this),
          input=form.find('input');
        form.find('.required').blur(function(){
            var val=$(this).val();
            if(val){
                $(this).removeClass('error rubberBand animated');;
            }
            else{
                $(this).addClass('error rubberBand animated');
            }
        });
        form.on('keyup keydown', '.required.error', function(){
            var val=$(this).val();
           if(val){
                $(this).removeClass('error rubberBand animated');
            }
            else{
                $(this).addClass('error rubberBand animated');
            }
        });
  		form.find('.name').blur(function(){
            var val=$(this).val();
            if((/^[a-zA-Zа-яА-ЯіІєЄїЇ\s-]{1,40}$/ig).test(val)){
                $(this).removeClass('error rubberBand animated');;
            }
            else{
                $(this).addClass('error rubberBand animated');
            }
        });
        form.on('keyup keydown', '.name.error', function(){
            var val=$(this).val();
            if((/^[a-zA-Z0-9а-яА-ЯіІєЄїЇ\s-\(\)\+]{1,40}$/ig).test(val)){
                $(this).removeClass('error rubberBand animated');
            }
            else{
                $(this).addClass('error rubberBand animated');
            }
        });
		 form.find('.phone').blur(function(){
            var val=$(this).val();
             if((/^[0-9\s-\(\)\+]{19}$/ig).test(val)){
                $(this).removeClass('error rubberBand animated');
            }
            else{
                $(this).addClass('error rubberBand animated');
            }
        });
        form.on('keyup keydown', '.phone.error', function(){
            var val=$(this).val();
            if((/^[0-9\s-\(\)\+]{18}$/ig).test(val)){
                $(this).removeClass('error rubberBand animated');
            }
            else{
                $(this).addClass('error rubberBand animated');
            }
        });
      form.find('.email').blur(function(){
          var val=$(this).val();
          if((/^[-\._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/ig).test(val) && val.length<=30){
              $(this).removeClass('error rubberBand animated');
          }
          else{
              $(this).addClass('error rubberBand animated');

          }
      });
      form.on('keyup keydown', '.email.error', function(){
          var val=$(this).val();
          if((/^[-\._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/ig).test(val) && val.length<=30){
              $(this).removeClass('error rubberBand animated');
          }
          else{
              $(this).addClass('error rubberBand animated');
          }
      });
      form.submit(function(e){
          input.trigger('blur');
          if(form.find('.error').size()){
			/*alert('error');*/
			return false;
		} else {
			// values = $(this).serialize();
			// $.ajax({
			// 	url: "feedback.php",
			// 	type: "post",
			// 	data: values,
			// 	success: function(){
			// 	},
			// 	error:function(){
			// 	}
			// });
			// return false;
		}
		});
	});
};
/* подключение плагинов */
$.fn.popup = function(o){
    if(o === 'show'){
   this.fadeIn();
   $(window).resize();
  }
  if(o === 'hide'){
   this.fadeOut();
  }
 var o = $.extend({
    "opener":".call-back a",
    "popup_holder":"#popup",
    "popup":".popup",
    "close_btn":".close-popup",
    "close":function(){
    	$('body').removeClass('modal-open');
    },
    "beforeOpen": function(popup) {
     $(popup).css({
      'left': 0,
      'top': 0
     }).hide();
     $('body').addClass('modal-open');
    }
   },o);
 return this.each(function(){
  var container=$(this),
   opener=$(o.opener,container),
   popup_holder=$(o.popup_holder,container),
   popup=$(o.popup,popup_holder),
   close=$(o.close_btn,popup),
   bg=$('.bg',popup_holder);
   popup.css('margin',0);
   opener.click(function(e){
    o.beforeOpen.apply(this,[popup_holder]);
	popup_holder.css('left',0);
    popup_holder.fadeIn(400);
   // setTimeout(function(){
    	alignPopup();
    	bgResize();
    //}, 500);
    e.preventDefault();
   });
  function alignPopup(){
   var deviceAgent = navigator.userAgent.toLowerCase();
   var agentID = deviceAgent.match(/(iphone|ipod|ipad|android)/i);
   if(agentID){
    if(popup.outerHeight()>window.innerHeight){
     popup.css({'top':$(window).scrollTop(),'left': ((window.innerWidth - popup.outerWidth())/2) + $(window).scrollLeft()});
     return false;
    }
    popup.css({
     'top': ((window.innerHeight-popup.outerHeight())/2) + $(window).scrollTop(),
     'left': ((window.innerWidth - popup.outerWidth())/2) + $(window).scrollLeft()
    });
   }else{
    if(popup.outerHeight()>$(window).outerHeight()){
     popup.css({'top':$(window).scrollTop(),'left': (($(window).width() - popup.outerWidth())/2) + $(window).scrollLeft()});
     return false;
    }
    popup.css({
     'top': (($(window).height()-popup.outerHeight())/2) + $(window).scrollTop(),
     'left': (($(window).width() - popup.outerWidth())/2) + $(window).scrollLeft()
    });
   }
  }
  function bgResize(){
   var _w=$(window).width(),
    _h=$(document).height();
   bg.css({"height":_h,"width":_w+$(window).scrollLeft()});
  }
  $(window).resize(function(){
   if(popup_holder.is(":visible")){
    bgResize();
    alignPopup();
   }
  });
  if(popup_holder.is(":visible")){
    bgResize();
    alignPopup();
  }
  close.add(bg).click(function(e){
   var closeEl=this;
   popup_holder.fadeOut(400,function(){
    o.close.apply(closeEl,[popup_holder]);
   });
   e.preventDefault();
  });
  $('body').keydown(function(e){
   if(e.keyCode=='27'){
    popup_holder.fadeOut(400);
   }
  })
 });
};
/*! device.js 0.1.58 */
(function(){var a,b,c,d,e,f,g,h,i,j;a=window.device,window.device={},c=window.document.documentElement,j=window.navigator.userAgent.toLowerCase(),device.ios=function(){return device.iphone()||device.ipod()||device.ipad()},device.iphone=function(){return d("iphone")},device.ipod=function(){return d("ipod")},device.ipad=function(){return d("ipad")},device.android=function(){return d("android")},device.androidPhone=function(){return device.android()&&d("mobile")},device.androidTablet=function(){return device.android()&&!d("mobile")},device.blackberry=function(){return d("blackberry")||d("bb10")||d("rim")},device.blackberryPhone=function(){return device.blackberry()&&!d("tablet")},device.blackberryTablet=function(){return device.blackberry()&&d("tablet")},device.windows=function(){return d("windows")},device.windowsPhone=function(){return device.windows()&&d("phone")},device.windowsTablet=function(){return device.windows()&&d("touch")},device.fxos=function(){return d("(mobile; rv:")||d("(tablet; rv:")},device.fxosPhone=function(){return device.fxos()&&d("mobile")},device.fxosTablet=function(){return device.fxos()&&d("tablet")},device.mobile=function(){return device.androidPhone()||device.iphone()||device.ipod()||device.windowsPhone()||device.blackberryPhone()||device.fxosPhone()},device.tablet=function(){return device.ipad()||device.androidTablet()||device.blackberryTablet()||device.windowsTablet()||device.fxosTablet()},device.portrait=function(){return 90!==Math.abs(window.orientation)},device.landscape=function(){return 90===Math.abs(window.orientation)},device.noConflict=function(){return window.device=a,this},d=function(a){return-1!==j.indexOf(a)},f=function(a){var b;return b=new RegExp(a,"i"),c.className.match(b)},b=function(a){return f(a)?void 0:c.className+=" "+a},h=function(a){return f(a)?c.className=c.className.replace(a,""):void 0},device.ios()?device.ipad()?b("ios ipad tablet"):device.iphone()?b("ios iphone mobile"):device.ipod()&&b("ios ipod mobile"):device.android()?device.androidTablet()?b("android tablet"):b("android mobile"):device.blackberry()?device.blackberryTablet()?b("blackberry tablet"):b("blackberry mobile"):device.windows()?device.windowsTablet()?b("windows tablet"):device.windowsPhone()?b("windows mobile"):b("desktop"):device.fxos()?device.fxosTablet()?b("fxos tablet"):b("fxos mobile"):b("desktop"),e=function(){return device.landscape()?(h("portrait"),b("landscape")):(h("landscape"),b("portrait"))},i="onorientationchange"in window,g=i?"orientationchange":"resize",window.addEventListener?window.addEventListener(g,e,!1):window.attachEvent?window.attachEvent(g,e):window[g]=e,e()}).call(this);