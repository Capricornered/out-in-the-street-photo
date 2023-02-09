// navigation scripts

let nav = document.getElementById("main-menu");
let hamburger = document.getElementById("hamburger");

hamburger.onclick = function() {
    if (nav.classList.contains("out")) {
        nav.classList.remove("out");
    } else {
        nav.classList.add("out");
    }
}

let menuItems = document.getElementsByClassName("menu-item");

for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].onclick = function() {
        nav.classList.remove("out");
    }
}