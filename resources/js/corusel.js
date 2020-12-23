function corusel(){
    let i=0
    let j=0
    let elements=document.querySelectorAll('.img-move')
    let rightarrow=document.querySelector('#arrow-right')
    let leftarrow=document.querySelector('#arrow-left')
    let indicators=document.querySelectorAll('.indicators>div')
    
    leftarrow.addEventListener('click',function(){
        if(i===0){
            elements[i].classList.remove('active')
            indicators[i].classList.remove('indicate-active')
            i=elements.length-1
            elements[i].classList.add('active')
            indicators[i].classList.add('indicate-active')
        }else{
            elements[i].classList.remove('active')
            
            indicators[i].classList.remove('indicate-active')
            i=i-1
            elements[i].classList.add('active')
            
            indicators[i].classList.add('indicate-active')
            
        }
    })

    rightarrow.addEventListener('click',function(){
        console.log(i,'elements length : ',elements.length )
        
        if(i===elements.length-1){
            elements[i].classList.remove('active')

            indicators[i].classList.remove('indicate-active')
            i=0
            console.log('In if block element is ',elements[i])
          
            indicators[i].classList.add('indicate-active')
            elements[i].classList.add('active') 
               }
        else{
            elements[i].classList.remove('active')
            indicators[i].classList.remove('indicate-active')

            i=i+1
          
            indicators[i].classList.add('indicate-active')
            elements[i].classList.add('active')
        }
       
        
        console.log()
    })
    setInterval(()=>{
        rightarrow.click()
    },5000)
}

corusel()