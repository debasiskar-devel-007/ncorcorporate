var base = '/encore_mb';
(function($) {
	
	Drupal.behaviors.myBehavior = {
       attach: function (context, settings) {

           $( window ).resize( function(){
               $('.views_slideshow_cycle_main').each(function () {
                   var img_height;
                   $(this).find('.views-slideshow-cycle-main-frame-row').each(function () {
                       var tmp_img_height = $(this).height();
                       if (tmp_img_height !== 0 ) {
                           img_height = tmp_img_height;
                       }
                       return;
                   });
                   if (img_height !== 0) {
                       $(this).height(img_height).children('.views-slideshow-cycle-main-frame').height(img_height);
                   }
                   return;
               });
           });

			 if(window.location.href.indexOf("es") > -1){								$('.mainmenu').find('a').css('padding','0 13px');				$('.footernav-con').css('width','950');							}

           $('.menu').addClass('menudisplay');

       /*    $('.collapsiblemenu').toggle(
               function () {
                 alert(1);
                 $('.navbar-collapse').find('nav').removeClass('menudisplay');

               },
               function () {
                  alert(2);
                   $('.navbar-collapse').find('nav').addClass('menudisplay');
               });*/

           $('.collapsiblemenu').click(function(){

              //alert(1);
               //alert($('.menu').length);
               if($('.menu').css('display')=='block'){

                   //alert(1);
                   $('.menu').addClass('menudisplay');

               }
               else{

                   $('.menu').removeClass('menudisplay');

               }

           });






           $(window).resize(function(){

               var h=parseInt($(window).width() / 2.23776);

               $('#views_slideshow_cycle_teaser_section_banner_slide-block').find('img').css('width',$(window).width());
               $('#views_slideshow_cycle_teaser_section_banner_slide-block').find('img').css('height',h);

           });


           if($(window).width() > 1220){

              // $('.collapsiblemenu').hide();

           }

           var h=parseInt($(window).width() / 2.23776);

           $('#views_slideshow_cycle_teaser_section_banner_slide-block').find('img').css('width',$(window).width());
           $('#views_slideshow_cycle_teaser_section_banner_slide-block').find('img').css('height',h);



           $('.aboutslider').bxSlider({


               slideWidth: 280,
               minSlides: 2,
               maxSlides: 3,
               slideMargin: 10
           });


           $(".slider1").responsiveSlides({
               auto: true,
               pager: true,
               nav: true,
               speed: 500,
               maxwidth: 800,
               namespace: "centered-btns"
           });



		   
            $('.player').find('iframe').attr('width','100%').attr('height','100%');

           $('#scdown').click(function(){

               //alert(9);

               $("html, body").animate({ scrollTop:$('.heading-con').offset().top}, 600);
           });
		}
	};


})(jQuery);


