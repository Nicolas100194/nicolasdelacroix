const menuHasChildren = document.getElementsByClassName('menu-item-has-children')
const subMenu = document.getElementsByClassName('sub-menu')

function DisplaySubMenu(){
    Array.from(menuHasChildren).forEach(menu =>{
        menu.addEventListener('mouseover', (e)=>{
            subMenu[0].classList.add('sub-menu-display')
            CloseSubMenu()
        })

    })
}

function CloseSubMenu(){
    Array.from(subMenu).forEach(submenu =>{
        submenu.addEventListener('mouseout', (e)=>{
            subMenu[0].classList.remove('sub-menu-display')
        })
    })

}

DisplaySubMenu()