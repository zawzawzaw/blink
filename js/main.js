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

    $('.carousel').carousel();    

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

    function myScroller()  {
        var scrollPos = $('#page-wrapper').scrollTop();
    
        if( ( scrollPos != 0 ) ) {            
            $('.scroll-to-content .arrow').hide();
            if(scrolled==false && initialLoad==false) {
                scrolled = true;               
            }
                
        }       
        else if( ( scrollPos === 0 ) && (scrolled == true) ) {
            scrolled = false;            
            $('.scroll-to-content .arrow').show();
        }
    }

    var initialLoad = true;
    // home page first scroll
    var scrolled = false;

    $('#page-wrapper').on('scroll', function() {
        console.log('hi')
       myScroller();
    });

    myScroller();

    initialLoad = false;

    $('.scroll-to-content').on('click', function(e){
        e.preventDefault();
        var currentId = $(this).attr('href');
        $('#page-wrapper').animate({
            scrollTop: $(currentId).offset().top + 5
        }, 1200);
    });

    ///////
    ///////
    ///////

    $(".toggleMenu").on('click', function(e){
        $(this).prev('ul').toggleClass('mobile-menu');
    });
    
});