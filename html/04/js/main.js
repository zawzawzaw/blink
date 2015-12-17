// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

$(document).ready(function(){   

    $('.carousel').carousel({
        pause: "false"
    });    

    var $first = $('.first'),
        $second = $('.second'),
        $third = $('.third'),
        firstOrgColor = $first.css('color');
        secondOrgColor = $second.css('color');
        thirdOrgColor = $third.css('color');

    (cycle = function() {
        $first.animate({color:thirdOrgColor}, 'fast', function(){
            $second.animate({color:thirdOrgColor}, 'fast', function(){
                $third.animate({color:secondOrgColor}, 'fast').animate({color:thirdOrgColor}, 'fast', cycle);
            }).animate({color:secondOrgColor}, 'fast');
        }).animate({color:firstOrgColor}, 'fast');        
    })();

    /////
    /////
    ///// 

    var scrolled = false;
    var firstScroll = true;
    var mainContentOffset = $('#main-content').offset().top;

    function scrollToContent() {
        var scrollPos = $('#page-wrapper').scrollTop();        

        if(scrollPos > 0 && scrollPos <= mainContentOffset) {

            if(firstScroll==true) {
                firstScroll = false;

                var target_y = $('#content-wrapper').offset().top + 5;

                TweenMax.to($('#page-wrapper'), 1.2, {scrollTo:{y:target_y,autoKill: false}, ease:Quad.easeInOut});


                // $('#page-wrapper').animate({
                //     scrollTop: $("#content-wrapper").offset().top + 5
                // }, {
                //     duration: 1200,
                //     start: function() {
                //         // $('#page-wrapper').off('scroll');
                //     },
                //     complete: function() {
                //         // $('#page-wrapper').on('scroll');
                //     }
                // });
            }
        }
        if(scrollPos==0) {
            firstScroll = true;
        }
    }

    function showHideArrow()  {
        var scrollPos = $('#page-wrapper').scrollTop();       
    
        if( ( scrollPos != 0 ) ) {            
            $('.scroll-to-content .arrow').hide();
            if(scrolled==false) {
                scrolled = true;             
            }
                
        }       
        else if( ( scrollPos === 0 ) && (scrolled == true) ) {
            scrolled = false;            
            $('.scroll-to-content .arrow').show();
        }
    }

    function addBorder() {
        var scrollPos = $('#page-wrapper').scrollTop();       

         if(scrollPos >= mainContentOffset){
            $('#menu-logo-wrapper').addClass('white-version');
        }else {
            $('#menu-logo-wrapper').removeClass('white-version');
        }
    }

    $('#page-wrapper').on('mousewheel', function() {

    });
    $('#page-wrapper').on('scroll', function() {        
        showHideArrow();
        addBorder();               
        scrollToContent();
    });    



    ///////
    ///////
    ///////

    initialLoad = false;

    $('.scroll-to-content').on('click', function(e){
        e.preventDefault();
        var currentId = $(this).attr('href');
        // $('#page-wrapper').animate({
        //     scrollTop: $(currentId).offset().top + 5
        // }, 1200);
        var target_y = $(currentId).offset().top + 5;

        TweenMax.to($('#page-wrapper'), 1.2, {scrollTo:{y:target_y,autoKill: false}, ease:Quad.easeInOut});
    });

    ///////
    ///////
    ///////

    $(".main-nav li").children('a').on('click', function(e){
        if($(this).hasClass('has-child')) {
            $('.main-nav li a').not(this).removeClass('active');
            $('.main-nav li').not($(this).parent()).removeClass('active');
            $(this).toggleClass('active');
            $(this).parent().toggleClass('active');

            if($(this).hasClass('active')) {
                $("#menu-logo-wrapper").removeClass('add-border');
            }

            $("#menu-logo-wrapper").toggleClass('add-border');
            // $('.sidebar-nav').toggleClass('open').toggleClass('fadeInLeft');
        }
    });
    
    // $('#sub-nav-container').hover(function(e){
    //     $("#menu-logo-wrapper").toggleClass('extra-height');
    //     $('.sub-nav').toggleClass('active');        
    //     $('.by-categories').toggleClass('active');
    // });

    $('ul.sub-nav li').hover(function(){
        $(this).find('.sub-nav-child').toggleClass('animated').toggleClass('fadeInLeft');
    });
    
});