(function(e){var t=e(".slider > div"),n=window.location.hostname.split(".")[0];t.length>0&&e.each(t,function(t,n){var r=e(n).parent().attr("id")==="home"?!0:!1,i=e(n).bxSlider({pager:!1,mode:"fade",auto:r,nextSelector:".next",prevSelector:".previous"})});e(window).load(function(){var t=e(".carousel > div");t.length>0&&e.each(t,function(t,n){var r=e(n).bxSlider({pager:!1,slideWidth:182,moveSlides:4,minSlides:4,maxSlides:4,infiniteLoop:!1,hideControlOnEnd:!0,responsive:!1,prevSelector:"#previous"+t,nextSelector:"#next"+t,slideMargin:22})})});e(".magazine-thumb").find("a").on("click",function(t){t.preventDefault();var n=e("body"),r=e(this).attr("href"),i=e('<div id="modal-window"><div id="modal-wrap"><span class="close">CLOSE <b>X</b></span><div id="modal-content"></div></div></div>');n.append(i);e.ajax({url:r,beforeSend:function(t){i.find("#modal-content").html(e('<img src="http://solidhex.com/alimay-events/wp-content/themes/alimay/assets/img/loader.gif" class="loader" />'))},success:function(t,n,r){i.find("#modal-content").html(t);e("#magazines > div").bxSlider({mode:"fade",pager:!1,infiniteLoop:!1,hideControlOnEnd:!0});i.on("click",".close",function(e){e.preventDefault();i.remove()})}})});e.each(e("a"),function(t,r){e(r).attr("href")&&e(r).attr("href").indexOf(n)==-1&&e(this).attr("target","_blank")});e("#nav-about").on("click",function(t){t.preventDefault();var n=e("#sub-nav"),r=n.parents("header");r.toggleClass("closed open");n.toggleClass("closed open")})})(jQuery);