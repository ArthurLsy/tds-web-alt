const AP = document.getElementById('AP')
const TD = document.getElementById('TD')
const PERSO = document.getElementById('PERSO')

let menu = document.getElementById('menu')

const menu_template = menu

let php_click = 0

function click_TD() {
    menu.remove()
    php_click = 2
    return php_click

}

TD.addEventListener('click', click_TD)

