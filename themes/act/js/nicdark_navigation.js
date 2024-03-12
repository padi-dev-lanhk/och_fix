/*
	Author: nicdark
	Author URI: http://www.nicdarkthemes.com/
*/

(function($) {
	"use strict";

	//navigation
	$('.nicdark_open_navigation_1_sidebar_content').on("click",function(event){ $('.nicdark_navigation_1_sidebar_content').css({ 'right': '0px', }); });
    $('.nicdark_close_navigation_1_sidebar_content').on("click",function(event){ $('.nicdark_navigation_1_sidebar_content').css({ 'right': '-300px' }); });

$(document).ready(function() {
       $(".menu_gioithieu .icon_menu_gt").click(function(){
          if(!$('.menu_gioithieu').hasClass('max-width')) { 
              $(".menu_gioithieu").addClass('max-width');
              setTimeout(function() {
                $(".menu_gioithieu").removeClass("max-width");
              }, 100000);
          }
		   	$(".list-new-latest").removeClass('active');
        });
});
$(document).ready(function() {
       $(".menu_gioithieu .icon_close_gt").click(function(){
          if($('.menu_gioithieu').hasClass('max-width')) { 
                $(".menu_gioithieu").removeClass("max-width");
          }
        });
});
$(document).ready(function() {
       $(".list_menu_item_child  ul .icon_gioithieu").click(function(event){
			  if(!$('.list_menu_item_child  ul li.icon_gioithieu ').hasClass('active')) { 
				$(".list_menu_item_child ul.menu li.icon_gioithieu ").addClass('active');
			  }
			  else{
				 $(".list_menu_item_child ul.menu li.icon_gioithieu ").removeClass('active');
			  }
	   });
});
$(document).ready(function() {
       $(".list_menu_item_child .menu .pll-parent-menu-item").click(function(event){
			  if(!$('.list_menu_item_child .menu li.pll-parent-menu-item').hasClass('active')) { 
				 $(".list_menu_item_child .menu li.pll-parent-menu-item ").addClass('active');
			  }
			  else{
				   $(".list_menu_item_child .menu li.pll-parent-menu-item ").removeClass('active');
			  }
	   });
});
$(".icon_next_tab").click(function() {
    $('html, body').animate({
        scrollTop: $("#Gioithieu_kem").offset().top
    }, 2000);
});
$(document).ready(function() {
   $(".Icon_bell>a").click(function(){
        if(!$('.list-new-latest').hasClass('active')) { 
          $(".list-new-latest").addClass('active');
          setTimeout(function() {
            $(".list-new-latest").removeClass("active");
          }, 8000);
      }
    });
});

$(document).ready(function() {
       $(".Icon_bell .cross_icon").click(function(){
            $(".list-new-latest").removeClass('active');
        });
});
$(document).ready(function() {
       $(".menu-mobile .nicdark_section .nicdark_open_navigation_1_sidebar_content").click(function(){
          if(!$('.bgr_menu_responsive').hasClass('max-width')) { 
              $(".bgr_menu_responsive").addClass('max-width');
          }
		   	$(".list-new-latest").removeClass('active');
        });
});
$(document).ready(function() {
       $(".bgr_menu_responsive>a").click(function(){
          if($('.bgr_menu_responsive').hasClass('max-width')) { 
              $(".bgr_menu_responsive").removeClass('max-width');
          }
        });
});
	
$(document).ready(function ($) {
	if($('.bgr_menu_responsive').hasClass('menu_mobile')){
		$(".menu-item-1887>a").removeAttr("href");
		//$(".menu-item-3453>a").removeAttr("href");
		//$(".menu-item-1882>a").removeAttr("href");
	};
});
	$(document).ready(function() {
      $(".bgr_menu_responsive.menu_mobile #menu-headnavi-1.menu .menu-item-has-children").click(function(event){
		  	$(this).parent().find('li.active').removeClass('active');
			$(this).addClass('active');
			$(".bgr_menu_responsive.menu_mobile #menu-headnavi-1.menu .menu-item-has-children.active").click(function(event){
				$('html').addClass('add_class');
				if($('html').hasClass('add_class')) {
					$(".menu-item-3453>a").removeAttr("href");
					$(".menu-item-3453>a").attr("href", "http://och.vn/quan-he-co-dong/");
					$(".menu-item-1882>a").removeAttr("href");
					$(".menu-item-1882>a").attr("href", "http://och.vn/tin-tuc-su-kien/");
				}
			 });
	   });
	});
// $(document).ready(function ($) {
// 	if($('.meun_trangcon').hasClass('menu_gioithieu')){
// 		$(".menu-item-1887>a").removeAttr("href");
// 		$(".menu-item-3453>a").removeAttr("href");
// 		$(".menu-item-1882>a").removeAttr("href");
// 		$(".menu-item-4250>a").removeAttr("href");
// 		$(".menu-item-4251>a").removeAttr("href");
// 	};
// });
// 	$(document).ready(function() {
//       $(".list_menu_item_child .menu .menu-item-has-children").click(function(event){
// 		  	$(this).parent().find('li.active').removeClass('active');
// 			$(this).addClass('active');
// 			$(".list_menu_item_child .menu .menu-item-has-children.active").click(function(event){
// 				$('html').addClass('add_class');
// 				if($('html').hasClass('add_class')) {
// 					$(".menu-item-3453>a").removeAttr("href");
// 					$(".menu-item-3453>a").attr("href", "http://och.vn/quan-he-co-dong/");
// 					$(".menu-item-1882>a").removeAttr("href");
// 					$(".menu-item-1882>a").attr("href", "http://och.vn/tin-tuc-su-kien/");
// 					$(".menu-item-4250>a").removeAttr("href");
// 					$(".menu-item-4250>a").attr("href", "http://och.vn/en/shareholder-relation/");
// 					$(".menu-item-4251>a").removeAttr("href");
// 					$(".menu-item-4251>a").attr("href", "http://och.vn/en/shareholder-relation/");
// 				}
// 			 });
// 	   });
// 	});

$(document).ready(function() {
        var widthb = $(window).width();
      if(widthb > 768){
		  
        if($('#post-2266').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			$('#post-2266').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        }
        
		  if($('#post-2126').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-2126').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        }
		  if($('#post-2215').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-2215').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        }
		if($('#post-2149').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-2149').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        }
		 if($('#post-2186').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-2186').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['sunrise-nhatrang', 'gioithieu', 'wellcome', 'dichvu', 'lienhe', 'sixSection']
        });
        } 
		  if($('#post-2212').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-2212').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['sunrise-hoian', 'gioithieu', 'wellcome', 'review', 'dichvu', 'lienhe']
        });
        } 
        if($('#post-2023').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-2023').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['och', 'tongquan', 'wellcome', 'trietly-kinhdoanh', 'tamnhin-sumenh', 'bomay-tochuc','thanhtuu','lienhe','nineSection']
        });
        } 
		if($('#post-4044').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4044').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        } 
		 if($('#post-4041').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4041').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        } 
		  if($('#post-4046').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4046').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        } 
		  if($('#post-4052').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4052').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        } 
		  if($('#post-4048').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4048').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        } 
		if($('#post-4050').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4050').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection']
        });
        } 
		if($('#post-4032').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4032').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['och', 'tongquan', 'wellcome', 'trietly-kinhdoanh', 'tamnhin-sumenh', 'bomay-tochuc','thanhtuu','lienhe']
        });
        } 
		if($('#post-3373').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-3373').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection','sevenSection','eightSection']
        });
        } 
		if($('#post-4054').length){
          $( ".vc_row-full-width.vc_clearfix" ).remove();
			  $('#post-4054').fullpage({
          sectionSelector: '.section',
          navigation: true,
          slidesNavigation: true,
          controlArrows: false,
          anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixSection','sevenSection','eightSection']
        });
        } 
      }
        
      });

})(jQuery);
