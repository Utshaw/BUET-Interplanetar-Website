$(document).ready(function () {

    // sticky navigation
    $('.js--section-features').waypoint(function (direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    },
        {
            offset: '60px'
        });

    $('.js--scroll-to-achievements').click(function () {
        $('html, body').animate({ scrollTop: $('#achievements-section').offset().top }, 1000);
    });


    $('.js--scroll-to-message').click(function () {
        $('html, body').animate({ scrollTop: $('#section-message').offset().top }, 1000);
    });


    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

        // Animation on scroll
        $('.js--wp-1').waypoint(function(direction) {
            $('.js--wp-1').addClass('animated fadeIn');
        },  {
            offset: '50%'
        });



        $('.js--wp-2').waypoint(function(direction) {
            $('.js--wp-2').addClass('animated pulse');
        },  {
            offset: '50%'
        });

        $('#moments-section').waypoint(function(direction) {
            $('#moments-section').addClass('animated pulse');
        },  {
            offset: '50%'
        });

        // Mobile nav
        $('.js--nav-icon').click(function() {
            var nav = $('.js--main-nav');
            var icon = $('#menu-burger');
            nav.slideToggle(200); // in milisecond(s)
            if(icon.attr('name') === "menu")  {
                icon.attr('name', 'close');
            }else{
                icon.attr('name', 'menu');
            }
            

        });
        

});