// control the timing for the loading bar
$(function() {



    $('.chart').easyPieChart({
        easing: 'easeOutElastic',
        size: 250,
        lineWidth: 5,
        scaleColor: false,
        barColor: '#f8c5a1',
        trackColor: '#f28c44',

        onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));}

    });

var global_counter=0;



$('.chart').data('easyPieChart').update(0);

var interval=1000;

var counter=0;

function myAnimation() {
    counter++;

    if(counter<=24) {
        interval=1000;
    }
    if(counter>=24 && counter<=49) {
        interval=3000;
    }
    if(counter>=49 && counter<=74) {
        interval=6000;
    }
    if(counter>=74 && counter<=99) {
        interval=9000;
    }
    if(counter==101){
        window.location="response";
    }


    $('.chart').data('easyPieChart').update(counter);
    setTimeout( myAnimation, interval );
}

setTimeout( myAnimation, interval );

});