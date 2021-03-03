"use strict";
document.addEventListener("DOMContentLoaded", function () {
  const hammenu = document.querySelector(".c-hammenu");
  const nav = document.querySelector(".c-navbar__items");

  hammenu.addEventListener("click", function () {
    hammenu.classList.toggle("js-transformed");
    nav.classList.toggle("c-navbar__items--expand");
  });
    
  if (document.querySelector(".toolbar-bar")) {
    document.querySelector(".c-navbar").style.top = "7.8rem";
  }
});



