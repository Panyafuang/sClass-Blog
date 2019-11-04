let myNav = document.querySelector('.navExpand');

document.body.addEventListener('scroll', function(){
    if(document.body.scrollTop > 200 ){
        myNav.classList.add('navShut');
    }else{
        myNav.classList.remove('navShut');
    }
})