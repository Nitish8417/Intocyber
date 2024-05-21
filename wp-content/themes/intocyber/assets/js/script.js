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


$(document).ready(function () {
    $('#header .icon-scroll').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#scroll-down').offset().top - 84
        }, 800);
    });
});


$(document).ready(function() {
    function scrollToHeight() {
        var targetHeight = 540;
        $('html, body').animate({
            scrollTop: targetHeight
        }, 'slow');
    }
    $('#sub-header .icon-scroll').on('click', function() {
        scrollToHeight();
    });
});


$(document).ready(function () {
    $('.accordion-block-item').click(function () {
        $(this).find('.accordion-decp').toggleClass('active');
         $(this).find('.count').toggleClass('count-opcity');
        
    });
});


