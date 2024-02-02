const menuMobile = document.getElementById('menu-menu-mobile')
const logoMenuMobile = document.getElementsByClassName('logo-menu-mobile')
const site = document.getElementsByTagName('body')
const menuHasChildrenR = document.getElementsByClassName('menu-item-has-children')
let subMenuR = document.getElementsByClassName('menu-item-939')
subMenuR = subMenuR[0].childNodes[2]


function DisplayMenuMobile(){
    Array.from(logoMenuMobile).forEach(logo =>{
        logo.addEventListener('click', (e)=>{
                menuMobile.classList.toggle('menu-mobile-display')
                site[0].classList.toggle('site-lock')
        })
    })
}

function DisplaySubMenu(){
    Array.from(menuHasChildrenR).forEach(menu =>{
        menu.addEventListener('click', (e)=>{
            subMenuR.classList.toggle('sub-menu-reveal')
            subMenuR.classList.toggle('sub-menu')
        })
    })
}

DisplaySubMenu()
DisplayMenuMobile()