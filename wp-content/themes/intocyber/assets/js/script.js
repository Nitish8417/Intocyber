$(document).ready(function () {
    const header = $('header');
    const headerOffset = header.offset().top;
    function handleScroll() {
        if ($(window).scrollTop() > headerOffset) {
            header.addClass('sticky');
        } else {
            header.removeClass('sticky');
        }
    }
    handleScroll();
    $(window).scroll(handleScroll);
});


$(document).ready(function() {
    $('.icon-scroll').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: $('#scroll-down').offset().top - 84
        }, 800);
    });
});



