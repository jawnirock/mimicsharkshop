(function($) {

function animationOut(i){}
function animationIn(i){}

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
				next = current > 1 ? current - 1 : length;
				outClass = 'rotateCubeBottomOut';
				inClass = 'rotateCubeBottomIn';
			} else {
				next = current < length ? current + 1 : 1;
				outClass = 'rotateCubeTopOut';
				inClass = 'rotateCubeTopIn';
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
		if (e.keyCode == 38 || e && e.keyCode == 37) {
			trans('up')
		}
		if (e.keyCode == 39 || e && e.keyCode == 40) {
			trans('down')
		}

	});

	$(document).swipe({
		swipe: function(event, direction, distance, duration, fingerCount) {
			if (direction == "left") {
				trans('down')
			} else if (direction == "right") {
				trans('up')
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
        $(this).parents(".island-dive-content").css("background-image", "url(" + imgsrc + ")");
    });
    
    
    // island dive
    
    $(".island").each(function(){
        var islandContent = $(this).find(".island-dive-content");
        $(this).find(".island-title").click(function(){
            var alturaTotal =  $( window ).height() * 2
            console.log(alturaTotal)
             $("html, body").scrollTo(islandContent, 1300, {easing: 'easeInOutCirc'});
        })
    })
    
    //dive scrollers
    
    $(".island-dive-nav").click(function() {
        var target = $(this).data("divetarget");
        $("html, body").scrollTo($('#' + target), 1300, {easing: 'easeInOutCirc'});
    })
    
    $(".island-dive-content").swipe({
    	swipe: function(event, direction, distance, duration, fingerCount) {
    		if (direction == "down") {
                var target = $(this).find(".island-dive-nav--up").data("divetarget");
                $("html, body").scrollTo($('#' + target), 1300, {easing: 'easeInOutCirc'});
    		} else if (direction == "up") {
                var target = $(this).find(".island-dive-nav--down").data("divetarget");
                $("html, body").scrollTo($('#' + target), 1300, {easing: 'easeInOutCirc'});
    		}
    	}
    });
    
    
    $(".backup").click(function(){
         $("html, body").scrollTo(0, 1300, {easing: 'easeInOutCirc'});
    })

	// calcular hora vanuatu
	d = new Date();
	hours = d.getHours();
	timeezone = d.getTimezoneOffset() / 60;
	utc = hours + timeezone;
	nd = new Date(utc + 11)
	
	switch (true) {
	  case (29 <= nd && nd <= 33): 
	      console.log("dawn");
	  break;
	  case (34 <= nd &&  nd <= 35): 
	      console.log("morning");
	  break;
	  case (nd === 12): 
	      console.log("morning");
	  break;
	  case (13 <= nd &&  nd <= 15): 
	      console.log("midday");
	  break;
	  case (16 <= nd &&  nd <= 18): 
	      console.log("afternoon");
	  break;
	  case (19 <= nd &&  nd <= 21): 
	      console.log("sunset");
	  break;
	  case (22 <= nd &&  nd <= 28): 
	      console.log("night");
	  break;
	}
	
}); 

})(jQuery);