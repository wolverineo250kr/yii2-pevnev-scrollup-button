$(".button-up").on('click', function () {
    $("html, body").animate({scrollTop: 0}, "slow");
    return false;
});

function showHide(element) {
    var windowHeight = $(window).height();

    if ($(window).scrollTop() > (windowHeight)) {
        element.fadeIn(200);
    } else {
        element.fadeOut(200);
    }
}

$(document).ready(function () {
    showHide($(".button-up"));
});

$(window).scroll(function () {
    showHide($(".button-up"));
});