(function($) {

function animationOut(i){}
function animationIn(i){}
var state = "cube";

$(document).ready(function() {
	
	
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

				if ($(window).scrollTop() > $(window).height()) {
					outClass = 'slideBottomOut';
					inClass = 'slideBottomIn';
				} else {
					outClass = 'rotateCubeBottomOut';
					inClass = 'rotateCubeBottomIn';
				}
				next = current > 1 ? current - 1 : length;

			} else {

			if ($(window).scrollTop() > $(window).height()) {
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


	$(document).keydown(function(e) {
		var windowheight = $(window).height();
		var windowoffset = $(window).scrollTop();
		var moveup = windowoffset - windowheight;
		var movedown = windowoffset + windowheight;
		
		if (!onGoing) {

			if (e.keyCode == 37 && current !== 1) {
				trans('up')
			}
			if (e.keyCode == 38) {
				 onGoing = true;
				if (windowoffset <= (windowheight + windowheight)) {
					$("html, body").scrollTo(0, 1300, {easing: 'easeInOutCirc', onAfter: function() {
					}});
				} else {
					$("html, body").scrollTo(moveup, 1300, {easing: 'easeInOutCirc', onAfter: function() {
					}});
				}
				setTimeout(function() {
					onGoing = false;
				}, 1500)

			}
			if (e.keyCode == 39 && current !== 11) {
				trans('down')
			}
			if (e.keyCode == 40) {
				 onGoing = true;
				if (windowoffset == 0) {
					$("html, body").scrollTo((windowheight*2), 1300, {easing: 'easeInOutCirc', onAfter: function() {
					}});				
				} else {
					$("html, body").scrollTo(movedown, 1300, {easing: 'easeInOutCirc', onAfter: function() {
					}});
				}
				setTimeout(function() {
					onGoing = false;
				}, 1500)
			}
			

		}		

	});

	$(document).swipe({
		swipe: function(event, direction, distance, duration, fingerCount) {
			
		var windowheight = window.screen.height;
		var windowoffset = $(window).scrollTop();
		var moveup = windowoffset - windowheight;
		var movedown = windowoffset + windowheight;
		
			if (direction == "left" && current !== 11) {
				trans('down')
			}
			if (direction == "right" && current !== 1) {
				trans('up')
			}
			
			if (direction == "down") {
				 onGoing = true;
				if (windowoffset <= (windowheight + windowheight)) {
					$("html, body").scrollTo(0, 1300, {easing: 'easeInOutCirc'});
				} else {
					$("html, body").scrollTo(moveup, 1300, {easing: 'easeInOutCirc'});
				}
				setTimeout(function() {
					onGoing = false;
				}, 1500)
			}
			if (direction == "up") {
				 onGoing = true;
				if (windowoffset == 0) {
					$("html, body").scrollTo((windowheight*2), 1300, {easing: 'easeInOutCirc'});
				} else {
					$("html, body").scrollTo(movedown, 1300, {easing: 'easeInOutCirc'});
				}
				setTimeout(function() {
					onGoing = false;
				}, 1500)
			}
		}
	});

	// HOVER CLICK NAV

	$(".island-nav--left").click(function(){
	    trans('up');
	});
	$(".island-nav--right").click(function(){
	    trans('down');
	});
	
	$('#bullets>li').on('click', function() {
		openIndex($(this).index() + 1);
	});

    //island shop hide/show size shart
    
    $(".island-dive-size-title").click(function() {
        $(this).next(".island-dive-size-chart").slideToggle();
    })
    
    //island shop bg change
    
    $(".island-dive-shop-thumb").click(function() {
        var imgsrc = $(this).attr("src");
        $(this).parents(".island-dive-content-shop").css("background-image", "url(" + imgsrc + ")");
    });
    
    
    // island dive
    
    $(".island").each(function(){
        var islandContent = $(this).find(".island-dive-content");
        $(this).find(".island-title").click(function(){
            var alturaTotal =  $( window ).height() * 2
			 onGoing = true;
             $("html, body").scrollTo(islandContent, 1300, {easing: 'easeInOutCirc'});
			setTimeout(function() {
				onGoing = false;
			}, 1500)
        })
    })
    
    
    //dive scrollers
    
    $(".island-dive-nav--up, .island-dive-nav--down").click(function() {
     	onGoing = true;
        var target = $(this).data("divetarget");
        $("html, body").scrollTo($('#' + target), 1300, {easing: 'easeInOutCirc'});
		setTimeout(function() {
			onGoing = false;
		}, 1500)
    })
    $(".island-dive-nav--left").click(function() {
    	trans("up");
    })    
    $(".island-dive-nav--right").click(function() {
    	trans("down");
    })   
    
    // ripples
	// $(".island-dive-nav").ripples();
    $(".island-dive-nav").ripples("pause");
    
    
	$(".island-dive-nav")
	  .mouseover(function() {
        $( this ).ripples("play");
	  })
	  .mouseout(function() {
	    $( this ).ripples("pause");
	  });
	
	// calcular hora vanuatu
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
	
	// checkout panes class change
	
	$("#block-commerce-cap-cap").addClass("firstStep");
	
	checkoutNumbers();

	
});
	// checkout panes class change
	$( document ).ajaxComplete(function() {
		
		
		if ($("#block-commerce-cap-cap").find("#edit-account").length > 0){
			if ($("#block-commerce-cap-cap").hasClass("thirdStep")) {
				$("#block-commerce-cap-cap").addClass("goingBack")
			} else {
				$("#block-commerce-cap-cap").removeClass("goingBack")
			}
			$("#block-commerce-cap-cap").removeClass("firstStep thirdStep").addClass("secondStep");
			$(".checkoutBack").remove();

		} else if ($("#block-commerce-cap-cap").find("#edit-checkout-review").length > 0) {
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
		
		checkoutNumbers();
		
	});

var checkoutNumbers = function(){
	$(".increment, .decrement").click(function(){
		var currentRow = $(this).parents("tr");
		var priceTd = currentRow.find("td:nth-child(2)")
		var quantityTd = currentRow.find("td:nth-child(3) input")
		var totalTd = currentRow.find("td:last-child")
		var currentRowTotal = priceTd.text() * quantityTd.val();
		var totalSum = 0;

		totalTd.text(currentRowTotal + ".00");
		// correr as rows, escolher os totais, soma-los, juntar ao order total
		$(this).parents("table").find("tr td:last-child").each(function(){
			// allTotals.push($(this).text());
			totalSum = totalSum + Number($(this).text());
		});
		$(".component-total").text("$" + totalSum + ".00");
		
	})
	// verificar o stock na outra tabela, esconder rows
}

})(jQuery);

