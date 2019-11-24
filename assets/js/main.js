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


//
// ─── GET FULLYEAR ───────────────────────────────────────────────────────────────
//

    let currYear = new Date().getFullYear();
    document.querySelector('.year').innerHTML = currYear;
