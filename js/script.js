/* global $ */

/* eslint-env jquery */
$(document).ready(function() {
    
    
    /* For the sticky navigation */
    $('.js--section-apraksts').waypoint(function(direction) {
        if (direction === "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
      offset: '60px;'
    });
    
    
    /* Scroll on buttons */
    $('.js--scroll-to-musu-kontakti').click(function () {
       $('html, body').animate({scrollTop: $('.js--section-musu-kontakti').offset().top}, 1000);
    });
    
    $('.js--scroll-to-pakalpojumi').click(function () {
       $('html, body').animate({scrollTop: $('.js--section-pakalpojumi').offset().top}, 1000);
    });
    
    
    /* Navigation scroll */
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    
    
    /* Animations on scroll */
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn');
    }, {
        offset: '60%'
    });

    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeIn');
    }, {
        offset: '90%'
    });

    $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated fadeIn');
    }, {
        offset: '90%'
    });

    $('.js--wp-4').waypoint(function(direction) {
        $('.js--wp-4').addClass('animated fadeIn');
    }, {
        offset: '90%'
    });

    
    /* Mobile navigation */
    $('.js--nav-icon').click(function(){

        var nav = $('.js--main-nav__list');
        var open = $('.menu-icon-open');
        var close = $('.menu-icon-close');

        nav.slideToggle(200);

        open.toggle();
        close.toggle()

    });
});