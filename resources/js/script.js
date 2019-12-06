$(document).ready(function () {

    $('.js--section-features').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        }else {
            $('nav').removeClass('sticky');
        }
    },
    {
        offset: '60px'
    })



    // var waypoints = $('#options-only').waypoint({
    //     handler: function (direction) {
    //         notify(this.element.id + ' hit')
    //     }
    // })



    // $('h1').click(function() {
    //     $(this).css('background-color', "#ff0000");
    // })
});