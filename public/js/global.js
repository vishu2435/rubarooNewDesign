
function looper(selector){
var scroll=window.requestAnimationFrame||
            function(callback){window.setTimeout(callback,1000/60)}


var elements=document.querySelectorAll(selector)
console.log('elements are',elements)
function loop(){
elements.forEach(function(element){
    if(isElementInViewport(element)){
        element.classList.add('is-visible')
        // console.log("This is loop function")
    }

})
scroll(loop)
}
function isElementInViewport(ele){
    if(typeof jQuery=="function" && ele instanceof jQuery){
        ele=ele[0]
    }
    var rect=ele.getBoundingClientRect();
    return(
        (rect.top<=0&&rect.bottom>=0)||
        (rect.bottom>=(window.innerHeight||document.documentElement.clientHeight)
        &&rect.top<=(window.innerHeight||document.documentElement.clientHeight))
        ||
        (
            rect.top>=0&&
            rect.bottom<=(window.innerHeight||document.documentElement.clientHeight)
        )
    )
}

loop()
}
