"use strict";
document.addEventListener("DOMContentLoaded", function () {
  const hammenu = document.querySelector(".hammenu");
  const nav = document.querySelector(".nvbar__items");

  hammenu.addEventListener("click", function () {
    hammenu.classList.toggle("js-transformed");
    nav.classList.toggle("c-navbar__items--expand");
  });
});
