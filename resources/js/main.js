let swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

let watch = document.querySelectorAll('.watch')
function callback(items) {
    items.forEach(item => {
        if (item.isIntersecting) {
            item.target.classList.add("in-page");
        // }else{
        //     item.target.classList.remove("in-page");
        }
    });
}

let observer = new IntersectionObserver(callback,{threshold:0.6});
watch.forEach(element => {
    observer.observe(element);
});

let navbar = document.querySelector('#navbar');
window.addEventListener('scroll', ()=>{
    let scrolled = window.scrollY;

    if (scrolled > 0) {
        navbar.classList.add("bg-nav");
    }else{
        navbar.classList.remove("bg-nav");
    }
});

let blur = document.querySelectorAll('.blur');

// START controllo swiper del dettaglio --------------------------------------------------------------------------------------
let swiperThumbs = new Swiper(".swiperThumbs", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,

    mousewheel: {
    releaseOnEdges: true,
    },
});

let swiperMain = new Swiper(".swiperMain", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiperThumbs,
    },
});
// END controllo swiper del dettaglio ----------------------------------------------------------------------------------------


