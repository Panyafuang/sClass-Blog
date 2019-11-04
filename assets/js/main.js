$(window).scroll(function () {
    var scrollTop = $(this).scrollTop()

    if (scrollTop > 1) {
        //shut
        $('#myNav').css('padding', '5px 25px')
    } else {
        //expand
        $('#myNav').css('padding', '25px')
    }
})