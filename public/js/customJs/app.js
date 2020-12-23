let animeCount=0
let animeCountSecond=0

window.onscroll=()=>{
    if(window.scrollY>52&&window.scrollY<1080){
        console.log(window.scrollY)
        let trX=(window.scrollY/1080)*100
        let trY=(window.scrollY/1080)*30
        gsap.to('.box-img-animate-item:nth-child(1)',{
            x:trX+'%',
            duration:1,
            ease:'ease-in'


        })
        gsap.to('.box-img-animate-item:nth-child(2)',{
            y:trY+'%',
            duration:1,
            ease:'ease-in'


        })
        gsap.to('.box-img-animate-item:nth-child(3)',{
            x:'-'+(window.scrollY/1080)*50+'%',
            y:(window.scrollY/1080)*20+'%',
            duration:1,
            ease:'ease-in'


        })
        gsap.to('.box-img-animate-item:nth-child(5)',{
            x:(window.scrollY/1080)*40+'%',
            y:(window.scrollY/1080)*20+'%',
            duration:1,
            ease:'ease-in'


        })
        gsap.to('.box-img-animate-item:nth-child(6)',{
            x:(window.scrollY/1080)*50+'%',
            y:'-'+(window.scrollY/1080)*20+'%',
            duration:1,
            ease:'ease-in'


        })
        // let tr

        // document.querySelector('.box-img-animate-item').style.transform='translateX('+trX+'%)'
    }

}

looper('.show-on-scroll')

function corusel(){
    let images=document.querySelectorAll('.img-move')
    setInterval(()=>{
        imageChanger(images)
    },6000)


}

function imageChanger(images){
    let imageactivenumber=0
    for(let i=0;i<images.length;i++){
        if(images[i].classList.contains('active')){
            images[i].classList.remove('active')
            if(i+1<images.length){
                images[i+1].classList.add('active')
            }
            else{
                images[0].classList.add('active')
            }
            break;
        }
    }


}
corusel()
