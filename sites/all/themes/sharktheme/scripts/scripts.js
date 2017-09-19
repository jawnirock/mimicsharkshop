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
			totalSumShip = totalSum + 20 + Number($(this).text());
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

	} else if ($("#block-commerce-cap-cap").find(".checkout_review").length > 0) {
		$("#block-commerce-cap-cap").removeClass("firstStep secondStep").addClass("thirdStep");
	
	} else {
		if ($("#block-commerce-cap-cap").hasClass("secondStep")) {
			$("#block-commerce-cap-cap").addClass("goingBack")
		} else {
			$("#block-commerce-cap-cap").removeClass("goingBack")
		}
		$("#block-commerce-cap-cap").removeClass("thirdStep secondStep").addClass("firstStep");
		$(".checkoutBack").remove();
	}
}
var checkoutLabels = function() {
	$(".checkout-back").text("BACK");
	$(".checkout-continue").text("NEXT");
	//second step
	$(".customer_profile_billing .panel-title").text("Billing info");
	$(".customer_profile_shipping .panel-title").text("Shipping info");
	//third step
	$(".checkout-review .pane-title:nth-child(1) td").text("email");
	$(".checkout-review .pane-title:nth-child(2) td").text("Billing info");
	$(".checkout-review .pane-title:nth-child(3) td").text("Shipping info");
	$(".view-commerce-cart-summary .table-responsive:first-child tbody").prepend("<tr><td class='order-title'>Order</td></tr>")
	$(".thirdStep .checkout-continue").html("<div class='checkout-paypal'></div>");
}
var mobileResponse = function(){
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	var position = windowWidth / 2;
	
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && windowHeight < windowWidth ) {
	  $(".mobileNotification.fullscreen").show();
	  $(".mobileNotification.landscape").hide();
	}
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && windowHeight > windowWidth ) {
	  $(".mobileNotification.landscape").show();
	  $(".mobileNotification.fullscreen").hide();
	}
	
	$(".mobileNotification.fullscreen button").click(function() {
			$(".mobileNotification").remove();
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
	})
	
}
var shopFunctions = function() {
    //hide/show size shart
    $(".island-dive-size-title").click(function() {
        $(this).next(".island-dive-size-chart").slideToggle();
    })
    
    //bg change

    $(".island-dive-shop-thumb").click(function() {
        var imgsrc = $(this).attr("src");
        $(this).parents(".island-dive-content-shop").css("background-image", "url(" + imgsrc + ")");
    });	
}
var hoverRipples = function() {
 
	// falta definir o fundo   
    
	// $(".island-dive-nav").ripples();
    $(".island-dive-nav").ripples("pause");
    
	$(".island-dive-nav")
	  .mouseover(function() {
        $( this ).ripples("play");
	  })
	  .mouseout(function() {
	    $( this ).ripples("pause");
	  });	
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

$(document).ready(function() {

	mobileResponse();


	$("#block-commerce-cap-cap").addClass("firstStep");
	checkoutTableFooter();
	checkoutNumbers();
	checkoutLabels();

	var level = $(".island-wrapper").data("level");
	var length = $('.island').length,
		current = 6,
		next = 6,
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
			if (direction == 'up') {
				console.log(level)
				if (level > 1) {
					outClass = 'slideBottomOut';
					inClass = 'slideBottomIn';
				} else {
					outClass = 'rotateCubeBottomOut';
					inClass = 'rotateCubeBottomIn';
				}
				next = current > 1 ? current - 1 : length;

			} else {
				console.log(level)
				if (level > 1) {
					outClass = 'slideTopOut';
					inClass = 'slideTopIn';
				} else {
					outClass = 'rotateCubeTopOut';
					inClass = 'rotateCubeTopIn';
				}
				next = current < length ? current + 1 : 1;
			}
			show();
		}
	}
	
	function show() {
		$('.island:eq(' + (current - 1) + ') aside').removeClass('island-dive--visible');
		$('.island:eq(' + (next - 1) + ')').addClass('island-visible');
		$('.island:eq(' + (current - 1) + ')').addClass(outClass);
		$('.island:eq(' + (next - 1) + ')').addClass(inClass);	
		$('#bullets>li:eq(' + (current - 1) + ')').removeClass('active');
		$('#bullets>li:eq(' + (next - 1) + ')').addClass('active');
	
		animationOut(current - 1)
		setTimeout(function() {
			$('.island:eq(' + (current - 1) + ')').removeClass('island-visible');
		}, 1200)
	
		setTimeout(function() {
			$('.island:eq(' + (current - 1) + ')').removeClass(outClass);
			$('.island:eq(' + (next - 1) + ')').removeClass(inClass);
			$('.island:eq(' + (next - 1) + ') aside').addClass('island-dive--visible');
			
			animationIn(next - 1)
			current = next;
			onGoing = false;
		}, 1300)
	
	}
	
	function dive(direction) {
		onGoing = true;

		if (direction == 'up') {
			if (Number(level) >= 2) {
				 console.log(level)
				 level = level - 1;
				 $(".island-wrapper").addClass("goinUp")
				 $(".island-wrapper").attr("data-level", level);
			}
		} else {
			if (Number(level) <= 2) {
				 console.log(level)
				 level = level + 1;
				 $(".island-wrapper").removeClass("goinUp")
				 $(".island-wrapper").attr("data-level", level);
			}

		}
		setTimeout(function() {
			onGoing = false;
		}, 1500)
		
	}

	// key navigation
	$(document).keydown(function(e) {

		if (!onGoing) {
			if (e.keyCode == 37 && current !== 1) {
				trans('up')
			}
			if (e.keyCode == 38) {
				dive("up");
			}
			if (e.keyCode == 39 && current !== 11) {
				trans('down')
			}
			if (e.keyCode == 40) {
				dive("down");
			}

		}		

	});

	// swipe navigation
	$(document).swipe({
		swipe: function(event, direction, distance, duration, fingerCount) {

			if (direction == "left" && current !== 11) {
				trans('down')
			}
			if (direction == "right" && current !== 1) {
				trans('up')
			}
			
			if (direction == "down") {
				dive("up");
			}
			if (direction == "up") {
				dive("down");
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
    $(".island-dive-nav--up").click(function() {
     	dive("up");
    })
    $(".island-dive-nav--down").click(function() {
     	dive("down");
    })


	setVanuatuTime();	

	shopFunctions();

	hoverRipples();

	
});

$(document).ajaxComplete(function() {
	checkoutTableFooter();
	checkoutNumbers();
	checkoutClasses();
	checkoutPlaceholders();
	checkoutLabels();
});

$(window).resize(function() {
	mobileResponse();
});


})(jQuery);


	

// $('#bullets>li').on('click', function() {
// 	openIndex($(this).index() + 1);
// });

	
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
