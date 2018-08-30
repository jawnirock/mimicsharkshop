
(function($) {
	

function animationOut(i){}
function animationIn(i){}


var setVanuatuTime = function(){
	d = new Date();
	hours = d.getHours();
	timeezone = d.getTimezoneOffset() / 60;
	utc = hours + timeezone;
	nd = new Date(utc + 11)
	
	switch (true) {
	  case (29 <= nd && nd <= 33): 
	      $(".island-wrapper").addClass("dawn");
	  break;
	  case (34 <= nd &&  nd <= 35): 
	      $(".island-wrapper").addClass("morning");
	  break;
	  case (nd === 12): 
	      $(".island-wrapper").addClass("morning");
	  break;
	  case (13 <= nd &&  nd <= 15): 
	      $(".island-wrapper").addClass("midday");
	  break;
	  case (16 <= nd &&  nd <= 18): 
	      $(".island-wrapper").addClass("afternoon");
	  break;
	  case (19 <= nd &&  nd <= 21): 
	      $(".island-wrapper").addClass("sunset");
	  break;
	  case (22 <= nd &&  nd <= 28): 
	      $(".island-wrapper").addClass("night");
	  break;
	}	
}
var checkoutNumbers = function(){
	
	$("#block-commerce-cap-cap .table-responsive tr td:nth-child(2), #block-commerce-cap-cap .table-responsive tr td:nth-child(4)").each(function() {
	    var semZeros = $(this).text().replace(".00", "");
	    var semZeros = semZeros.replace("$", "");
	    $(this).html("<span>$</span><span class='value'>" + semZeros + "</span>");
	})
	
	$("#block-commerce-cap-cap").prepend("<div class='island-nav--up'></div>")

	$(".increment, .decrement").click(function(event){

		var currentRow = $(this).parents("tr");
		var priceTd = currentRow.find("td:nth-child(2) .value")
		var quantityTotal = Number(currentRow.find("td:nth-child(3) input").val());
		var totalTd = currentRow.find("td:last-child .value")
		var currentRowTotal = 0;
		var totalSum = 0;
		

		if ($(this).hasClass("increment")) {
			quantityTotal = quantityTotal + 1;
			currentRow.find("td:nth-child(3) input").val(quantityTotal);
		} else {
			if (quantityTotal !== 0) {
				quantityTotal = quantityTotal - 1;
			}
			currentRow.find("td:nth-child(3) input").val(quantityTotal);
		}

 	    currentRowTotal = Number(priceTd.text()) * quantityTotal;
		totalTd.text(currentRowTotal);
		
		// correr as rows, escolher os totais, soma-los, juntar ao order total
		$(this).parents("table").find("tr td:last-child .value").each(function(){
			// allTotals.push($(this).text());
			totalSum = totalSum + Number($(this).text());
			totalSumShip = totalSum + 20;
		});
		$(".custom-checkout .component-type-base-price .component-total").text("$" + totalSum);
		$(".custom-checkout .component-type-commerce-price-formatted-amount .component-total").text("$" + totalSumShip);
		
	})
	// verificar o stock na outra tabela, esconder rows

	$("#block-commerce-cap-cap form .form-wrapper .table-responsive .form-type-textfield input").focusout(function(event){

		var currentRow = $(this).parents("tr");
		var priceTd = currentRow.find("td:nth-child(2) .value")
		var quantityTotal = Number(currentRow.find("td:nth-child(3) input").val());
		var totalTd = currentRow.find("td:last-child .value")
		var currentRowTotal = 0;
		var totalSum = 0;
		
 	    currentRowTotal = Number(priceTd.text()) * quantityTotal;
		totalTd.text(currentRowTotal);
		
		// correr as rows, escolher os totais, soma-los, juntar ao order total
		$(this).parents("table").find("tr td:last-child .value").each(function(){
			// allTotals.push($(this).text());
			totalSum = totalSum + Number($(this).text());
			totalSumShip = totalSum + 20 + Number($(this).text());
		});
		$(".custom-checkout .component-type-base-price .component-total").text("$" + totalSum);
		$(".custom-checkout .component-type-commerce-price-formatted-amount .component-total").text("$" + totalSumShip);
		
	})
	
	
	
}
var checkoutTableFooter = function(){
	$("#block-commerce-cap-cap form .form-wrapper .commerce-price-formatted-components").parent().remove();
	$("#block-commerce-cap-cap form .form-wrapper .table-responsive").after('<div class="table-responsive"><table class="commerce-price-formatted-components custom-checkout table table-hover table-striped"><tbody><tr class="component-type-base-price"><td class="component-title">Sub</td><td class="component-total">0</td></tr><tr class="component-type-flat-rate-eu-testing"><td class="component-title">P&P</td><td class="component-total">20</td></tr><tr class="component-type-commerce-price-formatted-amount"><td class="component-title">Total</td><td class="component-total">20</td></tr></tbody></table></div>');

	
	if ($("#block-commerce-cap-cap").find(".checkout_review").length > 0) {

		var totalSum = 0;
		var totalSumShip = 0;
		$("#block-commerce-cap-cap form .form-wrapper .view-commerce-cart-summary .view-content .table-responsive:first-child table").find("tbody tr td.views-field-commerce-total").each(function(){
			var formmatedAmount = $(this).text().replace("$", "");
			totalSum = totalSum + Number(formmatedAmount);
		});
		totalSumShip = totalSum + 20;

		$(".custom-checkout .component-type-base-price .component-total").text("$" + totalSum + ".00");
		$(".custom-checkout .component-type-commerce-price-formatted-amount .component-total").text("$" + totalSumShip + ".00");
		
	} else {

		var totalSum = 0;
		var totalSumShip = 0;
		$("#block-commerce-cap-cap form .form-wrapper .table-responsive:first-child table").find("tr td:last-child").each(function(){
			totalSum = totalSum + Number($(this).text());
			totalSumShip = totalSum + 20 + Number($(this).text());
		});
		$(".custom-checkout .component-type-base-price .component-total").text("$" + totalSum + ".00");
		$(".custom-checkout .component-type-commerce-price-formatted-amount .component-total").text("$" + totalSumShip + ".00");
		
	}
	
}
var checkoutClasses = function(){
	if ($("#block-commerce-cap-cap").find(".account.panel").length > 0){
		if ($("#block-commerce-cap-cap").hasClass("thirdStep")) {
			$("#block-commerce-cap-cap").addClass("goingBack")
		} else {
			$("#block-commerce-cap-cap").removeClass("goingBack")
		}
		$("#block-commerce-cap-cap").removeClass("firstStep thirdStep").addClass("secondStep");
		$(".checkoutBack").remove();
		$(".island-visible #sideluke").hide();


	} else if ($("#block-commerce-cap-cap").find(".checkout_review").length > 0) {
		$("#block-commerce-cap-cap").removeClass("firstStep secondStep").addClass("thirdStep");
		$(".island-visible #sideluke").hide();
	
	} else {
		if ($("#block-commerce-cap-cap").hasClass("secondStep")) {
			$("#block-commerce-cap-cap").addClass("goingBack")
		} else {
			$("#block-commerce-cap-cap").removeClass("goingBack")
		}
		$("#block-commerce-cap-cap").removeClass("thirdStep secondStep").addClass("firstStep");
		setTimeout(function(){ $(".island-visible #sideluke").show(); }, 2100);
		$(".checkoutBack").remove();
	}
}
var checkoutLabels = function() {
	$(".checkout-back").text("BACK");
	$(".checkout-continue").text("NEXT");
	//second step
	$(".customer_profile_billing .panel-title").text("Billing info");
	$(".customer_profile_shipping .panel-title").text("Shipping info");
	$(".form-item-account-login-mail input").attr("placeholder", "email");
	$(".form-item-account-login-mail input").attr("placeholder", "email");
	//third step
	$(".checkout-review .pane-title:nth-child(1) td").text("email");
	$(".checkout-review .pane-title:nth-child(3) td").text("Billing info");
	$(".checkout-review .pane-title:nth-child(5) td").text("Shipping info");
	$(".view-commerce-cart-summary .table-responsive:first-child tbody").prepend("<tr><td class='order-title'>Order</td></tr>");
    $('.thirdStep .checkout-continue').attr("disabled", "disabled");
	$(".thirdStep .checkout-continue").html("<div class='checkout-paypal'></div>");
	$(".thirdStep .checkout-continue").before("<h3 class='disclaimer-text'>I have read & accept the <a href='/sites/all/themes/sharktheme/images/pdf/DISCLAIMER.pdf' target='_blank'>Disclaimer</a> <input type='checkbox' id='disclaimer-check' />  </h3>");

	$("#disclaimer-check").change(function() {
	    if(this.checked) {
	    	console.log("on")
	        $('.thirdStep .checkout-continue').removeAttr("disabled");
	    } else {
	    	console.log("off")
	        $('.thirdStep .checkout-continue').attr("disabled", "disabled");
	    }
	});


	$(".checkout-messages").remove();
	$(".secondStep#block-commerce-cap-cap .account").append("<a target='_blank' href='/sites/all/themes/sharktheme/images/pdf/DELIVERY.pdf' class='checkout-messages delivery'>Delivery</a><a target='_blank' href='/sites/all/themes/sharktheme/images/pdf/PRIVACY-POLICY.pdf' class='checkout-messages privacy'>Privacy Policy</a>");
}
var mobileResponse = function(){
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	var position = windowWidth / 2;
	
	if(windowHeight < windowWidth ) {
	  $(".mobileNotification.fullscreen").show();
	  $(".mobileNotification.landscape").hide();
	}
	if(windowHeight > windowWidth ) {
	  $(".mobileNotification.landscape").show();
	  $(".mobileNotification.fullscreen").hide();
	}
	
	$(".mobileNotification.fullscreen button").click(function() {
			$(".mobileNotification.fullscreen").hide();
			$(".island-wrapper").show();

			var docElm = document.documentElement;
			if (docElm.requestFullscreen) {
			    docElm.requestFullscreen();
			}
			else if (docElm.mozRequestFullScreen) {
			    docElm.mozRequestFullScreen();
			}
			else if (docElm.webkitRequestFullScreen) {
			    docElm.webkitRequestFullScreen();
			}
		  $(".mobileNotification.fullscreen").hide();

	})
	
}
var shopFunctions = function() {
    //hide/show size shart
    $(".island-dive-size-title").click(function() {
        $(this).next(".island-dive-size-chart").animate({height: 'toggle'}).toggleClass("active");
    })
    $(".island-product-info-title").click(function() {
      $(this).next(".island-product-info-text").animate({width: 'toggle'}).toggleClass("active");
    })
    
    // bg change
	
	$(".island-product-info-text").resizable({
			aspectRatio: 718 / 153
	});


	$(".island-dive-size-chart").resizable({
			aspectRatio: 1225 / 760
	});
	


    $(".island-dive-shop-thumb.static").click(function() {
    	var currentThumb = $(this);
    	var currentLevel = currentThumb.parents(".island-dive-content-shop");
    	var currentLevelGrower = currentLevel.find(".island-dive-shop-grower")
    	var currentLevelShower = currentLevel.find(".island-dive-shop-shower")
    	var currentThumbData = $(this).data("thumb");

		currentLevel.find(".island-dive-size-chart.active").animate({height: 'toggle'}).toggleClass("active");
    	currentLevelGrower.removeClass("grow");
    	currentLevelGrower.attr("data-thumb", currentThumbData);
    	setTimeout(function(){ 
	    	currentLevelGrower.addClass("grow");
    	}, 200);
    	setTimeout(function(){ 
	    	currentLevelShower.attr("data-thumb", currentThumbData);
    	}, 700);
    });	
}
var contactLabels = function() {
	$("input[name='captcha_response']").attr("placeholder", "Enter captcha *");
	$("#webform-ajax-wrapper-17 .links a").text("(BACK TO CONTACT)");

    
    $(".contact-footer-mimic--short").hover(function(){
    	$(".contact-footer-mimic--long").fadeToggle();
    })
	
	
}

var checkoutPlaceholders = function() {
	$("#block-commerce-cap-cap .form-group").each(function(){
		var label = $(this).find("label");
		var input = $(this).find("input");
		var labelText = label.text();
		label.hide();
		input.attr("placeholder", labelText);
		
	});
}
var siteMapCarouel = function() {
    var init = function() {
      var carousel = document.getElementById('sitemap'),
          navButtons = document.querySelectorAll('.sitemap-nav'),
          panelCount = carousel.children.length,
          transformProp = Modernizr.prefixed('transform'),
          theta = 0,

          onNavButtonClick = function( event ){
            var increment = parseInt( event.target.getAttribute('data-increment') );
            theta += ( 360 / panelCount ) * increment * -1;
            carousel.style[ transformProp ] = 'translateZ( -320px ) rotateY(' + theta + 'deg)';
          };

      for (var i=0; i < 2; i++) {
        navButtons[i].addEventListener( 'click', onNavButtonClick, false);
      }

    };
    window.addEventListener( 'DOMContentLoaded', init, false);
}


$(document).ready(function() {

    $('body').kycoPreload({
	  truePercentage: false,
	  disableOverlay: true,
      animateDuration: 1000,
      loaderText: '',
      hidePercentage: true,
      fadeOutDuration: 1500,
      beforeComplete: function() {
        console.log('images preloaded, fading out the overlay and loader at 1.5s');
      },
      onComplete: function() {
		setTimeout(function() {
			$("#preloadVideo").fadeOut();
			$(".island-dive-size-chart").hide();
			$(".island-product-info-text").hide();

		}, 5000)
	
      }
    }); // This will preload all images on the page.



	// prevent pulldown
	
	var target = window 
	var lastY = 0
	target.addEventListener('touchmove', handleTouchMove)
	function handleTouchMove(e) {
	  var pageY = e.changedTouches[0]
	  var scrollY = target.pageYOffset || target.scrollTop || 0
	  if (pageY > lastY && scrollY === 0) {
	    e.preventDefault()
	  }
	  lastY = pageY;
	}


	// VERTICAL TEXT SLIDER
    $( ".underwater-slider-vertical" ).slider({
      orientation: "vertical",
      range: "min",
      min: -400,
      max: 15,
      value: 15,
	  step: 1,
      slide: function( event, ui ) {
      	var textblock = $(this).parents(".island-dive-content").find(".island-dive-content-text-block");
      	textblock.css('background-position-y' , (ui.value) + 'vh');
    	if (ui.value < - 100) {
    		$(this).find(".underwater-slider-more").addClass("fadedIn")
    	} else {
    		$(this).find(".underwater-slider-more").removeClass("fadedIn")
    	}
      	event.stopPropagation();
      }
    });
    
    $(".underwater-slider-more").click(function(e) {
        var pdf = $(this).attr("href");
        window.open(pdf, '_blank');
		e.preventDefault();
        e.stopPropagation();
        return false;
    })

	mobileResponse();
	siteMapCarouel();
	$('#sitemap-ie .carousel-ie').Carousel3d('rotate', 5);

	
	$("#block-commerce-cap-cap").addClass("firstStep");
	checkoutTableFooter();
	checkoutNumbers();
	checkoutLabels();
	contactLabels();

	var level = $(".island-wrapper").data("level");
	var length = $('.island').length,
		current = 6,
		next = 6,
		lastDirection,
		outClass, inClass, onGoing = false;
		$('.island:eq(5)').addClass('island-visible');
	
	for (i = 0; i < length; i++) {
		var bullet = $("<li></li>");
		if (i == 5) bullet.addClass('active');
		$("#bullets").append(bullet);
	}
	
	function openIndex(i) {
		if (!onGoing && next != i) {
			onGoing = true;
			next = i
			outClass = current > i ? 'rotateCubeBottomOut' : 'rotateCubeTopOut'
			inClass = current > i ? 'rotateCubeBottomIn' : 'rotateCubeTopIn';
			show()
		}
	}
	
	function trans(direction) {
		if (!onGoing) {
			onGoing = true;
			console.log(direction + " " + current + " " + level);
			lastDirection = direction;


        $(".island-dive-size-chart.active").animate({height: 'toggle'}).toggleClass("active");
    	$(".island-product-info-text.active").animate({width: 'toggle'}).toggleClass("active");

			// esquerda
			if (direction == 'up') {
				if (level === 1) {
					outClass = 'rotateCubeBottomOut';
					inClass = 'rotateCubeBottomIn';
				} else if (current === 8){
					outClass = 'spinBottomOut';
					inClass = 'spinBottomIn';
				} else if (current === 9){
					outClass = 'dissolveBottomOut';
					inClass = 'dissolveBottomIn';
				} else {					outClass = 'slideBottomOut';
					inClass = 'slideBottomIn';
				}
				next = current > 1 ? current - 1 : length;

			// direita
			} else {
				if (level === 1) {
					outClass = 'rotateCubeTopOut';
					inClass = 'rotateCubeTopIn';
				} else if (current === 7){
					outClass = 'spinTopOut';
					inClass = 'spinTopIn';
				} else if (current === 8){
					outClass = 'dissolveTopOut';
					inClass = 'dissolveTopIn';
				} else {					outClass = 'slideTopOut';
					inClass = 'slideTopIn';
				}
				next = current < length ? current + 1 : 1;
			}
			show();
		}
	}
	
	function showerDefault() {
			$(".island-dive-shop-shower").attr("data-thumb", 1);
			$(".island-dive-shop-grower").attr("data-thumb", 1);
	}
	
	function show() {
		$('.island:eq(' + (current - 1) + ') aside').removeClass('island-dive--visible');
		$('.island:eq(' + (current - 1) + ')').addClass(outClass);
		$('.island:eq(' + (next - 1) + ')').addClass(inClass + " " + lastDirection);	
		$('.island:eq(' + (next - 1) + ')').addClass('island-visible');
		$('#bullets>li:eq(' + (current - 1) + ')').removeClass('active');
		$('#bullets>li:eq(' + (next - 1) + ')').addClass('active');
	
		animationOut(current - 1)
		setTimeout(function() {
			$('.island:eq(' + (current - 1) + ')').removeClass('island-visible');
		}, 1200)
	
		setTimeout(function() {
			$('.island:eq(' + (current - 1) + ')').removeClass(outClass).removeClass("up").removeClass("down");
			$('.island:eq(' + (next - 1) + ')').removeClass(inClass);
			$('.island:eq(' + (next - 1) + ') aside').addClass('island-dive--visible');
			
			animationIn(next - 1)
			current = next;
			onGoing = false;
		}, 1300)
	
	}
	
	function dive(direction) {
		onGoing = true;
		var singleLevels = [1,2,3,4,5,6,9,10,11];
		var doubleLevels = [7,8];

		var currentVideoWrapper = $(".diveVideos .diveVideoWrapper:nth-child(" + current + ")");
		var currentVideoDown = currentVideoWrapper.find(".goinDown");
		var currentVideoUp = currentVideoWrapper.find(".goinUp");


        $(".island-dive-size-chart.active").animate({height: 'toggle'}).toggleClass("active");
    	$(".island-product-info-text.active").animate({width: 'toggle'}).toggleClass("active");
    	
    	$(".island-nav--down").fadeOut();


		if (direction == 'up') {
			// mostrar video ao subir do nivel 2 para o 1
			if (Number(level) === 2) {
				$(".diveVideos").show();
				currentVideoWrapper.addClass("visible");
				currentVideoDown.hide();
				if (currentVideoUp.length) {
					currentVideoUp.show();
					currentVideoUp[0].play(); 
				}
			}
			
			// nao ha video se subires para o nivel 2
			if (Number(level) >= 1 && doubleLevels.indexOf(current) !== -1) {
				 if (level !== 1) {
					 level = level - 1;
				 }
				 $(".island-wrapper").attr("data-level", level);
					 $(".island-wrapper").addClass("goinUp")
				 if (Number(level) == 1) {
					setTimeout(function() {
						$(".island-dive").hide();
					}, 1500)
				 }
			} else if (Number(level) >= 1 && singleLevels.indexOf(current) !== -1) {
				 level = 1;
				 $(".island-wrapper").addClass("goinUp")
				 $(".island-wrapper").attr("data-level", level);
				 if (Number(level) == 1) {
					setTimeout(function() {
						$(".island-dive").hide();
					}, 1500)
				 }
			}
			
			
			// direction down
		} else {
			
			// mostrar video ao descer do nivel 1 pro 2
			if (Number(level) == 1) {
				$(".diveVideos").show();
				currentVideoWrapper.addClass("visible");
				currentVideoUp.hide();
				if (currentVideoDown.length) {
					currentVideoDown.show();
					currentVideoDown[0].play();
				}
			}
			
			// se forem secoes de 1 nivel so desce 1 vez
			if (Number(level) == 1 && singleLevels.indexOf(current) !== -1){
				 level = level + 1;
				 $(".island-wrapper").removeClass("goinUp")
				 $(".island-wrapper").attr("data-level", level);
				setTimeout(function() {
					$(".island-dive").show();
				}, 200)
			}
			// se forem secoes de 2 niveis desce 2
			else if (Number(level) <= 3 && doubleLevels.indexOf(current) !== -1){
				 level = level + 1;
				 $(".island-wrapper").removeClass("goinUp")
				 $(".island-wrapper").attr("data-level", level);
				setTimeout(function() {
					$(".island-dive").show();
				}, 200)
			}
		}
		setTimeout(function() {
			onGoing = false;
			$(".diveVideos").hide();
			currentVideoWrapper.removeClass("visible");
			if (currentVideoUp.length) {
				currentVideoUp[0].pause(); 
				currentVideoUp[0].currentTime = 0;
			}
			if (currentVideoDown.length) {
				currentVideoDown[0].pause(); 
				currentVideoDown[0].currentTime = 0;
			}
	    	$(".island-nav--down").fadeIn();
		}, 4300)
		
	}

	// key navigation
	$(document).keydown(function(e) {
		showerDefault()
		if (!onGoing) {
			// mergulhar
			if (e.keyCode == 40) {
				dive("down");
				console.log (current + " - " + level)
			}
			// sair da agua
			if (e.keyCode == 38) {
				dive("up");
				console.log (current + " - " + level)
			}

			// acima de agua
			if (level == 1) {
				// esquerda
				if (e.keyCode == 37 && current !== 1) {
					trans('up')
				}
				// direita
				if (e.keyCode == 39 && current !== 11) {
					trans('down')
				}
			}
			// debaixo de agua
			if (level >= 1) {
				var canGoLeft = [2,3,4,5,6,7,8,9];
				var canGoRight = [1,2,3,4,5,6,7,8];
				// esquerda
				if (e.keyCode == 37 && canGoLeft.indexOf(current) !== -1) {
					trans('up')
				}
				// direita
				if (e.keyCode == 39 && canGoRight.indexOf(current) !== -1) {
					trans('down')
				}
			}
		}		

	});

	// swipe navigation


	$(document).swipe({
		
		swipe: function(event, direction, distance, duration, fingerCount) {

			showerDefault()
			// sair da agua
			if (direction == "down") {
				dive("up");
			}
			// mergulhar
			if (direction == "up") {
				dive("down");
			}

			// acima de agua
			if (level == 1) {
				// esquerda
				if (direction == "left" && current !== 11) {
					trans('down')
				}
				// direita
				if (direction == "right" && current !== 1) {
					trans('up')
				}
			}
			// debaixo de agua
			if (level >= 1) {
				var canGoLeft = [2,3,4,5,6,7,8,9];
				var canGoRight = [1,2,3,4,5,6,7,8];
				// esquerda
				if (direction == "right" && canGoLeft.indexOf(current) !== -1) {
					trans('up')
				}
				// direita
				if (direction == "left" && canGoRight.indexOf(current) !== -1) {
					trans('down')
				}
			}



		}
	});

	// click navigation
	$(".island-nav--left, .island-dive-nav--left").click(function(){
	    trans('up');
	});
	$(".island-nav--right, .island-dive-nav--right").click(function(){
	    trans('down');
	});
    $(".island-nav--up").click(function() {
     	dive("up");
    })
    $(".island-dive-nav--down, .island-nav--down").click(function() {
     	dive("down");
    })


	setVanuatuTime();	
	shopFunctions();
	
});

$(document).ajaxComplete(function() {
	checkoutTableFooter();
	checkoutNumbers();
	checkoutClasses();
	checkoutPlaceholders();
	checkoutLabels();
	contactLabels();
});

$(window).resize(function() {
	mobileResponse();
});


})(jQuery);



//for scroll by mouse or MAC track pad
//   var indicator = new WheelIndicator({
//   callback: function(e){   
//       if (e.direction == 'down') {
//         trans('down')
//       } else {
//         trans('up')
//       }
//   }
// });
// indicator.getOption('preventMouse'); // true
