const AP = document.getElementById('AP')
const TD = document.getElementById('TD')
const PERSO = document.getElementById('PERSO')


let flag_click = 0

function click_TD() {

    flag_click = 2
    return flag_click
    alert('ca fonctionne')

}
TD.addEventListener('click', click_TD)

