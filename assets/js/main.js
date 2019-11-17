//
// ─── NAVBAR EFFACT ──────────────────────────────────────────────────────────────
//

let myNav = document.querySelector('.navExpand');
document.body.addEventListener('scroll', function(){
    if(document.body.scrollTop > 150 ){
        // Add class .navShut
        myNav.classList.add('navShut');
    }else{
        // Remove class .navShut
        myNav.classList.remove('navShut');
    }
})


//
// ─── VIDEO PLAY ─────────────────────────────────────────────────────────────────
//

$(function () {
    // Auto play modal video
    $(".video").click(function () {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-video"),
            videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
    });
});

//
// ─── TO TOP ─────────────────────────────────────────────────────────────────────
//

    function runScroll() {
        scrollTo(document.body, 0, 600);
    }
    var scrollme;
    scrollme = document.querySelector("#scrollme");
    scrollme.addEventListener("click", runScroll, false)

    function scrollTo(element, to, duration) {
        if (duration <= 0) return;
        var difference = to - element.scrollTop;
        var perTick = difference / duration * 10;

        setTimeout(function () {
            element.scrollTop = element.scrollTop + perTick;
            if (element.scrollTop == to) return;
            scrollTo(element, to, duration - 10);
        }, 10);
    }
