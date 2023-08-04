let opener = document.querySelector('.opener');
let circle = document.querySelector('.circle');
let check = true;
let card = document.querySelector('.inner-face');
let programmerName = document.querySelector('#programmer-name');
let programmerDescription = document.querySelector('#programmer-description');
let transparent = document.querySelector('#transparent');
let divSovrapposto = document.querySelector('#div-sovrapposto');

if (circle) {
    
    let programmers = [
        {name:'Alberto', description: 'ciao', url:'/img/maccio.jpg'},
        {name:'Leonardo', description:'ciao', url:'/img/leo.jpeg' },
        {name:'Graziano', description: 'ciao', url:'/img/graziano.jpeg'},
        {name:'Luigi', description:'ciao', url:'/img/luigi.jpeg' },
        {name:'Morris', description:'ciao', url:'/img/morris.jpeg' },
        {name:'Emilia', description:'ciao', url:'/img/maccio.jpg' },
         
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
            moved.setAttribute('data-angle', angle); 
            moved.setAttribute('id', programmers[i].name);
            moved.style.transform = `rotate(${angle}deg) translate(200px) rotate(-${angle}deg)`;
            divSovrapposto.classList.add('d-none');
        })
    
    
    
        }else{
        opener.style.transform = 'rotate(0deg)';
        check=true;
        movedDivs.forEach((moved, i)=>{
            moved.style.transform = `rotate(0deg) translate(0px) rotate(-0deg)`;
        })
        transparent.classList.add('d-none');
        divSovrapposto.classList.remove('d-none');
        
    }
    });
    
        movedDivs.forEach((div, i) => {
            div.addEventListener('click', ()=>{
                card.style.backgroundImage = `url(${programmers[i].url})`;
                programmerName.innerHTML = `Nome: ${programmers[i].name}`; 
                programmerDescription.innerHTML = `${programmers[i].description}`;
                transparent.classList.remove('d-none');


                let movedAngle = +div.dataset.angle;
                let exp = 360 - movedAngle;

                movedDivs.forEach((moved)=>{
                    let angle = +moved.dataset.angle;
                    moved.style.transform = `rotate(${angle + exp}deg) translate(200px) rotate(-${angle + exp}deg)`;
            });
        })
    })

}
