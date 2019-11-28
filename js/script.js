//HEADER MENU SCROLL

var header = document.querySelector('.site-header');

window.addEventListener('wheel', function(scroll) {
    //scroll up
    if (scroll.deltaY <= 0) {
        header.style.opacity = '1';
        header.style.visibility = 'visible';
        header.style.position = 'sticky';
    }
    //scroll down
    else if (scroll.deltaY > 0 && pageYOffset >= 60 ) {
        header.style.opacity = '0';
        header.style.visibility = 'hidden';
    }
});



// COUNTER FUNCTION

var a = 0;
$(window).scroll(function() {
    var oTop = $('.statistic_main__counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },
                {
                    duration: 1500,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }
                });
        });
        a = 1;
    }
});

