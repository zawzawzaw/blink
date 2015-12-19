$(function() {

	function init () {

		var scrollMagicController = new ScrollMagic();

		var $eachContentDiv = $('.each-content'),
			$rightImage = $('.img-right-content img'),
			$leftImage = $('.img-left-content img'),
			$rightText = $('.text-right-content .v-align-table'),
			$leftText = $('.text-left-content .v-align-table'),
			$headingDiv = $('#heading');

		$rightImage.css({ 'position':'absolute', 'left': '2000px' });
		$leftImage.css({ 'position':'absolute', 'right': '2000px' });
		$rightText.css({ 'position':'absolute', 'left': '2000px' });
		$leftText.css({ 'position':'absolute', 'right': '2000px' });

		var headingTxtTween = TweenLite.from($headingDiv, 2, { scale: 0.2, opacity: 0, top: "300px", ease:Back.easeOut }); // bring in text;

		var scene = new ScrollScene({
			    triggerElement: $headingDiv,
			    triggerHook: 'onEnter',
			    duration: 300 /* How many pixels to scroll / animate */
		  	})
		  	.setTween(headingTxtTween)
		  	.addTo(scrollMagicController);

		$('.each-content').each(function(i, obj){					
			
			var rightImgTween = TweenMax.to($(obj).find('.img-right-content img'), 2, {
				css: { top: 0, left: 0, opacity: 1 }
			});

			var leftImgTween = TweenMax.to($(obj).find('.img-left-content img'), 2, {
				css: { top: 0, right: 0, opacity: 1 }
			});

			var rightTxtTween = TweenMax.to($(obj).find('.text-right-content .v-align-table'), 2, {
				css: { top: 0, left: 0, opacity: 1 }
			});

			var leftTxtTween = TweenMax.to($(obj).find('.text-left-content .v-align-table'), 2, {
				css: { top: 0, right: 0, opacity: 1 }
			});

			var tl = new TimelineMax({delay:0.5, repeat:0});

			tl.add([rightImgTween, leftImgTween, rightTxtTween, leftTxtTween]);

			var scene = new ScrollScene({
			    triggerElement: obj,
			    triggerHook: 'onEnter', 	
			    triggerOffset: 0,				    
			    duration: 300 /* How many pixels to scroll / animate */
		  	})
		  	.setTween(tl)
		  	.addTo(scrollMagicController);

		  	
	  	});

	  	// scene.addIndicators();
	}

	init();
  
});