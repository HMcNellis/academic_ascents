jQuery(function($){

    /*------------------------------------*\
        ::Mobile Menu
    \*------------------------------------*/
    $('.m-nav').click(function () {
        $('.hamburger').toggleClass('x-in-disguise');
        $('.head-nav').toggleClass('heynav');
    });

    $('.head-nav > ul > li').click(function(){
        $(this).toggleClass('hey_sub-nav');
    });
    /*------------------------------------*\
        //scroll to href
    \*------------------------------------*/
        var scrollElement = 'html, body';

        $("a[href*='#']").click(function(event) {
            var hasBlog = location.href.indexOf('blog') >= 0;
            var hasArchive = $('body').hasClass('archive');
            var hasCategory = $('body').hasClass('category');
            var isSingle = $('body').hasClass('single-post');
            if ( hasBlog || hasArchive || hasCategory || isSingle) {
            } else {
                event.preventDefault();
                var $this = $(this);
                target = this.hash;
                $target = $(target);
     
                $(scrollElement).stop().animate({
                    'scrollTop': $target.offset().top - 130
                }, 1000);
            }
            
        });
    /*------------------------------------*\
            //Animate Imgs
    \*------------------------------------*/

        $('.imgright').each(function(){
            $(this).find('.thirds__group--2 img').addClass('imghide')
         });
        $('.imgright').waypoint(function(){  
            $(this).find('.thirds__group--2 img').removeClass('imghide');
        }, { offset: '50%' });
         $('.imgleft').each(function(){
            $(this).find('.thirds__group--1 img').addClass('imghide')
         });  
        $('.imgleft').waypoint(function(){
            $(this).find('.thirds__group--1 img').removeClass('imghide');
        }, { offset: '50%' });

    /*------------------------------------*\
        ::four CTA's
    \*------------------------------------*/
    $('.cta-wrap').hover(function(){
        $(this).find('.cta-cover').toggleClass('cta-reveal');  
    });

    /*------------------------------------*\
        ::Flexslider
    \*------------------------------------*/

    $('.hero__slider').flexslider({
        animation: 'slide',
        directionNav: true,
        smoothHeight: true,
    });

    $('.quote__slider').flexslider({
        animation: 'slide',
        controlNav: true,
        directionNav: false,
        animationLoop: false,
        smoothHeight: true,
    });
    /*------------------------------------*\
        ::blog excerpt fade in
    \*------------------------------------*/
        $('.sticky-post').waypoint(function() {
        var cnt = 1000;
        $(this).find('.sticky-posts__group').each(function(){
            var $this = $(this);
            setTimeout(function(){
                $this.addClass('fading');
            }, cnt);
            cnt = cnt +500;
        });
        }, { offset: '80%' });
});
