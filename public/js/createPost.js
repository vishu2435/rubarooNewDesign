let iframe=document.querySelector('#body')
let doc=iframe.contentDocument || iframe.contentWindow.document;
function enableEditmode(){

    console.log("Document is ",doc)
    doc.designMode="On"
}
let inEditMode=true
window.onload=()=>{
    console.log("Window loaded")
    enableEditmode()
    doc.body.innerHTML=document.getElementById('inputbody').value
}
function execCmd(command){
    doc.execCommand(command,false,null);
}
function execCommandWithArg(command ,arg){
    doc.execCommand(command,false,arg);
}
function toggleEdit(){
    if(inEditMode){
        doc.designMode="Off"
        inEditMode=false
    }
    else{
        doc.designMode="On"
        inEditMode=true
    }
}

document.getElementById('btnsubmit').addEventListener('click',(event)=>{
    event.preventDefault()
    console.log('I frame Value',doc.body.innerHTML)
    document.getElementById('inputbody').value=doc.body.innerHTML
    document.getElementById('inputForm').submit()

})
