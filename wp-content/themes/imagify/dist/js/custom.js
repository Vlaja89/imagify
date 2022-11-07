jQuery(function($){

    // Remove Href Tag On First Menu Item
    $('ul').find('li:has(ul)').children('a').removeAttr('href')

    // Display Submeni on Parent Click on Mobile
    $('.menu-item-has-children').children('a').on('click', function(event){
        event.preventDefault();
        $(this).next('.sub-menu').slideToggle(100).end().parent('.menu-item-has-children').siblings('.menu-item-has-children').children('a').next('.sub-menu').slideUp(100);
    });

    // Open menu on Mobile
    (function () {
        $('.hamburger-menu').on('click', function() {
            $('.bar').toggleClass('animate');
            var mobileNav = $('.mobile-nav');
            mobileNav.toggleClass('hide show');
        })
    })();

    // Fixed hamburger menu when it is open
    $(".hamburger-menu").click(function(){
        $(".hamburger-menu").toggleClass("hamb-fixed");
    });

});