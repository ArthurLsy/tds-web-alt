const list_tds = [
    {'nom': 'td0', 'url': 'tds/td0/index.html'},
    {'nom': 'td1', 'url': 'tds/td1/index.html'}
]

const tds = document.getElementById('tds')

for (let i=0; i <= list_tds.length; i++) {
    let div = document.createElement('div')
    div.setAttribute('class', 'item')
    let url = '"'+list_tds[i]['url']+'"'
    div.setAttribute('onclick', "window.location=" + url + ";")
    div.appendChild(document.createTextNode(list_tds[i]['nom']))
    tds.appendChild(div)
}

