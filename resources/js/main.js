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


// start about-us

let opener = document.querySelector('.opener');
let circle = document.querySelector('.circle');
let check = true;
let card = document.querySelector('.inner');
let programmerName = document.querySelector('#programmer-name');
let programmerDescription = document.querySelector('#programmer-description');
let transparent = document.querySelector('#transparent');


let programmers = [
    {name:'Alberto', description: 'https://www.linkedin.com/in/alberto-tridici-fullstackdeveloperjunior/', url: '/img/maccio.jpg'}, 
    {name:'Leonardo', description: 'https://www.linkedin.com/in/leonardo-lerario-457b5a215/', url: '/img/leo.jpeg'},
    {name:'Graziano', description: 'https://www.linkedin.com/in/graziano-calella-fullstack-webdeveloper/', url: '/img/graziano.jpeg'},
    {name:'Luigi', description: 'https://www.linkedin.com/in/luigisantillan-webdeveloper/', url: '/img/luigi.jpeg'},
    {name:'Morris', description: 'https://www.linkedin.com/in/morris-vattiata/', url: '/img/morris.jpeg'},
    {name:'Emilia', description: 'Full Stack Developer', url: '/img/scarpeNike.jpg'},
];

programmers.forEach((programmer)=>{
    let div = document.createElement('div');
    div.classList.add('moved');
    div.style.backgroundImage = `url(${programmer.url})`;
    circle.appendChild(div);
});

let movedDivs = document.querySelectorAll('.moved');

opener.addEventListener('click', ()=>{

    if(check){
    opener.style.transform = 'rotate(45deg)';
    check=false;
    movedDivs.forEach((moved, i)=>{
        let angle = (360 * i) / movedDivs.length;
        moved.style.transform = `rotate(${angle}deg) translate(200px) rotate(-${angle}deg)`;
    })



    }else{
    opener.style.transform = 'rotate(0deg)';
    check=true;
    movedDivs.forEach((moved, i)=>{
        moved.style.transform = `rotate(0deg) translate(0px) rotate(-0deg)`;
    })
    transparent.classList.add('d-none');
    
}
});

    movedDivs.forEach((div, i) => {
        div.addEventListener('click', ()=>{
            card.style.backgroundImage = `url(${programmers[i].url})`;
            programmerName.innerHTML = `Nome: ${programmers[i].name}`; 
            programmerDescription.innerHTML = `${programmers[i].description}`;
            transparent.classList.remove('d-none');
        })
    })