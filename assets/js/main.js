//
// ─── NAVBAR EFFACT ──────────────────────────────────────────────────────────────
//

let myNav = document.querySelector('.navExpand');
document.body.addEventListener('scroll', function(){
    if(document.body.scrollTop > 200 ){
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