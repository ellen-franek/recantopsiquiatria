var App=function(){return{init:function(){$(".slide-unidades.owl-carousel").owlCarousel({loop:!1,margin:0,nav:!0,responsive:{0:{items:1},600:{items:3},1000:{items:3}}}),$(window).scroll(function(){$(window).scrollTop()>=100?$(".buttons-fixed").slideDown("fast"):$(".buttons-fixed").slideUp("fast")}),$(".menu-mobile").on("click",function(){$("nav").stop().slideToggle()}),$(window).scroll(function(){$(window).scrollTop()+$(window).height()>$(document).height()-100?$(".buttons-fixed").addClass("bottomFix"):$(".buttons-fixed").removeClass("bottomFix")})}}}();