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
// ─── OWL CAROUSEL ───────────────────────────────────────────────────────────────
//

    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: false
                }
            }
        });
    });


