//STICKY HEADER
const mainNav = document.querySelector('.header__main');
const contentWrapper = document.querySelector('#content-wrapper');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 52) {
        mainNav.classList.add("headerSticky");
        contentWrapper.classList.add('marginTop');
    } else {
        mainNav.classList.remove("headerSticky");
        contentWrapper.classList.remove('marginTop');
    }
})

/*
const headerMain = document.querySelector('.header__main');
const headerNav = document.querySelector('.header__navigation');
const contentWrapper = document.querySelector('#content-wrapper');

window.addEventListener('scroll', function(){
    if(window.matchMedia('(min-width: 992px)').matches)
        headerStick1(88);
    if(window.matchMedia('(min-width: 768px) and (max-width: 991px)').matches)
        headerStick(40);
    if(window.matchMedia('(min-width: 576px) and (max-width: 767px)').matches)
        headerStick(40);
    if(window.matchMedia('(min-width: 469px) and (max-width: 575px)').matches)
        headerStick(40);
    if(window.matchMedia('(min-width: 401px) and (max-width: 458px)').matches)
        headerStick(80);
    if(window.matchMedia('(max-width: 400px)').matches)
        headerStick(80);
})

function headerStick(a){
    if (window.pageYOffset > a) {
        headerMain.classList.add("headerSticky");
        headerNav.classList.add('headerSticky2');
        contentWrapper.classList.add('marginTop');
    } else {
        headerMain.classList.remove("headerSticky");
        headerNav.classList.remove('headerSticky2');
        contentWrapper.classList.remove('marginTop');
    }
}

function headerStick1(a){
    if (window.pageYOffset > a) {
        headerMain.classList.add("headerSticky1");
        headerNav.classList.add('headerSticky2');
        contentWrapper.classList.add('marginTop');
    } else {
        headerMain.classList.remove("headerSticky1");
        headerNav.classList.remove('headerSticky2');
        contentWrapper.classList.remove('marginTop');
    }
}
*/

//MOBILE MENU SCROLL
/*
const mobileMenu = document.querySelector('.main-menu.mobile-mega-menu');
const menuBottom = document.querySelector('.main-menu__bottom');
var scrollPos = 0;
mobileMenu.addEventListener('scroll', function(e) {
    var currentPos = mobileMenu.scrollTop;
    if(currentPos > scrollPos){
        menuBottom.style.display = 'none';
    }else{
        menuBottom.style.display = 'block';
    }
    scrollPos = currentPos;
});
*/

//ACCARDION
const sectionTitle = document.querySelector('.col-md-2.nopadding .section-title');
const sectionTitleCont = document.querySelector('.account-sidebar-nav');
const parent = document.querySelector('.col-md-2.nopadding');
if (sectionTitle) {
    sectionTitle.addEventListener('click', function () {
        if (sectionTitleCont.classList.contains('accorHeight')) {
            sectionTitleCont.classList.remove('accorHeight')
            parent.classList.remove('active')
        } else {
            sectionTitleCont.classList.add('accorHeight')
            parent.classList.add('active')
        }
        // sectionTitleCont.classList.toggle('accorHeight')
    })
}