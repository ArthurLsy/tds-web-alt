var header = document.createElement("header");
var html = document.querySelector('html');
html.appendChild(header)

var head = document.querySelector("head");

var LinkHome = document.createElement('link');
LinkHome.setAttribute("rel","stylesheet");
LinkHome.setAttribute("href","https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,1,200");

head.appendChild(LinkHome)

var a = document.createElement('a');
a.setAttribute('href','/.');
a.setAttribute('id','homes');
a.style.color = "gray";
a.style.marginLeft = "49%";
var span = document.createElement("span");
span.setAttribute("class","material-symbols-outlined");
var home = document.createTextNode("home");
span.appendChild(home);
a.appendChild(span);
header.appendChild(a);
