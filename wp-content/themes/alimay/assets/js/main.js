(function ($) {
	var sliders = $(".slider > div"),
		host = window.location.hostname.split(".")[0];
		
		if (sliders.length > 0) {
			$.each(sliders, function (index, item) {
				
				var auto = ($(item).parent().attr("id") === "home") ? true : false;
				
				var slider = $(item).bxSlider({
					pager: false,
					mode: "fade",
					auto: auto, 
					nextSelector: ".next",
					prevSelector: ".previous"
				});
		
			});
		}
	
	// window has to be loaded for bxSlider to size properly
	$(window).load(function () {
		var carousels = $(".carousel > div");
	
		if (carousels.length > 0) {
			$.each(carousels, function(index, item) {
		
				var carousel = $(item).bxSlider({
					pager: false,
					slideWidth: 182,
					moveSlides: 4,
					minSlides: 4,
					maxSlides: 4,
					infiniteLoop: false,
					hideControlOnEnd: true,
					responsive: false,
					prevSelector: "#previous" + index,
					nextSelector: "#next" + index,
					slideMargin: 22
				});
			});
		}
		
	});
	
	$(".magazine-thumb").find("a").on("click", function (e) {
		e.preventDefault();
		
		var $body = $("body"),
			path = $(this).attr("href"),
			container = $('<div id="modal-window"><div id="modal-wrap"><span class="close">CLOSE <b>X</b></span><div id="modal-content"></div></div></div>');
		
		$body.append(container);
		
		$.ajax({
			url: path,
			beforeSend: function (xhr) {
				container.find("#modal-content").html($('<img src="http://solidhex.com/alimay-events/wp-content/themes/alimay/assets/img/loader.gif" class="loader" />'));
			},
			success: function (data, textStatus, xhr) {
				container.find("#modal-content").html(data);
				$("#magazines > div").bxSlider({
					mode: "fade",
					pager: false,
					infiniteLoop: false,
					hideControlOnEnd: true,
				});
				
				container.on("click", ".close", function (event) {
					event.preventDefault();
					container.remove();
				});
			}
		});
	});
		
	$.each($("a"), function(index, el) {
		if ($(el).attr("href") && $(el).attr("href").indexOf(host) == -1) {
			$(this).attr("target", "_blank");
		}
	});
	
	$("#nav-about").on("click", function (e) {
		e.preventDefault();
		
		var $subnav = $("#sub-nav"),
		$header = $subnav.parents("header");
	
		$header.toggleClass("closed open");
		$subnav.toggleClass("closed open");
		//$(this).toggleClass("active");
		
	});

	
})(jQuery);