function gallery(){
    document.querySelectorAll('.swiper-slide__main__button')
    .forEach(ele=>{
        ele.addEventListener('click',()=>{

            console.log('Element is ',ele)
            // ele.setAttribute('data-hidden','')
            let targetId=ele.getAttribute('data-target')
            let cardElement=document.querySelector('.popup-list-items')
            cardElement.setAttribute('data-visible','')
            cardElement.setAttribute('targetid',targetId)

            // cardElement.appendChild(parser.parseFromString(element[parseInt(targetId)],'text/html').body.firstElementChild)
            cardSetter(cardElement,targetId)

        })
    })

}
function cardSetter(mediaCorusel,targetid){
    // let mediaCorusel=document.querySelector('.popup-list-items')


    let children=mediaCorusel.children
    let targetId=mediaCorusel.getAttribute('targetid')

    for(let i=0;i<children.length;i++){
        console.log('Children are ',children[i],children[i].getAttribute('id')!==targetId)
        if(children[i].getAttribute('id')===targetId){
            children[i].setAttribute('card-popup-data-visible','')
         }
        //else{
        //     children[i].style.display='flex';
        //     children[i].style.opacity=1;

        // }
    }
}
function removeCards(){
    let cardElement=document.querySelector('.popup-list-items')
    cardElement.removeAttribute('data-visible')
    let childCard=document.querySelector('.home-button-popup[card-popup-data-visible]')
    childCard.removeAttribute('card-popup-data-visible')
    // let ele=document.querySelector('.home-causes-item[data-hidden]')
    // ele.removeAttribute('data-hidden','')
}
document.querySelector('#popup-permanant').addEventListener('click',removeCards)
gallery()

document.querySelector('.swiper-button-next').addEventListener('click',gallery)
document.querySelector('.swiper-button-prev').addEventListener('click',gallery)
