/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/themes/covid/js/navbar.js. */
"use strict"

$(document).ready(function () {
    $(".c-hammenu").click(function () { 
        $(this).toggleClass('js-transformed');
        $(".c-navbar__items").slideToggle(350, "linear");
        $(".c-navbar__items").css("display", "flex");
        console.log("js done");
    });

    window.addEventListener("resize", () => {
        $(".c-navbar__items").removeAttr('style');
    });

});



/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/themes/covid/js/navbar.js. */