let btnContact = document.getElementById('menu-item-1001').childNodes[0]

function RedirectForm(){
    btnContact.addEventListener('click', (e)=>{
        window.location.href = '/nicolasdelacroix/#contact-section'
    })
}

RedirectForm()