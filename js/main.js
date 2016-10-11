$(function(){
	/*Sidebar*/
	var oSidebar = $("#sidebar");
	var oMenu = $("#menu");
	var oMask = $(".mask");

	function showSidebar(){
		oMask.fadeIn();
		oSidebar.css('right',0);
	}

	function hideSidebar(){
		oMask.fadeOut();
		oSidebar.css('right',-oSidebar.width());
	}

	oMenu.on('click',showSidebar);
	oMask.on('click',hideSidebar);
	$(".backTop").on('click',function(){
		$('html,body').animate({scrollTop : 0},800);
	});

	/*返回顶部*/
	$(window).on('scroll',function(){
		if($(this).height() < $(this).scrollTop()){
			$('.backTop').fadeIn();
		}else{
			$('.backTop').fadeOut();
		}
	});

	/*博客简介*/
	$(".article_desc > a").text(function(){
		return $(this).text() + '...';
	});
});