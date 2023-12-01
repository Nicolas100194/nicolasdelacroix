const iconReply = document.getElementsByClassName('inner-col-icon-reply')

function DisplayReply(){
    Array.from(iconReply).forEach(icon =>{
        icon.addEventListener('click', (e)=>{
            let previousElt = icon.previousElementSibling
            let Reply = previousElt.childNodes[1].childNodes[3]
            Reply.classList.toggle('txt-reply-hidden')
        })
    })
}

DisplayReply()