"use strict";

let main_menu;
let hamb_button;
let close_menu;

function openMainMenu() {
    main_menu.style.transform = `translateX(0vw)`;
}

function closeMainMenu() {
    main_menu.style.transform = `translateX(-100vw)`;
} 

function initNavbar() {
    
    main_menu = document.querySelector("#main-menu");
    hamb_button = document.querySelector("#hamb-button");
    close_menu = document.querySelector("#close-menu");
    
    hamb_button.addEventListener("click", openMainMenu);
    close_menu.addEventListener("click", closeMainMenu);
}

document.addEventListener("DOMContentLoaded", initNavbar);