let opener = document.querySelector('.opener');
let circle = document.querySelector('.circle');
let check = true;
let card = document.querySelector('.inner-face');
let programmerName = document.querySelector('#programmer-name');
let programmerDescription = document.querySelector('#programmer-description');
let programmerLinkedin = document.querySelector('#programmer-linkedin');
let transparent = document.querySelector('#transparent');
let divSovrapposto = document.querySelector('#div-sovrapposto');


if (circle) {
    
    let programmers = [
        {name:'Alberto Tridici', description: 'Junior Web-Developer', url:'/img/maccio.jpg', linkedin:'https://www.linkedin.com/in/alberto-tridici-fullstackdeveloperjunior'},
        {name:'Leonardo Lerario', description:'Junior Web-Developer', url:'/img/chisiamoLeo.jpg', linkedin:'https://www.linkedin.com/in/leonardo-lerario-developer/' },
        {name:'Graziano Calella', description: 'Junior Web-Developer', url:'/img/graziano.jpeg', linkedin:'https://www.linkedin.com/in/graziano-calella-fullstack-webdeveloper'},
        {name:'Luigi Santillan', description:'Junior Web-Developer', url:'/img/luigi.jpeg', linkedin:'https://www.linkedin.com/in/luigisantillan-webdeveloper' },
        {name:'Morris Vattiata', description:'Junior Web-Developer', url:'/img/morris.jpeg', linkedin:'https://www.linkedin.com/in/morris-vattiata-juniordeveloper' },
    ];
    
    programmers.forEach((programmer)=>{
        let div = document.createElement('div');
        div.classList.add('moved');
        div.style.backgroundImage = `url(${programmer.url})`;
        circle.appendChild(div);
    });
    

    let smallWidth = window.innerWidth;
    let movedDivs = document.querySelectorAll('.moved');


    opener.addEventListener('click', ()=>{
    
        console.log(check);

        if (smallWidth < 400) {
            if(check){
            console.log('sono nel primo if');
            opener.style.transform = 'rotate(45deg)';
            check=false;
            movedDivs.forEach((moved, i)=>{
                let angle = (360 * i) / movedDivs.length;
                moved.setAttribute('data-angle', angle); 
                moved.setAttribute('id', programmers[i].name);
                moved.style.transform = `rotate(${angle}deg) translate(100px) rotate(-${angle}deg)`;
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

                movedDivs.forEach((div, i) => {
            div.addEventListener('click', ()=>{
                card.style.backgroundImage = `url(${programmers[i].url})`;
                programmerName.innerHTML = `${programmers[i].name}`; 
                programmerDescription.innerHTML = `${programmers[i].description}`;
                programmerLinkedin.href=`${programmers[i].linkedin}`
                transparent.classList.remove('d-none');

            //     let movedAngle = +div.dataset.angle;
            //     let exp = 360 - movedAngle;

            //     movedDivs.forEach((moved)=>{
            //         let angle = +moved.dataset.angle;
            //         moved.style.transform = `rotate(${angle + exp}deg) translate(100px) rotate(-${angle + exp}deg)`;
            // });
        })
    })
 

        }else{

            if(check){
                console.log('sono nel secondo if');
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

                    movedDivs.forEach((div, i) => {
            div.addEventListener('click', ()=>{
                card.style.backgroundImage = `url(${programmers[i].url})`;
                programmerName.innerHTML = `${programmers[i].name}`; 
                programmerDescription.innerHTML = `${programmers[i].description}`;
                programmerLinkedin.href=`${programmers[i].linkedin}`
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



    });
    
    //     movedDivs.forEach((div, i) => {
    //         div.addEventListener('click', ()=>{
    //             card.style.backgroundImage = `url(${programmers[i].url})`;
    //             programmerName.innerHTML = `${programmers[i].name}`; 
    //             programmerDescription.innerHTML = `${programmers[i].description}`;
    //             programmerLinkedin.href=`${programmers[i].linkedin}`
    //             transparent.classList.remove('d-none');

    //             let movedAngle = +div.dataset.angle;
    //             let exp = 360 - movedAngle;

    //             movedDivs.forEach((moved)=>{
    //                 let angle = +moved.dataset.angle;
    //                 moved.style.transform = `rotate(${angle + exp}deg) translate(200px) rotate(-${angle + exp}deg)`;
    //         });
    //     })
    // })

}
